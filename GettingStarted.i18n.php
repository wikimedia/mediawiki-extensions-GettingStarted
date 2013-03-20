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
	'gettingstarted-task-header' => 'Looking for an easy way to get started? Just choose a page from one of the three lists below.',
	'gettingstarted-return' => "← No thanks, go back to where I was",
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	// Change tags
	'tag-gettingstarted_edit' => '[[Special:Tags|Tag]]: new editor [[{{MediaWiki:gettingstarted-project-link}}|getting started]]',
	'tag-gettingstarted_edit-description' => 'Edit of a page that the user chose from the task list in [[Special:GettingStarted|Getting started]]',

	// Tours

	// gettingstartedpage
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Fix grammar & spelling',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'These pages are in decent shape, but some people felt they could be better. See if you can improve the grammar, spelling, and style.',
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Improve clarity',
	'guidedtour-tour-gettingstartedpage-clarification-description' => "Other people have tagged these pages as confusing, unclear, or vague. It might be the whole page that needs fixing, or just a sentence. You don't need to be an expert in the topic, just try to make things easier to understand.",
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Link pages together',
	'guidedtour-tour-gettingstartedpage-add-links-description' => "Every link between {{SITENAME}} pages is added by hand, and these pages don't have enough. Just add two square brackets around key topics when you're editing, and it will link to the relevant {{SITENAME}} page."

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
	'tag-gettingstarted_edit' => 'Text of tag identifying an edit from GettingStarted that appears e.g. in [[Special:RecentChanges]].

See also:
* {{msg-mw|tag-gettingstarted_edit-description}}',
	'tag-gettingstarted_edit-description' => 'Description of tag that appears e.g. in [[Special:Tags]]',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Title of copy-editing tooltip on Special:GettingStarted',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Description of copy-editing tooltip on Special:GettingStarted',
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Title of clarification tooltip on Special:GettingStarted',
	'guidedtour-tour-gettingstartedpage-clarification-description' => 'Description of clarification tooltip on Special:GettingStarted',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Title of tooltip about adding links on Special:GettingStarted.',
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
 * @author Fohanno
 * @author Y-M D
 */
