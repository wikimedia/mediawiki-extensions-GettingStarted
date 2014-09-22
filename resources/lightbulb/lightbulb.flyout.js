( function ( mw, $ ) {

	var MAX_SUGGESTION_PER_PAGE_COUNT = 3,
		MAX_PAGE_COUNT = 3,
		flyoutTemplate =
			'<div class="mw-gettingstarted-lightbulb-flyout guider">\
				<div class="mw-gettingstarted-lightbulb-flyout-head">\
					<h1 class="mw-gettingstarted-lightbulb-flyout-heading"></h1>\
					<p class="mw-gettingstarted-lightbulb-flyout-text"></p>\
				</div>\
				<div class="mw-gettingstarted-lightbulb-suggestions-wrapper">\
					<div class="mw-gettingstarted-lightbulb-suggestions-container"></div>\
				</div>\
				<div class="mw-gettingstarted-lightbulb-flyout-pagination">\
					<button class="mw-ui-button mw-gettingstarted-lightbulb-flyout-pagination-button-icon mw-gettingstarted-lightbulb-flyout-back"></button>\
					<button class="mw-ui-button mw-gettingstarted-lightbulb-flyout-pagination-button-icon mw-gettingstarted-lightbulb-flyout-next"></button>\
				</div>\
				<div class="mw-gettingstarted-lightbulb-flyout-error-state">\
					<div class="mw-gettingstarted-lightbulb-flyout-error-state-body">\
						<div class="mw-gettingstarted-lightbulb-flyout-error-state-image"></div>\
						<p class="mw-gettingstarted-lightbulb-flyout-error-state-primary-text"></p>\
						<p class="mw-gettingstarted-lightbulb-flyout-error-state-secondary-text"></p>\
					</div>\
					<a class="mw-gettingstarted-lightbulb-flyout-error-state-button mw-ui-button mw-gettingstarted-lightbulb-flyout-error-state  mw-ui-progressive" href="javascript:void(0);">\
						<span class="mw-gettingstarted-lightbulb-flyout-error-state-button-icon"></span>\
						<span class="mw-gettingstarted-lightbulb-flyout-error-state-button-text"></span>\
					</a>\
				</div>\
				<div class="mw-gettingstarted-lightbulb-flyout-loader">\
					<div class="mw-gettingstarted-lightbulb-flyout-loader-spinner"></div>\
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
		suggestions = null,
		mwConfig = mw.config.get( [ 'wgArticleId', 'wgUserId' ] ),
		$lightbulb = $( '.mw-gettingstarted-personal-tool-recommendations' ),
		$flyout = null,
		requestingSuggestions = false;

	function renderFlyout() {

		var $flyout = $( flyoutTemplate ).hide(),
			$errorState = $flyout.find( '.mw-gettingstarted-lightbulb-flyout-error-state' );

		$flyout.find( '.mw-gettingstarted-lightbulb-flyout-heading' )
			.text( mw.msg( 'gettingstarted-lightbulb-heading' ) );

		$flyout.find( '.mw-gettingstarted-lightbulb-flyout-text' )
			.text( mw.msg( 'gettingstarted-lightbulb-text' ) );

		$flyout.find( '.mw-gettingstarted-lightbulb-flyout-error-state-button' )
			.on( 'click', function () {
				/* TODO: rmoen 9-3-14 add loading state for when flyout opens
						 and when additional api requests are made */
				if ( $errorState.hasClass( 'mw-gettingstarted-lightbulb-flyout-error-state-no-article-edits' ) ) {
					window.location.href = mw.util.getUrl( 'Special:Random/' );
				} else {
					requestSuggestions();
				}
			} );

		return $flyout;
	}

	/**
	 * Returns a click handler for a pagination disc
	 *
	 * @param {Number} index Index of page this disc refers to
	 * @param {Number} pageCount Number of pages
	 *
	 * @return {Function} Click handler
	 */
	function getPaginationDiscHandler( index, pageCount ) {
		return function () {
			if ( index !== currentFlyoutPageIndex ) {
				currentFlyoutPageIndex = index;
				showFlyoutPage( currentFlyoutPageIndex, pageCount );
			}
		};
	}

	/**
	 * Adds the suggestions to the flyout.  This sets up pagination and shows the
	 * first page of suggestions.
	 */
	function addSuggestionsToFlyout() {
		var $nextButton,
			$pagination = $flyout.find( '.mw-gettingstarted-lightbulb-flyout-pagination' ),
			pageCount = Math.ceil( suggestions.length / MAX_SUGGESTION_PER_PAGE_COUNT ),
			i,
			discHandler;

		$pagination.find( '.mw-gettingstarted-lightbulb-flyout-back' )
			.attr( 'title', mw.msg( 'gettingstarted-lightbulb-flyout-back' ) )
			.click( function () {
				currentFlyoutPageIndex--;
				showFlyoutPage( currentFlyoutPageIndex, pageCount );
			} );


		$nextButton = $pagination
			.find( '.mw-gettingstarted-lightbulb-flyout-next' )
			.attr( 'title', mw.msg( 'gettingstarted-lightbulb-flyout-next' ) )
			.click( function () {
				currentFlyoutPageIndex++;
				showFlyoutPage( currentFlyoutPageIndex, pageCount );
			} );

		for ( i = 0; i < pageCount; i++ ) {
			if ( pageCount > 1 ) {
				discHandler = getPaginationDiscHandler( i, pageCount );
				$( '<span> ' )
					.attr( 'class', 'mw-gettingstarted-lightbulb-flyout-pagination-disc' )
					.text( '●' )
					.insertBefore( $nextButton )
					.on( 'click', discHandler );
			}
			addFlyoutPage( i );
		}

		// Show key elements in flyout
		if ( pageCount > 1 ) {
			$pagination.show();
		} else {
			$pagination.hide();
		}


		$flyout.addClass( 'mw-gettingstarted-lightbulb-flyout-recommendations' );
		$flyout.removeClass( 'mw-gettingstarted-lightbulb-flyout-error' );

		currentFlyoutPageIndex = 0;
		showFlyoutPage( currentFlyoutPageIndex, pageCount );
	}

	/**
	 * Adds error state to the flyout
	 * @param {string} error string either no-recommendations, or no-article-edits
	 */
	function addErrorStateToFlyout( error ) {
		var $errorState = $flyout.find( '.mw-gettingstarted-lightbulb-flyout-error-state' ),
			$errorStateButton = $errorState.find( '.mw-gettingstarted-lightbulb-flyout-error-state-button' ),
			$errorStatePrimaryText = $errorState.find( '.mw-gettingstarted-lightbulb-flyout-error-state-primary-text' ),
			$errorStateSecondaryText = $errorState.find( '.mw-gettingstarted-lightbulb-flyout-error-state-secondary-text' );

		$flyout.removeClass( 'mw-gettingstarted-lightbulb-flyout-recommendations' );
		$flyout.addClass( 'mw-gettingstarted-lightbulb-flyout-error' );
		$errorState.addClass( 'mw-gettingstarted-lightbulb-flyout-error-state-' + error );
		$errorStateButton.find( '.mw-gettingstarted-lightbulb-flyout-error-state-button-text' )
			.text( mw.msg( 'gettingstarted-lightbulb-flyout-error-state-button-text-' + error ) );

		$errorStatePrimaryText.text(
			mw.msg( 'gettingstarted-lightbulb-flyout-error-state-primary-text-' + error )
		);
		$errorStateSecondaryText.text(
			mw.msg( 'gettingstarted-lightbulb-flyout-error-state-secondary-text-' + error )
		);
	}

	/**
	 * Adds a page of new suggestions to the flyout
	 *
	 * @param {Number} pageIndex Page index to show, 0-based
	 * @param {Number} pageCount Number of pages
	 */
	function addFlyoutPage( pageIndex ) {
		var $suggestions = $flyout.find( '.mw-gettingstarted-lightbulb-suggestions-container' ),
			$newSuggestions = $( '<ol>' ).attr( 'class', 'mw-gettingstarted-lightbulb-suggestions' ),
			suggestion,
			$suggestion,
			suggestionStartIndex = pageIndex * MAX_SUGGESTION_PER_PAGE_COUNT,
			$li,
			i;

		for ( i = 0; i < MAX_SUGGESTION_PER_PAGE_COUNT && ( suggestionStartIndex + i ) < suggestions.length; i++ ) {
			suggestion = suggestions[suggestionStartIndex + i];
			$suggestion = suggestionRenderer.render( suggestion );
			$li = $( '<li></li>' ).append( $suggestion );

			$newSuggestions.append( $li );
		}

		$suggestions.append( $newSuggestions );
	}

	/**
	 * Puts a particular page in the flyout into view
	 *
	 * @param {Number} pageIndex Page index to show, 0-based
	 * @param {Number} pageCount Number of pages
	 */
	function showFlyoutPage( pageIndex, pageCount ) {
		var suggestionWidth = $flyout.find( '.mw-gettingstarted-lightbulb-suggestions' ).outerWidth(),
			leftOffset = - ( pageIndex * suggestionWidth );

		// There can be 0 discs, in which case this is a noop.
		$flyout.find( '.mw-gettingstarted-lightbulb-flyout-pagination-disc' )
			.removeClass( 'mw-gettingstarted-lightbulb-flyout-selected-page' )
			.eq( pageIndex )
			.addClass( 'mw-gettingstarted-lightbulb-flyout-selected-page' );

		// Setup back and next buttons
		$flyout.find( '.mw-gettingstarted-lightbulb-flyout-back' )
			.prop( 'disabled', pageIndex === 0 );

		$flyout.find( '.mw-gettingstarted-lightbulb-flyout-next' )
			.prop( 'disabled', pageIndex === ( pageCount - 1 ) );

		// Slide into view
		$flyout.find( '.mw-gettingstarted-lightbulb-suggestions-container' )
			.css( 'left', leftOffset );

		logTaskRecommendationImpression();
	}

	/**
	 * Logs TaskRecommendationImpression schema
	 */
	function logTaskRecommendationImpression () {
		if ( suggestions ) {
			mw.eventLog.logEvent( 'TaskRecommendationImpression', {
				setId: suggestions[0].setId,
				userId: mwConfig.wgUserId,
				pageId: mwConfig.wgArticleId,
				'interface': 'flyout',
				offset: currentFlyoutPageIndex * MAX_SUGGESTION_PER_PAGE_COUNT
			} );
		}
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
	 * Shows the flyout and registers the document event listener
	 *
	 */
	function showFlyout() {
		positionFlyout( $flyout, $lightbulb );
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
			event.preventDefault();

			mw.eventLog.logEvent( 'TaskRecommendationLightbulbClick', {
				userId: mwConfig.wgUserId
			} );

			// Prevent multiple api requests from firing
			if ( requestingSuggestions ) {
				return;
			}

			if ( suggestions || $flyout.hasClass( 'mw-gettingstarted-lightbulb-flyout-error' ) ) {
				if ( $flyout.is( ':visible' ) ) {
					hideFlyout();
				} else {
					showFlyout();
					logTaskRecommendationImpression();
				}

				return;
			}

			requestSuggestions();
		} );

		$( document.body ).append( $flyout );
	}

	function requestSuggestions() {
		var api = new mw.gettingStarted.Api();

		$flyout.addClass( 'mw-gettingstarted-lightbulb-flyout-loading' );
		showFlyout();

		requestingSuggestions = true;
		api.getLastArticleUserEdited( mw.user.getName() )
			.done( function ( title ) {
				api.getSuggestions( {
					excludedTitle: title,
					count: MAX_SUGGESTION_PER_PAGE_COUNT * MAX_PAGE_COUNT,
					thumbSize: 70
				} )
				.done( function ( response ) {
					// Store suggestions for later reference
					suggestions = parser.parse( response );
					addSuggestionsToFlyout();
				} )
				.fail( function () {
					// show no recommendations state
					addErrorStateToFlyout( 'no-recommendations' );
				} )
				.always( function () {
					$flyout.removeClass( 'mw-gettingstarted-lightbulb-flyout-loading' );
					requestingSuggestions = false;
				} );
			} )
			.fail( function () {
				// no article edits state
				$flyout.removeClass( 'mw-gettingstarted-lightbulb-flyout-loading' );
				addErrorStateToFlyout( 'no-article-edits' );
				requestingSuggestions = false;
			} );
	}

	// NOTE (phuedx, 2014-09-15): Copied verbatim from
	// GuidedTours/modules/ext.guidedTour.lib/ext.guidedTour.lib.main.js.

	// TODO (phuedx, 2014-05-27): Use conditional comments to add these classes
	// to the html element /in the HTML/.
	/**
	* If the browser is IE, then CSS classes are added to the html element
	* conveying which version of IE it is.
	*
	* @private
	*
	* @return {void}
	*/
	function setupIECssClasses() {
		var clientProfile = $.client.profile(),
			classes = [];

		if (clientProfile.name !== 'msie') {
			return;
		}

		classes.push( 'ie' );
		classes.push( 'ie' + clientProfile.versionNumber );

		$( 'html' ).addClass( classes.join( ' ' ) );
	}

	$( function () {
		// This will return true for IE >= 8 and non-IE browsers
		if ( $.client.test( {
			msie: [ [ '>=', 8 ] ]
		} ) ) {
			setupIECssClasses();
			addFlyout();
		}
	} );
} ( mediaWiki, jQuery ) );
