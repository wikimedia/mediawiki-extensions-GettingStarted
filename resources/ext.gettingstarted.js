( function ( $, mw, gt ) {
	var PREF_NAME = 'userjs-gettingstarted-showtour',
		isLoggedIn = ( mw.config.get( 'wgUserName' ) !== null ),
		shouldStartTour,
		api = new mw.Api(),
		optionsPromise,
		optionsToken;

	/**
	 * Determines whether to start the gettingstarted tour on click
	 *
	 * @return {Boolean} true if and only if it should be started
	 */
	function shouldStartGettingStartedTour() {
		var userId, isNewRegistration, prefValue, crc;

		if ( !isLoggedIn ) {
			// For now, we decided it's better not to show at all then show every time they
			// return to Special:GettingStarted (anonymous users can not change prefs)
			return false;
		}

		userId = mw.config.get( 'wgUserId' );
		if ( userId !== null ) {
			// E3Experiments is presumably installed
			isNewRegistration = mw.config.get( 'wgIsWelcomeCreation', false );
			if( isNewRegistration ) {
				return true;
			}
		}

		// Manually visited Special:GettingStarted, or E3Experiments not installed
		return false;
	}

	function getOptionsToken() {
		optionsPromise = api.get( {
			action: 'tokens',
			type: 'options'
		} )
		.done( function( data ) {
			if ( data.tokens ) {
				optionsToken = data.tokens.optionstoken;
			}
		} );
	}

	function prepareToSendOnTour( evt ) {
		var url = this.href;
		evt.preventDefault();
		// Wait until it succeeds or fails
		optionsPromise.always( function () {
			if ( optionsToken ) {
				api.post( {
					action: 'options',
					token: optionsToken,
					change: PREF_NAME + '=0'
				} )
				// Even if we couldn't save, still send on tour
				.always( function () {
					// XXX (mattflaschen, 2013-02-04): This is firing twice.
					// It's not a blocker, since it's idempotent, but I'd like to track it down.
					sendOnTour( url );
				} );
			}
		} );
	}

	/**
	 * Sends them to their intended article, after setting a tour cookie.
	 */
	function sendOnTour( url ) {
		gt.setTourCookie( 'gettingstarted' );
		window.location = url;
	}

	if ( shouldStartGettingStartedTour() ) {
		// Start getting the options token right away, rather than waiting until they click the link.
		getOptionsToken();

		$( function () {
			$( '#onboarding-tasks' ).on( 'click', 'a', prepareToSendOnTour);
		} );
	}
} ( jQuery, mediaWiki, mediaWiki.guidedTour ) );
