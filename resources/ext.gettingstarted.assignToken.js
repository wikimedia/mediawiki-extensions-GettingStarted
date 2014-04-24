( function ( mw ) {
	// Assign token to all users, if they don't already have one; currently used for
	// TrackedContentPageSaveComplete.
	mw.gettingStarted.user.getToken();
}( mediaWiki ) );
