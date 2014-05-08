( function ( mw, $, gt ) {

	'use strict';

	gt.defineTour( {
		name: 'anonymouseditoracquisitionpreedit',
		shouldLog: true,
		isSinglePage: true,
		steps: [ {
			titlemsg: 'guidedtour-tour-anonymouseditoracquisitionpreedit-title',
			descriptionmsg: 'guidedtour-tour-anonymouseditoracquisitionpreedit-description',
			position: 'top',
			allowAutomaticOkay: false,
			attachTo: '.mw-gettingstarted-anonymouseditoracquisition-guider-target',
			onShow: function () {
				mw.eventLog.logEvent( 'SignupExpCTAImpression', {
					token: mw.gettingStarted.user.getToken(),
					cta: 'pre-edit',
					namespace: mw.config.get( 'wgNamespaceNumber' )
				} );
			},
			onClose: function () {
				mw.gettingStarted.anonymousEditorAcquisition.handleClose( 'pre-edit' );
			},
			buttons: [

				// "No thanks"
				{
					namemsg: 'guidedtour-tour-anonymouseditoracquisitionpreedit-continue',
					onclick: function () {
						mw.gettingStarted.anonymousEditorAcquisition.handleNoThanksWithPageLoad();
					},
					classString: 'mw-ui-quiet'
				},

				// "Sign up and edit"
				{
					namemsg: 'guidedtour-tour-anonymouseditoracquisitionpreedit-sign-up',
					onclick: function () {
						mw.gettingStarted.anonymousEditorAcquisition.handleSignupAndEdit();
					}
				}
			]
		} ]
	} );

} ( mediaWiki, jQuery, mediaWiki.guidedTour ) );
