( function ( mw, $ ) {

	/**
	 * Responsible for converting a response from the Suggestions API
	 * to zero or more suggestions.
	 *
	 * See `mw.gettingStarted.Api.getSuggestions`.
	 *
	 * @class mw.gettingStarted.lightbulb.Parser
	 */
	function Parser () {}

	/**
	 * Parses the response.
	 *
	 * @param {Object} response
	 * @return {Object[]} Zero or more suggestions
	 */
	Parser.prototype.parse = function ( response ) {
		return $.map( response.pageids, function( pageID ) {
			var page = response.pages[pageID];

			// NOTE (phuedx, 2014/07/30): Should title be an instance of
			// mw.Title? Should lastEdited be an instance of Date?
			return {
				title: page.title,
				thumbnail: page.thumbnail ? page.thumbnail.source : null,
				lastEdited: page.revisions[0].timestamp
			};
		} );
	};

	mw.gettingStarted = mw.gettingStarted || {};
	mw.gettingStarted.lightbulb = mw.gettingStarted.lightbulb || {};

	mw.gettingStarted.lightbulb.Parser = Parser;

} ( mediaWiki, jQuery ) );
