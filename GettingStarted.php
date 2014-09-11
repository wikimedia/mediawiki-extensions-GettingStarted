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
 * Is the controlled experiment enabled?
 */
$wgGettingStartedRunTest = false;

// Range of registration dates for users affected by Task Recommendation Experiment v1

/**
 * Beginning of registration date range, in UNIX time (seconds), inclusive
 */
$wgTaskRecommendationsExperimentV1StartDate = 0;

/**
 * End of registration date range, in UNIX time (seconds), exclusive
 */
$wgTaskRecommendationsExperimentV1EndDate = 0;

$wgAutoloadClasses += array(
	'GettingStarted\Hooks' => __DIR__ . '/Hooks.php',
	'GettingStarted\RedisCategorySync' => __DIR__ . '/RedisCategorySync.php',
	'GettingStarted\PageFilterFactory' => __DIR__ . '/PageFilterFactory.php',
	'GettingStarted\BasePageFilter' => __DIR__ . '/BasePageFilter.php',
	'GettingStarted\CategoryPageFilter' => __DIR__ . '/CategoryPageFilter.php',
	'GettingStarted\ApiGettingStartedGetPages' => __DIR__ . '/api/ApiGettingStartedGetPages.php',
	'GettingStarted\PageSuggesterFactory' => __DIR__ . '/PageSuggesterFactory.php',
	'GettingStarted\PageSuggester' => __DIR__ . '/PageSuggester.php',
	'GettingStarted\CategoryPageSuggester' => __DIR__ . '/CategoryPageSuggester.php',
	'GettingStarted\MoreLikePageSuggester' => __DIR__ . '/MoreLikePageSuggester.php',
	'GettingStarted\TaskRecommendationsExperimentV1' => __DIR__ . '/TaskRecommendationsExperimentV1.php',
);

