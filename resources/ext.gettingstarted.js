// Handle clicks on the GettingStarted page
( function ( $, mw, gt ) {
	$( function () {
		// Show the appropriate step from the gettingstartedpage tour when the user clicks a
		// question mark help icon.
		$( '.onboarding-help' ).on( 'click', function ( evt ) {
			var $ancestorLi, stepNumber, tourId;
			$ancestorLi = $( this ).closest( 'li' );
			stepNumber = $ancestorLi.index() + 1;
			tourId = gt.makeTourId( {
				name: 'gettingstartedpage',
				step: stepNumber
			} );

			// Wait until the click event is over before showing it, so the
			// event doesn't propogate up and hide the guider we just showed.
			window.setTimeout( function () {
				mw.libs.guiders.resume( tourId );
			}, 0 );
		} );

		// Set tour cookie when they click on an article.
		$( '.onboarding-article-list' ).on( 'click', 'a', function () {
			gt.setTourCookie( 'gettingstarted' );
		} );
	} );
} )( jQuery, mediaWiki, mediaWiki.guidedTour );
