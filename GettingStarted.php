<?php
if ( !defined( 'MEDIAWIKI' ) ) die( 'Invalid entry point.' );

$wgExtensionCredits[ 'specialpage' ][] = array(
	'path' => __FILE__,
	'name' => 'GettingStarted',
	'author' => array(
		'Munaf Assaf',
		'S Page',
		'Matt Flaschen'
	),
	'url' => 'https://www.mediawiki.org/wiki/Extension:GettingStarted',
	'descriptionmsg' => 'gettingstarted-desc',
	'version' => '0.0.1',
);

$wgAutoloadClasses[ 'SpecialGettingStarted' ] = __DIR__ . '/SpecialGettingStarted.php';

$wgExtensionMessagesFiles[ 'GettingStarted' ] = __DIR__ . '/GettingStarted.i18n.php';
$wgExtensionMessagesFiles[ 'GettingStartedAlias' ] = __DIR__ . '/GettingStarted.alias.php';

$wgSpecialPages[ 'GettingStarted' ] = 'SpecialGettingStarted';
$wgSpecialPageGroups[ 'GettingStarted' ] = 'users';

// Modules
$wgResourceModules[ 'ext.gettingstarted' ] = array(
	'styles' => 'resources/ext.gettingstarted.css',
	'dependencies' => array(
		'schema.OpenTask'	// defined in E3Experiments
	),
	'position' => 'top',

	'localBasePath' => __DIR__,
	'remoteExtPath' => 'GettingStarted',
);
