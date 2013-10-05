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

	// Leave gettingstarted page-impression to taskToolbar, since we need
	// to wait until the toolbar is loaded.  NOTE: This needs adjustment if we do another split
	// test.
	// TODO (mattflaschen, 2013-10-05): This can be simplfied, since the original motivation
	// (isNavbarVisible) is no longer logged.
	if ( task.indexOf( 'gettingstarted-' ) === 0 && schemaAction === 'page-impression' ) {
		return;
	}

	logging.logImpression( task, schemaAction );
}( jQuery, mediaWiki ) );
