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
		if ( !$user->isLoggedIn() || !$this->isRecentSignup( $user ) ) {
			return 'control';
		}

		// TODO (phuedx, 2014/08/26): Hooks::isRecentSignup belongs here too.

		$numBuckets = count( self::$buckets );

		return self::$buckets[ $user->getId() % $numBuckets ];
	}

	private function isRecentSignup( User $user ) {
		// TODO (phuedx, 2014/08/27): This is part of the experiment
		// configuration and should be passed in at construction.
		global $wgGettingStartedRecentPeriodInSeconds;

		$registration = $user->getRegistration();
		$secondsSinceRegistration = wfTimestamp( TS_UNIX ) - wfTimestamp( TS_UNIX, $registration );

		return $secondsSinceRegistration < $wgGettingStartedRecentPeriodInSeconds;
	}

	public function isPostEditEnabled() {
		return $this->bucket === 'post-edit' || $this->bucket === 'both';
	}

	public function isFlyoutEnabled() {
		return $this->bucket === 'flyout' || $this->bucket === 'both';
	}
}
