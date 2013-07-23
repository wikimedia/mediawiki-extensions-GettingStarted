// This file is based on openTask from the E3Experiments extension, so consult that repo for earlier history.

/**
 * @class mw.gettingStarted.logging
 * @singleton
 * This handles clicks and the user choosing and acting on open tasks,
 * initiated from the "Getting Started" page. This means it runs on
 * _every_ page in case the user is editing or just completed editing a
 * page from her openTask list.
 */
( function ( window, document, mw, $ ) {
	'use strict';

	var gettingStartedStatic = mw.config.get( 'wgGettingStartedConfig' ),
		requestData = mw.config.get( 'wgGettingStarted' ),
		schemaName = gettingStartedStatic.schemaName,
		cookieOptions = { path: '/' };

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

		return mw.eventLog.logEvent( schemaName, eventInstance );
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
		mw.eventLog.setDefaults( schemaName, defaults );
	}

	// Set some fields common to both clicks and fixing articles.
	function setCommonDefaults() {
		var defaults, cfg;

		if ( mw.user.isAnon() ) {
			// No logging, so no defaults needed for anons
			return;
		}

		cfg = mw.config.get( [ 'wgUserId', 'wgNamespaceNumber' ] );

		defaults = {
			version: gettingStartedStatic.loggingVersion,
			userId: cfg.wgUserId,
			pageNS: cfg.wgNamespaceNumber,
			bucket: requestData.bucket
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
			$.cookie( 'openTask', null, cookieOptions );
		} else {
			$.cookie( 'openTask', $.toJSON( tasks ), cookieOptions );
		}
	}

	/**
	 * Sets a task for the current page.
	 * Does no error checking; callers should ensure this page is suitable for the task
	 *
	 * @param {string|null} task The kind of task, such as 'redirect'
	 *  or null to clear the task for the article.
	 * @return {string|undefined} task string if there is one, or undefined
	 */
	function setTaskForCurrentPage( task ) {
		var title = new mw.Title( mw.config.get( 'wgPageName' ) );
		return setTask( title.getPrefixedText(), task );
	}

	/**
	 * Logs a page impression.
	 *
	 * As part of the data, it logs whether the toolbar is visible.
	 *
	 * This is called when the user is shown a page for fixing.  But with OB6, it
	 * is also called from the initial redirect-page-impression (before the user
	 * has responded to the CTA).
	 *
	 * @param {string|null} fullTask full task name (redirect or gettingstarted-*),
	 *   or null
	 * @param {string} schemaAction action field of schema
	 *
	 * @return {jQuery.Deferred} Promise object from EventLogging logEvent,
	 *   or null for invalid schema
	 */
	function logImpression( fullTask, schemaAction) {
		var event,
			cfg = mw.config.get( [ 'wgArticleId', 'wgRevisionId', 'wgIsProbablyEditable' ] );

		event = {
			action: schemaAction,
			pageId: cfg.wgArticleId,
			revId: cfg.wgRevisionId,
			isEditable: cfg.wgIsProbablyEditable
		};
		if ( fullTask !== null ) {
			event.funnel = fullTask;
		}

		if ( schemaAction === 'page-impression' ) {
			// EventLogging will still log it, but mark the event clientValidated false
			// if the source is invalid.
			event.source = mw.util.getParamValue( 'source' );
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
	mw.gettingStarted.logging.setTaskForCurrentPage = setTaskForCurrentPage;
	mw.gettingStarted.logging.getTasks = getTasks;
	mw.gettingStarted.logging.getTask = getTask;
	mw.gettingStarted.logging.getTaskForCurrentPage = getTaskForCurrentPage;
	mw.gettingStarted.logging.logEvent = logEvent;
	mw.gettingStarted.logging.getPageSchemaAction = getPageSchemaAction;
	mw.gettingStarted.logging.logImpression = logImpression;
}( window, document, mediaWiki, jQuery ) );
