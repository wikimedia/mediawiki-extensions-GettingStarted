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
	'gettingstarted-task-header' => "We're glad you're here. Below are some easy ways to get started with contributing.",
	'gettingstarted-return' => "← No thanks, go back to where I was",
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	'gettingstarted-task-1' => '',
	'gettingstarted-task-2' => '',
	'gettingstarted-task-3' => '',
	// Change tags
	'tag-gettingstarted_edit' => '[[Special:Tags|Tag]]: new editor [[{{MediaWiki:gettingstarted-project-link}}|getting started]]',
	'tag-gettingstarted_edit-description' => 'Edit of a page that the user chose from the task list in [[Special:GettingStarted|Getting started]]',

	// Tours

	// gettingstartedpage
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Copyedit',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Copy editing is simply improving the spelling, grammar, and style. The pages below are in decent shape, but some people felt they could be better. See if you can improve things.',
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Improve clarity',
	'guidedtour-tour-gettingstartedpage-clarification-description' => 'Other people have marked these pages as confusing, unclear, or vague. You don\'t have to be an expert in the topic, just look for \'Clarification needed\' tags to see what needs fixing.',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Add links',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Ever spent hours just clicking around on {{SITENAME}}? Every link is added by hand, and we need your help adding some.'

);

/** Message documentation (Message documentation)
 * @author Shirayuki
 * @author spage
 */
