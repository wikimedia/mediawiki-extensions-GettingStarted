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
	'tag-gettingstarted_edit' => 'new editor [[{{MediaWiki:gettingstarted-project-link}}|getting started]]',
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

	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'You can edit!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'You can now edit the page. When you\'re done, click \'{{int:visualeditor-toolbar-savedialog}}\' to review and save your changes.',

	// Notifications
	'notification-gettingstarted-link-text-get-started' => 'Get started',
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
	'gettingstarted' => '{{doc-special|GettingStarted}}
{{Identical|Getting started}}',
	'gettingstarted-desc' => '{{desc|name=Getting Started|url=http://www.mediawiki.org/wiki/Extension:GettingStarted}}',
	'gettingstarted-msg' => 'Blank message used to replace welcomecreation-msg.  Additional dynamically generated task HTML is injected',
	'gettingstarted-welcomesiteuser' => 'The title of the Getting Started page shown automatically to users after they create an account
* $1 - sitename
* $2 - username; GENDER is supported',
	'gettingstarted-welcomesiteuseranon' => 'The title of the Getting Started page for anonymous users who manually visit it.
The parameter is not used in the default message.
* $1 - sitename
{{Identical|Getting started}}',
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
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Title of step shown when they choose a GettingStarted task for the first time.',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Description of step shown when they choose a GettingStarted task for the first time.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Title of step pointing to article message box (which states suggested improvements).',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Description of step pointing to article message box (which states suggested improvements).',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Title of step showing user where to click {{msg-mw|vector-view-edit}}.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Description of step showing user where to click {{msg-mw|vector-view-edit}}.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Title of step showing user how to edit a section.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Description of step showing user how to edit a section.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Title of first step of GettingStarted tour that is on the VisualEditor screen.  It points to the {{msg-mw|visualeditor-toolbar-savedialog}} button.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Description of first step of GettingStarted tour that is on the VisualEditor screen.  It points to the {{msg-mw|visualeditor-toolbar-savedialog}} button.',
	'notification-gettingstarted-link-text-get-started' => 'Label for button that links to the page to get started for editing.
{{Identical|Get started}}',
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

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'gettingstarted-task-addlinks-main-description' => 'ܐܘܣܦ ܐܣܘܪ̈ܐ',
	'gettingstarted-task-toolbar-editing-help-text' => 'ܚܘܝ ܥܘܕܪܢܐ',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'gettingstarted' => 'Primeros pasos',
	'gettingstarted-desc' => "Amiesta una [[Special:GettingStarted|páxina de bienvenida]] a los nuevos usuarios (qu'apaez dempués de crear la cuenta)",
	'gettingstarted-welcomesiteuser' => '¡{{GENDER:$2|Bienveníu|Bienvenida}} a $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Primeros pasos',
	'gettingstarted-welcome-back-site-user' => '{{GENDER:$2|Bienveníu|Bienvenida}} otra vez, $2',
	'gettingstarted-task-header' => '¡Gracies por xunise a {{SITENAME}}! Estes son dalgunes maneres que tien pa collaborar.

Escueya una de les opciones de más abaxo, y verá un artículu al debalu que necesita ayuda.',
	'gettingstarted-return' => '← Non, gracies, volver a la páxina que taba lleendo',
	'gettingstarted-project-link' => '{{ns:Project}}:PrimerosPasos',
	'tag-gettingstarted_edit' => '[[{{MediaWiki:gettingstarted-project-link}}|primeros pasos]] col nuevu editor',
	'tag-gettingstarted_edit-description' => "Edición d'una páxina que'l usuariu elixó na llista de xeres de [[Special:GettingStarted|Primeros pasos]]",
	'gettingstarted-task-copyedit-main-description' => 'Iguar ortografía y gramática',
	'gettingstarted-task-copyedit-secondary-description' => '¡La manera más fácil de principiar!',
	'gettingstarted-task-clarify-main-description' => 'Ameyorar la claridá',
	'gettingstarted-task-clarify-secondary-description' => 'Simplificar o reescribir les frases.',
	'gettingstarted-task-addlinks-main-description' => 'Amestar enllaces',
	'gettingstarted-task-addlinks-secondary-description' => 'Coneutar los artículos de {{SITENAME}} ente ellos.',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Volver a la llista',
	'gettingstarted-task-toolbar-return-to-list-title' => "Volver a la llista d'artículos",
	'gettingstarted-task-toolbar-editing-help-text' => "Ver l'ayuda",
	'gettingstarted-task-toolbar-editing-help-title' => 'Ver una guía de cómo editar',
	'gettingstarted-task-toolbar-try-another-text' => 'Probar con otru artículu ►',
	'gettingstarted-task-toolbar-close-title' => 'Zarrar esta barra de ferramientes',
	'gettingstarted-task-copyedit-toolbar-description' => 'Esti artículu tien errores ortográficos y gramaticales que pue iguar.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Dir a un artículu al debalu que pue ameyorar copiando y editando',
	'gettingstarted-task-clarify-toolbar-description' => 'Esti artículu ye confusu o imprecisu. Busque maneres de facelu más claru.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Dir a un artículu al debalu que pue aclarar',
	'gettingstarted-task-addlinks-toolbar-description' => 'Esti artículu necesita más enllaces. Busque términos que tengan un artículu en {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Dir a un artículu al debalu al que pue amesta-y enllaces',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Como principiar',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => "Namái principie a revisar l'artículu y mire cómo ameyoralu. Si se siente ablucáu, nun se preocupe. ¡Nun necesita ser un espertu nesti asuntu! Si necesita ayuda o quier probar con otru artículu, use los enllaces de la barra superior.",
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ideas sobre qué facer',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => "Estos carteles identifiquen problemes con esti artículu. Nun necesita arreglalos toos, namái faiga les coses coles que s'afaye meyor.",
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Calque {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => "Pue editar l'artículu enteru calcando equí.",
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Editar una seición',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Si quier editar una seición específica, pue calcar nel enllaz azul '{{int:editsection}}' del principiu de cada seición.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => '¡Pue editar!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Agora pue editar la páxina. En acabando, faiga click en "{{int:visualeditor-toolbar-savedialog}}" pa revisar y guardar los cambios.',
	'notification-gettingstarted-link-text-get-started' => 'Primeros pasos',
	'notification-gettingstarted-start-editing' => '{{SITENAME}} ye una enciclopedia llibre escrita por xente como vusté. ¡De los [[Special:GettingStarted|primeros pasos]] faciendo la so primera edición!',
	'notification-gettingstarted-start-editing-email-subject' => 'De los primeros pasos editando {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => "{{SITENAME}} ye una enciclopedia llibre escrita por xente como vusté. ¡De los primeros pasos faciendo la primera edición!

Visite $2 para ver una llista de maneres fáciles d'ameyorar les páxines.

$3",
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'De los primeros pasos cola edición de {{SITENAME}} visitando $2',
	'notification-gettingstarted-continue-editing' => "¡Bon trabayu! Acaba de facer les primeres ediciones en {{SITENAME}}. Si busca algo más que facer, equí hai otres [[Special:GettingStarted|maneres fáciles d'ayudar]].",
	'notification-gettingstarted-continue-editing-email-subject' => "Maneres fáciles d'ameyorar {{SITENAME}}",
	'notification-gettingstarted-continue-editing-text-email-body' => "¡Bon trabayu! Acaba de facer les primeres ediciones en {{SITENAME}}.

Si busca más que facer, hai una llista  de maneres fáciles d'ayudar en $2

$3",
	'notification-gettingstarted-continue-editing-text-email-batch-body' => "¿Busca más coses que facer? Visite $2 pa ver una llista de maneres fáciles d'ayudar.",
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'gettingstarted' => 'Пачатак працы',
	'gettingstarted-desc' => 'Дадае [[Special:GettingStarted|вітальную старонку]] для новых удзельнікаў (паказваецца па стварэньні рахунку)',
	'gettingstarted-welcomesiteuser' => 'Вітаем у {{GRAMMAR:месны|$1}}, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Пачатак працы',
	'gettingstarted-welcome-back-site-user' => 'Вітаем зноў, $2',
	'gettingstarted-task-header' => 'Дзякуй за тое, што далучыліся да {{GRAMMAR:родны|{{SITENAME}}}}! Вось вам некалькі спосабаў хутка ўключыцца ў працу.

Выберыце варыянт ніжэй, і вы пабачыце адвольны артыкул, які патрабуе дагляду.',
	'gettingstarted-return' => '← Не, дзякую, вярніце мяне назад',
	'gettingstarted-project-link' => '{{ns:Project}}:Пачатак працы',
	'tag-gettingstarted_edit' => 'новы рэдактар [[{{MediaWiki:gettingstarted-project-link}}|пачаў працу]]',
	'tag-gettingstarted_edit-description' => 'Рэдагаваньне старонкі зь сьпісу задачаў на старонцы «[[Special:GettingStarted|З чаго пачаць]]», якую абраў удзельнік',
	'gettingstarted-task-copyedit-main-description' => 'Артаграфія і граматыка',
	'gettingstarted-task-copyedit-secondary-description' => 'Найлягчэйшы спосаб для пачаткоўцы!',
	'gettingstarted-task-clarify-main-description' => 'Удакладненьне',
	'gettingstarted-task-clarify-secondary-description' => 'Спрашчэньне або перафармуляваньне сьцверджаньняў.',
	'gettingstarted-task-addlinks-main-description' => 'Спасылкі',
	'gettingstarted-task-addlinks-secondary-description' => 'Злучэньне артыкулаў {{GRAMMAR:родны|{{SITENAME}}}}.',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Назад да сьпісу',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Вярнуцца да сьпісу артыкулаў',
	'gettingstarted-task-toolbar-editing-help-text' => 'Паказаць даведку',
	'gettingstarted-task-toolbar-editing-help-title' => 'Паказаць дапамогу па рэдагаваньні',
	'gettingstarted-task-toolbar-try-another-text' => 'Паспрабуйце іншы артыкул  ►',
	'gettingstarted-task-toolbar-close-title' => 'Зачыніць гэтую панэль',
	'gettingstarted-task-copyedit-toolbar-description' => 'У гэтым артыкуле маюцца артаграфічныя й граматычныя памылкі, якія вы можаце выправіць.',
	'gettingstarted-task-addlinks-toolbar-description' => 'Гэтаму артыкулу бракуе спасылак. Пашукайце тэрміны, артыкулы пра якія маюцца ў {{GRAMMAR:месны|{{SITENAME}}}}.',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Як пачаць',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Што рабіць',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Пстрыкніце «{{int:vector-view-edit}}»',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Рэдагаваньне разьдзелаў',
	'notification-gettingstarted-continue-editing-email-subject' => 'Лёгкі спосаб палепшыць {{GRAMMAR:вінавальны|{{SITENAME}}}}',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Выдатна! Вы ўжо зрабілі першыя праўкі ў {{GRAMMAR:месны|{{SITENAME}}}}.

Калі вы ахвотныя заняцца нечым яшчэ, вось сьпіс лёгкіх спосабаў дапамагчы — $2.

$3',
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
	'gettingstarted-task-header' => 'Hledáte snadný způsob, jak začít? Stačí si vybrat stránku z jednoho ze tří níže uvedených seznamů.', # Fuzzy
	'gettingstarted-return' => '← Ne, děkuji, chci zpět tam, kde jsem byl', # Fuzzy
	'gettingstarted-project-link' => '{{ns:Project}}:Jak začít',
	'tag-gettingstarted_edit' => 'nový uživatel [[{{MediaWiki:gettingstarted-project-link}}|začíná]]',
	'tag-gettingstarted_edit-description' => 'Editace stránky, kterou si uživatel zvolil ze seznamu úkolů na stránce [[Special:GettingStarted|Jak začít]]',
	'gettingstarted-task-copyedit-main-description' => 'Opravy pravopisu a gramatiky', # Fuzzy
);

