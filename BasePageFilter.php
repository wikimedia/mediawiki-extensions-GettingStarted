<?php

namespace GettingStarted;

use Title;
use User;

/**
 * Approve or reject a given page for suitability with GettingStarted.
 * Base filter shared for all task types
 */
class BasePageFilter {
	/** @var User */
	protected $user;

	/** @var Title */
	protected $excludedTitle;

	/** @var array: array of excluded categories */
	protected static $excludedCategories;

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
		$articleID = $title->getArticleID();
		$excludedCategories = self::getExcludedCategories();
		$dbr = wfGetDB( DB_SLAVE );
		foreach ( $excludedCategories as $cat ) {
			$res = $dbr->selectRow( 'categorylinks', '1', [
				'cl_from' => $articleID,
				'cl_to' => $cat,
			], __METHOD__ );

			if ( $res !== false ) {
				return true;
			}
		}

		return false;
	}

	protected static function getExcludedCategories() {
		global $wgGettingStartedExcludedCategories;

		if ( self::$excludedCategories === null ) {
			// TODO (phuedx 2014-02-010) Create a collection class
			// for categories, which could be generalised in the
			// future, i.e. CategoryCollection.
			self::$excludedCategories = [];
			foreach ( $wgGettingStartedExcludedCategories as $rawCategory ) {
				// Canonicalize the category name.
				$title = Title::newFromText( $rawCategory );
				if ( !$title || !$title->inNamespace( NS_CATEGORY ) ) {
					continue;
				}
				$category = $title->getDBkey();
				self::$excludedCategories[] = $category;
			}
		}

		return self::$excludedCategories;
	}

	public function isAllowedPage( Title $title ) {
		$length = $title->getLength();
		$notExcludedTitle = $this->excludedTitle === null ||
			!$title->equals( $this->excludedTitle );
		return $length > 0
			// RedisCategorySync ignores category changes outside NS_MAIN,
			// but the API can still access pages outside.
			&& $title->inNamespace( NS_MAIN )
			&& $notExcludedTitle
			&& $title->userCan( 'edit', $this->user, 'full' )
			&& !(
				$this->user->isNewbie()
				&& $this->inExcludedCategories( $title )
			);
	}
}
