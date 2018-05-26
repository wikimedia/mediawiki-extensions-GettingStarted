<?php

namespace GettingStarted;

use Title;
use WebRequest;

class PageSuggesterFactory {
	/**
	 * Gets the PageSuggester object for a given type
	 *
	 * @param string $taskName Name of task type, such as 'copyedit' or 'morelikethis'.
	 *  Factory will determine which backend this corresponds to, such as
	 *  CategoryPageSuggester or MoreLikeThisPageSuggester
	 * @param WebRequest $request Request to use (needed for DerivativeRequest in some
	 *  cases)
	 * @param Title|null $sourceTitle Title of page used as a base for suggestions;
	 *  Required only for MoreLikeThisSuggester, otherwise optional.
	 *
	 * @return PageSuggester|null PageSuggester object, or null if no valid suggester
	 *  is found
	 */
	public static function getPageSuggester(
		$taskName, WebRequest $request, Title $sourceTitle = null
	) {
		global $wgGettingStartedCategoriesForTaskTypes;

		if ( isset( $wgGettingStartedCategoriesForTaskTypes[$taskName] ) ) {
			$sanitizedTitle = \Title::newFromText(
				$wgGettingStartedCategoriesForTaskTypes[$taskName]
			);

			if ( !( $sanitizedTitle && $sanitizedTitle->inNamespace( NS_CATEGORY ) ) ) {
				return null;
			}
			$redis = RedisCategorySync::getSlave();
			$category = \Category::newFromTitle( $sanitizedTitle );

			return new CategoryPageSuggester( $redis, $category );
		} elseif ( class_exists( 'CirrusSearch' ) &&
			$taskName === 'morelike' &&
			$sourceTitle !== null ) {
			return new MoreLikePageSuggester( $request, $sourceTitle );
		} else {
			return null;
		}
	}
}
