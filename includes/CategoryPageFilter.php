<?php

namespace GettingStarted;

use Title;

/**
 * Approve or reject a given page for suitability with GettingStarted.
 * For use in conjunction with CategoryPageSuggester
 */
class CategoryPageFilter extends BasePageFilter {
	const MAX_PAGE_LENGTH = 10000;

	public function isAllowedPage( Title $title ) {
		if ( !parent::isAllowedPage( $title ) ) {
			return false;
		}

		return $title->getLength() <= self::MAX_PAGE_LENGTH;
	}
}
