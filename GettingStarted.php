<?php
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'GettingStarted' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['GettingStarted'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for GettingStarted extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the GettingStarted extension requires MediaWiki 1.29+' );
}
