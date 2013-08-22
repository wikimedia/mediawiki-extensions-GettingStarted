( function ( mw ) {
	'use strict';

	var event = {
		action: 'gettingstarted-specialpage-impression',
		isNew: false
	};

	if ( mw.util.getParamValue( 'source' ) === 'navbar-return' ) {
		event.source = 'navbar-return';
	}

	mw.gettingStarted.logging.logEvent( event );

} )( mediaWiki );