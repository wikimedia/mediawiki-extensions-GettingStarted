// This runs on display of the returnTo page after account creation.
( function ( $, mw, gt ) {
	'use strict';

	var logging = mw.gettingStarted.logging,
		cfg = mw.config.get( [
			'wgIsProbablyEditable', 'wgArticleId', 'wgRevisionId',
			'wgNamespaceNumber', 'wgExtensionAssetsPath',
			'wgSiteName', 'wgUserName', 'wgAction', 'wgUserId'
		] ),
		imagePath = cfg.wgExtensionAssetsPath + '/GettingStarted/resources/images/',
		self,
		MAIN_NAMESPACE = 0,
		SPECIAL_NAMESPACE = -1,
		// TODO (mattflaschen, 2013-12-19): This will need to be configurable later.
		TASK_TYPE = 'copyedit',
		fullTaskType = 'gettingstarted-' + TASK_TYPE,
		CTA_TYPE_NONE = null,
		CTA_TYPE_SUGGESTED = 'suggested',
		CTA_TYPE_EDIT_CURRENT_OR_SUGGESTED = 'edit_current_or_suggested';

	function logMissingSuggestedArticle() {
		mw.eventLog.logEvent( 'GettingStartedNavbarNoArticle', {
			version: 1,
			funnel: fullTaskType
		} );
	}

	function logRedirectImpression( ctaType ) {
		var event;

		if ( mw.user.isAnon() ) {
		    return;
		}

		event = {
			userId: cfg.wgUserId,
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

		logging.logEvent( {
			action: 'redirect-invite-click',
			funnel: funnel,
			pageId: cfg.wgArticleId,
			revId: cfg.wgRevisionId,
			isEditable: cfg.wgIsProbablyEditable
		} );
	}

	/**
	 * Creates a jQuery-wrapped button, from a specification.
	 *
	 * When clicked, it will close the dialog then call spec.click
	 *
	 * @param {Function} closeDialog function to call to close dialog
	 * @param {Object} spec button specification
	 * @param {Object} spec.id HTML id
	 * @param {string} spec.icon file name of icon, relative to the GettingStarted
	 *   extension's images directory
	 * @param {boolean} spec.isPrimary true for a primary button
	 * @param {string} spec.mainText main button text
	 * @param {string} [spec.subText] lower button text
	 * @param {Function} spec.click function to call on button click
	 * @return {jQuery} created button
	 *
	 * @private
	 */
	function createButton( closeDialog, spec ) {
		var klass, $btn, $icon, $mainText, $subText, $btnContents;

		klass = 'mw-ui-button';
		if ( spec.isPrimary ) {
			klass += ' mw-ui-primary';
		} else {
			// Due to lack of cross-browser :not support, and the fact that we are
			// currently overriding the regular mw.ui secondary button styling.
			klass += ' mw-gettingstarted-cta-secondary';
		}

		if ( !spec.subText ) {
			// Wraps differently when there is no subText
			klass += ' mw-gettingstarted-cta-button-no-sub';
		}

		$btn = $( '<div> ').attr( {
			id: spec.id,
			'class': klass
		} ).click( function ( evt ) {
			evt.stopPropagation();
			closeDialog();
			spec.click();
		} );


		$icon = $( '<img>' ).attr( {
			src: imagePath + spec.icon,
			'class': 'mw-gettingstarted-cta-button-icon'
		} );

		$mainText = $( '<span>' )
			.attr( 'class', 'mw-gettingstarted-cta-button-main' )
			.text( spec.mainText );

		$btnContents = $( '<div>' )
			.attr( 'class', 'mw-gettingstarted-cta-button-contents' )
			.append( $icon, $mainText );

		if ( spec.subText ) {
			$subText = $( '<span>' )
				.attr( 'class', 'mw-gettingstarted-cta-button-sub' )
				.text( spec.subText );
			$btnContents.append( $subText );
		}

		return $btn.append( $btnContents );
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
		 * @return boolean
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
				for ( i = 0; i < ALLOWED_PARAMS.length; i++) {
					delete currentUri.query[ALLOWED_PARAMS[i]];
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
			if ( cfg.wgAction === 'edit' || cfg.wgAction === 'submit' ) {
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
		handlePage: function ( pageKind, suggestedTitle) {
			var dialogSpec, editCurrentPrimaryButton, suggestionSecondaryButton, suggestionPrimaryButton, ctaType;

			function doFixPages() {
				logging.setTask( suggestedTitle.getPrefixedText(), fullTaskType );
				logging.logUnlessTimeout( {
					action: 'redirect-invite-click',
					funnel: fullTaskType
				}, 500 ).always( function () {
					window.location.href = suggestedTitle.getUrl();
				} );
			}

			// The possible CTA dialogs have similar but different buttons.
			editCurrentPrimaryButton = {
				id: 'mw-gettingstarted-editable-main-edit-page',
				icon: 'pencil.png',
				isPrimary: true,
				mainText: mw.message( 'gettingstarted-cta-edit-page' ).text(),
				subText: mw.message( 'gettingstarted-cta-edit-page-sub' ).text(),
				click: doEditThisPage
			};

			suggestionSecondaryButton = {
				id: 'mw-gettingstarted-editable-main-fix-pages',
				icon: 'lightbulb_dark.png',
				mainText: mw.message( 'gettingstarted-cta-fix-pages' ).text(),
				click: doFixPages
			};

			suggestionPrimaryButton = {
				id: 'mw-gettingstarted-other-fix-pages',
				icon: 'lightbulb.png',
				isPrimary: true,
				mainText: mw.msg( 'gettingstarted-cta-fix-pages' ),
				subText: mw.message( 'gettingstarted-cta-fix-pages-sub' ).text(),
				click: doFixPages
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
					logMissingSuggestedArticle();
					dialogSpec.buttons = [ editCurrentPrimaryButton ];
				}
			} else if ( pageKind === 'other' ) {
				if ( !suggestedTitle) {
					logMissingSuggestedArticle();
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

			$( document ).ready( function () {
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
			var $dialog, $close, closeText, $heading, $dialogText, $leaveLink,
				i, $overlay;

			// Background overlay like GuidedTour

			function showDialog() {
				var $body = $( document.body );
				$body.append( $overlay );
				$dialog.show();
				$body.append( $dialog );
			}

			function removeDialog() {
				$dialog.remove();
				$overlay.remove();
			}

			// TODO: Click outside or ESC to close
			function closeDialogByClick( evt ) {
				evt.preventDefault();

				// Note: Some users might dismiss the CTA by this click or
				// other techniques, yet go ahead and edit this page anyway; we
				// _don't_ set up a funnel for this.
				logging.logEvent( {
					action: 'redirect-invite-click'
				} );

				removeDialog();
			}

			$overlay = $( '<div>' ).attr( 'class', 'mw-gettingstarted-cta-overlay' );

			$dialog = $( '<div>' ).attr( {
				id: spec.id,
				'class': 'mw-gettingstarted-cta'
			} );

			closeText = mw.message( 'gettingstarted-cta-close' ).text();
			// TODO: Use some kind of X visual here while preserving accessibility
			$close = $( '<a>' )
				.attr( {
					'class': 'mw-gettingstarted-cta-close',
					href: '#',
					title: closeText,
					'aria-label': closeText
				} )
				.text( '×' )
				.click( closeDialogByClick );

			$heading = $( '<div>' )
				.attr( 'class', 'mw-gettingstarted-cta-heading' )
				.text( mw.message( 'gettingstarted-cta-heading' ).text() );

			$dialogText = $( '<div>' )
				.attr( 'class',	'mw-gettingstarted-cta-body' )
				.text( mw.message( 'gettingstarted-cta-text' ).text() );

			$dialog.append( $close, $heading, $dialogText );

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
				$dialog.append( createButton( removeDialog, spec.buttons[i] ) );
			}

			$leaveLink = $( '<a>' )
				.attr( {
					'class': 'mw-gettingstarted-cta-leave-link',
					href: '#'
				} )
				.text( mw.message( 'gettingstarted-cta-leave' ).text() )
				.click( closeDialogByClick );

			$dialog.append( $leaveLink );

			showDialog();
			logging.logImpression( null, 'redirect-invite-impression' );
		},

		init: function () {
			var api = new mw.gettingStarted.Api(),
				suggestedPagePromise = api.getSinglePage( {
					taskName: TASK_TYPE,
					excludedTitle: mw.config.get( 'wgPageName' )
				} ),
				pageKind = self.getPageKind();

			// Seeing this page is a page impression, though the user hasn't
			// chosen an adventure yet.
			// XXX (spage, 2013-08-16) I really think we should log the pageKind
			// here so the event clearly records what happened, but StevenW resists.
			logging.logImpression( null, 'redirect-page-impression' );
			suggestedPagePromise.done( function ( title ) {
				self.handlePage( pageKind, new mw.Title( title ) );
			} ).fail( function () {
				self.handlePage( pageKind, null );
			} );
		}
	};

	self.init();
} )( jQuery, mediaWiki, mediaWiki.guidedTour );
