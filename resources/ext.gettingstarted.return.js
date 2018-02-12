// This runs on display of the returnTo page after account creation.
( function ( $, mw, gt ) {
	'use strict';

	var logging = mw.gettingStarted.logging,
		cfg = mw.config.get( [
			'wgIsProbablyEditable', 'wgArticleId', 'wgRevisionId',
			'wgNamespaceNumber', 'wgSiteName', 'wgUserName',
			'wgAction', 'wgUserId'
		] ),
		self,
		MAIN_NAMESPACE = 0,
		SPECIAL_NAMESPACE = -1,
		// TODO (mattflaschen, 2013-12-19): This will need to be configurable later.
		TASK_TYPE = 'copyedit',
		fullTaskType = 'gettingstarted-' + TASK_TYPE,
		CTA_TYPE_NONE = null,
		CTA_TYPE_SUGGESTED = 'suggested',
		CTA_TYPE_EDIT_CURRENT = 'edit current',
		CTA_TYPE_EDIT_CURRENT_OR_SUGGESTED = 'edit current or suggested';

	function logRedirectImpression( ctaType ) {
		var event;

		if ( mw.user.isAnon() ) {
			return;
		}

		event = {
			userId: cfg.wgUserId,
			pageNS: cfg.wgNamespaceNumber,
			action: cfg.wgAction,
			isEditable: cfg.wgIsProbablyEditable
		};

		if ( cfg.wgArticleId > 0 ) {
			event.pageId = cfg.wgArticleId;
		}

		// TODO (phuedx 2014-01-29) We don't get a revision ID for edit pages
		// (see https://bugzilla.wikimedia.org/60548).
		if ( cfg.wgRevisionId > 0 ) {
			event.currentRevId = cfg.wgRevisionId;
		}

		if ( ctaType !== CTA_TYPE_NONE ) {
			event.ctaType = ctaType;
		}

		mw.eventLog.logEvent( 'GettingStartedRedirectImpression', event );
	}

	function doEditThisPage() {
		var funnel = 'redirect', tourName;

		logging.setTaskForCurrentPage( funnel );

		if ( $( '#ca-ve-edit' ).length > 0 ) {
			tourName = 'firsteditve';
		} else {
			tourName = 'firstedit';
		}

		gt.launchTour( tourName );
	}

	/**
	 * Creates a jQuery-wrapped button, from a specification.
	 *
	 * When clicked, it will close the dialog then call spec.click
	 *
	 * @param {Function} closeDialog function to call to close dialog
	 * @param {Object} spec button specification
	 * @param {Object} spec.id HTML id
	 * @param {string} spec.action the action associated with the button,
	 *     which can be one of 'edit' or 'copyedit'
	 * @param {boolean} spec.isPrimary true for a primary button
	 * @param {string} spec.mainText main button text
	 * @param {string} [spec.subText] lower button text
	 * @param {Function} spec.click function to call on button click
	 * @return {jQuery} created button
	 *
	 * @private
	 */
	function createButton( closeDialog, spec ) {
		var klass, $btn, $icon, $mainText, $subText;

		klass = 'mw-ui-button';
		if ( spec.isPrimary ) {
			klass += ' mw-ui-progressive';
		} else {
			// Due to lack of cross-browser :not support, and the fact that we are
			// currently overriding the regular mw.ui secondary button styling.
			klass += ' mw-gettingstarted-cta-secondary';
		}

		if ( !spec.subText ) {
			// Wraps differently when there is no subText
			klass += ' mw-gettingstarted-cta-button-no-sub';
		}

		$btn = $( '<a>' ).attr( {
			id: spec.id,
			'class': klass,
			'aria-role': 'button',
			tabIndex: 0,
			href: '#'
		} ).click( function ( evt ) {
			evt.preventDefault();
			evt.stopPropagation();
			closeDialog();
			spec.click();
		} );

		$icon = $( '<div>' )
			.addClass( 'mw-gettingstarted-cta-button-icon' )
			.addClass( 'mw-gettingstarted-cta-button-icon-' + spec.action );

		$mainText = $( '<span>' )
			.attr( 'class', 'mw-gettingstarted-cta-button-main' )
			.text( spec.mainText );
		$btn.append( $icon, $mainText );

		if ( spec.subText ) {
			$subText = $( '<span>' )
				.attr( 'class', 'mw-gettingstarted-cta-button-sub' )
				.text( spec.subText );
			$btn.append( $subText );
		}

		return $btn;
	}

	self = {
		// We should probably take into account diffs, etc. and other query strings.
		/**
		 * Whether page is a regular view of an editable main namespace article
		 * If it's not main namespace or has an unusual query string, say no.
		 *
		 * @private
		 *
		 * @param {string} title article title
		 *
		 * @return {boolean}
		 * @see isAppropriateTaskArticle is a similar idea but inspects a link.
		 */
		isOnEditableArticleView: function () {
			var i, key, currentUri, ALLOWED_PARAMS;

			// If other params are used, it's no longer considered a standard view.
			ALLOWED_PARAMS = [
				'title',
				'uselang',
				'useskin',
				'gettingStartedReturn',
				'postCreateAccount',
				'debug'
			];

			if ( cfg.wgNamespaceNumber === MAIN_NAMESPACE &&
				cfg.wgAction === 'view' &&
				cfg.wgIsProbablyEditable ) {

				currentUri = new mw.Uri();
				for ( i = 0; i < ALLOWED_PARAMS.length; i++ ) {
					delete currentUri.query[ ALLOWED_PARAMS[ i ] ];
				}
				// Any remaining parameters are not allowed
				for ( key in currentUri.query ) {
					return false;
				}

				return true;
			}

			return false;
		},

		/**
		 * Determine the kind of page the user returned to.
		 *
		 * @return {string} kind of page.
		 */
		getPageKind: function () {
			var currentUri = new mw.Uri();

			if ( cfg.wgAction === 'edit' ||
				cfg.wgAction === 'submit' ||
				currentUri.query.veaction === 'edit'
			) {
				return 'alreadyediting';
			}

			if ( cfg.wgNamespaceNumber === SPECIAL_NAMESPACE ) {
				return 'special';
			}

			if ( self.isOnEditableArticleView() ) {
				return 'editablemain';
			}

			return 'other';
		},

		/**
		 * Behave according to the kind of page: show messages, start a task
		 * launch a tour, etc.
		 *
		 * @param {string} pageKind kind of page, from getPageKind
		 * @param {mw.Title} suggestedTitle title of a suggested article to edit, or null
		 *   if none is available
		 */
		handlePage: function ( pageKind, suggestedTitle ) {
			var dialogSpec, editCurrentPrimaryButton, suggestionSecondaryButton, suggestionPrimaryButton, ctaType;

			function doFixPages() {
				logging.setTask( suggestedTitle.getPrefixedText(), fullTaskType );
				window.location.href = suggestedTitle.getUrl();
			}

			// The possible CTA dialogs have similar but different buttons.
			editCurrentPrimaryButton = {
				id: 'mw-gettingstarted-editable-main-edit-page',
				isPrimary: true,
				mainText: mw.message( 'gettingstarted-cta-edit-page' ).text(),
				subText: mw.message( 'gettingstarted-cta-edit-page-sub' ).text(),
				click: doEditThisPage,
				action: 'edit'
			};

			suggestionSecondaryButton = {
				id: 'mw-gettingstarted-editable-main-fix-pages',
				mainText: mw.message( 'gettingstarted-cta-fix-pages' ).text(),
				subText: mw.message( 'gettingstarted-cta-fix-pages-sub' ).text(),
				click: doFixPages,
				action: 'copyedit'
			};

			suggestionPrimaryButton = {
				id: 'mw-gettingstarted-other-fix-pages',
				isPrimary: true,
				mainText: mw.msg( 'gettingstarted-cta-fix-pages' ),
				subText: mw.message( 'gettingstarted-cta-fix-pages-sub' ).text(),
				click: doFixPages,
				action: 'copyedit'
			};

			if ( pageKind === 'editablemain' ) {
				dialogSpec = {
					id: 'mw-gettingstarted-cta-editable-main-page'
				};

				if ( suggestedTitle ) {
					dialogSpec.buttons = [
						editCurrentPrimaryButton,
						suggestionSecondaryButton
					];
					ctaType = CTA_TYPE_EDIT_CURRENT_OR_SUGGESTED;
				} else {
					dialogSpec.buttons = [ editCurrentPrimaryButton ];
					ctaType = CTA_TYPE_EDIT_CURRENT;
				}
			} else if ( pageKind === 'other' ) {
				if ( !suggestedTitle ) {
					logRedirectImpression( CTA_TYPE_NONE );
					// Nothing to show in dialog
					return;
				}

				dialogSpec = {
					id: 'mw-gettingstarted-cta-other-page',
					buttons: [ suggestionPrimaryButton ]
				};
				ctaType = CTA_TYPE_SUGGESTED;
			} else {
				if ( pageKind !== 'alreadyediting' && pageKind !== 'special' ) {
					mw.log.warn( 'bad GettingStarted pageKind ' + pageKind );
				}

				logRedirectImpression( CTA_TYPE_NONE );

				// If they were already editing, or on a special page, do nothing.
				// No welcome message, no tour, no start a funnel.
				// Note: you can tell the user returned to a non-article page
				// by looking at the pageNS for the
				// redirect-page-impression event in the log.
				//
				// Invalid/unhandled kinds also make it here, but warn above.
				return;
			}

			$( function () {
				self.showCTA( dialogSpec );
				logRedirectImpression( ctaType );
			} );
		},

		// TODO (mattflaschen, 2013-09-27): Cleanup and move to mediawiki.ui
		/**
		 * Shows a CTA (Call To Action) dialog
		 *
		 * Only one CTA at a time is supported.
		 *
		 * @param {Object} spec specification of components of dialog
		 * @param {string} spec.id HTML ID of dialog
		 * @param {Array} spec.buttons array of button specifications
		 */
		showCTA: function ( spec ) {
			var $dialog, $close, closeText, $heading, $leaveLink,
				i, $overlay, $dialogContainer, $dialogBackground;

			// Background overlay like GuidedTour

			function showDialog() {
				var $body = $( document.body );
				$body.append( $overlay );
				$dialog.find( '.mw-ui-button.mw-ui-progressive' ).focus();
			}

			function removeDialog() {
				$overlay.remove();
			}

			// TODO: Click outside or ESC to close
			function closeDialogByClick( evt ) {
				evt.preventDefault();

				// Note: Some users might dismiss the CTA by this click or
				// other techniques, yet go ahead and edit this page anyway; we
				// _don't_ set up a funnel for this.

				removeDialog();
			}

			$dialog = $( '<div>' ).attr( {
				id: spec.id,
				'class': 'mw-gettingstarted-cta'
			} );

			closeText = mw.message( 'gettingstarted-cta-close' ).text();
			$close = $( '<a>' )
				.attr( {
					'class': 'mw-gettingstarted-cta-close',
					href: '#',
					title: closeText,
					'aria-label': closeText
				} )
				.click( closeDialogByClick );

			$heading = $( '<div>' )
				.attr( 'class', 'mw-gettingstarted-cta-heading' )
				.text( mw.message( 'gettingstarted-cta-heading' ).text() );

			$dialog.append( $close, $heading );

			// TODO (mattflaschen, 2013-09-27): Look at other modal techniques
			// when we consider generalizing some of this code to mediawiki.ui.
			// Ideally one with auto-sizing.
			//
			// If we keep this technique, the sizing math can be moved to LESS
			// when the rest of the CSS is converted.
			//
			// Currently based on http://stackoverflow.com/questions/982054/how-to-center-html-element-in-browser-window/982082#982082
			// and vertical centering does not seem to quite work.
			//
			// Not vertically centered, but should look alright
			for ( i = 0; i < spec.buttons.length; i++ ) {
				$dialog.append( createButton( removeDialog, spec.buttons[ i ] ) );
			}

			$leaveLink = $( '<a>' )
				.attr( {
					'class': 'mw-gettingstarted-cta-leave-link',
					href: '#'
				} )
				.text( mw.message( 'gettingstarted-cta-leave' ).text() )
				.click( closeDialogByClick );

			$dialog.append( $leaveLink );

			$dialogBackground = $( '<div>' ).attr( 'class', 'mw-gettingstarted-cta-background' );

			$dialogContainer = $( '<div>' ).attr( 'class', 'mw-gettingstarted-cta-container' );
			$dialogContainer.append( $dialog );

			$overlay = $( '<div>' ).attr( 'class', 'mw-gettingstarted-cta-overlay' );
			$overlay.append( [ $dialogBackground, $dialogContainer ] );

			showDialog();
		},

		init: function () {
			var api = new mw.gettingStarted.Api(),
				suggestedPagePromise = api.getSinglePage( {
					taskName: TASK_TYPE,
					excludedTitle: mw.config.get( 'wgPageName' )
				} ),
				pageKind = self.getPageKind();

			suggestedPagePromise.done( function ( title ) {
				self.handlePage( pageKind, new mw.Title( title ) );
			} ).fail( function () {
				self.handlePage( pageKind, null );
			} );
		}
	};

	self.init();
}( jQuery, mediaWiki, mediaWiki.guidedTour ) );
