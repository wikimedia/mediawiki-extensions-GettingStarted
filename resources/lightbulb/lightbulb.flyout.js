( function ( mw, $ ) {

	var MAX_SUGGESTION_PER_PAGE_COUNT = 3,
		MAX_PAGE_COUNT = 3,
		flyoutTemplate =
			'<div class="mw-gettingstarted-lightbulb-flyout guider">\
				<h1></h1>\
				<p></p>\
				<ol class="mw-gettingstarted-lightbulb-suggestions">\
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
		POKEY_HEIGHT = 42, // (px) (See mediawiki.libs.guiders.js, L183)
		FLYOUT_WIDTH = 390, // (px)
		parser = new mw.gettingStarted.lightbulb.Parser(),
		suggestionRenderer = new mw.gettingStarted.lightbulb.SuggestionRenderer(),
		currentFlyoutPageIndex, // 0-based
		mwConfig = mw.config.get( [ 'wgArticleId', 'wgUserId' ] ),
		$lightbulb = $( '.mw-gettingstarted-personal-tool-recommendations' ),
		$flyout = null,
		requestingSuggestions = false;

	function renderFlyout() {

		// By default, the flyout is hidden.
		var $flyout = $( flyoutTemplate ).hide();

		$flyout.find( 'h1' ).text( mw.msg( 'gettingstarted-lightbulb-heading' ) );
		$flyout.find( 'p' ).text( mw.msg( 'gettingstarted-lightbulb-text' ) );

		return $flyout;
	}

	/**
	 * Returns a click handler for a pagination disc
	 *
	 * @param {jQuery} $flyout jQuery set for flyout
	 * @param {Array} suggestions Full list of suggestions
	 * @param {Number} index Index of page this disc refers to
	 * @param {Number} pageCount Number of pages
	 *
	 * @return {Function} Click handler
	 */
	function getPaginationDiscHandler( $flyout, suggestions, index, pageCount ) {
		return function () {
			if ( index !== currentFlyoutPageIndex ) {
				currentFlyoutPageIndex = index;
				renderFlyoutPage( $flyout, suggestions, currentFlyoutPageIndex, pageCount );
			}
		};
	}

	/**
	 * Adds the suggestions to the flyout.  This sets up pagination and shows the
	 * first page of suggestions.
	 *
	 * @param {Array} suggestions Array of suggestions from the parser
	 */
	function addSuggestionsToFlyout( suggestions ) {
		var $nextButton,
			$pagination = $flyout.find( '.mw-gettingstarted-lightbulb-flyout-pagination' ),
			pageCount = Math.ceil( suggestions.length / MAX_SUGGESTION_PER_PAGE_COUNT ),
			i,
			discHandler;

		$pagination.find( '.mw-gettingstarted-lightbulb-flyout-back' )
			.attr( 'title', mw.msg( 'gettingstarted-lightbulb-flyout-back' ) )
			.click( function () {
				currentFlyoutPageIndex--;
				renderFlyoutPage( suggestions, currentFlyoutPageIndex, pageCount );
			} );


		$nextButton = $pagination
			.find( '.mw-gettingstarted-lightbulb-flyout-next' )
			.attr( 'title', mw.msg( 'gettingstarted-lightbulb-flyout-next' ) )
			.click( function () {
				currentFlyoutPageIndex++;
				renderFlyoutPage( suggestions, currentFlyoutPageIndex, pageCount );
			} );
		if ( pageCount > 1 ) {
			for ( i = 0; i < pageCount; i++ ) {
				discHandler = getPaginationDiscHandler( $flyout, suggestions, i, pageCount );
				$( '<span> ' )
					.attr( 'class', 'mw-gettingstarted-lightbulb-flyout-pagination-disc' )
					.text( '●' )
					.insertBefore( $nextButton )
					.on( 'click', discHandler );

			}
		} else {
			$pagination.hide();
		}

		currentFlyoutPageIndex = 0;
		renderFlyoutPage( suggestions, currentFlyoutPageIndex, pageCount );
	}

	/**
	 * Updates the flyout to render a particular page
	 *
	 * @param {Array} suggestions Full list of suggestions
	 * @param {Number} pageIndex Page index to show, 0-based
	 * @param {Number} pageCount Number of pages
	 */
	function renderFlyoutPage( suggestions, pageIndex, pageCount ) {
		var $suggestions = $flyout.find( '.mw-gettingstarted-lightbulb-suggestions' ),
			$newSuggestions = $( '<ol>' ).attr( 'class', 'mw-gettingstarted-lightbulb-suggestions' ),
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

		// Log Impression
		mw.eventLog.logEvent( 'TaskRecommendationImpression', {
			setId: suggestions[0].setId,
			userId: mwConfig.wgUserId,
			pageId: mwConfig.wgArticleId,
			'interface': 'flyout',
			offset: pageIndex
		} );
	}

	function positionFlyout() {
		var	lightbulbOffset,
			top,
			left;

		lightbulbOffset = $lightbulb.offset();
		top = lightbulbOffset.top + $lightbulb.innerHeight() + ( POKEY_HEIGHT / 2 ) - 5;

		// XXX (phuedx, 2014/07/30): $flyout.width and
		// innerWidth( {false,true} ) don't work here, even with
		// visibility: hidden in place of display: none. Why?
		left = lightbulbOffset.left + ( $lightbulb.innerWidth() / 2 ) - ( FLYOUT_WIDTH / 2 );

		$flyout.css( {
			top: parseInt( top, 10 ) + 'px',
			left: parseInt( left, 10 ) + 'px'
		} );
	}

	/**
	 * Handles a document click.  If the user clicked outside the flyout, close
	 * it, unless they clicked on the recommendations link
	 *
	 * @param {jQuery.Event} evt Click event
	 */
	function checkForClickOutside( evt ) {
		var $target;

		$target = $( evt.target );
		if ( $target.is( $lightbulb ) ) {
			// Don't want a click on the lightbulb/Recommendations text to show than
			// immediately hide the flyout.  Can't use stopPropagation because it would
			// block other such handlers (e.g. the Echo flyout would not hide
			// when you click Recommendations).

			return;
		}

		if ( $target.closest( $flyout ).length === 0 ) {
			hideFlyout();
		}
	}

	/**
	 * Shows the flyout and unregisters the document event listener
	 *
	 */
	function showFlyout() {
		$( document ).on( 'click', checkForClickOutside );
		$( window ).on( 'resize', positionFlyout );
		$flyout.show();
	}

	/**
	 * Hides the flyout and unregisters the document event listener
	 *
	 */
	function hideFlyout() {
		$flyout.hide();
		$( document ).off( 'click', checkForClickOutside );
		$( window ).off( 'resize', positionFlyout );
	}

	/**
	 * Adds	lightbulb icon (for flyout) and renders flyout except suggestions
	 */
	function addFlyout() {
		$flyout = renderFlyout();

		$lightbulb.on( 'click', function ( event ) {
			var api;

			event.preventDefault();

			mw.eventLog.logEvent( 'TaskRecommendationLightbulbClick', {
				userId: mwConfig.wgUserId
			} );

			// Prevent multiple api requests from firing
			if ( requestingSuggestions ) {
				return;
			}

			if ( $flyout.data( 'has-suggestions' ) ) {
				if ( $flyout.is( ':visible' ) ) {
					hideFlyout();
				} else {
					showFlyout();
				}

				return;
			}

			requestingSuggestions = true;
			api = new mw.gettingStarted.Api();
			api.getLastArticleUserEdited( mw.user.getName() )
				.done( function ( title ) {
					api.getSuggestions( {
						excludedTitle: title,
						count: MAX_SUGGESTION_PER_PAGE_COUNT * MAX_PAGE_COUNT,
						thumbSize: 70
					} ).done( function ( response ) {
						var suggestions = parser.parse( response );

						addSuggestionsToFlyout( suggestions );
						positionFlyout();

						$flyout.data( 'has-suggestions', true );
						requestingSuggestions = false;

						showFlyout();
					} );
				} );
		} );

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
