<?php

/**
 * Dumps Redis information for GettingStarted.
 * Intended primarily for debugging in test environments.
 *
 * It may result in a large amount of information in production.
 *
 * @author Ori Livneh <ori@wikimedia.org>
 * @author Matthew Flaschen <mflaschen@wikimedia.org>
 */

$IP = getenv( 'MW_INSTALL_PATH' );
if( $IP === false ) {
	$IP = __DIR__ . '/../../..';
}

require_once "$IP/maintenance/Maintenance.php";

class DumpRedisCategorySync extends Maintenance {
	public function __construct() {
		parent::__construct();
		$this->addOption( 'all', 'Dump all keys with the prefix; can show keys from old naming schemes and other wikis (e.g. a different language), but can perform poorly in large Redis databases.  Will not include category name', false, false );
		$this->mDescription = 'Dump Redis data used for RedisCategorySync';
	}

	protected function printSet( $client, $key, $categoryName = null ) {
		if ( $categoryName !== null ) {
			$this->output( "Cat: $categoryName\n" );
		}
		$this->output( "Key: $key\n" );
		$this->output( "===========================================================\n" );
		$members = $client->sMembers( $key );
		foreach ( $members as $ind => $el ) {
			$this->output( "$ind) \"$el\"\n" );
		}
		$this->output( "\n" );
	}

	public function execute() {
		$client = RedisCategorySync::getClient();
		if ( $this->hasOption( 'all' ) ) {
			$keys = $client->keys( 'RedisCategorySync*' );
			foreach ( $keys as $key ) {
				$this->printSet( $client, $key );
			}
		} else {
			$categories = RedisCategorySync::getCategories();
			foreach ( $categories as $catName ) {
				$cat = Category::newFromName( $catName );
				$key = RedisCategorySync::makeCategoryKey( $cat );
				$this->printSet( $client, $key, $catName );
			}
		}
	}
}

$maintClass = 'DumpRedisCategorySync';
require_once( RUN_MAINTENANCE_IF_MAIN );
