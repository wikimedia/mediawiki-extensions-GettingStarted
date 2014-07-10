( function ( mw, $, gt ) {

	'use strict';

	gt.defineTour( {
		name: 'anonymouseditoracquisitionpreeditv2',
		shouldLog: true,
		isSinglePage: true,
		steps: [ {
			titlemsg: 'guidedtour-tour-anonymouseditoracquisitionpreeditv2-title',
			descriptionmsg: 'guidedtour-tour-anonymouseditoracquisitionpreeditv2-description',
			position: 'top',
			allowAutomaticOkay: false,
			attachTo: '.mw-gettingstarted-anonymouseditoracquisition-guider-target',
			onShow: function () {
				mw.gettingStarted.anonymousEditorAcquisition.handleShow();
			},
			onClose: function () {
				mw.gettingStarted.anonymousEditorAcquisition.handleClose();
			},
			buttons: [

				// "Continue editing"
				{
					namemsg: 'guidedtour-tour-anonymouseditoracquisitionpreeditv2-continue',
					onclick: function () {
						mw.gettingStarted.anonymousEditorAcquisition.handleContinue();
					},
					action: 'wikiLink'
				},

				// "Sign up"
				{
					namemsg: 'guidedtour-tour-anonymouseditoracquisitionpreeditv2-sign-up',
					onclick: function () {
						mw.gettingStarted.anonymousEditorAcquisition.handleSignup();
					},
					classString: 'mw-ui-progressive'
				}
			],
			closeOnClickOutside: false
		} ]
	} );

} ( mediaWiki, jQuery, mediaWiki.guidedTour ) );
