<?php
/**
 * Maintains sets in redis representing page IDs of NS_MAIN pages in
 * configured categories.
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

	/** @var bool: whether or not an update callback has been registered. **/
	public static $callbackSet = false;


	/**
	 * Acquire a Redis connection.
	 * @return Redis|bool Redis client or false.
	 */
	public static function getClient() {
		global $wgGettingStartedRedis, $wgGettingStartedRedisOptions;

		if ( !$wgGettingStartedRedis || !extension_loaded( 'redis' ) ) {
			return false;
		}

		$pool = RedisConnectionPool::singleton( $wgGettingStartedRedisOptions );
		return $pool->getConnection( $wgGettingStartedRedis );
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
			self::setCallback();
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
			self::setCallback();
		}
		return true;
	}

	/**
	 * Register a callback function that will perform all redis updates once
	 * the current transaction completes.
	 * @return bool True if callback was set, false if it was set already.
	 */
	public static function setCallback() {
		if ( self::$callbackSet ) {
			return false;
		}
		self::$callbackSet = true;

		$dbw = wfGetDB( DB_MASTER );
		$dbw->onTransactionIdle( function () {
			// Any category updates that happen after this will require an
			// additional run of the callback.
			RedisCategorySync::$callbackSet = false;

			$conn = RedisCategorySync::getClient();
			if ( !$conn ) {
				wfDebugLog( 'GettingStarted', "Unable to acquire redis connection.\n" );
				return;
			}

			try {
				$redis = $conn->multi( Redis::PIPELINE );
				while ( RedisCategorySync::$additions ) {
					list( $category, $page ) = array_pop( RedisCategorySync::$additions );
					$redis->sAdd( RedisCategorySync::makeCategoryKey( $category ), $page->getId() );
				}
				while ( RedisCategorySync::$removals ) {
					list( $category, $page ) = array_pop( RedisCategorySync::$removals );
					$redis->sRem( RedisCategorySync::makeCategoryKey( $category ), $page->getId() );
				}
				$redis->exec();
			} catch ( RedisException $e ) {
				wfDebugLog( 'GettingStarted', 'Redis exception: ' . $e->getMessage() . "\n" );
			}
		} );
		return true;
	}
}
