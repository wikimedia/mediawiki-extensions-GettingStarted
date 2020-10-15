( function ( $, mw ) {
	'use strict';

	module.exports = {
		/**
		 * When VisualEditor is installed, it shows an introductory dialog during the user's first edit.
		 * Shown together with GettingStarted's own dialogs it ends up pretty confusing; disable it.
		 */
		suppressVePopup: function () {
			var veState = mw.loader.getState( 'ext.visualEditor.desktopArticleTarget.init' );

			if ( veState === 'loading' || veState === 'loaded' || veState === 'ready' ) {
				mw.loader.using( 'ext.visualEditor.desktopArticleTarget.init' ).done( function () {
					mw.libs.ve.disableWelcomeDialog();
				} );
			}

			// eslint-disable-next-line no-jquery/no-global-selector
			$( '#ca-edit a, #ca-ve-edit a, .mw-editsection a' ).prop( 'href', function ( _, href ) {
				if ( href === null ) {
					return null;
				}
				try {
					return new mw.Uri( href ).extend( { vehidebetadialog: 1 } ).toString();
				} catch ( _ ) {
					return href;
				}
			} );
		}
	};
}( jQuery, mediaWiki ) );
