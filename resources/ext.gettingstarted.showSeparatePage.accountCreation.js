// Code that runs when Special:GettingStarted is shown after account creation.
( function ( $, mw ) {
	'use strict';

	$( document ).ready( function () {
		var
			state,
			url;

		if ( history.replaceState ) {
			state = {}; // Currently unused
			url = mw.util.wikiGetlink( 'Special:GettingStarted' );
			history.replaceState( state, '', url );
		}
	} );

} )( jQuery, mediaWiki );
