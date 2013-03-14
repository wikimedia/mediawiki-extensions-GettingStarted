<?php
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
	 * Get a random set of $numWanted unique articles (NS_MAIN) in the
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

		try {
			$articleIDs = $redis->sRandMember( $key, $numWanted );
		} catch ( RedisException $e ) {
			wfDebugLog( 'GettingStarted', 'Redis exception: ' . $e->getMessage() . "\n" );
			return array();
		}

		if ( !$articleIDs ) {
			return array();
		}

		return Title::newFromIDs( $articleIDs );
	}
}
