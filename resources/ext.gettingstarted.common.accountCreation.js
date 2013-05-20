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
	 * Gets a page name from a jQuery-wrapped link, in prefixed text format.
	 *
	 * @param {jQuery} $link wrapped link
	 *
	 * @return {string} page name
	 */
	function getPageFromLink( $link ) {
		var titleText, href, titleFromQuery, titleObj;

		titleText = $link.attr( 'title' );
		href = $link.attr( 'href' );

		titleFromQuery = mw.util.getParamValue( 'title', href );
		// Red links will use first branch.
		if ( titleFromQuery !== null ) {
			titleObj = new mw.Title( titleFromQuery );
			return titleObj.getPrefixedText();
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
			var article = getPageFromLink( $returnToA ),
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
