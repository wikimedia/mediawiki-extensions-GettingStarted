( function ( $, mw ) {
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
		fullTask;

		fullTask = 'gettingstarted-' + toolbarInfo.taskName;

		$center = $( '<div>' ).attr( {
			'class': 'mw-gettingstarted-toolbar-center'
		} );

		$centerMessage = $( '<span>' ).attr( {
			'class': 'mw-gettingstarted-toolbar-center-message'
		} ).text( mw.message( toolbarInfo.description ).text() );

		$showGuide = $( '<a>' ).attr( {
			'class': 'mw-ui-button mw-ui-progressive mw-gettingstarted-toolbar-show-guiders',
			title: mw.message( 'gettingstarted-task-toolbar-editing-help-title' ).text()
		} ).text( mw.message( 'gettingstarted-task-toolbar-editing-help-text' ).text() )
			.click( function ( evt ) {
				launchTour();
				evt.stopPropagation();
			} );

		$center.append( $centerMessage, $showGuide );

		$right = $( '<div>' ).attr( {
			'class': 'mw-gettingstarted-toolbar-right'
		} );

		if ( suggestedTitle !== null ) {
			tryAnotherUrl = suggestedTitle.getUrl().toString();
		} else {
			tryAnotherUrl = '';
		}

		$tryAnother = $( '<a>' ).attr( {
			href: tryAnotherUrl,
			title: mw.message( toolbarInfo.tryAnotherTitle ).text()
		} ).text( mw.message( 'gettingstarted-task-toolbar-try-another-text' ).text() )
			.click( function ( evt ) {
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
			'class': 'mw-gettingstarted-toolbar-dismiss',
			href: '#',
			title: mw.message( 'gettingstarted-task-toolbar-close-title' ).text()
		} ).text( '×' ).click( function ( evt ) {
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

		$relativeElements = $( '#mw-page-base, #mw-head-base, #content, #footer' );
		$marginElements = $( '#mw-head, #mw-panel' );


		// This intentionally logs again if the toolbar redisplays after VE is hidden,
		// either due to a save or simply returning to Read.
		function showToolbarInternal() {
			$relativeElements.addClass( 'mw-gettingstarted-relative-vshift' );
			$marginElements.addClass( 'mw-gettingstarted-margin-vshift' );

			$toolbar.slideDown( 200, function () {
				var schemaAction = logging.getPageSchemaAction();

				logging.logImpression( fullTask, schemaAction );
				mw.libs.guiders.reposition();
			} );
		}

		function hideToolbar() {
			$toolbar.slideUp( 200, function () {
				$relativeElements.removeClass( 'mw-gettingstarted-relative-vshift' );
				$marginElements.removeClass( 'mw-gettingstarted-margin-vshift' );
				mw.libs.guiders.reposition();
			} );
		}

		function showToolbar() {
			if ( cfg.wgPostEdit ) {
				mw.hook( 'postEdit.afterRemoval' ).add( showToolbarInternal );
			} else {
				showToolbarInternal();
			}
		}

		if ( toolbarInfo.showIntro ) {
			mw.libs.guiders.hideAll();
			window.setTimeout( function () {
				showToolbar();
				launchTour();
			} , 800 );
		} else {
			$showGuide.css( 'opacity', 1 );
			showToolbar();
		}

		mw.hook( 've.activationComplete' ).add( hideToolbar );
		mw.hook( 've.deactivationComplete' ).add( showToolbarInternal );
	}

	$( document ).ready( function () {
		suggestedPagePromise.done( function ( title ) {
			displayToolbar( toolbarInfo, new mw.Title( title ) );
		} ).fail( function () {
			displayToolbar( toolbarInfo, null );
		} );
	} );
} ( jQuery, mediaWiki ) );
