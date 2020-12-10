<?php

namespace GettingStarted;

use Category;
use RedisConnRef;
use RedisException;
use Title;
use User;
use WikiPage;

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

	// TODO (phuedx, 2014/07/10): Why are the categories, additions, and
	// removals properties public?

	/** @var array array of relevant categories */
	public static $categories;

	/** @var array arrays of [Category, int] additions to process. */
	public static $additions = [];

	/** @var array arrays of [Category, int] removals to process. */
	public static $removals = [];

	/** @var bool whether or not an update callback has been registered. */
	public static $callbackSet = false;

	/**
	 * Acquire a Redis connection to a slave server.
	 * @return RedisConnRef|bool Redis client or false.
	 */
	public static function getSlave() {
		return self::getClient();
	}

	/**
	 * Acquire a Redis connection to a master server.
	 * @return RedisConnRef|bool Redis client or false.
	 */
	public static function getMaster() {
		return self::getClient( true );
	}

	/**
	 * Acquire a Redis connection.
	 *
	 * @param bool $master Set to true to query a redis master server
	 * @return RedisConnRef|bool Redis client or false.
	 */
	protected static function getClient( $master = false ) {
		global $wgGettingStartedRedis, $wgGettingStartedRedisSlave, $wgGettingStartedRedisOptions;

		if ( !$wgGettingStartedRedis || !extension_loaded( 'redis' ) ) {
			return false;
		}

		$server = ( $master || !$wgGettingStartedRedisSlave )
			? $wgGettingStartedRedis : $wgGettingStartedRedisSlave;

		$pool = \RedisConnectionPool::singleton( $wgGettingStartedRedisOptions );
		return $pool->getConnection( $server );
	}

	/**
	 * @param Category $category
	 * @return string Cache key for a category object.
	 */
	public static function makeCategoryKey( Category $category ) {
		global $wgDBname;
		return implode( ':',
			[ 'RedisCategorySync', 'Category', $wgDBname, md5( $category->getName() ) ]
		);
	}

	/**
	 * Gets relevant categories
	 *
	 * @return array relevant categories
	 */
	public static function getCategories() {
		global $wgGettingStartedCategoriesForTaskTypes;

		if ( self::$categories === null ) {
			self::$categories = [];
			foreach ( $wgGettingStartedCategoriesForTaskTypes as $rawCategory ) {
				// Canonicalize the category name.
				$title = Title::newFromText( $rawCategory );
				if ( !$title || !$title->inNamespace( NS_CATEGORY ) ) {
					continue;
				}
				$category = $title->getDBkey();
				self::$categories[] = $category;
			}
		}

		return self::$categories;
	}

	/**
	 * Tests whether or not the addition/removal of the category to/from the
	 * page is relevant, i.e. whether or not the page should be added/removed
	 * to/from the appropriate set in Redis.
	 *
	 * @param Category $category
	 * @param WikiPage $page
	 * @return bool
	 */
	public static function isUpdateRelevant( Category $category, WikiPage $page ) {
		$categories = self::getCategories();
		return ( in_array( $category->getName(), $categories, true )
			&& $page->getTitle()->getNamespace() === NS_MAIN );
	}

	/**
	 * @param Category $category
	 * @param WikiPage $page
	 * @return true
	 */
	public static function onCategoryAfterPageAdded( Category $category, WikiPage $page ) {
		if ( self::isUpdateRelevant( $category, $page ) ) {
			self::$additions[] = [ $category, $page->getId() ];
			self::setCallback();
		}
		return true;
	}

	/**
	 * @param Category $category
	 * @param WikiPage $page
	 * @return true
	 */
	public static function onCategoryAfterPageRemoved( Category $category, WikiPage $page ) {
		if ( self::isUpdateRelevant( $category, $page ) ) {
			self::$removals[] = [ $category, $page->getId() ];
			self::setCallback();
		}
		return true;
	}

	/**
	 * Removes page from all categories in redis store on delete
	 *
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/ArticleDeleteComplete
	 * @param WikiPage $article The article that was deleted
	 * @param User $user The user that deleted the article
	 * @param string $reason The reason that the article was deleted
	 * @param int $id The ID of the article that was deleted
	 * @return true
	 */
	public static function onArticleDeleteComplete( WikiPage $article, User $user, $reason, $id ) {
		// Currently only storing pages in main namespace
		if ( $article->getTitle()->getNamespace() !== NS_MAIN ) {
			return true;
		}
		$categories = self::getCategories();

		foreach ( $categories as $rawCategory ) {
			self::$removals[] = [
				Category::newFromName( $rawCategory ),
				$id
			];
		}
		self::setCallback();
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
		$dbw->onTransactionCommitOrIdle( function () {
			// Any category updates that happen after this will require an
			// additional run of the callback.
			RedisCategorySync::$callbackSet = false;

			$conn = RedisCategorySync::getMaster();
			if ( !$conn ) {
				wfDebugLog( 'GettingStarted', "Unable to acquire redis connection.\n" );
				return;
			}

			try {
				$redis = $conn->multi( \Redis::PIPELINE );
				while ( RedisCategorySync::$additions ) {
					list( $category, $pageID ) = array_pop( RedisCategorySync::$additions );
					$redis->sAdd( RedisCategorySync::makeCategoryKey( $category ), $pageID );
				}
				while ( RedisCategorySync::$removals ) {
					list( $category, $pageID ) = array_pop( RedisCategorySync::$removals );
					$redis->sRem( RedisCategorySync::makeCategoryKey( $category ), $pageID );
				}
				$redis->exec();
			} catch ( RedisException $e ) {
				wfDebugLog( 'GettingStarted', 'Redis exception: ' . $e->getMessage() . "\n" );
			}
		}, __METHOD__ );
		return true;
	}
}
