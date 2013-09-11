// This file is based on openTask from the E3Experiments extension, so consult that repo for earlier history.

( function ( $, mw ) {
	'use strict';

	// Runs on every page, checks to see if this page is in the user's task list,
	// and if so logs certain user actions.
	var task, schemaAction, logging = mw.gettingStarted.logging;

	task = logging.getTaskForCurrentPage();
	schemaAction = logging.getPageSchemaAction();

	// No task or no schema.
	// Expected to be task but not schemaAction in cases such as the history view.
	if ( !task || !schemaAction ) {
		return;
	}

	// Leave gettingstarted page-impression and page-save-success to taskToolbar, since we need
	// to wait until the toolbar is loaded.  NOTE: This needs adjustment if we do another split
	// test.
	if ( task.indexOf( 'gettingstarted-' ) === 0 &&
	     ( schemaAction === 'page-impression' || schemaAction === 'page-save-success' ) ) {
		return;
	}

	logging.logImpression( task, schemaAction );
}( jQuery, mediaWiki ) );
