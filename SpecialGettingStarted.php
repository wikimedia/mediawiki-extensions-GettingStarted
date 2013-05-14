<?php
class SpecialGettingStarted extends SpecialPage {

	const MAX_ARTICLE_LENGTH = 10000;
	const MAX_ATTEMPTS = 20;  // Somewhat arbitrary for now.

	public function __construct() {
		parent::__construct( 'GettingStarted' );
	}

	/**
	 * Determines if title is an allowed task, based on user and configuration.
	 *
	 * @param Title $title title of article
	 * @param User $user user to check
	 * @param string|null $excludedPageName page name to be excluded, in in getPrefixedDBkey() format,
	 *  or null for no exclusion
	 */
	protected function isAllowedArticle( Title $title, User $user, $excludedPageName ) {
		$length = $title->getLength();
		$passesExclude = $excludedPageName === null ||
			$title->getPrefixedDBkey() !== $excludedPageName;
		return $length > 0
			&& $length <= self::MAX_ARTICLE_LENGTH
			&& $passesExclude
			&& $title->userCan( 'edit', $user )
			&& !$this->inExcludedCategories( $title );
	}

	/**
	 * Dispatch the user to a task.
	 * Construct a task URL and issue an HTTP 302 redirect.
	 * @param Title $title Title of task target page
	 */
	public function sendToTask( Title $title, $taskName ) {
		$out = $this->getOutput();
		$request = $out->getRequest();
		$source = $request->getVal( 'source' );
		$query = array();
		if ( $source !== null ) {
			$query['source'] = $source;
		}
		$url = $title->getLocalUrl( $query );
		GettingStartedHooks::setPageTask( $request, $title, "gettingstarted-$taskName" );
		$out->redirect( $url, '302' );
		return true;
	}

	/**
	 * Chooses a random article from the set of articles that are
	 * task-appropriate and returns its Title object. Returns false if the task
	 * name is invalid or if we failed to draw an article that meets the
	 * constraints.
	 *
	 * @param string $taskName task name
	 * @return bool whether they were redirected
	 */
	public function chooseTitleForTask( $taskName ) {
		global $wgGettingStartedTasks;

		if ( !isset( $wgGettingStartedTasks[$taskName] ) ) {
			return false;
		}
		$task = $wgGettingStartedTasks[$taskName];
		$taskCategory = Category::newFromName( $task['category'] );
		$roulette = new CategoryRoulette( $taskCategory );
		$user = $this->getUser();

		$excludedPageName = $this->getRequest()->getVal( 'exclude' );

		for ( $i = 0; $i < self::MAX_ATTEMPTS; $i++ ) {
			$titles = $roulette->getRandomArticles( 1 );
			if ( count( $titles ) === 1
				&& $this->isAllowedArticle( $titles[0], $user, $excludedPageName )
			) {
				return $titles[0];
			}
		}

		return false;
	}

	public function execute( $parameter ) {
		global $wgSitename;

		$this->setHeaders();

		$parameterInfo = explode( '/', $parameter );

		// If parameters match treat as task redirect.
		// Otherwise, ignore parameters.
		if ( count( $parameterInfo === 2 ) && $parameterInfo[0] === 'task' ) {
			$task = $parameterInfo[1];
			$title = self::chooseTitleForTask( $task );
			if ( $title === false ) {
				$fullTaskName = "gettingstarted-$task";
				efLogServerSideEvent( 'GettingStartedNavbarNoArticle', 5483117, array(
					'version' => 1,
					'funnel' => $fullTaskName,
				) );
			} else {
				return self::sendToTask( $title, $task );
			}
		}

		$output = $this->getOutput();

		$user = $this->getUser();
		if( !$user->isAnon() ) {
			$output->setPageTitle( $this->msg( 'gettingstarted-welcome-back-site-user', $wgSitename, $user->getName() ) );
		} else {
			$output->setPageTitle( $this->msg( 'gettingstarted-welcomesiteuseranon', $wgSitename ) );
		}

		// Styles are added separately so they load without needing JS
		$output->addModuleStyles( 'ext.gettingstarted.styles' );

		$output->addModules( array(
			'ext.gettingstarted',
			'ext.gettingstarted.specialPage',
		) );

		$output->addHTML( $this->getHtmlResult() );
	}

	public function inExcludedCategories( Title $title ) {
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

	public function getHtmlResult() {
		global $wgExtensionAssetsPath, $wgGettingStartedTasks;

		$result = '';
		$header = $this->msg( 'gettingstarted-task-header' )->parseAsBlock();

		$result .= <<< EOF
			<div class="mw-gettingstarted-container">
				<div class="mw-gettingstarted-header">
					$header
				</div>
				<div class="mw-gettingstarted-tasks">
EOF;
		$tasks = array();
		foreach ( $wgGettingStartedTasks as $taskName => $task ) {
			$task['taskName'] = $taskName;
			$tasks[] = $task;
		}
		shuffle( $tasks );

		foreach ( $tasks as $task ) {
			$mainDescription = $this->msg( $task['mainDescription'] )->text();
			$taskHtml = Html::rawElement( 'div', array(
				'class' => 'mw-gettingstarted-task-icon',
			),
				Html::element( 'img', array(
					'alt' => $mainDescription,
					'src' => wfFindFile( $task['image'] )->getURL(),
				) )
			) .
			Html::rawElement( 'div', array(
				'class' => 'mw-gettingstarted-task-text',
			),
				Html::element( 'h4', array(), $mainDescription ) .
				Html::element( 'p', array(), $this->msg( $task['secondaryDescription'] )->text() )
			);
			$result .= Linker::link( SpecialPage::getTitleFor( 'GettingStarted', 'task/' . $task['taskName'] ),
					$taskHtml,
					array(
						'title' => $mainDescription,
						'data-task-name' => $task['taskName']
					),
					array(
						'source' => 'gettingstarted',
					)
			);
		}

		$result .= <<< 'EOF'
				</div>
			</div>
EOF;
		return $result;
	}
}