/** Danish (dansk)
 * @author Christian List
 */
$messages['da'] = array(
	'gettingstarted' => 'Kom i gang',
	'gettingstarted-desc' => 'Tilføjer en [[Special:GettingStarted|velkomstside]] for nye brugere (vist efter oprettelse af konto)',
	'gettingstarted-welcomesiteuser' => 'Velkommen til $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Velkommen til $1!', # Fuzzy
	'gettingstarted-return' => 'Nej tak, tag mig tilbage', # Fuzzy
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
	'tag-gettingstarted_edit' => '[[{{MediaWiki:gettingstarted-project-link}}|Erste Schritte]] eines neuen Autors',
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
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Du kannst bearbeiten!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Du kannst jetzt die Seite bearbeiten. Wenn du fertig bist, klicke auf „{{int:visualeditor-toolbar-savedialog}}“, um deine Änderungen zu überprüfen und zu speichern.',
	'notification-gettingstarted-link-text-get-started' => 'Erste Schritte',
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
	'gettingstarted-return' => 'Ně, źěkujom se, źi slědk', # Fuzzy
	'gettingstarted-project-link' => '{{ns:Project}}:Prědne kšace',
	'tag-gettingstarted_edit' => '[[{{MediaWiki:gettingstarted-project-link}}|Prědne kšace]] nowego wobźěłarja', # Fuzzy
	'gettingstarted-task-copyedit-main-description' => 'Gramatiku a pšawopis korigěrowaś', # Fuzzy
	'gettingstarted-task-clarify-main-description' => 'Jasnosć pólěpšyś', # Fuzzy
);

/** Greek (Ελληνικά)
 * @author ZaDiak
 */
