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
	'gettingstarted-welcomesiteuseranon' => "Welcome to $1!",
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
	'gettingstarted-welcomesiteuser' => 'The title of the Getting Started page for logged-in users.
* $1 - sitename
* $2 - username; GENDER is supported',
	'gettingstarted-welcomesiteuseranon' => 'The title of the Getting Started page for anonymous users.
* $1 - sitename',
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
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Title of tooltip about adding links on Special:GettingStarted',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Description of tooltip about adding links on Special:GettingStarted',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'gettingstarted' => 'З чаго пачаць',
	'gettingstarted-desc' => 'Дадае [[Special:GettingStarted|вітальную старонку]] для новых удзельнікаў (паказваецца па стварэньні рахунку)',
	'gettingstarted-msg' => 'Адміністратар {{GRAMMAR:родны|{{SITENAME}}}} мусіць наладзіць гэтае паведамленьне, адрэдагаваўшы [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Вітаем у {{GRAMMAR:месны|$1}}, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Вітаем у {{GRAMMAR:месны|$1}}!',
	'gettingstarted-return' => '&rarr; Не, дзякую, вярніце туды, дзе я чытаў',
	'gettingstarted-project-link' => '{{ns:Project}}:Пачатак працы',
	'tag-gettingstarted_edit' => '[[Special:Tags|Метка]]: [[{{MediaWiki:gettingstarted-project-link}}|пачатак працы]] новага рэдактара',
	'tag-gettingstarted_edit-description' => 'Рэдагаваньне старонкі зь сьпісу задачаў «[[Special:GettingStarted|З чаго пачаць]]», якую абраў удзельнік',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Вычытка',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Вычытка — гэта паляпшэньне ўжо напісанага. Старонкі, пералічаныя ніжэй, ужо набылі форму, але некаторым удзельнікам падалося, што можна зрабіць лепш. Можа вы зможаце іх палепшыць? Проста націсьніце картку «{{int:vector-view-edit}}»!',
	'guidedtour-tour-gettingstartedpage-fix-spelling-title' => 'Выпраўленьне артаграфіі',
	'guidedtour-tour-gettingstartedpage-fix-spelling-description' => 'Выпраўленьне апісак і артаграфіі — лёгкі спосаб палепшыць чытэльнасьць {{GRAMMAR:родны|{{SITENAME}}}}. Проста націсьніце картку «{{int:vector-view-edit}}» і выпраўце парачку!',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Даданьне спасылак',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Ці вы не блукалі выпадкова пару гадзін, пстрыкаючы па спасылках у {{GRAMMAR:месны|{{SITENAME}}}}? Мы блукалі. Выберыце адну з гэтых старонак і адшукайце, на якое слова можна было б дадаць спасылку да старонкі. Проста пстрыкніце «{{int:vector-view-edit}}» і дадайце яе!',
);

/** Czech (česky)
 * @author Vks
 */
