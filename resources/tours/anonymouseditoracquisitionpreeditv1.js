( function ( mw, $, gt ) {

	'use strict';

	gt.defineTour( {
		name: 'anonymouseditoracquisitionpreeditv1',
		shouldLog: true,
		isSinglePage: true,
		steps: [ {
			titlemsg: 'guidedtour-tour-anonymouseditoracquisitionpreeditv1-title',
			descriptionmsg: 'guidedtour-tour-anonymouseditoracquisitionpreeditv1-description',
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

				// "No thanks"
				{
					namemsg: 'guidedtour-tour-anonymouseditoracquisitionpreeditv1-continue',
					onclick: function () {
						mw.gettingStarted.anonymousEditorAcquisition.handleContinue();
					},
					classString: 'mw-ui-quiet'
				},

				// "Sign up and edit"
				{
					namemsg: 'guidedtour-tour-anonymouseditoracquisitionpreeditv1-sign-up',
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
