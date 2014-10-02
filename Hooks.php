<?php

namespace GettingStarted;

use FormatJson, Title, WebRequest, OutputPage, User;

/**
 * Hooks for GettingStarted extension
 *
 * @file
 * @ingroup Extensions
 */

class Hooks {
	/**
	 * Determine which post login hook to register and register it
	 * This allows GettingStarted to work with or without CentralAuth
	 * See Bug: 65619
	 */
	public static function onSetup() {
		global $wgHooks;
		$isCentralAuthAvailable = class_exists( 'SpecialCentralLogin' );
		if( $isCentralAuthAvailable ) {
			$wgHooks[ 'CentralAuthPostLoginRedirect' ][] = 'GettingStarted\Hooks::onCentralAuthPostLoginRedirect';
		} else {
			$wgHooks[ 'PostLoginRedirect' ][] = 'GettingStarted\Hooks::onPostLoginRedirect';
		}
	}

	/**
	 * Deserialized vesion of the openTask data structure.
	 * Initialized as needed.
	 *
	 * null means uninitialized.  Otherwise, it will be an array,
	 * which will be empty if there are no tasks
	 *
	 * Key - string - is title in getPrefixedText format
	 * Value - string - task
	 *
	 * @var null|Array
	 */
	protected static $openTask = null;

	// This is used unprefixed and with a custom path for legacy reasons.
	const OPENTASK_COOKIE_NAME = 'openTask';

	const USER_TOKEN_COOKIE_NAME = '-gettingStartedUserId';

	protected static $COOKIE_OPTIONS = array(
		'prefix' => '',
		'path' => '/',
	);

	const INTRO_OPTION = 'gettingstarted-task-toolbar-show-intro';

	/**
	 * Detects if on the mobile version of the site
	 *
	 * @return bool
	 */
	protected static function isOnMobile() {
		return class_exists( 'MobileContext' ) && \MobileContext::singleton()->shouldDisplayMobileView();
	}

	/**
	 * Initializes openTask structure if needed.
	 *
	 * Reads request cookie, and uses empty array if cookie is missing
	 * or invalid.
	 *
	 * @param WebRequest $request request to get cookie from
	 */
	protected static function initializeOpenTask( WebRequest $request ) {
		if ( self::$openTask !== null ) {
			return;
		}

		$cookie = $request->getCookie( self::OPENTASK_COOKIE_NAME, '' );
		$tasks = FormatJson::decode( $cookie, true );
		if ( !is_array( $tasks ) ) {
			$tasks = array();
		}

		self::$openTask = $tasks;
	}

	/**
	 * Gets task from openTask cookie for given title, if any.
	 *
	 * @param WebRequest $request current request
	 * @param Title $title title to check
	 */
	public static function getPageTask( WebRequest $request, Title $title ) {
		self::initializeOpenTask( $request );
		$prefixedTitle = $title->getPrefixedText();

		if ( isset( self::$openTask[$prefixedTitle] ) ) {
			return self::$openTask[$prefixedTitle];
		}

		return null;
	}

	/**
	 * Gets the unprefixed GettingStarted task, if any.  E.g. if the full task in the
	 * cookie is 'gettingstarted-copyedit', this will return 'copyedit'.
	 *
	 * @param WebRequest $request current request
	 * @param Title $title title to check
	 * @return string Unprefixed version of task, or null if either there is no task,
	 *  or it's  separate (e.g. 'returnto')
	 */
	protected static function getUnprefixedGettingStartedTask( WebRequest $request, Title $title ) {
		$fullTask = self::getPageTask( $request, $title);
		if ( $fullTask !== null ) {
			$matches = array();
			$matchReturn = preg_match( '/^gettingstarted-(.*)$/', $fullTask, $matches );
			if ( $matchReturn === 1 ) {
				return $matches[1];
			}
		}

		return null;
	}

