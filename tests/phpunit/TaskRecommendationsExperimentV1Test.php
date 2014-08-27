<?php

namespace Tests\GettingStarted;

// TODO (phuedx, 2014/08/27): Is there a hook to modify the $wgAutoloadClasses
// global variable when a unit test/test suite is being run?
require_once __DIR__ . '/mocks/LoggedInUser.php';

use User;
use GettingStarted\TaskRecommendationsExperimentV1;
use Tests\GettingStarted\Mocks\LoggedInUser;

class TaskRecommendationsExperimentV1Test extends \PHPUnit_Framework_TestCase {

    public function testAnAnonymousUserShouldntSeeThePostEditNotification() {
        $experiment = new TaskRecommendationsExperimentV1( new User() );
        $this->assertFalse( $experiment->isPostEditEnabled() );
    }

    public function testAnAnonymousUserShouldntSeeTheFlyout() {
        $experiment = new TaskRecommendationsExperimentV1( new User() );
        $this->assertFalse( $experiment->isFlyoutEnabled() );
    }

    public function testLoggedInOldUserShouldntSeeThePostEditNotification() {
        $experiment = new TaskRecommendationsExperimentV1( $this->getLoggedInOldUser() );
        $this->assertFalse( $experiment->isPostEditEnabled() );
    }

    public function testLoggedInOldUserShouldntSeeTheFlyout() {
        $experiment = new TaskRecommendationsExperimentV1( $this->getLoggedInOldUser() );
        $this->assertFalse( $experiment->isFlyoutEnabled() );
    }

    public static function bucketingDataProvider() {
        return array(
            array(
                1, // ID
                true, // Should see post-edit notification
                false, // Shouldn't see flyout
            ),
            array( 2, false, true ),
            array( 3, true, true ),
            array( 4, false, false ),
        );
    }

    /**
     * @dataProvider bucketingDataProvider
     */
    public function testBucketing( $userId, $shouldSeePostEditNotification, $shouldSeeFlyout ) {
        $user = $this->getLoggedInNewUser();
        $user->setId( $userId );
        $experiment = new TaskRecommendationsExperimentV1( $user );
        $this->assertEquals( $experiment->isPostEditEnabled(), $shouldSeePostEditNotification );
        $this->assertEquals( $experiment->isFlyoutEnabled(), $shouldSeeFlyout );
    }

    private function getLoggedInOldUser() {
        global $wgGettingStartedRecentPeriodInSeconds;

        $registration = wfTimestamp(
            TS_UNIX, time() + $wgGettingStartedRecentPeriodInSeconds + 86400 // 31 days old.
        );

        return new LoggedInUser( $registration );
    }

    private function getLoggedInNewUser() {
        return new LoggedInUser( wfTimestamp( TS_UNIX ) );
    }
}
