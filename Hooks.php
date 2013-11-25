<?php

namespace GettingStarted;

use FormatJson, Title, WebRequest, OutputPage, User;

/**
 * Hooks for GettingStarted extension (for stuff beyond being a special page)
 *
 * @file
 * @ingroup Extensions
 */

class Hooks {
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

	// There is used unprefixed for legacy reasons.
	const COOKIE_NAME = 'openTask';

	const SCHEMA_REV_ID = 5944134;

	// Keep following two lines in sync with ext.gettingstarted.logging.js
	// These are for the primary schema.  There is a secondary schema,
	// GettingStartedNavbarNoArticle, for a particular error case.
	//
	const LOGGING_VERSION = 1;
	const SCHEMA_NAME = 'GettingStartedOnRedirect';

	const INTRO_OPTION = 'gettingstarted-task-toolbar-show-intro';

	/**
	 * Logs a server-side event for the main schema, with default properties, if the user is logged in
	 */
	protected static function logEvent( $event ) {
		global $wgUser;

		if ( $wgUser->isAnon() ) {
			return;
		}

		$defaults = array(
			'version' => self::LOGGING_VERSION,
			'userId' => $wgUser->getID(),
		);

		$event += $defaults;
		efLogServerSideEvent( self::SCHEMA_NAME, self::SCHEMA_REV_ID, $event );
	}

	// Must keep in sync with ext.gettingstarted.logging.js's isInTestGroup
	protected static function isInTestGroup( User $user ) {
		global $wgGettingStartedRunTest;

		if ( !$wgGettingStartedRunTest ) {
			return false;
		}
		// OB6: back to split on odd/even user ID.
		return $user->isLoggedIn() && ( ( $user->getId() % 2 ) === 0 );
	}

	protected static function getBucket( User $user ) {
		return self::isInTestGroup( $user ) ? 'test' : 'control';
	}

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

		$cookie = $request->getCookie( self::COOKIE_NAME, '' );
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
	 * cookie is 'gettingstarted-addlinks', this will return 'addlinks'.
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
	 * Sets a task for the title in the openTask structure, then sets the cookie.
	 * If applicable, this should already be prefixed (e.g. 'gettingstarted-addlinks', not 'addlinks').
	 *
	 * @param WebRequest $request current request
	 * @param Title $title title to set
	 * @param string $task task to set
	 */
	public static function setPageTask( WebRequest $request, Title $title, $task ) {
		self::initializeOpenTask( $request );

		self::$openTask[$title->getPrefixedText()] = $task;

		// WebResponse->setcookie cannot set session cookies
		// This encoding will be decoded properly by jQuery.cookie (it uses decodeURIComponent).
		setrawcookie( self::COOKIE_NAME, rawurlencode( FormatJson::encode( self::$openTask ) ), 0, '/' );
	}

	/**
	 * Checks if the task toolbar should be loaded.
	 *
	 * It will load if it's a view of an existing page, and the user's browser
	 * has a gettingstarted-* task.
	 * (In OB6 this doesn't vary with test vs. control.)
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
		return $out->getRequest()->getFuzzyBool( 'gettingStartedReturn');
	}


	/**
	 * Adds the returnTo module to the  page the user returned to upon signup.
	 *
	 * Depending on the page, this may do nothing (except log), or add a CTA with
	 * one or two buttons.
	 */
	protected static function addReturnToModules( &$out, &$skin ) {
		// OB6: 4 kinds of pages to test, different outcomes for each.
		// put up popup
		// load messages
		// which invites to offer in popup
		// lots of logging
		$out->addModuleStyles( 'mediawiki.ui' );

		$out->addModules( 'ext.gettingstarted.return' );
	}

