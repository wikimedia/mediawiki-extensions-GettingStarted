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
	 * MakeGlobalVariablesScript hook.
	 * Add config vars to mw.config.
	 *
	 * @param $vars array
	 * @param $out OutputPage output page
	 * @return bool
	 */
	public static function onMakeGlobalVariablesScript( &$vars, $out ) {
		if ( self::$isWelcomeCreation ) {
			$vars[ 'wgIsWelcomeCreation' ] = true;
		}
		return true;
	}

	/**
	 * Adds the openTask module to the page
	 *
	 * @param OutputPage $out output page
	 * @param Skin $skin current skin
	 * @return bool
	 */
	public static function onBeforePageDisplay( $out, $skin ) {
		$out->addModules( 'ext.gettingstarted.openTask' );

		return true;
	}

	/**
	 * Look for page edits where there's an item in the user's openTask cookie
	 * matching the title whose task is 'gettingstarted'
	 * Approach comes from AbuseFilter and MobileFrontend extensions.
	 * @param RecentChange $recentChange RecentChanges entry
	 * @return bool
	 */
	public static function onRecentChange_save( $recentChange ) {
		global $wgRequest;

		if ( $recentChange->getAttribute( 'rc_type' ) !== RC_EDIT ) {
			return true;
		}
		$openTasks = $wgRequest->getCookie( 'openTask', '' );
		if ( ! $openTasks ) {
			return true;
		}

		$titleObj = $recentChange->getTitle();
		// Gets title in the form "Talk:S Page/Subpage", matching value
		// in openTask cookie, although as of 2013-01-09 we don't set task
		// funnels for pages outside the main namespace or for subpages.
		$title = $titleObj->getPrefixedText();

		$decoded = FormatJson::decode( $openTasks, true );
		if ( $title
			&&  array_key_exists( $title, $decoded )
			&& strpos( $decoded[$title], 'gettingstarted' ) === 0
		) {
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

		// Replace default message with blank one
		$welcomeCreationMsg = 'gettingstarted-msg';
		$specialGS = new SpecialGettingStarted();
		$injectHtml = $specialGS->getHtmlResult() . $injectHtml;

		// Styles are added separately so they load without needing JS
		$wgOut->addModuleStyles( 'ext.gettingstarted.styles' );

		$wgOut->addModules( 'ext.gettingstarted.accountcreation' );

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
	protected static function hasEditedMainNamespace( $user ) {
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
	protected static function isRecentSignup( $user ) {
		global $wgGettingStartedRecentPeriodInSeconds;

		$registration = $user->getRegistration();
		if ( $registration === null ) {
			return false;
		}

		$secondsSinceSignup = wfTimestamp( TS_UNIX ) - wfTimestamp( TS_UNIX, $registration );
		return $secondsSinceSignup < $wgGettingStartedRecentPeriodInSeconds;
	}

	public static function onConfirmEmailComplete( $user ) {
		if ( class_exists( 'EchoNotifier' ) ) {
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
}
