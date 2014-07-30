/*global moment*/
( function ( mw, $ ) {
	var notificationTemplate = '<div class="lightbulb-notification">\
									<div class="lightbulb-notification-header">\
										<h1></h1>\
										<a href="#hide" class="lightbulb-notification-hide"></a>\
									</div>\
									<div class="lightbulb-notification-body">\
										<p></p>\
									</div>\
								</div>',
		notificationBodyMsg = mw.msg( 'gettingstarted-lightbulb-notification-body' ),

		suggestionTemplate = '<div class="lightbulb-notification-suggestion">\
								<div class="lightbulb-notification-suggestion-image no-image"></div>\
								<div class="lightbulb-notification-suggestion-info">\
									<a></a><br />\
									<span class="lightbulb-notification-body-lastedited"></span>\
								</div>\
							</div>',
		parser;

	parser = {
		parse: function ( response ) {
			return $.map( response.pageids, function( pageid ) {
				var page = response.pages[pageid],
					suggestion = {
						title: page.title,
						thumbnail: page.thumbnail ? page.thumbnail.source : null,
						lastEdited: page.revisions[0].timestamp
					};
				return suggestion;
			} );
		}
	};

	function createNotification( suggestions, headerMsg ) {
		var $notification = $( notificationTemplate ),
			$notificationBody = $notification.find( '.lightbulb-notification-body' );

		$notification.find( 'h1' ).text( headerMsg );
		$notificationBody.find( 'p' ).text( notificationBodyMsg );

		$.each( suggestions, function ( i, suggestion ) {
			$notificationBody.append( renderSuggestion( suggestion ) );
		} );

		$notification.find( '.lightbulb-notification-hide' )
			.on( 'click', function ( event ) {
				event.preventDefault();
				$notification.remove();
			} );
		return $notification;
	}

	function renderSuggestion( suggestion ) {
		var $suggestion = $( suggestionTemplate ),
			suggestionHref = mw.util.getUrl( suggestion.title ),
			lastEdited;

		$suggestion.find( '.lightbulb-notification-suggestion-info a' )
			.text( suggestion.title )
			.attr( 'href', suggestionHref );
		if ( suggestion.thumbnail ) {
			$suggestion.find( '.lightbulb-notification-suggestion-image' )
				.removeClass( 'no-image' )
				.css( 'background-image', 'url(' + suggestion.thumbnail + ')' );
		}

		lastEdited = mw.msg(
			'gettingstarted-lightbulb-notification-body-lastedited',
			moment( suggestion.lastEdited ).fromNow()
		);
		$suggestion.find( '.lightbulb-notification-body-lastedited' )
			.text( lastEdited );
		return $suggestion;
	}

	mw.hook( 'postEdit' ).add( function ( data ) {
		var suggestionsPromise,
			api = new mw.gettingStarted.Api();

		suggestionsPromise = api.getSuggestions( {
			excludedTitle: mw.config.get( 'wgPageName' ),
			count: 1,
			thumbSize: 70
		} );

		suggestionsPromise.done( function ( response ) {
			var suggestions,
				$notification;

			suggestions = parser.parse( response );
			$notification = createNotification( suggestions, data.message );

			// Show the notification.
			$( document.body ).append( $notification );
		} );
	} );

} ( mediaWiki, jQuery ) );
