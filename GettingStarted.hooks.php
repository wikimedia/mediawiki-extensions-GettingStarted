<?php
/**
 * Hooks for GettingStarted extension (for stuff beyond being a special page)
 *
 * @file
 * @ingroup Extensions
 */

class GettingStartedHooks {

	/**
	 * Look for page edits where there's an item in the user's openTask cookie
	 * matching the title whose task is 'gettingstarted'
	 * Approach comes from AbuseFilter and MobileFrontend extensions.
	 * @param $recentChange RecentChange
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
			&& $decoded[ $title ] === 'gettingstarted'
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

		$wgOut->addModuleStyles( 'ext.gettingstarted.styles' );

		$wgOut->addModules( 'ext.gettingstarted.accountcreation' );

		return true;
	}
}
