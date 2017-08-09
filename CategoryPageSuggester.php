<?php

namespace GettingStarted;

// See PageSuggester for API documentation
class CategoryPageSuggester implements PageSuggester {
	/** @var RedisConnRef */
	protected $redisConnection;

	/** @var Category */
	protected $category;

	/**
	 * Constructs a CategoryPageSuggester that uses the given category
	 *
	 * @param \RedisConnRef $redisConnection
	 * @param \Category $category Category to use for suggestions
	 */
	public function __construct( \RedisConnRef $redisConnection, \Category $category ) {
		$this->redisConnection = $redisConnection;
		$this->category = $category;
	}

	// $offset is ignored because it does not make sense when randomly pulling articles
	// out of Redis.
	public function getArticles( $count, $offset ) {
		$key = RedisCategorySync::makeCategoryKey( $this->category );

		if ( !$this->redisConnection ) {
			wfDebugLog( 'GettingStarted', "Unable to acquire redis connection.  Returning early.\n" );
			return [];
		}

		try {
			$randomArticleIDs = $this->redisConnection->sRandMember( $key, $count );
		} catch ( RedisException $e ) {
			wfDebugLog( 'GettingStarted', 'Redis exception: ' . $e->getMessage() . ".  Returning early.\n" );
			return [];
		}

		if ( is_array( $randomArticleIDs ) ) {
			return \Title::newFromIDs( $randomArticleIDs );
		} else {
			wfDebugLog( 'GettingStarted', 'Redis returned a non-array value, possibly an error.' );
			return [];
		}
	}

	public function isRandomized() {
		return true;
	}
}
