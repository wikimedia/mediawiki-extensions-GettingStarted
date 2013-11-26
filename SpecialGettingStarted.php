<?php

namespace GettingStarted;

use Html, Linker, SpecialPage, Title;

class SpecialGettingStarted extends SpecialPage {
	public function __construct() {
		parent::__construct( 'GettingStarted' );
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
		Hooks::setPageTask( $request, $title, "gettingstarted-$taskName" );
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
	 * @return Title|false page to send user to, or false on failure
	 */
	public function chooseTitleForTask( $taskName ) {
		$request = new \DerivativeRequest(
			$this->getRequest(),
			array(
				'action' => 'gettingstartedgetpages',
				'taskname' => $taskName,
				'excludedTitle' => $this->getRequest()->getVal( 'exclude' ),
				'count' => 1,
			),
			false // GET request
		);

		$api = new \ApiMain(
			$request,
			false // no writes
		);

		try {
			$api->execute();
			$result = $api->getResult()->getData();
			if ( isset( $result['gettingstartedgetpages']['titles'][0] ) ) {
				return Title::newFromText( $result['gettingstartedgetpages']['titles'][0] );
			} else {
				return false;
			}
		} catch ( \UsageException $ex ) {
			return false;
		}
	}

	/**
	 * Displays Special:GettingStarted page, unless the request is for
	 * Special:GettingStarted/task/kind in which case this sends the user
	 * to that task.
	 * If the query string contains postCreateAccount=true it indicates that
	 * CentralAuth redirected to it after account creation.
	 * If the query string parameter contains a returnto=somepage, that
	 * represents the page the user was on before creating an account, and
	 * Special:GettingStarted should style it and track user clicks on it.
	 */
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

		$user = $this->getUser();
		$request = $this->getRequest();
		$isPostCreate = $request->getVal( 'postCreateAccount' ) === 'true' ? true : false;

		$output = $this->getOutput();

		$output->addHTML( $this->getHtmlResult() );

		if ( $isPostCreate ) {
			// Do what Hooks::onBeforeWelcomeCreation and
			// SpecialUserlogin.php successfulCreation() would have done.

			$output->addModules( array(
				'ext.gettingstarted.showSeparatePage.accountCreation',
			) );
			// Styles are added separately so they load without needing JS
			$output->addModuleStyles( array(
				'mediawiki.ui',
				'ext.gettingstarted.styles',
			) );

			$output->setPageTitle( $this->msg( 'gettingstarted-welcomesiteuser', $wgSitename, $user->getName() ) );

			// TODO (spage, 2013-07-17) does the CentralAuthPostLoginRedirect
			// hook pass us a blank returnTo, or empty returnTo, or 'Main_Page'
			// when the create account form didn't receive a returnto?
			$returnTo = Title::newFromText( $request->getVal( 'returnto' ) );
			$returnToQuery = wfCgiToArray( $request->getVal( 'returntoquery' ) );
			if ( $returnTo !== null ) {
				$returnToLink = Linker::link(
					$returnTo,
					$this->msg( 'gettingstarted-return' )->text(),
					array(),
					$returnToQuery
				);
				$output->addHTML( $returnToLink );
			}

		} else {

			if( !$user->isAnon() ) {
				$output->setPageTitle( $this->msg( 'gettingstarted-welcome-back-site-user', $wgSitename, $user->getName() ) );
			} else {
				$output->setPageTitle( $this->msg( 'gettingstarted-welcomesiteuseranon', $wgSitename ) );
			}
		}

		// Styles are added separately so they load without needing JS
		$output->addModuleStyles( 'ext.gettingstarted.styles' );

		$output->addModules( array(
			'ext.gettingstarted',
			'ext.gettingstarted.specialPage',
		) );
	}

	/**
	 * Returns the main container HTML for the welcome page.
	 *
	 * TODO (spage, 2013-07-16) if the BeforeWelcomeCreation hook no
	 * longer has to incorporate this HTML into the form results page,
	 * then we can remove this and just output the HTML in execute().
	 * @return string
	 */
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
			$imgFile = wfFindFile( $task['image'] );
			$taskHtml = Html::rawElement( 'div', array(
				'class' => 'mw-gettingstarted-task-icon',
			),
				$imgFile ?
					Html::element( 'img', array(
						'alt' => $mainDescription,
						// wfFindFile() can fail if there are network problems.
						// TODO (spage, 2013-08-04) Does Extension:GettingStarated
						// document that it depends on these File pages locally or?
						// instant commons for its icons?
						'src' => $imgFile->getURL(),
					) )
					: ''
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
						'source' => 'gettingstarted-specialpage-click',
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
