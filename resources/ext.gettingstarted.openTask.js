// This file is based on openTask from the E3Experiments extension, so consult that repo for earlier history.

( function ( $, mw ) {
	// Runs on every page, checks to see if this page is in the user's task list,
	// and if so logs certain user actions.
	var action, task,
		schema, event, isEditable, querySource,
		loggedActions = {
			view : 'page-impression',
			edit : 'page-edit-impression'
		}, cfg = mw.config.get( [
			'wgAction', 'wgArticleId', 'wgCurRevisionId', 'wgPostEdit'
		] ),
		logging = mw.gettingStarted.logging;

	if ( cfg.wgPostEdit ) {
		action = 'page-save-success';
	} else {
		action = loggedActions[ cfg.wgAction ];
	}
	// We ignore history, submit, etc.
	if ( !action ) {
		return;
	}

	task = logging.getTaskForCurrentPage();
	if ( task ) {
		schema = logging.getSchemaForTask( task );
		if ( schema === null ) {
			return;
		}

		// Hack: look for the edit tab. This id works in most skins, but
		// not e.g. nostalgia
		isEditable = !! $( '#ca-edit').length;
		event = {
			action     : action,
			funnel     : task,
			pageId     : cfg.wgArticleId,
			revId      : cfg.wgCurRevisionId,
			isEditable : isEditable
		};

		if ( action === 'page-impression' ) {
			querySource = mw.util.getParamValue( 'source' );
			if ( querySource === 'navbar-next' || querySource === 'gettingstarted' ) {
				event.source = querySource;
			}
		}

		logging.logEvent( event );
	}
}( jQuery, mediaWiki ) );