	/**
	 * Checks if the task toolbar should be loaded.
	 *
	 * It will load if it's a view of an existing page, and the user's browser
	 * has a gettingstarted-* task.
	 *
	 * @param OutputPage $out
	 * @param User $user
	 *
	 * @return true to load, false otherwise
	 */
	protected static function shouldLoadToolbar( OutputPage $out, User $user ) {
		if ( \Action::getActionName( $out ) !== 'view'
			|| !$out->getTitle()->exists() ) {
			return false;
		}

		$request = $out->getRequest();
		return self::getUnprefixedGettingStartedTask( $request, $out->getTitle() ) !== null;
	}

	/**
	 * Checks if page is the one the user returned to after account creation with
	 * intent to show some onboarding flow.
	 */
	protected static function isPostCreateReturn( OutputPage $out ) {
		return $out->getRequest()->getFuzzyBool( 'gettingStartedReturn' );
	}

	/**
	 * Adds the returnTo module to the  page the user returned to upon signup.
	 *
	 * Depending on the page, this may do nothing (except log), or add a CTA with
	 * one or two buttons.
	 */
	protected static function addReturnToModules( &$out, &$skin ) {
		$out->addModuleStyles( 'mediawiki.ui.button' );

		$out->addModules( 'ext.gettingstarted.return' );
	}

	/**
	 * MakeGlobalVariablesScript hook.
	 *
	 * This is used to add request-specific config vars to mw.config.
	 *
	 * There is certain data we need for logging, if they are in logged in.
	 * We need other data we need, if there is a toolbar.
	 *
	 * If either of these (or both) are needed, set a request-specific
	 * variable, wgGettingStarted.
	 *
	 * @param $vars array
	 * @param $out OutputPage output page
	 * @return bool
	 */
	public static function onMakeGlobalVariablesScript( &$vars, OutputPage $out ) {
		global $wgGettingStartedTasks;

		$user = $out->getUser();

		// Assign token; will support anonymous signup invite experiment
		$out->addModules( 'ext.gettingstarted.assignToken' );

		if ( self::shouldLoadToolbar( $out, $user ) ) {
			$request = $out->getRequest();
			$taskName = self::getUnprefixedGettingStartedTask( $request, $out->getTitle() );
			$task = $wgGettingStartedTasks[ $taskName ];

			if ( $user->isAnon() ) {
				// Anons can't change preferences, and the HTML is cached,
				// so we never show this, rather than show it every time.
				$showIntro = false;
			} else {
				$showIntro = $user->getOption( self::INTRO_OPTION );
				// Set to false after first load
				$newOption = false;
				if ( $newOption !== $showIntro ) {
					$user->setOption( self::INTRO_OPTION, $newOption );
					$user->saveSettings();
				}
			}

			$vars['wgGettingStarted'] = array(
				'toolbar' => array(
					'taskName' => $taskName,
					'description' => $task[ 'toolbarDescription' ],
					'tryAnotherTitle' => $task[ 'toolbarTryAnotherTitle' ],
					'showIntro' => $showIntro,
				),
			);
		}

		return true;
	}

	/**
	 * Add static configuration data, currently just whether there are any task
	 * categories.
	 *
	 * Used to optimize the client-side API by avoiding an unnecessary API call.
	 *
	 * @param array &$vars array used to set config
	 * @return bool
	 */
	public static function onResourceLoaderGetConfigVars( array &$vars ) {
		global $wgGettingStartedCategoriesForTaskTypes;

		$categoryCount = count( $wgGettingStartedCategoriesForTaskTypes );

		$vars['wgGettingStartedConfig'] = array(
			'hasCategories' => ( $categoryCount > 0 ),
		);

		return true;
	}

