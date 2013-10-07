// Loaded on Getting Started task selection page, regardless of whether it is
// the actual special page, or the post-account creation version.
//
// TODO (mattflaschen, 2013-10-07): This distinction no longer exists.
// Cleanup the code further.

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
