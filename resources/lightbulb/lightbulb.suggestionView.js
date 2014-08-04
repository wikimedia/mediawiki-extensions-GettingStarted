/*global moment */
( function ( mw, $ ) {

	var template =
		'<div class="lightbulb-suggestion clearfix">\
			<div class="lightbulb-suggestion-image no-image"></div>\
			<a class="lightbulb-suggestion-overlay"></a>\
			<div class="lightbulb-suggestion-info">\
				<a></a><br />\
				<span class="lightbulb-suggestion-info-lastedited"></span>\
			</div>\
		</div>';

	function SuggestionView() {}

	SuggestionView.prototype.render = function( suggestion ) {
		var $result = $( template ),
			lastEdited;

		// Set href attribute of the overlay and info links.
		$result.find( 'a' )
			.attr( 'href', mw.util.getUrl( suggestion.title ) );

		$result.find( '.lightbulb-suggestion-overlay' )
			.attr( 'title', suggestion.title );

		$result.find( '.lightbulb-suggestion-info a' )
			.text( suggestion.title );

		if ( suggestion.thumbnail ) {
			$result.find( '.lightbulb-suggestion-image' )
				.removeClass( 'no-image' )
				.css( 'background-image', 'url(' + suggestion.thumbnail + ')' );
		}

		lastEdited = mw.msg(
			'gettingstarted-lightbulb-notification-body-lastedited',
			moment( suggestion.lastEdited ).fromNow()
		);
		$result.find( '.lightbulb-suggestion-info-lastedited' )
			.text( lastEdited );

		return $result;
	};

	mw.gettingStarted = mw.gettingStarted || {};
	mw.gettingStarted.lightbulb = mw.gettingStarted.lightbulb || {};

	mw.gettingStarted.lightbulb.SuggestionView = SuggestionView;

} ( mediaWiki, jQuery ) );
