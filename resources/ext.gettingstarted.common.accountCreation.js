( function ( mw, $ ) {
	var logging = mw.gettingStarted.logging;

	/**
	 * Some pages don't make sense as the start of an accept-edit-savesuccess
	 * funnel, because they aren't editable (Special namespace, queries,
	 * etc.).
	 *
	 * @private
	 *
	 * @param {string} title article title
	 *
	 * @return boolean
	 */
	function isAppropriateTaskArticle( title ) {
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

	// For test.accountCreation, this will get set to true in ext.gettingStarted.js as well, but
	// that's okay.
	logging.setDefaults( {
		isNew: true
	} );

	logging.logEvent( {
		action: 'welcomepage-impression'
	} );

	$( document ).ready( function () {
		var $returnToA = $( '#mw-returnto a' );

		// If the user clicks the returnTo link, log it and maybe start a funnel.
		$returnToA.on( 'click', function ( e ) {
			var article = getPageFromTitleAttribute( $returnToA.attr( 'title' ) ),
				task = 'returnto';

			if ( isAppropriateTaskArticle( article ) ) {
				logging.setTask( article, task );
			}

			logging.logUnlessTimeout( {
				action: 'welcomepage-click',
				funnel: task
			}, 500 ).always( function () {
				location.href = $returnToA.attr( 'href' );
			} );

			e.preventDefault();
		} );
	} );
} )( mediaWiki, jQuery );
