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
		// Split test.  Even gets GettingStartedv2 treatment
		var userId, bucket, defaults;
		userId = mw.config.get( 'wgUserId' );
		bucket = ( userId % 2 === 0 ) ? 'test' : 'control';
		defaults = {
			version: 2,
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
}( window, document, mediaWiki, jQuery ) );
