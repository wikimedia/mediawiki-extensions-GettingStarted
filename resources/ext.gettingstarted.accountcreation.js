( function ( $, mw ) {
	'use strict';
	$( function () {
		var title = mw.msg( 'gettingstarted-welcomesiteuser', mw.config.get( 'wgSiteName' ), mw.config.get( 'wgUserName' ) ),
			$returnTo = $( '#mw-returnto' ),
			$returnToA = $returnTo.find( 'a' ),
			$onboardingContainer = $( '.onboarding-container' ),
			state,
			url;

		document.title = title;
		$( '#firstHeading span' ).text( title );

		$returnTo.detach();
		$returnToA.detach().text( mw.msg( 'gettingstarted-return' ) );
		// Want to remove all siblings of the link, including text, which siblings does
		// not return.
		$returnTo.empty().append( $returnToA );
		$onboardingContainer.append( $returnTo );

		state = {}; // Currently unused
		url = mw.util.wikiGetlink( 'Special:GettingStarted' );
		if ( history.replaceState ) {
			history.replaceState( state, title, url );
		}
	} );
} )( jQuery, mediaWiki );