$messages['br'] = array(
	'gettingstarted' => 'Kregiñ ganti',
	'gettingstarted-welcomesiteuser' => 'Degemer mat en $1, $2 !',
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
	'gettingstarted-welcomesiteuser' => 'Willkommen bei $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Erste Schritte',
	'gettingstarted-welcome-back-site-user' => 'Willkommen zurück, $2',
	'gettingstarted-task-header' => 'Suchst du nach einem einfachen Weg, um anzufangen? Wähle einfach eine Seite aus einer der drei unten stehenden Listen aus.',
	'gettingstarted-return' => 'Nein danke. Dort zurückgehen, wo ich war.',
	'gettingstarted-project-link' => '{{ns:Project}}:Erste Schritte',
	'tag-gettingstarted_edit' => '[[Special:Tags|Markierung]]: [[{{MediaWiki:gettingstarted-project-link}}|Erste Schritte]] eines neuen Autors',
	'tag-gettingstarted_edit-description' => 'Bearbeitung einer Seite, die der Benutzer aus der Aufgabenliste der Spezialseite „[[Special:GettingStarted|Anfangen]]“ ausgewählt hat',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Grammatik und Rechtschreibung korrigieren',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Diese Seiten sind in annehmbarer Form, aber einige Leute denken, dass sie besser sein könnten. Schaue, ob du Grammatik, Rechtschreibung und Stil verbessern kannst.',
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Klarheit verbessern',
	'guidedtour-tour-gettingstartedpage-clarification-description' => 'Andere Leute haben diese Seiten als verwirrend, unklar oder ungenau markiert. Es kann sein, dass du die ganze Seite oder nur einen Satz korrigieren musst. Du musst kein Experte in dem Thema sein. Versuche einfach, Sachen verständlicher zu machen.',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Seiten miteinander verlinken',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Jeder Link zwischen {{SITENAME}}-Seiten wird manuell hinzugefügt. Diese Seiten haben zu wenige davon. Füge einfach beim Bearbeiten zwei eckige Klammern um Schlüsselthemen hinzu und es wird auf die betreffende {{SITENAME}}-Seite verlinkt.',
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
 * @author Hello71
 * @author Jean-Frédéric
 */
$messages['fr'] = array(
	'gettingstarted' => 'Pour commencer',
	'gettingstarted-desc' => 'Ajoute une [[Special:GettingStarted|page d’accueil]] pour les nouveaux utilisateurs (affichée après la création de compte)',
	'gettingstarted-welcomesiteuser' => 'Bienvenue sur $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Pour commencer',
	'gettingstarted-welcome-back-site-user' => 'Bienvenue de nouveau, $2',
	'gettingstarted-task-header' => 'Vous cherchez un moyen facile de démarrer? Choisissez simplement une page parmi les trois listes ci-dessous.',
	'gettingstarted-return' => 'Non merci, revenir là où j’étais',
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	'tag-gettingstarted_edit' => '[[Special:Tags|Balise]]: un nouvel éditeur [[{{MediaWiki:gettingstarted-project-link}}|a débuté]]',
	'tag-gettingstarted_edit-description' => "Modification d'une page choisie par l’utilisateur dans la liste des tâches dans [[Special:GettingStarted|Pour commencer]]",
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Corriger la grammaire & l’orthographe',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => "Ces pages sont dans un bon état, mais certains pensent qu’elles pourraient être encore meilleures. Voyez si vous pouvez améliorer la grammaire, l'orthographe, et le style.",
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Améliorer la clarté',
	'guidedtour-tour-gettingstartedpage-clarification-description' => 'D’autres personnes ont marqué ces pages comme confuses, non claires, ou vagues. Ce peut être l’ensemble de la page qui doit être corrigé, ou simplement une phrase. Vous n’avez pas besoin d’être un expert du domaine, mais juste essayer de rendre les choses plus faciles à comprendre.',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Lier les pages ensemble',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Chaque lien entre les pages de {{SITENAME}} est ajouté à la main, et ces pages n’en ont pas assez. Ajoutez simplement deux crochets autour des sujets clé lorsque vous écrivez, et cela créera un lien vers la page de {{SITENAME}} appropriée.',
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
	'gettingstarted-task-header' => 'Stai cercando un modo semplice per iniziare? Basta scegliere una pagina da uno dei tre elenchi qui sotto.',
	'gettingstarted-return' => '← No grazie, torna indietro a dove ero',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Collega pagine insieme',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Ogni collegamento tra le pagine di {{SITENAME}} è aggiunto a mano, e queste pagine non hanno abbastanza. Basta aggiungere due parentesi quadre alle parole sugli argomenti chiave quando si sta modificando, e collegherà alla pagina pertinente di {{SITENAME}}.',
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
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'リンクの追加', # Fuzzy
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

/** Minangkabau (Baso Minangkabau)
 * @author Iwan Novirion
 */
$messages['min'] = array(
	'gettingstarted' => 'Caro mamulai',
	'gettingstarted-desc' => 'Manambahkan [[Special:GettingStarted|laman salamaik datang]] untuak pangguno baru (langsuang nampak salasai mambuek akun)',
	'gettingstarted-welcomesiteuser' => 'Salamaik datang di $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Caro mamulai',
	'gettingstarted-return' => 'Mokasih sajolah, bawok Ambo baliak',
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
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'gettingstarted' => 'Permulaan',
	'gettingstarted-desc' => 'Meletakkan [[Special:GettingStarted|halaman selamat datang]] untuk pengguna baru (dipaparkan selepas pembukaan akaun)',
	'gettingstarted-welcomesiteuser' => 'Selamat datang ke $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Selamat datang ke $1!', # Fuzzy
	'gettingstarted-welcome-back-site-user' => 'Selamat kembali, $2',
	'gettingstarted-return' => '← Tak apalah, bawa saya kembali ke tempat asal',
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
 * @author Konovalov
 * @author Siebrand
 */
$messages['nl'] = array(
	'gettingstarted' => 'Aan de slag',
	'gettingstarted-desc' => 'Voegt een [[Special:GettingStarted|welkomstpagina]] voor nieuwe gebruikers toe na registereren',
	'gettingstarted-welcomesiteuser' => 'Welkom bij $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Aan de slag',
	'gettingstarted-welcome-back-site-user' => 'Welkom terug, $2',
	'gettingstarted-task-header' => "Op zoek naar een makkelijke manier om te beginnen? Kies een pagina uit een van de drie ondergenoemde pagina's.",
	'gettingstarted-return' => '← Nee bedankt. Ik wil graag terug naar waar ik vandaan kom',
	'gettingstarted-project-link' => '{{ns:Project}}:Aan de slag',
	'tag-gettingstarted_edit' => '[[Special:Tags|Label]]: nieuwe bewerker [[{{MediaWiki:gettingstarted-project-link}}|aan de slag]]',
	'tag-gettingstarted_edit-description' => 'Bewerking aan een pagina die de gebruiker heeft gekozen uit de takenlijst op [[Special:GettingStarted|aan de slag]]',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Corrigeer grammatica & spelling',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => "Eindredactie is het verbeteren van spelling, grammatica en stijl. De onderstaande pagina's zijn in redelijke staat, maar er zijn gebruikers die denken dat ze beter gemaakt kunnen worden. Kijk of u dingen kunt verbeteren.", # Fuzzy
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Duidelijkheid verbeteren',
	'guidedtour-tour-gettingstartedpage-clarification-description' => 'Andere gebruikers hebben aangegeven dat deze pagina\'s verwarrend, onduidelijk of vaag zijn. U hoeft geen expert te zijn op het gebied van het onderwerp te zijn. Zoek naar de labels "Verduidelijking nodig" om te zien waar verbetering nodig is.', # Fuzzy
	'guidedtour-tour-gettingstartedpage-add-links-title' => "Pagina's aan elkaar koppelen",
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Hebt u ooit zomaar uren rondgeklikt op {{SITENAME}}? Iedere koppeling wordt met de hand aangebracht en we hebben uw hulp nodig om er een aantal toe te voegen.', # Fuzzy
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
	'gettingstarted-return' => '← No grazie, tuèrne rrete addò stave',
	'gettingstarted-project-link' => '{{ns:Project}}:Pe accumenzà',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Corregge grammateche & pronunge',
	'guidedtour-tour-gettingstartedpage-add-links-title' => "Colleghe le pàggene 'nzieme",
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
	'gettingstarted-welcomesiteuser' => 'Chào mừng $2 đến với $1!',
	'gettingstarted-welcomesiteuseranon' => 'Bắt đầu',
	'gettingstarted-welcome-back-site-user' => 'Chào mừng $2 đã trở lại',
	'gettingstarted-task-header' => 'Chúng tôi vui mừng bạn đã ghé vào đây. Dưới đây có một số gợi ý để bắt đầu đóng góp.', # Fuzzy
	'gettingstarted-return' => 'Thôi, quay lại trang vừa rồi',
	'gettingstarted-project-link' => '{{ns:Project}}:Bắt đầu',
	'tag-gettingstarted_edit' => '[[Special:Tags|Thẻ]]: Người dùng mới đang [[{{MediaWiki:gettingstarted-project-link}}|bắt đầu]]',
	'tag-gettingstarted_edit-description' => 'Sửa đổi trang được gợi ý trong danh sách việc cần làm tại [[Special:GettingStarted|Bắt đầu]]',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Sửa văn phong', # Fuzzy
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Các trang ở dưới có vẻ được nhưng có người cảm thấy nó còn có khả năng cải tiến về chính tả, ngữ pháp, và văn phong. Mời bạn giúp đỡ!', # Fuzzy
	'guidedtour-tour-gettingstartedpage-clarification-title' => 'Viết rõ hơn',
	'guidedtour-tour-gettingstartedpage-clarification-description' => 'Người ta đã đánh dấu các trang này là khó hiểu, không rõ, hoặc mơ hồ. Bạn không cần phải là chuyên gia về các đề tài này, chỉ việc kiếm các thẻ “Cần giải thích” để biết những gì cần sửa chữa.', # Fuzzy
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Đặt liên kết', # Fuzzy
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Bạn có bao giờ mất vài tiếng đồng hồ đi tới đi lui tại {{SITENAME}}? Mỗi liên kết được bổ sung thủ công, và chúng tôi cần bạn giúp bằng cách thêm liên kết.', # Fuzzy
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hydra
 * @author Yfdyh000
 * @author 乌拉跨氪
 */
$messages['zh-hans'] = array(
	'gettingstarted' => '开始',
	'gettingstarted-desc' => '添加一个为新用户的[[Special:GettingStarted|欢迎页面]]（在用户创建后显示）',
	'gettingstarted-welcomesiteuser' => '欢迎光临$1，$2！',
	'gettingstarted-welcomesiteuseranon' => '欢迎光临$1！', # Fuzzy
	'gettingstarted-return' => '不必了，请带我回去', # Fuzzy
	'gettingstarted-project-link' => '{{ns:Project}}:入门指南',
	'tag-gettingstarted_edit' => '[[Special:Tags|标签]]：新编者 [[{{MediaWiki:gettingstarted-project-link}}|入门]]',
	'tag-gettingstarted_edit-description' => '用户在[[Special:GettingStarted|入门指南]]上选择的页面的一个编辑。',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => '修正语法和拼写',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => '这些页面的状况很好，但有些人认为它们能变得更好。看看你能否帮忙改善语法、排版和样式。',
	'guidedtour-tour-gettingstartedpage-add-links-title' => '将页面链接在一起',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'gettingstarted' => '入門',
);
