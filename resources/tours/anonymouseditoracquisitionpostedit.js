( function ( mw, $, gt ) {

	'use strict';

	var ptCreateaccountSelector = '#pt-createaccount';

	gt.defineTour( {
		name: 'anonymouseditoracquisitionpostedit',
		shouldLog: true,
		isSinglePage: true,
		steps: [ {
			titlemsg: 'guidedtour-tour-anonymouseditoracquisitionpostedit-title',
			// The 'description' hack (treating the output of text as HTML) is due to
			// lack of jQueryMsg support for both wikitext lists and list HTML. The
			// latter is within the scope of https://bugzilla.wikimedia.org/show_bug.cgi?id=64740 .
			description: mw.message( 'guidedtour-tour-anonymouseditoracquisitionpostedit-description' ).text(),
			position: 'topRight',
			allowAutomaticOkay: false,
			attachTo: ptCreateaccountSelector,
			onShow: function () {
				mw.eventLog.logEvent( 'SignupExpCTAImpression', {
					token: mw.gettingStarted.user.getToken(),
					cta: 'post-edit',
					namespace: mw.config.get( 'wgNamespaceNumber' )
				} );
			},
			onClose: function () {
				mw.gettingStarted.anonymousEditorAcquisition.handleClose( 'post-edit' );
			},
			buttons: [ {
				namemsg: 'guidedtour-tour-anonymouseditoracquisitionpostedit-continue',
				action: 'externalLink',
				onclick: function () {
					mw.gettingStarted.anonymousEditorAcquisition.handleSignup() ;
				}
			} ],
			closeOnClickOutside: false
		} ]
	} );

} ( mediaWiki, jQuery, mediaWiki.guidedTour ) );