	/**
	 * Export static configuration variables to JavaScript.
	 */
	public static function onResourceLoaderGetConfigVars( &$vars ) {
		$vars['wgGettingStartedConfig'] = array(
			'loggingVersion' => self::LOGGING_VERSION,
			'schemaName' => self::SCHEMA_NAME,
		);

		return true;
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

		$request = $out->getRequest();
		$user = $out->getUser();

		if ( $user->isLoggedIn() ) {
			$requestData = array(
				'bucket' => self::getBucket( $user ),
				'isInTestGroup' => self::isInTestGroup( $user ),
			);
		} else {
			$requestData = array();
		}
		if ( self::shouldLoadToolbar( $out, $user ) ) {
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

			$requestData['toolbar'] = array(
				'taskName' => $taskName,
				'description' => $task[ 'toolbarDescription' ],
				'tryAnotherTitle' => $task[ 'toolbarTryAnotherTitle' ],
				'showIntro' => $showIntro,
			);
		}

		if ( count( $requestData ) > 0 ) {
			$vars['wgGettingStarted'] = $requestData;
		}

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
		$user = $out->getUser();

		// For logged-in users, we add the Getting Started logging and task
		// tracking modules on every page.
		//
		// There is no logging for anonymous users.
		if ( $user->isLoggedIn() ) {
			$out->addModules( array(
				'ext.gettingstarted.logging',
				'ext.gettingstarted.openTask'
			) );
		}

		if ( self::shouldLoadToolbar( $out, $user ) ) {
			// Styles are added separately so they load without needing JS
			$out->addModuleStyles( array(
				'mediawiki.ui',
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

		return true;
	}

	/**
	 * Look for page edits where there's an item in the user's openTask cookie
	 * matching the title whose task is 'gettingstarted'
	 * Approach comes from AbuseFilter and MobileFrontend extensions.
	 * @param RecentChange $recentChange RecentChanges entry
	 * @return bool
	 */
	public static function onRecentChange_save( \RecentChange $recentChange ) {
		global $wgRequest;

		if ( $recentChange->getAttribute( 'rc_type' ) !== RC_EDIT ) {
			return true;
		}

		$performer = $recentChange->getPerformer();

		if ( $performer->isAllowed( 'autoconfirmed' ) ) {
			return true;
		}

		$titleObj = $recentChange->getTitle();
		$task = self::getPageTask( $wgRequest, $titleObj );

		if ( strpos( $task, 'gettingstarted' ) === 0 ) {
			\ChangeTags::addTags(
				'gettingstarted edit',
				$recentChange->getAttribute( 'rc_id' ),
				$recentChange->getAttribute( 'rc_this_oldid' ),
				$recentChange->getAttribute( 'rc_logid' )
			);
		}
		return true;
	}

	public static function onListDefinedTags( &$tags ) {
		$tags[] = 'gettingstarted edit';
		return true;
	}

	public static function onBeforeWelcomeCreation( &$welcomeCreationMsg, &$injectHtml ) {
		// If the stated flow is configured, the BeforeWelcomeCreation hook will not be called.
		// XXX: This isn't working, but I think it's just my log group configuration.
		wfDebugLog( 'GettingStarted', 'GettingStarted requires CentralAuth to be installed with the silent login flow' );

		return true;
	}

	public static function onBeforeCreateEchoEvent( &$notifications, &$categories, &$icons ) {
		// Currently not used, but most notifications seem to include agent as a param.
		// It will allow username to be included later with just a message change.

		$icons['gettingstarted-contribute'] = array(
			'path' => 'GettingStarted/resources/images/echo-gettingstarted-icon.png',
		);

		$defaults = array(
			'primary-link' => array( 'message' => 'notification-gettingstarted-link-text-get-started', 'destination' => 'title' ),
			'category' => 'system',
			'group' => 'neutral',
			'title-params' => array( 'agent' ),
			'email-subject-params' => array( 'agent' ),
			'email-body-params' => array( 'agent', 'titlelink', 'email-footer' ),
			'email-body-batch-params' => array( 'agent', 'titlelink' ),
			'icon' => 'gettingstarted-contribute',
		);

		$notifications['gettingstarted-start-editing'] = array(
			'title-message' => 'notification-gettingstarted-start-editing',
			'email-subject-message' => 'notification-gettingstarted-start-editing-email-subject',
			'email-body-message' => 'notification-gettingstarted-start-editing-text-email-body',
			'email-body-batch-message' => 'notification-gettingstarted-start-editing-text-email-batch-body',
		) + $defaults;

		$notifications['gettingstarted-continue-editing'] = array(
			'title-message' => 'notification-gettingstarted-continue-editing',
			'email-subject-message' => 'notification-gettingstarted-continue-editing-email-subject',
			'email-body-message' => 'notification-gettingstarted-continue-editing-text-email-body',
			'email-body-batch-message' => 'notification-gettingstarted-continue-editing-text-email-batch-body',
		) + $defaults;

		return true;
	}

	public static function onEchoGetDefaultNotifiedUsers( $event, &$users ) {
		$type = $event->getType();
		if ( $type === 'gettingstarted-start-editing' || $type === 'gettingstarted-continue-editing' ) {
			$users[$event->getAgent()->getId()] = $event->getAgent();
		}

		return true;
	}

	/**
	 * Checks if they have edited the main namespace
	 *
	 * @param User $user user to check
	 * @return true if they have, false otherwise
	 */
	protected static function hasEditedMainNamespace( User $user ) {
		global $wgRequest;

		$api = new \ApiMain(
			new \DerivativeRequest(
				$wgRequest,
				array(
					'action' => 'query',
					'list' => 'usercontribs',
					'ucuser' => $user->getName(),
					'uclimit' => 1,
					'ucnamespace' => NS_MAIN,
				),
				false // not posted
			),
			false // disable write
		);

		$api->execute();
		$result = $api->getResultData();
		return isset( $result['query']['usercontribs'] ) && count( $result['query']['usercontribs'] ) >= 1;
	}

	/**
	 * Checks if they signed up within wgGettingStartedRecentPeriodInSeconds period.
	 *
	 * @param User $user user to check
	 * @return boolean true if recent, false otherwise
	 */
	protected static function isRecentSignup( User $user ) {
		global $wgGettingStartedRecentPeriodInSeconds;

		$registration = $user->getRegistration();
		if ( $registration === null ) {
			return false;
		}

		$secondsSinceSignup = wfTimestamp( TS_UNIX ) - wfTimestamp( TS_UNIX, $registration );
		return $secondsSinceSignup < $wgGettingStartedRecentPeriodInSeconds;
	}

	public static function onConfirmEmailComplete( User $user ) {
		global $wgGettingStartedRunTest;

		// Notifications are disabled entirely if the A/B test is in progress.
		if ( class_exists( 'EchoEvent' ) && !$wgGettingStartedRunTest ) {
			// The goal is to only do this notification once per-user.
			// Absent a clean way to do that, this notifies them if they signed up with a given time duration.
			if ( self::isRecentSignup( $user ) ) {
				$type = self::hasEditedMainNamespace( $user ) ? 'gettingstarted-continue-editing' : 'gettingstarted-start-editing';
				\EchoEvent::create( array(
					'type' => $type,
					'title' => \SpecialPage::getTitleFor( 'GettingStarted' ),
					'agent' => $user,
					'extra' => array(
						'notifyAgent' => true,
					),
				) );
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
	 * When the CentralAuth extension has redirected away from the create
	 * account form, preventing the BeforeWelcomeCreation hook, it runs this
	 * hook.  If user is not mobile, tweak the page returned to or its
	 * parameters.
	 */
	public static function onCentralAuthPostLoginRedirect( &$returnTo, &$returnToQuery, $stickHTTPS, $type ) {
		global $wgUser;

		// Do nothing on mobile.
		if ( self::isOnMobile() ) {
			return true;
		}

		// GettingStarted only runs on signup, for now.
		if ( $type !== 'signup' ) {
			return true;
		}

		// Don't do anything if page tells us not to with
		// &showGettingStarted=false in the returnToQuery.
		if ( $returnToQuery ) {
			$qsParams = wfCgiToArray( $returnToQuery );
			if ( array_key_exists( 'showGettingStarted', $qsParams )
				&& $qsParams['showGettingStarted'] === 'false'
			) {
			return true;
			}
		}


		if ( self::isInTestGroup( $wgUser ) ) {
			// OB6: if user is in test group, allow CentralAuth/SUL2 redirect
			// to the page they were on; append something to returnToQuery so
			// GettingStarted::onBeforePageDisplay will take action.
			$returnToQuery = $returnToQuery . '&gettingStartedReturn=true';
			return true;
		} else {

			// Send user to GettingStarted

			$newQueryParams = array();

			// Tell GettingStarted we arrived from creation
			$newQueryParams['postCreateAccount'] = 'true';

			// Provide GettingStarted the originating page so it can display a
			// [← No thanks, return to the page I was reading] link, by
			// turning the passed-in parameters back into query string parameters.
			if ( $returnTo !== '' && $returnTo !== null ) {
				$newQueryParams['returnto'] =  $returnTo;
			}
			if ( $returnToQuery ) {
				$newQueryParams['returntoquery'] =  $returnToQuery;
			}

			// Redirect to Special:GettingStarted
			$returnTo = \SpecialPage::getTitleFor( 'GettingStarted' )->getPrefixedText();
			$returnToQuery = wfArrayToCgi( $newQueryParams );

			return true;
		}
	}
}
