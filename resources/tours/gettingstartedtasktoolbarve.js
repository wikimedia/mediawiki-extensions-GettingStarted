// Tour started on article page, with task toolbar showing
// Used for VisualEditor.  The 'gettingstartedtasktoolbar' tour is for wikitext editing.

( function ( $, mw, gt ) {
	'use strict';

	var task = mw.gettingStarted.logging.getTaskForCurrentPage() || '',
		editSectionSelector = '.mw-editsection-visualeditor',
		hasEditSectionAtLoadTime;

	// The code around the section stuff is a bit of a hack, but I want to see if this is common
	// so I don't over-framework it.
	//
	// The reason hasEditSection is a function is that through VE, users can dynamically add or
	// remove sections without a page load.
	function hasEditSection() {
		return $( editSectionSelector ).length > 0;
	}

	// https://bugzilla.wikimedia.org/show_bug.cgi?id=48198
	if ( mw.config.get( 'wgCanonicalNamespace' ) !== '' || task.indexOf( 'gettingstarted-' ) !== 0 ) {
		return;
	}

	// Ideally, the button would also change dynamically as well if they re-start the tour (without a page load).
	// However, with the way defineTour currently works, that is not possible.  The variable name is intended
	// to make that clear.
	hasEditSectionAtLoadTime = hasEditSection();

	gt.defineTour( {
		name: 'gettingstartedtasktoolbarve',
		shouldLog: true,
		showConditionally: 'VisualEditor',
		steps: [ {
			titlemsg: 'guidedtour-tour-gettingstartedtasktoolbar-ambox-title',
			descriptionmsg: 'guidedtour-tour-gettingstartedtasktoolbar-ambox-description',
			attachTo: '.ambox',
			position: 'bottomLeft',
			autoFocus: true,
			width: 450,
			buttons: [ {
				action: 'next'
			} ],
			shouldSkip: function () {
				return gt.isVisualEditorOpen() || $( '.ambox' ).length === 0;
			}
		}, {
			titlemsg: 'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title',
			descriptionmsg: 'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description',
			position: 'bottom',
			attachTo: '#ca-ve-edit',
			autoFocus: true,
			width: 300,
			shouldSkip: gt.isVisualEditorOpen,
			buttons: [ {
				namemsg: hasEditSectionAtLoadTime ? 'guidedtour-next-button' : 'guidedtour-okay-button',
				onclick: function () {
					if ( hasEditSection() ) {
						mw.libs.guiders.next();
					} else {
						mw.libs.guiders.hideAll();
					}
				}
			} ],
			allowAutomaticOkay: false
		}, {
			titlemsg: 'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title',
			descriptionmsg: 'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description',
			position: 'right',
			attachTo: editSectionSelector,
			autoFocus: true,
			width: 300,
			shouldSkip: function () {
				return gt.isVisualEditorOpen() || !hasEditSection();
			}
		}, {
			titlemsg: 'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title',
			descriptionmsg: 'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description',
			attachTo: '.ve-ui-toolbar-saveButton',
			position: 'left',
			autoFocus: true,
			closeOnClickOutside: false,
			shouldSkip: function() {
				return !gt.isEditing();
			}
		} ]
	} );
} ( jQuery, mediaWiki, mediaWiki.guidedTour ) );
