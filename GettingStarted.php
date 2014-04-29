<?php
if ( !defined( 'MEDIAWIKI' ) ) die( 'Invalid entry point.' );

$wgExtensionCredits[ 'api' ][] = array(
	'path' => __FILE__,
	'name' => 'GettingStarted',
	'author' => array(
		// Alphabetical
		'Munaf Assaf',
		'Matt Flaschen',
		'Pau Giner',
		'Ori Livneh',
		'S Page',
		'Sam Smith',
	),
	'url' => 'https://www.mediawiki.org/wiki/Extension:GettingStarted',
	'descriptionmsg' => 'gettingstarted-desc',
	'version' => '1.1.0',
);

/**
 * @var array Associative array of arrays.  The key is an internal non-displayed name, such as 'copyedit'
 *
 *  Each value array has:
 *  'toolbarDescription' - message key for primary description on toolbar
 *  'toolbarTryAnotherTitle' - message key for title text of 'Try Another' link
 */
$wgGettingStartedTasks = array(
	'copyedit' => array(
		'toolbarDescription' => 'gettingstarted-task-copyedit-toolbar-description',
		'toolbarTryAnotherTitle' => 'gettingstarted-task-copyedit-toolbar-try-another-title',
	),
	'clarify' => array(
		'toolbarDescription' => 'gettingstarted-task-clarify-toolbar-description',
		'toolbarTryAnotherTitle' => 'gettingstarted-task-clarify-toolbar-try-another-title',
	),
	'addlinks' => array(
		'toolbarDescription' => 'gettingstarted-task-addlinks-toolbar-description',
		'toolbarTryAnotherTitle' => 'gettingstarted-task-addlinks-toolbar-try-another-title',
	)
);

/**
 * @var array An associative array.  The key is the task type, i.e. the key
 * from $wgGettingStartedTasks (see above).  The value is the category that the
 * articles, which the task targets, are from.
 */
$wgGettingStartedCategoriesForTaskTypes = array();

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
	'GettingStarted\Hooks' => __DIR__ . '/Hooks.php',
	'GettingStarted\RedisCategorySync' => __DIR__ . '/RedisCategorySync.php',
	'GettingStarted\PageFilter' => __DIR__ . '/PageFilter.php',
	'GettingStarted\ApiGettingStartedGetPages' => __DIR__ . '/api/ApiGettingStartedGetPages.php',
);

$wgMessagesDirs['GettingStarted'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles[ 'GettingStarted' ] = __DIR__ . '/GettingStarted.i18n.php';

// APIs
$wgAPIModules['gettingstartedgetpages'] = 'GettingStarted\ApiGettingStartedGetPages';

// Modules

$gettingStartedModuleInfo = array(
	'localBasePath' => __DIR__ . '/resources',
	'remoteExtPath' => 'GettingStarted/resources',
);

$wgResourceModules[ 'schema.GettingStartedNavbarNoArticle' ] = array(
	'class'    => 'ResourceLoaderSchemaModule',
	'schema'   => 'GettingStartedNavbarNoArticle',
	'revision' => 5483117
);

$wgResourceModules[ 'schema.GettingStartedRedirectImpression' ] = array(
	'class'    => 'ResourceLoaderSchemaModule',
	'schema'   => 'GettingStartedRedirectImpression',
	'revision' => 7355552,
);

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
		'guidedtour-tour-gettingstartedtasktoolbarintro-title',
		'guidedtour-tour-gettingstartedtasktoolbarintro-description',
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
		'guidedtour-tour-gettingstartedtasktoolbarintro-title',
		'guidedtour-tour-gettingstartedtasktoolbarintro-description',
		'guidedtour-tour-gettingstartedtasktoolbar-ambox-title',
		'guidedtour-tour-gettingstartedtasktoolbar-ambox-description',
		'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title',
		'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description',
		'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title',
		'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description',
		'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title',
		'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description',
	),
) + $gettingStartedModuleInfo;

$wgResourceModules[ 'ext.gettingstarted.logging' ] = array(
	'scripts' => 'ext.gettingstarted.logging.js',
	'dependencies' => array(
		'mediawiki.action.view.postEdit',
		'jquery.cookie',
		'jquery.json',
		'mediawiki.Title',
		'mediawiki.user',
	),
) + $gettingStartedModuleInfo;

