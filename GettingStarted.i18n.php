<?php
/**
 * Internationalisation for GettingStarted
 *
 * @file
 * @ingroup Extensions
 */
$messages = array();

/** English
 * @author spage
 */
$messages['en'] = array(
	'gettingstarted' => "Getting started",
	'gettingstarted-desc' => 'Adds a [[Special:GettingStarted|welcome page]] for new users (shown after account creation)',
	'gettingstarted-msg' => 'An administrator on {{SITENAME}} should customize this message by editing [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => "Welcome to $1, $2!",
	'gettingstarted-welcomesiteuseranon' => "Welcome to $1!",
	'gettingstarted-backtoarticle' => "No thanks, back to article",
);

/** Message documentation
 * @author spage
 */
$messages['qqq'] = array(
	'gettingstarted' => "The name of the extension's entry in Special:SpecialPages",
	'gettingstarted-desc' => "{{desc}}",
	'gettingstarted-msg' => 'Main content of Special:GettingStarted page. $1 is the username.',
	'gettingstarted-welcomesiteuser' => "The title of the Getting Started page for logged-in users. $1 is the sitename. $2 is the username; GENDER is supported",
	'gettingstarted-welcomesiteuseranon' => "The title of the Getting Started page for anonymous users. $1 is the sitename.",
	'gettingstarted-backtoarticle' => "Text of navigation button for returning to article",
);
