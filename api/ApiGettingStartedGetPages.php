<?php

namespace GettingStarted;

use ApiBase, Category, Title;

class ApiGettingStartedGetPages extends ApiBase {
	const MAX_ATTEMPTS = 100;

	public function execute() {
		global $wgGettingStartedTasks;

		$result = $this->getResult();

		// For PageFilter and specifically userCan( 'edit' )
		$user = $this->getUser();

		$taskName = $this->getParameter( 'taskname' );
		$excludedTitle = Title::newFromText( $this->getParameter( 'excludedTitle' ) );
		$count = $this->getParameter( 'count' );

		if ( !isset( $wgGettingStartedTasks[$taskName] ) ) {
			$this->dieUsage( 'Invalid value for "taskname"', 'gettingstarted-invalidtaskname' );
		}

		$category = Category::newFromName( $wgGettingStartedTasks[$taskName]['category'] );
		$pageFilter = new PageFilter( $user, $excludedTitle );

		$titles = self::getRandomArticles( $count, $category, $pageFilter );
		$data = array(
			'titles' => array()
		);
		foreach ( $titles as $title ) {
			$data['titles'][] = $title->getPrefixedText();
		}
		$result->setIndexedTagName( $data['titles'], 'title' );
		$result->addValue( null, $this->getModuleName(), $data );
	}

	/**
	 * Get a random set of $numWanted unique pages in the
	 * category. If fewer than $numWanted pages exist in category,
	 * return as many as are available. It is up to the caller to decide
	 * how to handle the deficit.
	 *
	 * @param int $numWanted Number of unique pages to get.
	 * @param Category $category category to choose from
	 * @param PageFilter $pageFilter filter than can approve or reject a page
	 * @return array Set of $numWanted unique Title objects (or however many
	 *   were available, if the desired count was not satisfiable).
	 */
	protected function getRandomArticles( $numWanted, Category $category, PageFilter $pageFilter ) {
		$key = RedisCategorySync::makeCategoryKey( $category );

		$redis = RedisCategorySync::getClient();
		if ( !$redis ) {
			wfDebugLog( 'GettingStarted', "Unable to acquire redis connection.\n" );
			return array();
		}

		// Map article ID to Title.  At the end, we simply return a non-associative array of Titles.
		// However, sRandMember can return the same ID more than once.  This allows us to easily
		// avoid these duplicates with array_key_exists.
		$titles = array();

		$attempts = 0;
		while ( count( $titles ) < $numWanted ) {
			$attempts++;
			// Sanity check to prevent calling srand or filter too many times
			if ( $attempts >= self::MAX_ATTEMPTS ) {
				wfDebugLog( 'GettingStarted', 'Returning early after ' . self::MAX_ATTEMPTS . ".\n" );
				return array_values( $titles );
			}
			try {
				$randomArticleID = $redis->sRandMember( $key );
				if ( !array_key_exists( $randomArticleID, $titles ) ) {
					$title = Title::newFromID( $randomArticleID );
					// Null means the title no longer exists, possibly due to bug 56044
					if ( $title !== null && $pageFilter->isAllowedPage( $title ) ) {
						$titles[$randomArticleID] = $title;
					}
				}
			} catch ( RedisException $e ) {
				wfDebugLog( 'GettingStarted', 'Redis exception: ' . $e->getMessage() . ".  Returning early.\n" );
				return array_values( $titles );
			}
		}

		return array_values( $titles );
	}

	public function getDescription() {
		return array(
			'This API is for getting a list of one or more pages related to a particular GettingStarted task.',
		);
	}

	public function getParamDescription() {
		return array(
			'taskname' => 'Task name, for example, "copyedit"',
			'excludedTitle' => 'Full title of a page to exclude from the list',
			'count' => 'Requested count; will attempt to fetch this exact number, but may fetch fewer if no more are found after multiple attempts'
		);
	}

	public function getAllowedParams() {
		return array(
			'taskname' => array(
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_REQUIRED => true,
			),
			'excludedTitle' => array(
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_REQUIRED => false,
			),
			'count' => array(
				ApiBase::PARAM_TYPE => 'integer',
				ApiBase::PARAM_REQUIRED => true,
			),
		);
	}

	public function getExamples() {
		return array(
			'api.php?action=gettingstartedgetpages&taskname=copyedit&excludedTitle=Earth&count=1',
		);
	}
}
