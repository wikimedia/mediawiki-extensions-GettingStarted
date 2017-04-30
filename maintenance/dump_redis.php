<?php

namespace GettingStarted;

/**
 * Dumps Redis information for GettingStarted.
 * Intended primarily for debugging in test environments.
 *
 * It may result in a large amount of information in production.
 *
 * Further, --all should not be used in production, since it does
 * a linear scan of the keyspace.
 *
 * @author Ori Livneh <ori@wikimedia.org>
 * @author Matthew Flaschen <mflaschen@wikimedia.org>
 */

$IP = getenv( 'MW_INSTALL_PATH' );
if( $IP === false ) {
	$IP = __DIR__ . '/../../..';
}

require_once "$IP/maintenance/Maintenance.php";

class DumpRedisCategorySync extends \Maintenance {
	public function __construct() {
		parent::__construct();
		$this->addOption( 'all', 'Dump all keys with the prefix; can show keys from old naming schemes and other wikis (e.g. a different language).  Will perform poorly in large Redis databases, so should not be used in production.  Will not include category name', false, false );
		$this->mDescription = 'Dump Redis data used for RedisCategorySync';
	}

	protected function printSet( RedisConnRef $client, $key, $categoryName = null ) {
		if ( $categoryName !== null ) {
			$this->output( "Cat: $categoryName\n" );
		}
		$this->output( "Key: $key\n" );
		$this->output( "===========================================================\n" );
		$members = $client->sMembers( $key );
		$pageCount = 0;
		foreach ( $members as $ind => $el ) {
			$this->output( "$ind) \"$el\"\n" );
			$pageCount++;
		}
		$this->output( "\n" );
		return $pageCount;
	}

	public function execute() {
		$client = RedisCategorySync::getSlave();
		$totalPageCount = 0;
		if ( $this->hasOption( 'all' ) ) {
			$keys = $client->keys( 'RedisCategorySync*' );
			foreach ( $keys as $key ) {
				$totalPageCount += $this->printSet( $client, $key );
			}
		} else {
			$categories = RedisCategorySync::getCategories();
			foreach ( $categories as $catName ) {
				$cat = \Category::newFromName( $catName );
				$key = RedisCategorySync::makeCategoryKey( $cat );
				$totalPageCount += $this->printSet( $client, $key, $catName );
			}
		}
		$this->output( "Total page count: $totalPageCount\n" );
	}
}

$maintClass = 'GettingStarted\DumpRedisCategorySync';
require_once RUN_MAINTENANCE_IF_MAIN;
