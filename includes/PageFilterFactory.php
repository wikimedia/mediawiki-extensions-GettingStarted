<?php

namespace GettingStarted;

use MediaWiki\MediaWikiServices;
use Title;
use User;

class PageFilterFactory {
	/**
	 * Gets the PageFilter object for a given type
	 *
	 * @param string $taskName Task name
	 * @param User $user User getting suggestions
	 * @param Title|null $excludedTitle Title to exclude (optional)
	 * @return CategoryPageFilter|BasePageFilter
	 */
	public static function getPageFilter( $taskName, User $user, Title $excludedTitle = null ) {
		global $wgGettingStartedCategoriesForTaskTypes;
		$permManager = MediaWikiServices::getInstance()->getPermissionManager();

		if ( isset( $wgGettingStartedCategoriesForTaskTypes[$taskName] ) ) {
			return new CategoryPageFilter( $user, $permManager, $excludedTitle );
		} else {
			return new BasePageFilter( $user, $permManager, $excludedTitle );
		}
	}
}
