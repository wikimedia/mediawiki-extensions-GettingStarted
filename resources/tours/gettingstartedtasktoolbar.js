// Tour started on article page, with task toolbar showing
// Used for wikitext editing.  The 'gettingstartedtasktoolbarve' tour is for VisualEditor.

( function ( window, document, $, mw, gt ) {
	'use strict';

	var task = mw.gettingStarted.logging.getTaskForCurrentPage() || '',
		hasEditSection,
		hasIdeasElement,
		tour;

	// https://bugzilla.wikimedia.org/show_bug.cgi?id=48198
	if ( mw.config.get( 'wgCanonicalNamespace' ) !== '' || task.indexOf( 'gettingstarted-' ) !== 0 ) {
		return;
	}

	// The code around here is a bit of a hack, but I want to see if this is common so
	// I don't over-framework it.
	hasEditSection = $( '.mw-editsection' ).length > 0;

	hasIdeasElement = $( '.ambox' ).length > 0;

	tour = new gt.TourBuilder( {
		name: 'gettingstartedtasktoolbar',
		shouldLog: true,
		showConditionally: 'wikitext'
	} );

	tour.firstStep( {
		name: 'editIntro',
		titlemsg: 'guidedtour-tour-gettingstartedtasktoolbarintro-title',
		descriptionmsg: 'guidedtour-tour-gettingstartedtasktoolbarintro-description',
		autoFocus: true,
		overlay: true,
		width: 450
	} )
	.next( function () {
		if ( hasIdeasElement ) {
			return 'editIdeas';
		} else {
			return 'editArticle';
		}
	} );

	tour.step( {
		name: 'editIdeas',
		titlemsg: 'guidedtour-tour-gettingstartedtasktoolbar-ambox-title',
		descriptionmsg: 'guidedtour-tour-gettingstartedtasktoolbar-ambox-description',
		attachTo: '.ambox',
		position: 'bottomLeft',
		autoFocus: true,
		width: 450
	} )
	.next( 'editArticle' );

	tour.step( {
		name: 'editArticle',
		titlemsg: 'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title',
		descriptionmsg: 'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description',
		position: 'bottom',
		attachTo: '#ca-edit',
		autoFocus: true,
		width: 300,
		allowAutomaticNext: false,
		buttons: [ {
			action: hasEditSection ? 'next' : 'okay',
			onclick: function () {
				if ( hasEditSection ) {
					mw.libs.guiders.next();
				} else {
					mw.libs.guiders.hideAll();
				}
			}
		} ],
		allowAutomaticOkay: false
	} )
	.transition( function () {
		if ( gt.isEditing() ) {
			return 'preview';
		}
	} )
	.next( 'editSection' );

	tour.step( {
		name: 'editSection',
		titlemsg: 'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title',
		descriptionmsg: 'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description',
		position: 'right',
		attachTo: '.mw-editsection',
		autoFocus: true,
		width: 300
	} )
	.transition( function () {
		if ( gt.isEditing() ) {
			return 'preview';
		} else if ( !hasEditSection ) {
			return gt.TransitionAction.HIDE;
		}
	} );

	tour.step( {
		name: 'preview',
		// The remaining steps are copied from the gettingstarted tour in the GuidedTour extension
		titlemsg: 'guidedtour-tour-gettingstarted-click-preview-title',
		descriptionmsg: 'guidedtour-tour-gettingstarted-click-preview-description',
		attachTo: '#wpPreview',
		position: 'top',
		autoFocus: true,
		closeOnClickOutside: false
	} )
	.transition( function () {
		if ( gt.isReviewing() ) {
			return 'save';
		} else if ( !gt.isEditing() ) {
			return gt.TransitionAction.END;
		}
	} );

	tour.step( {
		name: 'save',
		titlemsg: 'guidedtour-tour-gettingstarted-click-save-title',
		descriptionmsg: 'guidedtour-tour-gettingstarted-click-save-description',
		attachTo: '#wpSave',
		position: 'top',
		autoFocus: true,
		closeOnClickOutside: false
	} )
	.transition( function () {
		if ( !gt.isReviewing() ) {
			return gt.TransitionAction.END;
		}
	} );

} (window, document, jQuery, mediaWiki, mediaWiki.guidedTour ) );
