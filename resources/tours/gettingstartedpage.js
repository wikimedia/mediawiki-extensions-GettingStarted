// This code runs on the GettingStarted page itself. It uses GuidedTour for a single-page tour,
// rather than a full tour. The tour is not launched automatically, and does not move between steps
// automatically.
( function ( window, document, $, mw, gt ) {
	gt.defineTour( {
		name: 'gettingstartedpage',

		steps: [ {
			titlemsg: 'guidedtour-tour-gettingstartedpage-copy-editing-title',
			descriptionmsg: 'guidedtour-tour-gettingstartedpage-copy-editing-description',
			attachTo: '.onboarding-help.copyedit',
			position: 'right'
		}, {
			titlemsg: 'guidedtour-tour-gettingstartedpage-clarification-title',
			descriptionmsg: 'guidedtour-tour-gettingstartedpage-clarification-description',
			attachTo: '.onboarding-help.clarify',
			position: 'right'
		}, {
			titlemsg: 'guidedtour-tour-gettingstartedpage-add-links-title',
			descriptionmsg: 'guidedtour-tour-gettingstartedpage-add-links-description',
			attachTo: '.onboarding-help.addlinks',
			position: 'right'
		} ],

		isSinglePage: true
	} );
} (window, document, jQuery, mediaWiki, mediaWiki.guidedTour ) );
