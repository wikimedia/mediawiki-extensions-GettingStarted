( function ( $, mw ) {
	$( function () {
		var title = mw.msg( 'gettingstarted-welcomesiteuser', mw.config.get( 'wgSiteName' ), mw.config.get( 'wgUserName' ) );

		document.title = title;
		$( '#firstHeading span' ).text( title );

		// Remove original return to button, then add Agora one in header.
		var $returnTo = $( '#mw-returnto' );
		var returnToUrl = $( 'a', $returnTo ).attr( 'href' );
		$returnTo.remove();

		var $returnToAgora = $( '<a />', {
			id: 'back-to-referrer',
			href: returnToUrl,
			'class': 'blue mw-ui-button',
			text: '← ' + mw.msg('gettingstarted-return')
		} );

		$( '#onboarding-header p' ).append( $returnToAgora );

		var state = {}; // Currently unused
		var url = mw.util.wikiGetlink( 'Special:GettingStarted' );
		if ( history.replaceState ) {
			history.replaceState( state, title, url );
		}
	} );
} )( jQuery, mediaWiki );