<?php
/**
 * Hooks for GettingStarted extension (for stuff beyond being a special page)
 *
 * @file
 * @ingroup Extensions
 */

class GettingStartedHooks {
	public static $isWelcomeCreation = false;

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

	const SCHEMA_REV_ID = 5496876;

	// Keep following two lines in sync with ext.gettingstarted.logging.js
	// These are for the primary schema.  There is a secondary schema,
	// GettingStartedNavbarNoArticle, for a particular error case.
	const LOGGING_VERSION = 1;
	const SCHEMA_NAME = 'GettingStartedNavbar';

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

	protected static function isInTestGroup( User $user ) {
		// Even, logged in users are in test group
		return $user->isLoggedIn() && ( ( $user->getId() % 2 ) === 0 );
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

		// WebResponse setcookie can not set session cookies
		// This encoding style will get decoded as intended by decodeURIComponent
		setrawcookie( self::COOKIE_NAME, rawurlencode( FormatJson::encode( self::$openTask ) ), 0, '/' );
	}

	/**
	 * Checks if the task toolbar should be loaded
	 *
	 * @param OutputPage $out
	 * @param User $user
	 *
	 * @return true to load, false otherwise
	 */
	protected static function shouldLoadToolbar( OutputPage $out, User $user ) {
		global $wgGettingStartedTasks;

		if ( !self::isInTestGroup( $user ) || Action::getActionName( $out ) !== 'view' ) {
			return false;
		}

		$request = $out->getRequest();
		return self::getUnprefixedGettingStartedTask( $request, $out->getTitle() ) !== null;
	}

	/**
	 * MakeGlobalVariablesScript hook.
	 * This is used to add request-specific config vars to mw.config.
	 *
	 * @param $vars array
	 * @param $out OutputPage output page
	 * @return bool
	 */
	public static function onMakeGlobalVariablesScript( &$vars, OutputPage $out ) {
		global $wgGettingStartedTasks;

		if ( self::$isWelcomeCreation ) {
			$vars[ 'wgIsWelcomeCreation' ] = true;
		}

		$request = $out->getRequest();
		$user = $out->getUser();
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

			$vars[ 'wgGettingStartedToolbar' ] = array(
				'taskName' => $taskName,
				'description' => $task[ 'toolbarDescription' ],
				'tryAnotherTitle' => $task[ 'toolbarTryAnotherTitle' ],
				'showIntro' => $showIntro,
			);
		}

		return true;
	}

	/**
	 * Adds the openTask and logging modules to the page
	 *
	 * @param OutputPage $out output page
	 * @param Skin $skin current skin
	 * @return bool
	 */
	public static function onBeforePageDisplay( OutputPage $out, Skin $skin ) {
		$out->addModules( array(
			'ext.gettingstarted.logging',
			'ext.gettingstarted.openTask'
		) );

		if ( self::shouldLoadToolbar( $out, $out->getUser() ) ) {
			$out->addModules( array(
					'mediawiki.ui',
					'ext.guidedTour.tour.gettingstartedtasktoolbarintro',
					'ext.guidedTour.tour.gettingstartedtasktoolbar',
					'ext.gettingstarted.taskToolbar',
				)
			);
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
	public static function onRecentChange_save( RecentChange $recentChange ) {
		global $wgRequest;

		if ( $recentChange->getAttribute( 'rc_type' ) !== RC_EDIT ) {
			return true;
		}

		$titleObj = $recentChange->getTitle();
		$task = self::getPageTask( $wgRequest, $titleObj );

		if ( strpos( $task, 'gettingstarted' ) === 0 ) {
			ChangeTags::addTags(
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
		global $wgOut;

		self::$isWelcomeCreation = true;

		// Do nothing on mobile.
		if ( class_exists( 'MobileContext' ) ) {
			if ( MobileContext::singleton()->shouldDisplayMobileView() ) {
				return true;
			}
		}

		$wgOut->addModules( 'ext.gettingstarted.common.accountCreation' );

		if ( self::isInTestGroup( $wgOut->getUser() ) ) {
			// Replace default message with blank one
			$welcomeCreationMsg = 'gettingstarted-msg';
			$specialGS = new SpecialGettingStarted();
			$injectHtml = $specialGS->getHtmlResult() . $injectHtml;

			// Styles are added separately so they load without needing JS
			$wgOut->addModuleStyles( array(
				'mediawiki.ui',
				'ext.gettingstarted.styles',
			) );

			$wgOut->addModules( 'ext.gettingstarted.test.accountCreation' );
		}

		return true;
	}

	public static function onBeforeCreateEchoEvent( &$notifications, &$categories, &$icons ) {
		// Currently not used, but most notifications seem to include agent as a param.
		// It will allow username to be included later with just a message change.

		$icons['gettingstarted-contribute'] = array(
			'path' => 'GettingStarted/resources/images/echo-gettingstarted-icon.png',
		);

		$defaults = array(
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

		$api = new ApiMain(
			new DerivativeRequest(
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
		if ( class_exists( 'EchoNotifier' ) && self::isInTestGroup( $user ) ) {
			// The goal is to only do this notification once per-user.
			// Absent a clean way to do that, this notifies them if they signed up with a given time duration.
			if ( self::isRecentSignup( $user ) ) {
				$type = self::hasEditedMainNamespace( $user ) ? 'gettingstarted-continue-editing' : 'gettingstarted-start-editing';
				EchoEvent::create( array(
					'type' => $type,
					'title' => SpecialPage::getTitleFor( 'GettingStarted' ),
					'agent' => $user,
					'extra' => array(
						'notifyAgent' => true,
					),
				) );
			}
		}

		return true;
	}

	/**
	 * Called from the beginning of EditPage::internalAttemptSave
	 *
	 * @param EditPage $editPage page being edited
	 */
	public static function onEditPageAttemptSave( EditPage $editPage ) {
		global $wgRequest, $wgUser;

		$title = $editPage->getTitle();
		$fullTask = self::getPageTask( $wgRequest, $title );
		if ( $fullTask !== null ) {
			self::logEvent( array(
				'action' => 'page-save-attempt',
				'funnel' => $fullTask,
				'bucket' => self::isInTestGroup( $wgUser ) ? 'test' : 'control',
				'pageId' => $title->getArticleID(),
				'revId' => $title->getLatestRevID(),
				'isEditable' => $title->quickUserCan( 'edit', $wgUser ),
			) );
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
}
