<?php
class SpecialGettingStarted extends SpecialPage {

	const MAX_ARTICLE_LENGTH = 10000;

	// Arbitrary
	const MAX_ATTEMPTS = 20;

	const NO_ARTICLE_SCHEMA_NAME = 'GettingStartedNavbarNoArticle';
	const NO_ARTICLE_SCHEMA_REV_ID = 5483117;
	const NO_ARTICLE_VERSION = 1;

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
	 * Check if the task is valid.  If so, send them to a random article for the task.
	 *
	 * @param string $taskName task name
	 * @return bool whether they were redirected
	 */
	public function sendToTask( $taskName ) {
		global $wgGettingStartedTasks;

		$fullTaskName = "gettingstarted-$taskName";
		$user = $this->getUser();

		$excludedPageName = $this->getRequest()->getVal( 'exclude' );

		if ( isset( $wgGettingStartedTasks[$taskName] ) ) {
			$task = $wgGettingStartedTasks[$taskName];
			$roulette = new CategoryRoulette( Category::newFromName( $task['category']  ) );
			$attempts = 0;
			do {
				$titles = $roulette->getRandomArticles( 1 );
				$attempts++;
				if ( count( $titles ) === 1 && $this->isAllowedArticle( $titles[0], $user, $excludedPageName ) ) {
					$title = $titles[0];
					$out = $this->getOutput();
					$request = $out->getRequest();
					$source = $request->getVal( 'source' );
					$query = array();
					if ( $source !== null ) {
						$query['source'] = $source;
					}
					$url = $title->getLocalUrl( $query );
					GettingStartedHooks::setPageTask( $request, $title, $fullTaskName );
					$out->redirect( $url, '302' );
					return true;
				}
			} while ( $attempts < self::MAX_ATTEMPTS );

			efLogServerSideEvent( self::NO_ARTICLE_SCHEMA_NAME, self::NO_ARTICLE_SCHEMA_REV_ID, array(
				'version' => self::NO_ARTICLE_VERSION,
				'funnel' => $fullTaskName,
			) );
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
			if ( self::sendToTask( $parameterInfo[1] ) ) {
				return;
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
