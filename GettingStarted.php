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
	'version' => '1',
);

// TODO (mattflaschen, 2013-03-13):
// We're including gettingstartedpage.js in the extension with specific English Wikipedia
// task types embedded in the tour.  Note the steps must be in the same order as the tour.
// So we may as well set these in the extension as well for now.
// This should change when we decide how to generalize the extension to other wikis.

// The images are on-wiki (or Commons) which should make this generalization a
// little easier.

/**
 * @var array Array of arrays.  Each subarray has:
 *  'name' - internal non-displayed name, e.g. 'copyedit'
 *  'descriptionmsg' - message key for description
 *  'category' Category articles are from, e.g. 'All_articles_needing_copy_edit'
 *  'image' (on-wiki or Commons filename without the File:)
 */
$wgGettingStartedTasks = array(
	array(
		'taskName' => 'copyedit',
		// Reusing the messages from the single-page tour for now
		'descriptionMessage' => 'guidedtour-tour-gettingstartedpage-copy-editing-title',
		'category' => 'All_articles_needing_copy_edit',
		'image' => 'Icon-pencil.png'
	),
	array(
		'taskName' => 'clarify',
		'descriptionMessage' => 'guidedtour-tour-gettingstartedpage-clarification-title',
		'category' => 'All_Wikipedia_articles_needing_clarification',
		'image' => 'Icon-wrench.png'
	),
	array(
		'taskName' => 'addlinks',
		'descriptionMessage' => 'guidedtour-tour-gettingstartedpage-add-links-title',
		'category' => 'All_articles_with_too_few_wikilinks',
		'image' => 'Icon-addlinks.png'
	)
);

/**
 * @var array: Array of category names. Articles that are members of
 * these categories are disqualified from being served as tasks.
 * @example array: array( 'Living_people' )
 */
$wgGettingStartedExcludedCategories = array();

// If they signed up with this number of seconds, it's considered recent
// Below default is 30 days.
$wgGettingStartedRecentPeriodInSeconds = 2592000;

/**
 * @var string|bool: redis host to use; false if unset.
 * @example string: '127.0.0.1'
 */
$wgGettingStartedRedis = false;

/**
 * @var array Options to pass to RedisConnectionPool::singleton()
 */
$wgGettingStartedRedisOptions = array();

$wgAutoloadClasses += array(
	'SpecialGettingStarted' => __DIR__ . '/SpecialGettingStarted.php',
	'GettingStartedHooks'   => __DIR__ . '/GettingStarted.hooks.php',
	'RedisCategorySync'     => __DIR__ . '/RedisCategorySync.php',
	'CategoryRoulette'      => __DIR__ . '/CategoryRoulette.php',
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

$wgResourceModules[ 'schema.GettingStartedNewLandingPage' ] = array(
	'class'    => 'ResourceLoaderSchemaModule',
	'schema'   => 'GettingStarted',
	'revision' => 5320430,
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

// ext.gettingstarted.openTask is every page site-wide.
$wgResourceModules[ 'ext.gettingstarted.openTask' ] = array(
	'scripts' => 'ext.gettingstarted.openTask.js',
	'dependencies' => array(
		'jquery.cookie',
		'jquery.json',
		'mediawiki.Title',
		'jquery.mwExtension', // $.escapeRE
		'mediawiki.user',
		'ext.postEdit',
		'schema.GettingStartedNewLandingPage',
	),
	'messages' => array(
		'red-link-title'
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
$wgHooks[ 'CategoryAfterPageAdded' ][] = 'RedisCategorySync::onCategoryAfterPageAdded';
$wgHooks[ 'CategoryAfterPageRemoved' ][] = 'RedisCategorySync::onCategoryAfterPageRemoved';
$wgHooks[ 'ListDefinedTags' ][] = 'GettingStartedHooks::onListDefinedTags';
$wgHooks[ 'MakeGlobalVariablesScript' ][] = 'GettingStartedHooks::onMakeGlobalVariablesScript';
$wgHooks[ 'BeforeCreateEchoEvent' ][] = 'GettingStartedHooks::onBeforeCreateEchoEvent';
$wgHooks[ 'EchoGetDefaultNotifiedUsers' ][] = 'GettingStartedHooks::onEchoGetDefaultNotifiedUsers';
$wgHooks[ 'ConfirmEmailComplete' ][] = 'GettingStartedHooks::onConfirmEmailComplete';
