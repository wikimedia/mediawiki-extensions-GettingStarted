<?php

namespace Tests\GettingStarted\Mocks;

use User, WSTimestamp;

class LoggedInUser extends User {

	private $registration;

	/**
	 * Constructs a mock user and sets the timestamp field in the correct format
	 *
	 * @param mixed $registration A timestamp in one of the input formats supported by wfTimestamp
	 */
	public function __construct( $registration ) {
		parent::__construct();

		$this->registration = wfTimeStamp( TS_MW, $registration );
	}

	public function isLoggedIn() {
		return true;
	}

	public function getRegistration() {
		return $this->registration;
	}
}
