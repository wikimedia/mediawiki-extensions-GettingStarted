<?php
if ( !defined( 'MEDIAWIKI' ) ) die( 'Invalid entry point.' );

$wgExtensionCredits[ 'specialpage' ][] = array(
	'path' => __FILE__,
	'name' => 'GettingStarted',
	'author' => array(
		'Munaf Assaf',
		'Matt Flaschen',
		'S Page',
	),
	'url' => 'https://www.mediawiki.org/wiki/Extension:GettingStarted',
	'descriptionmsg' => 'gettingstarted-desc',
	'version' => '0.0.1',
);

$wgAutoloadClasses += array(
	'SpecialGettingStarted' => __DIR__ . '/SpecialGettingStarted.php',
	'GettingStartedHooks' => __DIR__ . '/GettingStarted.hooks.php'
);

$wgExtensionMessagesFiles[ 'GettingStarted' ] = __DIR__ . '/GettingStarted.i18n.php';
$wgExtensionMessagesFiles[ 'GettingStartedAlias' ] = __DIR__ . '/GettingStarted.alias.php';

$wgSpecialPages[ 'GettingStarted' ] = 'SpecialGettingStarted';
$wgSpecialPageGroups[ 'GettingStarted' ] = 'users';

// Modules

$gettingStartedModuleInfo = array(
	'localBasePath' => __DIR__ . '/resources',
	'remoteExtPath' => 'GettingStarted/resources',
);

$wgResourceModules[ 'schema.GettingStarted' ] = array(
	'class'    => 'ResourceLoaderSchemaModule',
	'schema'   => 'GettingStarted',
	'revision' => 5285779,
);

$wgResourceModules['ext.guidedTour.tour.gettingstartedpage'] = array(
	'scripts' => 'tours/gettingstartedpage.js',
	'dependencies' => 'ext.guidedTour.lib',
	'messages' => array(
		'vector-view-edit',
		'guidedtour-tour-gettingstartedpage-copy-editing-title',
		'guidedtour-tour-gettingstartedpage-copy-editing-description',
		'guidedtour-tour-gettingstartedpage-clarification-title',
		'guidedtour-tour-gettingstartedpage-clarification-description',
		'guidedtour-tour-gettingstartedpage-add-links-title',
		'guidedtour-tour-gettingstartedpage-add-links-description',
	),
) + $gettingStartedModuleInfo;

// Every page site-wide
$wgResourceModules[ 'ext.gettingstarted.openTask' ] = array(
	'scripts' => 'ext.gettingstarted.openTask.js',
	'dependencies' => array(
		'jquery.cookie',
		'jquery.json',
		'mediawiki.Title',
		'mediawiki.user',
		'ext.Experiments.lib',
		'ext.postEdit',
		'schema.GettingStarted',
	)
) + $gettingStartedModuleInfo;

// This loads on both account creation and the special page, even if JS is off
$wgResourceModules[ 'ext.gettingstarted.styles' ] = array(
	'styles' => 'ext.gettingstarted.css',
) + $gettingStartedModuleInfo;

// This runs on both account creation and the special page
$wgResourceModules[ 'ext.gettingstarted' ] = array(
	'scripts' => 'ext.gettingstarted.js',
	'dependencies' => array(
		'mediawiki.api',
		'user.options',
		'ext.guidedTour.tour.gettingstartedpage',
	),
) + $gettingStartedModuleInfo;

// This is the version that runs on account creation.
$wgResourceModules[ 'ext.gettingstarted.accountcreation' ] = array(
	'scripts' => 'ext.gettingstarted.accountcreation.js',
	'messages' => array(
		'gettingstarted-welcomesiteuser', // XXX (mattflaschen, 2012-12-12): This is a workaround until we move this into core, at which point it can be done server-side.
		'gettingstarted-return',
	),
	'dependencies' => array(
		'ext.gettingstarted',
		'mediawiki.util',
	),
	'position' => 'top',
) + $gettingStartedModuleInfo;

$wgHooks[ 'BeforePageDisplay' ][] = 'GettingStartedHooks::onBeforePageDisplay';
$wgHooks[ 'BeforeWelcomeCreation' ][] = 'GettingStartedHooks::onBeforeWelcomeCreation';
$wgHooks[ 'RecentChange_save' ][] = 'GettingStartedHooks::onRecentChange_save';
$wgHooks[ 'ListDefinedTags' ][] = 'GettingStartedHooks::onListDefinedTags';
