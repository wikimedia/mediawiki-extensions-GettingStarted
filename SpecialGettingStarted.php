<?php
class SpecialGettingStarted extends SpecialPage {
	function __construct() {
		parent::__construct( 'GettingStarted' );
	}

	function execute( $par ) {
		global $wgSitename;


		$output = $this->getOutput();
		$output->addModules( array(
				'ext.guidedTour.tour.gettingstartedpage',
				'ext.gettingstarted'
		) );

		$this->setHeaders();
		$user = $this->getUser();
		if( !$user->isAnon() ) {
			$output->setPageTitle( $this->msg( 'gettingstarted-welcomesiteuser', $wgSitename, $user->getName() ) );
		} else {
			$output->setPageTitle( $this->msg( 'gettingstarted-welcomesiteuseranon', $wgSitename ) );
		}

		$gettingstarted_msg = 'gettingstarted-msg';

		$output->addWikiMsg( $gettingstarted_msg, wfEscapeWikiText( $user->getName() ) );
	}
}
