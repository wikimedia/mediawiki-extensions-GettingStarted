( function ( $, mw, gt ) {
	var PREF_NAME = 'userjs-gettingstarted-showtour',
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
					sendOnTour( url );
				} );
			}
		} );
	}

	/**
	 * Launches an on-page guider
	 *
	 * @param {HTMLElement} el help element
	 * @param {boolean} isClick true if triggered by click, false otherwise
	 */
	function launchTaskGuider( el, isClick ) {
		var $ancestorLi, tourId;
		$ancestorLi = $( el ).closest( 'li' );
		tourId = $ancestorLi.data( 'guiderId' );

		if ( isClick ) {
			// Wait until the event is over before showing it, so the click
			// event doesn't propagate up and hide the guider we just showed.
			window.setTimeout( function () {
				mw.libs.guiders.resume( tourId );
			}, 0 );
		} else {
			mw.libs.guiders.resume( tourId );
		}
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

		// When the user interacts with a help icon (question mark), show the appropriate step from the on-page guider.
		// When they end hover, hide the guiders.
		$taskLis.find( '.onboarding-help' ).click( function () {
			launchTaskGuider( this, true );
		} )
		.mouseenter( function () {
			launchTaskGuider( this, false );
		} )
		.mouseleave( function() {
			gt.hideAll();
		} );

		if ( shouldStartTour ) {
			$( '.onboarding-article-list' ).on( 'click', 'a', prepareToSendOnTour);
		}
	} );
} ( jQuery, mediaWiki, mediaWiki.guidedTour ) );