$messages['cs'] = array(
	'gettingstarted-welcomesiteuser' => 'Vítá vás $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Vítejte na $1!',
	'gettingstarted-return' => 'Ne, děkuji, vemte mě zpět', # Fuzzy
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
	'gettingstarted-return' => 'Nej tak, tag mig tilbage', # Fuzzy
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
	'gettingstarted-welcomesiteuseranon' => 'Willkommen bei $1!',
	'gettingstarted-return' => '← Nein danke, zurück zur gelesenen Seite',
	'gettingstarted-project-link' => '{{ns:Project}}:Erste Schritte',
	'tag-gettingstarted_edit' => '[[Special:Tags|Markierung]]: [[{{MediaWiki:gettingstarted-project-link}}|Erste Schritte]] eines neuen Autors',
	'tag-gettingstarted_edit-description' => 'Bearbeitung einer Seite, die der Benutzer aus der Aufgabenliste von [[Special:GettingStarted]] ausgewählt hat',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Lektorat',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Redigieren ist das einfache Verbessern, wie Sachen formuliert werden. Die unten stehenden Artikel sind in annehmbarer Form, aber einige Benutzer denken, dass sie besser sein könnten. Schaue, ob du Dinge verbessern kannst. Klicke einfach auf den „{{int:vector-view-edit}}“-Reiter!',
	'guidedtour-tour-gettingstartedpage-fix-spelling-title' => 'Rechtschreibung und Grammatik korrigieren',
	'guidedtour-tour-gettingstartedpage-fix-spelling-description' => 'Das Korrigieren von Rechtschreibung und Grammatik ist ein einfacher Weg, die Lesbarkeit von {{SITENAME}} zu verbessern. Klicke einfach auf den „{{int:vector-view-edit}}“-Reiter und mach einige Korrekturen!',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Links hinzufügen',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Hast du schon zwei Stunden mit Herumklicken auf {{SITENAME}} verbracht? Wähle einen dieser Artikel aus und suche nach potentiellen Links auf andere Seiten. Klicke einfach auf den „{{int:vector-view-edit}}“-Reiter und füge sie hinzu!',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'gettingstarted' => 'Prědne kšace',
	'gettingstarted-desc' => 'Pśidawa [[Special:GettingStarted|pówitański bok]] za nowych wužywarjow, kótaryž pokazujo se pó załoženju konta',
	'gettingstarted-msg' => 'Administrator na {{GRAMMAR:lokatiw|{{SITENAME}}}} by měł toś tu powěźeńku pśez wobźěłowanje [[{{ns:MediaWiki}}:gettingstarted-msg]] pśiměriś.',
	'gettingstarted-welcomesiteuser' => 'Witaj do $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Witaj do $1',
	'gettingstarted-return' => 'Ně, źěkujom se, spóraj mě slědk', # Fuzzy
);

/** Greek (Ελληνικά)
 * @author ZaDiak
 */