$messages['el'] = array(
	'gettingstarted' => 'Ξεκινώντας',
	'gettingstarted-welcomesiteuser' => 'Καλώς ήλθατε στο $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Καλώς ήλθατε στο $1!', # Fuzzy
	'gettingstarted-return' => 'Όχι ευχαριστώ, πήγαινε με πίσω', # Fuzzy
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
	'gettingstarted-welcomesiteuseranon' => 'Bonvenon al $1!', # Fuzzy
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
	'gettingstarted-welcomesiteuseranon' => 'Primeros pasos',
	'gettingstarted-welcome-back-site-user' => '{{GENDER:$1|Bienvenido|Bienvenida}} de nuevo, $2', # Fuzzy
	'gettingstarted-task-header' => '¡Gracias por unirte a {{SITENAME}}! He aquí algunas maneras en que puedes involucrarte.

Elige una opción a continuación y verás un artículo aleatorio que necesita de tu ayuda.',
	'gettingstarted-return' => '← No, gracias; volver a la página que estaba leyendo',
	'gettingstarted-project-link' => '{{ns:Project}}:PrimerosPasos',
	'gettingstarted-task-copyedit-main-description' => 'Corregir ortografía y gramática', # Fuzzy
	'gettingstarted-task-clarify-main-description' => 'Mejorar la claridad',
	'gettingstarted-task-clarify-secondary-description' => 'Simplificar o reescribir oraciones.',
	'gettingstarted-task-addlinks-main-description' => 'Añadir enlaces',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Volver a la lista',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Volver a la lista de artículos',
	'gettingstarted-task-toolbar-editing-help-text' => 'Mostrar la ayuda',
	'gettingstarted-task-toolbar-editing-help-title' => 'Mostrar una guía de edición',
	'gettingstarted-task-toolbar-try-another-text' => 'Probar otro artículo ►',
	'gettingstarted-task-toolbar-close-title' => 'Cerrar esta barra de herramientas',
	'gettingstarted-task-copyedit-toolbar-description' => 'Este artículo tiene errores ortográficos y gramaticales que puedes corregir.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Ir a un artículo aleatorio cuyo estilo puedes mejorar',
	'gettingstarted-task-clarify-toolbar-description' => 'Este artículo es confuso o ambiguo. Busca maneras de hacerlo más claro.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Ir a un artículo aleatorio que puedes clarificar',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Pulsa en {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Editar una sección',
	'notification-gettingstarted-link-text-get-started' => 'Primeros pasos',
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
 * @author Taha
 */
$messages['fa'] = array(
	'gettingstarted' => 'شروع',
	'gettingstarted-welcomesiteuser' => '$2، به $1 خوش‌آمدید!',
	'gettingstarted-welcomesiteuseranon' => 'به $1 خوش‌آمدید!', # Fuzzy
	'gettingstarted-welcome-back-site-user' => 'خوش بازگشتید، $2',
	'gettingstarted-return' => 'نه متشکرم، من را برگردان',
);

/** Finnish (suomi)
 * @author Nike
 * @author Silvonen
 * @author VezonThunder
 */
$messages['fi'] = array(
	'gettingstarted' => 'Alkuaskeleet',
	'gettingstarted-desc' => 'Lisää [[Special:GettingStarted|tervetulosivun]] uusille käyttäjille (näytetään tunnuksen luonnin jälkeen)',
	'gettingstarted-welcomesiteuser' => 'Tervetuloa sivustolle $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Tervetuloa sivustolle $1!', # Fuzzy
	'gettingstarted-welcome-back-site-user' => 'Tervetuloa takaisin, $2',
	'gettingstarted-task-header' => 'Kiitos, että liityit {{GRAMMAR:illative|{{SITENAME}}}}! Tässä muutamia tapoja päästä alkuun.

Valitse vaihtoehto alta, niin näet satunnaisen artikkelin, joka tarvitsee huomiota.',
	'gettingstarted-return' => 'Ei kiitos, vie minut takaisin sivulle, jota luin',
	'gettingstarted-task-copyedit-main-description' => 'Korjaa kirjoitus- ja kielioppivirheitä',
	'gettingstarted-task-copyedit-secondary-description' => 'Helpoin tapa päästä alkuun!',
	'gettingstarted-task-clarify-secondary-description' => 'Yksinkertaista tai kirjoita virkkeitä uudelleen.',
	'gettingstarted-task-addlinks-main-description' => 'Lisää linkkejä',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Takaisin listaan',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Palaa takaisin listaan artikkeleista',
	'gettingstarted-task-toolbar-editing-help-text' => 'Näytä ohje',
	'gettingstarted-task-toolbar-editing-help-title' => 'Näytä muokkausopas',
	'gettingstarted-task-toolbar-try-another-text' => 'Kokeile toista artikkelia ►',
	'gettingstarted-task-toolbar-close-title' => 'Sulje työkalurivi',
	'gettingstarted-task-copyedit-toolbar-description' => 'Tässä artikkelissa on kirjoitus- ja kielioppivirheitä, jotka voit korjata.',
	'gettingstarted-task-clarify-toolbar-description' => 'Tämä artikkeli on sekava tai epämääräinen. Keksi, miten voit tehdä siitä selkeämmän.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Mene satunnaiseen artikkeliin, jota voit selkeyttää',
	'gettingstarted-task-addlinks-toolbar-description' => 'Tämä artikkeli tarvii lisää linkkejä. Etsi käsitteitä, joilla on {{SITENAME}}-artikkeli.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Etsii satunnaisen artikkelin, johon voit lisätä linkkejä',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Napsauta {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Voit muokata artikkelia napsauttamalla tästä.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Muokkaa osiota',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Jos haluat muokata tiettyä osiota, voit napsauttaa sinistä »{{int:editsection}}»-linkkiä jokaisen osion yläpuolella.',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author Hello71
 * @author Jean-Frédéric
 * @author Ltrlg
 * @author Metroitendo
 * @author Valystant
 * @author Wyz
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
	'tag-gettingstarted_edit' => '[[{{MediaWiki:gettingstarted-project-link}}|guide de démarrage]] du nouvel éditeur',
	'tag-gettingstarted_edit-description' => "Modification d'une page choisie par l’utilisateur à partir d'une liste de tâches dans le [[Special:GettingStarted|guide de démarrage]]",
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
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Aller à un article au hasard que vous pouvez améliorer en modifiant par copie',
	'gettingstarted-task-clarify-toolbar-description' => 'Cet article est source de confusion ou de vague. Cherchez des façons de le rendre plus clair.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Aller à un article au hasard que vous pouvez préciser',
	'gettingstarted-task-addlinks-toolbar-description' => 'Cet article a besoin e plus de liens. Cherchez les termes qui ont un article sur {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Aller à un article au hasard auquel vous pouvez ajouter des liens',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Comment débuter',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Commencez simplement à analyser l’article et à chercher des améliorations. Si vous vous sentez dépassé, ne vous inquiétez pas. Vous n’avez pas besoin d’être un expert de ce sujet ! Si vous avez besoin d’aide ou voulez essayer un autre article, utilisez les liens de la barre du haut.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Idées sur ce qui peut être fait',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Ces bannières identifient des problèmes avec cet article. Vous n’avez pas besoin de les traiter, occupez-vous seulement de ce dont vous vous sentez capable.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Cliquez sur {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => "Vous pouvez modifier l'article en entier en cliquant ici.",
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Modifier une section',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Si vous souhaitez modifier une section spécifique, vous pouvez cliquer sur le lien '{{int:editsection}}' bleu en haut de chaque section.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Vous pouvez modifier !',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Vous pouvez maintenant modifier la page. Quand vous avez terminé, cliquez sur « {{int:visualeditor-toolbar-savedialog}} » pour vérifier et enregistrer vos modifications.',
	'notification-gettingstarted-link-text-get-started' => 'Commencer',
	'notification-gettingstarted-start-editing' => '{{SITENAME}} est une encyclopédie libre écrite par des gens comme vous. [[Special:GettingStarted|Débutez]] en effectuant votre première modification !',
	'notification-gettingstarted-start-editing-email-subject' => "Débuter avec l'édition sur {{SITENAME}}",
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} est une encyclopédie libre écrite par des gens comme vous. Commencez par faire votre première modification !

Consultez $2 pour obtenir la liste des astuces pour améliorer les pages.

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
	'gettingstarted-welcomesiteuseranon' => 'Benvegnua dessus $1 !', # Fuzzy
	'gettingstarted-return' => 'Nan, bien grant-marci, ramenâd-mè de yô que vegno', # Fuzzy
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
	'gettingstarted-task-header' => 'Grazas por unirse a {{SITENAME}}! Velaquí hai algúns modos de involucrarse no proxecto.

Escolla unha das opcións inferiores para ir ata un artigo que necesite axuda.',
	'gettingstarted-return' => '← Non, grazas; volver á páxina que estaba lendo',
	'gettingstarted-project-link' => '{{ns:Project}}:Primeiros pasos',
	'tag-gettingstarted_edit' => 'novo editor dando os [[{{MediaWiki:gettingstarted-project-link}}|primeiros pasos]]',
	'tag-gettingstarted_edit-description' => 'Modificación dunha páxina que o usuario elixiu desde a lista de tarefas dos [[Special:GettingStarted|primeiros pasos]]',
	'gettingstarted-task-copyedit-main-description' => 'Corrixir a ortografía e a gramática',
	'gettingstarted-task-copyedit-secondary-description' => 'O xeito máis fácil de comezar!',
	'gettingstarted-task-clarify-main-description' => 'Mellorar a claridade',
	'gettingstarted-task-clarify-secondary-description' => 'Simplificar ou reelaborar as oracións.',
	'gettingstarted-task-addlinks-main-description' => 'Engadir ligazóns',
	'gettingstarted-task-addlinks-secondary-description' => 'Conectar artigos de {{SITENAME}}.',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Volver á lista',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Volver á lista de artigos',
	'gettingstarted-task-toolbar-editing-help-text' => 'Mostrar a axuda',
	'gettingstarted-task-toolbar-editing-help-title' => 'Ollar unha guía sobre como editar',
	'gettingstarted-task-toolbar-try-another-text' => 'Probar outro artigo ►',
	'gettingstarted-task-toolbar-close-title' => 'Pechar esta barra de ferramentas',
	'gettingstarted-task-copyedit-toolbar-description' => 'Este artigo ten erros ortográficos e gramáticos que vostede pode corrixir.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Ir a un artigo ao chou para mellorar a súa redacción',
	'gettingstarted-task-clarify-toolbar-description' => 'Este artigo é confuso ou impreciso. Busque formas de facelo máis claro.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Ir a un artigo ao chou para clarificalo',
	'gettingstarted-task-addlinks-toolbar-description' => 'Este artigo necesita máis ligazóns. Busque termos que teñan artigo en {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Ir a un artigo ao chou para engadirlle ligazóns',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Como comezar',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Empece analizando o artigo e buscando melloras. Se sente que non vai poder, non se preocupe. Non é necesario ser experto na materia! Se necesita axuda ou quere probar outro artigo, utilice as ligazóns da barra superior.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ideas sobre o que facer',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Estes carteis identifican os problemas do artigo. Non é necesario corrixilos todos, encárguese daquilo co que sinta comodidade.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Prema en "{{int:vector-view-edit}}"',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Pode editar todo o artigo premendo aquí.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Editar unha sección',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Se quere modificar unha sección específica, pode premer na ligazón azul "{{int:editsection}}" que hai ao comezo de cada sección.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Pode editar!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Agora pode editar a páxina. Cando remate, prema en "{{int:visualeditor-toolbar-savedialog}}" para revisar e gardar os seus cambios.',
	'notification-gettingstarted-link-text-get-started' => 'Comezar',
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

/** Gujarati (ગુજરાતી)
 * @author Ashok modhvadia
 */
$messages['gu'] = array(
	'gettingstarted-task-addlinks-main-description' => 'કડીઓ ઉમેરો',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ યાદી પર પાછા ફરો',
	'gettingstarted-task-toolbar-editing-help-text' => 'મદદ માટે જુઓ',
	'gettingstarted-task-toolbar-try-another-text' => 'અન્ય લેખ માટે પ્રયત્ન કરો ►',
	'gettingstarted-task-toolbar-close-title' => 'આ સાધનપેટી બંધ કરો',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'કેવી રીતે શરૂઆત કરશો',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author ExampleTomer
 * @author YaronSh
 * @author אור שפירא
 */
$messages['he'] = array(
	'gettingstarted' => 'איך להתחיל',
	'gettingstarted-desc' => 'הוספת [[Special:GettingStarted|דף "ברוך בואך"]] למשתמשים חדשים (מוצג אחרי יצירת החשבון)',
	'gettingstarted-welcomesiteuser' => 'ברוך בואך אל $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'איך לתהחיל',
	'gettingstarted-welcome-back-site-user' => 'ברוך שובך, $2',
	'gettingstarted-task-header' => 'תודה על הצטרפותך ל{{GRAMMAR:תחילית|$1}}! הנה כמה דרכים להיות מעורה בקהילה.

לחיצה על אחת מהאפשרויות להלן תראה לך ערך שמתאים לבחירתך.', # Fuzzy
	'gettingstarted-return' => '→ לא תודה, קחו אותי חזרה לדף שקראתי',
	'gettingstarted-project-link' => '{{ns:Project}}:התחלה',
	'tag-gettingstarted_edit' => 'עורך חדש [[{{MediaWiki:gettingstarted-project-link}}|מתחיל לעבוד]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'עריכה של דף שהמשתמש בחר מתוך רשימת מטלות בדף [[Special:GettingStarted|איך להתחיל]]',
	'gettingstarted-task-copyedit-main-description' => 'תיקון כתיב ודקדוק',
	'gettingstarted-task-clarify-main-description' => 'שיפור הבהירות',
	'gettingstarted-task-clarify-secondary-description' => 'לפשט או לנסח משפטים מחדש.',
	'gettingstarted-task-addlinks-main-description' => 'הוספת קישורים',
	'gettingstarted-task-toolbar-return-to-list-text' => '►‎ חזרה לרשימה',
	'gettingstarted-task-toolbar-return-to-list-title' => 'חזרה לרשימת המאמרים',
	'gettingstarted-task-toolbar-editing-help-text' => 'הצג עזרה',
	'gettingstarted-task-toolbar-try-another-text' => 'לנסות מאמר אחר ◄',
	'gettingstarted-task-toolbar-close-title' => 'סגור סרגל כלים זה',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'כיצד להתחיל',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'באפשרותך לערוך את המאמר כולו על-ידי לחיצה כאן.',
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
	'gettingstarted-return' => 'Ně, dźakuju so, dźi wróćo k přečitanej stronje',
	'gettingstarted-project-link' => '{{ns:Project}}:Prěnje kroki',
	'tag-gettingstarted_edit' => '[[{{MediaWiki:gettingstarted-project-link}}|Prěnje kroki]] noweho wobdźěłarja', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Změna strony, kotruž wužiwar je z lisćiny nadawkow ze strony [[Special:GettingStarted|Prěnje kroki]] wubrał',
	'gettingstarted-task-copyedit-main-description' => 'Prawopis a gramatiku korigować',
	'gettingstarted-task-clarify-main-description' => 'Jasnosć polěpšić',
);

/** Hungarian (magyar)
 * @author Tacsipacsi
 * @author Tgr
 */
$messages['hu'] = array(
	'gettingstarted' => 'Első lépések',
	'gettingstarted-desc' => 'Egy [[Special:GettingStarted|üdvözlőlapot]] mutat az új felhasználóknak a regisztráció után',
	'gettingstarted-welcomesiteuser' => 'Üdvözlünk a $1 oldalain, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Üdvözlünk a $1 oldalain!', # Fuzzy
	'gettingstarted-return' => '← Nem érdekel, vissza arra az oldalra, amit éppen olvastam',
	'gettingstarted-project-link' => '{{ns:Project}}:Első lépések',
	'tag-gettingstarted_edit' => 'új szerkesztő [[{{MediaWiki:gettingstarted-project-link}}|első lépései]]', # Fuzzy
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
	'gettingstarted-welcomesiteuser' => 'Selamat datang di $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Selamat datang di $1!', # Fuzzy
	'gettingstarted-return' => 'Tidak, terima kasih. Bawa saya kembali', # Fuzzy
	'notification-gettingstarted-link-text-get-started' => 'Memulai',
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
	'tag-gettingstarted_edit' => 'nuovo contributore dalla [[{{MediaWiki:gettingstarted-project-link}}|guida introduttiva]]',
	'tag-gettingstarted_edit-description' => "Modifica di una pagina che l'utente ha scelto dall'elenco delle attività nella [[Special:GettingStarted|guida introduttiva]]",
	'gettingstarted-task-copyedit-main-description' => 'Correggi ortografia e grammatica',
	'gettingstarted-task-copyedit-secondary-description' => 'Il modo più semplice per iniziare!',
	'gettingstarted-task-clarify-main-description' => 'Migliora la chiarezza',
	'gettingstarted-task-addlinks-main-description' => 'Aggiungi collegamenti',
	'gettingstarted-task-addlinks-secondary-description' => 'Collega le voci di {{SITENAME}} tra loro.',
	'gettingstarted-task-toolbar-return-to-list-text' => "◄ Torna all'elenco",
	'gettingstarted-task-toolbar-return-to-list-title' => "Torna all'elenco delle voci",
	'gettingstarted-task-toolbar-editing-help-title' => 'Mostra una guida su come modificare',
	'gettingstarted-task-toolbar-try-another-text' => "Prova con un'altra voce ►",
	'gettingstarted-task-toolbar-close-title' => 'Chiudi questa barra degli strumenti',
	'gettingstarted-task-copyedit-toolbar-description' => 'Questa voce ha errori ortografici e grammaticali che si possono risolvere.',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Come iniziare',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Fai clic su {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => "È possibile modificare l'intera voce cliccando qui.",
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Modifica una sezione',
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
 * @author Fryed-peach
 * @author Shirayuki
 */
$messages['ja'] = array(
	'gettingstarted' => 'はじめに',
	'gettingstarted-desc' => '新しい利用者向けに[[Special:GettingStarted|ようこそページ]]を追加する (アカウント作成した際に表示される)',
	'gettingstarted-welcomesiteuser' => '$2さん、$1へようこそ!',
	'gettingstarted-welcomesiteuseranon' => 'はじめに',
	'gettingstarted-welcome-back-site-user' => '$2さん、おかえりなさい',
	'gettingstarted-return' => '← 不要です。元のページに戻ります',
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
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => '編集できます!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'ページを編集できるようになりました。編集が完了したら、「{{int:visualeditor-toolbar-savedialog}}」をクリックして、編集内容を確認および保存してください。',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'gettingstarted-welcomesiteuser' => 'მოგესალმებით $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'მუშაობის დაწყება',
	'gettingstarted-return' => '← არა გმადლობთ, დამაბრუნეთ უკან სადაც ვიყავი', # Fuzzy
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
	'gettingstarted-task-header' => '{{SITENAME}}에 가입해주셔서 감사합니다! 여기에 참여할 수 있는 몇 가지 방법이 있습니다.

아래에 옵션을 선택하고 나서 도움을 필요로 하는 임의 문서를 볼 수 있습니다.',
	'gettingstarted-return' => '← 괜찮습니다, 읽던 문서로 돌아갑니다',
	'gettingstarted-project-link' => '{{ns:Project}}:시작하기',
	'tag-gettingstarted_edit' => '새 편집자 [[{{MediaWiki:gettingstarted-project-link}}|시작하기]]',
	'tag-gettingstarted_edit-description' => '사용자가 [[Special:GettingStarted|시작하기]]에 작업 목록에서 선택한 문서의 편집',
	'gettingstarted-task-copyedit-main-description' => '맞춤법과 문법 고치기',
	'gettingstarted-task-copyedit-secondary-description' => '시작하는 가장 쉬운 방법!',
	'gettingstarted-task-clarify-main-description' => '명확성 향상',
	'gettingstarted-task-clarify-secondary-description' => '문장을 간단하게 하거나 바꾸어 적으세요.',
	'gettingstarted-task-addlinks-main-description' => '링크 추가',
	'gettingstarted-task-addlinks-secondary-description' => '{{SITENAME}} 문서끼리 연결합니다.',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ 목록으로 돌아가기',
	'gettingstarted-task-toolbar-return-to-list-title' => '문서의 목록으로 돌아갑니다',
	'gettingstarted-task-toolbar-editing-help-text' => '도움말 보기',
	'gettingstarted-task-toolbar-editing-help-title' => '편집하는 방법에 대한 가이드 보기',
	'gettingstarted-task-toolbar-try-another-text' => '다른 기사에 도전 ►',
	'gettingstarted-task-toolbar-close-title' => '이 툴바 닫기',
	'gettingstarted-task-copyedit-toolbar-description' => '이 문서는 고칠 수 있는 맞춤법과 문법 오류가 있습니다.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => '교정에 의해 향상할 수 있는 임의 문서로 갑니다',
	'gettingstarted-task-clarify-toolbar-description' => '이 문서는 혼란하거나 막연합니다. 명확하게 할 수 있는 방법을 찾아보세요.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => '명확하게 할 수 있는 임의 문서로 갑니다',
	'gettingstarted-task-addlinks-toolbar-description' => '이 문서에는 더 많은 링크가 필요합니다. {{SITENAME}} 문서로 용어를 찾아보세요.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => '링크를 추가할 수 있는 임의 문서로 갑니다',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => '시작하는 방법',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => '문서를 검사하고 개선에 대해 찾기를 시작하세요. 압도당한다고 느껴지면 걱정하지 마세요. 이 주제에 대해 전문가가 될 필요가 없습니다! 도움이 필요하거나 다른 문서를 시도하려면 위 줄의 링크를 사용하세요.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => '무엇을 해야할 지에 대한 아이디어',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => '이러한 배너는 이 문서로 문제를 식별합니다. 그들 모두를 해결할 필요가 없고, 익숙하게 하고 있는 것에 충실하세요.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => '{{int:vector-view-edit}} 클릭',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => '여기를 클릭해 전체 문서를 편집할 수 있습니다.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => '문단 편집',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "특정 문단을 편집하려면 각 편집의 위에 파란 '{{int:editsection}}' 링크를 클릭할 수 있습니다.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => '편집할 수 있습니다!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "이제 문서를 편집할 수 있습니다. 완료되면, 바뀜을 검토하고 저장하려면 '{{int:visualeditor-toolbar-savedialog}}'을 클릭하세요.",
	'notification-gettingstarted-link-text-get-started' => '시작하기',
	'notification-gettingstarted-start-editing' => '{{SITENAME}}(은)는 여러분과 같은 사람들이 작성한 자유 백과사전입니다. 첫 편집을 하는 것을 [[Special:GettingStarted|시작하세요]]!',
	'notification-gettingstarted-start-editing-email-subject' => '{{SITENAME}} 편집 시작하기',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}}(은)는 여러분과 같은 사람들이 작성한 자유 백과사전입니다. 첫 편집을 하는 것을 시작하세요!

문서를 개선하는 쉬운 방법의 목록에 대해서는 $2(을)를 방문하세요.

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => '$2(을)를 방문하여 {{SITENAME}} 편집 시작하기',
	'notification-gettingstarted-continue-editing' => '잘했습니다! 이미 {{SITENAME}}에 첫 편집을 했습니다. 할 일을 더 찾고 있다면, 여기에 [[Special:GettingStarted|도움이 되는 쉬운 방법]]이 있습니다.',
	'notification-gettingstarted-continue-editing-email-subject' => '{{SITENAME}}(을)를 개선하는 쉬운 방법',
	'notification-gettingstarted-continue-editing-text-email-body' => '잘했습니다! 이미 {{SITENAME}}에 첫 편집을 했습니다.

할 일을 더 찾고 있다면 $2에 도움이 되는 쉬운 방법의 목록이 있습니다

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => '할 일을 더 찾고 있습니까? 도움이 되는 쉬운 방법의 목록에 대해서는 $2(을)를 방문하세요.',
);

/** Kirghiz (Кыргызча)
 * @author Growingup
 */
$messages['ky'] = array(
	'gettingstarted' => 'Иштин башталышы',
	'gettingstarted-welcomesiteuser' => '$1 сайтына кош келиңиз, $2!',
	'gettingstarted-welcomesiteuseranon' => '$1 сайтына кош келиңиз!', # Fuzzy
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'gettingstarted' => 'Fir unzefänken',
	'gettingstarted-desc' => 'Setzt eng [[Special:GettingStarted|Begréissungssäit]] fir nei Benotzer derbäi (gëtt nom Opmaache vum Benotzerkont gewisen)',
	'gettingstarted-welcomesiteuser' => 'Wëllkomm op $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Fir unzefänken',
	'gettingstarted-welcome-back-site-user' => 'Wëllkomm zréck, $2',
	'gettingstarted-task-header' => 'Merci datt Iech op {{SITENAME}} ageschriwwen hutt! Hei sinn e puer Manéiere wéi Dir matmaache kënnt.

Sicht eng Optioun hei drënner eraus an Dir kritt en zoufällegen Artikel gewisen deen nach Hëllef brauch.',
	'gettingstarted-return' => 'Nee Merci, zréck op déi Säit déi ech am gaang war mat liesen',
	'gettingstarted-project-link' => '{{ns:Project}}:Fir unzefänken',
	'tag-gettingstarted_edit' => 'Nei Auteure [[{{MediaWiki:gettingstarted-project-link}}|wéi ufänken]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Eng Säit änneren déi de Benotzer aus der Lëscht op [[Special:GettingStarted|Ufänken]] eraussicht',
	'gettingstarted-task-copyedit-main-description' => 'Orthographie a Grammaire verbesseren',
	'gettingstarted-task-copyedit-secondary-description' => 'Den einfachste Wee fir unzefänken!',
	'gettingstarted-task-clarify-main-description' => 'Kloerheet verbesseren',
	'gettingstarted-task-clarify-secondary-description' => 'Sätz vereinfachen oder ëmformuléieren.',
	'gettingstarted-task-addlinks-main-description' => 'Linken derbäisetzen',
	'gettingstarted-task-addlinks-secondary-description' => '{{SITENAME}}-Artikel matenee verbannen.',
	'gettingstarted-task-toolbar-return-to-list-text' => "◄ Zréck op d'Lëscht",
	'gettingstarted-task-toolbar-return-to-list-title' => "Zréck op d'Lëscht vun Artikelen",
	'gettingstarted-task-toolbar-editing-help-text' => 'Hëllef weisen',
	'gettingstarted-task-toolbar-editing-help-title' => 'E Guide weise wéi een ännere kann',
	'gettingstarted-task-toolbar-try-another-text' => 'Probéiert een aneren Artikel ►',
	'gettingstarted-task-toolbar-close-title' => 'Dës Toolbar zoumaachen',
	'gettingstarted-task-copyedit-toolbar-description' => 'An dësem Artikel si Schreif- a grammatesch Feeler déi Dir verbessere kënnt.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Gitt op en zoufällegen Artikel, deen Dir duerch ännere verbessere kënnt',
	'gettingstarted-task-clarify-toolbar-description' => 'Dësen Artikel ass konfus oder vague. Kuckt no Weeër wéi Dir e méi kloer maache kënnt.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Gitt op een zoufällegen Artikel deen Dir präziséiere kënnt',
	'gettingstarted-task-addlinks-toolbar-description' => 'Dësen Artikel brauch méi Linken. Sicht no Begrëffer déi een {{SITENAME}}-Artikel hunn.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Gitt op een zoufällegen Artikel wou Dir Linken derbäisetze kënnt',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Wéi een ufänkt',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Iddie wat Dir maache kënnt',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Klickt op {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Dir Kënnt de ganzen Artikel ännere wann Dir hei klickt.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'En Abschnitt änneren',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Wann Dir e bestëmmten Abschnitt ännere wëllt, da klickt op de bloen  '{{int:editsection}}' Link uewen op all Abschnitt.",
	'notification-gettingstarted-link-text-get-started' => 'Fir unzefänken',
	'notification-gettingstarted-start-editing' => '{{SITENAME}} ass eng fräi Enzyklopedie geschriwwe vu Leit wéi Iech. [[Special:GettingStarted|Fänkt un]] andeems Dir Är éischt Ännerung maacht!',
	'notification-gettingstarted-start-editing-email-subject' => 'Ufänke mat Änneren op {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} ass eng fräi Encyclopedie, geschriwwe vu Leit wéi Iech. Fänkt un, andeem Dir eng éischt Ännerung maacht!

Besicht $2 fir eng Lëscht wéi Dir einfach Säite verbessere kënnt.

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => "Fänkt un op {{SITENAME}} z'änneren andeem Dir op $2 gitt",
	'notification-gettingstarted-continue-editing' => 'Gutt geschafft! Dir hutt schonn Är éischt Ännerungen op {{SITENAME}} gemaach. Wann Dir méi maache wëllt, hei sinn e puer [[Special:GettingStarted|einfach Saache wou Dir eng Hand upake kënnt]].',
	'notification-gettingstarted-continue-editing-email-subject' => 'Einfach Manéiere fir {{SITENAME}} ze verbesseren',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Gutt geschafft! Dir hutt schonn Är éischt Ännerung op {{SITENAME}} gemaacht.

Wann Dir méi maache wëllt fannt Dir eng Lëscht wéi Dir einfach hëllefe kënnt op $2

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Wëllt Dir méi maachen? Besicht $2 fir eng Lëscht vun einfache Méiglechkeete wéi Dir eng Hand upake kënnt.',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 * @author Mantak111
 */
$messages['lt'] = array(
	'gettingstarted-welcomesiteuser' => 'Sveiki atvykę į $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Sveiki atvykę į $1!', # Fuzzy
	'gettingstarted-task-addlinks-main-description' => 'Pridėti nuorodas',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Grįžti į sąrašą',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Grįžti į straipsnių sąrašą',
	'gettingstarted-task-toolbar-try-another-text' => 'Pabandykite kitą straipsnį ►',
	'gettingstarted-task-toolbar-close-title' => 'Uždaryti šią įrankių juostą',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Kaip pradėti',
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
	'gettingstarted-task-header' => "Mancari caro mudah ba'a ka mulai? Piliahlah sabuah laman dari daftar dibawah ko.", # Fuzzy
	'gettingstarted-return' => 'Mokasih sajolah, bawok Ambo baliak', # Fuzzy
	'gettingstarted-project-link' => "{{ns:Project}}:Ba'a ka mulai",
	'tag-gettingstarted_edit' => "pangguno baru [[{{MediaWiki:gettingstarted-project-link}}|ba'a ka mulai]]", # Fuzzy
	'tag-gettingstarted_edit-description' => "Suntiangan laman nan pangguno piliah dari daftar tugas pado [[Special:GettingStarted|Ba'a ka mulai]]",
	'gettingstarted-task-copyedit-main-description' => 'Pelokan tata bahaso jo ejaan', # Fuzzy
	'gettingstarted-task-clarify-main-description' => 'Tingkekan kajalehan', # Fuzzy
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
	'gettingstarted-task-header' => 'Ви благодариме што се зачленивте на {{SITENAME}}! Еве некои совети како да почнете.

Одберете една од можностите подолу и ќе ви се појави случајна статија на која ѝ треба помош.',
	'gettingstarted-return' => '← Не, благодарам. Врати ме на страницата што си ја читав',
	'gettingstarted-project-link' => '{{ns:Project}}:ПрвиЧекори',
	'tag-gettingstarted_edit' => 'нов уредник [[{{MediaWiki:gettingstarted-project-link}}|почнува со работа]]',
	'tag-gettingstarted_edit-description' => 'Уредување на страница што корисникот ја одбрал од списокот на задачи на [[Special:GettingStarted|Први чекори]]',
	'gettingstarted-task-copyedit-main-description' => 'Исправка на граматика и правопис',
	'gettingstarted-task-copyedit-secondary-description' => 'Најлесен начин да почнете!',
	'gettingstarted-task-clarify-main-description' => 'Направете го текстот појасен',
	'gettingstarted-task-clarify-secondary-description' => 'Упростете ги речениците или срочете ги поинаку',
	'gettingstarted-task-addlinks-main-description' => 'Додај врски',
	'gettingstarted-task-addlinks-secondary-description' => 'Поврзете ги статиите на {{SITENAME}}.',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Назад на списокот',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Назад кон списокот на статии',
	'gettingstarted-task-toolbar-editing-help-text' => 'Прикажи помош',
	'gettingstarted-task-toolbar-editing-help-title' => 'Прикажи водич за уредување',
	'gettingstarted-task-toolbar-try-another-text' => 'Пробајте друга статија ►',
	'gettingstarted-task-toolbar-close-title' => 'Затвори го алатников',
	'gettingstarted-task-copyedit-toolbar-description' => 'Статијава има правописни и граматички грешки што можете да ги поправите.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Оди на случајна статија што бара коректура',
	'gettingstarted-task-clarify-toolbar-description' => 'Статијата е збунителна или недоречена. Размислете како можете да ја направите појасна.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Одете на случајна страница што бара разјаснување',
	'gettingstarted-task-addlinks-toolbar-description' => 'На статијава ѝ требаат повеќе врски. Побарајте ги поимите што имаат статија на {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Појдете на случајна статија што бара повеќе врски',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Како да почнете',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Повнимателно разгледајте ја статијата и видете што може да се подобри. Не грижете се ако ви дојде премногу. Не се бара да сте стручњак на темата! Ако ви треба помош или сакате да пробате друга статија, послужете се со врските во лентата најгоре.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Идеи - што да правите',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Овие плакати (известувања) ги посочуваат проблемите во статијата. Не мора да ги решите сите - едноставно стиснете на она што не ви делува тешко.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Стиснете на „{{int:vector-view-edit}}“',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Стискајќи тука, можете да ја уредите целата статија',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Уреди поднаслов',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Ако сакате да уредите даден поднаслов, стиснете на сината врска „{{int:editsection}}“ до него.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Можете да уредувате!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Сега можете да ја уредите страницата. Кога ќе завршите, стиснете на „{{int:visualeditor-toolbar-savedialog}}“ за да ги прегледате и зачувате промените.',
	'notification-gettingstarted-link-text-get-started' => 'Започнете',
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
	'gettingstarted-task-header' => 'Terima kasih kerana menyertai {{SITENAME}}! Berikut adalah cara-cara untuk melibatkan diri.

Pilih satu pilihan di bawah, dan anda akan melihat sebuah rencana pilihan rawak yang memerlukan pertolongan.',
	'gettingstarted-return' => '← Tak apalah, bawa saya kembali ke halaman yang saya baca tadi',
	'gettingstarted-project-link' => '{{ns:Project}}:Permulaan',
	'tag-gettingstarted_edit' => 'penyunting baru [[{{MediaWiki:gettingstarted-project-link}}|hendak bermula]]',
	'tag-gettingstarted_edit-description' => 'Suntingan halaman yang dipilih oleh pengguna dari senarai tugas dalam [[Special:GettingStarted|Permulaan]]',
	'gettingstarted-task-copyedit-main-description' => 'Membetulkan Ejaan & Tatabahsa',
	'gettingstarted-task-copyedit-secondary-description' => 'Cara yang paling senang untuk bermula!',
	'gettingstarted-task-clarify-main-description' => 'Perbaiki Keterangan',
	'gettingstarted-task-clarify-secondary-description' => 'Ringkaskan atau susun semula ayat.',
	'gettingstarted-task-addlinks-main-description' => 'Bubuh Pautan',
	'gettingstarted-task-addlinks-secondary-description' => 'Jalinkan hubungan antara rencana {{SITENAME}}.',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Kembali ke senarai',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Kembali ke senarai rencana',
	'gettingstarted-task-toolbar-editing-help-text' => 'Paparkan bantuan',
	'gettingstarted-task-toolbar-editing-help-title' => 'Paparkan panduan menyunting',
	'gettingstarted-task-toolbar-try-another-text' => 'Cuba rencana lain ►',
	'gettingstarted-task-toolbar-close-title' => 'Tutup palang alat ini',
	'gettingstarted-task-copyedit-toolbar-description' => 'Rencana ini ada kesalahan ejaan dan tatabahasa yang boleh anda betulkan.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Pergi ke satu rencana pilihan rawak yang anda boleh perbaiki dengan menyunting',
	'gettingstarted-task-clarify-toolbar-description' => 'Rencana ini kabur atau mengelirukan. Fikirkan cara untuk memperjelasnya.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Pergi ke satu rencana pilihan rawak yang boleh anda perjelas',
	'gettingstarted-task-addlinks-toolbar-description' => 'Rencana ini memerlukan lebih banyak pautan. Cari istilah-istilah yang mempunyai rencana di {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Pergi ke satu rencana pilihan rawak yang boleh anda menambah pautannya',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Bagaimana untuk bermula',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Mulakan dengan menyemak imbas rencana terbabit untuk mencari di mana perlu diperbaiki. Jika anda berasa susah hati, jangan risau. Anda tidak semestinya perlu menjadi pakar dalam topik ini! Jika anda memerlukan bantuan atau ingin mencuba rencana lain, gunakan pautan pada palang di atas.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Cadangan kerja',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Sepanduk-sepanduk ini mengenal pasti masalah pada rencana ini. Anda tidak semestinya perlu menyelesaikan kesemuanya, betulkan sahaja yang mana anda rasa senang.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Klik {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Anda boleh menyunting keseluruhan rencana dengan mengklik di sini.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Sunting satu bahagian',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Jika anda ingin menyunting suatu bahagian tertentu, anda boleh klik pada pautan biru '{{int:editsection}}' di atas setiap bahagian.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Anda boleh menyunting!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "Anda kini boleh menyunting halaman ini. Selepas siap, klik '{{int:visualeditor-toolbar-savedialog}}' untuk menyemak dan menyimpan suntingan anda.",
	'notification-gettingstarted-link-text-get-started' => 'Mulakan',
	'notification-gettingstarted-start-editing' => '{{SITENAME}} merupakan sebuah ensiklopedia bebas yang dikarang oleh orang ramai seperti anda. [[Special:GettingStarted|Mulakan]] dengan membuat suntingan pertama anda!',
	'notification-gettingstarted-start-editing-email-subject' => 'Bermula dengan menyunting {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} adalah sebuah ensiklopedia yang diusahakan oleh orang keramaian seperti anda. Bermulalah dengan membuat suntingan pertama anda!

Layari $2 untuk senarai cara mudah untuk memperbaiki halaman-halaman di sini.

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Belajar menyunting di {{SITENAME}} dengan melayari $2',
	'notification-gettingstarted-continue-editing' => 'Cantik! Anda sudah pun membuat suntingan sulung anda di {{SITENAME}}. Jika anda ingin mencari kerja lain, yang berikut adalah beberapa [[Special:GettingStarted|cara yang mudah untuk menolong]].',
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
	'gettingstarted-welcomesiteuser' => 'Merbħa fuq $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Merbħa fuq $1!', # Fuzzy
	'gettingstarted-return' => 'Le grazzi, ħudni lura', # Fuzzy
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
	'tag-gettingstarted_edit' => 'nieuwe bewerker [[{{MediaWiki:gettingstarted-project-link}}|aan de slag]]',
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
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Controleer de pagina en ga op zoek naar mogelijkheden om deze te verbeteren. Maak u geen zorgen als u zich overweldigd voelt. U hoeft geen expert te worden over dit onderwerp! Als u hulp nodig hebt of liever aan een andere pagina werkt, gebruik dan de koppelingen in de werkbalk bovenaan.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Wat u kunt doen',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Deze banners geven aan dat er problemen zijn met deze pagina. U hoeft niet alle problemen aan te pakken; doe waar u zich prettig bij voelt.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Klik op {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'U kunt de hele pagina bewerken door hier te klikken.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Een paragraaf bewerken',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Als u een bepaalde paragraaf wilt bewerken, kunt u klikken op de blauwe koppeling "{{int:editsection}}" bovenaan iedere paragraaf.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'U kunt bewerken!',
	'notification-gettingstarted-link-text-get-started' => 'Aan de slag',
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

/** Polish (polski)
 * @author Chrumps
 * @author Rzuwig
 */
$messages['pl'] = array(
	'gettingstarted-welcome-back-site-user' => 'Witaj ponownie, $2',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Jak zacząć',
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
	'tag-gettingstarted_edit' => "n'editor neuv [[{{MediaWiki:gettingstarted-project-link}}|a l'ha ancaminà]]", # Fuzzy
	'tag-gettingstarted_edit-description' => "Modìfica ëd na pàgina che l'utent a sern da la lista dij travaj an [[Special:GettingStarted|Për ancaminé]]",
);

/** Brazilian Portuguese (português do Brasil)
 * @author OTAVIO1981
 * @author Raylton P. Sousa
 */
$messages['pt-br'] = array(
	'gettingstarted' => 'Primeiros passos',
	'gettingstarted-desc' => 'Adiciona uma página de [[Special:GettingStarted|boas vindas]] para novos usuários(exibido após a criação da conta)',
	'gettingstarted-welcomesiteuser' => '{{GENDER:$2|Bem-vindo|Bem-vinda|Bem-vindo(a)}} a $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Primeiros passos',
	'gettingstarted-welcome-back-site-user' => 'Bem-vindo de volta, $2',
	'gettingstarted-task-header' => 'Obrigado por se juntar a {{SITENAME}}! Veja alguns caminhos para se envolver.

Escolha uma opção abaixo, e veja um artigo aleatório que precisa de ajdua',
	'gettingstarted-return' => '← Não, obrigado, volte para onde estava',
	'gettingstarted-project-link' => '{{ns:Project}}:PrimeirosPassos',
	'tag-gettingstarted_edit' => 'novo editor [[{{MediaWiki:gettingstarted-project-link}}|começando]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Edição de uma página que o editor escolheu da lista de tarefas em [[Special:GettingStarted|Começando]]',
	'gettingstarted-task-copyedit-main-description' => 'Ajuste de Ortografia & Gramática',
	'gettingstarted-task-copyedit-secondary-description' => 'O jeito mais fácil de começar!',
	'gettingstarted-task-clarify-main-description' => 'Melhore a Clareza',
	'gettingstarted-task-clarify-secondary-description' => 'Simplifique ou reescreva a sentença.',
	'gettingstarted-task-addlinks-main-description' => 'Adicione Links',
	'gettingstarted-task-addlinks-secondary-description' => 'Conecte os artigos do {{SITENAME}}.',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Voltar para a lista',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Retorne para a lista de artigos',
	'gettingstarted-task-toolbar-editing-help-text' => 'Mostrar ajuda',
	'gettingstarted-task-toolbar-editing-help-title' => 'Mostrar um guia sobre como editar',
	'gettingstarted-task-toolbar-try-another-text' => 'Tentar outro artigo ►',
	'gettingstarted-task-toolbar-close-title' => 'Feche esta barra de ferramentas',
	'gettingstarted-task-copyedit-toolbar-description' => 'Este artigo tem erros de ortografia e gramática que você pode consertar.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Vá a um artigo aleatório que pode melhorar pela correção do texto',
	'gettingstarted-task-clarify-toolbar-description' => 'Este artigo é confuso ou vago. Procure meios de você torná-lo claro.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Vá a um artigo aleatório que pode clarificar.',
	'gettingstarted-task-addlinks-toolbar-description' => 'Este artigo precisa de mais links. Procure por termos que possuam artigo na {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Vá a um artigo aleatório que possa adicionar links',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Como começar',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'apens começe varrendo o artigo e procurando por melhorias. Se se sentir sobrecarregado, não se preocupe. Você não precisa ser um expert neste tópico! Se você precisar de ajuda ou quiser tentar outro artigo, use o link no topo da barra.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ideias sobre o que fazer',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Estes banners identificam problemas com este artigo. Você não precisa corrigir todos, faça apenas o que está confortável de fazer.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Clique {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Você pode editar o artigo inteiro ao clicar aqui.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Edite uma seção',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Se você quiser editar uma seção específica, pode cliclar no link azul '{{int:editsection}}' no topo de cada seção.",
	'notification-gettingstarted-start-editing' => '{{SITENAME}} é uma enciclopédia livre escrita por pessoas como você. [[Special:GettingStarted|Inicie]] fazendo sua primeira edição!',
	'notification-gettingstarted-start-editing-email-subject' => 'Comece com a edição de {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} é uma enciclopédia livre escrita por pessoas como você. Começe fazendo sua primeira edição!

Visite $2 para uma lista de jeitos fáceis de melhorar páginas.

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Começe a editar {{SITENAME}} ao visitar $2',
	'notification-gettingstarted-continue-editing' => 'Bom trabalho! Você já fez sua primeira edição na {{SITENAME}}. Se procura por mais coisas a fazer, aqui estão alguns [[Special:GettingStarted|jeitos fáceis de ajudar]].',
	'notification-gettingstarted-continue-editing-email-subject' => 'Jeitos fáceis de melhorar {{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Bom trabalho! Você já fez sua primeira edição na {{SITENAME}}.

Se procura por mais coisas a fazer,aqui está uma lista de jeitos fáceis de ajudar em $2

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Procurando por mais por fazer? Visite $2 para uma lista de jeitos fáceis de ajudar.',
);

/** Romanian (română)
 * @author Firilacroco
 */
$messages['ro'] = array(
	'gettingstarted' => 'Primii pași',
	'gettingstarted-welcomesiteuser' => 'Bine ați venit la $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Bine ați venit la $1!', # Fuzzy
	'gettingstarted-return' => 'Nu, mulțumesc, du-mă înapoi', # Fuzzy
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'gettingstarted' => 'Pe accumenzà',
	'gettingstarted-welcomesiteuser' => 'Bovègne sus a, $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Pe accumenzà',
	'gettingstarted-welcome-back-site-user' => 'Bovègne arrete, $2',
	'gettingstarted-return' => "← No grazie, tuèrne rrete 'a pàgene ca ste liggeve",
	'gettingstarted-project-link' => '{{ns:Project}}:Pe accumenzà',
	'gettingstarted-task-copyedit-main-description' => 'Corregge Pronunge & Grammateche',
	'gettingstarted-task-copyedit-secondary-description' => "'U mode cchiù 'mderra-'nderre pe accumenzà!",
	'gettingstarted-task-clarify-main-description' => "Migliore 'a Chiarezze",
	'gettingstarted-task-clarify-secondary-description' => 'Semblifiche o rescrive le frase.',
	'gettingstarted-task-addlinks-main-description' => 'Aggiunge le Collegaminde',
	'gettingstarted-task-addlinks-secondary-description' => 'Colleghe le vôsce de {{SITENAME}} inzieme.',
	'gettingstarted-task-toolbar-return-to-list-text' => "◄ Tuèrne a l'elenghe",
	'gettingstarted-task-toolbar-return-to-list-title' => "Tuèrne a l'elenghe de le vôsce",
	'gettingstarted-task-toolbar-editing-help-text' => "Fà vedè l'aijute",
	'gettingstarted-task-toolbar-editing-help-title' => "Fà vedè 'a guide su cumme se fanne le cangiaminde",
	'gettingstarted-task-toolbar-try-another-text' => "Pruève 'n'otra vôsce ►",
	'gettingstarted-task-toolbar-close-title' => 'Achiude sta barre de le struminde',
	'notification-gettingstarted-start-editing-email-subject' => 'Accuminze a cangià {{SITENAME}}',
	'notification-gettingstarted-continue-editing-email-subject' => 'Mode facile pe migliorà {{SITENAME}}',
);

/** Russian (русский)
 * @author DCamer
 * @author Iluvatar
 * @author Ole Yves
 */
$messages['ru'] = array(
	'gettingstarted' => 'Начало работы',
	'gettingstarted-desc' => 'Добавляет [[Special:GettingStarted|страницу приветствия]] для новых участников (показывается после создания учётной записи)',
	'gettingstarted-welcomesiteuser' => 'Добро пожаловать в $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Начало работы',
	'gettingstarted-welcome-back-site-user' => 'И вновь добро пожаловать, $2',
	'gettingstarted-task-header' => 'Спасибо за то, что присоединились к {{SITENAME}}! Вот несколько способов быстро включиться в работу.
Выберите внизу соответствующий вариант, и вы увидите случайные статьи, которые нуждаются в вашей помощи.',
	'gettingstarted-return' => 'Нет, спасибо, верните на страницу, которую я читал',
	'gettingstarted-project-link' => '{{ns:Project}}:Начало работы',
	'tag-gettingstarted_edit' => 'Новый редактор [[{{MediaWiki:gettingstarted-project-link}}|приступил к работе]]',
	'tag-gettingstarted_edit-description' => 'Редактировать страницы, которые участник выбрал из списка задач на странице [[Special:GettingStarted|Начала работы]]',
	'gettingstarted-task-copyedit-main-description' => 'Править правописание и грамматику',
	'gettingstarted-task-copyedit-secondary-description' => 'Самый простой способ начать работу!',
	'gettingstarted-task-clarify-main-description' => 'Повысить точность',
	'gettingstarted-task-clarify-secondary-description' => 'Упростите или измените формулировки предложений.',
	'gettingstarted-task-addlinks-main-description' => 'Добавить ссылки',
	'gettingstarted-task-addlinks-secondary-description' => 'Соединение статей {{SITENAME}}.',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Вернуться к списку',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Вернуться к списку статей',
	'gettingstarted-task-toolbar-editing-help-text' => 'Показать справку',
	'gettingstarted-task-toolbar-editing-help-title' => 'Показать руководство по редактированию',
	'gettingstarted-task-toolbar-try-another-text' => 'Попробовать в другой статье ►',
	'gettingstarted-task-toolbar-close-title' => 'Закрыть эту панель',
	'gettingstarted-task-copyedit-toolbar-description' => 'Эта статья имеет орфографические и грамматические ошибки. Вы можете их исправить.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Перейти к случайной статье, которую вы можете улучшить',
	'gettingstarted-task-clarify-toolbar-description' => 'Эта статья является слишком запутанной или неопределённой. Найдите способ сделать её более понятной.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Перейти к случайной статье, точность стиля изложения которой вы можете повысить',
	'gettingstarted-task-addlinks-toolbar-description' => 'Эта статья нуждается в ссылках. Найдите термины, статьи о которых есть в {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Перейти к случайной статье, в которой вы можете добавить ссылки',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Как начать работу',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Просто читайте статью и ищите способ её улучшить. Если вы чувствуете себя некомфортно, не волнуйтесь. Вам вовсе не нужно быть экспертом в этой теме. Если же вам нужна помощь или вы хотите попробовать в другой статье, используйте ссылки на верхней панели.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Идеи о том, что делать',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Эти баннеры перечисляют проблемы статьи. Вам не нужно решать их все, просто сделайте то, что вам по силам.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Нажмите {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Вы можете приступить к редактированию всей статьи целиком, нажав здесь.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Редактировать раздел',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Если вы хотите отредактировать конкретный раздел, то можете нажать на синюю ссылку '{{int:editsection}}', которая имеется сверху каждого раздела.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Вы можете отредактировать!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "Сейчас вы можете редактировать страницу. Когда вы закончите, нажмите кнопку '{{int:visualeditor-toolbar-savedialog}}' для просмотра и сохранения изменений.",
	'notification-gettingstarted-link-text-get-started' => 'Приступить к работе',
	'notification-gettingstarted-start-editing' => '{{SITENAME}} является свободной энциклопедией, написанные такими же людьми, как вы. [[Special:GettingStarted|Приступите к работе]] и совершите свои первые правки!',
	'notification-gettingstarted-start-editing-email-subject' => 'Начните работу по редактированию {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} является свободной энциклопедии, написанной такими же людьми, как вы. Сделайте вашу первую правку!

Посетите $2 для получения списка простых способов улучшить страницы.

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Приступить к редактированию {{SITENAME}}, посетив $2',
	'notification-gettingstarted-continue-editing' => 'Отличная работа! Вы уже совершили первые правки в {{SITENAME}}. Если вы хотите продолжить, то вот некоторые [[Special:GettingStarted|простые задачи]], в решении которых вы можете помочь.',
	'notification-gettingstarted-continue-editing-email-subject' => 'Простые способы улучшить {{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Отличная работа! Вы уже совершили первые правки в {{SITENAME}}.

Если вы хотите продолжить, имеется список простых задач, в решении которых вы можете помочь: $2 

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Хотите продолжить? Посетите $2 для получения списка простых задач, в решении которых вы можете помочь.',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'gettingstarted' => 'දැන් අරඹමු',
	'gettingstarted-welcomesiteuser' => '$1 වෙත පිළිගනිමු, $2!',
	'gettingstarted-welcomesiteuseranon' => '$1 වෙත පිළිගනිමු!', # Fuzzy
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Milicevic01
 */
$messages['sr-ec'] = array(
	'gettingstarted-task-addlinks-main-description' => 'Додај везе',
	'gettingstarted-task-toolbar-editing-help-text' => 'Прикажи помоћ',
);

/** Swedish (svenska)
 * @author Ainali
 * @author Jopparn
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'gettingstarted' => 'Komma igång',
	'gettingstarted-desc' => 'Lägger till en [[Special:GettingStarted|välkomstsida]] för nya användare (visas efter kontot har skapats)',
	'gettingstarted-welcomesiteuser' => 'Välkommen till $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Komma igång',
	'gettingstarted-welcome-back-site-user' => 'Välkommen tillbaka, $2',
	'gettingstarted-task-header' => 'Tack för att du gått med i {{SITENAME}}! Här är några sätt du kan engagera dig.

Välj ett alternativ nedan och du kommer att se en slumpmässig artikel som behöver hjälp.',
	'gettingstarted-return' => 'Nej tack, gå tillbaka till sidan jag läste',
	'gettingstarted-project-link' => '{{ns:Project}}:Komigång',
	'tag-gettingstarted_edit' => 'ny bidragsgivare [[{{MediaWiki:gettingstarted-project-link}}|komma igång]]',
	'tag-gettingstarted_edit-description' => 'Redigering av en sida som användaren valde från listan i [[Special:GettingStarted|Kom i gång]]',
	'gettingstarted-task-copyedit-main-description' => 'Fixa stavning & grammatik',
	'gettingstarted-task-copyedit-secondary-description' => 'Det enklaste sättet att komma igång!',
	'gettingstarted-task-clarify-main-description' => 'Förbättra tydligheten',
	'gettingstarted-task-clarify-secondary-description' => 'Förenkla eller formulera om meningar.',
	'gettingstarted-task-addlinks-main-description' => 'Lägg till länkar',
	'gettingstarted-task-addlinks-secondary-description' => 'Koppla ihop artiklar från {{SITENAME}}.',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Tillbaka till listan',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Återgå till listan med artiklar',
	'gettingstarted-task-toolbar-editing-help-text' => 'Visa hjälp',
	'gettingstarted-task-toolbar-editing-help-title' => 'Visa en guide om hur man redigerar',
	'gettingstarted-task-toolbar-try-another-text' => 'Försök med en annan artikel ►',
	'gettingstarted-task-toolbar-close-title' => 'Stäng detta verktygsfält',
	'gettingstarted-task-copyedit-toolbar-description' => 'Denna artikel har stavnings- och grammatikfel som du kan åtgärda.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Gå till en slumpmässig artikel som du kan förbättra genom copyediting',
	'gettingstarted-task-clarify-toolbar-description' => 'Denna artikel är förvirrande eller otydlig. Titta efter sätt som du kan göra den tydligare.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Gå till en slumpmässig artikel du kan klargöra',
	'gettingstarted-task-addlinks-toolbar-description' => 'Den här artikeln behöver fler länkar. Leta efter termer som har en artikel på {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Gå till en slumpmässig artikel där du kan lägga till länkar',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Hur du kommer igång',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Börja bara titta igenom artikeln efter förbättringar. Om du känner dig överväldigad, oroa dig inte. Du behöver inte vara expert på ämnet. Om du behöver hjälp eller vill försöka med en annan artikel så använder du länkarna i det översta fältet.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Idéer på vad du kan göra',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Dessa banners identifiera problem med denna artikel. Du behöver inte ta itu med dem alla, fokusera bara på de som du känner dig bekväm med att åtgärda.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Klicka på {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Du kan redigera hela artikeln genom att klicka här.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Redigera ett avsnitt',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Om du vill redigera ett särskilt avsnitt, kan du klicka på den blå länken '{{int:editsection}}', högst upp i varje avsnitt.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Du kan redigera!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "Du kan nu redigera sidan. När du är färdig, klicka på  '{{int:visualeditor-toolbar-savedialog}}' för att förhandsgranska och spara dina ändringar.",
	'notification-gettingstarted-link-text-get-started' => 'Kom igång',
	'notification-gettingstarted-start-editing' => '{{SITENAME}} är en fri encyklopedi skriven av människor som dig. [[Special:GettingStarted|Kom igång]] genom att göra din första redigering!',
	'notification-gettingstarted-start-editing-email-subject' => 'Komma igång genom att redigera {{SITENAME}}',
	'notification-gettingstarted-continue-editing-email-subject' => 'Enkla sätt att förbättra {{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Söker du efter mer att göra? Besök $2 för en lista över saker du enkelt kan hjälpa till med.',
);

/** Tamil (தமிழ்)
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'gettingstarted-welcomesiteuser' => '$1-க்கு வருக, $2!',
	'gettingstarted-welcomesiteuseranon' => '$1-க்கு வருக!', # Fuzzy
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'gettingstarted' => 'మొదలుపెట్టడం',
	'gettingstarted-welcomesiteuser' => '$1కి స్వాగతం, $2!',
	'gettingstarted-welcomesiteuseranon' => '$1కి స్వాగతం!', # Fuzzy
	'gettingstarted-return' => 'వద్దు, నన్ను వెనక్కు తీసుకువెళ్ళు', # Fuzzy
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Base
 * @author Ата
 */
$messages['uk'] = array(
	'gettingstarted' => 'Початок роботи',
	'gettingstarted-desc' => 'Додає [[Special:GettingStarted|вітальну сторінку]] для нових користувачів (показується після створення облікового запису)',
	'gettingstarted-welcomesiteuser' => 'Вітаємо у проекті $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Початок роботи',
	'gettingstarted-welcome-back-site-user' => 'Вітаємо знову, $2',
	'gettingstarted-task-header' => 'Дякуємо, що приєднались до {{SITENAME}}! Ось кілька способів включитись в роботу.

Оберіть варіант внизу, і Ви побачите випадкову статтю, яка потребує допомоги.',
	'gettingstarted-return' => '← Ні, дякую, поверніть на сторінку, яку я читав',
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	'tag-gettingstarted_edit' => 'новий дописувач [[{{MediaWiki:gettingstarted-project-link}}|почав працювати]]',
	'tag-gettingstarted_edit-description' => 'Редагування сторінки, яку користувач обрав зі списку завдань на сторінці [[Special:GettingStarted|Початок роботи]]',
	'gettingstarted-task-copyedit-main-description' => 'Виправити орфографію і граматику',
	'gettingstarted-task-copyedit-secondary-description' => 'Найпростіший спосіб почати роботу!',
	'gettingstarted-task-clarify-main-description' => 'Покращити точність',
	'gettingstarted-task-clarify-secondary-description' => 'Спростити або перефразувати речення.',
	'gettingstarted-task-addlinks-main-description' => 'Додати посилання',
	'gettingstarted-task-addlinks-secondary-description' => "Об'єднати статті {{SITENAME}}.",
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Назад до списку',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Повернутися до списку статей',
	'gettingstarted-task-toolbar-editing-help-text' => 'Показати довідку',
	'gettingstarted-task-toolbar-editing-help-title' => 'Показати посібник з редагування',
	'gettingstarted-task-toolbar-try-another-text' => 'Спробувати іншу статтю ►',
	'gettingstarted-task-toolbar-close-title' => 'Закрити цю панель',
	'gettingstarted-task-copyedit-toolbar-description' => 'У цій статті є орфографічні і граматичні помилки, які Ви можете виправити.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Перейти до випадкової статті, яку ви можете покращити технічним редагуванням',
	'gettingstarted-task-clarify-toolbar-description' => 'Ця стаття заплутана чи невизначена. Знайдіть спосіб зробити її зрозумілішою.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Перейти до випадкової сторінки, яку ви можете зробити чіткішою',
	'gettingstarted-task-addlinks-toolbar-description' => 'Ця стаття потребує більше посилань. Дивитися терміни, статті про які є у {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Перейти до випадкової статті, до якої ви можете додати посилання',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Як розпочати роботу',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Просто прогляньте статтю і пошукайте те, що ви можете покращити. Якщо почуваєтесь спантеличено, не хвилюйтесь. Вам не треба бути експертом з цього питання! Якщо вам треба допомога чи ви хочете спробувати іншу статтю, скористайтесь посиланнями на верхній панелі.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ідеї щодо того, що можна зробити',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Ці банери визначають проблеми цієї статті. Вам не треба вирішувати їх усі, просто зробіть те, що вам під силу.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Натисніть {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Ви можете редагувати усю статтю, натиснувши тут.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Редагувати розділ',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Якщо ви хочете редагувати окремий розділ, можна натиснути на блакитне посилання '{{int:editsection}}' вгорі кожного розділу.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Ви можете редагувати!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "Ви тепер можете редагувати сторінку. Коли закінчите, натисніть '{{int:visualeditor-toolbar-savedialog}}', щоб переглянути і зберегти свої зміни.",
	'notification-gettingstarted-link-text-get-started' => 'Почати роботу',
	'notification-gettingstarted-start-editing' => '{{SITENAME}} — це вільна енциклопедія, написана такими ж людьми, як і Ви. [[Special:GettingStarted|Почніть роботу]], зробивши своє перше редагування!',
	'notification-gettingstarted-start-editing-email-subject' => 'Почніть роботу з редагування {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} — це вільна енциклопедія, написана такими ж людьми, як і Ви. Почніть роботу, зробивши своє перше редагування!

Відвідайте $2, щоб отримати список простих способів покращення сторінок.

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Почніть редагування {{SITENAME}} з відвідання $2',
	'notification-gettingstarted-continue-editing' => 'Чудова робота! Ви уже зробили свої перші редагування {{SITENAME}}. Якщо шукаєте, що б іще можна було зробити, ось кілька [[Special:GettingStarted|простих способів допомогти]].',
	'notification-gettingstarted-continue-editing-email-subject' => 'Прості способи покращити {{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Чудова робота! Ви уже зробили свої перші редагування {{SITENAME}}. 

Якщо шукаєте, що б іще можна було зробити, є кілька простих способів допомогти на $2

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Хочете продовжити? Відвідайте $2, де є список простих способів допомогти.',
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
	'gettingstarted-task-header' => 'Cám ơn bạn đã tham gia {{SITENAME}}! Bạn có thể bắt đầu đóng góp với các công việc cơ bản này.',
	'gettingstarted-return' => 'Thôi, quay lại trang vừa rồi',
	'gettingstarted-project-link' => '{{ns:Project}}:Bắt đầu',
	'tag-gettingstarted_edit' => 'Người dùng mới đang [[{{MediaWiki:gettingstarted-project-link}}|bắt đầu]]',
	'tag-gettingstarted_edit-description' => 'Sửa đổi trang được gợi ý trong danh sách việc cần làm tại [[Special:GettingStarted|Bắt đầu]]',
	'gettingstarted-task-copyedit-main-description' => 'Sửa chính tả & ngữ pháp',
	'gettingstarted-task-copyedit-secondary-description' => 'Cách bắt đầu dễ nhất!',
	'gettingstarted-task-clarify-main-description' => 'Viết rõ hơn',
	'gettingstarted-task-clarify-secondary-description' => 'Viết lại câu làm đơn giản hơn.',
	'gettingstarted-task-addlinks-main-description' => 'Đặt liên kết',
	'gettingstarted-task-addlinks-secondary-description' => 'Liên kết các bài {{SITENAME}} với nhau.',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Quay lại danh sách',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Quay lại danh sách bài',
	'gettingstarted-task-toolbar-editing-help-text' => 'Xem trợ giúp',
	'gettingstarted-task-toolbar-editing-help-title' => 'Xem hướng dẫn sửa đổi',
	'gettingstarted-task-toolbar-try-another-text' => 'Thử sửa bài khác ►',
	'gettingstarted-task-toolbar-close-title' => 'Đóng thanh công cụ này',
	'gettingstarted-task-copyedit-toolbar-description' => 'Bài này có lỗi chính tả và ngữ pháp mà bạn có thể sửa chữa.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Mở bài ngẫu nhiên để cải thiện văn phong',
	'gettingstarted-task-clarify-toolbar-description' => 'Bài này gây nhầm lẫn hoặc không rõ. Hãy cố gắng làm cho nó rõ ràng hơn.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Mở bài ngẫu nhiên để viết rõ hơn',
	'gettingstarted-task-addlinks-toolbar-description' => 'Bài này cần thêm liên kết. Hãy tìm những cụm từ đã có bài trên {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Mở bài ngẫu nhiên để đặt liên kết',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Cách bắt đầu',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Chỉ việc đọc lướt qua bài và tìm cách cải thiện. Đừng lo lắng, bạn không cần chuyên môn về chủ đề này! Nếu bạn cần thêm hướng dẫn hay muốn thử bài khác, hãy sử dụng các liên kết ở thanh trên.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Gợi ý',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Các cờ ngang này nêu ra các vấn đề trong bài. Bạn không cần giải quyết tất cả mọi vấn đề. Hãy thoải mái muốn sửa gì thì sửa.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Nhấn chuột vào “{{int:vector-view-edit}}”',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Nhấn chuột vào đây để sửa toàn bộ bài.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Sửa đổi phần',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Để chỉ sửa đổi một phần, bạn có thể nhấn chuột vào liên kết “{{int:editsection}}” màu xanh bên cạnh đề mục của phần đó.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Bạn có thể sửa đổi!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Bạn hiện có thể sửa đổi trang này. Sau khi hoàn tất, hãy bấm “{{int:visualeditor-toolbar-savedialog}}” để xem lại và lưu các thay đổi của bạn.',
	'notification-gettingstarted-link-text-get-started' => 'Bắt đầu',
	'notification-gettingstarted-start-editing' => '{{SITENAME}} là bách khoa toàn thư mở do công sức của nhiều người như bạn. Hãy [[Special:GettingStarted|bắt đầu đóng góp]] với thay đổi đầu tiên của bạn!',
	'notification-gettingstarted-start-editing-email-subject' => 'Bắt đầu sửa đổi {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} là bách khoa toàn thư mở do công sức của nhiều người như bạn. Hãy bắt đầu đóng góp với thay đổi đầu tiên của bạn!

Ghé vào $2 để xem danh sách những cách cải thiện trang dễ dàng.

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Hãy bắt đầu sửa đổi {{SITENAME}}: xem chi tiết tại $2',
	'notification-gettingstarted-continue-editing' => 'Cám ơn bạn đã bắt đầu sửa đổi {{SITENAME}}. Gợi ý xem một vài [[Special:GettingStarted|cách dễ dàng để tiếp tục giúp đỡ]].',
	'notification-gettingstarted-continue-editing-email-subject' => 'Những cách dễ dàng để cải thiện {{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Cám ơn bạn đã bắt đầu sửa đổi {{SITENAME}}.

Gợi ý xem danh sách những cách dễ dàng để tiếp tục đóng góp tại $2

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Muốn tiếp tục đóng góp? Gợi ý xem danh sách những cách dễ dàng để giúp đỡ tại $2 .',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hydra
 * @author Li3939108
 * @author Qiyue2001
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
	'gettingstarted-return' => '← 不必了，回到我原来阅读的地方',
	'gettingstarted-project-link' => '{{ns:Project}}:入门指南',
	'tag-gettingstarted_edit' => '新编辑者[[{{MediaWiki:gettingstarted-project-link}}|入门]]',
	'tag-gettingstarted_edit-description' => '用户从[[Special:GettingStarted|入门指南]]任务列表上选择而作的编辑。',
	'gettingstarted-task-copyedit-main-description' => '纠正拼写和语法',
	'gettingstarted-task-clarify-main-description' => '提高清晰度',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => '如何开始',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => '您可以通过单击此处编辑整篇文章。',
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
	'gettingstarted-task-addlinks-main-description' => '添加連結',
	'gettingstarted-task-toolbar-editing-help-text' => '顯示説明',
);
