/*global moment */
( function ( mw, $ ) {

	var template =
		'<div class="mw-gettingstarted-lightbulb-suggestion mw-gettingstarted-clearfix">\
			<div class="mw-gettingstarted-lightbulb-suggestion-image mw-gettingstarted-lightbulb-suggestion-image-no-image"></div>\
			<a class="mw-gettingstarted-lightbulb-suggestion-overlay"></a>\
			<div class="mw-gettingstarted-lightbulb-suggestion-info">\
				<a></a>\
				<span class="mw-gettingstarted-lightbulb-suggestion-info-lastedited"></span>\
			</div>\
		</div>';

	function SuggestionRenderer() {}

	SuggestionRenderer.prototype.render = function( suggestion ) {
		var $result = $( template ),
			lastEdited,
			url = mw.util.getUrl( suggestion.title );

		// Set href attribute of the overlay and info links.
		$result.find( 'a' )
			.attr( 'href', url )
			.on( 'click', function ( event ) {
				event.preventDefault();
				// Log Task click and then go to the article
				mw.gettingStarted.logging.logEventOrTimeout( 'TaskRecommendationClick', {
					setId: suggestion.setId,
					pageId: suggestion.pageId
				} ).always( function () {
					window.location.href = url;
				} );
			} );

		$result.find( '.mw-gettingstarted-lightbulb-suggestion-overlay' )
			.attr( 'title', suggestion.title );

		$result.find( '.mw-gettingstarted-lightbulb-suggestion-info a' )
			.text( suggestion.title );

		if ( suggestion.thumbnail ) {
			$result.find( '.mw-gettingstarted-lightbulb-suggestion-image' )
				.removeClass( 'mw-gettingstarted-lightbulb-suggestion-image-no-image' )
				.css( 'background-image', 'url(' + suggestion.thumbnail + ')' );
		}

		lastEdited = mw.msg(
			'gettingstarted-lightbulb-notification-body-lastedited',
			moment( suggestion.lastEdited ).fromNow()
		);
		$result.find( '.mw-gettingstarted-lightbulb-suggestion-info-lastedited' )
			.text( lastEdited );

		return $result;
	};

	mw.gettingStarted = mw.gettingStarted || {};
	mw.gettingStarted.lightbulb = mw.gettingStarted.lightbulb || {};

	mw.gettingStarted.lightbulb.SuggestionRenderer = SuggestionRenderer;

} ( mediaWiki, jQuery ) );
