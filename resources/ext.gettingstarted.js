// Loaded on Getting Started task selection page, regardless of whether it is
// the actual special page, or the post-account creation version.

( function ( $, mw ) {
	'use strict';

	$( function () {
		var logging = mw.gettingStarted.logging;

		$( '.mw-gettingstarted-tasks' ).on( 'click', 'a', function ( evt ) {
			var $this = $( this ),
				fullTask = 'gettingstarted-' + $this.data( 'taskName' );

			logging.logUnlessTimeout( {
				action: 'gettingstarted-specialpage-click',
				funnel: fullTask
			}, 500 ).always( function () {
				location.href = $this.attr( 'href' );
			} );

			evt.preventDefault();
		} );

	} );
} ( jQuery, mediaWiki ) );
