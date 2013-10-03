// This loads when the user visits Special:GettingStarted but it is not
// immediately after account creation.
( function ( mw ) {
	'use strict';

	var event = {
		action: 'gettingstarted-specialpage-impression'
	};

	if ( mw.util.getParamValue( 'source' ) === 'navbar-return' ) {
		event.source = 'navbar-return';
	}

	mw.gettingStarted.logging.logEvent( event );

} )( mediaWiki );
