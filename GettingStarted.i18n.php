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
	'gettingstarted-msg' => '', // Intentionally blank
	'gettingstarted-welcomesiteuser' => "Welcome to $1, $2!",
	'gettingstarted-welcomesiteuseranon' => "Getting started",
	'gettingstarted-welcome-back-site-user' => "Welcome back, $2",
	'gettingstarted-task-header' => 'Thanks for joining {{SITENAME}}! Here are some ways you can get involved.

Choose an option below, and you will see a random article that needs help.',
	'gettingstarted-return' => "← No thanks, return to the page I was reading",
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	// Change tags
	'tag-gettingstarted_edit' => '[[Special:Tags|Tag]]: new editor [[{{MediaWiki:gettingstarted-project-link}}|getting started]]',
	'tag-gettingstarted_edit-description' => 'Edit of a page that the user chose from the task list in [[Special:GettingStarted|Getting started]]',

	// Main text of the special page
	'gettingstarted-task-copyedit-main-description' => 'Fix Spelling & Grammar',
	'gettingstarted-task-copyedit-secondary-description' => 'The easiest way to get started!',
	'gettingstarted-task-clarify-main-description' => 'Improve Clarity',
	'gettingstarted-task-clarify-secondary-description' => 'Simplify or reword sentences.',
	'gettingstarted-task-addlinks-main-description' => 'Add Links',
	'gettingstarted-task-addlinks-secondary-description' => 'Connect {{SITENAME}} articles together.',

	// Toolbar above article, when they have chosen a task and been redirected

	/// Shared among all tasks
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Back to list',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Return to the list of articles',
	'gettingstarted-task-toolbar-editing-help-text' => 'Show help',
	'gettingstarted-task-toolbar-editing-help-title' => 'Show a guide on how to edit',
	'gettingstarted-task-toolbar-try-another-text' => 'Try another article ►',
	'gettingstarted-task-toolbar-close-title' => 'Close this toolbar',

	/// Specific to each task
	'gettingstarted-task-copyedit-toolbar-description' => 'This article has spelling and grammar errors you can fix.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Go to a random article you can improve by copyediting',

	'gettingstarted-task-clarify-toolbar-description' => 'This article is confusing or vague. Look for ways you can make it clearer.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Go to a random article you can clarify',

	'gettingstarted-task-addlinks-toolbar-description' => 'This article needs more links. Look for terms that have a {{SITENAME}} article.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Go to a random article you can add links to',

	// Tours
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'How to get started',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Just start scanning through the article and looking for improvements. If you feel overwhelmed, don\'t worry. You don\'t have to be an expert on this topic! If you need help or want to try another article, use the links in the top bar.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ideas on what to do',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'These banners identify problems with this article. You don\'t need to address them all, just stick with what you\'re comfortable doing.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Click {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'You can edit the entire article by clicking here.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Edit a section',
	// TODO (mattflaschen, 2013-04-25): Use <nowiki>[edit]</nowiki> after bug 45173 is fixed.
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'If you want to edit a specific section, you can click on the blue \'{{int:editsection}}\' link at the top of each section.',

	// Notifications
	'notification-gettingstarted-start-editing' => '{{SITENAME}} is a free encyclopedia written by people like you. [[Special:GettingStarted|Get started]] by making your first edit!',
	'notification-gettingstarted-start-editing-email-subject' => 'Get started with editing {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} is a free encyclopedia written by people like you. Get started by making your first edit!

Visit $2 for a list of easy ways to improve pages.

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Get started with {{SITENAME}} editing by visiting $2',
	'notification-gettingstarted-continue-editing' => 'Nice work! You\'ve already made your first edits to {{SITENAME}}. If you\'re looking for more to do, here are some [[Special:GettingStarted|easy ways to help]].',
	'notification-gettingstarted-continue-editing-email-subject' => 'Easy ways to improve {{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Nice work! You\'ve already made your first edits to {{SITENAME}}.

If you\'re looking for more to do, there\'s a list of easy ways to help at $2

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Looking for more to do? Visit $2 for a list of easy ways to help.',
);

/** Message documentation (Message documentation)
 * @author Shirayuki
 * @author spage
 */
