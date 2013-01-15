// Show the appropriate step from the gettingstartedpage tour when the user clicks a
// question mark help icon.
( function ( $, mw ) {
	$( function () {
		$( '.onboarding-help' ).on( 'click', function ( evt ) {
			var $ancestorLi, stepNumber, tourId;
			$ancestorLi = $( this ).closest( 'li' );
			stepNumber = $ancestorLi.index() + 1;
			tourId = mw.guidedTour.stringifyTourId( {
				name: 'gettingstartedpage',
				step: stepNumber
			} );

			// Wait until the click event is over before showing it, so the
			// event doesn't propogate up and hide the guider we just showed.
			window.setTimeout( function () {
				mw.libs.guiders.resume( tourId );
			}, 0 );
		} );
	} );
} )( jQuery, mediaWiki );
