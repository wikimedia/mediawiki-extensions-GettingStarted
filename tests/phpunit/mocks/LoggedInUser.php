<?php

namespace Tests\GettingStarted\Mocks;

use User;

class LoggedInUser extends User {

	private $registration;

	private $id;

	/**
	 * Constructs a mock user and sets the timestamp field in the correct format
	 *
	 * @param int|string|null $registration A timestamp in one of the input formats supported
	 *   by wfTimestampOrNull
	 */
	public function __construct( $registration ) {
		parent::__construct();

		$this->registration = wfTimestampOrNull( TS_MW, $registration );
	}

	public function isLoggedIn() {
		return true;
	}

	public function getRegistration() {
		return $this->registration;
	}

	public function setId( $id ) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}
}
