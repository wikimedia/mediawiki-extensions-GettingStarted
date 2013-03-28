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
		global $wgOut, $wgUser;

		self::$isWelcomeCreation = true;

		// Do nothing on mobile.
		if ( class_exists( 'MobileContext' ) ) {
			if ( MobileContext::singleton()->shouldDisplayMobileView() ) {
				return true;
			}
		}

		// Activate for users with even user IDs.
		if ( ( $wgUser->getId() % 2 ) === 0 ) {
			// Replace default message with blank one
			$welcomeCreationMsg = 'gettingstarted-msg';
			$specialGS = new SpecialGettingStarted();
			$injectHtml = $specialGS->getHtmlResult() . $injectHtml;

			// Styles are added separately so they load without needing JS
			$wgOut->addModuleStyles( 'ext.gettingstarted.styles' );

			$wgOut->addModules( 'ext.gettingstarted.accountcreation' );
		}

		return true;
	}
}
