<?php

namespace GettingStarted;

use ApiBase;
use Title;

class ApiGettingStartedGetPages extends \ApiQueryGeneratorBase {
	private const MAX_SUGGESTER_CALLS = 10;

	public function __construct( \ApiQuery $queryModule, $moduleName ) {
		parent::__construct( $queryModule, $moduleName, 'gsgp' );
	}

	public function execute() {
		$result = $this->getResult();

		$data = [
			'titles' => []
		];

		$titles = $this->getArticles();

		foreach ( $titles as $title ) {
			$data['titles'][] = $title->getPrefixedText();
		}

		$result->setIndexedTagName( $data['titles'], 'title' );
		$result->addValue( null, $this->getModuleName(), $data );
	}

	public function executeGenerator( $resultPageSet ) {
		$resultPageSet->populateFromTitles( $this->getArticles() );
	}

	/**
	 * Get a set of 'count' unique pages, choosing the correct PageSuggester and
	 * PageFilter based on 'taskname', and using a given base/excluded title (if
	 * specified by 'excludedtitle').
	 *
	 * If fewer than 'count' pages acceptable suggestions are available, raturn as
	 * many as are available. It is up to the caller to decide how to handle the deficit.
	 *
	 * @return array Array of 'count' unique Title objects (or however many were
	 *  available, if the desired count was not satisfiable).
	 */
	protected function getArticles() {
		$user = $this->getUser();
		$taskName = $this->getParameter( 'taskname' );
		$excludedTitle = Title::newFromText( $this->getParameter( 'excludedtitle' ) );
		$numWanted = $this->getParameter( 'count' );

		$suggester = PageSuggesterFactory::getPageSuggester(
			$taskName, $this->getRequest(), $excludedTitle
		);
		if ( $suggester === null ) {
			$this->dieWithError(
				'apierror-gettingstarted-nosuggester', 'gettingstarted_no_suggester'
			);
		}
		$pageFilter = PageFilterFactory::getPageFilter( $taskName, $user, $excludedTitle );

		// We either retry or push the offset, depending on whether the suggester is randomized
		$totalResultCount = 0;
		$attempts = 0;
		$offset = 0;
		$isRandomized = $suggester->isRandomized();
		$filteredTitles = [];

		do {
			$unfilteredTitles = $suggester->getArticles( $numWanted - $totalResultCount, $offset );

			$newFilteredTitles = array_filter( $unfilteredTitles,
				[ $pageFilter, 'isAllowedPage' ]
			);
			$newFilteredTitles = array_udiff( $newFilteredTitles, $filteredTitles,
				static function ( $t1, $t2 ) {
					return $t1->getArticleID() - $t2->getArticleID();
				}
			);
			$filteredTitles = array_merge( $filteredTitles, $newFilteredTitles );

			$totalResultCount = count( $filteredTitles );

			if ( !$isRandomized ) {
				$numUnfilteredTitles = count( $unfilteredTitles );
				$prevOffset = $offset;
				$offset += $numUnfilteredTitles;
			}
			$attempts++;
		} while (
			$totalResultCount < $numWanted &&
			$attempts < self::MAX_SUGGESTER_CALLS &&
			(
				$isRandomized ||

				// If it's not randomized, only continue if some progress is being made
				$offset !== $prevOffset
			)
		);

		return $filteredTitles;
	}

	public function getAllowedParams() {
		return [
			'taskname' => [
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_REQUIRED => true,
			],
			'excludedtitle' => [
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_REQUIRED => false,
			],
			'count' => [
				ApiBase::PARAM_TYPE => 'integer',
				ApiBase::PARAM_REQUIRED => true,
			],
		];
	}

	public function getExamplesMessages() {
		return [
			'action=query&list=gettingstartedgetpages&gsgptaskname=copyedit' .
				'&gsgpexcludedtitle=Earth&gsgpcount=1' => 'apihelp-query+gettingstartedgetpages-example-1',
		];
	}
}
