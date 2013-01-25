<?php
if ( !defined( 'MEDIAWIKI' ) ) die( 'Invalid entry point.' );

$wgExtensionCredits[ 'specialpage' ][] = array(
	'path' => __FILE__,
	'name' => 'GettingStarted',
	'author' => array(
		'Munaf Assaf',
		'Matt Flaschen',
		'S Page',
	),
	'url' => 'https://www.mediawiki.org/wiki/Extension:GettingStarted',
	'descriptionmsg' => 'gettingstarted-desc',
	'version' => '0.0.1',
);

$wgAutoloadClasses += array(
	'SpecialGettingStarted' => __DIR__ . '/SpecialGettingStarted.php',
	'GettingStartedHooks'   => __DIR__ . '/GettingStarted.hooks.php'
);

$wgExtensionMessagesFiles[ 'GettingStarted' ] = __DIR__ . '/GettingStarted.i18n.php';
$wgExtensionMessagesFiles[ 'GettingStartedAlias' ] = __DIR__ . '/GettingStarted.alias.php';

$wgSpecialPages[ 'GettingStarted' ] = 'SpecialGettingStarted';
$wgSpecialPageGroups[ 'GettingStarted' ] = 'users';

// Modules
$wgResourceModules[ 'ext.gettingstarted' ] = array(
	'styles' => 'resources/ext.gettingstarted.css',
	'position' => 'top',

	'localBasePath' => __DIR__,
	'remoteExtPath' => 'GettingStarted',
);

// This is the version that runs on account creation.  It depends on the CSS code above.
$wgResourceModules[ 'ext.gettingstarted.accountcreation' ] = array(
	'scripts' => 'resources/ext.gettingstarted.accountcreation.js',
	'messages' => array(
		'gettingstarted-welcomesiteuser', // XXX (mattflaschen, 2012-12-12): This is a workaround until we move this into core, at which point it can be done server-side.
		'gettingstarted-return',
	),
	'dependencies' => array(
		'ext.gettingstarted',
		'mediawiki.util',
	),
	'position' => 'top',

	'localBasePath' => __DIR__,
	'remoteExtPath' => 'GettingStarted',
);

$wgHooks[ 'BeforeWelcomeCreation' ][] = function( &$welcome_creation_msg, &$inject_html ) {
	global $wgUser, $wgOut;

	// Do nothing on mobile.
	if ( class_exists( 'MobileContext' ) && MobileContext::singleton()->shouldDisplayMobileView() ) {
			return true;
	}

	// Activate for users with even user IDs.
	if ( ( $wgUser->getId() % 2 ) === 0 ) {
		$welcome_creation_msg = 'gettingstarted-msg';
		$wgOut->addModules( 'ext.gettingstarted.accountcreation' );
	}

	return true;
};

$wgHooks[ 'RecentChange_save' ][] = 'GettingStartedHooks::onRecentChange_save';
$wgHooks[ 'ListDefinedTags' ][] = 'GettingStartedHooks::onListDefinedTags';