	/**
	 * Adds applicable modules to the page
	 *
	 * @param OutputPage $out output page
	 * @param Skin $skin current skin
	 * @return bool
	 */
	public static function onBeforePageDisplay( OutputPage $out, \Skin $skin ) {
		global $wgGettingStartedRunTest;

		$user = $out->getUser();

		if ( self::shouldLoadToolbar( $out, $user ) ) {
			// Uses addModuleStyles since no-JS code must load it this way
			// and this avoids double-loading.
			$out->addModuleStyles( array(
				'mediawiki.ui.button',
			) );
			$out->addModules( array(
					'ext.guidedTour.tour.gettingstartedtasktoolbarintro',
					'ext.guidedTour.tour.gettingstartedtasktoolbar',
					'ext.gettingstarted.taskToolbar',
				)
			);
		}

		if ( self::isPostCreateReturn( $out ) ) {
			// TODO (mattflaschen, 2013-10-05): If we're not going to show
			// anything, we probably shouldn't add this module for performance
			// reasons.
			//
			// We could move the "no show" logic to isPostCreateReturn (with a
			// suitable name), then decide what to do about
			// redirect-page-impression (maybe log on the server, or get rid of it?)
			self::addReturnToModules( $out, $skin );
		}

		// Task Recommendations experiment v1.
		if ( $wgGettingStartedRunTest ) {
			$experiment = new TaskRecommendationsExperimentV1( $user );

			if (
				$experiment->isPostEditEnabled()
				&& $out->getTitle()->inNamespace( NS_MAIN )
			) {
				$out->addModules( 'ext.gettingstarted.lightbulb.postEdit' );
			}

			if (
				$experiment->isFlyoutEnabled()
				&& $user->getEditCount() > 0
			) {
				$out->addModules( 'ext.gettingstarted.lightbulb.flyout' );
			}
		}

		return true;
	}

	public static function onGetPreferences( User $user, array &$preferences ) {
		// Show tour and fade in navbar and help button
		$preferences[self::INTRO_OPTION] = array(
			'type' => 'api',
		);

		return true;
	}

	/**
	 * Delete the user's openTask cookie.
	 *
	 * Called when user is on the 'You are now logged out.' page
	 *
	 * @param User $user user object of the now-anonymous user
	 * @param string $inject_html reference that can be used to inject HTML into logout page.
	 * @param string $old_name name of user that just logged out
	 */
	public static function onUserLogoutComplete( &$user, &$inject_html, $old_name ) {
		global $wgRequest;

		// Set expiration time in the past to expire.  Uses -1 day like User.php.
		$wgRequest->response()->setcookie( self::OPENTASK_COOKIE_NAME, '', time() - 86400, self::$COOKIE_OPTIONS );

		return true;
	}

	/**
	 * When the CentralAuth extension has redirected away from the create
	 * account form, preventing the BeforeWelcomeCreation hook, it runs this
	 * hook.  If user is not mobile, tweak the page returned to or its
	 * parameters.
	 * @param string $returnTo page name to redirect to
	 * @param array $returnToQuery key value pairs of url parameters
	 * @param boolean $stickHTTPS Keep redirect link on HTTPs
	 * @param string $type login redirect condition
	 */
	public static function onCentralAuthPostLoginRedirect( &$returnTo, &$returnToQuery, $stickHTTPS, $type ) {
		$returnToQueryArray = wfCgiToArray( $returnToQuery );
		// Abort if we should not show getting started
		if ( !self::shouldShowGettingStarted( $returnToQueryArray, $type ) ) {
			return true;
		}
		if ( $returnToQuery === '' ) {
			$returnToQuery = 'gettingStartedReturn=true';
		} else {
			$returnToQuery .= '&gettingStartedReturn=true';
		}
		return true;
	}

	/**
	 * While being redirected after signup, determine if we should show getting started
	 * if so set gettingStartedReturn param to true before the redirect
	 * @param string $returnTo page name to redirect to
	 * @param array $returnToQuery key value pairs of url parameters
	 * @param string $type login redirect condition
	 */
	public static function onPostLoginRedirect( &$returnTo, &$returnToQuery, &$type ) {
		// Abort if we should not show getting started
		if ( !self::shouldShowGettingStarted( $returnToQuery, $type ) ) {
			return true;
		}
		// TODO: rmoen 2014-05-30 determine if we want to mock the current bahavior
		// if CentralAuth is not enabled. Note: Auto redirecting is out of the normal
		// login flow for users logging in on wikis not running C.A.
		// This can be done by setting $type = 'successredirect';
		$returnToQuery['gettingStartedReturn'] = 'true';
		return true;
	}

