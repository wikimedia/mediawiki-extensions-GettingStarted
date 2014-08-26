<?php

namespace Tests\GettingStarted\Mocks;

use User, WSTimestamp;

class LoggedInUser extends User {

    private $registration;

    public function __construct( $registration ) {
        parent::__construct();

        $this->registration = $registration;
    }

    public function isLoggedIn() {
        return true;
    }

    public function getRegistration() {
        return $this->registration;
    }
}
