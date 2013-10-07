// This loads when the user visits Special:GettingStarted but it is not
// immediately after account creation.
( function ( mw ) {
	'use strict';

	var event = {
		action: 'gettingstarted-specialpage-impression'
	};

	mw.gettingStarted.logging.logEvent( event );

} )( mediaWiki );
