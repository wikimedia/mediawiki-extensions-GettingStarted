<?php
class SpecialGettingStarted extends SpecialPage {
	function __construct() {
		parent::__construct( 'GettingStarted' );
	}

	function execute( $par ) {
		global $wgSitename;


		$output = $this->getOutput();
		$output->addModuleStyles( 'ext.onboarding.gettingStarted' );

		$this->setHeaders();
		$user = $this->getUser();
		if( !$user->isAnon() ) {
			$output->setPageTitle( $this->msg( 'welcomesiteuser', $wgSitename, $user->getName() ) );
		} else {
			$output->setPageTitle( $this->msg( 'welcomesiteuseranon', $wgSitename ) );
		}

		// If the user came straight from account creation, run its hooks
		// which may supply different HTML and message.
		$injected_html = '';
		$onboarding_msg = 'onboarding-msg';

		$request = $this->getRequest();
		if ( $request->getBool( 'fromSignup' ) ) {
			// XXX Big question: should we re-run these hooks?
			// Both were run during signup in successfulCreation(), but both
			// may insert/modify HTML, and it's lost unless we repeat here.
			// In practice, on enwiki, CentralAuth injects some HTML.
			wfRunHooks( 'UserLoginComplete', array( &$user, &$injected_html ) );
			wfRunHooks( 'BeforeWelcomeCreation', array( &$onboarding_msg, &$injected_html ) );
		}

		// The link for a possible [← No thanks, back to Xyz] button.
		$returnTo = $request->getText('returnto');
		$returnToQuery = $request->getText('returntoquery');

		// Render helpful Getting Started content

		$output->addWikiMsg( $onboarding_msg, wfEscapeWikiText( $user->getName() ) );
		$output->addHTML( $injected_html );
	}
}
