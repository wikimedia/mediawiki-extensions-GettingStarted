<?php

namespace GettingStarted;

use Title;

/**
 * Helper class for retrieving random pages from a category.
 * See Redis requirements in README.
 *
 * Sample usage:
 * <code>
 * $category = Category::newFromName( 'All_articles_needing_copy_edit' );
 * $roulette = new CategoryRoulette( $category );
 * $pages = $roulette->getRandomArticles( 3 );
 * </code>
 *
 */
class CategoryRoulette {

	const MAX_ATTEMPTS = 100;

	/** @var Category **/
	public $category = null;

	/**
	 * Constructor.
	 * @param $category Category.
	 */
	public function __construct( $category ) {
		$this->category = $category;
	}

	/**
	 * Get a random set of $numWanted unique pages in the
	 * category. If fewer than $numWanted pages exist in category,
	 * return as many as are available. It is up to the caller to decide
	 * how to handle the deficit.
	 *
	 * @param $numWanted int Number of unique pages to get.
	 * @return array Set of $numWanted unique pages (or however many
	 *   were available, if the desired count was not satisfiable).
	 */
	public function getRandomArticles( $numWanted ) {
		$key = RedisCategorySync::makeCategoryKey( $this->category );

		$redis = RedisCategorySync::getClient();
		if ( !$redis ) {
			wfDebugLog( 'GettingStarted', "Unable to acquire redis connection.\n" );
			return array();
		}

		$articleIDs = array();
		$attempts = 0;
		while ( count( $articleIDs ) < $numWanted ) {
			$attempts++;
			// Sanity check to prevent calling srand too many times
			if ( $attempts >= self::MAX_ATTEMPTS ) {
				wfDebugLog( 'GettingStarted', 'Returning early after ' . self::MAX_ATTEMPTS . ".\n" );
				return Title::newFromIDs( $articleIDs );
			}
			try {
				$randomID = $redis->sRandMember( $key );
				if ( !in_array( $randomID, $articleIDs, true ) ) {
					$articleIDs[] = $randomID;
				}
			} catch ( RedisException $e ) {
				wfDebugLog( 'GettingStarted', 'Redis exception: ' . $e->getMessage() . ".  Returning early.\n" );
				return Title::newFromIDs( $articleIDs );
			}
		}

		return Title::newFromIDs( $articleIDs );
	}
}
