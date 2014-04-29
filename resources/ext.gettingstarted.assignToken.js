( function ( mw ) {
	// Assign token to all users that visit an edit page.

	var action = mw.config.get( 'wgAction' );

	if ( action === 'edit' || action === 'submit' ) {
		mw.gettingStarted.user.getToken();
	} else {
		// They could switch from wikitext to VE, but we don't need to register the VE hook
		// if we already gave them a token.

		mw.hook( 've.activationComplete' ).add( function () {
			mw.gettingStarted.user.getToken();
		} );
	}
}( mediaWiki ) );
