/* global moment */
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

	SuggestionRenderer.prototype.render = function ( suggestion ) {
		var $result = $( template ),
			lastEdited,
			url = mw.util.getUrl( suggestion.title );

		$result.find( 'a' )
			.attr( {
				href: url,
				'data-set-id': suggestion.setId,
				'data-page-id': suggestion.pageId
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

}( mediaWiki, jQuery ) );
