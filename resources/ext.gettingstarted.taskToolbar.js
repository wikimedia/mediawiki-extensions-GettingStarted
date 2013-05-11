( function ( $, mw ) {
	$( document ).ready( function () {
		var $toolbar, $left, $center, $right, $tryAnother, $close,
		toolbarInfo, $relativeElements, $marginElements, logging,
		cfg, $returnToList, returnToListUri, tryAnotherUri, $showGuide;

		logging = mw.gettingStarted.logging;

		cfg = mw.config.get( [
			'wgGettingStartedToolbar', 'wgPageName', 'wgArticleId', 'wgCurRevisionId',
			'wgPostEdit'
		] );

		toolbarInfo = cfg.wgGettingStartedToolbar;

		returnToListUri = new mw.Uri( mw.util.wikiGetlink( 'Special:GettingStarted' ) )
			.extend( {source: 'navbar-return'} );

		$returnToList = $( '<a>' ).attr( {
			href: returnToListUri.toString(),
			title: mw.message( 'gettingstarted-task-toolbar-return-to-list-title' ).text()
		} ).text( mw.message( 'gettingstarted-task-toolbar-return-to-list-text' ).text() )
			.addClass( 'mw-gettingstarted-toolbar-link' ).click( function ( evt ) {
				var $this = $( this );

				logging.logUnlessTimeout( {
					action: 'navbar-return-click',
					pageId: cfg.wgArticleId,
					revId : cfg.wgCurRevisionId
				}, 500 ).always( function () {
					location.href = $this.attr( 'href' );
				} );

				evt.preventDefault();
			} );

		$left = $( '<div>' ).attr( {
			'class': 'mw-gettingstarted-toolbar-left'
		} ).append( $returnToList );

		$center = $( '<div>' ).attr( {
			'class': 'mw-gettingstarted-toolbar-center'
		} ).text( mw.message( toolbarInfo.description ) );

		$showGuide = $( '<a>' ).attr( {
			'class': 'mw-ui-button mw-ui-primary mw-gettingstarted-toolbar-show-guiders',
			title: mw.message( 'gettingstarted-task-toolbar-editing-help-title' ).text()
		} ).text( mw.message( 'gettingstarted-task-toolbar-editing-help-text' ).text() )
			.click( function ( evt ) {
				mw.guidedTour.launchTour( 'gettingstartedtasktoolbar' );

				evt.stopPropagation();
			} );

		$center.append( $showGuide );


		tryAnotherUri = new mw.Uri(
			mw.util.wikiGetlink( 'Special:GettingStarted/task/' + toolbarInfo.taskName )
		).extend( {source: 'navbar-next'} );

		$tryAnother = $( '<a>' ).attr( {
			href: tryAnotherUri.toString(),
			title: mw.message( toolbarInfo.tryAnotherTitle ).text()
		} ).text( mw.message( 'gettingstarted-task-toolbar-try-another-text' ).text() )
			.addClass( 'mw-gettingstarted-toolbar-link' ).click( function ( evt ) {
				var $this = $( this );
				logging.logUnlessTimeout( {
					action: 'navbar-next-click',
					pageId: cfg.wgArticleId,
					revId : cfg.wgCurRevisionId
				}, 500 ).always( function () {
					location.href = $this.attr( 'href' );
				} );

				evt.preventDefault();
			} );

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

			$toolbar.slideUp( 200, function () {
				$relativeElements.removeClass( 'mw-gettingstarted-relative-40' );
				$marginElements.removeClass( 'mw-gettingstarted-margin-40' );
			} );
		} );

		$right = $( '<div>' ).attr( {
			'class': 'mw-gettingstarted-toolbar-right'
		} ).append( $tryAnother, $close );

		$toolbar= $( '<div>' ).attr( {
			id: 'mw-gettingstarted-toolbar'
		} ).append( $left, $center, $right ).hide();

		$( document.body ).prepend( $toolbar );

		$relativeElements = $( '#mw-page-base, #mw-head-base, #content, #footer' );
		$marginElements = $( '#mw-head, #mw-panel' );

		function showToolbarInternal() {
			$relativeElements.addClass( 'mw-gettingstarted-relative-40' );
			$marginElements.addClass( 'mw-gettingstarted-margin-40' );

			$toolbar.slideDown( 200, function () {
				mw.libs.guiders.reposition();
			} );
		}

		function showToolbar() {
			if ( cfg.wgPostEdit && mw.loader.getState( 'ext.postEdit' ) !== null ) {
				// TODO (mattflaschen, 2013-05-10): I have a patch to change this to use mw.hook when that's in the release branch.
				window.setTimeout( showToolbarInternal, 4000 );
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
	} );
} ( jQuery, mediaWiki ) );
