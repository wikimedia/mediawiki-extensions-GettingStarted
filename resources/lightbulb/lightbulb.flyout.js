( function ( mw, $ ) {

	var MAX_SUGGESTION_PER_PAGE_COUNT = 3,
		MAX_PAGE_COUNT = 3,
		flyoutTemplate =
			'<div class="lightbulb-flyout guider">\
				<h1></h1>\
				<p></p>\
				<ol class="lightbulb-suggestions">\
				</ol>\
				<div class="mw-gettingstarted-lightbulb-flyout-pagination">\
					<button class="mw-ui-button mw-gettingstarted-lightbulb-flyout-pagination-button-icon mw-gettingstarted-lightbulb-flyout-back"></button>\
					<button class="mw-ui-button mw-gettingstarted-lightbulb-flyout-pagination-button-icon mw-gettingstarted-lightbulb-flyout-next"></button>\
				</div>\
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
		parser = new mw.gettingStarted.lightbulb.Parser(),
		suggestionRenderer = new mw.gettingStarted.lightbulb.SuggestionRenderer(),
		currentFlyoutPageIndex; // 0-based

	function renderFlyout() {

		// By default, the flyout is hidden.
		var $flyout = $( flyoutTemplate ).hide();

		$flyout.find( 'h1' ).text( mw.msg( 'gettingstarted-lightbulb-heading' ) );
		$flyout.find( 'p' ).text( mw.msg( 'gettingstarted-lightbulb-text' ) );

		return $flyout;
	}

	/**
	 * Adds the suggestions to the flyout.  This sets up pagination and shows the
	 * first page of suggestions.
	 *
	 * @param {jQuery} $flyout Flyout jQuery set
	 * @param {Array} suggestions Array of suggestions from the parser
	 */
	function addSuggestionsToFlyout( $flyout, suggestions ) {
		var $nextButton,
			$pagination = $flyout.find( '.mw-gettingstarted-lightbulb-flyout-pagination' ),
			pageCount = Math.ceil( suggestions.length / MAX_SUGGESTION_PER_PAGE_COUNT ),
			i;

		$pagination.find( '.mw-gettingstarted-lightbulb-flyout-back' )
			.attr( 'title', mw.msg( 'gettingstarted-lightbulb-flyout-back' ) )
			.click( function () {
				currentFlyoutPageIndex--;
				renderFlyoutPage( $flyout, suggestions, currentFlyoutPageIndex, pageCount );
			} );


		$nextButton = $pagination
			.find( '.mw-gettingstarted-lightbulb-flyout-next' )
			.attr( 'title', mw.msg( 'gettingstarted-lightbulb-flyout-next' ) )
			.click( function () {
				currentFlyoutPageIndex++;
				renderFlyoutPage( $flyout, suggestions, currentFlyoutPageIndex, pageCount );
			} );
		if ( pageCount > 1 ) {
			for ( i = 0; i < pageCount; i++ ) {
				$( '<span> ' )
					.attr( 'class', 'mw-gettingstarted-lightbulb-flyout-pagination-disc' )
					.text( '●' )
					.insertBefore( $nextButton );
			}
		} else {
			$pagination.hide();
		}

		currentFlyoutPageIndex = 0;
		renderFlyoutPage( $flyout, suggestions, currentFlyoutPageIndex, pageCount );
	}

	/**
	 * Updates the flyout to render a particular page
	 *
	 * @param {jQuery} $flyout jQuery set for flyout
	 * @param {Array} suggestions Full list of suggestions
	 * @param {Number} pageIndex Page index to show, 0-based
	 * @param {Number} pageCount Number of pages
	 */
	function renderFlyoutPage( $flyout, suggestions, pageIndex, pageCount ) {
		var $suggestions = $flyout.find( '.lightbulb-suggestions' ),
			$newSuggestions = $( '<ol>' ).attr( 'class', 'lightbulb-suggestions' ),
			suggestion,
			$suggestion,
			$prevButton,
			$nextButton,
			suggestionStartIndex = pageIndex * MAX_SUGGESTION_PER_PAGE_COUNT,
			$li,
			i;

		for ( i = 0; i < MAX_SUGGESTION_PER_PAGE_COUNT && ( suggestionStartIndex + i ) < suggestions.length; i++ ) {
			suggestion = suggestions[suggestionStartIndex + i];
			$suggestion = suggestionRenderer.render( suggestion );
			$li = $( '<li></li>' ).append( $suggestion );

			$newSuggestions.append( $li );
		}

		// There can be 0 discs, in which case this is a noop.
		$flyout.find( '.mw-gettingstarted-lightbulb-flyout-pagination-disc' )
			.removeClass( 'mw-gettingstarted-lightbulb-flyout-selected-page' )
			.eq( pageIndex )
			.addClass( 'mw-gettingstarted-lightbulb-flyout-selected-page' );

		$prevButton = $flyout.find( '.mw-gettingstarted-lightbulb-flyout-back' )
			.prop( 'disabled', pageIndex === 0 );

		$nextButton = $flyout.find( '.mw-gettingstarted-lightbulb-flyout-next' )
			.prop( 'disabled', pageIndex === ( pageCount - 1 ) );

		$suggestions.replaceWith( $newSuggestions );
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

	// TODO (mattflaschen, 2014-08-11): Generate this server-side
	// hide it for no JS, and by default, and show it if it's a supported browser
	// (or hide it for blacklisted ones)

	/**
	 * Adds	lightbulb icon (for flyout) and renders flyout except suggestions
	 */
	function addFlyout() {
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
						count: MAX_SUGGESTION_PER_PAGE_COUNT * MAX_PAGE_COUNT,
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
	}

	$( function () {
		// This will return true for IE >= 8 and non-IE browsers
		if ( $.client.test( {
			msie: [ [ '>=', 8 ] ]
		} ) ) {
			addFlyout();
		}
	} );
} ( mediaWiki, jQuery ) );