$messages['qqq'] = array(
	'gettingstarted' => '{{doc-special|GettingStarted}}',
	'gettingstarted-desc' => '{{desc|name=Getting Started|url=http://www.mediawiki.org/wiki/Extension:GettingStarted}}',
	'gettingstarted-msg' => 'Blank message used to replace welcomecreation-msg.  Additional dynamically generated task HTML is injected',
	'gettingstarted-welcomesiteuser' => 'The title of the Getting Started page shown automatically to users after they create an account
* $1 - sitename
* $2 - username; GENDER is supported',
	'gettingstarted-welcomesiteuseranon' => 'The title of the Getting Started page for anonymous users who manually visit it.
The parameter is not used in the default message.
* $1 - sitename',
	'gettingstarted-welcome-back-site-user' => 'The title of the Getting Started page for logged in users who manually visit it.
These may or may not have seen it when they created their account, depending on account age.
Only $2 is currently used in the default message, but the order is the same as {{msg-mw|gettingstarted-welcomesiteuser}} for consistency.
* $1 - sitename
* $2 - username; GENDER is supported',
	'gettingstarted-task-header' => 'Header above task information',
	'gettingstarted-return' => 'Text of navigation button for returning to previous page',
	'gettingstarted-project-link' => 'Name of page that describes how GettingStarted is used on the wiki',
	'tag-gettingstarted_edit' => 'Text of tag identifying an edit from GettingStarted that appears e.g. in [[Special:RecentChanges]].

See also:
* {{msg-mw|tag-gettingstarted_edit-description}}',
	'tag-gettingstarted_edit-description' => 'Description of tag that appears e.g. in [[Special:Tags]]',
	'gettingstarted-task-copyedit-main-description' => 'Main description for copy-editing task; shown on Special:GettingStarted',
	'gettingstarted-task-copyedit-secondary-description' => 'Secondary description for copy-editing task; shown on Special:GettingStarted',
	'gettingstarted-task-clarify-main-description' => 'Main description for clarification task; shown on Special:GettingStarted',
	'gettingstarted-task-clarify-secondary-description' => 'Secondary description for clarification task; shown on Special:GettingStarted',
	'gettingstarted-task-addlinks-main-description' => 'Main description for link-adding task; shown on Special:GettingStarted',
	'gettingstarted-task-addlinks-secondary-description' => 'Secondary description for link-adding task; shown on Special:GettingStarted',
	'gettingstarted-task-toolbar-return-to-list-text' => 'Used as label for the link in [[Special:GettingStarted]].

The tooltip for the link is {{msg-mw|Gettingstarted-task-toolbar-return-to-list-title}}.',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Used as tooltip for the link in [[Special:GettingStarted]].

The label for the link is {{msg-mw|Gettingstarted-task-toolbar-return-to-list-text}}.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Used as label for the Help button.

The tooltip for the button is {{msg-mw|Gettingstarted-task-toolbar-editing-help-title}}.',
	'gettingstarted-task-toolbar-editing-help-title' => 'Used as tooltip for the Help button.

The label for the button is {{msg-mw|Gettingstarted-task-toolbar-editing-help-text}}.',
	'gettingstarted-task-toolbar-try-another-text' => 'Used as label for the link.

The tooltip for the link is any one of the following:
* {{msg-mw|Gettingstarted-task-copyedit-toolbar-try-another-title}}
* {{msg-mw|Gettingstarted-task-clarify-toolbar-try-another-title}}
* {{msg-mw|Gettingstarted-task-addlinks-toolbar-try-another-title}}',
	'gettingstarted-task-toolbar-close-title' => 'Tooltip for toolbar close button.

The label for the button is "×".',
	'gettingstarted-task-copyedit-toolbar-description' => 'Main text shown on toolbar, explaining the copy-editing task',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Used as tooltip for the link to try another article for the copy-editing task.

The label for the link is {{msg-mw|Gettingstarted-task-toolbar-try-another-text}}.',
	'gettingstarted-task-clarify-toolbar-description' => 'Main text shown on toolbar, explaining the clarification task',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Used as tooltip for the link to try another article for the clarification task.

The label for the link is {{msg-mw|Gettingstarted-task-toolbar-try-another-text}}.',
	'gettingstarted-task-addlinks-toolbar-description' => 'Main text shown on toolbar, explaining the link-adding task',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Used as tooltip for the link to try another article for the link-adding task.

The label for the link is {{msg-mw|Gettingstarted-task-toolbar-try-another-text}}.',
	'notification-gettingstarted-start-editing' => 'Text shown on web when someone confirms their email but has not yet edited the main namespace:
* $1 - username (unused); GENDER is supported',
	'notification-gettingstarted-start-editing-email-subject' => 'Subject of email sent when someone confirms their email but has not yet edited the main namespace:
* $1 - username (unused); GENDER is supported',
	'notification-gettingstarted-start-editing-text-email-body' => 'Body of text email sent when someone confirms their email but has not yet edited the main namespace:
* $1 - username (unused); GENDER is supported
* $2 - URL of Special:GettingStarted
* $3 - email footer',
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Body of batch version of text email sent when someone confirms their email but has not yet edited the main namespace:
* $1 - username (unused); GENDER is supported
* $2 - URL of Special:GettingStarted',
	'notification-gettingstarted-continue-editing' => 'Text shown on web when someone confirms their email, and has already edited the main namespace:
* $1 - username (unused); GENDER is supported',
	'notification-gettingstarted-continue-editing-email-subject' => 'Subject of email sent when someone confirms their email, and has already edited the main namespace:
* $1 - username (unused); GENDER is supported',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Body of text email sent when someone confirms their email, and has already edited the main namespace:
* $1 - username (unused); GENDER is supported
* $2 - URL of Special:GettingStarted
* $3 - email footer',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Body of batch version of text email sent when someone confirms their email, and has already edited the main namespace:
* $1 - username (unused); GENDER is supported
* $2 - URL of Special:GettingStarted',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'gettingstarted' => 'Пачатак працы',
	'gettingstarted-desc' => 'Дадае [[Special:GettingStarted|вітальную старонку]] для новых удзельнікаў (паказваецца па стварэньні рахунку)',
	'gettingstarted-msg' => 'Адміністратар {{GRAMMAR:родны|{{SITENAME}}}} мусіць наладзіць гэтае паведамленьне, адрэдагаваўшы [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Вітаем у {{GRAMMAR:месны|$1}}, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Вітаем у {{GRAMMAR:месны|$1}}',
	'gettingstarted-return' => 'Не, дзякую, вярніце мяне назад',
	'gettingstarted-project-link' => '{{ns:Project}}:Пачатак працы',
	'tag-gettingstarted_edit' => '[[Special:Tags|Метка]]: [[{{MediaWiki:gettingstarted-project-link}}|пачатак працы]] новага рэдактара',
	'tag-gettingstarted_edit-description' => 'Рэдагаваньне старонкі зь сьпісу задачаў на старонцы «[[Special:GettingStarted|З чаго пачаць]]», якую абраў удзельнік',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Y-M D
 */
$messages['br'] = array(
	'gettingstarted' => 'Kregiñ ganti',
	'gettingstarted-welcomesiteuser' => 'Degemer mat en $1, $2 !',
);

/** Czech (česky)
 * @author Mormegil
 * @author Vks
 */
$messages['cs'] = array(
	'gettingstarted-desc' => 'Přidává [[Special:GettingStarted|uvítací stránku]] pro nové uživatele (zobrazenou po vytvoření účtu)',
	'gettingstarted-welcomesiteuser' => 'Vítá vás $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Jak začít',
	'gettingstarted-welcome-back-site-user' => 'Vítejte zpět, {{GENDER:$2|uživateli|uživatelko}} $2',
	'gettingstarted-task-header' => 'Hledáte snadný způsob, jak začít? Stačí si vybrat stránku z jednoho ze tří níže uvedených seznamů.',
	'gettingstarted-return' => '← Ne, děkuji, chci zpět tam, kde jsem byl',
	'gettingstarted-project-link' => '{{ns:Project}}:Jak začít',
	'tag-gettingstarted_edit' => '[[Special:Tags|Značka]]: nový uživatel [[{{MediaWiki:gettingstarted-project-link}}|začíná]]',
	'tag-gettingstarted_edit-description' => 'Editace stránky, kterou si uživatel zvolil ze seznamu úkolů na stránce [[Special:GettingStarted|Jak začít]]',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Opravy pravopisu a gramatiky',
);

/** Danish (dansk)
 * @author Christian List
 */
$messages['da'] = array(
	'gettingstarted' => 'Kom i gang',
	'gettingstarted-desc' => 'Tilføjer en [[Special:GettingStarted|velkomstside]] for nye brugere (vist efter oprettelse af konto)',
	'gettingstarted-msg' => 'En administrator på {{SITENAME}} bør tilpasse denne meddelelse ved at redigere [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Velkommen til $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Velkommen til $1!',
	'gettingstarted-return' => 'Nej tak, tag mig tilbage',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Metalhead64
 */
$messages['de'] = array(
	'gettingstarted' => 'Erste Schritte',
	'gettingstarted-desc' => 'Ergänzt eine [[Special:GettingStarted|Willkommensseite]] für neue Benutzer, die nach deren Registrierung angezeigt wird',
	'gettingstarted-welcomesiteuser' => 'Willkommen bei $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Erste Schritte',
	'gettingstarted-welcome-back-site-user' => 'Willkommen zurück, $2',
	'gettingstarted-task-header' => 'Danke für deine Registrierung auf {{SITENAME}}! Hier sind einige Wege für dich.

Wähle unten eine Option aus und du wirst sehen, dass ein zufälliger Artikel Hilfe benötigt.',
	'gettingstarted-return' => '← Nein danke, zurück zur gelesenen Seite.',
	'gettingstarted-project-link' => '{{ns:Project}}:Erste Schritte',
	'tag-gettingstarted_edit' => '[[Special:Tags|Markierung]]: [[{{MediaWiki:gettingstarted-project-link}}|Erste Schritte]] eines neuen Autors',
	'tag-gettingstarted_edit-description' => 'Bearbeitung einer Seite, die der Benutzer aus der Aufgabenliste der Spezialseite „[[Special:GettingStarted|Anfangen]]“ ausgewählt hat',
	'gettingstarted-task-copyedit-main-description' => 'Rechtschreibung und Grammatik korrigieren',
	'gettingstarted-task-copyedit-secondary-description' => 'Der einfachste Weg, um anzufangen!',
	'gettingstarted-task-clarify-main-description' => 'Klarheit verbessern',
	'gettingstarted-task-clarify-secondary-description' => 'Sätze vereinfachen oder umformulieren',
	'gettingstarted-task-addlinks-main-description' => 'Links hinzufügen',
	'gettingstarted-task-addlinks-secondary-description' => '{{SITENAME}}-Artikel miteinander verbinden.',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Zurück zur Liste',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Zurück zur Artikelliste',
	'gettingstarted-task-toolbar-editing-help-text' => 'Hilfe anzeigen',
	'gettingstarted-task-toolbar-editing-help-title' => 'Einen Guide zum Bearbeiten anzeigen',
	'gettingstarted-task-toolbar-try-another-text' => 'Einen anderen Artikel versuchen ►',
	'gettingstarted-task-toolbar-close-title' => 'Diese Werkzeugleiste schließen',
	'gettingstarted-task-copyedit-toolbar-description' => 'Dieser Artikel hat Rechtschreibe- und Grammatikfehler, die du korrigieren kannst.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Gehe zu einem zufälligen Artikel, den du durch redigieren verbessern kannst.',
	'gettingstarted-task-clarify-toolbar-description' => 'Dieser Artikel ist verwirrend oder unklar. Suche nach Wegen, um ihn klarer zu machen.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Gehe zu einem zufälligen Artikel, den du verdeutlichen kannst.',
	'gettingstarted-task-addlinks-toolbar-description' => 'Dieser Artikel braucht mehr Links. Suche nach Begriffen, die ein {{SITENAME}}-Artikel hat.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Gehe zu einem zufälligen Artikel, bei dem du Links hinzufügen kannst.',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Wie man anfängt',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Überfliege den Artikel und suche nach Verbesserungen. Falls du dich überfordert fühlst, mach dir keine Sorgen. Du musst kein Experte in diesem Thema sein. Falls du Hilfe benötigst oder einen anderen Artikel ausprobieren möchtest, benutze die Links in der obigen Leiste.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ideen, was zu tun ist.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Diese Banner kennzeichnen Artikelprobleme. Du musst sie nicht alle angehen. Lege dich auf das fest, was du kannst.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Klicke auf „{{int:vector-view-edit}}“',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Du kannst den ganzen Artikel bearbeiten, indem du hier klickst.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Einen Abschnitt bearbeiten',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Falls du einen bestimmten Abschnitt bearbeiten möchtest, kannst du auf den blauen „{{int:editsection}}“-Link zu Beginn jeden Abschnitts klicken.',
	'notification-gettingstarted-start-editing' => '{{SITENAME}} ist eine freie Enzyklopädie, verfasst von Leuten wie dir. [[Special:GettingStarted|Fang an]], indem du deine erste Bearbeitung machst!',
	'notification-gettingstarted-start-editing-email-subject' => 'Fang an, {{SITENAME}} zu bearbeiten',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} ist eine freie Enzyklopädie, verfasst von Leuten wie dir. Fang an, indem du deine erste Bearbeitung machst!

Besuche $2 für eine Liste mit einfachen Wegen, um Seiten zu verbessern.

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Fang an, {{SITENAME}} zu bearbeiten, indem du $2 besuchst.',
	'notification-gettingstarted-continue-editing' => 'Gute Arbeit! Du hast bereits deine ersten Bearbeitungen auf {{SITENAME}} gemacht. Falls du nach mehr suchst, hier sind einige [[Special:GettingStarted|einfache Wege zum helfen]].',
	'notification-gettingstarted-continue-editing-email-subject' => 'Einfache Wege, um {{SITENAME}} zu verbessern',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Gute Arbeit! Du hast bereits deine ersten Bearbeitungen auf {{SITENAME}} gemacht.

Falls du nach mehr suchst, gibt es auf $2 eine Liste mit einfachen Wegen, um zu helfen.

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Suchst du nach mehr? Besuche $2 für eine Liste mit einfachen Wegen, wie man helfen kann.',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'gettingstarted' => 'Prědne kšace',
	'gettingstarted-desc' => 'Pśidawa [[Special:GettingStarted|pówitański bok]] za nowych wužywarjow, kótaryž pokazujo se pó załoženju konta',
	'gettingstarted-welcomesiteuser' => 'Witaj do $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Prědne kšace',
	'gettingstarted-welcome-back-site-user' => 'Witaj slědk, $2',
	'gettingstarted-return' => 'Ně, źěkujom se, źi slědk',
	'gettingstarted-project-link' => '{{ns:Project}}:Prědne kšace',
	'tag-gettingstarted_edit' => '[[Special:Tags|Marka]]: [[{{MediaWiki:gettingstarted-project-link}}|Prědne kšace]] nowego wobźěłarja',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Gramatiku a pšawopis korigěrowaś',
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Jasnosć pólěpšyś',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Boki ze sobu zwězaś',
);

/** Greek (Ελληνικά)
 * @author ZaDiak
 */
$messages['el'] = array(
	'gettingstarted' => 'Ξεκινώντας',
	'gettingstarted-welcomesiteuser' => 'Καλώς ήλθατε στο $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Καλώς ήλθατε στο $1!',
	'gettingstarted-return' => 'Όχι ευχαριστώ, πήγαινε με πίσω',
);

/** British English (British English)
 * @author Shirayuki
 */
$messages['en-gb'] = array(
	'gettingstarted-msg' => 'An administrator on {{SITENAME}} should customise this message by editing [[{{ns:MediaWiki}}:gettingstarted-msg]].',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'gettingstarted' => 'Unuaj paŝoj',
	'gettingstarted-welcomesiteuser' => 'Bonvenon al $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Bonvenon al $1!',
);

/** Spanish (español)
 * @author Almupg
 * @author Armando-Martin
 * @author Fitoschido
 */
$messages['es'] = array(
	'gettingstarted' => 'Primeros pasos',
	'gettingstarted-desc' => 'Agrega una [[Special:GettingStarted|página de bienvenida]] a los nuevos usuarios (se muestra después de la creación de la cuenta)',
	'gettingstarted-welcomesiteuser' => 'Hola $2 ¡Bienvenido a $1!',
	'gettingstarted-welcomesiteuseranon' => '¡Bienvenido a $1!', # Fuzzy
	'gettingstarted-return' => '← No, gracias; volver a donde estaba', # Fuzzy
	'gettingstarted-project-link' => '{{ns:Project}}:PrimerosPasos',
	'gettingstarted-task-copyedit-main-description' => 'Corregir ortografía y gramática', # Fuzzy
	'notification-gettingstarted-start-editing' => '{{SITENAME}} es una enciclopedia libre que está realizada por personas como tú. [[Especial:Cómo empezar|Empieza haciendo tu primera contribución]]', # Fuzzy
	'notification-gettingstarted-start-editing-email-subject' => 'Empieza a editar {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => 'Visita $2 para obtener una lista de maneras fáciles de mejorar páginas.', # Fuzzy
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Visita $2 y empieza a editar {{SITENAME}}',
	'notification-gettingstarted-continue-editing' => '¡Buen trabajo! Has realizado tu primeras ediciones en {{SITENAME}}. Si quieres hacer alguna otra tarea, aquí hay algunas [[Special:Primeros pasos|formas de colaboración fáciles]].', # Fuzzy
	'notification-gettingstarted-continue-editing-email-subject' => 'Maneras fáciles de mejorar {{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-body' => '¡Buen trabajo! Has realizado tus primeras ediciones de  {{SITENAME}}.

Si quieres hacer más, hay una lista en  $2  de maneras fáciles de ayudar

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => '¿Quieres hacer más? Visita $2 y obtendrás una lista de maneras fáciles de ayudar',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'gettingstarted' => 'Alustamine',
	'gettingstarted-welcomesiteuser' => 'Tere tulemast võrgukohta $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Alustamine',
);

/** Persian (فارسی)
 * @author Mjbmr
 */
$messages['fa'] = array(
	'gettingstarted' => 'شروع',
	'gettingstarted-welcomesiteuser' => '$2، به $1 خوش‌آمدید!',
	'gettingstarted-welcomesiteuseranon' => 'به $1 خوش‌آمدید!',
	'gettingstarted-return' => 'نه متشکرم، من را برگردان',
);

/** Finnish (suomi)
 * @author Silvonen
 * @author VezonThunder
 */
$messages['fi'] = array(
	'gettingstarted' => 'Alkuaskeleet',
	'gettingstarted-desc' => 'Lisää [[Special:GettingStarted|tervetulosivun]] uusille käyttäjille (näytetään tunnuksen luonnin jälkeen)',
	'gettingstarted-welcomesiteuser' => 'Tervetuloa sivustolle $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Tervetuloa sivustolle $1!', # Fuzzy
	'gettingstarted-welcome-back-site-user' => 'Tervetuloa takaisin, $2',
	'gettingstarted-return' => 'Ei kiitos, vie minut takaisin', # Fuzzy
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author Hello71
 * @author Jean-Frédéric
 * @author Ltrlg
 * @author Metroitendo
 * @author Valystant
 */
$messages['fr'] = array(
	'gettingstarted' => 'Pour commencer',
	'gettingstarted-desc' => 'Ajoute une [[Special:GettingStarted|page d’accueil]] pour les nouveaux utilisateurs (affichée après la création de compte)',
	'gettingstarted-welcomesiteuser' => 'Bienvenue sur $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Pour commencer',
	'gettingstarted-welcome-back-site-user' => 'Bienvenue de nouveau, $2',
	'gettingstarted-task-header' => 'Merci de vous être inscrit sur {{SITENAME}} ! Voici quelques façons de vous impliquer.

Choisissez une option ci-dessous et vous verrez un article pris au hasard qui a besoin d’aide.',
	'gettingstarted-return' => '← Non merci, revenir à la page que j’étais en train de lire',
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	'tag-gettingstarted_edit' => '[[Special:Tags|Balise]]: un nouvel éditeur [[{{MediaWiki:gettingstarted-project-link}}|a débuté]]',
	'tag-gettingstarted_edit-description' => "Modification d'une page choisie par l’utilisateur dans la liste des tâches dans [[Special:GettingStarted|Pour commencer]]",
	'gettingstarted-task-copyedit-main-description' => 'Corriger la grammaire et l’orthographe',
	'gettingstarted-task-copyedit-secondary-description' => 'La meilleure façon de commencer !',
	'gettingstarted-task-clarify-main-description' => 'Améliorer la clarté',
	'gettingstarted-task-clarify-secondary-description' => 'Simplifier ou reformuler des phrases.',
	'gettingstarted-task-addlinks-main-description' => 'Ajouter des liens',
	'gettingstarted-task-addlinks-secondary-description' => 'Relier des articles de {{SITENAME}} entre eux.',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Retour à la liste',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Retour à la liste des articles',
	'gettingstarted-task-toolbar-editing-help-text' => 'Afficher l’aide',
	'gettingstarted-task-toolbar-editing-help-title' => 'Voir un guide sur la façon de modifier',
	'gettingstarted-task-toolbar-try-another-text' => 'Essayer un autre article ►',
	'gettingstarted-task-toolbar-close-title' => 'Fermer cette barre d’outils',
	'gettingstarted-task-copyedit-toolbar-description' => 'Cet article a des erreurs d’orthographe et de grammaire que vous pouvez corriger.',
	'gettingstarted-task-clarify-toolbar-description' => 'Cet article est source de confusion ou de vague. Cherchez des façons de le rendre plus clair.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Aller à un article au hasard que vous pouvez préciser',
	'gettingstarted-task-addlinks-toolbar-description' => 'Cet article a besoin e plus de liens. Cherchez les termes qui ont un article sur {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Aller à un article au hasard auquel vous pouvez ajouter des liens',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Comment débuter',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Cliquez sur {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => "Vous pouvez modifier l'article en entier en cliquant ici.",
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Modifier une section',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Si vous souhaitez modifier une section spécifique, vous pouvez cliquer sur le lien '{{int:editsection}}' bleu en haut de chaque section.",
	'notification-gettingstarted-start-editing' => '{{SITENAME}} est une encyclopédie libre écrite par des gens comme vous. [[Special:GettingStarted|Débutez]] en effectuant votre première modification !',
	'notification-gettingstarted-start-editing-email-subject' => "Débuter avec l'édition sur {{SITENAME}}",
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} est une encyclopédie libre écrite par des gens comme vous. Commencer par faire votre première modification !

Visitez $2 pour obtenir la liste des astuces pour améliorer les pages.

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => "Débuter avec l'édition sur {{SITENAME}} en visitant $2",
	'notification-gettingstarted-continue-editing' => 'Beau travail ! Vous avez fait votre première contribution sur {{SITENAME}}. Si vous cherchez à faire plus, voici quelques [[Special:GettingStarted|manières faciles d’aider]].',
	'notification-gettingstarted-continue-editing-email-subject' => "Manières simples d'améliorer {{SITENAME}}",
	'notification-gettingstarted-continue-editing-text-email-body' => 'Très beau travail ! Vous avez déjà fait vos premières modifications à {{SITENAME}}.

Si vous cherchez à faire plus, il y a une liste de méthodes simples pour aider à  $2

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Vous cherchez à faire plus ? Visitez $2 pour obtenir la liste des astuces pour aider.',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'gettingstarted' => 'Por emmodar',
	'gettingstarted-welcomesiteuser' => 'Benvegnua dessus $1, $2 !',
	'gettingstarted-welcomesiteuseranon' => 'Benvegnua dessus $1 !',
	'gettingstarted-return' => 'Nan, bien grant-marci, ramenâd-mè de yô que vegno',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'gettingstarted' => 'Primeiros pasos',
	'gettingstarted-desc' => 'Engade unha [[Special:GettingStarted|páxina de benvida]] aos novos usuarios (móstrase despois da creación da conta)',
	'gettingstarted-welcomesiteuser' => '{{GENDER:$2|Benvido|Benvida}} a $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Primeiros pasos',
	'gettingstarted-welcome-back-site-user' => '{{GENDER:$2|Benvido|Benvida}} de volta, $2',
	'gettingstarted-task-header' => 'Busca un modo sinxelo de comezar? Escolla unha páxina dalgunha das tres listas inferiores.',
	'gettingstarted-return' => '← Non, grazas; volver a onde estaba',
	'gettingstarted-project-link' => '{{ns:Project}}:Primeiros pasos',
	'tag-gettingstarted_edit' => '[[Special:Tags|Etiqueta]]: Novo editor dando os [[{{MediaWiki:gettingstarted-project-link}}|primeiros pasos]]',
	'tag-gettingstarted_edit-description' => 'Modificación dunha páxina que o usuario elixiu desde a lista de tarefas dos [[Special:GettingStarted|primeiros pasos]]',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Corrixir a gramática e a ortografía',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Estas páxinas teñen un formato decente, pero algunhas persoas cren que poden estar mellor. A ver se vostede pode mellorar a gramática, a ortografía e o estilo.',
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Mellorar a claridade',
	'guidedtour-tour-gettingstartedpage-clarification-description' => 'Outras persoas marcaron estas páxinas como confusas, pouco claras ou imprecisas. Poida que sexa a páxina ao completo a que necesite correccións ou que só sexa unha oración. Non ten que ser experto na materia, simplemente intente facer que as cousas sexan máis fáciles de entender.',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Engadir ligazóns entre as páxinas',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Todas as ligazóns entre as páxinas de {{SITENAME}} engádense á man, e estas páxinas non teñen as suficientes ligazóns. Basta con engadir dous corchetes ao redor dos temas clave durante a edición; así se creará unha ligazón cara á páxina de {{SITENAME}} relevante.',
	'notification-gettingstarted-start-editing' => '{{SITENAME}} é unha enciclopedia libre escrita por xente coma vostede. [[Special:GettingStarted|Empece]] facendo a súa primeira edición!',
	'notification-gettingstarted-start-editing-email-subject' => 'Empece a editar {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} é unha enciclopedia libre escrita por xente coma vostede. Empece facendo a súa primeira edición!

Visite $2 para ver unha lista dos modos máis fáciles de mellorar as páxinas.

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Dea os primeiros pasos coa edición en {{SITENAME}} visitando $2',
	'notification-gettingstarted-continue-editing' => 'Bo traballo! Xa fixo as primeiras edicións en {{SITENAME}}. Se busca algo máis que facer, aquí hai outros [[Special:GettingStarted|modos fáciles de axudar]].',
	'notification-gettingstarted-continue-editing-email-subject' => 'Modos fáciles de mellorar {{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Bo traballo! Xa fixo as primeiras edicións en {{SITENAME}}.

Se busca algo máis que facer, hai unha lista dos modos fáciles de axudar en $2

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Busca facer algo máis? Visite $2 para ver unha lista de modos fáciles de axudar.',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author אור שפירא
 */
$messages['he'] = array(
	'gettingstarted' => 'איך להתחיל',
	'gettingstarted-desc' => 'הוספת [[Special:GettingStarted|דף "ברוך בואך"]] למשתמשים חדשים (מוצג אחרי יצירת החשבון)',
	'gettingstarted-welcomesiteuser' => 'ברוך בואך אל $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'איך לתהחיל',
	'gettingstarted-welcome-back-site-user' => 'ברוך שובך, $2',
	'gettingstarted-task-header' => 'תהית איך אפשר להתחיל בקלות? רק צריך לבחור דף מתוך אחד משלושת הרשימות להלן.', # Fuzzy
	'gettingstarted-return' => '→ לא תודה, קחו אותי חזרה', # Fuzzy
	'gettingstarted-project-link' => '{{ns:Project}}:התחלה',
	'tag-gettingstarted_edit' => '[[Special:Tags|Tag]]: עורך חדש [[{{MediaWiki:gettingstarted-project-link}}|מתחיל לעבוד]]',
	'tag-gettingstarted_edit-description' => 'עריכה של דף שהמשתמש בחר מתוך רשימת מטלות בדף [[Special:GettingStarted|איך להתחיל]]',
	'gettingstarted-task-copyedit-main-description' => 'תיקון דקדוק וכתיב', # Fuzzy
	'gettingstarted-task-clarify-main-description' => 'שיפור הבהירות', # Fuzzy
	'notification-gettingstarted-start-editing' => '{{SITENAME}} היא אנציקלופדיה חופשית שנכתבה על ידי אנשים כמוך. [[מיוחד:GettingStarted|להתחיל]] בביצוע העריכה הראשונה שלך!', # Fuzzy
	'notification-gettingstarted-start-editing-email-subject' => 'להתחיל עם עריכת {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} היא אנציקלופדיה חופשית שנכתבה על ידי אנשים כמוך.התחל את העריכה הראשונה שלך!

בקר $2 לקבלת רשימה של דרכים קלות כדי לשפר דפים.

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'להתחיל בעריכת {{SITENAME}} על-ידי ביקור ב$2',
	'notification-gettingstarted-continue-editing' => 'עבודה טובה! ביצעת את העריכה הראשונה שלך ב{{SITENAME}}. אם אתה מחפש עוד דברים לעשות, הנה כמה [[מיוחדים: GettingStarted|easy דרכים לסייע]].', # Fuzzy
	'notification-gettingstarted-continue-editing-email-subject' => 'דרכים קלות כדי לשפר את {{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-body' => 'עבודה טובה! ביצעת את העריכה הראשונה ב{{SITENAME}}.

אם אתה מחפש עוד דברים לעשות, רשימה של דרכים קלות לסייע נמצאת ב$2 

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'מחפש עוד לעשות? בקר ב$2 לקבלת רשימה של דרכים קלות לעזור.',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'gettingstarted' => 'Prěnje kroki',
	'gettingstarted-desc' => 'Přidawa [[Special:GettingStarted|witansku stronu]] za nowych wužiwarjow, kotraž so po załoženju konta pokazuje',
	'gettingstarted-welcomesiteuser' => 'Witaj do $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Prěnje kroki',
	'gettingstarted-welcome-back-site-user' => 'Witaj wróćo, $2',
	'gettingstarted-return' => 'Ně, dźakuju so, dźi wróćo',
	'gettingstarted-project-link' => '{{ns:Project}}:Prěnje kroki',
	'tag-gettingstarted_edit' => '[[Special:Tags|Značka]]: [[{{MediaWiki:gettingstarted-project-link}}|Prěnje kroki]] noweho wobdźěłarja',
	'tag-gettingstarted_edit-description' => 'Změna strony, kotruž wužiwar je z lisćiny nadawkow ze strony [[Special:GettingStarted|Prěnje kroki]] wubrał',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Gramatiku a prawopis korigować',
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Jasnosć polěpšić',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Strony ze sobu zwjazać',
);

/** Hungarian (magyar)
 * @author Tgr
 */
$messages['hu'] = array(
	'gettingstarted' => 'Első lépések',
	'gettingstarted-desc' => 'Egy [[Special:GettingStarted|üdvözlőlapot]] mutat az új felhasználóknak a regisztráció után',
	'gettingstarted-msg' => 'Ezt az oldalt a {{SITENAME}} adminisztrátorai tudják tartalommal megtölteni, a [[{{ns:MediaWiki}}:gettingstarted-msg]] lap átírásával.',
	'gettingstarted-welcomesiteuser' => 'Üdvözlünk a $1 oldalain, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Üdvözlünk a $1 oldalain!',
	'gettingstarted-return' => 'Nem érdekel, vissza az előző oldalra',
	'gettingstarted-project-link' => '{{ns:Project}}:Első lépések',
	'tag-gettingstarted_edit' => '[[Special:Tags|Címke]]: új szerkesztő [[{{MediaWiki:gettingstarted-project-link}}|első lépései]]',
	'tag-gettingstarted_edit-description' => 'A [[Special:GettingStarted|Speciális:Első lépések]] listáról választott oldal szerkesztése', # Fuzzy
);

/** Armenian (Հայերեն)
 * @author Vadgt
 */
$messages['hy'] = array(
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Ստեղծել հղումը', # Fuzzy
);

/** Indonesian (Bahasa Indonesia)
 * @author Farras
 * @author Iwan Novirion
 */
$messages['id'] = array(
	'gettingstarted' => 'Memulai',
	'gettingstarted-desc' => 'Menambahkan [[Special:GettingStarted|halaman selamat datang]] untuk pengguna baru (ditampilkan setelah membuat akun)',
	'gettingstarted-msg' => 'Seorang pengurus {{SITENAME}} harus mengubah pesan ini dengan menyunting pesan sistem [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Selamat datang di $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Selamat datang di $1!',
	'gettingstarted-return' => 'Tidak, terima kasih. Bawa saya kembali', # Fuzzy
);

/** Italian (italiano)
 * @author Beta16
 * @author Gianfranco
 */
$messages['it'] = array(
	'gettingstarted' => 'Guida introduttiva',
	'gettingstarted-desc' => "Aggiunge una [[Special:GettingStarted|pagina di benvenuto]] per i nuovi utenti (mostrata dopo la creazione dell'account)",
	'gettingstarted-welcomesiteuser' => 'Benvenuto su $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Guida introduttiva',
	'gettingstarted-welcome-back-site-user' => 'Bentornato, $2',
	'gettingstarted-task-header' => "Grazie per esserti registrato su {{SITENAME}}! Qui ci sono alcune cose che potresti fare.

Scegli un'opzione qui sotto e vedrai una voce casuale che ha bisogno di aiuto.",
	'gettingstarted-return' => '← No grazie, ritorna alla pagina che stavo leggendo',
	'gettingstarted-project-link' => '{{ns:Project}}:Guida introduttiva',
	'tag-gettingstarted_edit' => '[[Special:Tags|Tag]]: nuovo contributore dalla [[{{MediaWiki:gettingstarted-project-link}}|guida introduttiva]]',
	'tag-gettingstarted_edit-description' => "Modifica di una pagina che l'utente ha scelto dall'elenco delle attività nella [[Special:GettingStarted|guida introduttiva]]",
	'gettingstarted-task-copyedit-main-description' => 'Correggi ortografia e grammatica',
	'gettingstarted-task-clarify-main-description' => 'Migliora la chiarezza',
	'notification-gettingstarted-start-editing' => "{{SITENAME}} è un'enciclopedia libera, scritta da persone come te.
[[Special:GettingStarted|Inizia]] facendo la tua prima modifica!",
	'notification-gettingstarted-start-editing-email-subject' => 'Inizia a modificare {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => "{{SITENAME}} è un'enciclopedia libera, scritta da persone come te. Inizia facendo la tua prima modifica!

Visita $2 per avere un'elenco di semplici consigli per migliorare le pagine.

$3",
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Inizia a modificare {{SITENAME}} visitando $2',
	'notification-gettingstarted-continue-editing' => 'Bel lavoro! Hai già fatto le tue prime modifiche a {{SITENAME}}. Se stai cercando altro da fare, ecco alcuni [[Special:GettingStarted|semplici consigli per aiutare]].',
	'notification-gettingstarted-continue-editing-email-subject' => 'Semplici consigli per migliorare {{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Bel lavoro! Hai già fatto le tue prime modifiche a {{SITENAME}}.

Se stai cercando altro da fare, puoi trovare alcuni semplici consigli per aiutare su $2.

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => "Cerchi altro da fare? Visita $2 per un'elenco di alcuni semplici consigli per aiutare.",
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'gettingstarted-desc' => '新しい利用者向けに[[Special:GettingStarted|ようこそページ]]を追加する (アカウント作成した際に表示される)',
	'gettingstarted-welcomesiteuser' => '$2さん、$1へようこそ!',
	'gettingstarted-welcomesiteuseranon' => '$1へようこそ!', # Fuzzy
	'gettingstarted-welcome-back-site-user' => '$2さん、おかえりなさい',
	'gettingstarted-return' => '← 不要です。元の場所に戻ります', # Fuzzy
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	'tag-gettingstarted_edit-description' => '利用者が [[Special:GettingStarted|Getting started]] のタスク一覧から選択したページの編集',
	'gettingstarted-task-copyedit-main-description' => 'スペルや文法の修正',
	'gettingstarted-task-addlinks-main-description' => 'リンクの追加',
	'gettingstarted-task-addlinks-secondary-description' => '{{SITENAME}}の記事同士を繋ぐ。',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ 一覧に戻る',
	'gettingstarted-task-toolbar-return-to-list-title' => '記事一覧に戻る',
	'gettingstarted-task-toolbar-editing-help-text' => 'ヘルプを表示',
	'gettingstarted-task-toolbar-editing-help-title' => '編集方法のガイドを表示する',
	'gettingstarted-task-toolbar-try-another-text' => '別の記事に挑戦 ►',
	'gettingstarted-task-toolbar-close-title' => 'このツールバーを閉じる',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => '{{int:vector-view-edit}}をクリック',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'ここをクリックして、記事全体を編集できます。',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => '節の編集',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'gettingstarted-welcomesiteuser' => 'მოგესალმებით $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'მუშაობის დაწყება',
	'gettingstarted-return' => '← არა გმადლობთ, დამაბრუნეთ უკან სადაც ვიყავი',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'gettingstarted' => '시작하기',
	'gettingstarted-desc' => '새 사용자를 위한 [[Special:GettingStarted|환영 문서]]를 추가합니다 (계정을 만들고 나서 나타납니다)',
	'gettingstarted-welcomesiteuser' => '$2님, $1에 오신 것을 환영합니다!',
	'gettingstarted-welcomesiteuseranon' => '시작하기',
	'gettingstarted-welcome-back-site-user' => '$2님, 다시 오신 것을 환영합니다',
	'gettingstarted-task-header' => '시작하는 쉬운 방법을 찾고 계십니까? 아래 세 목록 중 하나에서 문서를 선택하세요.',
	'gettingstarted-return' => '← 괜찮습니다, 있던 곳으로 돌아갑니다',
	'gettingstarted-project-link' => '{{ns:Project}}:시작하기',
	'tag-gettingstarted_edit' => '[[Special:Tags|태그]]: 새 편집자 [[{{MediaWiki:gettingstarted-project-link}}|시작하기]]',
	'tag-gettingstarted_edit-description' => '사용자가 [[Special:GettingStarted|시작하기]]에 작업 목록에서 선택한 문서의 편집',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => '문법과 맞춤법 고치기',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => '몇몇 문서는 괜찮은 모습이지만 어떤 사람은 더 나은 모습으로 될 수 있는 것을 느꼈습니다. 문법, 맞춤법과 스타일을 향상시킬 수 있는지 확인하세요.',
	'guidedtour-tour-gettingstartedpage-clarification-title' => '명확성 향상',
	'guidedtour-tour-gettingstartedpage-clarification-description' => '다른 사람은 혼란스럽고 불분명하거나 모호한 몇몇 문서에 태그합니다. 고치거나 문장이 필요한 전체 문서일 수 있습니다. 주제에 전문가일 필요는 없으며 이해하기 더 쉽게 만드세요.',
	'guidedtour-tour-gettingstartedpage-add-links-title' => '같이 문서 링크',
	'guidedtour-tour-gettingstartedpage-add-links-description' => '{{SITENAME}} 문서 사이의 모든 링크는 직접 추가하며 몇몇 문서는 충분한 링크가 없습니다. 편집할 때 주요 주제에 두 대괄호를 추가하면 관련된 {{SITENAME}} 문서로 링크합니다.',
);

/** Kirghiz (Кыргызча)
 * @author Growingup
 */
$messages['ky'] = array(
	'gettingstarted' => 'Иштин башталышы',
	'gettingstarted-welcomesiteuser' => '$1 сайтына кош келиңиз, $2!',
	'gettingstarted-welcomesiteuseranon' => '$1 сайтына кош келиңиз!',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'gettingstarted' => 'Fir unzefänken',
	'gettingstarted-desc' => 'Setzt eng [[Special:GettingStarted|Begréissungssäit]] fir nei Benotzer derbäi (gëtt nom Opmaache vum Benotzerkont gewisen)',
	'gettingstarted-welcomesiteuser' => 'Wëllkomm op $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Wëllkomm op $1!',
	'gettingstarted-return' => 'Nee Merci, bréngt mech zréck',
	'gettingstarted-project-link' => '{{ns:Project}}:Fir unzefänken',
	'tag-gettingstarted_edit-description' => 'Eng Säit änneren déi de Benotzer aus der Lëscht op [[Special:GettingStarted|Ufänken]] eraussicht',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'gettingstarted-welcomesiteuser' => 'Sveiki atvykę į $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Sveiki atvykę į $1!',
);

/** Latvian (latviešu)
 * @author Admresdeserv.
 */
$messages['lv'] = array(
	'notification-gettingstarted-start-editing-email-subject' => 'Iepazīsties ar {{SITENAME}} rediģēšanas',
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Iepazīsties ar {{SITENAME}} rediģēšanu apmeklējot $2',
);

/** Minangkabau (Baso Minangkabau)
 * @author Iwan Novirion
 */
$messages['min'] = array(
	'gettingstarted' => "Ba'a ka mulai",
	'gettingstarted-desc' => 'Manambahkan [[Special:GettingStarted|laman salamaik datang]] untuak pangguno baru (langsuang nampak salasai mambuek akun)',
	'gettingstarted-welcomesiteuser' => 'Salamaik datang di $1, $2!',
	'gettingstarted-welcomesiteuseranon' => "Ba'a ka mulai",
	'gettingstarted-welcome-back-site-user' => 'Apo kaba, $2?',
	'gettingstarted-task-header' => "Mancari caro mudah ba'a ka mulai? Piliahlah sabuah laman dari daftar dibawah ko.",
	'gettingstarted-return' => 'Mokasih sajolah, bawok Ambo baliak',
	'gettingstarted-project-link' => "{{ns:Project}}:Ba'a ka mulai",
	'tag-gettingstarted_edit' => "[[Special:Tags|Tag]]: pangguno baru [[{{MediaWiki:gettingstarted-project-link}}|ba'a ka mulai]]",
	'tag-gettingstarted_edit-description' => "Suntiangan laman nan pangguno piliah dari daftar tugas pado [[Special:GettingStarted|Ba'a ka mulai]]",
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Pelokan tata bahaso jo ejaan',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Laman ko lah dalam bantuak nan layak, tapi urang lain maraso alun layak lai. Pariso kok Sanak dapek maningkekan tata bahaso, ejaan, jo gayanyo.',
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Tingkekan kajalehan',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'gettingstarted' => 'Како да почнете',
	'gettingstarted-desc' => 'Става [[Special:GettingStarted|страница за добре дојде]] за новите корисници (се прикажува откако ќе ја направат сметката)',
	'gettingstarted-welcomesiteuser' => 'Добре дојдовте на $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Како да почнете',
	'gettingstarted-welcome-back-site-user' => 'Добре дојдвте повторно, $2',
	'gettingstarted-task-header' => 'Сакате лесен начин да почнете? Изберете страница од трите списоци подолу.',
	'gettingstarted-return' => '← Не благодарам. Врати ме назад',
	'gettingstarted-project-link' => '{{ns:Project}}:ПрвиЧекори',
	'tag-gettingstarted_edit' => '[[Special:Tags|Ознака]]: нов уредник [[{{MediaWiki:gettingstarted-project-link}}|почнува со работа]]',
	'tag-gettingstarted_edit-description' => 'Уредување на страница што корисникот ја одбрал од списокот на задачи на [[Special:GettingStarted|Први чекори]]',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Исправка на граматика и правопис',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Странициве се пристојни, но некои сметаат дека треба да бидат подобри. Потрудете се да ги подобрите граматиката, правописот и стилот.',
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Текстот треба да биде појасен',
	'guidedtour-tour-gettingstartedpage-clarification-description' => 'Корисниците ги означија странициве како збунителни, нејасни или неточни. Ова може да се однесува целата страница, или пак само една реченица. Не ви требаат стручни познавања од темата - само потрудете се страницата да биде поразбирлива.',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Меѓусебно поврзување на страници',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Секоја врска помеѓу страниците на {{SITENAME}} се става рачно, а овие страници немаат доволно врски. Ставете им двојни квадратни загради на тематски битните зборови кога уредувате - со ова зборот ќе води до релевантната страница на {{SITENAME}} за тој поим.',
	'notification-gettingstarted-start-editing' => '{{SITENAME}} е слободна енциклопедија што ја пишуваат луѓе како вас. [[Special:GettingStarted|Почнете]] со вашето прво уредување!',
	'notification-gettingstarted-start-editing-email-subject' => 'Започнете со уредување на {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} е слободна енциклопедија што ја пишуваат луѓе како вас. Почнете со вашето прво уредување!

Список на лесни начини да ги подобрите страниците ќе најдете на $2.

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Почнете да уредувате на {{SITENAME}}, посетувајќи ја страницата $2',
	'notification-gettingstarted-continue-editing' => 'Одлично! Веќе ги направивте првите уредувања на {{SITENAME}}. Ако барате уште работа, еве некои [[Special:GettingStarted|лесни начини да помогнете]].',
	'notification-gettingstarted-continue-editing-email-subject' => 'Лесни начини да ја подобрите {{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Одлично! Веќе ги направивте привите уредувања на {{SITENAME}}.

Ако сакате уште работа, еве список на лесни начини да помагате: $2

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Сакате уште работа? Лесни начини да помогнете ќе најдете на $2.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'gettingstarted' => 'Permulaan',
	'gettingstarted-desc' => 'Meletakkan [[Special:GettingStarted|halaman selamat datang]] untuk pengguna baru (dipaparkan selepas pembukaan akaun)',
	'gettingstarted-welcomesiteuser' => 'Selamat datang ke $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Permulaan',
	'gettingstarted-welcome-back-site-user' => 'Selamat kembali, $2',
	'gettingstarted-task-header' => 'Ingin mencari jalan mudah untuk bermula? Pilih sahaja satu halaman dari mana-mana dalam tiga senarai yang berikut.',
	'gettingstarted-return' => '← Tak apalah, bawa saya kembali ke tempat asal',
	'gettingstarted-project-link' => '{{ns:Project}}:Permulaan',
	'tag-gettingstarted_edit' => '[[Special:Tags|Teg]]: penyunting baru [[{{MediaWiki:gettingstarted-project-link}}|hendak bermula]]',
	'tag-gettingstarted_edit-description' => 'Suntingan halaman yang dipilih oleh pengguna dari senarai tugas dalam [[Special:GettingStarted|Permulaan]]',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Betulkan tatabahasa & ejaan',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Halaman-halaman ini sudah elok bentuknya, tetapi sesentengah pihak berpendapat bahawa peningkatan masih diperlukan. Sila cuba memperbaiki tatabahasa, ejaan dan gaya penulisannya.',
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Perbaiki kejelasan',
	'guidedtour-tour-gettingstartedpage-clarification-description' => 'Halaman-halaman ini telah diadukan oleh pihak lain atas sebab mengelirukan, kurang jelas atau kabur. Mungkin seluruh isi halaman yang perlu diperbaiki, tidak pun hanya sebaris ayat. Anda tidak semestinya menjadi pakar dalam topik, sebaliknya hanya diharap untuk cuba mempermudah kefahaman pembaca.',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Pautkan halaman bersama-sama',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Setiap pautan antara halaman {{SITENAME}} ditambah secara insani, tetapi halaman-halaman ini pula kekurangan pautan. Hanya bubuh dua pasang tanda kurung siku untuk mengapit topik penting apabila menyunting supaya ia akan dipautkan dengan halaman yang berkenaan di {{SITENAME}}.',
	'notification-gettingstarted-start-editing' => '{{SITENAME}} merupakan sebuah ensiklopedia bebas yang dikarang oleh orang ramai seperti anda. [[Special:GettingStarted|Mulakan]] dengan membuat sumbangan pertama anda!', # Fuzzy
	'notification-gettingstarted-start-editing-email-subject' => 'Bermula dengan menyunting {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => 'Setiap pautan antara halaman {{SITENAME}} ditambah secara insani, tetapi halaman-halaman ini pula kekurangan pautan. Hanya bubuh dua pasang tanda kurung siku untuk mengapit topik penting apabila menyunting supaya ia akan dipautkan dengan halaman yang berkenaan di {{SITENAME}}.

Layari $2 untuk senarai cara-cara yang mudah untuk menambah baik halaman.

$3', # Fuzzy
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Belajar menyunting di {{SITENAME}} dengan melayari $2',
	'notification-gettingstarted-continue-editing' => 'Cantik! Anda sudah pun membuat suntingan sulung anda di {{SITENAME}}. Jika anda ingin mencari kerja lain, yang berikut adalah beberapa [[Special:GettingStarted|cara yang mudah untuk menyumbang]].', # Fuzzy
	'notification-gettingstarted-continue-editing-email-subject' => 'Cara mudah untuk menambah baik {{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Cantik! Anda sudah pun membuat suntingan sulung anda di {{SITENAME}}.

Jika anda ingin mencari kerja lain, terdapat pelbagai cara yang mudah untuk membantu di $2

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Ingin mencari kerja lain? Layari $2 untuk pelbagai cara yang mudah untuk membantu.',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'gettingstarted' => 'Gwida introduttorja',
	'gettingstarted-desc' => "Iżżid [[Special:GettingStarted|paġna ta' merħba]] għal utenti ġodda (murija wara l-ħolqien tal-kont)",
	'gettingstarted-msg' => 'Amministratur fuq {{SITENAME}} għandu jirranġa dan il-messaġġ billi jimmodifika lil [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Merbħa fuq $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Merbħa fuq $1!',
	'gettingstarted-return' => 'Le grazzi, ħudni lura',
);

/** Dutch (Nederlands)
 * @author Konovalov
 * @author Siebrand
 */
$messages['nl'] = array(
	'gettingstarted' => 'Aan de slag',
	'gettingstarted-desc' => 'Voegt een [[Special:GettingStarted|welkomstpagina]] voor nieuwe gebruikers toe na registereren',
	'gettingstarted-welcomesiteuser' => 'Welkom bij $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Aan de slag',
	'gettingstarted-welcome-back-site-user' => 'Welkom terug, $2',
	'gettingstarted-task-header' => 'Bedankt voor het registreren bij {{SITENAME}}! Hier zijn een aantal manieren waarop u mee kunt doen.

Kies een van de onderstaande mogelijkheden voor een willekeurige pagina die uw hulp nodig heeft.',
	'gettingstarted-return' => '← Nee bedankt. Ik wil graag terug naar waar ik vandaan kom',
	'gettingstarted-project-link' => '{{ns:Project}}:Aan de slag',
	'tag-gettingstarted_edit' => '[[Special:Tags|Label]]: nieuwe bewerker [[{{MediaWiki:gettingstarted-project-link}}|aan de slag]]',
	'tag-gettingstarted_edit-description' => 'Bewerking aan een pagina die de gebruiker heeft gekozen uit de takenlijst op [[Special:GettingStarted|aan de slag]]',
	'gettingstarted-task-copyedit-main-description' => 'Grammatica en spelling corrigeren',
	'gettingstarted-task-copyedit-secondary-description' => 'De eenvoudigste manier om aan de slag te gaan!',
	'gettingstarted-task-clarify-main-description' => 'Duidelijkheid verbeteren',
	'gettingstarted-task-clarify-secondary-description' => 'Zinnen vereenvoudigen of anders verwoorden.',
	'gettingstarted-task-addlinks-main-description' => 'Koppelingen toevoegen',
	'gettingstarted-task-addlinks-secondary-description' => "Koppel pagina's van {{SITENAME}} aan elkaar.",
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Terug naar lijst',
	'gettingstarted-task-toolbar-return-to-list-title' => "Terug naar de lijst met pagina's",
	'gettingstarted-task-toolbar-editing-help-text' => 'Hulp weergeven',
	'gettingstarted-task-toolbar-editing-help-title' => 'Gids weergeven over hoe u kunt bewerken',
	'gettingstarted-task-toolbar-try-another-text' => 'Andere pagina proberen ►',
	'gettingstarted-task-toolbar-close-title' => 'Werkbalk sluiten',
	'gettingstarted-task-copyedit-toolbar-description' => 'Deze pagina heeft spel- en grammaticafouten die u kunt corrigeren.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Ga naar een willekeurige pagina die u kunt verbeteren door redactie uit te voere',
	'gettingstarted-task-clarify-toolbar-description' => 'Deze pagina is verwarrend of vaag. Probeer de tekst duidelijker te maken.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Ga naar een willekeurig pagina die u kunt verduidelijken',
	'gettingstarted-task-addlinks-toolbar-description' => 'Op deze pagina zijn meer koppelingen nodig. Zoek naar termen die een pagina hebben op {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Ga naar een willekeurig pagina waar u koppelingen aan kunt toevoegen',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Hoe u aan de slag kunt gaan',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Wat u kunt doen',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Klik op {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'U kunt de hele pagina bewerken door hier te klikken.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Een paragraaf bewerken',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Als u een bepaalde paragraaf wilt bewerken, kunt u klikken op de blauwe koppeling "{{int:editsection}}" bovenaan iedere paragraaf.',
	'notification-gettingstarted-start-editing' => '{{SITENAME}} is een vrije encyclopedie geschreven door mensen zoals u. [[Special:GettingStarted|Ga aan de slag]] door uw eerste bewerking te maken!',
	'notification-gettingstarted-start-editing-email-subject' => 'Aan de slag met het bewerken van {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => "{{SITENAME}} is een vrije encyclopedie geschreven door mensen zoals u. Ga aan de slag door uw eerste bewerking te maken!

Ga naar $2 voor een lijst van eenvoudige manieren om pagina's te verbeteren.

$3",
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Ga naar de volgende pagina om aan de slag te gaan met het bewerken van {{SITENAME}}: $2',
	'notification-gettingstarted-continue-editing' => 'Mooi werk! U hebt nu al uw eerste bijdragen gemaakt aan {{SITENAME}}. Als u meer zoekt om te doen, dan zijn er nog [[Special:GettingStarted|meer eenvoudige manieren om te helpen]].',
	'notification-gettingstarted-continue-editing-email-subject' => 'Eenvoudige manieren om {{SITENAME}} te verbeteren',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Mooi werk! U hebt nu al uw eerste bijdragen gemaakt aan {{SITENAME}}.

Als u meer zoekt om te doen, dan vindt u hier nog meer eenvoudige manieren om bij te dragen: $2

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Zoekt u nog meer te doen? Volg deze koppeling voor een lijst met eenvoudige manieren om te helpen: $2',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'gettingstarted' => 'Për ancaminé',
	'gettingstarted-desc' => "A gionta na [[Special:GettingStarted|pàgina ëd bin-ëvnù]] për j'utent neuv (smonùa apress la creassion dël cont)",
	'gettingstarted-welcomesiteuser' => 'Bin-ëvnù su $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Bin ëvnù a $1!', # Fuzzy
	'gettingstarted-return' => 'Nò mersì, pòrtme andré', # Fuzzy
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	'tag-gettingstarted_edit' => "[[Special:Tags|Tichëtta]]: n'editor neuv [[{{MediaWiki:gettingstarted-project-link}}|a l'ha ancaminà]]",
	'tag-gettingstarted_edit-description' => "Modìfica ëd na pàgina che l'utent a sern da la lista dij travaj an [[Special:GettingStarted|Për ancaminé]]",
);

/** Brazilian Portuguese (português do Brasil)
 * @author Raylton P. Sousa
 */
$messages['pt-br'] = array(
	'gettingstarted' => 'Primeiros passos',
	'gettingstarted-desc' => 'Adiciona uma página de [[Special:GettingStarted|boas vindas]] para novos usuários(exibido após a criação da conta)',
	'gettingstarted-welcomesiteuser' => '{{GENDER:$2|Bem-vindo|Bem-vinda|Bem-vindo(a)}} a $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Primeiros passos',
	'gettingstarted-welcome-back-site-user' => 'Bem-vindo de volta, $2',
	'gettingstarted-task-header' => 'Procurando uma maneira fácil de começar? Basta escolher uma página de uma das três listas abaixo.',
	'gettingstarted-return' => '← Não, obrigado, volte para onde estava',
	'gettingstarted-project-link' => '{{ns:Project}}:PrimeirosPassos',
);

/** Romanian (română)
 * @author Firilacroco
 */
$messages['ro'] = array(
	'gettingstarted' => 'Primii pași',
	'gettingstarted-welcomesiteuser' => 'Bine ați venit la $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Bine ați venit la $1!',
	'gettingstarted-return' => 'Nu, mulțumesc, du-mă înapoi',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'gettingstarted' => 'Pe accumenzà',
	'gettingstarted-welcomesiteuser' => 'Bovègne sus a, $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Pe accumenzà',
	'gettingstarted-welcome-back-site-user' => 'Bovègne arrete, $2',
	'gettingstarted-return' => '← No grazie, tuèrne rrete addò stave', # Fuzzy
	'gettingstarted-project-link' => '{{ns:Project}}:Pe accumenzà',
	'gettingstarted-task-copyedit-main-description' => 'Corregge grammateche & pronunge', # Fuzzy
	'gettingstarted-task-clarify-main-description' => "Migliore 'a chiarezze", # Fuzzy
	'notification-gettingstarted-start-editing-email-subject' => 'Accuminze a cangià {{SITENAME}}',
	'notification-gettingstarted-continue-editing-email-subject' => 'Mode facile pe migliorà {{SITENAME}}',
);

/** Russian (русский)
 * @author Ole Yves
 */
$messages['ru'] = array(
	'gettingstarted' => 'Приступая к работе',
	'gettingstarted-desc' => 'Добавляет [[Special:GettingStarted|страницу приветствия]] для новых участников (показывается после создания учётной записи)',
	'gettingstarted-msg' => 'Администратор {{SITENAME}} должен настроить это сообщение правкой [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Добро пожаловать в $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Добро пожаловать в $1!',
	'gettingstarted-return' => 'Нет, спасибо, верните меня обратно',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'gettingstarted' => 'දැන් අරඹමු',
	'gettingstarted-welcomesiteuser' => '$1 වෙත පිළිගනිමු, $2!',
	'gettingstarted-welcomesiteuseranon' => '$1 වෙත පිළිගනිමු!',
);

/** Swedish (svenska)
 * @author Ainali
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'gettingstarted' => 'Komma igång',
	'gettingstarted-desc' => 'Lägger till en [[Special:GettingStarted|välkomstsida]] för nya användare (visas efter kontot har skapats)',
	'gettingstarted-welcomesiteuser' => 'Välkommen till $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Komma igång',
	'gettingstarted-return' => 'Nej tack, gå tillbaka där jag var',
	'gettingstarted-project-link' => '{{ns:Project}}:Komigång',
	'tag-gettingstarted_edit' => '[[Special:Tags|Tagg]]: ny bidragsgivare [[{{MediaWiki:gettingstarted-project-link}}|kom i gång]]',
	'tag-gettingstarted_edit-description' => 'Redigering av en sida som användaren valde från listan i [[Special:GettingStarted|Kom i gång]]',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Länka ihop sidor',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Har du någonsin av misstag använt två timmar att klicka runt på {{SITENAME}}? Vi har gjort det. Välj en av dessa sidor och leta efter potentiella länkar till andra. Klicka på {{int:vector-view-edit}} fliken för att lägga till dem!', # Fuzzy
);

/** Tamil (தமிழ்)
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'gettingstarted-welcomesiteuser' => '$1-க்கு வருக, $2!',
	'gettingstarted-welcomesiteuseranon' => '$1-க்கு வருக!',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'gettingstarted' => 'మొదలుపెట్టడం',
	'gettingstarted-msg' => '[[{{ns:MediaWiki}}:gettingstarted-msg]] ద్వారా {{SITENAME}} నిర్వాహకులు ఈ సందేశాన్ని మార్చవచ్చు.',
	'gettingstarted-welcomesiteuser' => '$1కి స్వాగతం, $2!',
	'gettingstarted-welcomesiteuseranon' => '$1కి స్వాగతం!',
	'gettingstarted-return' => 'వద్దు, నన్ను వెనక్కు తీసుకువెళ్ళు',
);

/** Ukrainian (українська)
 * @author Base
 * @author Ата
 */
$messages['uk'] = array(
	'gettingstarted' => 'Початок роботи',
	'gettingstarted-desc' => 'Додає [[Special:GettingStarted|вітальну сторінку]] для нових користувачів (показується після створення облікового запису)',
	'gettingstarted-msg' => 'Адміністраторам проекту {{SITENAME}} слід налаштувати це повідомлення, відредагувавши [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Вітаємо у проекті $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Вітаємо у проекті $1!',
	'gettingstarted-return' => 'Ні, дякую, поверніть мене назад',
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
);

/** Urdu (اردو)
 * @author Noor2020
 */
$messages['ur'] = array(
	'notification-gettingstarted-start-editing' => '{{SITENAME}} آپ جیسے لوگوں کی طرف سے لکھا گیا ایک آزاد دائرۃ المعارف ہے ۔[[Special:GettingStarted|Get started]] آپ کی طرف سے پہلی ترمیم کے نتیجے میں !',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} آپ جیسے لوگوں کی طرف سے لکھا گیا ایک آزاد دائرۃ المعارف ہے ۔ آپ سب سے پہلے تدوین بنا کر شروع کریں !

ملاحظہ کریں $2 کو تا کہ فہرست دیکھ سکیں آسان طریقۂ کار

$3',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'gettingstarted' => 'Bắt đầu',
	'gettingstarted-desc' => 'Thêm một [[Special:GettingStarted|trang hoan nghênh]] xuất hiện cho người dùng lúc khi mở tài khoản xong',
	'gettingstarted-welcomesiteuser' => 'Chào mừng $2 đến với $1!',
	'gettingstarted-welcomesiteuseranon' => 'Bắt đầu',
	'gettingstarted-welcome-back-site-user' => 'Chào mừng $2 đã trở lại',
	'gettingstarted-task-header' => 'Muốn bắt đầu một cách dễ dàng? Chỉ việc chọn một trang từ những danh sách ở dưới.',
	'gettingstarted-return' => 'Thôi, quay lại trang vừa rồi',
	'gettingstarted-project-link' => '{{ns:Project}}:Bắt đầu',
	'tag-gettingstarted_edit' => '[[Special:Tags|Thẻ]]: Người dùng mới đang [[{{MediaWiki:gettingstarted-project-link}}|bắt đầu]]',
	'tag-gettingstarted_edit-description' => 'Sửa đổi trang được gợi ý trong danh sách việc cần làm tại [[Special:GettingStarted|Bắt đầu]]',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Sửa ngữ pháp và chính tả',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Các trang ở dưới có vẻ được nhưng có người cảm thấy nó còn có khả năng cải tiến về chính tả, ngữ pháp, và văn phong. Mời bạn giúp đỡ!',
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Viết rõ hơn',
	'guidedtour-tour-gettingstartedpage-clarification-description' => 'Người ta đã đánh dấu các trang này là khó hiểu, không rõ, hoặc mơ hồ. Có thể cần sửa cả trang hoặc chỉ cần sửa một câu. Bạn không cần phải là chuyên gia về các đề tài này, chỉ cần cố gắng giải thích rõ hơn.',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Đặt liên kết giữa các trang',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Mỗi liên kết được bổ sung thủ công, và chúng tôi cần bạn giúp bằng cách thêm liên kết. Vào lúc sửa đổi, chỉ việc đưa những cụm từ quan trọng vào trong hai dấu ngoặc vuông mỗi bên để đặt liên kết đến trang với tên đó.',
	'notification-gettingstarted-start-editing' => '{{SITENAME}} là bách khoa toàn thư mở do công sức của nhiều người như bạn. Hãy [[Special:GettingStarted|bắt đầu đóng góp]] với thay đổi đầu tiên của bạn!',
	'notification-gettingstarted-start-editing-email-subject' => 'Bắt đầu sửa đổi {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} là bách khoa toàn thư mở do công sức của nhiều người như bạn. Hãy bắt đầu đóng góp với thay đổi đầu tiên của bạn!

Ghé vào $2 để xem danh sách những cách cải thiện trang dễ dàng.

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Hãy bắt đầu sửa đổi {{SITENAME}}: xem chi tiết tại $2',
	'notification-gettingstarted-continue-editing' => 'Cám ơn bạn đã bắt đầu sửa đổi {{SITENAME}}. Gợi ý xem một vài [[Special:GettingStarted|cách dễ dàng để tiếp tục đóng góp]].',
	'notification-gettingstarted-continue-editing-email-subject' => 'Những cách dễ dàng để cải thiện {{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Cám ơn bạn đã bắt đầu sửa đổi {{SITENAME}}.

Gợi ý xem danh sách những cách dễ dàng để tiếp tục đóng góp tại $2

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Muốn tiếp tục đóng góp? Gợi ý xem danh sách những cách dễ dàng để giúp đỡ tại $2 .',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hydra
 * @author Yfdyh000
 * @author Zhuyifei1999
 * @author 乌拉跨氪
 */
$messages['zh-hans'] = array(
	'gettingstarted' => '入门',
	'gettingstarted-desc' => '为新用户添加一个[[Special:GettingStarted|欢迎页面]]（在帐户创建后显示）',
	'gettingstarted-welcomesiteuser' => '欢迎来到$1，$2！',
	'gettingstarted-welcomesiteuseranon' => '入门指南',
	'gettingstarted-welcome-back-site-user' => '欢迎回来，$2',
	'gettingstarted-task-header' => '在寻找简单的方法入门吗？只需从下面三项的列表中选择一个页面。', # Fuzzy
	'gettingstarted-return' => '← 不必了，回到我原来的地方', # Fuzzy
	'gettingstarted-project-link' => '{{ns:Project}}:入门指南',
	'tag-gettingstarted_edit' => '[[Special:Tags|标签]]：新编者 [[{{MediaWiki:gettingstarted-project-link}}|入门]]',
	'tag-gettingstarted_edit-description' => '用户从[[Special:GettingStarted|入门指南]]任务列表上选择而作的编辑。',
	'gettingstarted-task-copyedit-main-description' => '纠正文法和拼写', # Fuzzy
	'gettingstarted-task-clarify-main-description' => '提高清晰度', # Fuzzy
	'notification-gettingstarted-start-editing' => '{{SITENAME}} 是由像你一样的人们撰写的一部自由的百科全书。[[Special:GettingStarted|开始]]尝试做你的第一次编辑吧！',
	'notification-gettingstarted-start-editing-email-subject' => '开始初次编辑{{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} 是像你一样的人们撰写的一部自由的百科全书。尝试做你的第一次编辑吧！

访问 $2 轻松获得待改善页面的名单。

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => '开始编辑 {{SITENAME}}，通过访问 $2',
	'notification-gettingstarted-continue-editing' => '干得好！你已经作出了你在{{SITENAME}}的第一次编辑。如果你还想寻找更多待完成的任务，前往[[Special:GettingStarted|这里]]获得帮助。',
	'notification-gettingstarted-continue-editing-email-subject' => '方便地改善{{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-body' => '干得好！你已经作出了你在{{SITENAME}}的第一次编辑

如果你还想寻找更多待完成的任务，前往 $2。

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => '想找更多事来做？访问 $2 获得需要帮助的名单。',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'gettingstarted' => '入門',
);
