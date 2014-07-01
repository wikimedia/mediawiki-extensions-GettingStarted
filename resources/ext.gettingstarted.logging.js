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

	var cookieOptions = { path: '/' };

	/**
	 * @return {Object} User's list of openTasks, if any, from the cookie.
	 */
	function getTasks() {
		return JSON.parse( $.cookie( 'openTask' ) ) || {};
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
	 * @param {string|null} task The kind of task, such as 'redirect' or 'gettingstarted-copyedit',
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
			$.cookie( 'openTask', JSON.stringify( tasks ), cookieOptions );
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

	mw.gettingStarted = mw.gettingStarted || {};
	mw.gettingStarted.logging = mw.gettingStarted.logging || {};

	mw.gettingStarted.logging.setTask = setTask;
	mw.gettingStarted.logging.setTaskForCurrentPage = setTaskForCurrentPage;
	mw.gettingStarted.logging.getTasks = getTasks;
	mw.gettingStarted.logging.getTask = getTask;
	mw.gettingStarted.logging.getTaskForCurrentPage = getTaskForCurrentPage;
}( window, document, mediaWiki, jQuery ) );
