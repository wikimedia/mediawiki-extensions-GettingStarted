( function ( mw, $ ) {

	'use strict';

	var user,
		// Cookie name can not have the word Token, to avoid serious Varnish caching problems.
		tokenCookieName = mw.config.get( 'wgCookiePrefix' ) + '-gettingStartedUserId';

	mw.gettingStarted = mw.gettingStarted || {};

	/**
	 * The GettingStarted user API.
	 *
	 * This is currently used as part of the [Signup CTA experiment][0], which is
	 * part of the [Anonymous editor acquisition][1] research project.
	 *
	 * [0]: https://meta.wikimedia.org/wiki/Research:Anonymous_editor_acquisition/Signup_CTA_experiment
	 * [1]: https://meta.wikimedia.org/wiki/Research:Anonymous_editor_acquisition
	 *
	 * @class mw.gettingStarted.user
	 * @singleton
	 */
	mw.gettingStarted.user = user = {

		/**
		 * Gets the user's token from the "-gettingStartedUserId"
		 * cookie. If the cookie isn't set, then a token is generated,
		 * stored in the cookie for 90 days, and then returned.
		 *
		 * See `mw.user.generateRandomSessionId`.
		 *
		 * @return {string}
		 */
		getToken: function () {
			var storedToken = $.cookie( tokenCookieName ),
				generatedToken;

			if ( storedToken ) {
				return storedToken;
			}

			generatedToken = mw.user.generateRandomSessionId();

			$.cookie( tokenCookieName, generatedToken, {
				expires: 90, // (days)
				path: '/'
			} );

			return generatedToken;
		},

		/**
		 * Gets the bucket that the user is in based on their token.
		 *
		 * Currently, the bucket corresponds to the variant of the
		 * Signup CTA experiement that the user will be shown: pre-edit,
		 * post-edit, or control.
		 *
		 * @return {string}
		 */
		getBucket: function () {
			var token = user.getToken(),
				lastCharacter = token.slice( -1 );

			if ( lastCharacter <= 'J' ) {
				return 'pre-edit';
			} else if ( lastCharacter > 'J' && lastCharacter <= 'd' ) {
				return 'post-edit';
			} else {
				return 'control';
			}
		}
	};

} ( mediaWiki, jQuery ) );
