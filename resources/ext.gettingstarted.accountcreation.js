( function ( $, mw ) {
	'use strict';
	$( function () {
		var title = mw.msg( 'gettingstarted-welcomesiteuser', mw.config.get( 'wgSiteName' ), mw.config.get( 'wgUserName' ) ),
			$returnTo = $( '#mw-returnto' ),
			$returnToA = $returnTo.find( 'a' ),
			$onboardingContainer = $( '.onboarding-container' ),
			$notices,
			state,
			url;

		document.title = title;
		$( '#firstHeading span' ).text( title );

		$returnTo.detach();
		$returnToA.detach().text( mw.msg( 'gettingstarted-return' ) );
		$returnToA.addClass( 'guider_button' ); // Avoid Agora dependence for now.
		// Want to remove all siblings of the link, including text, which siblings does
		// not return.
		$returnTo.empty().append( $returnToA );
		$onboardingContainer.append( $returnTo );

		// Mainly intended for email confirmation message, but others are possible.
		// There is not a more specific selector in core for this.
		$notices = $( '#mw-content-text > p' ).addClass( 'onboarding-notice' );
		$onboardingContainer.append( $notices );

		if ( history.replaceState ) {
			state = {}; // Currently unused
			url = mw.util.wikiGetlink( 'Special:GettingStarted' );
			history.replaceState( state, title, url );
		}
	} );
} )( jQuery, mediaWiki );
