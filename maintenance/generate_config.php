<?php

/**
 * Generates files that contain values for the
 * wgGettingStartedCategoriesForTaskTypes and
 * wgGettingStartedExcludedCategories configuration variables from specific
 * Wikidata entities.
 *
 * @author Sam Smith <samsmith@wikimedia.org>
 */

namespace GettingStarted;

use Title;

$IP = getenv( 'MW_INSTALL_PATH' );
if( $IP === false ) {
	$IP = __DIR__ . '/../../..';
}

require_once "$IP/maintenance/Maintenance.php";

class GenerateConfig extends \Maintenance {

	const WG_GETTING_STARTED_CATEGORIES_FOR_TASK_TYPES_FILE = 'wgGettingStartedCategoriesForTaskTypes.php';
	const WG_GETTING_STARTED_EXCLUDED_CATEGORIES_FILE = 'wgGettingStartedExcludedCategories.php';

	const QID_CATEGORY_LIVING_PEOPLE = 'Q5312304';

	/**
	 * @var array An associative array of which the key is the task type
	 * (see $wgGettingStartedTasks) and the value is the QID of a
	 * Wikidata entity.
	 */
	private $qidsForTaskTypes = array(
		'copyedit' => 'Q9125773', // Category:Wikipedia articles needing copy edit
		'clarify' => 'Q8235653', // Category:All Wikipedia articles needing clarification
		'addlinks' => 'Q8235714', // Category:All articles with too few wikilinks
	);

	public function __construct() {
		$this->mDescription = 'Generates files that contain the values for the wgGettingStartedCategoriesForTaskTypes and wgGettingStartedExcludedCategories configuration variables from specific Wikidata entities.';

		// TODO (phuedx, 2014-03-10) Extend addOption to include a
		// default value, which could be included in the output of
		// $ php /path/to/maintenance/script.php --help.
		$this->addOption( 'dbnames', 'Location of the list of DB names to filter by', false, true );

	}

	public function execute() {
		$dbnames = $this->getOption( 'dbnames' );
		if ( $dbnames ) {
			if ( !is_file( $dbnames ) || !is_readable( $dbnames ) ) {
				$this->error( "{$dbnames} isn't a file or can't be read.", 1 );
			}

			$dbnames = file( $dbnames, FILE_IGNORE_NEW_LINES );
		}

		$this->generateWgGettingStartedCategoriesForTaskTypesConfig( $dbnames );
		$this->generateWgGettingStartedExcludedCategoriesConfig( $dbnames );
	}

	private function generateWgGettingStartedCategoriesForTaskTypesConfig( $dbnames ) {
		$config = array();
		foreach ( $this->qidsForTaskTypes as $task => $qid ) {
			$sitelinks = $this->getSitelinksByQID( $qid, $dbnames );
			foreach ( $sitelinks as $dbname => $categoryName ) {
				if ( !isset( $config[ $dbname ] ) ) {
					$config[ $dbname ] = array();
				}

				$config[ $dbname ][ $task ] = $categoryName;
			}
		}

		$this->writeConfig( $config, self::WG_GETTING_STARTED_CATEGORIES_FOR_TASK_TYPES_FILE );
	}

	private function generateWgGettingStartedExcludedCategoriesConfig( $dbnames ) {
		$sitelinks = $this->getSitelinksByQID( self::QID_CATEGORY_LIVING_PEOPLE, $dbnames );
		$this->writeConfig( $sitelinks, self::WG_GETTING_STARTED_EXCLUDED_CATEGORIES_FILE );
	}

	private function writeConfig( $config, $filename ) {
		$contents = var_export( $config, true );
		if ( !file_put_contents( $filename, $contents ) ) {
			$this->error( "Couldn't write to {$filename}.", 2 );
		}
	}

	private function getSitelinksByQID( $qid, $dbnames ) {
		$url = "https://www.wikidata.org/w/api.php?format=json&action=wbgetentities&props=sitelinks&ids={$qid}";
		$responseBodyRaw = file_get_contents( $url );
		$responseBody = json_decode( $responseBodyRaw, true );
		$entity = $responseBody[ 'entities' ][ $qid ];
		$result = array();

		foreach ( $entity[ 'sitelinks' ] as $dbname => $sitelink ) {
			if ( !$dbnames || in_array( $dbname, $dbnames ) ) {
				$result[ $dbname ] = $sitelink[ 'title' ];
			}
		}

		return $result;
	}
}

$maintClass = 'GettingStarted\GenerateConfig';
require_once( RUN_MAINTENANCE_IF_MAIN );