( function ( $, mw ) {
	'use strict';
	$( function () {
		var title = mw.msg( 'gettingstarted-welcomesiteuser', mw.config.get( 'wgSiteName' ), mw.config.get( 'wgUserName' ) ),
			$returnTo = $( '#mw-returnto' ),
			$returnToA = $( $returnTo ).find( 'a' ),
			returnToUrl = $returnToA.attr( 'href' ),
			returnToTitle = $returnToA.attr( 'title' ),
			$returnToAgora,
			state,
			url;

		document.title = title;
		$( '#firstHeading span' ).text( title );

		// Remove original return to button, then add Agora one in header.
		$returnTo.remove();

		$returnToAgora = $( '<a />', {
			id: 'back-to-referrer',
			href: returnToUrl,
			title: returnToTitle,
			'class': 'blue mw-ui-button',
			text: '← ' + mw.msg('gettingstarted-return')
		} );

		$( '#onboarding-header p' ).append( $returnToAgora );

		state = {}; // Currently unused
		url = mw.util.wikiGetlink( 'Special:GettingStarted' );
		if ( history.replaceState ) {
			history.replaceState( state, title, url );
		}
	} );
} )( jQuery, mediaWiki );
