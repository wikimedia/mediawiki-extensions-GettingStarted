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
		'wgAction', 'wgTitle', 'wgCanonicalSpecialPageName',
		'wgArticleId', 'wgCurRevisionId',
		'wgNamespaceNumber', 'wgFormattedNamespaces',
		// Wiki server variables we supply:
		'wgIsWelcomeCreation', 'wgUserId',
		// Wiki server variable supplied by Extension:PostEdit:
		'wgPostEdit'
	] );

	if ( mw.user.isAnon() ) {
		// Do no logging for anonymous users
		return;
	}

	// Set some fields common to both clicks and fixing articles.
	function setCommonDefaults( schema ) {
		var defaults = {
			experimentId : 'ob3-split-retest-split',
			userId : cfg.wgUserId
		};

		mw.eventLog.setDefaults( schema, defaults );
	}


	// FIXME Verbatim copypasta from mediawiki.user.js, which doesn't export it.
	function generateId() {
		var i, r,
			id = '',
			seed = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		for ( i = 0; i < 32; i++ ) {
			r = Math.floor( Math.random() * seed.length );
			id += seed.substring( r, r + 1 );
		}
		return id;
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
		// The tasks for GettingStarted are fixed and correspond to its two funnels.
		var schema = ( task === 'gettingstarted' || task === 'returnto' ) ?
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
		var specialNamespace = cfg.wgFormattedNamespaces[ -1 ];

		if ( typeof title !== 'string' || title === '' ) {
			return false;
		}
		if ( title.indexOf( '?' ) !== -1 ) {
			return false;
		}

		// Check if in Special namespace (using the mw.Title module just for
		// this seems like overkill).
		if ( title.indexOf (specialNamespace + ':' ) === 0 ) {
			return false;
		}
		return true;
	}


	/**
	 * Runs on every page, checks to see if this page is in the user's task list,
	 * and if so logs certain user actions.
	 * @return {void}
	 */
	function checkProgress() {
		var action, pageTitle, pageNamespace, task,
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

		// The task title stored in the cookie may include a namespace.
		pageTitle = cfg.wgTitle;
		pageNamespace = cfg.wgFormattedNamespaces[ cfg.wgNamespaceNumber ];
		if ( pageNamespace ) {
			pageTitle = pageNamespace + ':' + pageTitle;
		}

		task = getTasks()[ pageTitle ];
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
				pageNs     : cfg.wgNamespaceNumber,
				revId      : cfg.wgCurRevisionId,
				isEditable : isEditable
			};
			mw.eventLog.logEvent( schema, event );
		}
	}

	// Execution logic

	if ( isGettingStarted() ) {

		var $returnTo = $( '#mw-returnto a, #back-to-referrer' ),
			returnToTitle,
			article,
			isNew,
			bucketId;

		isNew = !!cfg.wgIsWelcomeCreation;

		if ( isNew ) {
			// Split test.  Even gets GuidedTour treatment
			bucketId = ( cfg.wgUserId % 2 === 0 ) ? 'ob3b' : 'ob3a';
		}

		setCommonDefaults( 'GettingStarted' );
		// Log isNew while looking at GettingStarted, but not while
		// interacting with a task.
		mw.eventLog.setDefaults( 'GettingStarted', {
			isNew : isNew
		} );

		mw.eventLog.logEvent( 'GettingStarted', {
			action : 'gettingstarted-impression',
			bucketId: bucketId
		} );

		// If the user clicks on a task, log it and start a funnel.
		$( '#onboarding-tasks a' ).stall( 'click', function () {
			var $el = $( this );
			article = $el.attr( 'title' );
			if ( !article ) {
				return false;
			}
			mw.eventLog.logEvent( 'GettingStarted', {
				action      : 'gettingstarted-click',
				funnel      : 'gettingstarted',
				targetTitle : article
			} );
			setTask( article, 'gettingstarted' );
		} );


		// If the user clicks the returnTo link, log it and maybe start a funnel.
		returnToTitle = $returnTo.attr( 'title' );
		if ( typeof returnToTitle !== 'string' ) {
			returnToTitle = '';
		}

		$returnTo.stall( 'click', function () {
			// XXX i18n, derive this from red-link-title?
			// I haven't seen other junk in the title of the returnTo link, such as
			// query string.
			article = returnToTitle.replace( ' (page does not exist)', '');
			mw.eventLog.logEvent( 'GettingStarted', {
				action      : 'gettingstarted-click',
				funnel      : 'returnto',
				targetTitle : article
			} );
			if ( isAppropriateTask( article ) ) {
				setTask( article, 'returnto' );
			}
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
