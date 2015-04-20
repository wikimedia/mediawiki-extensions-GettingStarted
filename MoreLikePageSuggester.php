<?php

namespace GettingStarted;

use Title;

class MoreLikePageSuggester implements PageSuggester {
	/** @var WebRequest */
	protected $request;

	/** @var Title */
	protected $baseTitle;

	/**
	 * Constructs a MoreLikePageSuggester with the given
	 * request and base title
	 *
	 * @param WebRequest $request Original web request
	 * @param Title $baseTitle Title to base suggestions on
	 */
	public function __construct( \WebRequest $request, Title $baseTitle ) {
		$this->request = $request;
		$this->baseTitle = $baseTitle;
	}

	public function getArticles( $count, $offset ) {
		global $wgSearchTypeAlternatives;

		$query = 'morelike:' . $this->baseTitle->getPrefixedDBkey();
		$params = array(
			'action' => 'query',
			'list' => 'search',
			'srnamespace' => NS_MAIN,
			'srlimit' => $count,
			'sroffset' => $offset,
			'srsearch' => $query,
		);

		if ( $wgSearchTypeAlternatives !== null &&
			count( $wgSearchTypeAlternatives ) > 0 ) {

			$params['srbackend'] = 'CirrusSearch';
		}

		$searchApiCall = new \ApiMain(
			new \DerivativeRequest(
				$this->request,
				$params,
				false // Not posted
			),
			false // Don't enable write
		);
		$searchApiCall->execute();

		if ( defined( 'ApiResult::META_CONTENT' ) ) {
			$searchResults = (array)$searchApiCall->getResult()->getResultData( array( 'query', 'search' ), array( 'Strip' => 'base' ) );
		} else {
			$apiResult = $searchApiCall->getResultData();
			if ( isset( $apiResult['query']['search'] ) && is_array( $apiResult['query']['search'] ) ) {
				$searchResults = $apiResult['query']['search'];
			} else {
				$searchResults = array();
			}
		}
		$titles = array();
		foreach ( $searchResults as $searchResult ) {
			$titles[] = Title::newFromText( $searchResult['title'] );
		}

		return $titles;
	}

	public function isRandomized() {
		return false;
	}
}
