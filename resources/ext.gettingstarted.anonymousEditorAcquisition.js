( function ( mw, $, gt ) {

	'use strict';

	var $currentGuiderTarget,
		user = mw.gettingStarted.user,
		token = user.getToken(),
		bucket = user.getBucket(),
		LOG_EVENT_TIMEOUT = 500, // (ms)
		ctaFlagKey = mw.config.get( 'wgCookiePrefix' ) + '-gettingStartedHasShownAnonymousEditorAcquisitionCTA',
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
		),
		namespace = mw.config.get( 'wgNamespaceNumber' ),
		self,
		isLinkClickLoggingDisabled = false;

	// NOTE (phuedx, 2014/05/07): This function provides a consistent, internal API for logging
	// events.
	//
	// Ideally the EventLogging API should provide an equivalent of `logEventOrTimeout`.
	// However, there are currently concerns about the approach [0].
	//
	// [0] https://bugzilla.wikimedia.org/show_bug.cgi?id=52287
	function logEvent( schemaName, eventInstance ) {
		return mw.eventLog.logEvent( schemaName, eventInstance );
	}


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
				logEvent( schemaName, eventInstance );
			}
		} );
	}

	/**
	 * Attempts to log an event in less than 500 milliseconds.
	 *
	 * Returns a promise that will be resolved or rejected when either the HTTP request to log
	 * the event resolves or after 500 milliseconds. Note that in the former case the promise
	 * will be resolved or rejected depending on the outcome of the HTTP request, whereas in the
	 * latter case the promise will always be rejected.
	 *
	 * See `mw.eventLog.logEvent`.
	 *
	 * @private
	 *
	 * @param {string} schemaName The canonical name of the schema
	 * @param {Object} eventInstance The event instance
	 * @return {jQuery.Promise}
	 */
	function logEventOrTimeout( schemaName, eventInstance ) {
		var dfd;

		dfd = $.Deferred();

		window.setTimeout( dfd.reject, LOG_EVENT_TIMEOUT );
		logEvent( schemaName, eventInstance ).then( dfd.resolve, dfd.reject );

		return dfd.promise();
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
				launchTour( tour );
			} );
		} );
	}

	function initPostEditVariant() {
		mw.hook( 'postEdit' ).add( function () {
			launchTour( 'anonymouseditoracquisitionpostedit' );
		} );
	}

	// Wrapper for launching the experiment tour
	function launchTour( tourName ) {
		// Abort if flag is set
		if ( $.jStorage.get( ctaFlagKey ) ) {
			return;
		}
		$.jStorage.set( ctaFlagKey, true );
		gt.launchTour( tourName );
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
	mw.gettingStarted.anonymousEditorAcquisition = self = {
		/**
		 * Handles the 'no thanks' selection when the target
		 * is a VisualEditor edit link.
		 */
		handleNoThanksForVisualEditor: function () {
			gt.hideAll();
			if ( isViewPage ) {
				logEvent( 'SignupExpCTAButtonClick', {
					token: token,
					cta: 'pre-edit',
					button: 'edit',
					namespace: namespace
				} );

				// Load VE without full page load

				// NOTE (phuedx, 2014-05-14) Because we're
				// triggering the click event of the
				// Edit[ source] link, we have to temporarily
				// disable logging the SignupExpPageLinkClick
				// event.
				isLinkClickLoggingDisabled = true;
				$currentGuiderTarget.click();
				isLinkClickLoggingDisabled = false;
			} else {
				// Load VE with full page load
				this.handleNoThanksWithPageLoad();
			}
		},

		/**
		 * Handle no thanks by following a link with a full page load
		 */
		handleNoThanksWithPageLoad: function () {
			logEventOrTimeout( 'SignupExpCTAButtonClick', {
				token: token,
				cta: 'pre-edit',
				button: 'edit',
				namespace: namespace
			} ).always( function () {
				window.location.href = getHrefFromTarget( $currentGuiderTarget );
			} );
		},

		/**
		 * Handles the 'Sign up and edit' selection.  Goes to the signup page, using the
		 * current page as the returnto and the query string from the edit tab/link as the
		 * returntoquery.
		 */
		handleSignupAndEdit: function () {
			self.handleSignup( 'pre-edit', new mw.Uri( getHrefFromTarget( $currentGuiderTarget ) ) );
		},

		/**
		 * Handles the both the 'Sign up and edit' and 'Create my account' selections.
		 *
		 * @param {string=post-edit} cta The 'cta' parameter of the SignupExpCTAButtonClick
		 *   schema. Either 'pre-edit' or 'post-edit'
		 * @param {mw.Uri} uri The URI to extract the returntoquery parameter from.
		 *   Defaults to the current URI
		 */
		handleSignup: function ( cta, uri ) {
			if ( cta === undefined ) {
				cta = 'post-edit';
			}

			if ( uri === undefined ) {
				uri = new mw.Uri();
			}

			delete uri.query.title;

			logEventOrTimeout( 'SignupExpCTAButtonClick', {
				token: token,
				cta: cta,
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
		 * Handles dismissal of the pre- and post-edit CTAs.
		 */
		handleClose: function ( cta ) {
			logEvent( 'SignupExpCTAButtonClick', {
				token: token,
				cta: cta,
				button: 'dismiss',
				namespace: namespace
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

		// Init if flag is not set
		if ( $.jStorage.get( ctaFlagKey ) === null ) {
			if ( isPreEdit ) {
				initPreEditVariant();
			} else if ( bucket === 'post-edit' ) {
				initPostEditVariant();
			}
		}
	} );

} ( mediaWiki, jQuery, mediaWiki.guidedTour ) );
