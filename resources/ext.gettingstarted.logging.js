// This file is based on openTask from the E3Experiments extension, so consult that repo for earlier history.

/**
 * @class mediaWiki.openTask
 * @singleton
 * This handles clicks and the user choosing and acting on open tasks,
 * initiated from the "Getting Started" page. This means it runs on
 * _every_ page in case the user is editing or just completed editing a
 * page from her openTask list.
 */
( function ( window, document, mw, $ ) {
	'use strict';
	var SCHEMA_NAME = 'GettingStartedNavbar';

	/**
	 * Log an event with the GettingStarted schema
	 *
	 * @param {object} eventInstance event object
	 *
	 * @return {jQuery.Deferred} Promise object from EventLogging logEvent
	 */
	function logEvent( eventInstance ) {
		var noopDeferred;

		if ( mw.user.isAnon() ) {
			// Do no logging for anonymous users, but resolve successfully as no-op
			noopDeferred = $.Deferred();
			noopDeferred.resolve();
			return noopDeferred;
		}

		return mw.eventLog.logEvent( SCHEMA_NAME, eventInstance );
	}

	/**
	* Gets the applicable client-side page action (for logging purposes), or null if there is
	* none.
	*
	* @return {string} 'page-impression', 'page-edit-impression', or 'page-save-success', or
	*   null
	*/
	function getPageSchemaAction() {
		var wgAction, wgPostEdit, loggedActions, schemaAction;

		wgAction = mw.config.get( 'wgAction' );
		wgPostEdit = mw.config.get( 'wgPostEdit' );
		loggedActions = {
			view : 'page-impression',
			edit : 'page-edit-impression'
		};

		if ( wgPostEdit ) {
			schemaAction = 'page-save-success';
		} else {
			schemaAction = loggedActions[ wgAction ];
		}

		// We ignore history, submit, etc.
		if ( !schemaAction ) {
			schemaAction = null;
		}

		return schemaAction;
	}

	// Wrapper around logEvent that returns a promise that resolves
	// when either the logging attempt concludes or `timeout` miliseconds have
	// elapsed, whichever is sooner.
	function logUnlessTimeout( event, timeout ) {
		var dfd = $.Deferred();
		window.setTimeout( dfd.reject, timeout );
		logEvent( event ).then( dfd.resolve, dfd.reject );
		return dfd.promise();
	}

	function setDefaults( defaults ) {
		mw.eventLog.setDefaults( SCHEMA_NAME, defaults );
	}

	// Set some fields common to both clicks and fixing articles.
	function setCommonDefaults() {
		var userId, bucket, defaults;
		userId = mw.config.get( 'wgUserId' );
		bucket = 'test';
		defaults = {
			version: 4,
			userId: userId,
			bucket: bucket
		};

		setDefaults( defaults );
	}

	/**
	 * @return {Object} User's list of openTasks, if any, from the cookie.
	 */
	function getTasks() {
		return $.parseJSON( $.cookie( 'openTask' ) ) || {};
	}

	/**
	 * Gets task for article
	 *
	 * @param {string} prefixedText article to check for a task, in prefixed text format.  You can get
	 *  this from mw.Title.getPrefixedText()
	 * @return {string|undefined} task string if there is one, or undefined
	 */
	function getTask( prefixedText ) {
		return getTasks()[prefixedText];
	}

	/**
	 * Gets the task for the current page, if any
	 *
	 * @return {string|undefined} task string if there is one, or undefined
	 */
	function getTaskForCurrentPage() {
		var title = new mw.Title( mw.config.get( 'wgPageName' ) );
		return getTask( title.getPrefixedText() );
	}

	/**
	 * @param {string} task The task name.
	 * @return {string} the schema of the task, or null for legacy tasks
	 */
	function getSchemaForTask( task ) {
		// The tasks for GettingStarted are fixed and correspond to its two tasks.
		var schema = ( task.indexOf( 'gettingstarted' ) === 0 || task === 'returnto' ) ?
			SCHEMA_NAME : null;
		return schema;
	}

	/**
	 * Remembers a task the user has chosen by adding it to a session cookie.
	 * @param {string} article The article title (possibly including a namespace), in prefixed
	 *  text format.  You can get this from mw.Title.getPrefixedText()
	 * @param {string|null} task The kind of task, such as 'returnto' or 'gettingstarted-copyedit',
	 *  or null to clear the task for the article.
	 * @return {void}
	 */
	function setTask( article, task ) {
		var tasks = getTasks();

		if ( !task ) {
			delete tasks[ article ];
		} else {
			tasks[ article ] = task;
		}

		if ( $.isEmptyObject( tasks ) ) {
			// TODO (2012-01 spage) use removeCookie() when we upgrade to
			// jquery.cookie version 1.2
			$.cookie( 'openTask', null );
		} else {
			$.cookie( 'openTask', $.toJSON( tasks ), { path: '/' } );
		}
	}

	/**
	 * Logs a page impression, noting whether the toolbar is visible
	 *
	 * @param {string} fullTask full task name (returnto or gettingstarted-*)
	 * @param {string} schemaAction action field of schema
	 *
	 * @return {jQuery.Deferred} Promise object from EventLogging logEvent,
	 *   or null for invalid schema
	 */
	function logImpression( fullTask, schemaAction) {
		var isEditable, schema, event, querySource;

		schema = getSchemaForTask( fullTask );
		if ( schema === null ) {
			return null;
		}

		// Hack: look for the edit tab. This id works in most skins, but
		// not e.g. nostalgia
		isEditable = !! $( '#ca-edit').length;
		event = {
			action: schemaAction,
			funnel: fullTask,
			pageId: mw.config.get( 'wgArticleId' ),
			revId: mw.config.get( 'wgCurRevisionId' ),
			isEditable: isEditable,
			isNavbarVisible: $( '#mw-gettingstarted-toolbar' ).is( ':visible' )
		};

		if ( schemaAction === 'page-impression' ) {
			querySource = mw.util.getParamValue( 'source' );
			if ( querySource === 'navbar-next' || querySource === 'gettingstarted' ) {
				event.source = querySource;
			}
		}

		return logEvent( event );
	}

	// Execution logic

	setCommonDefaults();

	mw.gettingStarted = mw.gettingStarted || {};
	mw.gettingStarted.logging = mw.gettingStarted.logging || {};

	mw.gettingStarted.logging.logUnlessTimeout = logUnlessTimeout;
	mw.gettingStarted.logging.setDefaults = setDefaults;
	mw.gettingStarted.logging.setTask = setTask;
	mw.gettingStarted.logging.getTasks = getTasks;
	mw.gettingStarted.logging.getTask = getTask;
	mw.gettingStarted.logging.getTaskForCurrentPage = getTaskForCurrentPage;
	mw.gettingStarted.logging.getSchemaForTask = getSchemaForTask;
	mw.gettingStarted.logging.logEvent = logEvent;
	mw.gettingStarted.logging.getPageSchemaAction = getPageSchemaAction;
	mw.gettingStarted.logging.logImpression = logImpression;
}( window, document, mediaWiki, jQuery ) );
