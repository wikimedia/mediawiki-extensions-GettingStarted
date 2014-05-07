( function ( mw, $, gt ) {

	'use strict';

	var $currentGuiderTarget,
		user = mw.gettingStarted.user,
		token = user.getToken(),
		bucket = user.getBucket(),
		LOG_LINK_CLICK_DELAY = 500, // (ms)
		tourToSelectorMapping = {
			'anonymouseditoracquisitionpreedit': [ '#ca-edit', '.mw-editsection a:not( .mw-editsection-visualeditor )' ],
			'anonymouseditoracquisitionpreeditve': [ '#ca-ve-edit', '.mw-editsection-visualeditor ' ]
		},
		isVeAvailable = mw.libs.ve && mw.libs.ve.isAvailable,
		currentUri = new mw.Uri(),
		// isViewPage code is from VE and is used to determine whether VE can be loaded without a full page load
		isViewPage = (
			mw.config.get( 'wgIsArticle' ) &&
			!( 'diff' in currentUri.query )
		);

	/**
	 * Registers a click listener on links corresponding to one or more selectors.
	 * When event occurs, logs a SignupExpPageLinkClick event.
	 *
	 * If `shouldDelay` is false, it will allow the normal link navigation to work.
	 *
	 * If `shouldDelay` is true, it will prevent normal navigation and wait for logging.  When
	 * logging completes, or after a LOG_LINK_CLICK_DELAY-millisecond timeout, it will navigate
	 * then.
	 *
	 * @private
	 *
	 * @param {string|Array} selectors Either a single link selector string, or an array of them
	 * @param {string} link Identifier for link, for logging
	 * @param {boolean} shouldDelay True to delay the default link navigation, false otherwise
	 */
	function logLinkClick( selectors, link, shouldDelay ) {
		if ( shouldDelay === undefined ) {
			shouldDelay = true;
		}

		if ( $.isArray( selectors ) ) {
			selectors = selectors.join( ',' );
		}

		$( selectors ).click( function ( event ) {
			var logEventPromise, dfd;

			logEventPromise = mw.eventLog.logEvent( 'SignupExpPageLinkClick', {
				token: token,
				bucket: bucket,
				link: link,
				namespace: mw.config.get( 'wgNamespaceNumber' )
			} );

			if ( shouldDelay ) {
				event.preventDefault();

				dfd = $.Deferred();
				dfd.always( function () {
					window.location.href = getHrefFromTarget( $( event.currentTarget ) );
				} );

				window.setTimeout( dfd.reject, LOG_LINK_CLICK_DELAY );
				logEventPromise.then( dfd.resolve, dfd.reject );
			}
		} );
	}

	function unregisterPreEditVariant() {
		$.each( tourToSelectorMapping, function ( tour, selectors ) {
			$( selectors.join( ',' ) ).off( 'click.mw-gettingstarted' );
		} );

		if ( isVeAvailable && isViewPage ) {
			$( '#ca-ve-edit' ).on( 'click', mw.libs.ve.onEditTabClick );
			$( '.mw-editsection-visualeditor' ).on( 'click', mw.libs.ve.onEditSectionLinkClick );
		}
	}

	function initPreEditVariant() {
		if ( isVeAvailable ) {
			$( '#ca-ve-edit' ).off( 'click', mw.libs.ve.onEditTabClick );
			$( '.mw-editsection-visualeditor' ).off( 'click', mw.libs.ve.onEditSectionLinkClick );
		}

		$.each( tourToSelectorMapping, function ( tour, selectors ) {
			$( selectors.join( ',' ) ).on( 'click.mw-gettingstarted', function ( event ) {
				event.preventDefault();
				event.stopPropagation();

				$currentGuiderTarget = $( this );
				$currentGuiderTarget.addClass( 'mw-gettingstarted-anonymouseditoracquisition-guider-target' );

				unregisterPreEditVariant();

				mw.libs.guiders.reposition();
				gt.launchTour( tour );
			} );
		} );
	}

	function initPostEditVariant() {
		mw.hook( 'postEdit' ).add( function () {
			gt.launchTour( 'anonymouseditoracquisitionpostedit' );
		} );
	}

	mw.gettingStarted = mw.gettingStarted || {};

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

	/**
	 * Public anonymous editor acquisition API
	 *
	 * @class mw.gettingStarted.anonymousEditorAcquisition
	 * @singleton
	 */
	mw.gettingStarted.anonymousEditorAcquisition = {
		/**
		 * Handles the 'no thanks' selection when the target
		 * is a VisualEditor edit link.
		 */
		handleNoThanksForVisualEditor: function () {
			gt.hideAll();
			if ( isViewPage ) {
				// Load VE without full page load
				$currentGuiderTarget.click();
			} else {
				// Load VE with full page load
				this.handleNoThanksWithPageLoad();
			}
		},

		/**
		 * Handle no thanks by following a link with a full page load
		 */
		handleNoThanksWithPageLoad: function () {
			window.location.href = getHrefFromTarget( $currentGuiderTarget );
		},

		/**
		 * Handles then 'signup and edit' selection.  Goes to the signup page, using the
		 * current page as the returnto and the query string from the edit tab/link as the
		 * returntoquery.
		 */
		handleSignupAndEdit: function () {
			var uri = new mw.Uri( getHrefFromTarget( $currentGuiderTarget ) );
			delete uri.query.title;
			window.location.href = new mw.Title( 'Special:UserLogin' ).getUrl( {
				type: 'signup',
				returnto: mw.config.get( 'wgPageName' ),
				returntoquery: uri.getQueryString()
			} );

		}
	};

	$( function () {
		var isPreEdit = bucket === 'pre-edit';
		// In the pre-edit variant, clicking "edit" or "edit source"
		// shows a guider so don't follow the link after the
		// SignupExpPageLinkClick event has been logged.
		logLinkClick( [ '#ca-edit', '#ca-ve-edit' ], 'edit page', !isPreEdit );
		logLinkClick( '.mw-editsection a', 'edit section', !isPreEdit );

		logLinkClick( '#pt-createaccount', 'create account' );

		// Only init if user has not seen CTA.
		if ( $.jStorage.get( 'hasShownAnonymousEditorAcquisitionCTA' ) ) {
			return;
		}
		$.jStorage.set( 'hasShownAnonymousEditorAcquisitionCTA', true );

		if ( isPreEdit ) {
			initPreEditVariant();
		} else if ( bucket === 'post-edit' ) {
			initPostEditVariant();
		}
	} );

} ( mediaWiki, jQuery, mediaWiki.guidedTour ) );
