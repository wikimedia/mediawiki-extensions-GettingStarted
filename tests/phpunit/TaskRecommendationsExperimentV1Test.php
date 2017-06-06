<?php

namespace Tests\GettingStarted;

// TODO (phuedx, 2014/08/27): Is there a hook to modify the $wgAutoloadClasses
// global variable when a unit test/test suite is being run?
require_once __DIR__ . '/mocks/LoggedInUser.php';

use User;
use GettingStarted\TaskRecommendationsExperimentV1;
use Tests\GettingStarted\Mocks\LoggedInUser;

class TaskRecommendationsExperimentV1Test extends \MediaWikiTestCase {
	public function setUp() {
		parent::setUp();

		$now = time();
		$startDateOffset = -500;
		$endDateOffset = 500;
		$this->setMwGlobals(
			'wgTaskRecommendationsExperimentV1StartDate', $startDateOffset + $now
		);
		$this->setMwGlobals( 'wgTaskRecommendationsExperimentV1EndDate', $endDateOffset + $now );
	}

	public function testAnAnonymousUserShouldntSeeThePostEditNotification() {
		$experiment = new TaskRecommendationsExperimentV1( new User() );
		$this->assertFalse( $experiment->isPostEditEnabled() );
	}

	public function testAnAnonymousUserShouldntSeeTheFlyout() {
		$experiment = new TaskRecommendationsExperimentV1( new User() );
		$this->assertFalse( $experiment->isFlyoutEnabled() );
	}

	public function testLoggedInOldUserShouldntSeeThePostEditNotification() {
		$user = $this->getLoggedInOldUser();
		// 3 => 'both' bucket, so the registration date is the only reason
		// they don't get it.
		$user->setId( 3 );

		$experiment = new TaskRecommendationsExperimentV1( $user );
		$this->assertFalse( $experiment->isPostEditEnabled() );
	}

	public function testLoggedInOldUserShouldntSeeTheFlyout() {
		$user = $this->getLoggedInOldUser();
		$user->setId( 3 );

		$experiment = new TaskRecommendationsExperimentV1( $user );
		$this->assertFalse( $experiment->isFlyoutEnabled() );
	}

	public function testLoggedInOldUserWithNullRegistrationDateShouldntSeeAnything() {
		$user = $this->getLoggedInOldUserWithNullRegistrationDate();
		$user->setId( 3 );
		$experiment = new TaskRecommendationsExperimentV1( $user );

		$this->assertFalse( $experiment->isFlyoutEnabled() );
		$this->assertFalse( $experiment->isPostEditEnabled() );
	}

	public static function bucketingDataProvider() {
		return [
			[
				1, // ID
				true, // Should see post-edit notification
				false, // Shouldn't see flyout
			],
			[ 2, false, true ],
			[ 3, true, true ],
			[ 4, false, false ],
		];
	}

	/**
	 * @dataProvider bucketingDataProvider
	 */
	public function testBucketing( $userId, $shouldSeePostEditNotification, $shouldSeeFlyout ) {
		$user = $this->getLoggedInNewUser();
		$user->setId( $userId );
		$experiment = new TaskRecommendationsExperimentV1( $user );
		$this->assertEquals(
			$shouldSeePostEditNotification, $experiment->isPostEditEnabled(), 'isPostEditEnabled'
		);
		$this->assertEquals( $shouldSeeFlyout, $experiment->isFlyoutEnabled(), 'isFlyoutEnabled' );
	}

	private function getLoggedInOldUser() {
		return new LoggedInUser( -700 + time() );
	}

	private function getLoggedInNewUser() {
		return new LoggedInUser( 200 + time() );
	}

	private function getLoggedInOldUserWithNullRegistrationDate() {
		return new LoggedInUser( null );
	}
}
