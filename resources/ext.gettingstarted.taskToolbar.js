( function () {
	'use strict';

	var logging = mw.gettingStarted.logging,
		cfg = mw.config.get( [
			'wgGettingStarted', 'wgPageName', 'wgArticleId', 'wgRevisionId',
			'wgPostEdit'
		] ),
		api = new mw.gettingStarted.Api(),
		toolbarInfo = cfg.wgGettingStarted.toolbar,
		suggestedPagePromise = api.getSinglePage( {
			taskName: toolbarInfo.taskName,
			excludedTitle: cfg.wgPageName
		} );

	/**
	 * Launches the appropriate tour, based on whether the VE edit tab is present
	 */
	function launchTour() {
		// eslint-disable-next-line no-jquery/no-global-selector
		var tourName = $( '#ca-ve-edit' ).length > 0 ?
			'gettingstartedtasktoolbarve' :
			'gettingstartedtasktoolbar';
		// TODO (mattflaschen, 2013-05-07): Should launchTour automatically hide existing tours?
		mw.guidedTour.launchTour( tourName );
	}

	/**
	 * Builds and displays the toolbar
	 *
	 * @param {Object} toolbarInfo information for building the toolbar
	 * @param {string} toolbarInfo.taskName name of task type, such as 'copyedit'
	 * @param {string} toolbarInfo.description UI description of task type
	 * @param {string} toolbarInfo.tryAnotherTitle title text of 'Try Another' link
	 * @param {boolean} toolbarInfo.showIntro whether to show the intro tour
	 * @param {mw.Title} suggestedTitle title of a suggested article (for 'Try Another')
	 *   or null if none is available
	 */
	function displayToolbar( toolbarInfo, suggestedTitle ) {
		var $toolbar, $center, $centerMessage, $right, $tryAnother, $close,
			$relativeElements, $marginElements, tryAnotherUrl, $showGuide,
			fullTask, afterRemovalHookInstalled, $centerMessageClone,
			centerMessageWidth, centerMinWidth, isToolbarExpanded,
			RESIZE_THROTTLE_DELAY = 100; // (ms)

		fullTask = 'gettingstarted-' + toolbarInfo.taskName;

		$center = $( '<div>' ).attr( {
			class: 'mw-gettingstarted-toolbar-center'
		} );

		$centerMessage = $( '<span>' ).attr( {
			class: 'mw-gettingstarted-toolbar-center-message'
		} ).text(
			// Messages that can be used here:
			// * gettingstarted-task-copyedit-toolbar-description
			// * guidedtour-tour-gettingstarted-click-preview-description
			// * guidedtour-tour-gettingstarted-click-save-description
			// * guidedtour-tour-gettingstartedtasktoolbar-ambox-description
			// * guidedtour-tour-gettingstartedtasktoolbar-edit-article-description
			// * guidedtour-tour-gettingstartedtasktoolbar-edit-section-description
			// * guidedtour-tour-gettingstartedtasktoolbarintro-description
			mw.message( toolbarInfo.description ).text()
		);

		$showGuide = $( '<a>' ).attr( {
			class: 'mw-ui-button mw-ui-progressive mw-gettingstarted-toolbar-show-guiders',
			title: mw.message( 'gettingstarted-task-toolbar-editing-help-title' ).text()
		} ).text( mw.message( 'gettingstarted-task-toolbar-editing-help-text' ).text() )
			.on( 'click', function ( evt ) {
				launchTour();
				evt.stopPropagation();
			} );

		$center.append( $centerMessage, $showGuide );

		$right = $( '<div>' ).attr( {
			class: 'mw-gettingstarted-toolbar-right'
		} );

		if ( suggestedTitle !== null ) {
			tryAnotherUrl = suggestedTitle.getUrl().toString();
		} else {
			tryAnotherUrl = '';
		}

		$tryAnother = $( '<a>' ).attr( {
			href: tryAnotherUrl,
			// Only message that can be used here (?):
			// * gettingstarted-task-copyedit-toolbar-try-another-title
			// eslint-disable-next-line mediawiki/msg-doc
			title: mw.message( toolbarInfo.tryAnotherTitle ).text()
		} ).text( mw.message( 'gettingstarted-task-toolbar-try-another-text' ).text() )
			.on( 'click', function ( evt ) {
				var link = this;
				if ( $( link ).attr( 'href' ) !== '' ) {
					logging.setTask( suggestedTitle.getPrefixedText(), fullTask );
					// Let browser navigate to URL as normal
				} else {
					// Preloading the suggested URL earlier failed; try loading
					// it now
					evt.preventDefault();
					api.getSinglePage( {
						taskName: toolbarInfo.taskName,
						excludedTitle: cfg.wgPageName
					} ).done( function ( suggestedPage ) {
						suggestedTitle = new mw.Title( suggestedPage );

						// For double-clicks or similar
						link.href = suggestedTitle.getUrl().toString();
						logging.setTask( suggestedTitle.getPrefixedText(), fullTask );
						window.location = link.href;
					} ).fail( function () {
						mw.notify( mw.message( 'gettingstarted-task-toolbar-no-suggested-page' ).text() );
					} );
				}
			} )
			.addClass( 'mw-gettingstarted-toolbar-link' );

		$right.append( $tryAnother );

		$close = $( '<a>' ).attr( {
			class: 'mw-gettingstarted-toolbar-dismiss',
			href: '#',
			title: mw.message( 'gettingstarted-task-toolbar-close-title' ).text()
		} ).text( '×' ).on( 'click', function ( evt ) {
			var title;

			evt.preventDefault();

			title = new mw.Title( cfg.wgPageName );
			// Clear task
			logging.setTask( title.getPrefixedText(), null );

			hideToolbar();
		} );

		$right.append( $close );

		$toolbar = $( '<div>' ).attr( {
			id: 'mw-gettingstarted-toolbar'
		} );

		$toolbar.append( $right, $center ).hide();

		$( document.body ).prepend( $toolbar );

		// eslint-disable-next-line no-jquery/no-global-selector
		$relativeElements = $( '#mw-page-base, #mw-head-base, #content, #footer' );
		$relativeElements.addClass( 'mw-gettingstarted-relative-vshift' );
		// eslint-disable-next-line no-jquery/no-global-selector
		$marginElements = $( '#mw-head, #mw-panel' );
		$marginElements.addClass( 'mw-gettingstarted-margin-vshift' );

		function pushPageDown() {
			var offset = $toolbar.outerHeight() + 1;

			$relativeElements.css( {
				position: 'relative',
				top: offset + 'px'
			} );
			$marginElements.css( 'margin-top', offset + 'px' );
			mw.libs.guiders.reposition();
		}

		function pullPageUp() {
			$relativeElements.css( {
				position: '',
				top: ''
			} );
			$marginElements.css( 'margin-top', '' );
			mw.libs.guiders.reposition();
		}

		// This intentionally logs again if the toolbar redisplays after VE is hidden,
		// either due to a save or simply returning to Read.
		function showToolbarInternal() {
			// eslint-disable-next-line no-jquery/no-slide
			$toolbar.slideDown( 200, function () {
				pushPageDown();
			} );
		}

		function hideToolbar() {
			// eslint-disable-next-line no-jquery/no-slide
			$toolbar.slideUp( 200, function () {
				pullPageUp();
			} );
		}

		/**
		 * @param {boolean} [isPostEdit] Used to handle VisualEditor
		 *   signalling that the user successfully edited the page when
		 *   it deactivates. If given, then it overrides the wgPostEdit
		 *   configuration variable.
		 */
		function showToolbar( isPostEdit ) {
			isPostEdit = isPostEdit || cfg.wgPostEdit;
			if ( isPostEdit ) {
				// If VisualEditor deactivates more than once
				// before the page is refreshed, e.g. the user
				// edits the page with VisualEditor twice, then
				// the hook will be fired as it's added.
				if ( afterRemovalHookInstalled ) {
					return;
				}

				mw.hook( 'postEdit.afterRemoval' ).add( showToolbarInternal );
				afterRemovalHookInstalled = true;
			} else {
				showToolbarInternal();
			}
		}

		if ( toolbarInfo.showIntro ) {
			mw.libs.guiders.hideAll();
			window.setTimeout( function () {
				showToolbar();
				launchTour();
			}, 800 );
		} else {
			$showGuide.css( 'opacity', 1 );
			showToolbar();
		}

		mw.hook( 've.activationComplete' ).add( hideToolbar );
		mw.hook( 've.deactivationComplete' ).add( showToolbar );

		// Calculate the width of the task description.
		$centerMessageClone = $centerMessage.clone();
		$centerMessageClone.css( 'visibility', 'hidden' );
		$( document.body ).append( $centerMessageClone );
		centerMessageWidth = $centerMessageClone.width();
		$centerMessageClone.remove();
		centerMinWidth = centerMessageWidth + $showGuide.outerWidth( true );

		isToolbarExpanded = $center.width() < centerMinWidth;
		if ( isToolbarExpanded ) {
			$toolbar.addClass( 'mw-gettingstarted-toolbar-expanded' );
		}

		$( window ).on( 'resize', $.throttle( RESIZE_THROTTLE_DELAY, function () {
			if ( $center.width() >= centerMinWidth ) {
				// The contents of the toolbar can be displayed
				// inline.

				if ( isToolbarExpanded ) {
					$toolbar.removeClass( 'mw-gettingstarted-toolbar-expanded' );
					pushPageDown();
					isToolbarExpanded = false;
				}

				return;
			}

			if ( !isToolbarExpanded ) {
				$toolbar.addClass( 'mw-gettingstarted-toolbar-expanded' );
				pushPageDown();
				isToolbarExpanded = true;
			}
		} ) );
	}

	$( function () {
		suggestedPagePromise.done( function ( title ) {
			displayToolbar( toolbarInfo, new mw.Title( title ) );
		} ).fail( function () {
			displayToolbar( toolbarInfo, null );
		} );
	} );
}() );
