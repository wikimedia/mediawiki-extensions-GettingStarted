<?php

if ( count( $wgGettingStartedCategoriesForTaskTypes ) > 0 ) {
	$path = __DIR__ . '/populate_categories.php';

	// Don't put this in a function, or Maintenance::shouldExecute will return false
	require_once "$path";
}
