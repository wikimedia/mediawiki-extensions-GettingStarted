// This file was moved from the E3Experiments extension, so consult that repo for earlier history.

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
	var cfg = mw.config.get( [
		'wgAction', 'wgPageName', 'wgTitle', 'wgCanonicalSpecialPageName',
		'wgArticleId', 'wgCurRevisionId',
		// Wiki server variables we supply:
		'wgIsWelcomeCreation', 'wgUserId',
		// Wiki server variable supplied by Extension:PostEdit:
		'wgPostEdit'
	] ),
		$returnTo,
		returnToTitle,
		isNew;


	if ( mw.user.isAnon() ) {
		// Do no logging for anonymous users
		return;
	}

	// Wrapper around mw.eventLog.logEvent that returns a promise that resolves
	// when either the logging attempt concludes or `timeout` miliseconds have
	// elapsed, whichever is sooner.
	function logUnlessTimeout( schema, event, timeout ) {
		var dfd = $.Deferred();
		setTimeout( dfd.reject, timeout );
		mw.eventLog.logEvent( schema, event ).then( dfd.resolve, dfd.reject );
		return dfd.promise();
	}

	// Set some fields common to both clicks and fixing articles.
	function setCommonDefaults( schema ) {
		var defaults = {
			version: 3,
			userId : cfg.wgUserId,
			bucket: 'test'
		};

		mw.eventLog.setDefaults( schema, defaults );
	}

	/**
	 * @return {boolean} True if user is on GettingStarted page.
	 */
	function isGettingStarted () {
		return cfg.wgIsWelcomeCreation ||
			cfg.wgCanonicalSpecialPageName === 'GettingStarted' ||
			cfg.wgTitle.indexOf( 'E3 Test Onboarding' ) !== -1;
	}

	/**
	 * @return {Object} User's list of openTasks, if any, from the cookie.
	 */
	function getTasks() {
		return $.parseJSON( $.cookie( 'openTask' ) ) || {};
	}

	/**
	 * @param {string} task The task name.
	 * @return {string} the schema of the task.
	 */
	function getSchemaForTask( task ) {
		// The tasks for GettingStarted are fixed and correspond to its two tasks.
		var schema = ( task.indexOf( 'gettingstarted' ) === 0 || task === 'returnto' ) ?
			'GettingStarted' : 'CommunityPortal';
		return schema;
	}

	/**
	 * Remembers a task the user has chosen by adding it to a session cookie.
	 * @param {string} article The article name (possibly including a namespace).
	 * @param {string} task The kind of task.
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
	 * @private
	 * Some pages don't make sense as the start of an accept-edit-savesuccess
	 * funnel, because they aren't editable (Special namespace, queries,
	 * etc.).
	 *
	 * @return boolean
	 */
	function isAppropriateTask( title ) {
		var SPECIAL_NAMESPACE = -1, titleObject;

		if ( typeof title !== 'string' || title === '' ) {
			return false;
		}
		if ( title.indexOf( '?' ) !== -1 ) {
			return false;
		}

		titleObject = new mw.Title( title );

		return titleObject.getNamespaceId() !== SPECIAL_NAMESPACE;
	}

	/**
	 * Gets a page name from the value of a title attribute
	 *
	 * @param {string} titleText title text
	 *
	 * @return {string} page name
	 */
	function getPageFromTitleAttribute( titleText ) {
		// Access the map directly, since we're processing it unusually.
		var redLinkFormat = mw.messages.get( 'red-link-title' ),
			redLinkRegexText,
			redLinkRegex,
			redLinkMatch;

		redLinkRegexText = $.escapeRE( redLinkFormat );
		// Replace escaped $1 with capturing group for one or more characters
		redLinkRegexText = redLinkRegexText.replace( '\\$1', '(.+)' );
		redLinkRegex = new RegExp( '^' + redLinkRegexText + '$' );

		redLinkMatch = titleText.match( redLinkRegex );
		if ( redLinkMatch !== null ) {
			return redLinkMatch[1];
		} else {
			return titleText;
		}
	}

	/**
	 * Runs on every page, checks to see if this page is in the user's task list,
	 * and if so logs certain user actions.
	 * @return {void}
	 */
	function checkProgress() {
		var action, fullPageTitle, task,
			schema, event, isEditable,
			loggedActions = {
				view : 'page-impression',
				edit : 'page-edit-impression'
			};

		if ( cfg.wgPostEdit ) {
			action = 'page-save-success';
		} else {
			action = loggedActions[ cfg.wgAction ];
		}
		// We ignore history, submit, etc.
		if ( !action ) {
			return;
		}

		// The task title stored in the cookie may include a namespace in this format.
		fullPageTitle = new mw.Title( cfg.wgPageName ).getPrefixedText();

		task = getTasks()[ fullPageTitle ];
		if ( task ) {
			schema = getSchemaForTask( task );

			setCommonDefaults( schema );
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
			mw.eventLog.logEvent( schema, event );
		}
	}

	// Execution logic

	if ( isGettingStarted() ) {

		$returnTo = $( '#mw-returnto a, #back-to-referrer' );
		isNew = !!cfg.wgIsWelcomeCreation;
		setCommonDefaults( 'GettingStarted' );

		// Log isNew while looking at GettingStarted, but not while
		// interacting with a task.
		mw.eventLog.setDefaults( 'GettingStarted', {
			isNew : isNew
		} );

		mw.eventLog.logEvent( 'GettingStarted', {
			action : 'gettingstarted-impression'
		} );

		// If the user clicks on a task, log it and start a funnel.
		$( '#onboarding-tasks a' ).on( 'click', function ( e ) {
			var $el = $( this ),
				articleTitle = $el.attr( 'title' ),
				article,
				$taskEl,
				taskName,
				fullTask;

			$taskEl = $el.closest( '.onboarding-task' );
			taskName = $taskEl.data( 'taskName' );
			fullTask = 'gettingstarted-' + taskName;
			article = getPageFromTitleAttribute( articleTitle );

			setTask( article, fullTask );

			logUnlessTimeout( 'GettingStarted', {
				action : 'gettingstarted-click',
				funnel : fullTask,
				targetTitle : article
			}, 500 ).always( function () {
				location.href = $el.attr( 'href' );
			} );

			e.preventDefault();
		} );


		// If the user clicks the returnTo link, log it and maybe start a funnel.
		returnToTitle = $returnTo.attr( 'title' );

		$returnTo.on( 'click', function ( e ) {
			var article = getPageFromTitleAttribute( returnToTitle ),
				task = 'returnto';
			if ( isAppropriateTask( article ) ) {
				setTask( article, task );
			}

			logUnlessTimeout( 'GettingStarted', {
				action      : 'gettingstarted-click',
				funnel      : task,
				targetTitle : article
			}, 500 ).always( function () {
				location.href = $returnTo.attr( 'href' );
			} );

			e.preventDefault();
		} );

	} else {
		checkProgress();
	}

	mw.openTask = mw.openTask || {};
	mw.openTask.setTask = setTask;
	mw.openTask.checkProgress = checkProgress;
	mw.openTask.getTasks = getTasks;
	mw.openTask.isGettingStarted = isGettingStarted;
	mw.openTask.getSchemaForTask = getSchemaForTask;

}( window, document, mediaWiki, jQuery ) );
