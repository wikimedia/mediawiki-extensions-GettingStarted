// Loaded on Getting Started task selection page, regardless of whether it is the actual
// special page, or the post-account creation version.

( function ( $, mw ) {
	'use strict';

	$( function () {
		var isWelcomeCreation = mw.config.get( 'wgIsWelcomeCreation' ),
			isNew = !!isWelcomeCreation,
			logging = mw.gettingStarted.logging;

		// Log isNew while looking at GettingStarted, but not while
		// interacting with a task.
		logging.setDefaults( {
			isNew : isNew
		} );

		$( '.mw-gettingstarted-tasks' ).on( 'click', 'a', function ( evt ) {
			var $this = $( this ),
				fullTask = 'gettingstarted-' + $this.data( 'taskName' );

			logging.logUnlessTimeout( {
				action: 'gettingstarted-click',
				funnel: fullTask
			}, 500 ).always( function () {
				location.href = $this.attr( 'href' );
			} );

			evt.preventDefault();
		} );

	} );
} ( jQuery, mediaWiki ) );
