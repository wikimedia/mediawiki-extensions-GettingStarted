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

// TODO (mattflaschen, 2013-04-24):
//
// There are no longer any task types embedded in the tour, so we may be able to pull this
// config out of the extension.
//
// The images are on-wiki (or Commons) which should make this generalization a
// little easier.

/**
 * @var array Associative array of arrays.  The key is an internal non-displayed name, such as 'copyedit'
 *
 *  Each value array has:
 *  'mainDescription' - message key for main description on Special:GettingStarted
 *  'secondaryDescription' - message key for secondary description on Special:GettingStarted
 *  'toolbarDescription' - message key for primary description on toolbar
 *  'toolbarTryAnotherTitle' - message key for title text of 'Try Another' link
 *  'category' Category articles are from, e.g. 'All_articles_needing_copy_edit'
 *  'image' (on-wiki or Commons filename without the File:)
 */
$wgGettingStartedTasks = array(
	'copyedit' => array(
		'mainDescription' => 'gettingstarted-task-copyedit-main-description',
		'secondaryDescription' => 'gettingstarted-task-copyedit-secondary-description',
		'toolbarDescription' => 'gettingstarted-task-copyedit-toolbar-description',
		'toolbarTryAnotherTitle' => 'gettingstarted-task-copyedit-toolbar-try-another-title',
		'category' => 'All_articles_needing_copy_edit',
		'image' => 'Icon-pencil.png'
	),
	'clarify' => array(
		'mainDescription' => 'gettingstarted-task-clarify-main-description',
		'secondaryDescription' => 'gettingstarted-task-clarify-secondary-description',
		'toolbarDescription' => 'gettingstarted-task-clarify-toolbar-description',
		'toolbarTryAnotherTitle' => 'gettingstarted-task-clarify-toolbar-try-another-title',
		'category' => 'All_Wikipedia_articles_needing_clarification',
		'image' => 'Icon-wrench.png'
	),
	'addlinks' => array(
		'mainDescription' => 'gettingstarted-task-addlinks-main-description',
		'secondaryDescription' => 'gettingstarted-task-addlinks-secondary-description',
		'toolbarDescription' => 'gettingstarted-task-addlinks-toolbar-description',
		'toolbarTryAnotherTitle' => 'gettingstarted-task-addlinks-toolbar-try-another-title',
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
$wgGettingStartedRedisOptions = array(
	'serializer' => 'none',
);

/**
 * Is the A/B test enabled?
 */
$wgGettingStartedRunTest = false;

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

$gettingStartedSchemaModuleName = 'schema.' . GettingStartedHooks::SCHEMA_NAME;

$wgResourceModules[ $gettingStartedSchemaModuleName ] = array(
	'class'    => 'ResourceLoaderSchemaModule',
	'schema'   => GettingStartedHooks::SCHEMA_NAME,
	'revision' => GettingStartedHooks::SCHEMA_REV_ID,
);

$wgResourceModules['ext.guidedTour.tour.gettingstartedtasktoolbarintro'] = array(
	'scripts' => 'tours/gettingstartedtasktoolbarintro.js',
	'dependencies' => 'ext.guidedTour',
	'messages' => array(
		'guidedtour-tour-gettingstartedtasktoolbarintro-title',
		'guidedtour-tour-gettingstartedtasktoolbarintro-description',
	),
) + $gettingStartedModuleInfo;

$wgResourceModules['ext.guidedTour.tour.gettingstartedtasktoolbar'] = array(
	'scripts' => 'tours/gettingstartedtasktoolbar.js',
	'dependencies' => array(
		'ext.guidedTour',
		'ext.gettingstarted.logging',
	),
	'messages' => array(
		'editsection',
		'savearticle',
		'showpreview',
		'vector-view-edit',
		'guidedtour-tour-gettingstartedtasktoolbar-ambox-title',
		'guidedtour-tour-gettingstartedtasktoolbar-ambox-description',
		'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title',
		'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description',
		'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title',
		'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description',
		'guidedtour-tour-gettingstarted-click-preview-title',
		'guidedtour-tour-gettingstarted-click-preview-description',
		'guidedtour-tour-gettingstarted-click-save-title',
		'guidedtour-tour-gettingstarted-click-save-description',
		'guidedtour-tour-gettingstarted-end-title',
		'guidedtour-tour-gettingstarted-end-description',
	),
) + $gettingStartedModuleInfo;

$wgResourceModules['ext.guidedTour.tour.gettingstartedtasktoolbarve'] = array(
	'scripts' => 'tours/gettingstartedtasktoolbarve.js',
	'dependencies' => array(
		'ext.guidedTour',
		'ext.gettingstarted.logging',
	),
	'messages' => array(
		'editsection',
		'vector-view-edit',
		'visualeditor-toolbar-savedialog',
		'guidedtour-tour-gettingstartedtasktoolbar-ambox-title',
		'guidedtour-tour-gettingstartedtasktoolbar-ambox-description',
		'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title',
		'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description',
		'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title',
		'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description',
		'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title',
		'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description',
		'guidedtour-tour-gettingstarted-end-title',
		'guidedtour-tour-gettingstarted-end-description',
	),
) + $gettingStartedModuleInfo;

// ext.gettingstarted.logging and ext.gettingstarted.openTask are on every page site-wide
// regardless of bucket.
$wgResourceModules[ 'ext.gettingstarted.logging' ] = array(
	'scripts' => 'ext.gettingstarted.logging.js',
	'dependencies' => array(
		'mediawiki.action.view.postEdit',
		'jquery.cookie',
		'jquery.json',
		'mediawiki.Title',
		'mediawiki.user',
		$gettingStartedSchemaModuleName,
	)
) + $gettingStartedModuleInfo;

$wgResourceModules[ 'ext.gettingstarted.openTask' ] = array(
	'scripts' => 'ext.gettingstarted.openTask.js',
	'dependencies' => array(
		'mediawiki.util',
		'ext.gettingstarted.logging',
	),
) + $gettingStartedModuleInfo;

// This loads on both account creation and the special page, even if JS is off
$wgResourceModules[ 'ext.gettingstarted.styles' ] = array(
	'styles' => 'ext.gettingstarted.css',
) + $gettingStartedModuleInfo;

// Added if this page is one of their GettingStarted tasks
$wgResourceModules[ 'ext.gettingstarted.taskToolbar' ] = array(
	'scripts' => 'ext.gettingstarted.taskToolbar.js',
	'styles' => array(
		'ext.gettingstarted.taskToolbar.css' => array( 'media' => 'screen ' ),
		'ext.gettingstarted.taskToolbar.lowWidth.css' =>
			array( 'media' => 'only screen and (min-width: 851px) and (max-width: 1150px)' ),

		// Requires fix for https://bugzilla.wikimedia.org/show_bug.cgi?id=49722 and
		// https://bugzilla.wikimedia.org/show_bug.cgi?id=49851 to work on printable=yes view.
		//
		// But works for small screens and actual printouts now.  Keep print before screen.
		'ext.gettingstarted.taskToolbar.hidden.css' =>
			array( 'media' =>'print, only screen and (max-width: 850px)' ),
	),
	'dependencies' => array(
		'mediawiki.action.view.postEdit',
		'mediawiki.jqueryMsg',
		'mediawiki.Title',
		'mediawiki.Uri',
		'mediawiki.util',
		'mediawiki.libs.guiders',
		'ext.guidedTour.lib',
		'ext.guidedTour.tour.gettingstartedtasktoolbarintro',
		'ext.gettingstarted.logging',
	),
	'messages' => array(
		'gettingstarted-task-toolbar-return-to-list-text',
		'gettingstarted-task-toolbar-return-to-list-title',
		'gettingstarted-task-toolbar-editing-help-text',
		'gettingstarted-task-toolbar-editing-help-title',
		'gettingstarted-task-toolbar-try-another-text',
		'gettingstarted-task-toolbar-close-title',
		'gettingstarted-task-copyedit-toolbar-description',
		'gettingstarted-task-copyedit-toolbar-try-another-title',
		'gettingstarted-task-clarify-toolbar-description',
		'gettingstarted-task-clarify-toolbar-try-another-title',
		'gettingstarted-task-addlinks-toolbar-description',
		'gettingstarted-task-addlinks-toolbar-try-another-title',
	),
) + $gettingStartedModuleInfo;

// This runs on both account creation and the user simply visiting the special page
$wgResourceModules[ 'ext.gettingstarted' ] = array(
	'scripts' => 'ext.gettingstarted.js',
	'dependencies' => array(
		'ext.gettingstarted.logging',
	),
) + $gettingStartedModuleInfo;

// This runs on account creation for the behavior of
// showing the user Special:GettingStarted as the welcome new user page.
// (As of OB6 that is the default (control) behavior.
$wgResourceModules[ 'ext.gettingstarted.showSeparatePage.accountCreation' ] = array(
	'scripts' => 'ext.gettingstarted.showSeparatePage.accountCreation.js',
	'dependencies' => array(
		'mediawiki.util',
		'ext.gettingstarted',
		'ext.gettingstarted.logging',
	),
	'position' => 'top',
) + $gettingStartedModuleInfo;

// This runs on account creation for the OB6 test behavior (returnTo page with
// special behavior), possibly displaying a Call To Action.
$wgResourceModules[ 'ext.gettingstarted.return' ] = array(
	'scripts' => 'ext.gettingstarted.return.js',
	'styles' => 'ext.gettingstarted.return.css',
	'messages' => array(
		'gettingstarted-welcomesiteuser', // XXX (mattflaschen, 2012-12-12): This is a workaround until we move this into core, at which point it can be done server-side.
		'gettingstarted-cta-close',
		'gettingstarted-cta-heading',
		'gettingstarted-cta-text',
		'gettingstarted-cta-edit-page',
		'gettingstarted-cta-edit-page-sub',
		'gettingstarted-cta-fix-pages',
		'gettingstarted-cta-fix-pages-sub',
		'gettingstarted-cta-leave',
	),
	'dependencies' => array(
		'ext.gettingstarted.logging',
		// Needed for isEditing() and tour launching.
		'ext.guidedTour.lib',
		// Rest are only used by the Call To Action
		'mediawiki.Uri',
		'mediawiki.util',
	),
	'position' => 'top',
) + $gettingStartedModuleInfo;

$wgResourceModules[ 'ext.gettingstarted.specialPage' ] = array(
	'scripts' => 'ext.gettingstarted.specialPage.js',
	'dependencies' => array(
		'mediawiki.util',
		'ext.gettingstarted.logging',
		'ext.gettingstarted',
	),
) + $gettingStartedModuleInfo;

$wgDefaultUserOptions[ GettingStartedHooks::INTRO_OPTION ] = true;

$wgHooks[ 'BeforePageDisplay' ][] = 'GettingStartedHooks::onBeforePageDisplay';
$wgHooks[ 'BeforeWelcomeCreation' ][] = 'GettingStartedHooks::onBeforeWelcomeCreation';
$wgHooks[ 'RecentChange_save' ][] = 'GettingStartedHooks::onRecentChange_save';
$wgHooks[ 'CategoryAfterPageAdded' ][] = 'RedisCategorySync::onCategoryAfterPageAdded';
$wgHooks[ 'CategoryAfterPageRemoved' ][] = 'RedisCategorySync::onCategoryAfterPageRemoved';
$wgHooks[ 'ListDefinedTags' ][] = 'GettingStartedHooks::onListDefinedTags';
$wgHooks[ 'ResourceLoaderGetConfigVars' ][] = 'GettingStartedHooks::onResourceLoaderGetConfigVars';
$wgHooks[ 'MakeGlobalVariablesScript' ][] = 'GettingStartedHooks::onMakeGlobalVariablesScript';
$wgHooks[ 'BeforeCreateEchoEvent' ][] = 'GettingStartedHooks::onBeforeCreateEchoEvent';
$wgHooks[ 'EchoGetDefaultNotifiedUsers' ][] = 'GettingStartedHooks::onEchoGetDefaultNotifiedUsers';
$wgHooks[ 'ConfirmEmailComplete' ][] = 'GettingStartedHooks::onConfirmEmailComplete';
$wgHooks[ 'GetPreferences' ][] = 'GettingStartedHooks::onGetPreferences';
// Extension:CentralAuth's hook
$wgHooks[ 'CentralAuthPostLoginRedirect' ][] = 'GettingStartedHooks::onCentralAuthPostLoginRedirect';
