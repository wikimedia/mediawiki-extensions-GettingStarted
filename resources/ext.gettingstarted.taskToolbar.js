( function ( $, mw ) {
	'use strict';

	$( document ).ready( function () {
		var $toolbar, $left, $center, $centerMessage, $right, $tryAnother, $close,
		toolbarInfo, $relativeElements, $marginElements, logging,
		cfg, $returnToList, returnToListUri, tryAnotherUri, $showGuide,
		fullTask;

		logging = mw.gettingStarted.logging;

		cfg = mw.config.get( [
			'wgGettingStarted', 'wgPageName', 'wgArticleId', 'wgRevisionId',
			'wgPostEdit'
		] );

		toolbarInfo = cfg.wgGettingStarted.toolbar;
		fullTask = 'gettingstarted-' + toolbarInfo.taskName;

		returnToListUri = mw.util.wikiGetlink( 'Special:GettingStarted' );

		$returnToList = $( '<a>' ).attr( {
			href: returnToListUri.toString(),
			title: mw.message( 'gettingstarted-task-toolbar-return-to-list-title' ).text()
		} ).text( mw.message( 'gettingstarted-task-toolbar-return-to-list-text' ).text() )
			.addClass( 'mw-gettingstarted-toolbar-link' );

		$left = $( '<div>' ).attr( {
			'class': 'mw-gettingstarted-toolbar-left'
		} ).append( $returnToList );

		$center = $( '<div>' ).attr( {
			'class': 'mw-gettingstarted-toolbar-center'
		} );

		$centerMessage = $( '<span>' ).attr( {
			'class': 'mw-gettingstarted-toolbar-center-message'
		} ).text( mw.message( toolbarInfo.description ).text() );

		$showGuide = $( '<a>' ).attr( {
			'class': 'mw-ui-button mw-ui-primary mw-gettingstarted-toolbar-show-guiders',
			title: mw.message( 'gettingstarted-task-toolbar-editing-help-title' ).text()
		} ).text( mw.message( 'gettingstarted-task-toolbar-editing-help-text' ).text() )
			.click( function ( evt ) {
				var tourName;

				if ( $( '#ca-ve-edit' ).length > 0 ) {
					tourName = 'gettingstartedtasktoolbarve';
				} else {
					tourName = 'gettingstartedtasktoolbar';
				}

				mw.guidedTour.launchTour( tourName );

				evt.stopPropagation();
			} );

		$center.append( $centerMessage, $showGuide );


		tryAnotherUri = new mw.Uri(
			mw.util.wikiGetlink( 'Special:GettingStarted/task/' + toolbarInfo.taskName )
		).extend( {
			exclude: cfg.wgPageName
		} );

		$tryAnother = $( '<a>' ).attr( {
			href: tryAnotherUri.toString(),
			title: mw.message( toolbarInfo.tryAnotherTitle ).text()
		} ).text( mw.message( 'gettingstarted-task-toolbar-try-another-text' ).text() )
			.addClass( 'mw-gettingstarted-toolbar-link' );

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

		$right = $( '<div>' ).attr( {
			'class': 'mw-gettingstarted-toolbar-right'
		} ).append( $tryAnother, $close );

		$toolbar= $( '<div>' ).attr( {
			id: 'mw-gettingstarted-toolbar'
		} );

		if ( cfg.wgGettingStarted.bucket === 'test' ) {
			$toolbar.attr( 'class', 'mw-gettingstarted-bucket-test' );
		}


		$toolbar.append( $left, $center, $right ).hide();

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
				// TODO (mattflaschen, 2013-05-07): Should launchTour automatically hide existing tours?
				mw.guidedTour.launchTour( 'gettingstartedtasktoolbarintro' );
			} , 800 );
		} else {
			$showGuide.css( 'opacity', 1 );
			showToolbar();
		}

		mw.hook( 've.activationComplete' ).add( hideToolbar );
		mw.hook( 've.deactivationComplete' ).add( showToolbarInternal );
	} );
} ( jQuery, mediaWiki ) );