// Subclasses of mediawiki.api
$wgResourceModules[ 'ext.gettingstarted.api' ] = array(
	'scripts' => 'ext.gettingstarted.api.js',
	'dependencies' => array(
		'mediawiki.api',
		'mediawiki.Title',
	),
) + $gettingStartedModuleInfo;

// Added if this page is one of their GettingStarted tasks
$wgResourceModules[ 'ext.gettingstarted.taskToolbar' ] = array(
	'scripts' => 'ext.gettingstarted.taskToolbar.js',
	'styles' => array(
		'ext.gettingstarted.taskToolbar.less' => array( 'media' => 'screen ' ),

		// Requires fix for https://bugzilla.wikimedia.org/show_bug.cgi?id=49722 and
		// https://bugzilla.wikimedia.org/show_bug.cgi?id=49851 to work on printable=yes view.
		//
		// But works for small screens and actual printouts now.  Keep print before screen.
		'ext.gettingstarted.taskToolbar.hidden.less' =>
			array( 'media' =>'print, only screen and (max-width: 850px)' ),
	),
	'dependencies' => array(
		'mediawiki.action.view.postEdit',
		'mediawiki.jqueryMsg',
		'mediawiki.Title',
		'mediawiki.libs.guiders',
		'ext.guidedTour.lib',
		'ext.gettingstarted.api',
		'ext.gettingstarted.logging',
	),
	'messages' => array(
		'gettingstarted-task-toolbar-editing-help-text',
		'gettingstarted-task-toolbar-editing-help-title',
		'gettingstarted-task-toolbar-try-another-text',
		'gettingstarted-task-toolbar-close-title',
		'gettingstarted-task-toolbar-no-suggested-page',
		'gettingstarted-task-copyedit-toolbar-description',
		'gettingstarted-task-copyedit-toolbar-try-another-title',
		'gettingstarted-task-clarify-toolbar-description',
		'gettingstarted-task-clarify-toolbar-try-another-title',
		'gettingstarted-task-addlinks-toolbar-description',
		'gettingstarted-task-addlinks-toolbar-try-another-title',
	),
) + $gettingStartedModuleInfo;

// This runs on account creation for the OB6 test behavior (returnTo page with
// special behavior), possibly displaying a Call To Action.
$wgResourceModules[ 'ext.gettingstarted.return' ] = array(
	'scripts' => 'ext.gettingstarted.return.js',
	'styles' => 'ext.gettingstarted.return.less',
	'messages' => array(
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
		'ext.gettingstarted.api',
		'ext.gettingstarted.logging',
		'schema.GettingStartedNavbarNoArticle',
		'schema.GettingStartedRedirectImpression',
		// Needed for isEditing() and tour launching.
		'ext.guidedTour.lib',
		'mediawiki.Title',
		// Rest are only used by the Call To Action
		'mediawiki.Uri',
		'mediawiki.util',
		'mediawiki.user',
	),
	'position' => 'top',
) + $gettingStartedModuleInfo;

$wgDefaultUserOptions[ GettingStarted\Hooks::INTRO_OPTION ] = true;

$wgHooks[ 'BeforePageDisplay' ][] = 'GettingStarted\Hooks::onBeforePageDisplay';
$wgHooks[ 'BeforeWelcomeCreation' ][] = 'GettingStarted\Hooks::onBeforeWelcomeCreation';
$wgHooks[ 'RecentChange_save' ][] = 'GettingStarted\Hooks::onRecentChange_save';
$wgHooks[ 'CategoryAfterPageAdded' ][] = 'GettingStarted\RedisCategorySync::onCategoryAfterPageAdded';
$wgHooks[ 'CategoryAfterPageRemoved' ][] = 'GettingStarted\RedisCategorySync::onCategoryAfterPageRemoved';
$wgHooks[ 'ListDefinedTags' ][] = 'GettingStarted\Hooks::onListDefinedTags';
$wgHooks[ 'MakeGlobalVariablesScript' ][] = 'GettingStarted\Hooks::onMakeGlobalVariablesScript';
$wgHooks[ 'ResourceLoaderGetConfigVars' ][] = 'GettingStarted\Hooks::onResourceLoaderGetConfigVars';
$wgHooks[ 'GetPreferences' ][] = 'GettingStarted\Hooks::onGetPreferences';
$wgHooks[ 'UserLogoutComplete'][] = 'GettingStarted\Hooks::onUserLogoutComplete';
// Extension:CentralAuth's hook
$wgHooks[ 'CentralAuthPostLoginRedirect' ][] = 'GettingStarted\Hooks::onCentralAuthPostLoginRedirect';
