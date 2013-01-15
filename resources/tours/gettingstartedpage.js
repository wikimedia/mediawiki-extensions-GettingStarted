// This code runs on the GettingStarted page itself. It uses GuidedTour for tooltips,
// rather than a full tour. The tour is not self-launching.
( function ( window, document, $, mw, guiders ) {
	var gt = mw.guidedTour;

	gt.currentTour = 'gettingstartedpage';

	gt.initGuider({
		id: 'gt-gettingstartedpage-1',
		titlemsg: 'guidedtour-tour-gettingstartedpage-copy-editing-title',
		descriptionmsg: 'guidedtour-tour-gettingstartedpage-copy-editing-description',
		attachTo: '.onboarding-help.copyedit',
		position: '3',
		showEndTour: false
	});

	gt.initGuider({
		id: 'gt-gettingstartedpage-2',
		titlemsg: 'guidedtour-tour-gettingstartedpage-fix-spelling-title',
		descriptionmsg: 'guidedtour-tour-gettingstartedpage-fix-spelling-description',
		attachTo: '.onboarding-help.fixspelling',
		position: '3',
		showEndTour: false
	});

	gt.initGuider({
		id: 'gt-gettingstartedpage-3',
		titlemsg: 'guidedtour-tour-gettingstartedpage-add-links-title',
		descriptionmsg: 'guidedtour-tour-gettingstartedpage-add-links-description',
		attachTo: '.onboarding-help.addlinks',
		position: '3',
		showEndTour: false
	});
} ( window, document, jQuery, mediaWiki, mediaWiki.libs.guiders ) );
