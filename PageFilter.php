<?php

namespace GettingStarted;

use Title, User;

/**
  Approve or reject a given page for suitability with GettingStarted.
*/
class PageFilter {
	const MAX_PAGE_LENGTH = 10000;

	/** @var User */
	protected $user;

	/** @var Title */
	protected $excludedTitle;

	/**
	 * Constructor.
	 *
	 * @param User $user user object, for permissions checks
	 * @param Title $excludedTitle optional title to exclude, to avoid consecutive duplicates
	 */
	public function __construct( User $user, Title $excludedTitle = null ) {
		$this->user = $user;
		$this->excludedTitle = $excludedTitle;
	}

	protected function inExcludedCategories( Title $title ) {
		global $wgGettingStartedExcludedCategories;

		$articleID = $title->getArticleID();

		$dbr = wfGetDB( DB_SLAVE );
		foreach( $wgGettingStartedExcludedCategories as $cat ) {
			$res = $dbr->selectRow( 'categorylinks', '1', array(
				'cl_from' => $articleID,
				'cl_to' => $cat,
			), __METHOD__ );

			if ( $res !== false ) {
				return true;
			}
		}

		return false;
	}

	public function isAllowedPage( Title $title ) {
		$length = $title->getLength();
		$notExcludedTitle = $this->excludedTitle === null ||
			!$title->equals( $this->excludedTitle );
		return $length > 0
			&& $length <= self::MAX_PAGE_LENGTH
			// RedisCategorySync ignores category changes outside NS_MAIN,
			// but the API can still access pages outside.
			&& $title->inNamespace( NS_MAIN )
			&& $notExcludedTitle
			&& $title->userCan( 'edit', $this->user )
			&& !$this->inExcludedCategories( $title );


	}
}

