( function ( mw, $ ) {
	// Client-side wrappers for the GettingStarted web API

	mw.gettingStarted = mw.gettingStarted || {};

	// Subclass the MW API
	mw.gettingStarted.Api = function () {
		mw.Api.call( this );
	};

	mw.gettingStarted.Api.prototype = $.extend( {
		/**
		 * Requests one or more pages for a given task type (e.g. 'copyedit') from
		 *   the server.
		 *
		 * @param {Object} options API parameters
		 * @param {string} options.taskName name of task type, such as 'copyedit'
		 * @param {string} [options.excludedTitle] title to exclude, as string
		 * @param {Number} options.count number of titles to request.  It may return fewer
		 *   than count, but never more.
		 * @return {jQuery.Promise} promise for API response
		 * @return {Array} return.done On success, promise's done callback is called with
		 *   an array of title strings
		 * @return {string} return.fail On failure, promise's fail callback is called with
		 *   the error code
		 *
		 */
		getPages: function ( options ) {
			var params, dfd = $.Deferred();

			if ( mw.config.get( 'wgGettingStartedConfig' ).hasCategories ) {
				params = {
					action: 'query',
					list: 'gettingstartedgetpages',
					gsgptaskname: options.taskName,
					gsgpcount: options.count
				};

				if ( options.excludedTitle ) {
					params.gsgpexcludedtitle = options.excludedTitle;
				}

				this.get( params ).done( function ( resp ) {
					var root = resp.gettingstartedgetpages;
					if ( root && root.titles ) {
						dfd.resolve( root.titles );
					} else {
						dfd.reject( 'gettingstarted-unexpected-api-response' );
					}
				} ).fail( function ( errCode ) {
					dfd.reject( errCode );
				} );
			} else {
				// Skip the network request if we know up front there are no categories.
				dfd.reject( 'gettingstarted-client-no-categories' );
			}

			return dfd.promise();
		},

		/**
		 * Convenience method to request a single page for a given task type (e.g. 'copyedit')
		 *
		 * @param {Object} options API parameters
		 * @param {string} options.taskName name of task type, such as 'copyedit'
		 * @param {string} [options.excludedTitle] title to exclude, as string
		 * @return {jQuery.Promise} promise for API response
		 * @return {string} return.done On success, promise's done callback is called with a
		 *   single title string
		 * @return {string} return.fail On failure, promise's fail callback is called with
		 *   the error code
		 */
		getSinglePage: function ( options ) {
			var dfd = $.Deferred();

			options = $.extend( {}, options, { count: 1 } );
			this.getPages( options ).done( function ( titles ) {
				if ( titles.length === 1 ) {
					dfd.resolve( titles[0] );
				} else {
					dfd.reject( 'gettingstarted-no-titles-available' );
				}
			} ).fail( function ( errCode ) {
				mw.log.warn( 'Failed to request single page for task type "' + options.taskName + '"' );
				dfd.reject( errCode );
			} );

			return dfd.promise();
		}
	}, mw.Api.prototype );
	mw.gettingStarted.Api.prototype.constructor = mw.gettingStarted.Api;
}( mediaWiki, jQuery ) );
