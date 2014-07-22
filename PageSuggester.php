<?php

namespace GettingStarted;

interface PageSuggester {
	/**
	 * Gets suggested articles
	 *
	 * @param int $count Number of articles to attempt to get;
	 *  May get less than this.
	 * @param int $offset Offset in results to start from (optional, defaults to
	 *  zero (no offset).  Only useful for non-randomized suggesters
	 *
	 * @return array Array of up to $count suggested articles, as Title objects
	 */
	public function getArticles( $count, $offset );

	/**
	 * Returns whether this PageSuggester is randomized.
	 *
	 * If it is randomized, retries will yield different results (and thus retrying can
	 * be useful if PageFilter rejects some the first time), and non-zero offsets for
	 * getArticles do not make sense.
	 */
	public function isRandomized();
}
