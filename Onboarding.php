<?php
if ( !defined( 'MEDIAWIKI' ) ) die( 'Invalid entry point.' );

$wgExtensionCredits[ 'specialpage' ][] = array(
	'path' => __FILE__,
	'name' => 'Onboarding',
	'author' => array(
		'Munaf Assaf',
		'S Page'
	),
	'url' => 'https://www.mediawiki.org/wiki/Extension:Onboarding',
	'descriptionmsg' => 'gettingstarted-desc',
	'version' => '0.0.1',
);

$wgAutoloadClasses[ 'SpecialGettingStarted' ] = __DIR__ . '/SpecialGettingStarted.php';

$wgExtensionMessagesFiles[ 'Onboarding' ] = __DIR__ . '/Onboarding.i18n.php';
$wgExtensionMessagesFiles[ 'OnboardingAlias' ] = __DIR__ . '/Onboarding.alias.php';

$wgSpecialPages[ 'GettingStarted' ] = 'SpecialGettingStarted';
$wgSpecialPageGroups[ 'GettingStarted' ] = 'users';

// Modules
$wgResourceModules[ 'ext.onboarding.gettingStarted' ] = array(
	'styles' => 'resources/ext.onboarding.css',
	'dependencies' => array(
		'schema.OpenTask'	// defined in E3Experiments
	),
	'position' => 'top',

	'localBasePath' => __DIR__,
	'remoteExtPath' => 'Onboarding',
);
