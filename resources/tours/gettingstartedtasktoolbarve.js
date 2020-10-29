// Tour started on article page, with task toolbar showing
// Used for VisualEditor.  The 'gettingstartedtasktoolbar' tour is for wikitext editing.

( function ( gt ) {
	'use strict';

	var task = mw.gettingStarted.logging.getTaskForCurrentPage() || '',
		editSectionSelector = '.mw-editsection-visualeditor',
		hasEditSectionAtLoadTime,
		$editTab;

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

	// eslint-disable-next-line no-jquery/no-global-selector
	if ( $( '#ca-ve-edit' ).length > 0 ) {
		// eslint-disable-next-line no-jquery/no-global-selector
		$editTab = $( '#ca-ve-edit' );
	} else {
		// eslint-disable-next-line no-jquery/no-global-selector
		$editTab = $( '#ca-edit' );
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
			titlemsg: 'guidedtour-tour-gettingstartedtasktoolbarintro-title',
			descriptionmsg: 'guidedtour-tour-gettingstartedtasktoolbarintro-description',
			autoFocus: true,
			overlay: true,
			width: 450,
			buttons: [ {
				action: 'next'
			} ]
		}, {
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
				// eslint-disable-next-line no-jquery/no-global-selector
				return gt.isVisualEditorOpen() || $( '.ambox' ).length === 0;
			}
		}, {
			titlemsg: 'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title',
			description: mw.message(
				'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description',
				$editTab.find( 'a' ).text()
			).parse(),
			position: 'bottom',
			attachTo: $editTab,
			autoFocus: true,
			width: 300,
			shouldSkip: gt.isVisualEditorOpen,
			allowAutomaticNext: false,
			buttons: [ {
				action: hasEditSectionAtLoadTime ? 'next' : 'okay',
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
			shouldSkip: function () {
				return !gt.isEditing();
			}
		} ]
	} );
}( mw.guidedTour ) );
