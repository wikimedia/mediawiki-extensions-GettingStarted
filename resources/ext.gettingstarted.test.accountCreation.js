( function ( $, mw ) {
	'use strict';

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

	$( function () {
		var title = mw.msg( 'gettingstarted-welcomesiteuser', mw.config.get( 'wgSiteName' ), mw.config.get( 'wgUserName' ) ),
			$returnTo = $( '#mw-returnto' ),
			$returnToA = $returnTo.find( 'a' ),
			$gettingStartedContainer = $( '.mw-gettingstarted-container' ),
			$notices,
			state,
			url,
			logging = mw.gettingStarted.logging;

		document.title = title;
		$( '#firstHeading span' ).text( title );

		$returnTo.detach();
		$returnToA.detach().text( mw.msg( 'gettingstarted-return' ) );

		// If the user clicks the returnTo link, log it and maybe start a funnel.x
		$returnToA.on( 'click', function ( e ) {
			var article = getPageFromTitleAttribute( $returnToA.attr( 'title' ) ),
				task = 'returnto';

			if ( isAppropriateTaskArticle( article ) ) {
				logging.setTask( article, task );
			}

			logging.logUnlessTimeout( {
				action      : 'gettingstarted-click',
				funnel      : task
			}, 500 ).always( function () {
				location.href = $returnToA.attr( 'href' );
			} );

			e.preventDefault();
		} );

		// Want to remove all siblings of the link, including text, which siblings does
		// not return.
		$returnTo.empty().append( $returnToA );
		$gettingStartedContainer.append( $returnTo );

		// Mainly intended for email confirmation message, but others are possible.
		// There is not a more specific selector in core for this.
		$notices = $( '#mw-content-text > p' ).addClass( 'mw-gettingstarted-notice' );
		$gettingStartedContainer.append( $notices );

		if ( history.replaceState ) {
			state = {}; // Currently unused
			url = mw.util.wikiGetlink( 'Special:GettingStarted' );
			history.replaceState( state, title, url );
		}
	} );
} )( jQuery, mediaWiki );
