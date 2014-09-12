<?php

namespace GettingStarted;

use User;

/**
 * Models a user being entered into version 1 of the Task Recommendations
 * experiment.
 */
class TaskRecommendationsExperimentV1 {

	private static $buckets = array(
		'control',
		'post-edit',
		'flyout',
		'both',
	);

	private $bucket;

	public function __construct( User $user ) {
		$this->bucket = $this->getBucket( $user );
	}

	private function getBucket( User $user ) {
		if ( !$user->isLoggedIn() || !$this->isRegistrationDateInRange( $user ) ) {
			return 'control';
		}

		$numBuckets = count( self::$buckets );

		return self::$buckets[ $user->getId() % $numBuckets ];
	}

	private function isRegistrationDateInRange( User $user ) {
		// TODO (phuedx, 2014/08/27): This is part of the experiment
		// configuration and should be passed in at construction.
		global $wgTaskRecommendationsExperimentV1StartDate,
			$wgTaskRecommendationsExperimentV1EndDate;

		$registrationDateInUnixTime = wfTimestampOrNull( TS_UNIX, $user->getRegistration() );

		// null user_registration is treated as a very old user, always excluded
		return $registrationDateInUnixTime !== null &&
			$registrationDateInUnixTime >= $wgTaskRecommendationsExperimentV1StartDate &&
			$registrationDateInUnixTime < $wgTaskRecommendationsExperimentV1EndDate;
	}

	public function isPostEditEnabled() {
		return $this->bucket === 'post-edit' || $this->bucket === 'both';
	}

	public function isFlyoutEnabled() {
		return $this->bucket === 'flyout' || $this->bucket === 'both';
	}
}
