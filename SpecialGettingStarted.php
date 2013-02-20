<?php
class SpecialGettingStarted extends SpecialPage {
	// Update GettingStarted.i18n.php too if this is changed
	const TASK_COUNT = 3;

	public function __construct() {
		parent::__construct( 'GettingStarted' );
	}

	public function execute( $par ) {
		global $wgSitename;

		$this->setHeaders();
		$output = $this->getOutput();

		$user = $this->getUser();
		if( !$user->isAnon() ) {
			$output->setPageTitle( $this->msg( 'gettingstarted-welcomesiteuser', $wgSitename, $user->getName() ) );
		} else {
			$output->setPageTitle( $this->msg( 'gettingstarted-welcomesiteuseranon', $wgSitename ) );
		}

		$output->addModules( array(
				'ext.guidedTour.tour.gettingstartedpage',
				'ext.gettingstarted'
		) );

		$output->addHTML( $this->getHtmlResult() );
	}

	public function getHtmlResult() {
		$result = '';
		$headerText = $this->msg( 'gettingstarted-task-header' )->escaped();

		$result .= <<< EOF
			<div class="onboarding-container clearfix">
				<h3 class="onboarding-header">
					$headerText
				</h3>
				<ul class="clearfix" id="onboarding-tasks">
EOF;
		$tasks = array();
		for ( $i = 1; $i <= self::TASK_COUNT; $i++ ) {
			$tasks[] = "gettingstarted-task-$i";
		}
		shuffle( $tasks );
		foreach ( $tasks as $task ) {
			$result .= $this->msg( $task )->parse();
		}

		$result .= <<< 'EOF'
				</ul>
			</div>
EOF;
		return $result;
	}
}
