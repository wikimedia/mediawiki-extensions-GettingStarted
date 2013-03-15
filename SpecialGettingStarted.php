<?php
class SpecialGettingStarted extends SpecialPage {

	const ARTICLE_COUNT = 3;
	const MAX_ARTICLE_LENGTH = 10000;

	public function __construct() {
		parent::__construct( 'GettingStarted' );
	}

	public function execute( $par ) {
		global $wgSitename;

		$this->setHeaders();
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
				'ext.guidedTour.tour.gettingstartedpage',
				'ext.gettingstarted'
		) );

		$output->addHTML( $this->getHtmlResult() );
	}

	public function getHtmlResult() {
		global $wgExtensionAssetsPath, $wgGettingStartedTasks;

		$result = '';
		$headerText = $this->msg( 'gettingstarted-task-header' )->escaped();

		$result .= <<< EOF
			<div class="onboarding-container clearfix">
				<h3 class="onboarding-header">
					$headerText
				</h3>
				<ul class="clearfix" id="onboarding-tasks">
EOF;
		$tasks = $wgGettingStartedTasks;
		for ( $i = 0; $i < count( $tasks ); $i++ ) {
			$stepId = $i + 1;
			$tasks[$i]['guiderId'] = "gt-gettingstartedpage-$stepId";
		}
		shuffle( $tasks );
		$questionIcon = Html::element( 'img', array(
				'src' => "$wgExtensionAssetsPath/GettingStarted/resources/images/question-icon-darker.png",
				'alt' => $this->msg( 'help' )->text()
			)
		);
		foreach ( $tasks as $task ) {
			$roulette = new CategoryRoulette( Category::newFromName( $task['category']  ) );

			// Get ARTICLE_COUNT * 2 articles and pick the first ARTICLE_COUNT
			// articles that meet the requirements (not too big and is editable
			// by the current user). If fewer than ARTICLE_COUNT articles in
			// result set meet requirements, get as many as possible.
			// FIXME(ori-l, 14-March-2013): should be a separate method.
			$taskArticles = array();
			foreach( $roulette->getRandomArticles( self::ARTICLE_COUNT * 2 ) as $article ) {
				$length = $article->getLength();
				if ( $length > 0 && $length <= self::MAX_ARTICLE_LENGTH && $article->userCan( 'edit' ) ) {
					$taskArticles[] = $article;
				}
				if ( count( $taskArticles ) === self::ARTICLE_COUNT ) {
					break;
				}
			}

			$imageSrc = wfFindFile( $task['image'] )->getURL();
			$descriptionMessage = $this->msg( $task['descriptionMessage'] );
			$taskContents = Html::element( 'img', array( 'src' => $imageSrc, 'alt' => $descriptionMessage->text() ) )
				.  '<h4>'
				. $descriptionMessage->escaped() . ' '
				.  Html::rawElement( 'span', array( 'class' => 'onboarding-help ' . $task['taskName'] ),
						$questionIcon
				)
				.  '</h4>'
				.  '<ul class="onboarding-article-list">';
			foreach ( $taskArticles as $article ) {
				$taskContents .= '<li>' . Linker::link( $article ) . '</li>';
			}
			$taskContents .= '</ul>';
			$result .= Html::rawElement( 'li', array( 'class' => 'onboarding-task', 'data-guider-id' => $task['guiderId'], 'data-task-name' => $task['taskName'] ), $taskContents );
		}
		$result .= <<< 'EOF'
				</ul>
			</div>
EOF;
		return $result;
	}
}
