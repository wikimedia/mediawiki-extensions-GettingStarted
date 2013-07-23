// This runs on display of the returnTo page after account creation.
( function ( $, mw, gt ) {
	'use strict';

	var logging = mw.gettingStarted.logging,
		cfg = mw.config.get( [
			'wgIsProbablyEditable', 'wgArticleId', 'wgRevisionId',
			'wgNamespaceNumber', 'wgExtensionAssetsPath',
			'wgSiteName', 'wgUserName', 'wgAction'
		] ),
		imagePath = cfg.wgExtensionAssetsPath + '/GettingStarted/resources/images/',
		editablePageButtons, taskOnlyPageButtons,
		self,
		MAIN_NAMESPACE = 0,
		SPECIAL_NAMESPACE = 1;

	function doEditThisPage( $dialog ) {
		var funnel = 'redirect', tourName;

		$dialog.remove();
		logging.setTaskForCurrentPage( funnel );

		// TODO (mattflaschen, 2013-08-22): Check if VE is available (see taskToolbar), then
		// fork between firstedit and firsteditve.
		if ( mw.libs.ve && mw.libs.ve.isAvailable ) {
			tourName = 'firsteditve';
		} else {
			tourName = 'firstedit';
		}

		gt.launchTour( tourName );

		logging.logEvent( {
			action: 'redirect-invite-click',
			funnel: funnel,
			pageId:	cfg.wgArticleId,
			revId: cfg.wgRevisionId,
			isEditable: cfg.wgIsProbablyEditable
		} );
	}

	function doFixPages( $dialog ) {
		var funnel = 'gettingstarted-copyedit';

		$dialog.remove();
		logging.logUnlessTimeout( {
			action: 'redirect-invite-click',
			funnel: funnel
		}, 500 ).always( function () {
			var urlWithoutQuery, uri;
			urlWithoutQuery = mw.util.wikiGetlink( 'Special:GettingStarted/task/copyedit' );
			uri = new mw.Uri( urlWithoutQuery ).extend( { source: 'redirect-invite-click' } );
			window.location.href = uri.toString();
		} );
	}

	/**
	 * Gets a jQuery-wrapped button, from a specification
	 *
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
	function getButton( $dialog, spec ) {
		var klass, $btn, $icon, $mainText, $subText, $btnContents;

		klass =	'mw-ui-button';
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
			spec.click( $dialog );
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

	// The two CTA dialogs have similar but different buttons.
	//
	// TODO (mattflaschen, 2013-08-22): The fixpages text should be different depending on
	// which CTA is shown.
	//
	// TODO: implement two-line buttons with icon per mockup.
	editablePageButtons = [
		{
			id: 'mw-gettingstarted-editable-main-edit-page',
			icon: 'pencil.png',
			isPrimary: true,
			mainText: mw.message( 'gettingstarted-cta-edit-page' ).text(),
			subText: mw.message( 'gettingstarted-cta-edit-page-sub' ).text(),
			click: doEditThisPage
		},
		{
			id: 'mw-gettingstarted-editable-main-fix-pages',
			icon: 'lightbulb_dark.png',
			mainText: mw.message( 'gettingstarted-cta-fix-pages' ).text(),
			click: doFixPages
		}
	];
	taskOnlyPageButtons = [
		{
			id: 'mw-gettingstarted-other-fix-pages',
			icon: 'lightbulb.png',
			isPrimary: true,
			mainText: mw.msg( 'gettingstarted-cta-fix-pages' ),
			subText: mw.message( 'gettingstarted-cta-fix-pages-sub' ).text(),
			click: doFixPages
		}
	];

	self = {
		// We should probably take into account diffs, etc. and other query strings.
		/**
		 * Whether page is a regular view of an editable main namespace article
		 * If it's not main namespace or has a query string, say no.
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
				'gettingStartedReturn',
				'debug'
			];

			if ( cfg.wgNamespaceNumber === MAIN_NAMESPACE &&
				cfg.wgAction === 'view' &&
				cfg.wgIsProbablyEditable ) {

				currentUri = new mw.Uri();
				for ( i = 0; i < ALLOWED_PARAMS.length; i++) {
					delete currentUri.query[ALLOWED_PARAMS[i]];
				}
				// Any remaing parameters are not allowed
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
			if ( cfg.wgAction === 'edit' ) {
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
		 */
		handlePage: function ( pageKind ) {
			switch ( pageKind ) {
				case 'alreadyediting':
				case 'special':
					// If they were already editing, or on a special page, do nothing.
					// No welcome message, no tour, no start a funnel.
					// Note: you can tell the user returned to a non-article page
					// by looking at the pageNS for the
					// redirect-page-impression event in the log.
					break;

				case 'editablemain':
				case 'other': /* falls through */
					self.showCTA( pageKind );
					break;

				default:
					mw.log.warn( 'bad GettingStarted pageKind ' + pageKind );

			}
		},

		// TODO (mattflaschen, 2013-09-27): Cleanup and move to mediawiki.ui
		/**
		 * Generates and returns CTA (Call To Action) dialog
		 *
		 * @param {string} kind kind of page
		 * @return {jQuery} dialog, wrapped by jQuery
		 */
		buildCTA: function ( kind ) {
			var $dialog, $close, closeText, $heading, $dialogText, $leaveLink,
				buttonSpecs, dialogId, width, i;

			// Background overlay like GuidedTour

			// TODO: Click outside or ESC to close
			function closeDialog( evt ) {
				evt.preventDefault();
				$dialog.remove();
			}

			if ( kind === 'editablemain' ) {
				dialogId = 'mw-gettingstarted-cta-editable-main-page';
				buttonSpecs = editablePageButtons;
				width = 35;
			} else {
				dialogId = 'mw-gettingstarted-cta-other-page';
				buttonSpecs = taskOnlyPageButtons;
				width = 30;
			}

			$dialog = $( '<div>' ).attr( {
				id: dialogId,
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
				.click( closeDialog );

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
			for ( i = 0; i < buttonSpecs.length; i++ ) {
				$dialog.append(	getButton( $dialog, buttonSpecs[i] ) );
			}

			$leaveLink = $( '<a>' )
				.attr( {
					'class': 'mw-gettingstarted-cta-leave-link',
					href: '#'
				} )
				.text( mw.message( 'gettingstarted-cta-leave' ).text() )
				.click( closeDialog );

			return $dialog.append( $leaveLink );
		},

		showCTA: function ( kind ) {
			var $cta = self.buildCTA( kind );

			// Hook up the leave link.
			// XXX should also log clicks on the dismiss button (if we keep it).
			$cta.find( '#mw-gettingstarted-cta-leave-link') .on( 'click', function ( /* evt */ ) {
				$cta.dialog( 'close' );
				// Note: Some users might dismiss the CTA by this click or
				// other techniques, yet go ahead and edit this page anyway; we
				// _don't_ set up a funnel for this.
				logging.logEvent( {
					action: 'redirect-invite-click'
				} );
			} );
			$cta.show();
			$( document.body ).append( $cta );

			logging.logImpression( null, 'redirect-invite-impression' );
			return  $cta;
		},

		init: function() {
			var pageKind = self.getPageKind();

			// Seeing this page is a page impression, though the user hasn't
			// chosen an adventure yet.
			// XXX (spage, 2013-08-16) I really think we should log the pageKind
			// here so the event clearly records what happened, but StevenW resists.
			logging.logImpression( null, 'redirect-page-impression' );
			self.handlePage( pageKind );

		}
	};



	$( document ).ready( function () {
		self.init();
	} );

} )( jQuery, mediaWiki, mediaWiki.guidedTour );