$wgMessagesDirs['GettingStarted'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles[ 'GettingStarted' ] = __DIR__ . '/GettingStarted.i18n.php';

// APIs
$wgAPIListModules['gettingstartedgetpages'] = 'GettingStarted\ApiGettingStartedGetPages';


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

$wgResourceModules[ 'ext.gettingstarted.lightbulb.postEdit' ] = array(
	'scripts' => array(
		'lightbulb/lightbulb.postEdit.js',
	),
	'styles' => 'lightbulb/lightbulb.postEdit.less',
	'dependencies' => array(
		'ext.gettingstarted.api',
		'ext.gettingstarted.lightbulb.common',
		'schema.TaskRecommendationImpression'
	),
	'messages' => array(
		'gettingstarted-lightbulb-notification-body',
	),
) + $gettingStartedModuleInfo;

$wgResourceModules[ 'ext.gettingstarted.lightbulb.personalTools' ] = array(
	'styles' => 'lightbulb/lightbulb.personalTools.less',
) + $gettingStartedModuleInfo;

$wgResourceModules[ 'ext.gettingstarted.lightbulb.flyout' ] = array(
	'scripts' => 'lightbulb/lightbulb.flyout.js',
	'styles' => 'lightbulb/lightbulb.flyout.less',
	'dependencies' => array(
		'ext.gettingstarted.api',
		'ext.gettingstarted.lightbulb.common',

		// TODO (phuedx, 2014/07/30): This /looks/ like it's a
		// heavyweight dependency. Ideally, the flyout-like behaviour
		// should be extracted from the GuidedTour library, but, for
		// now, it's enough to emulate it.
		'ext.guidedTour.styles',
		'jquery.client',
		'mediawiki.user',
		'schema.TaskRecommendationImpression',
		'schema.TaskRecommendationLightbulbClick',
	),
	'messages' => array(
		'gettingstarted-lightbulb-heading',
		'gettingstarted-lightbulb-text',
		'gettingstarted-lightbulb-flyout-back',
		'gettingstarted-lightbulb-flyout-next',
		'gettingstarted-lightbulb-flyout-error-state-primary-text-no-article-edits',
		'gettingstarted-lightbulb-flyout-error-state-secondary-text-no-article-edits',
		'gettingstarted-lightbulb-flyout-error-state-primary-text-no-recommendations',
		'gettingstarted-lightbulb-flyout-error-state-secondary-text-no-recommendations',
		'gettingstarted-lightbulb-flyout-error-state-button-text-no-article-edits',
		'gettingstarted-lightbulb-flyout-error-state-button-text-no-recommendations',
	)
) + $gettingStartedModuleInfo;

$wgResourceModules[ 'ext.gettingstarted.lightbulb.common' ] = array(
	'styles' => 'lightbulb/lightbulb.common.less',
	'scripts' => array(
		'lightbulb/lightbulb.parser.js',
		'lightbulb/lightbulb.suggestionRenderer.js',
	),
	'dependencies' => array(
		'mediawiki.util',
		'mediawiki.user',
		'moment',
		'ext.gettingstarted.logging',
		'schema.TaskRecommendation',
		'schema.TaskRecommendationClick',
	),
	'messages' => array(
		'gettingstarted-lightbulb-notification-body-lastedited',
	),
) + $gettingStartedModuleInfo;

$wgResourceModules[ 'ext.gettingstarted.logging' ] = array(
	'scripts' => 'ext.gettingstarted.logging.js',
	'dependencies' => array(
		'mediawiki.action.view.postEdit',
		'jquery.cookie',
		'json',
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

$wgResourceModules[ 'ext.gettingstarted.user' ] = array(
	'scripts' => array(
		'ext.gettingstarted.bucket.js',
		'ext.gettingstarted.user.js',
	),
	'dependencies' => array(
		'mediawiki.user',
		'jquery.cookie',
	),
) + $gettingStartedModuleInfo;

// Tours for the Anonymous Editor Acquisition project (see
// https://www.mediawiki.org/wiki/Anonymous_editor_acquisition).

$anonymousEditorAcquisitionPreEditTourInfo = array(
	'dependencies' => array(
		'ext.gettingstarted.anonymousEditorAcquisition',
		'ext.guidedTour',
		'schema.SignupExpCTAImpression',
	),
) + $gettingStartedModuleInfo;

$wgResourceModules[ 'ext.guidedTour.tour.anonymouseditoracquisitionpreeditv1' ] = array(
	'scripts' => 'tours/anonymouseditoracquisitionpreeditv1.js',
	'messages' => array(
		'guidedtour-tour-anonymouseditoracquisitionpreeditv1-title',
		'guidedtour-tour-anonymouseditoracquisitionpreeditv1-description',
		'guidedtour-tour-anonymouseditoracquisitionpreeditv1-sign-up',
		'guidedtour-tour-anonymouseditoracquisitionpreeditv1-continue',
	),
) + $anonymousEditorAcquisitionPreEditTourInfo;

$wgResourceModules[ 'ext.guidedTour.tour.anonymouseditoracquisitionpreeditv2' ] = array(
	'scripts' => 'tours/anonymouseditoracquisitionpreeditv2.js',
	'messages' => array(
		'guidedtour-tour-anonymouseditoracquisitionpreeditv2-title',
		'guidedtour-tour-anonymouseditoracquisitionpreeditv2-description',
		'guidedtour-tour-anonymouseditoracquisitionpreeditv2-sign-up',
		'guidedtour-tour-anonymouseditoracquisitionpreeditv2-continue',
	),
) + $anonymousEditorAcquisitionPreEditTourInfo;

$wgResourceModules[ 'ext.gettingstarted.anonymousEditorAcquisition' ] = array(
	'scripts' => 'ext.gettingstarted.anonymousEditorAcquisition.js',
	'dependencies' => array(
		'mediawiki.Title',
		'mediawiki.Uri',
		'mediawiki.cookie',
		'ext.gettingstarted.user',
		'ext.gettingstarted.logging',
		'schema.SignupExpPageLinkClick',
		'schema.SignupExpCTAButtonClick',
		'ext.guidedTour.launcher',
	),
) + $gettingStartedModuleInfo;



// Events for the Anonymous Edit Acquisition project.

$wgResourceModules[ 'schema.SignupExpPageLinkClick' ] = array(
	'class'    => 'ResourceLoaderSchemaModule',
	'schema'   => 'SignupExpPageLinkClick',
	'revision' => 8965014
);

$wgResourceModules[ 'schema.SignupExpCTAImpression' ] = array(
	'class'    => 'ResourceLoaderSchemaModule',
	'schema'   => 'SignupExpCTAImpression',
	'revision' => 8965023
);

$wgResourceModules[ 'schema.SignupExpCTAButtonClick' ] = array(
	'class'    => 'ResourceLoaderSchemaModule',
	'schema'   => 'SignupExpCTAButtonClick',
	'revision' => 8965028
);

/* Events for Task Suggestions */

$wgResourceModules[ 'schema.TaskRecommendationLightbulbClick' ] = array(
	'class'    => 'ResourceLoaderSchemaModule',
	'schema'   => 'TaskRecommendationLightbulbClick',
	'revision' => 9433256
);

$wgResourceModules[ 'schema.TaskRecommendationImpression' ] = array(
	'class'    => 'ResourceLoaderSchemaModule',
	'schema'   => 'TaskRecommendationImpression',
	'revision' => 9266226
);

$wgResourceModules[ 'schema.TaskRecommendation' ] = array(
	'class'    => 'ResourceLoaderSchemaModule',
	'schema'   => 'TaskRecommendation',
	'revision' => 9266319
);

$wgResourceModules[ 'schema.TaskRecommendationClick' ] = array(
	'class'    => 'ResourceLoaderSchemaModule',
	'schema'   => 'TaskRecommendationClick',
	'revision' => 9266317
);

$wgResourceModules[ 'ext.gettingstarted.assignToken' ] = array(
	'scripts' => 'ext.gettingstarted.assignToken.js',
	'dependencies' => array(
		'ext.gettingstarted.user'
	),
) + $gettingStartedModuleInfo;

$wgDefaultUserOptions[ GettingStarted\Hooks::INTRO_OPTION ] = true;

$wgHooks[ 'BeforePageDisplay' ][] = 'GettingStarted\Hooks::onBeforePageDisplay';
$wgHooks[ 'RecentChange_save' ][] = 'GettingStarted\Hooks::onRecentChange_save';
$wgHooks[ 'CategoryAfterPageAdded' ][] = 'GettingStarted\RedisCategorySync::onCategoryAfterPageAdded';
$wgHooks[ 'CategoryAfterPageRemoved' ][] = 'GettingStarted\RedisCategorySync::onCategoryAfterPageRemoved';
$wgHooks[ 'ArticleDeleteComplete' ][] = 'GettingStarted\RedisCategorySync::onArticleDeleteComplete';
$wgHooks[ 'ListDefinedTags' ][] = 'GettingStarted\Hooks::onListDefinedTags';
$wgHooks[ 'MakeGlobalVariablesScript' ][] = 'GettingStarted\Hooks::onMakeGlobalVariablesScript';
$wgHooks[ 'ResourceLoaderGetConfigVars' ][] = 'GettingStarted\Hooks::onResourceLoaderGetConfigVars';
$wgHooks[ 'GetPreferences' ][] = 'GettingStarted\Hooks::onGetPreferences';
$wgHooks[ 'UserLogoutComplete'][] = 'GettingStarted\Hooks::onUserLogoutComplete';
$wgHooks[ 'ResourceLoaderTestModules' ][] = 'GettingStarted\Hooks::onResourceLoaderTestModules';
$wgHooks[ 'PersonalUrls' ][] = 'GettingStarted\Hooks::onPersonalUrls';
$wgExtensionFunctions[] = 'GettingStarted\Hooks::onSetup';

list( $site, $lang ) = $wgConf->siteFromDB( $wgDBname );

if ( $site === 'wikipedia' && $lang !== 'commons' ) {
	$wgHooks[ 'MessageCache::get' ][] = 'GettingStarted\Hooks::onMessageCacheGet';
}
