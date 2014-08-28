( function ( mw, $ ) {
	var notificationTemplate = '<div class="mw-gettingstarted-lightbulb-notification">\
									<div class="mw-gettingstarted-lightbulb-notification-header">\
										<h1></h1>\
										<a href="#hide" class="mw-gettingstarted-lightbulb-notification-hide"></a>\
									</div>\
									<div class="mw-gettingstarted-lightbulb-notification-body">\
										<p></p>\
									</div>\
								</div>',
		notificationBodyMsg = mw.msg( 'gettingstarted-lightbulb-notification-body' ),
		parser = new mw.gettingStarted.lightbulb.Parser(),
		mwConfig = mw.config.get( [ 'wgArticleId', 'wgUserId' ] );

	function createNotification( suggestions, headerMsg ) {
		var $notification = $( notificationTemplate ),
			$notificationBody = $notification.find( '.mw-gettingstarted-lightbulb-notification-body' ),
			suggestionRenderer = new mw.gettingStarted.lightbulb.SuggestionRenderer();

		$notification.find( 'h1' ).text( headerMsg );
		$notificationBody.find( 'p' ).text( notificationBodyMsg );

		if ( suggestions.length > 0 ) {
			$notificationBody.append( suggestionRenderer.render( suggestions[0] ) );
		} else {
			$notificationBody.hide();
		}

		$notification.find( '.mw-gettingstarted-lightbulb-notification-hide' )
			.on( 'click', function ( event ) {
				event.preventDefault();
				$notification.remove();
			} );
		return $notification;
	}

	mw.hook( 'postEdit' ).add( function ( data ) {
		var suggestionsPromise,
			api = new mw.gettingStarted.Api();

		suggestionsPromise = api.getSuggestions( {
			excludedTitle: mw.config.get( 'wgPageName' ),
			count: 1,
			thumbSize: 70
		} );

		suggestionsPromise.always( function ( response ) {
			var suggestions = [],
				$notification;

			if ( suggestionsPromise.state() === 'resolved' ) {
				suggestions = parser.parse( response );
			}

			$notification = createNotification( suggestions, data.message );

			// Show the notification.
			$( document.body ).append( $notification );

			// Log Impression
			mw.eventLog.logEvent( 'TaskRecommendationImpression', {
				setId: suggestions[0].setId,
				userId: mwConfig.wgUserId,
				pageId: mwConfig.wgArticleId,
				'interface': 'post-edit',
				offset: 0
			} );
		} );
	} );

} ( mediaWiki, jQuery ) );
