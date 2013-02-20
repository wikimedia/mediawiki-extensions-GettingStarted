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
		if ( !isLoggedIn ) {
			// For now, we decided it's better not to show at all then show every time they
			// return to Special:GettingStarted (anonymous users can not change prefs)
			return false;
		}

		var prefValue = mw.user.options.get( PREF_NAME );
		return ( prefValue === null || prefValue === '1' );
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
					sendOnTour( url );
				} );
			}
		} );
	}

	function launchTaskGuider() {
		var $ancestorLi, stepNumber, tourId;
		$ancestorLi = $( this ).closest( 'li' );
		stepNumber = $ancestorLi.index() + 1;
		tourId = $ancestorLi.data( 'guiderId' );

		// Wait until the event is over before showing it, so the
		// event doesn't propagate up and hide the guider we just showed.
		window.setTimeout( function () {
			mw.libs.guiders.resume( tourId );
		}, 0 );
	}

	/**
	 * Sends them to their intended article, after setting a tour cookie.
	 */
	function sendOnTour( url ) {
		gt.setTourCookie( 'gettingstarted' );
		window.location = url;
	}

	shouldStartTour = shouldStartGettingStartedTour();
	if ( shouldStartTour ) {
		// Start getting the options token right away, rather than waiting until they click the link.
		getOptionsToken();
	}

	$( function () {
		var $taskLis = $('#onboarding-tasks li');

		// Show the appropriate step from the gettingstartedpage tour when the user clicks a
		// question mark help icon.
		$taskLis.find( '.onboarding-help' ).click( launchTaskGuider )
			.mouseenter( launchTaskGuider )
			.mouseleave( function() {
				gt.hideAll();
			} );

		if ( shouldStartTour ) {
			$( '.onboarding-article-list' ).on( 'click', 'a', prepareToSendOnTour);
		}
	} );
} ( jQuery, mediaWiki, mediaWiki.guidedTour ) );
