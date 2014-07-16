<?php

namespace GettingStarted;

class PageFilterFactory {
	/**
	 * Gets the PageFilter object for a given type
	 *
	 * @param string $taskName Task name
	 * @param User $user User getting suggestions
	 * @param Title $excludedTitle Title to exclude (optional)
	 */
	public static function getPageFilter( $taskName, \User $user, \Title $excludedTitle = null ) {
		global $wgGettingStartedCategoriesForTaskTypes;

		if ( isset( $wgGettingStartedCategoriesForTaskTypes[$taskName] ) ) {
			return new CategoryPageFilter( $user, $excludedTitle );
		} else {
			return new BasePageFilter( $user, $excludedTitle );
		}
	}
}