$messages['qqq'] = array(
	'gettingstarted' => "The name of the extension's entry in [[Special:SpecialPages]]",
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
	'gettingstarted-task-1' => 'Wikitext for first randomly ordered GettingStarted task message',
	'gettingstarted-task-2' => 'Wikitext for second randomly ordered GettingStarted task message',
	'gettingstarted-task-3' => 'Wikitext for third randomly ordered GettingStarted task message',
	'tag-gettingstarted_edit' => 'Text of tag identifying an edit from GettingStarted that appears e.g. in [[Special:RecentChanges]].

See also:
* {{msg-mw|tag-gettingstarted_edit-description}}',
	'tag-gettingstarted_edit-description' => 'Description of tag that appears e.g. in [[Special:Tags]]',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Title of copy-editing tooltip on Special:GettingStarted',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Description of copy-editing tooltip on Special:GettingStarted',
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Title of clarification tooltip on Special:GettingStarted',
	'guidedtour-tour-gettingstartedpage-clarification-description' => 'Description of clarification tooltip on Special:GettingStarted',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Title of tooltip about adding links on Special:GettingStarted.
{{Identical|Add link}}',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Description of tooltip about adding links on Special:GettingStarted',
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
 * @author Y-M D
 */
$messages['br'] = array(
	'gettingstarted' => 'Kregiñ ganti',
);

/** Czech (česky)
 * @author Vks
 */
$messages['cs'] = array(
	'gettingstarted-welcomesiteuser' => 'Vítá vás $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Vítejte na $1!',
	'gettingstarted-return' => 'Ne, děkuji, vemte mě zpět',
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
	'gettingstarted-msg' => 'Ein Administrator auf {{SITENAME}} sollte diese Nachricht durch das Bearbeiten von [[{{ns:MediaWiki}}:gettingstarted-msg]] anpassen.',
	'gettingstarted-welcomesiteuser' => 'Willkommen bei $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Erste Schritte',
	'gettingstarted-welcome-back-site-user' => 'Willkommen zurück, $2',
	'gettingstarted-task-header' => 'Wir freuen uns, dass du hier bist. Unten gibt es einige einfache Wege, um anzufangen.',
	'gettingstarted-return' => 'Nein danke. Dort zurückgehen, wo ich war.',
	'gettingstarted-project-link' => '{{ns:Project}}:Erste Schritte',
	'gettingstarted-task-1' => '',
	'gettingstarted-task-2' => '',
	'gettingstarted-task-3' => '',
	'tag-gettingstarted_edit' => '[[Special:Tags|Markierung]]: [[{{MediaWiki:gettingstarted-project-link}}|Erste Schritte]] eines neuen Autors',
	'tag-gettingstarted_edit-description' => 'Bearbeitung einer Seite, die der Benutzer aus der Aufgabenliste der Spezialseite „[[Special:GettingStarted|Anfangen]]“ ausgewählt hat',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Lektorat',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Redigieren ist das einfache Verbessern der Rechtschreibung, Grammatik und der Gestaltung. Die unten stehenden Seiten sind in annehmbarer Form, aber einige Leute denken, dass sie besser sein könnten. Schaue, ob du Dinge verbessern kannst.',
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Klarheit verbessern',
	'guidedtour-tour-gettingstartedpage-clarification-description' => 'Andere Leute haben diese Seiten als verwirrend, unklar oder ungenau markiert. Du musst kein Experte in dem Thema sein. Schaue einfach nach „Klärung nötig“-Markierungen, um zu sehen, was einer Verbesserung bedarf.',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Links hinzufügen',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Hast du schon mehrere Stunden mit Herumklicken auf {{SITENAME}} verbracht? Jeder Link wird manuell hinzugefügt und wir brauchen dazu deine Hilfe.',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'gettingstarted' => 'Prědne kšace',
	'gettingstarted-desc' => 'Pśidawa [[Special:GettingStarted|pówitański bok]] za nowych wužywarjow, kótaryž pokazujo se pó załoženju konta',
	'gettingstarted-msg' => 'Administrator na {{GRAMMAR:lokatiw|{{SITENAME}}}} by měł toś tu powěźeńku pśez wobźěłowanje [[{{ns:MediaWiki}}:gettingstarted-msg]] pśiměriś.',
	'gettingstarted-welcomesiteuser' => 'Witaj do $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Prědne kšace',
	'gettingstarted-welcome-back-site-user' => 'Witaj slědk, $2',
	'gettingstarted-return' => 'Ně, źěkujom se, źi slědk',
	'gettingstarted-project-link' => '{{ns:Project}}:Prědne kšace',
	'tag-gettingstarted_edit' => '[[Special:Tags|Marka]]: [[{{MediaWiki:gettingstarted-project-link}}|Prědne kšace]] nowego wobźěłarja',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Redakcija',
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Jasnosć pólěpšyś',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Wótkaze pśidaś',
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
 * @author Armando-Martin
 * @author Fitoschido
 */
$messages['es'] = array(
	'gettingstarted' => 'Primeros pasos',
	'gettingstarted-desc' => 'Agrega una [[Special:GettingStarted|página de bienvenida]] a los nuevos usuarios (se muestra después de la creación de la cuenta)',
	'gettingstarted-msg' => 'Un administrador de {{SITENAME}} debe personalizar este mensaje editando [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Hola $2 ¡Bienvenido a $1!',
	'gettingstarted-welcomesiteuseranon' => '¡Bienvenido a $1!',
	'gettingstarted-return' => 'No gracias, volver atrás', # Fuzzy
	'gettingstarted-project-link' => '{{ns:Project}}:PrimerosPasos',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'gettingstarted' => 'Alustamine',
	'gettingstarted-welcomesiteuser' => 'Tere tulemast võrgukohta $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Tere tulemast võrgukohta $1!',
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
 * @author VezonThunder
 */
$messages['fi'] = array(
	'gettingstarted' => 'Alkuaskeleet',
	'gettingstarted-desc' => 'Lisää [[Special:GettingStarted|tervetulosivun]] uusille käyttäjille (näytetään tunnuksen luonnin jälkeen)',
	'gettingstarted-msg' => 'Sivuston {{SITENAME}} ylläpitäjän tulisi mukauttaa tätä viestiä muokkaamalla sivua [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Tervetuloa sivustolle $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Tervetuloa sivustolle $1!',
	'gettingstarted-return' => 'Ei kiitos, vie minut takaisin',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author Jean-Frédéric
 */
$messages['fr'] = array(
	'gettingstarted' => 'Pour commencer',
	'gettingstarted-desc' => 'Ajoute une [[Special:GettingStarted|page d’accueil]] pour les nouveaux utilisateurs (affichée après la création de compte)',
	'gettingstarted-msg' => 'Un administrateur sur {{SITENAME}} devrait personnaliser ce message en modifiant [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Bienvenue sur $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Pour commencer',
	'gettingstarted-welcome-back-site-user' => 'Bienvenue de nouveau, $2',
	'gettingstarted-task-header' => 'Nous sommes heureux que vous soyez ici. Vous trouverez ci-dessous quelques moyens faciles de démarrer votre contribution.',
	'gettingstarted-return' => 'Non merci, revenir là où j’étais',
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	'gettingstarted-task-1' => ' ',
	'gettingstarted-task-2' => ' ',
	'gettingstarted-task-3' => ' ',
	'tag-gettingstarted_edit' => '[[Special:Tags|Balise]]: un nouvel éditeur [[{{MediaWiki:gettingstarted-project-link}}|a débuté]]',
	'tag-gettingstarted_edit-description' => "Modification d'une page choisie par l’utilisateur dans la liste des tâches dans [[Special:GettingStarted|Pour commencer]]",
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Relecture',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => "Reprendre la copie consiste à améliorer l'orthographe, la grammaire et le style. Les pages ci-dessous sont dans un bon état, mais certains pensent qu’elles pourraient être encore meilleures. Voyez si vous pouvez améliorer les choses.",
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Améliorer la clarté',
	'guidedtour-tour-gettingstartedpage-clarification-description' => "D’autres personnes ont marqué ces pages comme confuses, non claires, ou vagues. Vous n’avez pas besoin d’être un expert du domaine, mais juste de regarder les balises 'Clarification demandée' pour voir ce qui doit être corrigé.",
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Ajouter des liens',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Avez-vous déjà passé des heures à cliquer ici et là dans {{SITENAME}}? Chaque lien est ajouté à la main, et nous avons besoin de votre aide pour en ajouter d’autres.',
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
	'gettingstarted-msg' => 'Un adminitrador de {{SITENAME}} debería personalizar esta mensaxe editando "[[{{ns:MediaWiki}}:gettingstarted-msg]]".',
	'gettingstarted-welcomesiteuser' => '{{GENDER:$2|Benvido|Benvida}} a $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Primeiros pasos',
	'gettingstarted-welcome-back-site-user' => '{{GENDER:$2|Benvido|Benvida}} de volta, $2',
	'gettingstarted-task-header' => 'Alegrámonos de que estea aquí. A continuación hai algunhas maneiras fáciles de empezar a contribuír.',
	'gettingstarted-return' => '← Non, grazas; volver a onde estaba',
	'gettingstarted-project-link' => '{{ns:Project}}:Primeiros pasos',
	'tag-gettingstarted_edit' => '[[Special:Tags|Etiqueta]]: Novo editor dando os [[{{MediaWiki:gettingstarted-project-link}}|primeiros pasos]]',
	'tag-gettingstarted_edit-description' => 'Modificación dunha páxina que o usuario elixiu desde a lista de tarefas dos [[Special:GettingStarted|primeiros pasos]]',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Corrección',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'A corrección consiste na mellora da redacción, gramática e estilo. As páxinas que hai a continuación teñen un formato decente, pero algunhas persoas cren que poden estar mellor. A ver se vostede pode mellorar as cousas.',
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Mellorar a claridade',
	'guidedtour-tour-gettingstartedpage-clarification-description' => 'Outras persoas marcaron estas páxinas como confusas, pouco claras ou imprecisas. Non ten que ser experto na materia, simplemente busque as etiquetas de "Cómpre clarificar" para saber o que necesita corrixirse.',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Engadir ligazóns',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Algunha vez pasou horas premendo aquí e acolá nas páxinas de {{SITENAME}}? Cada ligazón engádese á man e necesitamos a súa axuda para engadir algunhas.',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'gettingstarted' => 'איך להתחיל',
	'gettingstarted-desc' => 'הוספת [[Special:GettingStarted|דף "ברוך בואך"]] למשתמשים חדשים (מוצג אחרי יצירת החשבון)',
	'gettingstarted-msg' => 'מפעיל באתר {{SITENAME}} אמור להתאים את ההודעה הזאת על ידי עריכת הדף [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'ברוך בואך אל $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'ברוך בואך אל $1!',
	'gettingstarted-return' => 'לא תודה, קחו אותי חזרה',
	'tag-gettingstarted_edit' => '[[Special:Tags|Tag]]: עורך חדש [[{{MediaWiki:gettingstarted-project-link}}|מתחיל לעבוד]]',
	'tag-gettingstarted_edit-description' => 'עריכה של דף שהמשתמש בחר מתוך רשימת מטלות בדף [[Special:GettingStarted|איך להתחיל]]',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'gettingstarted' => 'Prěnje kroki',
	'gettingstarted-desc' => 'Přidawa [[Special:GettingStarted|witansku stronu]] za nowych wužiwarjow, kotraž so po załoženju konta pokazuje',
	'gettingstarted-msg' => 'Administrator na {{GRAMMAR:lokatiw|{{SITENAME}}}} měł tutu zdźělenku přez wobdźěłowanje [[{{ns:MediaWiki}}:gettingstarted-msg]] přiměrić.',
	'gettingstarted-welcomesiteuser' => 'Witaj do $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Prěnje kroki',
	'gettingstarted-welcome-back-site-user' => 'Witaj wróćo, $2',
	'gettingstarted-return' => 'Ně, dźakuju so, dźi wróćo',
	'gettingstarted-project-link' => '{{ns:Project}}:Prěnje kroki',
	'tag-gettingstarted_edit' => '[[Special:Tags|Značka]]: [[{{MediaWiki:gettingstarted-project-link}}|Prěnje kroki]] noweho wobdźěłarja',
	'tag-gettingstarted_edit-description' => 'Změna strony, kotruž wužiwar je z lisćiny nadawkow ze strony [[Special:GettingStarted|Prěnje kroki]] wubrał',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Redakcija',
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Jasnosć polěpšić',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Wotkazy přidać',
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
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Ստեղծել հղումը',
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
	'gettingstarted-msg' => 'Un amministratore di {{SITENAME}} dovrebbe personalizzare questo messaggio modificando [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Benvenuto su $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Benvenuto su $1!',
	'gettingstarted-return' => 'No grazie, riportami dove stavo prima',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'gettingstarted-desc' => '新しい利用者向けに[[Special:GettingStarted|ようこそページ]]を追加する (アカウント作成した際に表示される)',
	'gettingstarted-welcomesiteuser' => '$2さん、$1へようこそ!',
	'gettingstarted-welcomesiteuseranon' => '$1へようこそ!', # Fuzzy
	'gettingstarted-welcome-back-site-user' => '$2さん、おかえりなさい',
	'gettingstarted-return' => '← 不要です。元の場所に戻ります',
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	'tag-gettingstarted_edit-description' => '利用者が [[Special:GettingStarted|Getting started]] のタスク一覧から選択したページの編集',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'リンクの追加',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'gettingstarted-welcomesiteuser' => 'მოგესალმებით $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'მოგესალმებით, $1!',
	'gettingstarted-return' => 'არა გმადლობთ, დამაბრუნეთ უკან',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'gettingstarted' => '시작하기',
	'gettingstarted-desc' => '새 사용자를 위한 [[Special:GettingStarted|환영 문서]]를 추가합니다 (계정을 만들고 나서 나타납니다)',
	'gettingstarted-msg' => '{{SITENAME}}의 관리자가 [[{{ns:MediaWiki}}:gettingstarted-msg]] 메시지를 편집하여 이 메시지를 사용자 정의해야 합니다.',
	'gettingstarted-welcomesiteuser' => '$2님, $1에 오신 것을 환영합니다!',
	'gettingstarted-welcomesiteuseranon' => '$1에 오신 것을 환영합니다!',
	'gettingstarted-return' => '괜찮습니다, 돌아가겠습니다',
	'gettingstarted-project-link' => '{{ns:Project}}:시작하기',
	'tag-gettingstarted_edit' => '[[Special:Tags|태그]]: 새 편집자 [[{{MediaWiki:gettingstarted-project-link}}|시작하기]]',
	'tag-gettingstarted_edit-description' => '사용자가 [[Special:GettingStarted]]에 작업 목록에서 선택한 문서의 편집', # Fuzzy
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

/** Minangkabau (Baso Minangkabau)
 * @author Iwan Novirion
 */
$messages['min'] = array(
	'gettingstarted' => 'Caro mamulai',
	'gettingstarted-desc' => 'Manambahkan [[Special:GettingStarted|laman salamaik datang]] untuak pangguno baru (langsuang nampak salasai mambuek akun)',
	'gettingstarted-msg' => 'Panguruih {{SITENAME}} harus mangubah pasan ko jo manyuntiang pasan sistem [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Salamaik datang di $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Salamaik datang di $1!', # Fuzzy
	'gettingstarted-return' => 'Mokasih sajolah. Bawok Ambo baliak', # Fuzzy
	'gettingstarted-project-link' => '{{ns:Project}}:Caro mamulai',
	'tag-gettingstarted_edit' => '[[Special:Tags|Tag]]: pangguno baru [[{{MediaWiki:gettingstarted-project-link}}|caro mamulai]]',
	'tag-gettingstarted_edit-description' => 'Suntiangan laman nan pangguno piliah dari dafta tugas pado [[Special:GettingStarted|Caro mamulai]]',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'gettingstarted' => 'Како да почнете',
	'gettingstarted-desc' => 'Става [[Special:GettingStarted|страница за добре дојде]] за новите корисници (се прикажува откако ќе ја направат сметката)',
	'gettingstarted-msg' => 'Администратор на {{SITENAME}} треба да ја прилагоди поракава, менувајќи го [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Добре дојдовте на $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Како да почнете',
	'gettingstarted-welcome-back-site-user' => 'Добре дојдвте повторно, $2',
	'gettingstarted-task-header' => 'Драго ни е што сте тука. Еве како лесно да почнете со придонесување.',
	'gettingstarted-return' => '← Не благодарам. Врати ме назад',
	'gettingstarted-project-link' => '{{ns:Project}}:ПрвиЧекори',
	'tag-gettingstarted_edit' => '[[Special:Tags|Ознака]]: нов уредник [[{{MediaWiki:gettingstarted-project-link}}|почнува со работа]]',
	'tag-gettingstarted_edit-description' => 'Уредување на страница што корисникот ја одбрал од списокот на задачи на [[Special:GettingStarted|Први чекори]]',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Лекторирање',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Лекторирањето едноставно значи исправка на изразувањето. Долунаведените статии се пристојно направени, но некои корисници сметаат дека можат да бидат подобри. Видете дали можете да ги подобрите. Едноставно стиснете на јазичето „{{int:vector-view-edit}}“!', # Fuzzy
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Текстот треба да биде појасен',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Додај врски',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Дали некогаш по грешка сте провеле два часа стискајќи по {{SITENAME}}? Ете, и ние исто. Изберете една од статиите и гледајте по зборовите каде може да се стават врски до други статии. Едноставно стиснете на јазичето „{{int:vector-view-edit}}“ за да ги ставите!', # Fuzzy
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'gettingstarted' => 'Permulaan',
	'gettingstarted-desc' => 'Meletakkan [[Special:GettingStarted|halaman selamat datang]] untuk pengguna baru (dipaparkan selepas pembukaan akaun)',
	'gettingstarted-msg' => 'Seorang pentadbir di {{SITENAME}} harus mengubahsuai pesanan ini dengan menyunting [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Selamat datang ke $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Selamat datang ke $1!',
	'gettingstarted-return' => 'Tak apalah, bawa saya balik',
	'gettingstarted-project-link' => '{{ns:Project}}:Permulaan',
	'tag-gettingstarted_edit' => '[[Special:Tags|Teg]]: penyunting baru [[{{MediaWiki:gettingstarted-project-link}}|hendak bermula]]',
	'tag-gettingstarted_edit-description' => 'Suntingan halaman yang dipilih oleh pengguna dari senarai tugas dalam [[Special:GettingStarted|Permulaan]]',
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
 * @author Siebrand
 */
$messages['nl'] = array(
	'gettingstarted' => 'Aan de slag',
	'gettingstarted-desc' => 'Voegt een [[Special:GettingStarted|welkomstpagina]] voor nieuwe gebruikers toe na registereren',
	'gettingstarted-msg' => 'Een beheerder van {{SITENAAM}} hoort dit bericht aan te passen door [[{{ns:MediaWiki}}:gettingstarted-msg]] te bewerken.',
	'gettingstarted-welcomesiteuser' => 'Welkom bij $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Welkom bij $1',
	'gettingstarted-return' => 'Nee bedankt. Ik wil graag terug',
	'gettingstarted-project-link' => '{{ns:Project}}:Aan de slag',
	'tag-gettingstarted_edit' => '[[Special:Tags|Label]]: nieuwe bewerker [[{{MediaWiki:gettingstarted-project-link}}|aan de slag]]',
	'tag-gettingstarted_edit-description' => 'Bewerking aan een pagina die de gebruiker heeft gekozen uit de takenlijst op [[Special:GettingStarted|aan de slag]]',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'gettingstarted' => 'Për ancaminé',
	'gettingstarted-desc' => "A gionta na [[Special:GettingStarted|pàgina ëd bin-ëvnù]] për j'utent neuv (smonùa apress la creassion dël cont)",
	'gettingstarted-msg' => "N'aministrator dzor {{SITENAME}} a dovrìa përsonalisé ës mëssagi an modificand [[{{ns:MediaWiki}}:gettingstarted-msg]].",
	'gettingstarted-welcomesiteuser' => 'Bin-ëvnù su $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Bin ëvnù a $1!',
	'gettingstarted-return' => 'Nò mersì, pòrtme andré', # Fuzzy
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	'tag-gettingstarted_edit' => '[[Special:Tags|Tichëtta]]: editor neuv [[{{MediaWiki:gettingstarted-project-link}}|ancaminé]]',
	'tag-gettingstarted_edit-description' => "Modìfica ëd na pagina che l'utent a sern da la lista dij travaj an [[Special:GettingStarted]]", # Fuzzy
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
	'gettingstarted-project-link' => '{{ns:Project}}:Pe accumenzà',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Aggiunge le collegaminde',
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
	'gettingstarted-msg' => 'En administratör på {{SITENAME}} borde anpassa detta meddelande genom att redigera [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Välkommen till $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Välkommen till $1!',
	'gettingstarted-return' => 'Nej tack, ta mig tillbaka',
	'gettingstarted-project-link' => '{{ns:Project}}:Komigång',
	'tag-gettingstarted_edit' => '[[Special:Tags|Tagg]]: ny bidragsgivare [[{{MediaWiki:gettingstarted-project-link}}|kom i gång]]',
	'tag-gettingstarted_edit-description' => 'Redigering av en sida som användaren valde från listan i [[Special:GettingStarted|Kom i gång]]',
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

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'gettingstarted' => 'Bắt đầu',
	'gettingstarted-desc' => 'Thêm một [[Special:GettingStarted|trang hoan nghênh]] xuất hiện cho người dùng lúc khi mở tài khoản xong',
	'gettingstarted-msg' => 'Các bảo quản viên tại {{SITENAME}} cần tùy chỉnh thông điệp này bằng cách sửa đổi [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Chào mừng $2 đến với $1!',
	'gettingstarted-welcomesiteuseranon' => 'Chào mừng bạn đến với $1!',
	'gettingstarted-return' => 'Thôi, quay lại',
	'gettingstarted-project-link' => '{{ns:Project}}:Bắt đầu',
	'tag-gettingstarted_edit' => '[[Special:Tags|Thẻ]]: Người dùng mới đang [[{{MediaWiki:gettingstarted-project-link}}|bắt đầu]]',
	'tag-gettingstarted_edit-description' => 'Sửa đổi trang được gợi ý trong danh sách việc cần làm tại [[Special:GettingStarted]]',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hydra
 * @author 乌拉跨氪
 */
$messages['zh-hans'] = array(
	'gettingstarted' => '开始',
	'gettingstarted-desc' => '添加一个为新用户的[[Special:GettingStarted|欢迎页面]]（在用户创建后显示）',
	'gettingstarted-msg' => '一个{{SITENAME}}的管理员应该编辑[[{{ns:MediaWiki}}:gettingstarted-msg]]来定制此信息。',
	'gettingstarted-welcomesiteuser' => '欢迎光临$1，$2！',
	'gettingstarted-welcomesiteuseranon' => '欢迎光临$1！',
	'gettingstarted-return' => '不必了，请带我回去',
	'gettingstarted-project-link' => '{{ns:Project}}:入门指南',
	'tag-gettingstarted_edit' => '[[Special:Tags|标签]]：新编者 [[{{MediaWiki:gettingstarted-project-link}}|入门]]',
	'tag-gettingstarted_edit-description' => '用户在[[Special:GettingStarted|入门指南]]上选择的页面的一个编辑。',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'gettingstarted' => '入門',
);
