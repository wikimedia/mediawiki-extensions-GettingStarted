( function ( mw, $ ) {

	var flyoutTemplate =
			'<div class="lightbulb-flyout guider">\
				<h1></h1>\
				<p></p>\
				<ol class="lightbulb-suggestions">\
				</ol>\
				<div class="guider_arrow guider_arrow_up guider_arrow_center">\
					<div class="guider_arrow_inner_container">\
						<div class="guider_arrow_inner"></div>\
					</div>\
				</div>\
			</div>',
		lightbulbTemplate =
			'<li class="personal-tool personal-tool-recommendations">\
				<a href="#recommendations"></a>\
			</li>',
		POKEY_HEIGHT = 42, // (px) (See mediawiki.libs.guiders.js, L183)
		FLYOUT_WIDTH = 390, // (px)
		parser = new mw.gettingStarted.lightbulb.Parser();

	function renderFlyout() {

		// By default, the flyout is hidden.
		var $flyout = $( flyoutTemplate ).hide();

		$flyout.find( 'h1' ).text( mw.msg( 'gettingstarted-lightbulb-heading' ) );
		$flyout.find( 'p' ).text( mw.msg( 'gettingstarted-lightbulb-text' ) );

		return $flyout;
	}

	function addSuggestionsToFlyout( $flyout, suggestions ) {
		var $suggestions = $flyout.find( '.lightbulb-suggestions' ),
			suggestionView = new mw.gettingStarted.lightbulb.SuggestionView();

		$.each( suggestions, function ( i, suggestion ) {
			var $suggestion = suggestionView.render( suggestion ),
				$li = $( '<li></li>' ).append( $suggestion );

			$suggestions.append( $li );
		} );
	}

	function renderLightbulb() {
		var $lightbulb = $( lightbulbTemplate );

		$lightbulb.find( 'a' ).text( mw.msg( 'gettingstarted-lightbulb-recommendations-personal-tool' ) );

		return $lightbulb;
	}

	function positionFlyout( $flyout, $target ) {
		var targetOffset,
			top,
			left;

		targetOffset = $target.offset();
		top = targetOffset.top + $target.innerHeight() + ( POKEY_HEIGHT / 2 ) - 5;

		// XXX (phuedx, 2014/07/30): $flyout.width and
		// innerWidth( {false,true} ) don't work here, even with
		// visibility: hidden in place of display: none. Why?
		left = targetOffset.left + ( $target.innerWidth() / 2 ) - ( FLYOUT_WIDTH / 2 );

		$flyout.css( {
			top: parseInt( top, 10 ) + 'px',
			left: parseInt( left, 10 ) + 'px'
		} );
	}

	$( function () {
		var $lightbulb = renderLightbulb(),
			$flyout = renderFlyout();

		$lightbulb.on( 'click', 'a', function ( event ) {
			var api;

			event.preventDefault();

			mw.eventLog.logEvent( 'TaskRecommendationLightbulbClick', {
				userId: mw.config.get( 'wgUserId' )
			} );

			if ( $flyout.data( 'has-suggestions' ) ) {
				$flyout.toggle();

				return;
			}

			api = new mw.gettingStarted.Api();
			api.getLastArticleUserEdited( mw.user.getName() )
				.done( function ( title ) {
					api.getSuggestions( {
						excludedTitle: title,
						count: 3,
						thumbSize: 70
					} ).done( function ( response ) {
						var suggestions = parser.parse( response );

						addSuggestionsToFlyout( $flyout, suggestions );
						positionFlyout( $flyout, $lightbulb );

						$flyout.data( 'has-suggestions', true );

						$flyout.show();
					} );
				} );
		} );

		$( '#p-personal ul' ).prepend( $lightbulb );
		$( document.body ).append( $flyout );
	} );

} ( mediaWiki, jQuery ) );
