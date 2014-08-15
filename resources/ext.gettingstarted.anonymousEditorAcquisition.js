( function ( mw, $, gt ) {

	'use strict';

	var $currentGuiderTarget,
		user = mw.gettingStarted.user,
		token = user.getToken(),
		bucket = user.getBucket(),
		ctaFlagKey = '-gettingStartedHasShownAnonymousEditorAcquisitionCTA',
		isVeAvailable = mw.libs.ve && mw.libs.ve.isAvailable,
		currentUri = new mw.Uri(),
		// isViewPage code is from VE and is used to determine whether VE can be loaded without a full page load
		isViewPage = (
			mw.config.get( 'wgIsArticle' ) &&
			!( 'diff' in currentUri.query )
		),
		namespace = mw.config.get( 'wgNamespaceNumber' ),
		self,
		isLinkClickLoggingDisabled = false,
		Bucket = mw.gettingStarted.Bucket,
		targetElementsSelector = '#ca-edit, #ca-ve-edit, .mw-editsection a',
		logEventOrTimeout = mw.gettingStarted.logging.logEventOrTimeout;

	/**
	 * Registers a click listener on links corresponding to one or more selectors.
	 * When event occurs, logs a SignupExpPageLinkClick event.
	 *
	 * If `shouldDelay` is false, it will allow the normal link navigation to work.
	 *
	 * If `shouldDelay` is true, it will prevent normal navigation and wait for logging.  When
	 * logging completes, or after a 500 millisecond timeout, it will navigate then.
	 *
	 * @private
	 *
	 * @param {string} selector The link selector
	 * @param {string} link Identifier for link, for logging
	 * @param {boolean} shouldDelay True to delay the default link navigation, false otherwise
	 */
	function logLinkClick( selector, link, shouldDelay ) {
		if ( shouldDelay === undefined ) {
			shouldDelay = true;
		}

		$( selector ).click( function ( event ) {
			var schemaName, eventInstance;

			if ( isLinkClickLoggingDisabled ) {
				return;
			}

			schemaName = 'SignupExpPageLinkClick';
			eventInstance = {
				token: token,
				bucket: bucket,
				link: link,
				namespace: namespace
			};

			if ( shouldDelay ) {
				event.preventDefault();

				logEventOrTimeout( schemaName, eventInstance ).always( function () {
					window.location.href = getHrefFromTarget( $( event.currentTarget ) );
				} );
			} else {
				mw.eventLog.logEvent( schemaName, eventInstance );
			}
		} );
	}

	function unregisterVariants() {
		$( targetElementsSelector ).off( 'click.mw-gettingstarted' );

		if ( isVeAvailable && isViewPage ) {
			$( '#ca-ve-edit' ).on( 'click', mw.libs.ve.onEditTabClick );
			$( '.mw-editsection-visualeditor' ).on( 'click', mw.libs.ve.onEditSectionLinkClick );
		}
	}

	function initVariants() {
		var baseTourName = 'anonymouseditoracquisitionpreedit',
			tourName = baseTourName;

		if ( isVeAvailable ) {
			$( '#ca-ve-edit' ).off( 'click', mw.libs.ve.onEditTabClick );
			$( '.mw-editsection-visualeditor' ).off( 'click', mw.libs.ve.onEditSectionLinkClick );
		}

		if ( bucket === Bucket.PRE_EDIT_V1 ) {
			tourName += 'v1';
		} else if ( bucket === Bucket.PRE_EDIT_V2 ) {
			tourName += 'v2';
		}

		$( targetElementsSelector ).on( 'click.mw-gettingstarted', function ( event ) {
			// Unregister and prevent dead click by returning true
			if( mw.cookie.get( ctaFlagKey ) !== null ) {
				unregisterVariants();
				return true;
			}
			event.preventDefault();
			event.stopPropagation();

			$currentGuiderTarget = $( this );
			$currentGuiderTarget.addClass( 'mw-gettingstarted-anonymouseditoracquisition-guider-target' );

			unregisterVariants();

			if ( mw.libs.guiders ) {
				mw.libs.guiders.reposition();
			}

			launchTour( tourName );
		} );
	}

	// Wrapper for launching the experiment tour
	function launchTour( tourName ) {
		// Set cookie so we know when not to show the tour
		mw.cookie.set( ctaFlagKey, 'true' );
		gt.launcher.launchTour( tourName );
	}

	/**
	 * Returns the href of a link, from the given target.  This is either from the target
	 * itself (section links), or the link descendant (tabs).
	 *
	 * @return {string} href attribute from target's link
	 */
	function getHrefFromTarget( $target ) {
		if ( !$target.is( 'a' ) ) {
			$target = $target.find( 'a' );
		}
		return $target.attr( 'href' );
	}

	function logContinueAndClickTarget() {
		gt.hideAll();

		mw.eventLog.logEvent( 'SignupExpCTAButtonClick', {
			token: token,
			cta: bucket,
			button: 'edit',
			namespace: namespace
		} );

		// Load VE without a full page load.

		// NOTE (phuedx, 2014-05-14) Because we're triggering the click event of
		// the Edit link, we have to temporarily disable logging the
		// SignupExpPageLinkClick event.
		isLinkClickLoggingDisabled = true;
		$currentGuiderTarget.click();
		isLinkClickLoggingDisabled = false;
	}

	function logContinueAndFollowTarget() {
		logEventOrTimeout( 'SignupExpCTAButtonClick', {
			token: token,
			cta: bucket,
			button: 'edit',
			namespace: namespace
		} ).always( function () {
			window.location.href = getHrefFromTarget( $currentGuiderTarget );
		} );
	}

	/**
	 * Public anonymous editor acquisition API
	 *
	 * @class mw.gettingStarted.anonymousEditorAcquisition
	 * @singleton
	 */
	mw.gettingStarted.anonymousEditorAcquisition = self = {

		/**
		 * Handles the 'No thanks' and 'Continue editing' selection.
		 */
		handleContinue: function () {
			var isTargetVEEditLink =
				$currentGuiderTarget.is( '#ca-ve-edit' ) || $currentGuiderTarget.is( '.mw-editsection-visualeditor' );

			if ( isTargetVEEditLink && isViewPage ) {
				logContinueAndClickTarget();
			} else {
				logContinueAndFollowTarget();
			}
		},

		/**
		 * Handles the 'Sign up and edit' and 'Sign up' selections from the
		 * pre-edit v1 and v2 variants respectively. Goes to the signup page,
		 * using the current page as the returnto and the query string from the
		 * edit tab/link as the returntoquery.
		 */
		handleSignup: function () {
			var uri =  new mw.Uri( getHrefFromTarget( $currentGuiderTarget ) );

			delete uri.query.title;

			logEventOrTimeout( 'SignupExpCTAButtonClick', {
				token: token,
				cta: bucket,
				button: 'signup',
				namespace: namespace
			} ).always( function () {
				window.location.href = new mw.Title( 'Special:UserLogin' ).getUrl( {
					type: 'signup',
					returnto: mw.config.get( 'wgPageName' ),
					returntoquery: uri.getQueryString()
				} );
			} );
		},

		/**
		 * Handles dismissal of either version of the pre-edit CTA.
		 */
		handleClose: function () {
			mw.eventLog.logEvent( 'SignupExpCTAButtonClick', {
				token: token,
				cta: bucket,
				button: 'dismiss',
				namespace: namespace
			} );
		},

		/**
		 * Handles the display of the pre-edit CTA.
		 */
		handleShow: function () {
			mw.eventLog.logEvent( 'SignupExpCTAImpression', {
				token: token,
				cta: bucket,
				namespace: mw.config.get( 'wgNamespaceNumber' )
			} );
		}
	};

	$( function () {
		var shouldShowCta = mw.cookie.get( ctaFlagKey ) === null && bucket !== Bucket.CONTROL;

		// If clicking "edit" or "edit source" shows a guider, then don't follow
		// the link and allow the SignupExpPageLinkClick event to be logged
		// asynchronously.
		logLinkClick( '#ca-edit', 'edit page', !shouldShowCta );
		logLinkClick( '.mw-editsection a:not(.mw-editsection-visualeditor)', 'edit section', !shouldShowCta );

		// That said, if the user is activating the Visual Editor, and that
		// doesn't require a page reload, then allow the event to be logged
		// asynchronously.
		logLinkClick( '#ca-ve-edit', 'edit page', !isViewPage && !shouldShowCta );
		logLinkClick( '.mw-editsection-visualeditor', 'edit section', !isViewPage && !shouldShowCta );

		logLinkClick( '#pt-createaccount', 'create account' );

		if ( shouldShowCta ) {
			initVariants();
		}
	} );

} ( mediaWiki, jQuery, mediaWiki.guidedTour ) );
