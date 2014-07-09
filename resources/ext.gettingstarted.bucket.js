( function ( mw ) {

	'use strict';

	mw.gettingStarted = mw.gettingStarted || {};

	/**
	 * The buckets for the second iteraction of the Anonymous Editor Acquisition
	 * experiment.
	 *
	 * See https://www.mediawiki.org/wiki/Anonymous_editor_acquisition/Signup_invites_v2
	 *
	 * @enum
	 */
	mw.gettingStarted.Bucket = {

		/**
		 * The control bucket.
		 */
		CONTROL: 'control',

		/**
		 * The pre-edit v1 bucket.
		 *
		 * See https://www.mediawiki.org/wiki/Anonymous_editor_acquisition/Signup_invites_v2#Version_one
		 */
		PRE_EDIT_V1: 'pre-edit v1',

		/**
		 * The pre-edit v2 bucket.
		 *
		 * See https://www.mediawiki.org/wiki/Anonymous_editor_acquisition/Signup_invites_v2#Version_two
		 */
		PRE_EDIT_V2: 'pre-edit v2'
	};

} ( mediaWiki ) );
