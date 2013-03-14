<?php
/**
 * Maintains sets in redis representing page IDs of NS_MAIN pages in
 * configured categories.
 *
 * FIXME(ori-l, 2012-03-06): Use RedisConnectionPool
 *
 * See Redis requirements in README.
 *
 * Sample extension configuration:
 * <code>
 * $wgGettingStartedRedis = '127.0.0.1';
 * </code>
 */
class RedisCategorySync {
	/** @var array: array of relevant categories */
	public static $categories;

	/** @var array: arrays of [Category, WikiPage] additions to process. **/
	public static $additions = array();

	/** @var array: arrays of [Category, WikiPage] removals to process. **/
	public static $removals = array();

	/**
	 * Acquire a Redis connection.
	 * @return Redis|bool Redis client or false.
	 */
	public static function getClient() {
		global $wgGettingStartedRedis;

		if ( !$wgGettingStartedRedis || !extension_loaded( 'redis' ) ) {
			return false;
		}

		$redis = new Redis();
		try {
			$redis->connect( $wgGettingStartedRedis, 6379, 0.1 );
		} catch ( RedisException $e ) {
			return false;
		}
		return $redis;
	}

	/**
	 * @param Category $category
	 * @return string Cache key for a category object.
	 */
	public static function makeCategoryKey( Category $category ) {
		global $wgDBname;
		return join( ':', array( __CLASS__, 'Category', $wgDBname, md5( $category->getName() ) ) );
	}

	/**
	 * Gets relevant categories
	 *
	 * @return array relevant categories
	 */
	public static function getCategories() {
		global $wgGettingStartedTasks;

		if ( self::$categories === null ) {
			self::$categories = array();
			foreach ( $wgGettingStartedTasks as $task ) {
				self::$categories[] = $task['category'];
			}
		}

		return self::$categories;
	}

	/**
	 * @param Category $category
	 * @param WikiPage $page
	 * @return bool If category / page pair should be tracked in redis.
	 */
	public static function isUpdateRelevant( Category $category, WikiPage $page ) {
		$categories = self::getCategories();
		return ( in_array( $category->getName(), $categories, true )
			&& $page->getTitle()->getNamespace() === NS_MAIN );
	}

	/**
	 * @param Category $category
	 * @param WikiPage $page
	 */
	public static function onCategoryAfterPageAdded( Category $category, WikiPage $page ) {
		if ( self::isUpdateRelevant( $category, $page ) ) {
			self::$additions[] = array( $category, $page );
		}
		return true;
	}

	/**
	 * @param Category $category
	 * @param WikiPage $page
	 */
	public static function onCategoryAfterPageRemoved( Category $category, WikiPage $page ) {
		if ( self::isUpdateRelevant( $category, $page ) ) {
			self::$removals[] = array( $category, $page );
		}
		return true;
	}

	/**
	 * @param LinksUpdate &$linksUpdate
	 */
	public static function onLinksUpdateComplete( $linksUpdate ) {
		if ( !count( self::$additions ) && !count( self::$removals ) ) {
			return true;
		}

		$conn = self::getClient();
		if ( !$conn ) {
			wfDebugLog( 'GettingStarted', "Unable to acquire redis connection.\n" );
			return true;
		}

		try {
			$redis = $conn->multi( Redis::PIPELINE );
			foreach( self::$additions as $addition ) {
				list( $category, $page ) = $addition;
				$redis->sAdd( self::makeCategoryKey( $category ), $page->getId() );
			}
			foreach( self::$removals as $removal ) {
				list( $category, $page ) = $removal;
				$redis->sRem( self::makeCategoryKey( $category ), $page->getId() );
			}
			$redis->exec();
		} catch ( RedisException $e ) {
			wfDebugLog( 'GettingStarted', 'Redis exception: ' . $e->getMessage() . "\n" );
		}

		return true;
	}
}