	/**
	 * Check to see if we should display getting started tour
	 * @param array $returnToQuery url query parameters
	 * @param string $type login redirect condition
	 * @return boolean true if should display getting started, false otherwise
	 */
	public static function shouldShowGettingStarted( $returnToQuery, $type ) {
		// Do nothing on mobile.
		if ( self::isOnMobile() ) {
			return false;
		}
		// GettingStarted only runs on signup, for now.
		if ( $type !== 'signup' ) {
			return false;
		}
		// Abort if showGettingStarted param is set
		if ( $returnToQuery && array_key_exists( 'showGettingStarted', $returnToQuery )
			&& $returnToQuery['showGettingStarted'] === 'false'
		) {
			return false;
		}
		// Otherwise return true
		return true;
	}

	public static function onResourceLoaderTestModules( array &$testModules, \ResourceLoader &$resourceLoader ) {
		$testModules[ 'qunit' ][ 'ext.gettingstarted.user.tests' ] = array(
			'scripts' => array( 'tests/qunit/ext.gettingstarted.user.test.js' ),
			'dependencies' => array( 'ext.gettingstarted.user' ),
			'localBasePath' => __DIR__,
			'remoteExtPath' => 'GettingStarted',
		);
	}

	/**
	 * If the site is a Wikipedia, this is called to specify that Wikipedia-specific
	 * versions will be used for certain keys.
	 *
	 * It modifies the passed-in i18n key if it is one of those listed.
	 *
	 * @param string &$lckey Lower-case i18n key, before substitution
	 *
	 * @return bool Always true
	 */
	public static function onMessageCacheGet( &$lckey ) {

		if ( in_array( $lckey, array(
			"gettingstarted-task-toolbar-try-another-text",
			"gettingstarted-task-toolbar-no-suggested-page",
			"gettingstarted-task-copyedit-toolbar-description",
			"gettingstarted-task-copyedit-toolbar-try-another-title",
			"guidedtour-tour-gettingstartedtasktoolbarintro-description",
			"guidedtour-tour-gettingstartedtasktoolbar-ambox-description",
			"guidedtour-tour-gettingstartedtasktoolbar-edit-article-title",
			"guidedtour-tour-gettingstartedtasktoolbar-edit-article-description",
			"guidedtour-tour-gettingstartedtasktoolbarve-click-save-description",
			"guidedtour-tour-gettingstarted-click-preview-description",
			"gettingstarted-cta-edit-page",
			"gettingstarted-cta-fix-pages",
		) ) ) {
			$lckey = "{$lckey}-wikipedia";
		}

		return true;
	}

	/**
	 * While experiement is running add Task suggestions link
	 *  for logged in users who have made an edit
	 * @param array $personal_urls array of user toolbar links
	 * @param Title $title Title object for the current page
	 * @param SkinTemplate $skinTemplate skin template object
	 */
	public static function onPersonalUrls( &$personal_urls, &$title, $skinTemplate ) {
		global $wgGettingStartedRunTest, $wgUser;

		$experiment = new TaskRecommendationsExperimentV1( $wgUser );

		if (
			$wgGettingStartedRunTest &&
			$experiment->isFlyoutEnabled() &&
			$wgUser->getEditCount() > 0
		) {
			$recommendations = array(
				'recommendations' => array(
					'text' => wfMessage( 'gettingstarted-lightbulb-recommendations-personal-tool' )->text(),
					'href' => '#recommendations',
					'class' => 'mw-gettingstarted-personal-tool-recommendations',
				)
			);
			$personal_urls = $recommendations + $personal_urls;
			$skinTemplate->getOutput()->addModuleStyles( 'ext.gettingstarted.lightbulb.personalTools' );
		}

		return true;
	}

	/**
	 * Register PHPUnit tests
	 *
	 * @param array $files Files with PHPUnit tests
	 */
	public static function onUnitTestsList( array &$files ) {
		$files = array_merge( $files, glob( __DIR__ . '/tests/phpunit/*Test.php' ) );

		return true;
	}
}
