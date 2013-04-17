// Tour started on article page, with task toolbar showing

( function ( window, document, $, mw, gt ) {
	var task = mw.gettingStarted.logging.getTaskForCurrentPage() || '';

	// https://bugzilla.wikimedia.org/show_bug.cgi?id=48198
	if ( mw.config.get( 'wgCanonicalNamespace' ) !== '' || task.indexOf( 'gettingstarted-' ) !== 0 ) {
		return;
	}

	gt.defineTour( {
		name: 'gettingstartedtasktoolbar',
		shouldLog: true,
		steps: [ {
			titlemsg: 'guidedtour-tour-gettingstartedtasktoolbar-ambox-title',
			descriptionmsg: 'guidedtour-tour-gettingstartedtasktoolbar-ambox-description',
			attachTo: '.ambox',
			position: 'bottomLeft',
			width: 450,
			buttons: [ {
				action: 'next'
			} ],
			shouldSkip: function () {
				return $( '.ambox' ).length === 0;
			}
		}, {
			titlemsg: 'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title',
			descriptionmsg: 'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description',
			position: 'bottom',
			attachTo: '#ca-edit',
			autoFocus: true,
			width: 300,
			shouldSkip: gt.isEditing,
			buttons: [ {
				action: 'okay',
				onclick: function () {
					if ( $( '.mw-editsection' ).length > 0 ) {
						mw.libs.guiders.next();
					} else {
						mw.libs.guiders.hideAll();
					}
				}
			} ]
		}, {
			titlemsg: 'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title',
			descriptionmsg: 'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description',
			position: 'right',
			attachTo: '.mw-editsection',
			autoFocus: true,
			width: 300,
			shouldSkip: function () {
				return gt.isEditing() || $( '.mw-editsection' ).length === 0;
			}
		}, {
			// The remaining steps are copied from the gettingstarted tour in the GuidedTour extension
			titlemsg: 'guidedtour-tour-gettingstarted-click-preview-title',
			descriptionmsg: 'guidedtour-tour-gettingstarted-click-preview-description',
			attachTo: '#wpPreview',
			position: 'top',
			closeOnClickOutside: false,
			shouldSkip: function() {
				return !gt.isEditing();
			}
		}, {
			titlemsg: 'guidedtour-tour-gettingstarted-click-save-title',
			descriptionmsg: 'guidedtour-tour-gettingstarted-click-save-description',
			attachTo: '#wpSave',
			position: 'top',
			closeOnClickOutside: false,
			shouldSkip: function() {
				return !gt.isReviewing();
			}
		} ]
	} );
} (window, document, jQuery, mediaWiki, mediaWiki.guidedTour ) );
