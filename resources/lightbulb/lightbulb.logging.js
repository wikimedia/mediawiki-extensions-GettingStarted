( function ( mw, $ ) {

	var platform = $.client.profile().platform,
		isRegistered = false;

	/**
	 * Logs the TaskRecommendationClick event.
	 *
	 * If the user clicks task recommendation link, then log a
	 * TaskRecommendationClick event. If the user follows the link in the same
	 * window, then ensure that the event is logged before following the link.
	 * Otherwise, simply log the event.
	 *
	 * At the time of writing, this function handles left/middle/right clicks
	 * in Chrome, Safari, Firefox. However, the following aren't handled:
	 *
	 * * middle and ctrl-clicks in IE8-11, and
	 * * middle clicks in Opera
	 *
	 * @param {jQuery.Event} event The left/middle/right click event
	 */
	function logTaskRecommendationClick( event ) {
		var shouldOpenInNewTab, $target, schemaName, eventInstance;

		if (
			!$( event.target ).is( '.mw-gettingstarted-lightbulb-suggestion a' )
			|| event.which === 3 // Is a right click?
		) {
			return;
		}

		shouldOpenInNewTab =
			( platform === 'mac' ? event.metaKey : event.ctrlKey )
			|| event.which === 2; // Was it a middle click?

		schemaName = 'TaskRecommendationClick';
		$target = $( event.target );
		eventInstance = {
			setId: $target.data( 'set-id' ),
			pageId: $target.data( 'page-id' )
		};

		if ( shouldOpenInNewTab ) {
			mw.eventLog.logEvent( schemaName, eventInstance );

			return;
		}

		event.preventDefault();

		mw.gettingStarted.logging.logEventOrTimeout( schemaName, eventInstance )
			.always( function () {
				window.location.href = $target.attr( 'href' );
			} );
	}

	mw.gettingStarted = mw.gettingStarted || {};
	mw.gettingStarted.lightbulb = mw.gettingStarted.lightbulb || {};

	mw.gettingStarted.lightbulb.logging = {

		/**
		 * Registers logging of task recommendation clicks with the
		 * TaskRecommendationClick schema.
		 */
		register: function() {
			if ( isRegistered ) {
				return;
			}

			$( document ).on( 'click.lightbulb', logTaskRecommendationClick );
			isRegistered = true;
		},

		/**
		 * Unregisters logging of task recommendation clicks.
		 */
		unregister: function() {
			$( document ).off( 'click.lightbulb' );
			isRegistered = false;
		}
	};


} ( mediaWiki, jQuery ) );
