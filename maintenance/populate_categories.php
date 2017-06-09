<?php

namespace GettingStarted;

use Category;

/**
 * Populate GettingStarted Redis sets from categories.  The members of the sets are
 * article IDs.  This is run when GettingStarted is first installed.  The hooks should
 * keep the sets up to date after that.
 */

$IP = getenv( 'MW_INSTALL_PATH' );
if ( $IP === false ) {
	$IP = __DIR__ . '/../../..';
}

require_once "$IP/maintenance/Maintenance.php";

class PopulateCategories extends \Maintenance {
	private $mClient;

	public function __construct() {
		$this->mDescription = 'Populates GettingStarted Redis sets from categories';
	}

	private function populateCategory( Category $category ) {
		$key = RedisCategorySync::makeCategoryKey( $category );
		echo "Key: $key\n";

		$dbr = wfGetDB( DB_SLAVE );
		$res = $dbr->select(
			[ 'page', 'categorylinks' ],
			[ 'page_id' ],
			[
				'cl_from = page_id',
				'cl_to' => $category->getName(),
				'page_is_redirect' => 0,
				'page_namespace' => NS_MAIN,
			],
			__FUNCTION__
		);

		$pages = [];
		foreach ( $res as $row ) {
			$pages[] = $row->page_id;
		}
		if ( !count( $pages ) ) {
			return 0;
		}

		$redis = $this->mClient->multi( \Redis::PIPELINE );

		$batches = array_chunk( $pages, 100 );
		foreach ( $batches as $batch ) {
			array_unshift( $batch, $key );
			call_user_func_array( [ $redis, 'sAdd' ], $batch );
		}
		return $redis->exec() ? count( $pages ) : 0;
	}

	public function execute() {
		$this->mClient = RedisCategorySync::getMaster();
		if ( !$this->mClient ) {
			$this->error( 'Failed to get Redis connection. Exiting.', 1 );
		}

		foreach ( RedisCategorySync::getCategories() as $catName ) {
			echo "Populating category '${catName}' ...\n";
			$cat = Category::newFromName( $catName );
			$count = $this->populateCategory( $cat );
			echo "Updated / refreshed $count pages in category.\n\n";
		}
	}
}

$maintClass = 'GettingStarted\PopulateCategories';
require_once RUN_MAINTENANCE_IF_MAIN;