$messages['el'] = array(
	'gettingstarted' => 'Ξεκινώντας',
	'gettingstarted-welcomesiteuser' => 'Καλώς ήλθατε στο $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Καλώς ήλθατε στο $1!',
	'gettingstarted-return' => 'Όχι ευχαριστώ, πήγαινε με πίσω', # Fuzzy
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
 */
$messages['es'] = array(
	'gettingstarted' => 'Primeros pasos',
	'gettingstarted-desc' => 'Agrega una [[Special:GettingStarted|página de bienvenida]] a los nuevos usuarios (se muestra después de la creación de la cuenta)',
	'gettingstarted-msg' => 'Un administrador de {{SITENAME}} debe personalizar este mensaje editando [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Hola $2 ¡Bienvenido a $1!',
	'gettingstarted-welcomesiteuseranon' => '¡Bienvenido a $1!',
	'gettingstarted-return' => 'No gracias, volver atrás', # Fuzzy
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
	'gettingstarted-return' => 'نه متشکرم، من را برگردان', # Fuzzy
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
	'gettingstarted-return' => 'Ei kiitos, vie minut takaisin', # Fuzzy
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
	'gettingstarted-welcomesiteuseranon' => 'Bienvenue sur $1!',
	'gettingstarted-return' => 'Non merci, retour sur la page que je lisais',
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	'tag-gettingstarted_edit' => '[[Special:Tags|Balise]]: un nouvel éditeur [[{{MediaWiki:gettingstarted-project-link}}|a débuté]]',
	'tag-gettingstarted_edit-description' => "Modification d'une page choisie par l’utilisateur dans la liste des tâches dans [[Special:GettingStarted]]",
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Relecture',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Relire consiste à améliorer les tournures de phrases. Les pages ci-dessous sont dans un bon état, mais certains utilisateurs pensent qu’elles pourraient être encore meilleures. Voyez si vous pouvez améliorer les choses. Cliquez simplement sur l’onglet {{int:vector-view-edit}}!',
	'guidedtour-tour-gettingstartedpage-fix-spelling-title' => 'Corriger l’orthographe et la grammaire',
	'guidedtour-tour-gettingstartedpage-fix-spelling-description' => 'Corriger l’orthographe et la grammaire est un moyen facile d’améliorer la lisibilité de {{SITENAME}}. Cliquez simplement sur l’onglet {{int:vector-view-edit}} et faites quelques corrections!',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Ajouter des liens',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Avez-vous déjà, par hasard, passé deux heures à cliquer ici et là dans {{SITENAME}}? Nous avons été là. Choisissez une de ces pages et recherchez les liens potentiels vers d’autres. Cliquez simplement sur l’onglet {{int:vector-view-edit}} pour les ajouter!',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'gettingstarted' => 'Por emmodar',
	'gettingstarted-welcomesiteuser' => 'Benvegnua dessus $1, $2 !',
	'gettingstarted-welcomesiteuseranon' => 'Benvegnua dessus $1 !',
	'gettingstarted-return' => 'Nan, bien grant-marci, ramenâd-mè de yô que vegno', # Fuzzy
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'gettingstarted' => 'Primeiros pasos',
	'gettingstarted-desc' => 'Engade unha [[Special:GettingStarted|páxina de benvida]] aos novos usuarios (móstrase despois da creación da conta)',
	'gettingstarted-msg' => 'Un adminitrador de {{SITENAME}} debería personalizar esta mensaxe editando "[[{{ns:MediaWiki}}:gettingstarted-msg]]".',
	'gettingstarted-welcomesiteuser' => '{{GENDER:$2|Benvido|Benvida}} a $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Dámoslle a benvida a $1!',
	'gettingstarted-return' => '← Non, grazas; quero volver á páxina que estaba a ler',
	'gettingstarted-project-link' => '{{ns:Project}}:Primeiros pasos',
	'tag-gettingstarted_edit' => '[[Special:Tags|Etiqueta]]: Novo editor dando os [[{{MediaWiki:gettingstarted-project-link}}|primeiros pasos]]',
	'tag-gettingstarted_edit-description' => 'Modificación dunha páxina que o usuario elixiu desde a lista de tarefas en [[Special:GettingStarted]]',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Corrección',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'A corrección consiste na mellora da redacción. Os artigos que hai a continuación teñen un formato decente, pero algúns usuarios cren que poden estar mellor. A ver se vostede pode mellorar as cousas. Prema na lapela "{{int:vector-view-edit}}"!',
	'guidedtour-tour-gettingstartedpage-fix-spelling-title' => 'Corrixir a lingua e a gramática',
	'guidedtour-tour-gettingstartedpage-fix-spelling-description' => 'A corrección da lingua e da gramática é un xeito doado de mellorar a lexibilidade de {{SITENAME}}. Prema na lapela "{{int:vector-view-edit}}" e faga un par de arranxos!',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Engadir ligazóns',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Algunha vez pasou un par de horas premendo aquí e acolá nas páxinas de {{SITENAME}}? Nós xa estivemos alí. Escolle unha desas páxinas e busque ligazóns potenciais a outras páxinas. Prema na lapela "{{int:vector-view-edit}}" para engadilas!',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'gettingstarted' => 'Prěnje kroki',
	'gettingstarted-desc' => 'Přidawa [[Special:GettingStarted|witansku stronu]] za nowych wužiwarjow, kotraž so po załoženju konta pokazuje',
	'gettingstarted-msg' => 'Administrator na {{GRAMMAR:lokatiw|{{SITENAME}}}} měł tutu zdźělenku přez wobdźěłowanje [[{{ns:MediaWiki}}:gettingstarted-msg]] přiměrić.',
	'gettingstarted-welcomesiteuser' => 'Witaj do $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Witaj do $1',
	'gettingstarted-return' => 'Ně, dźakuju so, dowjedź mje wróćo', # Fuzzy
);

/** Indonesian (Bahasa Indonesia)
 * @author Farras
 */
$messages['id'] = array(
	'gettingstarted' => 'Memulai',
	'gettingstarted-desc' => 'Menambahkan [[Special:GettingStarted|halaman selamat datang]] untuk pengguna baru (ditampilkan setelah membuat akun)',
	'gettingstarted-msg' => 'Seorang pengurus {{SITENAME}} harus mengubah pesain ini dengan menyunting [[{{ns:MediaWiki}}:gettingstarted-msg]].',
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
	'gettingstarted-return' => '← No grazie, riportami alla pagina che stavo leggendo',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'gettingstarted-desc' => '新しい利用者向けに[[Special:GettingStarted|ようこそページ]]を追加する (アカウント作成した際に表示される)',
	'gettingstarted-welcomesiteuser' => '$2さん、$1へようこそ!',
	'gettingstarted-welcomesiteuseranon' => '$1へようこそ!',
	'gettingstarted-return' => '不要です。元のページに戻ります。', # Fuzzy
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	'tag-gettingstarted_edit-description' => '利用者が [[Special:GettingStarted|Getting started]] のタスク一覧から選択したページの編集',
	'guidedtour-tour-gettingstartedpage-fix-spelling-title' => 'スペルや文法の修正',
	'guidedtour-tour-gettingstartedpage-fix-spelling-description' => 'スペルや文法を修正することで、容易に{{SITENAME}}の読みやすさを容易に改善できます。編集をクリックして少し修正するだけです。', # Fuzzy
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'リンクの追加',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'gettingstarted' => '시작하기',
	'gettingstarted-desc' => '새 사용자를 위한 [[Special:GettingStarted|환영 문서]]를 추가합니다 (계정을 만들고 나서 나타남)',
	'gettingstarted-msg' => '{{SITENAME}}의 관리자가 [[{{ns:MediaWiki}}:gettingstarted-msg]] 메시지를 편집하여 이 메시지를 사용자 정의해야 합니다.',
	'gettingstarted-welcomesiteuser' => '$2님, $1에 오신 것을 환영합니다!',
	'gettingstarted-welcomesiteuseranon' => '$1에 오신 것을 환영합니다!',
	'gettingstarted-return' => '← 괜찮습니다, 읽던 문서로 돌아갑니다',
	'gettingstarted-project-link' => '{{ns:Project}}:시작하기',
	'tag-gettingstarted_edit' => '[[Special:Tags|태그]]: 새 편집자 [[{{MediaWiki:gettingstarted-project-link}}|시작하기]]',
	'tag-gettingstarted_edit-description' => '사용자가 [[Special:GettingStarted]]에 작업 목록에서 선택한 문서의 편집',
	'guidedtour-tour-gettingstartedpage-fix-spelling-title' => '철자와 문법 고치기',
	'guidedtour-tour-gettingstartedpage-fix-spelling-description' => '철자와 문법 고치기는 {{SITENAME}}의 가독성을 쉽게 향상시킬 수 있습니다. {{int:vector-view-edit}} 탭을 클릭하고 약간 고치면 됩니다.',
	'guidedtour-tour-gettingstartedpage-add-links-title' => '링크 추가',
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
	'gettingstarted-return' => 'Nee Merci, bréngt mech zréck wou ech virdru war', # Fuzzy
	'gettingstarted-project-link' => '{{ns:Project}}:Fir unzefänken',
	'tag-gettingstarted_edit-description' => 'Eng Säit änneren déi de Benotzer aus der Lëscht op [[Special:GettingStarted]] eraussicht',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'gettingstarted-welcomesiteuser' => 'Sveiki atvykę į $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Sveiki atvykę į $1!',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'gettingstarted' => 'Како да почнете',
	'gettingstarted-desc' => 'Става [[Special:GettingStarted|страница за добре дојде]] за новите корисници (се прикажува откако ќе ја направат сметката)',
	'gettingstarted-msg' => 'Администратор на {{SITENAME}} треба да ја прилагоди поракава, менувајќи го [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Добре дојдовте на $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Добре дојдовте на $1!',
	'gettingstarted-return' => '← Не благодарам. Врати ме на страницата што си ја читав.',
	'gettingstarted-project-link' => '{{ns:Project}}:ПрвиЧекори',
	'tag-gettingstarted_edit' => '[[Special:Tags|Ознака]]: нов уредник [[{{MediaWiki:gettingstarted-project-link}}|почнува со работа]]',
	'tag-gettingstarted_edit-description' => 'Уредување на страница што корисникот ја одбрал од списокот на задачи на [[Special:GettingStarted]]',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Лекторирање',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Лекторирањето едноставно значи исправка на изразувањето. Долунаведените статии се пристојно направени, но некои корисници сметаат дека можат да бидат подобри. Видете дали можете да ги подобрите. Едноставно стиснете на јазичето „{{int:vector-view-edit}}“!',
	'guidedtour-tour-gettingstartedpage-fix-spelling-title' => 'Правописна и граматичка исправка',
	'guidedtour-tour-gettingstartedpage-fix-spelling-description' => 'Вршејќи исправки во правописот и граматиката ја подобрувате читливоста на {{SITENAME}}. Едноставно стиснете на јазичето „{{int:vector-view-edit}}“ и направете некои исправки!',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Ставање на врски',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Дали некогаш по грешка сте провеле два часа стискајќи по {{SITENAME}}? Ете, и ние исто. Изберете една од статиите и гледајте по зборовите каде може да се стават врски до други статии. Едноставно стиснете на јазичето „{{int:vector-view-edit}}“ за да ги ставите!',
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
	'gettingstarted-return' => 'Tak apalah, bawa saya balik', # Fuzzy
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
	'gettingstarted-return' => 'Le grazzi, ħudni lura', # Fuzzy
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
	'gettingstarted-return' => '← Nee bedankt. Terug naar de pagina die ik aan het lezen was',
	'gettingstarted-project-link' => '{{ns:Project}}:Aan de slag',
	'tag-gettingstarted_edit' => '[[Special:Tags|Label]]: nieuwe bewerker [[{{MediaWiki:gettingstarted-project-link}}|aan de slag]]',
	'tag-gettingstarted_edit-description' => 'Bewerking aan een pagina die de gebruiker heeft gekozen uit de takenlijst op [[Special:GettingStarted|aan de slag]]',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Eindredactie',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Eindredactie is het verbeteren van hoe dingen zijn verwoord. De onderstaande pagina\'s zijn in redelijke staat, maar er zijn gebruikers die denken dat ze beter gemaakt kunnen worden. Kijk of u dingen kunt verbeteren. Klik daarvoor gewoon op het tabblad "{{int:vector-view-edit}}"!',
	'guidedtour-tour-gettingstartedpage-fix-spelling-title' => 'Spelling- en grammaticacontrole',
	'guidedtour-tour-gettingstartedpage-fix-spelling-description' => 'Het verbeteren van spelling en grammatica is een eenvoudige manier om de leesbaarheid van {{SITENAME}} te verbeteren. Klik daarvoor gewoon op het tabblad "{{int:vector-view-edit}}" en maak een paar verbeteringen!',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Koppelingen toevoegen',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Hebt u ooit zomaar twee uur rondgeklikt op {{SITENAME}}? Wij wel. Kies een van deze pagina\'s en kijk of u koppelingen naar andere pagina\'s kunt aanbrengen. Klik gewoon op het tabblad "{{int:vector-view-edit}}" om ze toe te voegen!',
);

/** Piedmontese (Piemontèis)
 * @author Dragonòt
 */
$messages['pms'] = array(
	'gettingstarted' => 'Për ancaminé',
	'gettingstarted-desc' => "A gionta na [[Special:GettingStarted|pagina ëd bin-ëvnù]] për utent neuv (mostà d'apress la creassion dël cont)",
	'gettingstarted-msg' => "N'aministrador dzor {{SITENAME}} a dovrìa përsonalisé sto mëssagi modificand [[{{ns:MediaWiki}}:gettingstarted-msg]].",
	'gettingstarted-welcomesiteuser' => 'Bin-ëvnà a $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Bin ëvnù a $1!',
	'gettingstarted-return' => 'Nò mersì, pòrtme andré', # Fuzzy
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	'tag-gettingstarted_edit' => '[[Special:Tags|Tichëtta]]: editor neuv [[{{MediaWiki:gettingstarted-project-link}}|ancaminé]]',
	'tag-gettingstarted_edit-description' => "Modìfica ëd na pagina che l'utent a sern da la lista dij travaj an [[Special:GettingStarted]]",
);

/** Romanian (română)
 * @author Firilacroco
 */
$messages['ro'] = array(
	'gettingstarted' => 'Primii pași',
	'gettingstarted-welcomesiteuser' => 'Bine ați venit la $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Bine ați venit la $1!',
	'gettingstarted-return' => 'Nu, mulțumesc, du-mă înapoi', # Fuzzy
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'gettingstarted-welcomesiteuser' => 'Bovègne sus a, $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Bovègne sus a, $1!',
);

/** Russian (русский)
 * @author DCamer
 * @author Ole Yves
 */
$messages['ru'] = array(
	'gettingstarted' => 'Приступая к работе',
	'gettingstarted-desc' => 'Добавляет [[Special:GettingStarted|страницу приветствия]] для новых участников (показывается после создания учётной записи)',
	'gettingstarted-msg' => 'Администратор {{SITENAME}} должен настроить это сообщение правкой [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Добро пожаловать в $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Добро пожаловать в $1!',
	'gettingstarted-return' => 'Нет, спасибо, верните меня обратно', # Fuzzy
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	'tag-gettingstarted_edit-description' => 'Редактировать страницы, которые участник выбрал из списка задач в [[Special:GettingStarted]]',
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
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'gettingstarted' => 'Komma igång',
	'gettingstarted-desc' => 'Lägger till en [[Special:GettingStarted|välkomstsida]] för nya användare (visas efter kontot har skapats)',
	'gettingstarted-welcomesiteuser' => 'Välkommen till $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Välkommen till $1!',
	'gettingstarted-return' => 'Nej tack, ta mig tillbaka', # Fuzzy
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
	'gettingstarted-return' => 'వద్దు, నన్ను వెనక్కు తీసుకువెళ్ళు', # Fuzzy
);

/** Ukrainian (українська)
 * @author Base
 */
$messages['uk'] = array(
	'gettingstarted' => 'Початок роботи',
	'gettingstarted-desc' => 'Додає [[Special:GettingStarted|вітальну сторінку]] для нових користувачів (показується після створення облікового запису)',
	'gettingstarted-msg' => 'Адміністраторам проекту {{SITENAME}} слід налаштувати це повідомлення, відредагувавши [[{{ns:MediaWiki}}:gettingstarted-msg]].',
	'gettingstarted-welcomesiteuser' => 'Вітаємо у проекті $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Вітаємо у проекті $1!',
	'gettingstarted-return' => 'Ні, дякую, поверніть мене назад', # Fuzzy
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
	'gettingstarted-return' => 'Thôi, quay lại trang đọc trước',
	'gettingstarted-project-link' => '{{ns:Project}}:Bắt đầu',
	'tag-gettingstarted_edit' => '[[Special:Tags|Thẻ]]: Người dùng mới đang [[{{MediaWiki:gettingstarted-project-link}}|bắt đầu]]',
	'tag-gettingstarted_edit-description' => 'Sửa đổi trang được gợi ý trong danh sách việc cần làm tại [[Special:GettingStarted]]',
	'guidedtour-tour-gettingstartedpage-copy-editing-title' => 'Sửa văn phong',
	'guidedtour-tour-gettingstartedpage-copy-editing-description' => 'Các trang ở dưới có vẻ được nhưng có người cảm thấy nó còn có khả năng cải tiến về văn phong. Hãy giúp đỡ: chỉ việc nhấn vào thẻ {{int:vector-view-edit}}!',
	'guidedtour-tour-gettingstartedpage-fix-spelling-title' => 'Sửa lỗi chính tả và ngữ pháp',
	'guidedtour-tour-gettingstartedpage-fix-spelling-description' => 'Bạn có thể dễ dàng làm cho {{SITENAME}} dễ đọc hơn, bằng cách sửa các lỗi chính tả và ngữ pháp. Chỉ việc nhấn vào thẻ {{int:vector-view-edit}} và bắt đầu sửa chữa!',
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Đặt liên kết',
	'guidedtour-tour-gettingstartedpage-add-links-description' => 'Bạn có bao giờ mất hai tiếng đồng hồ đi tới đi lui tại {{SITENAME}}? Chúng tôi cũng đi tới đi lui vậy. Hãy chọn một trang ở dưới và tìm những cụm từ nên có liên kết đến trang khác. Chỉ việc nhấn vào thẻ {{int:vector-view-edit}} để bổ sung liên kết!',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hydra
 */
$messages['zh-hans'] = array(
	'gettingstarted' => '开始',
	'gettingstarted-desc' => '添加一个为新用户的[[Special:GettingStarted|欢迎页面]]（在用户创建后显示）',
	'gettingstarted-msg' => '一个{{SITENAME}}的管理员应该编辑[[{{ns:MediaWiki}}:gettingstarted-msg]]来定制此信息。',
	'gettingstarted-welcomesiteuser' => '欢迎光临$1，$2！',
	'gettingstarted-welcomesiteuseranon' => '欢迎光临$1！',
	'gettingstarted-return' => '不必了，请带我会去', # Fuzzy
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'gettingstarted' => '入門',
);
