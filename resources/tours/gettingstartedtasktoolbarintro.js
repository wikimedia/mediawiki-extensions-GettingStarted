// Tour started on article page, with task toolbar showing

( function ( window, document, $, mw, gt ) {
	gt.defineTour( {
		name: 'gettingstartedtasktoolbarintro',
		shouldLog: true,
		steps: [ {
			titlemsg: 'guidedtour-tour-gettingstartedtasktoolbarintro-title',
			descriptionmsg: 'guidedtour-tour-gettingstartedtasktoolbarintro-description',
			autoFocus: true,
			overlay: true,
			width: 450,
			buttons: [ {
				action: 'okay',
				onclick: function () {
					mw.libs.guiders.hideAll();

					$( '.mw-gettingstarted-toolbar-show-guiders' ).delay( 400 ).animate( {
						opacity: 1
					}, 400 );
				}
			} ]
		} ],
		isSinglePage: true
	} );
} (window, document, jQuery, mediaWiki, mediaWiki.guidedTour ) );
