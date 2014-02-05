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
	// TODO (mattflaschen, 2013-01-08): Placeholder
	'gettingstarted-desc' => 'Helps new users become editors',
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	// Change tags
	'tag-gettingstarted_edit' => 'via [[{{MediaWiki:gettingstarted-project-link}}|Getting Started]] edit suggestions',
	'tag-gettingstarted_edit-description' => 'Edit made via the [[{{MediaWiki:gettingstarted-project-link}}|GettingStarted]] system, which suggests easy tasks to editors and shows them how to complete them.',

	// Toolbar above page, when they have chosen a task and been redirected

	/// Shared among all tasks
	'gettingstarted-task-toolbar-editing-help-text' => 'Show me how',
	'gettingstarted-task-toolbar-editing-help-title' => 'Show a guide on how to edit',
	'gettingstarted-task-toolbar-try-another-text' => 'Try another page ►',
	'gettingstarted-task-toolbar-close-title' => 'Close this toolbar',
	'gettingstarted-task-toolbar-no-suggested-page' => 'Sorry. We could not find more pages to be improved at the moment. Try again in a moment or search for your own topics of interest.',

	/// Specific to each task
	'gettingstarted-task-copyedit-toolbar-description' => 'This page may have spelling or grammar errors you can fix.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Go to a random page you can improve by copyediting',

	'gettingstarted-task-clarify-toolbar-description' => 'This page may be confusing or vague. Look for ways you can make it clearer.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Go to a random page you can clarify',

	'gettingstarted-task-addlinks-toolbar-description' => 'This page may need more links. Look for terms that have a {{SITENAME}} page.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Go to a random page you can add links to',

	// Tours
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'How to get started',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Just start scanning through the page looking for improvements. If you feel overwhelmed, do not worry. You do not have to be an expert on this topic! If you need help or want to try another page, use the links in the top bar.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ideas on what to do',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'These banners identify problems with this page. You do not need to address them all, just stick with what you are comfortable doing.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Click {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'You can edit the entire page by clicking here.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Edit a section',
	// TODO (mattflaschen, 2013-04-25): Use <nowiki>[edit]</nowiki> after bug 45173 is fixed.
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'If you want to edit a specific section, you can click on the blue "{{int:editsection}}" link at the top of each section.',

	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'You can edit!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'You can now edit the page. When you are done, click "{{int:visualeditor-toolbar-savedialog}}" to review and save your changes.',

	// General gettingstarted
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Preview (optional)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Clicking "{{int:showpreview}}" allows you to check what the page will look like with your changes. Just do not forget to save.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'You are almost finished!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Click "{{int:savearticle}}" and your changes will be visible.',

	// Post-signup Call To Action, see https://commons.wikimedia.org/wiki/File:Direct-to-page_onboarding_workflow_overview.pdf
	'gettingstarted-cta-close' => 'Close',
	'gettingstarted-cta-heading' => 'Help {{SITENAME}}',
	'gettingstarted-cta-text' => 'You can contribute to {{SITENAME}} in different ways',
	'gettingstarted-cta-edit-page' => 'Edit this page',
	'gettingstarted-cta-edit-page-sub' => 'We will show you how',
	'gettingstarted-cta-fix-pages' => 'Find pages that need easy fixes',
	'gettingstarted-cta-fix-pages-sub' => 'We will show you how to edit',
	'gettingstarted-cta-leave' => 'No thanks, maybe later',
);

/** Message documentation (Message documentation)
 * @author Shirayuki
 * @author spage
 */
$messages['qqq'] = array(
	'gettingstarted' => '{{doc-special|GettingStarted}}
{{Identical|Getting started}}',
	'gettingstarted-desc' => '{{desc|name=Getting Started|url=http://www.mediawiki.org/wiki/Extension:GettingStarted}}',
	'gettingstarted-project-link' => 'Name of page that describes how GettingStarted is used on the wiki.

Used in {{msg-mw|Tag-gettingstarted edit}}.',
	'tag-gettingstarted_edit' => 'Text of tag identifying an edit from GettingStarted that appears e.g. in [[Special:RecentChanges]].

Refers to {{msg-mw|Gettingstarted-project-link}}.

See also:
* {{msg-mw|tag-gettingstarted_edit-description}}',
	'tag-gettingstarted_edit-description' => 'Description of tag that appears e.g. in [[Special:Tags]]',
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
	'gettingstarted-task-toolbar-no-suggested-page' => 'Used when an API call fails to retrieve another suggested page for the user to work on',
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
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Title of step showing user where to click {{msg-mw|Vector-view-edit}}.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Description of step showing user where to click {{msg-mw|vector-view-edit}}.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Title of step showing user how to edit a section.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Description of step showing user how to edit a section.

Refers to {{msg-mw|Editsection}}.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Title of first step of GettingStarted tour that is on the VisualEditor screen.  It points to the {{msg-mw|visualeditor-toolbar-savedialog}} button.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Description of first step of GettingStarted tour that is on the VisualEditor screen.

Refers to the {{msg-mw|Visualeditor-toolbar-savedialog}} button.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Title of step showing user where to click {{msg-mw|showpreview}}',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Description of step showing user where to click {{msg-mw|showpreview}}',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Title of step showing user where to click {{msg-mw|savearticle}}',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Description of step showing user where to click {{msg-mw|savearticle}}',
	'gettingstarted-cta-close' => 'Title and aria label text for text close button on Call To Action modal.
{{Identical|Close}}',
	'gettingstarted-cta-heading' => 'Heading on Call To Action displayed on articles after creating an account',
	'gettingstarted-cta-text' => 'Text on Call To Action displayed on articles after creating an account',
	'gettingstarted-cta-edit-page' => 'Main text of button inviting user to edit the current page, shown on Call To Action displayed on editable articles after creating an account.
{{Identical|Edit this page}}',
	'gettingstarted-cta-edit-page-sub' => 'Additional text of button inviting user to edit the current page, shown on Call To Action displayed on editable articles after creating an account.

The button text is {{msg-mw|Gettingstarted-cta-edit-page}}.',
	'gettingstarted-cta-fix-pages' => 'Main text of button inviting user to fix other pages, shown in Call To Action displayed on articles after creating an account',
	'gettingstarted-cta-fix-pages-sub' => 'Additional text of button inviting user to fix other pages, shown in Call To Action displayed on articles after creating an account.

The button text is {{msg-mw|Gettingstarted-cta-fix-pages}}.',
	'gettingstarted-cta-leave' => 'Text to leave the Call To Action displayed on articles after creating an account',
);

/** Afrikaans (Afrikaans)
 * @author Winstonza
 */
$messages['af'] = array(
	'gettingstarted-task-toolbar-try-another-text' => "Gaan na nog 'n bladsy ►",
	'gettingstarted-task-copyedit-toolbar-description' => 'Hierdie bladsy kan spel- of taalfoute bevat wat jy kan redigeer.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => "Gaan na 'n lukrake bladsy wat jy kan redigeer",
	'gettingstarted-task-addlinks-toolbar-description' => "Hierdie bladsy benodig dalk nog skakels. Soek terme wat 'n {{SITENAME}}-bladsy het.",
	'gettingstarted-task-addlinks-toolbar-try-another-title' => "Gaan na 'n lukrake bladsy waarop jy skakels kan byvoeg",
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Jy kan die hele bladsy redigeer deur hier te klik.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Jy is amper klaar!',
	'gettingstarted-cta-edit-page-sub' => 'Ons sal jou wys hoe',
	'gettingstarted-cta-fix-pages-sub' => 'Ons sal jou wys hoe om te redigeer',
);

/** Arabic (العربية)
 * @author Ciphers
 */
$messages['ar'] = array(
	'guidedtour-tour-gettingstarted-click-preview-title' => 'عرض (اختياري)',
	'guidedtour-tour-gettingstarted-click-preview-description' => "إن الضغط على '{{int:showpreview}}' يساعدك على فحص ما ستظهر عليه الصفحة بعد قيامك بالتغييرات. لكن لا تنس حفظ تلك التغييرات.",
	'guidedtour-tour-gettingstarted-click-save-title' => 'لقد انتهيت تقريبا!',
	'guidedtour-tour-gettingstarted-click-save-description' => "اضغط على '{{int:savearticle}}' وسيتم حفظ تغييراتك.",
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'gettingstarted-task-addlinks-main-description' => 'ܐܘܣܦ ܐܣܘܪ̈ܐ',
	'gettingstarted-task-toolbar-editing-help-text' => 'ܚܘܝ ܠܝ ܐܝܟܢܐ',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'gettingstarted' => 'Primeros pasos',
	'gettingstarted-desc' => 'Ayuda a los nuevos usuarios a facese editores',
	'gettingstarted-project-link' => '{{ns:Project}}:PrimerosPasos',
	'tag-gettingstarted_edit' => '[[{{MediaWiki:gettingstarted-project-link}}|primeros pasos]] col nuevu editor', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Edición fecha col sistema [[{{MediaWiki:gettingstarted-project-link}}|GettingStarted]], que suxer xeres fáciles a los editores y amuesa cómo completales.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Amosame cómo',
	'gettingstarted-task-toolbar-editing-help-title' => 'Ver una guía de cómo editar',
	'gettingstarted-task-toolbar-try-another-text' => 'Probar con otra páxina ►',
	'gettingstarted-task-toolbar-close-title' => 'Zarrar esta barra de ferramientes',
	'gettingstarted-task-toolbar-no-suggested-page' => "Disculpes. Nun pudimos atopar más páxines qu'ameyorar nesti momentu. Vuelva a intentalo nunos momentos o busque los temes que-y interesen.",
	'gettingstarted-task-copyedit-toolbar-description' => 'Esta páxina pue tener errores ortográficos o gramaticales que pue iguar.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Dir a una páxina al debalu que pue ameyorar copiando y editando',
	'gettingstarted-task-clarify-toolbar-description' => 'Esta páxina pue ser confusu o imprecisu. Busque maneres de facela más clara.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Dir a una páxina al debalu que pue aclarar',
	'gettingstarted-task-addlinks-toolbar-description' => 'Esta páxina pue necesitar más enllaces. Busque términos que tengan una páxina en {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Dir a una páxina al debalu a la que pue amesta-y enllaces',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Como principiar',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Namái principie a revisar la páxina y mire cómo ameyorala. Si se siente ablucáu, nun se preocupe. ¡Nun necesita ser un espertu nesti asuntu! Si necesita ayuda o quier probar con otra páxina, use los enllaces de la barra superior.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ideas sobre qué facer',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => "Estos carteles identifiquen problemes con esta páxina. Nun necesita arreglalos toos, namái faiga les coses coles que s'afaye meyor.",
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Calque {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => "Pue editar l'artículu enteru calcando equí.",
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Editar una seición',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Si quier editar una seición específica, pue calcar nel enllaz azul '{{int:editsection}}' del principiu de cada seición.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => '¡Pue editar!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Agora pue editar la páxina. En acabando, faiga click en "{{int:visualeditor-toolbar-savedialog}}" pa revisar y guardar los cambios.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Vista previa (opcional)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Si calca "{{int:showpreview}}" podrá comprobar como se verá la páxina colos cambios. Pero nun escaeza guardala.',
	'guidedtour-tour-gettingstarted-click-save-title' => '¡Yá casi acabó!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Calque "{{int:savearticle}}" y los cambios sedrán visibles.',
	'gettingstarted-cta-close' => 'Zarrar',
	'gettingstarted-cta-heading' => 'Ayude a {{SITENAME}}',
	'gettingstarted-cta-text' => 'Pue collaborar con {{SITENAME}} de diferentes maneres',
	'gettingstarted-cta-edit-page' => 'Editar esta páxina',
	'gettingstarted-cta-edit-page-sub' => 'Vamos indica-y cómo',
	'gettingstarted-cta-fix-pages' => 'Atopar páxines que necesiten igües cencielles',
	'gettingstarted-cta-fix-pages-sub' => 'Vamos indica-y cómo editar',
	'gettingstarted-cta-leave' => 'Non gracies, seique más sero',
);

/** Azerbaijani (azərbaycanca)
 * @author Khan27
 */
$messages['az'] = array(
	'gettingstarted-cta-close' => 'Bağla',
	'gettingstarted-cta-leave' => 'Xeyr təşəkkürlər, bəlkə sonra',
);

/** Belarusian (беларуская)
 * @author Wizardist
 */
$messages['be'] = array(
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Папярэдні прагляд (па жаданні)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Націсніце «{{int:showpreview}}», каб пабачыць, як будзе выглядаць старонка з унесенымі вамі зменамі. Па праглядзе не забудзьце захаваць!',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Ужо амаль усё!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Націсніце «{{int:savearticle}}» і вашыя змены будуць бачныя ўсім.',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Red Winged Duck
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'gettingstarted' => 'Першыя крокі',
	'gettingstarted-desc' => 'Дапамагае новым удзельнікам стаць рэдактарамі',
	'gettingstarted-project-link' => '{{ns:Project}}:Першыя крокі',
	'tag-gettingstarted_edit' => 'новы рэдактар [[{{MediaWiki:gettingstarted-project-link}}|пачаў працу]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Рэдагаваньне зробленае праз сыстэму [[{{MediaWiki:gettingstarted-project-link}}|першых крокаў]], якая прапануе простыя задачы для ўдзельнікаў і паказвае, як іх выканаць.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Паказаць мне, як',
	'gettingstarted-task-toolbar-editing-help-title' => 'Паказаць дапамогу па рэдагаваньні',
	'gettingstarted-task-toolbar-try-another-text' => 'Паспрабуйце іншую старонку ►',
	'gettingstarted-task-toolbar-close-title' => 'Зачыніць гэтую панэль',
	'gettingstarted-task-toolbar-no-suggested-page' => 'Выбачайце. Мы не змаглі знайсьці яшчэ старонкі, якія патрабуць паляпшэньня ў цяперашні момант. Паспрабуйце яшчэ раз або пашукайце іншыя цікавыя вам тэмы.',
	'gettingstarted-task-copyedit-toolbar-description' => 'Гэтая старонка магчыма ўтрымлівае артаграфічныя і граматычныя памылкі, якія вы можаце выправіць.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Перайсьці да выпадковай старонкі, якую вы можаце палепшыць',
	'gettingstarted-task-clarify-toolbar-description' => 'Гэтая старонка можа быць заблытанай ці расплывістай. Пашукайце спосаб зрабіць яе больш зразумелай.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Перайсьці да выпадковай старонкі, якую вы можаце ўдакладніць',
	'gettingstarted-task-addlinks-toolbar-description' => 'Гэтай старонцы бракуе спасылак. Пашукайце тэрміны, старонкі пра якія маюцца ў {{GRAMMAR:месны|{{SITENAME}}}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Перайсьці да выпадковай старонкі, на якой вы можаце дадаць спасылкі',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Як пачаць',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Проста праглядайце старонку і шукайце, дзе яе можна палепшыць. Калі адчуеце, што ў вас не атрымліваецца, не хвалюйцеся. Вам не абавязкова быць экспэртам у гэтай тэме! Калі вам трэба дапамога або жадаеце праглядзець іншую старонку, скарыстайцеся спасылкамі ў верхняй панэлі.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Што рабіць',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Гэтыя банэры паведамляюць пра праблемы старонкі. Вам не абавязкова разьбірацца з усімі, проста рабіце тое, што ў вас атрымліваецца.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Націсьніце «{{int:vector-view-edit}}»',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Вы можаце рэдагаваць усю старонку, калі націсьніце тут.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Рэдагаваньне разьдзелаў',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Калі вы хочаце адрэдагаваць пэўную сэкцыю, вы можаце націснуць сінюю спасылку «{{int:editsection}}», якая ёсьць уверсе кожнай сэкцыі.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Вы можаце рэдагаваць!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Цяпер вы можаце рэдагаваць старонку. Калі вы скончыце, націсьніце «{{int:visualeditor-toolbar-savedialog}}», каб праглядзець і захаваць вашыя зьмены.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Папярэдні прагляд (па жаданьні)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Націсьніце «{{int:showpreview}}», каб пабачыць, як будзе выглядаць старонка з унесенымі вамі зьменамі. Па праглядзе не забудзьце захаваць!',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Ужо амаль усё!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Націсьніце «{{int:savearticle}}» і вашыя зьмены будуць бачныя ўсім.',
	'gettingstarted-cta-close' => 'Закрыць',
	'gettingstarted-cta-heading' => 'Дапамагчы {{GRAMMAR:давальны|{{SITENAME}}}}',
	'gettingstarted-cta-text' => 'Вы можаце дапамагчы {{GRAMMAR:давальны|{{SITENAME}}}} рознымі шляхамі',
	'gettingstarted-cta-edit-page' => 'Рэдагаваць гэтую старонку',
	'gettingstarted-cta-edit-page-sub' => 'Мы пакажам вам, як',
	'gettingstarted-cta-fix-pages' => 'Знайсьці старонкі, якія патрабуюць невялікіх выпраўленьняў',
	'gettingstarted-cta-fix-pages-sub' => 'Мы пакажам вам, як рэдагаваць',
	'gettingstarted-cta-leave' => 'Не, дзякуй, можа быць, пазьней',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'gettingstarted-cta-close' => 'Затваряне',
	'gettingstarted-cta-edit-page' => 'Редактиране на страницата',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 * @author Bellayet
 * @author Tauhid16
 */
$messages['bn'] = array(
	'gettingstarted-project-link' => '{{ns:Project}}:সূচনাকরা',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'প্রাকদর্শন (ঐচ্ছিক)',
	'guidedtour-tour-gettingstarted-click-save-title' => 'আপনি প্রায় সম্পন্ন করেছেন!',
	'guidedtour-tour-gettingstarted-click-save-description' => "'{{int:savearticle}}' ক্লিক করুন এবং আপনার পরিবর্তনগুলো দৃশ্যমান হবে।",
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Y-M D
 */
$messages['br'] = array(
	'gettingstarted' => 'Kregiñ ganti',
	'gettingstarted-project-link' => '{{ns:Project}} : Kregiñ ganti', # Fuzzy
	'tag-gettingstarted_edit' => 'aozer nevez [[{{MediaWiki:gettingstarted-project-link}}|kregiñ ganti]]',
	'gettingstarted-task-toolbar-editing-help-text' => 'Diskouez din penaos ober',
	'gettingstarted-task-toolbar-try-another-text' => 'Esaeañ ur bajenn all ►',
	'gettingstarted-task-toolbar-close-title' => 'Serriñ ar varrenn ostilhoù-mañ',
	'gettingstarted-task-addlinks-toolbar-description' => "Maretze he deus ezhoùù ar bajenn-mañ eus muioc'h a liammoù. Klaskit tremenoù hag o deus ur bajenn {{SITENAME}}.",
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Penaos kregiñ ganti',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Soñjoù diwar-benn petra ober',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Klikit war {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Gallout a rit aozañ ar bajenn a-bezh o klikañ amañ.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Aozañ ur rann',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Gallout a rit aozañ !',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Bremañ e c\'hallit aozañ ar bajenn. P\'ho po fin, klikit war "{{int:visualeditor-toolbar-savedialog}}" evit adwelet hag enrollañ ho kemmoù.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Rakwel (diret)',
	'guidedtour-tour-gettingstarted-click-save-title' => "Tost echu eo ganeoc'h !",
	'gettingstarted-cta-close' => 'Serriñ',
	'gettingstarted-cta-heading' => 'Skoazell {{SITENAME}}',
	'gettingstarted-cta-text' => 'Gallout a rit kemer perzh e {{SITENAME}} e meur a zoare',
	'gettingstarted-cta-edit-page' => 'Degas kemmoù war ar bajenn-mañ',
	'gettingstarted-cta-edit-page-sub' => "Diskouez a raimp deoc'h penaos ober",
	'gettingstarted-cta-fix-pages' => 'Kavout pajennoù o deus ezhomm eus reizhadennoù eeun',
	'gettingstarted-cta-fix-pages-sub' => "Diskouez a raimp deoc'h penaos aozañ",
	'gettingstarted-cta-leave' => "Ket, diwezhatoc'h marteze",
);

/** Bosnian (bosanski)
 * @author Edinwiki
 * @author KWiki
 */
$messages['bs'] = array(
	'gettingstarted' => 'Kako započeti?',
	'gettingstarted-desc' => 'Pomaže novim korisnicima da postanu urednici',
	'gettingstarted-project-link' => '{{ns:Project}}:Početak',
	'tag-gettingstarted_edit' => 'novi urednik [[{{MediaWiki:gettingstarted-project-link}}|početak]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Izmjena napravljena pomoću [[{{MediaWiki:gettingstarted-project-link}}|početnog]] sistema, koji predlaže jednostavne zadatke urednicima i prikazuje kako ih uraditi.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Pokaži mi kako',
	'gettingstarted-task-toolbar-editing-help-title' => 'Prikaži mi vodič o uređivanju',
	'gettingstarted-task-toolbar-try-another-text' => 'Pokušaj drugu stranicu ►',
	'gettingstarted-task-toolbar-close-title' => 'Zatvori ovu alatnu traku',
	'gettingstarted-task-toolbar-no-suggested-page' => 'Izvinjavamo se. Nije bilo moguće pronaći više stranica koje bi se mogle poboljšati. Pokušajte kasnije ili potražite nešto drugo po Vašem interesu.',
	'gettingstarted-task-copyedit-toolbar-description' => 'Moguće je da ova stranica ima pravopisnih ili gramatičkih grešaka koje možete ispraviti.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Idite na slučajnu stranicu koju možete poboljšati tako što ćete je lektorirati.',
	'gettingstarted-task-clarify-toolbar-description' => 'Ova stranica može biti zbunjujuća ili nejasna. Potražite načine kako biste je mogli učiniti jasnijom.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Otvorite neku slučajnu stranicu koju biste mogli razjasniti.',
	'gettingstarted-task-addlinks-toolbar-description' => 'Moguće je da ova stranica zahtijeva više veza. Potražite pojmove koji imaju stranicu {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Otvorite neku slučajnu stranicu na kojoj možete dodati veze',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Kako započeti',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Samo počnite pregledavati stranicu tražeći načine za njeno poboljšanje. Ako imate osjećaj da Vam je to previše, ne brinite se. Ne morate biti stručnjak za datu temu. Ako Vam treba pomoć ili želite pokušati na drugoj stranici, koristite linkove koji se nalaze u gornjoj traci.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ideje o tome šta bi se moglo uraditi',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Ove naljepnice označavaju probleme na ovoj stranici. Nije potrebno da ih sve odjednom riješite. Izaberite ono što vam najbolje odgovara.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Kliknite {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Možete urediti čitavu stranicu klikanjem ovdje.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Uredi sekciju',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Ako želite urediti specifičnu sekciju, onda kliknite na plavi link "{{int:editsection}}", koji se nalazi na vrhu svake sekcije.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Možete uređivati!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Sada možete urediti stranicu. Kad završite s uređivanjem, kliknite na "{{int:visualeditor-toolbar-savedialog}}" da pregledate i sačuvate Vaše izmjene.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Pregled (nije obavezno)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Klikanje na "{{int:showpreview}}" omogućava Vam da vidite kako bi stranica izgledala s Vašim izmjenama. Nemojte na kraju zaboraviti sačuvati izmjene.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Skoro ste gotovi!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Kliknite "{{int:savearticle}}" i Vaše izmjene bit će prikazane.',
	'gettingstarted-cta-close' => 'Zatvori',
	'gettingstarted-cta-heading' => 'Pomozi stranici {{SITENAME}}',
	'gettingstarted-cta-text' => 'Možete doprinijeti stranici {{SITENAME}} na različite načine',
	'gettingstarted-cta-edit-page' => 'Uredi ovu stranicu',
	'gettingstarted-cta-edit-page-sub' => 'Pokazat ćemo Vam kako',
	'gettingstarted-cta-fix-pages' => 'Pronađi stranice koje zahtijevaju jednostavne popravke',
	'gettingstarted-cta-fix-pages-sub' => 'Pokazat ćemo Vam kako da uređujete',
	'gettingstarted-cta-leave' => 'Ne, hvala, možda kasnije',
);

/** Catalan (català)
 * @author Papapep
 * @author Paucabot
 * @author QuimGil
 * @author Vriullop
 */
$messages['ca'] = array(
	'gettingstarted' => 'Primers passos',
	'gettingstarted-desc' => 'Ajuda als nous usuaris per convertir-se en editors',
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	'tag-gettingstarted_edit' => 'nou editor [[{{MediaWiki:gettingstarted-project-link}}|primers passos]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Edició feta via [[{{MediaWiki:gettingstarted-project-link}}|GettingStarted]] que suggereix tasques fàcils als editors i els mostra com realitzar-les.',
	'gettingstarted-task-toolbar-editing-help-text' => "Mostra'm com",
	'gettingstarted-task-toolbar-editing-help-title' => "Mostra una guia d'edició",
	'gettingstarted-task-toolbar-try-another-text' => 'Prova una altra pàgina ►',
	'gettingstarted-task-toolbar-close-title' => "Tanca aquesta barra d'eines",
	'gettingstarted-task-toolbar-no-suggested-page' => "Disculpes. No hem pogut trobar més pàgines a millorar ara mateix. Intenteu-ho de nou en uns moments o cerqueu els vostres temes d'interès.",
	'gettingstarted-task-copyedit-toolbar-description' => "Aquesta pàgina pot tenir errors d'ortografia o gramàtica que podeu corregir.",
	'gettingstarted-task-copyedit-toolbar-try-another-title' => "Aneu a una pàgina aleatòria que podeu millorar per correcció d'estil",
	'gettingstarted-task-clarify-toolbar-description' => 'Aquesta pàgina pot ser confusa o imprecisa. Mireu de fer-la més clara.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Aneu a una pàgina aleatòria que pugueu aclarir',
	'gettingstarted-task-addlinks-toolbar-description' => 'Aquesta pàgina pot necessitar més enllaços. Cerqueu termes que tinguin una pàgina a {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Aneu a una pàgina aleatòria a la que podeu afegir enllaços',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Primers passos',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Comenceu a repassar la pàgina cercant possibles millores a fer. Si us sentiu aclaparats no patiu, no heu de ser un expert en aquest tema! Si necessiteu ajuda o voleu provar amb una altra pàgina, empreu els enllaços de la barra superior.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Idees sobre què fer',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Aquests rètols identifiquen problemes de la pàgina. No cal arreglar-los tots, feu només el que us faci sentir còmode.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Feu clic a {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Podeu editar la pàgina sencera fent clic aquí.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => "Edició d'una secció",
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Si voleu editar una secció específica, feu clic a l'enllaç blau '{{int:editsection}}' al capdamunt de cada secció.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Podeu editar!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "Ara ja podeu editar la pàgina. Quan estigueu feu clic a '{{int:visualeditor-toolbar-savedialog}}' per revisar i desar els canvis.",
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Previsualització (opcional)',
	'guidedtour-tour-gettingstarted-click-preview-description' => "Si feu clic a '{{int:showpreview}}' podreu comprovar com es es veurà la pàgina amb els vostres canvis. No us oblideu de desar.",
	'guidedtour-tour-gettingstarted-click-save-title' => 'Gairebé heu acabat!',
	'guidedtour-tour-gettingstarted-click-save-description' => "Feu clic a '{{int:savearticle}}' i els vostres canvis seran visibles.",
	'gettingstarted-cta-close' => 'Tanca',
	'gettingstarted-cta-heading' => 'Ajudeu a {{SITENAME}}',
	'gettingstarted-cta-text' => 'Podeu contribuir a {{SITENAME}} de diferents formes',
	'gettingstarted-cta-edit-page' => 'Modifica aquesta pàgina',
	'gettingstarted-cta-edit-page-sub' => 'Us mostrarem com',
	'gettingstarted-cta-fix-pages' => 'Trobeu pàgines que necessiten correccions fàcils.',
	'gettingstarted-cta-fix-pages-sub' => "Us mostrarem com s'edita",
	'gettingstarted-cta-leave' => 'No, gràcies, potser més endavant',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'gettingstarted-task-addlinks-main-description' => 'ТӀетоха хьажорагаш',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Хьан йиш ю ерриг агӀо тая тӀетаӀича кхузахь.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Хьайна билгала дакъа тадан лууш делахь тӀетаӀае сийначу '{{int:editsection}}', хьажораган иза ю хӀора декъан тӀехула.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "ХӀинца хьа йиш ю агӀо тая. Хьай болх баьлча, тӀетаӀе кнопка '{{int:visualeditor-toolbar-savedialog}}' хийцамашка хьажа а Ӏалашъян а.",
	'guidedtour-tour-gettingstarted-click-save-title' => 'Хьа болх бала гергга бу!',
	'notification-gettingstarted-continue-editing' => 'Дика болх бу! Ахьа {{SITENAME}} чохь цхьалгӀа нисдар дина.
Хьона кхин дӀа болх бан лууш делахь атта дан дезаш долучу [[Special:GettingStarted|могӀа бу]]. 

$3', # Fuzzy
	'notification-gettingstarted-continue-editing-text-email-body' => 'Дика болх бу! Ахьа {{SITENAME}} чохь цхьалгӀа нисдар дина.
Хьона кхин дӀа болх бан лууш делахь атта дан дезаш долучу могӀа бу: $2 

$3',
	'gettingstarted-cta-edit-page-sub' => 'Оха гойтур ду муха',
	'gettingstarted-cta-fix-pages-sub' => 'Оха гойтур ду муха тайо',
);

/** Czech (čeština)
 * @author Mormegil
 * @author Paxt
 * @author Utar
 * @author Vks
 */
$messages['cs'] = array(
	'gettingstarted-desc' => 'Pomáhá novým uživatelům začít s editacemi',
	'gettingstarted-project-link' => '{{ns:Project}}:Jak začít',
	'tag-gettingstarted_edit' => 'nový uživatel [[{{MediaWiki:gettingstarted-project-link}}|začíná]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Editace stránky, kterou si uživatel zvolil ze seznamu úkolů na stránce [[Special:GettingStarted|Jak začít]]', # Fuzzy
	'gettingstarted-task-toolbar-no-suggested-page' => 'Omlouváme se. Nemohli jsme najít další stránky, které by se právě daly zlepšit. Zkuste to znovu později nebo hledejte vlastní zajímavá témata.',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'gettingstarted' => 'Camau cyntaf',
	'gettingstarted-welcomesiteuser' => 'Croeso i $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Camau cyntaf',
	'gettingstarted-welcome-back-site-user' => 'Croeso nôl, $2',
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
);

/** Danish (dansk)
 * @author Christian List
 */
$messages['da'] = array(
	'gettingstarted' => 'Kom godt i gang',
	'gettingstarted-desc' => 'Tilføjer en [[Special:GettingStarted|velkomstside]] for nye brugere (vist efter oprettelse af konto)',
	'gettingstarted-welcomesiteuser' => 'Velkommen til $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Kom godt i gang',
	'gettingstarted-welcome-back-site-user' => 'Velkommen tilbage $2',
	'gettingstarted-task-header' => 'Tak for at deltage i {{SITENAME}}! Her er nogle måder, du kan blive involveret.

Vælg en valgmulighed nedenfor, og du vil se en tilfældig side, som har brug for hjælp.',
	'gettingstarted-return' => '← Nej tak, tag mig tilbage til den side jeg læste',
	'gettingstarted-project-link' => '{{ns:Project}}:Kom godt i gang',
	'tag-gettingstarted_edit' => 'ny bidragsyder [[{{MediaWiki:gettingstarted-project-link}}|kom godt i gang]]',
	'tag-gettingstarted_edit-description' => 'Redigering af en side, som brugeren har valgt fra opgavelisten i [[Special:GettingStarted|kom godt i gang]]',
	'gettingstarted-task-copyedit-main-description' => 'Ret stavning og grammatik',
	'gettingstarted-task-copyedit-secondary-description' => 'Den nemmeste måde at komme i gang!',
	'gettingstarted-task-clarify-main-description' => 'Forbedre tydeligheden',
	'gettingstarted-task-clarify-secondary-description' => 'Forenkle eller omformulere sætninger.',
	'gettingstarted-task-addlinks-main-description' => 'Tilføje henvisninger',
	'gettingstarted-task-addlinks-secondary-description' => 'Koble sider i {{SITENAME}} sammen.',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Vælg en anden opgave',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Vend tilbage til siden med valg af opgave',
	'gettingstarted-task-toolbar-editing-help-text' => 'Vis mig hvordan',
	'gettingstarted-task-toolbar-editing-help-title' => 'Viser en vejledning om, hvordan du redigerer',
	'gettingstarted-task-toolbar-try-another-text' => 'Prøv en anden side ►',
	'gettingstarted-task-toolbar-close-title' => 'Luk denne værktøjslinje',
	'gettingstarted-task-copyedit-toolbar-description' => 'Denne side kan have stave- eller grammatikfejl du kan rette.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Gå til en tilfældig side du kan forbedre ved at redigere',
	'gettingstarted-task-clarify-toolbar-description' => 'Denne side kan være forvirrende eller uklar. Se om der er måder, du kan gøre den tydeligere.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Gå til en tilfældig side du kan tydeliggøre',
	'gettingstarted-task-addlinks-toolbar-description' => 'Denne side behøver muligvis flere henvisninger. Se efter udtryk, der har en side på {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Gå til en tilfældig side, du kan tilføje henvisninger til',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Sådan kommer du i gang',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Begynd bare at kigge siden igennem mens du leder efter forbedringer. Hvis du føler dig overvældet, så fortvivl ikke. Du behøver ikke at være ekspert på dette emne! Hvis du har brug for hjælp eller har lyst til at prøve en anden side, kan du bruge linkene i topbjælken.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ideer til hvad du kan gøre',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Disse bannere identificere problemer med denne side. Du behøver ikke at løse dem alle, bare nøjes med, hvad du er komfortabel ved at gøre.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Klik på {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Du kan redigere hele artiklen ved at klikke her.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Redigere et afsnit',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Hvis du vil redigere et bestemt afsnit, kan du klikke på det blå '{{int:editsection}}' link øverst i hvert afsnit.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Du kan redigere!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "Du kan nu redigere siden. Når du er færdig, så klik på '{{int:visualeditor-toolbar-savedialog}}' for at kontrollere og gemme dine ændringer.",
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Forhåndsvisning (valgfri)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'At klikke "{{int:showpreview}}" giver dig mulighed for at kontrollere, hvordan siden vil se ud med dine ændringer. Bare husk at gemme bagefter.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Du er næsten færdig!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Klik på "{{int:savearticle}}", og dine ændringer vil blive synlige.',
	'notification-gettingstarted-link-text-get-started' => 'Kom i gang',
	'notification-gettingstarted-start-editing' => '{{SITENAME}} er en fri encyklopædi, skrevet af mennesker som dig. [[Special:GettingStarted|Kom godt i gang]] ved at foretage din første redigering!',
	'notification-gettingstarted-start-editing-email-subject' => 'Kom godt i gang med at redigere {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} er en gratis encyklopædi skrevet af folk som dig. Kom godt i gang ved at lave din første redigering!

Besøg $2 for en liste over nemme måder at forbedre sider.

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Kom godt i gang med {{SITENAME}} redigering ved at besøge $2',
	'notification-gettingstarted-continue-editing' => 'Flot arbejde! Du har allerede foretaget din første redigering af {{SITENAME}}. Hvis du er på udkig efter mere at lave, er her nogle [[Special:GettingStarted|nemme måder at hjælpe]].',
	'notification-gettingstarted-continue-editing-email-subject' => 'Nemme måder at forbedre {{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Flot arbejde! Du har allerede foretaget din første redigering af {{SITENAME}}.

Hvis du er på udkig efter mere at lave, er der en liste over nemme måder at hjælpe på $2

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Leder du efter mere at lave? Besøg $2 for en liste af nemme måder at hjælpe.',
	'gettingstarted-cta-close' => 'Luk',
	'gettingstarted-cta-heading' => 'Hjælp {{SITENAME}}',
	'gettingstarted-cta-text' => 'Du kan bidrage til {{SITENAME}} på forskellige måder',
	'gettingstarted-cta-edit-page' => 'Redigér denne side',
	'gettingstarted-cta-edit-page-sub' => 'Vi vil vise dig hvordan',
	'gettingstarted-cta-fix-pages' => 'Find sider, der har brug for lette rettelser',
	'gettingstarted-cta-fix-pages-sub' => 'Vi vil vise dig hvordan du kan redigere',
	'gettingstarted-cta-leave' => 'Nej tak, måske senere',
);

/** German (Deutsch)
 * @author Church of emacs
 * @author Kghbln
 * @author Metalhead64
 */
$messages['de'] = array(
	'gettingstarted' => 'Erste Schritte',
	'gettingstarted-desc' => 'Hilft neuen Benutzern, Autoren zu werden.',
	'gettingstarted-project-link' => '{{ns:Project}}:Erste Schritte',
	'tag-gettingstarted_edit' => 'Bearbeitungsvorschläge über [[{{MediaWiki:gettingstarted-project-link}}|„Erste Schritte“]]',
	'tag-gettingstarted_edit-description' => 'Bearbeitung durchgeführt mit dem System „[[{{MediaWiki:gettingstarted-project-link}}|Erste Schritte]]“, das Bearbeitern einfache Aufgaben vorschlägt und ihnen zeigt, wie man sie abschließt.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Zeig mir, wie',
	'gettingstarted-task-toolbar-editing-help-title' => 'Bearbeitungshilfe anzeigen',
	'gettingstarted-task-toolbar-try-another-text' => 'Eine andere Seite versuchen ►',
	'gettingstarted-task-toolbar-close-title' => 'Diese Werkzeugleiste schließen',
	'gettingstarted-task-toolbar-no-suggested-page' => 'Leider können derzeit keine weiteren Seiten zur Verbesserung vorgeschlagen werden. Versuche es gleich erneut oder suche Themen, für die du dich interessierst.',
	'gettingstarted-task-copyedit-toolbar-description' => 'Diese Seite könnte Rechtschreibe- oder Grammatikfehler haben, die du korrigieren kannst.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Gehe zu einer zufälligen Seite, um sie durch Korrekturlesen zu verbessern.',
	'gettingstarted-task-clarify-toolbar-description' => 'Diese Seite könnte verwirrend oder unklar sein. Versuche sie verständlicher zu machen.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Gehe zu einer zufälligen Seite, deren Text du verständlicher machen kannst.',
	'gettingstarted-task-addlinks-toolbar-description' => 'Diese Seite könnte mehr Links brauchen. Suche nach Begriffen, die eine {{SITENAME}}-Seite haben.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Gehe zu einer zufälligen Seite, bei der du Links hinzufügen kannst.',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Erste Schritte',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Überfliege die Seite und suche nach Verbesserungen. Falls du dich überfordert fühlst, mach dir keine Sorgen. Du musst kein Experte in diesem Thema sein. Falls du Hilfe benötigst oder eine andere Seite ausprobieren möchtest, benutze die Links in der obigen Leiste.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ideen, was zu tun ist.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Diese Banner kennzeichnen Probleme mit der Seite. Du musst sie nicht alle angehen. Konzentriere dich auf ein Problem, das du beheben kannst.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Klicke auf „{{int:vector-view-edit}}“',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Du kannst den gesamten Artikel bearbeiten, indem du hier klickst.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Einen Abschnitt bearbeiten',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Falls du einen bestimmten Abschnitt bearbeiten möchtest, kannst du auf den blauen „{{int:editsection}}“-Link zu Beginn jeden Abschnitts klicken.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Du kannst bearbeiten!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Du kannst jetzt die Seite bearbeiten. Wenn du fertig bist, klicke auf „{{int:visualeditor-toolbar-savedialog}}“, um deine Änderungen zu überprüfen und zu speichern.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Vorschau (optional)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Klicke auf „{{int:showpreview}}“, um zu sehen, wie die Seite mit deinen Änderungen aussieht. Vergiss nur nicht, sie später abzuspeichern.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Du bist fast fertig!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Klicke auf „{{int:savearticle}}“ und deine Änderungen werden sichtbar.',
	'gettingstarted-cta-close' => 'Schließen',
	'gettingstarted-cta-heading' => 'Hilf {{SITENAME}}',
	'gettingstarted-cta-text' => 'Du kannst auf verschiedene Wege zur Verbesserung von {{SITENAME}} beitragen',
	'gettingstarted-cta-edit-page' => 'Diese Seite bearbeiten',
	'gettingstarted-cta-edit-page-sub' => 'Wir werden dir zeigen wie',
	'gettingstarted-cta-fix-pages' => 'Finde Seiten, die einfache Korrekturen brauchen.',
	'gettingstarted-cta-fix-pages-sub' => 'Wir werden dir zeigen, wie man bearbeitet.',
	'gettingstarted-cta-leave' => 'Nein danke, vielleicht später.',
);

/** Zazaki (Zazaki)
 * @author Gorizon
 * @author Mirzali
 */
$messages['diq'] = array(
	'gettingstarted-cta-close' => 'Racın',
	'gettingstarted-cta-heading' => 'Peşti bıde {{SITENAME}}',
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
	'gettingstarted-return' => 'Ně, źěkujom se, źi slědk k pśecytanemu bokoju',
	'gettingstarted-project-link' => '{{ns:Project}}:Prědne kšace',
	'tag-gettingstarted_edit' => '[[{{MediaWiki:gettingstarted-project-link}}|Prědne kšace]] nowego wobźěłarja',
	'gettingstarted-task-copyedit-main-description' => 'Pšawopis a gramatiku korigěrowaś',
	'gettingstarted-task-clarify-main-description' => 'Jasnosć pólěpšyś',
);

/** Greek (Ελληνικά)
 * @author Geraki
 * @author Nikosguard
 * @author ZaDiak
 */
$messages['el'] = array(
	'gettingstarted' => 'Ξεκινώντας',
	'gettingstarted-desc' => 'Βοηθά τους νέους χρήστες να γίνουν συντάκτες',
	'gettingstarted-project-link' => '{{ns:Project}}:Ξεκινώντας',
	'tag-gettingstarted_edit' => 'νέος συντάκτης [[{{MediaWiki:gettingstarted-project-link}}|ξεκινά]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Επεξεργασία που έγινε μέσω του συστήματος [[{{MediaWiki:gettingstarted-project-link}}|Ξεκινήματος]], το οποίο προτείνει εύκολες εργασίες στους συντάκτες και τους δείχνει πώς να τις συμπληρώσουν.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Δείξτε μου πώς',
	'gettingstarted-task-toolbar-editing-help-title' => 'Παρουσιάζει έναν οδηγό για το πώς να επεξεργαστείτε',
	'gettingstarted-task-toolbar-try-another-text' => 'Δοκιμάστε μια άλλη σελίδα ►',
	'gettingstarted-task-toolbar-close-title' => 'Κλείνει αυτή τη γραμμή εργαλείων',
	'gettingstarted-task-toolbar-no-suggested-page' => 'Συγνώμη. Δεν μπορέσαμε να βρούμε περισσότερες σελίδες για βελτίωση αυτή τη στιγμή. Δοκιμάστε ξανά μετά από λίγο ή να κάντε αναζήτηση για τα δικά σας θέματα ενδιαφέροντος.',
	'gettingstarted-task-copyedit-toolbar-description' => 'Αυτή η σελίδα μπορεί να έχει ορθογραφικά ή γραμματικά λάθη που μπορείτε να διορθώσετε.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Μεταβείτε σε μια τυχαία σελίδα που μπορείτε να βελτιώσετε συντακτικά',
	'gettingstarted-task-clarify-toolbar-description' => 'Αυτή η σελίδα μπορεί να προκαλεί σύγχυση ή είναι αόριστη. Αναζητήστε τρόπους για να μπορείτε να την κάνετε πιο ξεκάθαρη.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Μεταβείτε σε μια τυχαία σελίδα που μπορείτε να κάνετε διευκρινήσεις',
	'gettingstarted-task-addlinks-toolbar-description' => 'Αυτή η σελίδα μπορεί να χρειάζεται περισσότερους σύνδεσμους. Αναζητήστε για όρους που έχουν μια σελίδα {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Μεταβείτε σε μια τυχαία σελίδα όπου μπορείτε να προσθέσετε συνδέσμους',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Πώς να ξεκινήσετε',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Απλώς ξεκινήστε τη σάρωση της σελίδας ψάχνοντας για βελτιώσεις. Εάν αισθάνεστε συντριμμένοι, μην ανησυχείτε. Δεν χρειάζεται να είστε ειδικός επί του θέματος! Αν χρειάζεστε βοήθεια ή θέλετε να δοκιμάσετε μια άλλη σελίδα, χρησιμοποιήστε τους συνδέσμους στην επάνω μπάρα.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ιδέες για το τι να κάνετε',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Αυτά τα μπάνερ εντοπίζουν προβλήματα σε αυτή τη σελίδα. Δεν χρειάζεται να αντιμετωπίσετε όλα αυτά, απλά να παραμείνετε με ό,τι μπορείτε με άνεση να το κάνετε.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Κάντε κλικ στο κουμπί {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Μπορείτε να επεξεργαστείτε ολόκληρη τη σελίδα κάνοντας κλικ εδώ.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Επεξεργασία ενότητας',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Εάν θέλετε να επεξεργαστείτε μια συγκεκριμένη ενότητα, μπορείτε να κάνετε κλικ στο μπλε "{{int:editsection}}" σύνδεσμο στην κορυφή της κάθε ενότητας.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Μπορείτε να επεξεργαστείτε!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Τώρα μπορείτε να επεξεργαστείτε τη σελίδα. Όταν τελειώσετε, κάντε κλικ στο "{{int:visualeditor-toolbar-savedialog}}" για να επιθεωρήσετε και να αποθηκεύσετε τις αλλαγές σας.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Προεπισκόπηση (προαιρετικό)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Κάνοντας κλικ στο "{{int:showpreview}}" σας επιτρέπει να δείτε πως θα είναι η σελίδα μετά τις αλλαγές που κάνατε. Απλά μην ξεχάσετε να αποθηκεύσετε!',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Σχεδόν τελειώσατε!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Κάντε κλικ στο κουμπί "{{int:savearticle}}" και οι αλλαγές σας θα είναι ορατές.',
	'gettingstarted-cta-close' => 'Κλείσιμο',
	'gettingstarted-cta-heading' => 'Βοήθεια {{SITENAME}}',
	'gettingstarted-cta-text' => 'Μπορείτε να συνεισφέρετε στη {{SITENAME}} με διάφορους τρόπους',
	'gettingstarted-cta-edit-page' => 'Επεξεργασία αυτής της σελίδας',
	'gettingstarted-cta-edit-page-sub' => 'Θα σας δείξουμε πώς',
	'gettingstarted-cta-fix-pages' => 'Βρείτε σελίδες που χρειάζονται εύκολες διορθώσεις',
	'gettingstarted-cta-fix-pages-sub' => 'Θα σας δείξουμε πώς να επεξεργάζεστε',
	'gettingstarted-cta-leave' => 'Όχι ευχαριστώ, ίσως αργότερα',
);

/** British English (British English)
 * @author Shirayuki
 */
$messages['en-gb'] = array(
	'gettingstarted-msg' => 'An administrator on {{SITENAME}} should customise this message by editing [[{{ns:MediaWiki}}:gettingstarted-msg]].',
);

/** Esperanto (Esperanto)
 * @author KuboF
 * @author Yekrats
 */
$messages['eo'] = array(
	'gettingstarted' => 'Unuaj paŝoj',
	'gettingstarted-welcomesiteuser' => 'Bonvenon al $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Kiel komenci',
);

/** Spanish (español)
 * @author Almupg
 * @author Armando-Martin
 * @author Benfutbol10
 * @author Ciencia Al Poder
 * @author Fitoschido
 * @author McDutchie
 * @author Pginer
 * @author QuimGil
 * @author Sethladan
 */
$messages['es'] = array(
	'gettingstarted' => 'Primeros pasos',
	'gettingstarted-desc' => 'Ayuda a usarios nuevos convertirse en editores.',
	'gettingstarted-project-link' => '{{ns:Project}}:PrimerosPasos',
	'gettingstarted-task-toolbar-editing-help-text' => 'Mostrarme cómo',
	'gettingstarted-task-toolbar-editing-help-title' => 'Mostrar una guía de edición',
	'gettingstarted-task-toolbar-try-another-text' => 'Probar otra página ►',
	'gettingstarted-task-toolbar-close-title' => 'Cerrar esta barra de herramientas',
	'gettingstarted-task-copyedit-toolbar-description' => 'Esta página puede tener errores ortográficos y gramaticales que puedes corregir.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Ir a una página aleatoria cuyo estilo puedes mejorar',
	'gettingstarted-task-clarify-toolbar-description' => 'Esta página es confusa o ambigua. Busca maneras de hacerla más clara.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Ir a una página aleatoria que puedes clarificar',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Cómo empezar',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ideas sobre qué hacer',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Pulsa en {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Editar una sección',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => '¡Puedes editar!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Ahora puedes editar la página. Cuando estés listo, haz clic en "{{int:visualeditor-toolbar-savedialog}}" para revisar y guardar tus cambios.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Previsualización (opcional)',
	'guidedtour-tour-gettingstarted-click-preview-description' => "Clicando en '{{int:showpreview}}' puede comprobar cómo se verá la página con sus cambios. No se olvide de guardar.",
	'guidedtour-tour-gettingstarted-click-save-title' => '¡Ya casi ha terminado!',
	'guidedtour-tour-gettingstarted-click-save-description' => "Haga clic en '{{int:savearticle}}' y sus cambios serán visibles.",
	'gettingstarted-cta-close' => 'Cerrar',
	'gettingstarted-cta-heading' => 'Ayuda a {{SITENAME}}',
	'gettingstarted-cta-text' => 'Puedes contribuir a {{SITENAME}} de diferentes formas',
	'gettingstarted-cta-edit-page' => 'Editar esta página',
	'gettingstarted-cta-edit-page-sub' => 'Te mostraremos cómo',
	'gettingstarted-cta-fix-pages' => 'Encuentra páginas que necesitan correcciones sencillas',
	'gettingstarted-cta-fix-pages-sub' => 'Te mostraremos cómo editar',
	'gettingstarted-cta-leave' => 'No gracias, tal vez luego',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 * @author RM87
 */
$messages['et'] = array(
	'gettingstarted' => 'Esimesed sammud',
	'gettingstarted-desc' => 'Aitab uuel kasutajal toimetajaks saada.',
	'gettingstarted-project-link' => '{{ns:Project}}:Esimesed sammud',
	'tag-gettingstarted_edit' => 'uue toimetaja [[{{MediaWiki:gettingstarted-project-link}}|esimesed sammud]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Muudatus tehtud [[{{MediaWiki:gettingstarted-project-link}}|esimeste sammude]] süsteemis, mis soovitab toimetajatele lihtsaid ülesandeid ja näitab, kuidas neid täita.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Näita, kuidas',
	'gettingstarted-task-toolbar-editing-help-title' => 'Näita juhiseid redigeerimise kohta',
	'gettingstarted-task-toolbar-try-another-text' => 'Proovi teist lehekülge ►',
	'gettingstarted-task-toolbar-close-title' => 'Sule see tööriistariba',
	'gettingstarted-task-copyedit-toolbar-description' => 'Sellel leheküljel võib olla kirja- ja grammatikavigu, mida saad parandada.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Mine juhuslikule leheküljele, mida saad paremaks toimetada.',
	'gettingstarted-task-clarify-toolbar-description' => 'See lehekülg võib olla segane või ebamäärane. Ehk oskad teha seda arusaadavamaks.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Mine juhuslikule leheküljele, mida saad teha arusaadavamaks.',
	'gettingstarted-task-addlinks-toolbar-description' => 'Võimalik, et sellel leheküljel peaks olema rohkem linke. Otsi märksõnu, mille kohta on {{GRAMMAR:inessive|{{SITENAME}}}} lehekülg.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Mine juhuslikule leheküljele, kuhu saad linke lisada.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ideed selle kohta, mida teha',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Neis märkustes on nimetatud selle lehekülje puudused. Sa ei pea tegelema nende kõigiga. Võta ette mõni puudus, mille lahendamises tunned ennast kindlalt.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Klõpsa "{{int:vector-view-edit}}"',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Saad redigeerida tervet lehekülge, kui siia klõpsad.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Redigeeri alaosa',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Kui tahad redigeerida kindlat alaosa, saad iga alaosa ülaosas klõpsata sinisel lingil "{{int:editsection}}".',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Eelvaade (valikuline)',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Sa oled peaaegu lõpetanud!',
	'guidedtour-tour-gettingstarted-click-save-description' => "Vajuta '{{int:savearticle}}' ja sinu muudatused on nähtavad.",
	'gettingstarted-cta-close' => 'Sule',
);

/** Persian (فارسی)
 * @author Armin1392
 * @author Ebraminio
 * @author Mcuteangel
 * @author Mjbmr
 * @author Omidh
 * @author Reza1615
 * @author Taha
 */
$messages['fa'] = array(
	'gettingstarted' => 'شروع',
	'gettingstarted-desc' => 'به کاربران جدید کمک می‌کند که ویرایشگر شوند',
	'gettingstarted-project-link' => '{{ns:Project}}:شروع',
	'tag-gettingstarted_edit' => 'ویرایشگر جدید [[{{MediaWiki:gettingstarted-project-link}}|شروع کنید]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'ویرایش ایجاد شده از طریق سیستم [[{{MediaWiki:gettingstarted-project-link}}|GettingStarted]]، که وظایف آسانی را به ویراستاران پیشنهاد می‌کند و به آنها نشان می‌دهد که چه‌طور آنها را کامل کنند.',
	'gettingstarted-task-toolbar-editing-help-text' => 'به‌ من نشان بده چگونه',
	'gettingstarted-task-toolbar-editing-help-title' => 'نشان‌ دادن یک راهنما در مورد چگونگی ویرایش',
	'gettingstarted-task-toolbar-try-another-text' => '► صفحه دیگری را امتحان کنید',
	'gettingstarted-task-toolbar-close-title' => 'این نوار ابزار را ببندید',
	'gettingstarted-task-toolbar-no-suggested-page' => 'متأسفم. ما در حال حاضر نتوانستیم صفحات بیشتری برای بهبود یافتن پیدا کنیم. وقت دیگری دوباره امتحان کنید یا برای عناوین مورد علاقهٔ خود جستجو کنید.',
	'gettingstarted-task-copyedit-toolbar-description' => 'این صفحه ممکن است غلط‌های املایی یا دستور زبان داشته باشد که می‌توانید تصحیح کنید.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'رفتن به صفحهٔ اتفاقی که شما توسط ویرایش کپی می‌توانید اصلاح کنید',
	'gettingstarted-task-clarify-toolbar-description' => 'این صفحه ممکن است گیج‌کننده یا مبهم باشد. دنبال راه‌هایی برای واضح‌تر کردن آن بگردید.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'برو به یک صفحه تصادفی برای افزایش وضوح',
	'gettingstarted-task-addlinks-toolbar-description' => 'این صفحه ممکن است به لینک‌های بیشتری نیاز داشته‌باشد. به دنبال شرایطی باشید که یک {{SITENAME}} صفحه دارد.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'رفتن به صفحهٔ اتفاقی که شما می‌توانید لینک‌ها را به آن اضافه کنید',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'چگونگی شروع شدن',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'فقط شروع به اسکن کردن از طریق صفحه‌ای کنید که به دنبال بهبود است. اگر احساس نگرانی کردید، نگران نباشید. شما نباید یک کارشناس در این موضوع باشید! اگر نیاز به کمک دارید یا می‌خواهید صفحهٔ دیگری را امتحان کنید، از لینک های بالای نوار استفاده کنید.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'ایده‌هایی برای چه انجام دادن',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'این علامت‌ها مشکلات این صفحه را شناسایی می‌کند. لازم نیست شما به همهٔ آنها بپردازید، فقط آنهایی را قرار دهید که با انجام  دادن آن راحت هستید.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => '{{int:vector-view-edit}} را کلیک کنید',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'شما می‌توانید کل صفحه را با کلیک کردن اینجا ویرایش کنید.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'ویرایش یک بخش',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'اگر می‌خواهید یک بخش ویژه را ویرایش کنید، می‌توانید روی لینک آبی {{int:editsection}}" در بالای هر بخش کلیک کنید.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'می‌توانید ویرایش کنید!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'اکنون می‌توانید صفحه را ویرایش کنید. هنگامی که انجام دادید، "{{int:visualeditor-toolbar-savedialog}}" را برای بررسی و ذخیرهٔ تغییرات خود، کلیک کنید.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'پیش‌نمایش (اختیاری)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'با کلیک کردن "{{int:showpreview}}" به شما اجازه داده می‌شود که بررسی کنید که صفحه‌ با تغییرات شما چه شکلی خواهدشد. فقط فراموش نکنید که ذخیره کنید.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'کار شما تقریباً تمام شده‌است!',
	'guidedtour-tour-gettingstarted-click-save-description' => '"{{int:savearticle}}" را کلیک کنید و تغییرات شما قابل‌ مشاهده خواهد بود.',
	'gettingstarted-cta-close' => 'بستن',
	'gettingstarted-cta-heading' => 'کمک به {{SITENAME}}',
	'gettingstarted-cta-text' => 'شما می‌توانید از راه‌های مختلف به {{SITENAME}} کمک کنید',
	'gettingstarted-cta-edit-page' => 'ویرایش این صفحهٔ',
	'gettingstarted-cta-edit-page-sub' => 'ما به شما نشان می‌دهیم چگونه',
	'gettingstarted-cta-fix-pages' => 'پیداکردن صفحاتی که به اصلاحات آسان نیاز دارند',
	'gettingstarted-cta-fix-pages-sub' => 'ما به شما نشان می‌دهیم که چگونه ویرایش کنید',
	'gettingstarted-cta-leave' => 'نه متشکرم، شاید بعداً',
);

/** Finnish (suomi)
 * @author Nike
 * @author Samoasambia
 * @author Silvonen
 * @author Stryn
 * @author VezonThunder
 */
$messages['fi'] = array(
	'gettingstarted' => 'Alkuaskeleet',
	'gettingstarted-desc' => 'Auttaa uusista käyttäjistä tulemaan muokkaajia',
	'gettingstarted-project-link' => '{{ns:Project}}:Alkuaskeleet',
	'tag-gettingstarted_edit' => 'uusi käyttäjä [[{{MediaWiki:gettingstarted-project-link}}|aloittamassa]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Muokkaus tehty [[{{MediaWiki:gettingstarted-project-link}}|Alkuaskeleet]]-järjestelmän kautta, joka ehdottaa helppoja tehtäviä muokkaajille, ja näyttää heille kuinka suorittaa ne.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Näytä kuinka',
	'gettingstarted-task-toolbar-editing-help-title' => 'Näytä muokkausopas',
	'gettingstarted-task-toolbar-try-another-text' => 'Kokeile toista sivua ►',
	'gettingstarted-task-toolbar-close-title' => 'Sulje työkalurivi',
	'gettingstarted-task-toolbar-no-suggested-page' => 'Pahoittelut. Emme löytäneet enempää sivuja, joita voisi parantaa tällä hetkellä. Yritä uudelleen piakkoin tai etsi kiinnostuksen kohteitasi.',
	'gettingstarted-task-copyedit-toolbar-description' => 'Tässä sivussa voi olla kirjoitus- ja kielioppivirheitä, jotka voit korjata.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Mene satunnaiselle sivulle, jota voit parantaa tekemällä kielenhuoltoa',
	'gettingstarted-task-clarify-toolbar-description' => 'Tämä sivu saattaa olla sekava tai epämääräinen. Keksi, miten voit tehdä siitä selkeämmän.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Mene satunnaiseen sivuun, jota voit selkeyttää',
	'gettingstarted-task-addlinks-toolbar-description' => 'Tämä sivu saattaa tarvita lisää linkkejä. Etsi käsitteitä, joilla on {{SITENAME}}-sivu.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Etsii satunnaisen sivun, johon voit lisätä linkkejä',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Miten päästä alkuun',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ideoita mitä tehdä',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Napsauta {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Voit muokata artikkelia napsauttamalla tästä.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Muokkaa osiota',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Jos haluat muokata tiettyä osiota, voit napsauttaa sinistä »{{int:editsection}}»-linkkiä jokaisen osion yläpuolella.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Voit muokata!',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Esikatselu (valinnainen)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Napsauttamalla "{{int:showpreview}}" näet miltä sivu näyttää muutostesi jälkeen. Älä unohda tallentaa.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Olet melkein valmis!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Napsauta »{{int:savearticle}}» ja muutoksesi tulevat näkyviin.',
	'gettingstarted-cta-close' => 'Sulje',
	'gettingstarted-cta-text' => 'Voit osallistua sivustolla {{SITENAME}} eri tavoin',
	'gettingstarted-cta-edit-page' => 'Muokkaa tätä sivua',
	'gettingstarted-cta-edit-page-sub' => 'Näytämme miten',
	'gettingstarted-cta-fix-pages' => 'Hae sivuja, jotka tarvitsevat helppoja korjauksia',
	'gettingstarted-cta-fix-pages-sub' => 'Näytämme, miten voit muokata',
	'gettingstarted-cta-leave' => 'Ei kiitos, ehkä myöhemmin',
);

/** French (français)
 * @author Crochet.david
 * @author DavidL
 * @author Gomoko
 * @author Hello71
 * @author Jean-Frédéric
 * @author Ltrlg
 * @author Metroitendo
 * @author Trizek
 * @author Valystant
 * @author Verdy p
 * @author Wyz
 */
$messages['fr'] = array(
	'gettingstarted' => 'Premiers pas',
	'gettingstarted-desc' => 'Aide les nouveaux utilisateurs à devenir des rédacteurs',
	'gettingstarted-project-link' => '{{ns:Project}}:Premiers pas',
	'tag-gettingstarted_edit' => 'via les suggestions de modification de [[{{MediaWiki:gettingstarted-project-link}}|Premiers pas]]',
	'tag-gettingstarted_edit-description' => 'Modification faite au moyen du système [[{{MediaWiki:gettingstarted-project-link}}|Premiers pas]], qui suggère des tâches faciles aux rédacteurs et leur montre comment les accomplir.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Me montrer comment faire',
	'gettingstarted-task-toolbar-editing-help-title' => 'Voir un guide sur la façon de modifier une page',
	'gettingstarted-task-toolbar-try-another-text' => 'Essayer une autre page ►',
	'gettingstarted-task-toolbar-close-title' => 'Fermer cette barre d’outils.',
	'gettingstarted-task-toolbar-no-suggested-page' => 'Désolé. Nous ne trouvons plus de page à améliorer pour l’instant. Réessayez dans un moment ou recherchez vos propres centres d’intérêt.',
	'gettingstarted-task-copyedit-toolbar-description' => 'Cette page peut comporter des erreurs d’orthographe ou de grammaire que vous pouvez corriger.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Aller à une page au hasard que vous pouvez améliorer en modifiant par copie.',
	'gettingstarted-task-clarify-toolbar-description' => 'Cette page peut être source de confusion ou vague. Cherchez des façons de la rendre plus claire.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Aller vers une page au hasard que vous pourrez rendre plus claire.',
	'gettingstarted-task-addlinks-toolbar-description' => 'Cette page pourrait nécessiter davantage de liens. Cherchez des termes qui ont une page sur {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Aller vers une page au hasard dans laquelle vous pourrez ajouter des liens.',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Comment bien démarrer',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Commencez simplement à analyser la page et à chercher des améliorations. Si vous vous sentez dépassé, ne vous inquiétez pas. Vous n’avez pas besoin d’être un expert de ce sujet ! Si vous avez besoin d’aide ou voulez essayer une autre page, utilisez les liens de la barre du haut.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Quelques idées sur ce qui peut être fait.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Ces bannières identifient des problèmes avec cette page. Vous n’avez pas besoin de les traiter tous, occupez-vous seulement de ce dont vous vous sentez capable.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Cliquez sur {{int:vector-view-edit}}.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Vous pouvez modifier la page entière en cliquant ici.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Modifier une section',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Si vous souhaitez modifier une section spécifique, vous pouvez cliquer sur le lien bleu « {{int:editsection}} » en haut de chaque section.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Vous pouvez modifier !',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Vous pouvez maintenant modifier la page. Quand vous avez terminé, cliquez sur « {{int:visualeditor-toolbar-savedialog}} » pour vérifier et enregistrer vos modifications.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Aperçu (facultatif)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Cliquer sur « {{int:showpreview}} » vous permet de vérifier à quoi ressemblera la page avec vos modifications. N’oubliez pas ensuite de publier pour les conserver.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Vous avez presque fini !',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Cliquez sur « {{int:savearticle}} » et vos modifications seront visibles.',
	'gettingstarted-cta-close' => 'Fermer',
	'gettingstarted-cta-heading' => 'Aidez {{SITENAME}}',
	'gettingstarted-cta-text' => 'Vous pouvez contribuer à {{SITENAME}} de différentes façons',
	'gettingstarted-cta-edit-page' => 'Modifier cette page',
	'gettingstarted-cta-edit-page-sub' => 'Nous allons vous montrer comment',
	'gettingstarted-cta-fix-pages' => 'Trouver des pages qui ont besoin de corrections faciles',
	'gettingstarted-cta-fix-pages-sub' => 'Nous allons vous montrer comment les modifier',
	'gettingstarted-cta-leave' => 'Non merci, peut-être plus tard',
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
 * @author Sasuke UcHiA
 * @author Toliño
 */
$messages['gl'] = array(
	'gettingstarted' => 'Primeiros pasos',
	'gettingstarted-desc' => 'Axuda a que os novos usuarios se convertan en editores',
	'gettingstarted-project-link' => '{{ns:Project}}:Primeiros pasos',
	'tag-gettingstarted_edit' => 'novo editor dando os [[{{MediaWiki:gettingstarted-project-link}}|primeiros pasos]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Modificación feita a través do sistema dos [[{{MediaWiki:gettingstarted-project-link}}|primeiros pasos]], que suxire tarefas fáciles aos editores e mostra como completalas.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Mostrádeme como',
	'gettingstarted-task-toolbar-editing-help-title' => 'Ollar unha guía sobre como editar',
	'gettingstarted-task-toolbar-try-another-text' => 'Probar outra páxina ►',
	'gettingstarted-task-toolbar-close-title' => 'Pechar esta barra de ferramentas',
	'gettingstarted-task-toolbar-no-suggested-page' => 'Sentímolo. Nestes intres, non puidemos atopar máis páxinas que mellorar. Inténteo de novo máis tarde ou busque entre os temas que lle interesen.',
	'gettingstarted-task-copyedit-toolbar-description' => 'Esta páxina pode ter erros ortográficos ou gramaticais que vostede pode corrixir.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Ir a unha páxina ao chou para mellorar a súa redacción',
	'gettingstarted-task-clarify-toolbar-description' => 'Esta páxina pode ser confusa ou imprecisa. Busque formas de facela máis clara.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Ir a unha páxina ao chou para clarificala',
	'gettingstarted-task-addlinks-toolbar-description' => 'Esta páxina pode necesitar máis ligazóns. Busque termos que teñan páxina en {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Ir a unha páxina ao chou para engadirlle ligazóns',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Como comezar',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Empece analizando a páxina e buscando melloras. Se sente que non vai poder, non se preocupe. Non é necesario ser experto na materia! Se necesita axuda ou quere probar outra páxina, utilice as ligazóns da barra superior.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ideas sobre o que facer',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Estes carteis identifican os problemas da páxina. Non é necesario corrixilos todos, encárguese daquilo co que sinta comodidade.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Prema en "{{int:vector-view-edit}}"',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Pode editar todo o artigo premendo aquí.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Editar unha sección',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Se quere modificar unha sección específica, pode premer na ligazón azul "{{int:editsection}}" que hai ao comezo de cada sección.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Pode editar!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Agora pode editar a páxina. Cando remate, prema en "{{int:visualeditor-toolbar-savedialog}}" para revisar e gardar os seus cambios.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Vista previa (opcional)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Premer en "{{int:showpreview}}" serve para comprobar como se verá a páxina coas modificacións. Non esqueza gardar despois.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Case rematou!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Prema en "{{int:savearticle}}" para facer visibles as súas modificacións.',
	'gettingstarted-cta-close' => 'Pechar',
	'gettingstarted-cta-heading' => 'Axude a {{SITENAME}}',
	'gettingstarted-cta-text' => 'Pode colaborar en {{SITENAME}} de diferentes xeitos',
	'gettingstarted-cta-edit-page' => 'Editar esta páxina',
	'gettingstarted-cta-edit-page-sub' => 'Mostrámoslle como',
	'gettingstarted-cta-fix-pages' => 'Atopar as páxinas que necesitan correccións sinxelas',
	'gettingstarted-cta-fix-pages-sub' => 'Mostrámoslle como editar',
	'gettingstarted-cta-leave' => 'Non grazas, quizais logo',
);

/** Gujarati (ગુજરાતી)
 * @author Ashok modhvadia
 */
$messages['gu'] = array(
	'gettingstarted-task-addlinks-main-description' => 'કડીઓ ઉમેરો',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ અન્ય કાર્ય પસંદ કરો',
	'gettingstarted-task-toolbar-editing-help-text' => 'જુઓ કેવી રીતે',
	'gettingstarted-task-toolbar-try-another-text' => 'અન્ય લેખ માટે પ્રયત્ન કરો ►',
	'gettingstarted-task-toolbar-close-title' => 'આ સાધનપેટી બંધ કરો',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'કેવી રીતે શરૂઆત કરશો',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author ExampleTomer
 * @author Guycn1
 * @author Guycn2
 * @author NLIGuy
 * @author YaronSh
 * @author אור שפירא
 */
$messages['he'] = array(
	'gettingstarted' => 'איך להתחיל',
	'gettingstarted-desc' => 'עזרה למשתמשים חדשים להפוך לעורכים',
	'gettingstarted-project-link' => '{{ns:Project}}:איך להתחיל',
	'tag-gettingstarted_edit' => 'דרך הצעות עריכה של [[{{MediaWiki:gettingstarted-project-link}}|איך להתחיל]]',
	'tag-gettingstarted_edit-description' => 'עריכה שנעשתה דרך מערכת [[{{MediaWiki:gettingstarted-project-link}}|איך להתחיל]], שמציעה משימות פשוטות לעורכים ומראה להם איך להשלים אותן.',
	'gettingstarted-task-toolbar-editing-help-text' => 'תראו לי איך',
	'gettingstarted-task-toolbar-editing-help-title' => 'הצגת מדריך על איך לערוך',
	'gettingstarted-task-toolbar-try-another-text' => 'לנסות דף אחר ◄',
	'gettingstarted-task-toolbar-close-title' => 'סגירת סרגל כלים זה',
	'gettingstarted-task-toolbar-no-suggested-page' => 'סליחה. לא מצאנו עוד דפים שאפשר לשפר עכשיו. נא לנסות שוב בעוד רגע או לחפש דברים שמעניינים אותך.',
	'gettingstarted-task-copyedit-toolbar-description' => 'ייתכן שהדף הזה מכיל שגיאות איות ודקדוק שביכולתך לתקן.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'לעבור לדף אקראי שניתן לשפר באמצעות הגהה',
	'gettingstarted-task-clarify-toolbar-description' => 'ייתכן שהערך הזה מבלבל או מעורפל. צריך לחפש דרכים לעשות אותו ברור יותר.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'לעבור לערך אקראי שאפשר להפוך לברור יותר',
	'gettingstarted-task-addlinks-toolbar-description' => 'ייתכן שהערך הזה זקוק לעוד קישורים. חפשו מושגים שיש להם ערך ב{{GRAMMAR:תחילית|{{SITENAME}}}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'לעבור לערך אקראי לשם הוספת קישורים',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'איך להתחיל',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'צריך פשוט לקרוא ברפרוף את הערך ולחפש דברים לשפר. אם זה מבלבל, אל דאגה. אין צורך להיות מומחה בנושא! אם דרושה לך עזרה או שברצונך לנסות ערך אחר, נא להשתמש בקישורים בתפריט העליון.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'רעיונות לגבי מה לעשות',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'הכרזות הללו מציינות שיש בעיות עם הערך. אין צורך לפתור את כל הבעיות. מספיק לעשות את מה שנוח לך.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'יש ללחוץ על {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'באפשרותך לערוך את המאמר כולו על־ידי לחיצה כאן.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'עריכת פסקה',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'אם ברצונך לערוך פסקה מסוימת, אפשר ללחוץ על הקישור הכחול {{int:editsection}} בחלק העליון של כל פסקה.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'אפשר לערוך!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'כעת באפשרותך לערוך את הדף. בסיום יש ללחוץ על "{{int:visualeditor-toolbar-savedialog}}" כדי לסקור ולשמור את השינויים שלך.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'תצוגה מקדימה (לא חובה)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'לחיצה על {{int:showpreview}} מאפשרת לך לבדוק כיצד ייראה העמוד עם השינויים שלך. רק לא לשכוח לשמור!',
	'guidedtour-tour-gettingstarted-click-save-title' => 'כמעט סיימת!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'נשאר ללחוץ על "{{int:savearticle}}"ף והשינויים שלך יהיו גלויים.',
	'gettingstarted-cta-close' => 'סגירה',
	'gettingstarted-cta-heading' => 'איך לעזור ל{{GRAMMAR:תחילית|{{SITENAME}}}}',
	'gettingstarted-cta-text' => 'אפשר לתרום ל{{GRAMMAR:תחילית|{{SITENAME}}}} בדרכים שונות',
	'gettingstarted-cta-edit-page' => 'לערוך את הדף הזה',
	'gettingstarted-cta-edit-page-sub' => 'אנחנו נראה לך איך',
	'gettingstarted-cta-fix-pages' => 'למצוא דפים שצריכים תיקונים קלים',
	'gettingstarted-cta-fix-pages-sub' => 'אנחנו נראה לך איך לערוך',
	'gettingstarted-cta-leave' => 'לא תודה, אולי מאוחר יותר',
);

/** Hindi (हिन्दी)
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'gettingstarted-desc' => 'नए सदस्यों को सम्पादक बनने में मदद करता है',
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
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Přehlad (opcionalny)',
	'guidedtour-tour-gettingstarted-click-preview-description' => "Kliknjenje an '{{int:showpreview}}' ći zmóžnja kontrolować, kak strona z twojimi změnami wupada. Njezabudź na składowanje.",
	'guidedtour-tour-gettingstarted-click-save-title' => 'Sy nimale hotowy!',
	'guidedtour-tour-gettingstarted-click-save-description' => "Klikń na '{{int:savearticle}}' a twoje změny budu widźomne.",
);

/** Hungarian (magyar)
 * @author Tacsipacsi
 * @author Tgr
 */
$messages['hu'] = array(
	'gettingstarted' => 'Első lépések',
	'gettingstarted-desc' => 'Segít az új felhasználóknak a szerkesztővé válásban',
	'gettingstarted-project-link' => '{{ns:Project}}:Első lépések',
	'tag-gettingstarted_edit' => 'új szerkesztő [[{{MediaWiki:gettingstarted-project-link}}|első lépései]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Az [[{{MediaWiki:gettingstarted-project-link}}|Első lépések]] rendszerrel végzett szerkesztés. A rendszer könnyű feladatokat ajánl a szerkesztőknek, és megmutatja, hogyan tudják elvégezni őket.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Mutasd meg, hogyan',
	'gettingstarted-task-toolbar-editing-help-title' => 'Mutasd a szerkesztési útmutatót',
	'gettingstarted-task-toolbar-try-another-text' => 'Másik oldalt próbálok ►',
	'gettingstarted-task-toolbar-close-title' => 'Eszközsáv bezárása',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Előnézet (opcionális)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Az „{{int:showpreview}}” gombra kattintva megnézheted, hogyan néz majd ki az oldal a módosításaid után. Csak ne felejtsd el elmenteni a végén.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Mindjárt végzünk!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Kattints a „{{int:savearticle}}” gombra, és a változtatásaid megjelennek.',
);

/** Armenian (Հայերեն)
 * @author Vadgt
 */
$messages['hy'] = array(
	'guidedtour-tour-gettingstartedpage-add-links-title' => 'Ստեղծել հղումը', # Fuzzy
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'gettingstarted' => 'Prime passos',
	'gettingstarted-desc' => 'Adde un [[Special:GettingStarted|pagina de benvenita]] pro nove usatores (monstrate post creation de conto)',
	'gettingstarted-welcomesiteuser' => 'Benvenite a $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Prime passos',
	'gettingstarted-welcome-back-site-user' => 'Benvenite de novo, $2',
	'gettingstarted-task-header' => 'Gratias pro adherer a {{SITENAME}}! Ecce alcun modos de participar.

Selige un option hic infra, e tu videra un pagina prendite al hasardo que ha besonio de adjuta.',
	'gettingstarted-return' => '← No gratias, retorna me al pagina que io legeva',
	'gettingstarted-project-link' => '{{ns:Project}}:PrimePassos',
	'tag-gettingstarted_edit' => 'nove contributor: [[{{MediaWiki:gettingstarted-project-link}}|prime passos]]',
	'tag-gettingstarted_edit-description' => 'Modification de un pagina que le usator seligeva del lista de cargas in [[Special:GettingStarted|Prime passos]]',
	'gettingstarted-task-copyedit-main-description' => 'Corriger orthographia e grammatica',
	'gettingstarted-task-copyedit-secondary-description' => 'Le maniera le plus facile de comenciar!',
	'gettingstarted-task-clarify-main-description' => 'Meliorar le claritate',
	'gettingstarted-task-clarify-secondary-description' => 'Simplificar o reformular phrases.',
	'gettingstarted-task-addlinks-main-description' => 'Adder ligamines',
	'gettingstarted-task-addlinks-secondary-description' => 'Interconnecter paginas de {{SITENAME}}.',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Seliger un altere carga',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Retornar al pagina de selection de cargas',
	'gettingstarted-task-toolbar-editing-help-text' => 'Monstrar me como facer',
	'gettingstarted-task-toolbar-editing-help-title' => 'Monstrar un guida sur como modificar',
	'gettingstarted-task-toolbar-try-another-text' => 'Essayar un altere pagina ►',
	'gettingstarted-task-toolbar-close-title' => 'Clauder iste instrumentario',
	'gettingstarted-task-copyedit-toolbar-description' => 'Iste pagina pote haber errores de orthographia o grammatica que tu pote corriger.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Vader a un pagina aleatori que tu pote meliorar per rediger le texto',
	'gettingstarted-task-clarify-toolbar-description' => 'Iste pagina pote esser confundente o vage. Cerca manieras de render lo plus clar.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Vader a un pagina aleatori que tu pote clarificar',
	'gettingstarted-task-addlinks-toolbar-description' => 'Iste pagina pote haber besonio de plus ligamines. Cerca terminos que ha un pagina in {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Vader a un pagina aleatori al qual tu pote adder ligamines',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Como initiar',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Comencia simplemente a percurrer le pagina cercante possibilitates de meliorar lo. Si tu te senti supercargate, non preoccupa te. Non es necessari esser un experto de iste subjecto! Si tu ha besonio de adjuta o vole essayar un altere pagina, usa le ligamines in le barra superior.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Lo que tu pote facer',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Iste bandieras identifica problemas con iste pagina. Non es necessari corriger totes. Suffice facer lo que tu es confortabile de facer.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Clicca sur {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Tu pote modificar tote le articulo si tu clicca hic.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Modificar un section',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Si tu vole modificar un section specific, tu pote cliccar sur le ligamine blau '{{int:editsection}}' in le parte superior de cata section.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Tu pote modificar!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "Ora tu pote modificar le pagina. Quando tu ha finite, clicca sur '{{int:visualeditor-toolbar-savedialog}}' pro revider e salveguardar le cambiamentos.",
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Previsualisation (optional)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Cliccar sur "{{int:showpreview}}" permitte verificar le aspecto del pagina con tu modificationes. Solmente non oblida de salveguardar lo.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Tu ha quasi finite!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Clicca sur "{{int:savearticle}}" e tu modificationes essera visibile.',
	'notification-gettingstarted-link-text-get-started' => 'Comenciar',
	'notification-gettingstarted-start-editing' => '{{SITENAME}} es un encyclopedia libere scribite per gente como tu. [[Special:GettingStarted|Comencia]] e face tu prime modification!',
	'notification-gettingstarted-start-editing-email-subject' => 'Prime passos a modificar {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} es un encyclopedia libere scribite per gente como tu. Comencia e face tu prime modification!

Visita $2 pro un lista de manieras facile de meliorar paginas.

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Comencia a modificar {{SITENAME}} per visitar $2',
	'notification-gettingstarted-continue-editing' => 'Belle travalio! Tu ha jam facite tu prime modificationes in {{SITENAME}}. Si tu cerca altere cosas a facer, ecce alcun [[Special:GettingStarted|manieras facile de adjutar]].',
	'notification-gettingstarted-continue-editing-email-subject' => 'Manieras facile de meliorar {{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Belle travalio! Tu ha jam facite tu prime modificationes in {{SITENAME}}.

Si tu cerca altere cosas a facer, il ha un lista de manieras facile de adjutar a $2

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Tu cerca altere cosas a facer? Visita $2 pro un lista de manieras facile de adjutar.',
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

/** Icelandic (íslenska)
 * @author Snævar
 */
$messages['is'] = array(
	'gettingstarted' => 'Hafist handa',
	'gettingstarted-desc' => 'Hjálpar nýjum notendum að verða höfundar',
	'gettingstarted-project-link' => '{{ns:Project}}:Hafist handa',
	'tag-gettingstarted_edit' => 'Gerð með breytingartillögum frá [[{{MediaWiki:gettingstarted-project-link}}|Hafist handa]]',
	'tag-gettingstarted_edit-description' => 'Breyting gerð með [[{{MediaWiki:gettingstarted-project-link}}|GettingStarted]] kerfinu, sem gefur tillögur yfir einföld verkefni fyrir notendur og sýnir þeim hvernig á að ljúka þeim.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Sýndu mér hvernig',
	'gettingstarted-task-toolbar-editing-help-title' => 'Sýna leiðarvísi um hvernig á að breyta',
	'gettingstarted-task-toolbar-try-another-text' => 'Reyna aðra síðu ►',
	'gettingstarted-task-toolbar-close-title' => 'Loka þessari stiku',
	'gettingstarted-task-toolbar-no-suggested-page' => 'Því miður fundum við ekki fleiri síður sem hægt er að bæta í augnablikinu. Reyndu aftur síðar eða leitaðu eftir umfangsefnum sem þér þykir áhugaverð.',
	'gettingstarted-task-copyedit-toolbar-description' => 'Þessi síða gæti verið með stafsetningar- eða málfræðivillur sem þú getur lagað.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Fara á handahófsvalna síðu sem þú getur bætt með villulestri',
	'gettingstarted-task-clarify-toolbar-description' => 'Þessi síða gæti verið of óhnitmiðuð eða ruglandi. Reyndu að finna leiðir til að gera hana skiljanlegri.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Fara á síðu sem þú getur gert skiljanlegri.',
	'gettingstarted-task-addlinks-toolbar-description' => 'Þessi síða gæti þurft fleiri tengla. Leitaðu eftir heitum sem hafa síðu á {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Fara á handahólfsvalda síðu sem þú getur bætt tenglum við',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Hvernig á að hefjast handa',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Byrjaðu með því að renna í gegnum síðuna og leita eftir hlutum sem hægt er að bæta. Ef þér þykir verkefnið yfirdrifið, ekki hafa áhyggjur. Það er alltaf hægt að gera eitthvað án þess að vera sérfræðingur um efnið! Ef þú þarft hjálp eða vilt reyna aðra síðu, notaðu tenglana í stikunni efst.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Hugmyndir um hvað hægt sé að gera',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Þessar stikur bera kennsl á vandamál við þessa síðu. Þú þarft ekki að bæta þær allar, heldur haltu þig bara við það sem þér þykir þægilegt að gera.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Smelltu á {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Þú getur breytt allri greininni með því að smella hér.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Breyta kafla',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Ef þú vilt breyta ákveðnum kafla, þá getur þú smellt á bláa „{{int:editsection}}” tenglin efst við hvern kafla.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Þú getur breytt!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Þú getur núna breytt síðunni. Þegar þú ert búin/n, smelltu á „{{int:visualeditor-toolbar-savedialog}}” til þess að fara yfir og vista breytingarnar þínar.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Forskoða (valfrjálst)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Með því að smella á „{{int:showpreview}}” þá getur þú skoðað hvernig síðan mun líta út með breytingunum þínum. Bara ekki gleyma að vista.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Þú ert næstum búin/n!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Smelltu á „{{int:savearticle}}” og breytingarnar þínar verða sýnilegar.',
	'gettingstarted-cta-close' => 'Loka',
	'gettingstarted-cta-heading' => 'Hjálpa {{SITENAME}}',
	'gettingstarted-cta-text' => 'Þú getur gert breytingar á {{SITENAME}} á nokkra vegu',
	'gettingstarted-cta-edit-page' => 'Breyta þessari síðu',
	'gettingstarted-cta-edit-page-sub' => 'Við sýnum þér hvernig',
	'gettingstarted-cta-fix-pages' => 'Finna síður sem þurfa léttar leiðréttingar',
	'gettingstarted-cta-fix-pages-sub' => 'Við sýnum þér hvernig á að breyta',
	'gettingstarted-cta-leave' => 'Nei takk, kanski seinna',
);

/** Italian (italiano)
 * @author Beta16
 * @author Gianfranco
 * @author McDutchie
 */
$messages['it'] = array(
	'gettingstarted' => 'Guida introduttiva',
	'gettingstarted-desc' => 'Aiuta i nuovi utenti a diventare contributori',
	'gettingstarted-project-link' => '{{ns:Project}}:Guida introduttiva',
	'tag-gettingstarted_edit' => 'nuovo contributore dalla [[{{MediaWiki:gettingstarted-project-link}}|guida introduttiva]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Modifica effettuata dalla [[{{MediaWiki:gettingstarted-project-link}}|guida introduttiva]], che suggerisce semplici attività ai contributori e gli mostra come completarle.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Mostrami come',
	'gettingstarted-task-toolbar-editing-help-title' => 'Mostra una guida su come modificare',
	'gettingstarted-task-toolbar-try-another-text' => "Prova con un'altra pagina ►",
	'gettingstarted-task-toolbar-close-title' => 'Chiudi questa barra degli strumenti',
	'gettingstarted-task-toolbar-no-suggested-page' => "Spiacenti, non troviamo pagine da migliorare al momento. Prova un'altra volta o cerca un'argomento di tuo interesse.",
	'gettingstarted-task-copyedit-toolbar-description' => 'Questa pagina potrebbe avere errori ortografici o grammaticali che puoi risolvere.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Vai ad una pagina a caso in cui puoi migliorare la formattazione',
	'gettingstarted-task-clarify-toolbar-description' => 'Questa pagina può essere confusa o vaga. Cerca il modo migliore di renderla più chiara.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Vai ad una pagina a caso che puoi chiarire',
	'gettingstarted-task-addlinks-toolbar-description' => 'Questa pagina può avere bisogno di più collegamenti. Cerca termini che hanno una pagina in {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Vai ad una pagina a caso in cui puoi aggiungere collegamenti',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Come iniziare',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => "Basta leggere la pagina e cercare parti che si possono migliorare. Se ti senti sopraffatto, non preoccuparti. Non è necessario essere un esperto in questo argomento! Se hai bisogno di aiuto o vuoi provare con un'altra pagina, utilizza i collegamenti nella barra in alto.",
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Idee su cosa fare',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Questi avvisi identificano problemi con questa pagina. Non è necessario che ti occupi di tutti, è sufficiente che fai quelli in cui sei più a tuo agio.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Fai clic su {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => "È possibile modificare l'intera voce cliccando qui.",
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Modifica una sezione',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Se vuoi modificare una sezione specifica, puoi fare clic sul link blu '{{int:editsection}}' nella parte superiore di ogni sezione.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Puoi modificare!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "Ora puoi modificare la pagina. Quando hai finito, clicca '{{int:visualeditor-toolbar-savedialog}}' per rivedere e salvare le tue modifiche.",
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Anteprima (opzionale)',
	'guidedtour-tour-gettingstarted-click-preview-description' => "Facendo clic su '{{int:showpreview}}' ti permette di verificare quello che sarà l'aspetto della pagina con le tue modifiche. Basta non dimenticare di salvare.",
	'guidedtour-tour-gettingstarted-click-save-title' => 'Hai quasi finito!',
	'guidedtour-tour-gettingstarted-click-save-description' => "Fai click su '{{int:savearticle}}' e le modifiche saranno visibili.",
	'gettingstarted-cta-close' => 'Chiudi',
	'gettingstarted-cta-heading' => 'Aiuta {{SITENAME}}',
	'gettingstarted-cta-text' => 'Puoi contribuire a {{SITENAME}} in diversi modi',
	'gettingstarted-cta-edit-page' => 'Modifica questa pagina',
	'gettingstarted-cta-edit-page-sub' => 'Ti mostreremo come',
	'gettingstarted-cta-fix-pages' => 'Trova pagine che necessitano di correzioni semplici',
	'gettingstarted-cta-fix-pages-sub' => 'Ti mostreremo come modificare',
	'gettingstarted-cta-leave' => 'No grazie, forse più tardi',
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
	'gettingstarted-task-addlinks-secondary-description' => '{{SITENAME}}のページ同士を繋ぐ。',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ 別の作業を選択',
	'gettingstarted-task-toolbar-return-to-list-title' => '作業選択ページに戻る',
	'gettingstarted-task-toolbar-editing-help-text' => 'ヘルプを表示',
	'gettingstarted-task-toolbar-editing-help-title' => '編集方法のガイドを表示する',
	'gettingstarted-task-toolbar-try-another-text' => '別のページに挑戦 ►',
	'gettingstarted-task-toolbar-close-title' => 'このツールバーを閉じる',
	'gettingstarted-task-addlinks-toolbar-description' => 'このページにはリンクがもっと必要かもしれません。{{SITENAME}}にページが存在する用語を見つけてください。',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => '{{int:vector-view-edit}}をクリック',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'ここをクリックして、ページ全体を編集できます。',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => '節の編集',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => '特定の節を編集したい場合は、それぞれの節の上部にある青いリンク「{{int:editsection}}」をクリックしてください。',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => '編集できます!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'ページを編集できるようになりました。編集が完了したら、「{{int:visualeditor-toolbar-savedialog}}」をクリックして、編集内容を確認および保存してください。',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'プレビュー (省略可能)',
	'guidedtour-tour-gettingstarted-click-preview-description' => '「{{int:showpreview}}」をクリックすると、編集結果の見た目を確認できます。保存するのを忘れないようにしてください。',
	'guidedtour-tour-gettingstarted-click-save-title' => 'もう少しで終わります!',
	'guidedtour-tour-gettingstarted-click-save-description' => '「{{int:savearticle}}」をクリックすると、変更内容が最新版として保存されます。',
	'gettingstarted-cta-close' => '閉じる',
	'gettingstarted-cta-heading' => '{{SITENAME}}を支援しましょう',
	'gettingstarted-cta-text' => '{{SITENAME}}では、さまざまな方法で貢献できます。',
	'gettingstarted-cta-edit-page' => 'このページを編集',
	'gettingstarted-cta-edit-page-sub' => '方法をお見せします',
	'gettingstarted-cta-fix-pages' => '簡単な修正が必要なページを見つける',
	'gettingstarted-cta-fix-pages-sub' => '編集方法をお見せします',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'gettingstarted-welcomesiteuser' => 'მოგესალმებით $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'მუშაობის დაწყება',
	'gettingstarted-return' => '← არა გმადლობთ, დამაბრუნეთ იმ გვერდზე რომელსაც ვკითხულობდი',
);

/** Korean (한국어)
 * @author Freebiekr
 * @author Hym411
 * @author Priviet
 * @author 아라
 */
$messages['ko'] = array(
	'gettingstarted' => '시작하기',
	'gettingstarted-desc' => '새 사용자가 편집자가 되도록 돕습니다.',
	'gettingstarted-project-link' => '{{ns:Project}}:시작하기',
	'tag-gettingstarted_edit' => '새 편집자 [[{{MediaWiki:gettingstarted-project-link}}|시작하기]]', # Fuzzy
	'tag-gettingstarted_edit-description' => '편집자에게 쉬운 작업을 제시하여 그 작업을 어떻게 완료하는지 보여주는 [[{{MediaWiki:gettingstarted-project-link}}|시작하기]] 시스템에서 작성한 편집.',
	'gettingstarted-task-toolbar-editing-help-text' => '방법 보기',
	'gettingstarted-task-toolbar-editing-help-title' => '편집하는 방법 안내 보기',
	'gettingstarted-task-toolbar-try-another-text' => '다른 문서 시험 ►',
	'gettingstarted-task-toolbar-close-title' => '이 도구줄 닫기',
	'gettingstarted-task-toolbar-no-suggested-page' => '죄송하지만 지금은 개선할 더 많은 문서를 찾을 수 없습니다. 잠시 후에 다시 시도하거나 자신이 관심있는 주제를 찾아보십시오.',
	'gettingstarted-task-copyedit-toolbar-description' => '이 문서에는 철자나 문법 오류가 있을 수 있으며 정정할 수 있습니다.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => '교정에 의해 향상할 수 있는 임의 문서로 갑니다',
	'gettingstarted-task-clarify-toolbar-description' => '이 문서는 혼동스럽거나 막연할 수 있습니다. 명확하게 할 수 있는 방법을 찾아보세요.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => '명확하게 할 수 있는 임의 문서로 갑니다',
	'gettingstarted-task-addlinks-toolbar-description' => '이 문서에는 더 많은 링크가 필요할 수 있습니다. {{SITENAME}} 문서로 용어를 찾아보세요.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => '링크를 추가할 수 있는 임의 문서로 갑니다',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => '시작하는 방법',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => '문서를 검사하고 개선할 점을 찾기를 시작하세요. 어렵다고 느껴져도 걱정하지 마세요. 이 주제에 대해 전문가가 될 필요가 없습니다! 도움이 필요하거나 다른 문서를 시도하려면 위 줄의 링크를 사용하세요.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => '무엇을 해야할 지에 대한 아이디어',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => '이 배너들은 이 문서로 문제를 식별합니다. 그들 모두를 해결할 필요가 없고, 익숙하게 한 것들에 충실하세요.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => '{{int:vector-view-edit}} 클릭',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => '여기를 클릭해 전체 문서를 편집할 수 있습니다.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => '문단 편집',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "특정 문단을 편집하려면 각 편집의 위에 파란 '{{int:editsection}}' 링크를 클릭할 수 있습니다.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => '편집할 수 있습니다!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "이제 문서를 편집할 수 있습니다. 완료되면, 바뀜을 검토하고 저장하려면 '{{int:visualeditor-toolbar-savedialog}}'을 클릭하세요.",
	'guidedtour-tour-gettingstarted-click-preview-title' => '미리 보기 (선택 사항)',
	'guidedtour-tour-gettingstarted-click-preview-description' => '"{{int:showpreview}}"를 클릭하면 문서가 어떻게 바뀌었는지 확인할 수 있습니다. 저장하는 것을 잊지 마세요.',
	'guidedtour-tour-gettingstarted-click-save-title' => '거의 끝났습니다!',
	'guidedtour-tour-gettingstarted-click-save-description' => "'{{int:savearticle}}'을 클릭하여 바뀜을 볼 수 있습니다.",
	'gettingstarted-cta-close' => '닫기',
	'gettingstarted-cta-heading' => '{{SITENAME}} 도움말',
	'gettingstarted-cta-text' => '당신은 {{SITENAME}}에 다양한 방법으로 기여할 수 있습니다.',
	'gettingstarted-cta-edit-page' => '이 문서 편집',
	'gettingstarted-cta-edit-page-sub' => '어떻게 하는지 보여드리겠습니다',
	'gettingstarted-cta-fix-pages' => '쉽게 고칠 수 있는 문서 찾기',
	'gettingstarted-cta-fix-pages-sub' => '어떻게 편집하는지 보여드리겠습니다',
	'gettingstarted-cta-leave' => '괜찮습니다. 나중에요.',
);

/** Kyrgyz (Кыргызча)
 * @author Growingup
 */
$messages['ky'] = array(
	'gettingstarted' => 'Иштин башталышы',
	'gettingstarted-welcomesiteuser' => '$1 сайтына кош келиңиз, $2!',
	'gettingstarted-welcomesiteuseranon' => '$1 сайтына кош келиңиз!', # Fuzzy
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'gettingstarted' => 'Fir unzefänken',
	'gettingstarted-desc' => 'Hëlleft neie Benotzer derbäi Auteur ze ginn',
	'gettingstarted-project-link' => '{{ns:Project}}:Fir unzefänken',
	'tag-gettingstarted_edit' => 'iwwer [[{{MediaWiki:gettingstarted-project-link}}|wéi ufänken]] Virschléi änneren',
	'tag-gettingstarted_edit-description' => 'Ännerung déi mat Hëllef vu [[{{MediaWiki:gettingstarted-project-link}}|Fir unzefänken]], wou Auteuren einfach Aufgabe proposéiert ginn a wou gewise gëtt wéi déi erleedegt kënne ginn, gemaach gouf.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Weist mir wéi',
	'gettingstarted-task-toolbar-editing-help-title' => 'E Guide weise wéi een ännere kann',
	'gettingstarted-task-toolbar-try-another-text' => 'Probéiert eng aner Säit ►',
	'gettingstarted-task-toolbar-close-title' => 'Dës Toolbar zoumaachen',
	'gettingstarted-task-copyedit-toolbar-description' => 'Op dëser Säit si méiglecherweis Schreif- a grammatesch Feeler déi Dir verbessere kënnt.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Gitt op eng zoufällegen Säit, déi Dir duerch ännere verbessere kënnt',
	'gettingstarted-task-clarify-toolbar-description' => 'Dës Säit ass méiglecherweis konfus oder vague. Kuckt no Weeër wéi Dir se méi kloer maache kënnt.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Gitt op eng zoufälleg Säit, dei Dir präziséiere kënnt',
	'gettingstarted-task-addlinks-toolbar-description' => 'Dësen Säit brauch méi Linken. Kuckt no Begrëffer déi eng {{SITENAME}}-Säit hunn.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Gitt op eng zoufällegen Säit wou Dir Linken derbäisetze kënnt',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Wéi een ufänkt',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Iddie wat Dir maache kënnt',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Klickt op {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Dir Kënnt de ganzen Artikel ännere wann Dir hei klickt.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'En Abschnitt änneren',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Wann Dir e bestëmmten Abschnitt ännere wëllt, da klickt op de bloen  '{{int:editsection}}' Link uewen op all Abschnitt.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Dir kënnt änneren!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "Dir kënnt d'Säit elo änneren. Wann dir fäerdeg sidd, klickt  '{{int:visualeditor-toolbar-savedialog}}' fir nozekucken an Är Ännerungen ze späicheren.",
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Weisen ouni ze späicheren (fakuktativ)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Klickt op "{{int:showpreview}}", fir ze gesinn, wéi d\'Säit mat dengen Ännerungen ausgesäit. Vergiesst net ze späicheren.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Dir sidd bal fäerdeg!',
	'guidedtour-tour-gettingstarted-click-save-description' => "Klickt op '{{int:savearticle}}' an Är Ännerunge sinn ze gesinn.",
	'gettingstarted-cta-close' => 'Zoumaachen',
	'gettingstarted-cta-heading' => 'Hëlleft {{SITENAME}}',
	'gettingstarted-cta-text' => 'Dir kënnt op verschidde Manéieren op {{SITENAME}} matmaachen',
	'gettingstarted-cta-edit-page' => 'Dës Säit änneren',
	'gettingstarted-cta-edit-page-sub' => 'Mir weisen Iech wéi',
	'gettingstarted-cta-fix-pages' => 'Säite fannen, déi einfach Verbesserunge brauchen',
	'gettingstarted-cta-fix-pages-sub' => 'Mir weisen Iech wéi Dir ännere kënnt',
	'gettingstarted-cta-leave' => 'Nee merci, vläicht méi spéit',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 * @author Mantak111
 */
$messages['lt'] = array(
	'gettingstarted-welcomesiteuser' => 'Sveiki atvykę į $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Sveiki atvykę į $1!', # Fuzzy
	'gettingstarted-task-addlinks-main-description' => 'Pridėti nuorodas',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Grįžti į sąrašą', # Fuzzy
	'gettingstarted-task-toolbar-return-to-list-title' => 'Grįžti į straipsnių sąrašą', # Fuzzy
	'gettingstarted-task-toolbar-try-another-text' => 'Pabandykite kitą straipsnį ►',
	'gettingstarted-task-toolbar-close-title' => 'Uždaryti šią įrankių juostą',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Kaip pradėti',
);

/** Latvian (latviešu)
 * @author Admresdeserv.
 * @author Papuass
 */
$messages['lv'] = array(
	'gettingstarted-desc' => 'Pievieno [[Special:GettingStarted|sagaidīšanas lapu]] jauniem lietotājiem (tiek rādīta pēc lietotāja konta izveides)',
	'gettingstarted-welcomesiteuser' => 'Laipni {{GENDER:$2|lūgts|lūgta}} $1, $2',
	'gettingstarted-welcomesiteuseranon' => 'Darba sākšana',
	'gettingstarted-welcome-back-site-user' => 'Laipni {{GENDER:$2|lūgts|lūgta}} atpakaļ, $2',
	'gettingstarted-return' => '← Nē, paldies, atgriezties uz lapu, ko es lasīju',
	'gettingstarted-task-copyedit-main-description' => 'Labot pareizrakstību un gramatiku',
	'gettingstarted-task-copyedit-secondary-description' => 'Vieglākais veids, lai sāktu!',
	'gettingstarted-task-clarify-main-description' => 'Uzlabot skaidrību',
	'gettingstarted-task-clarify-secondary-description' => 'Vienkāršojiet vai pārformulējiet teikumus.',
	'gettingstarted-task-addlinks-main-description' => 'Pievienot saites',
	'gettingstarted-task-addlinks-secondary-description' => 'Savienojiet {{SITENAME}} lapas.',
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Izvēlieties citu uzdevumu',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Atgriezties uzdevumu izvēles lapā',
	'gettingstarted-task-toolbar-editing-help-text' => 'Parādiet man, kā',
	'gettingstarted-task-toolbar-editing-help-title' => 'Rādīt labošanas pamācību',
	'gettingstarted-task-toolbar-try-another-text' => 'Izmēģināt citu lapu ►',
	'gettingstarted-task-toolbar-close-title' => 'Aizvērt šo rīkjoslu',
	'gettingstarted-task-copyedit-toolbar-description' => 'Šajā lapā var būt pareizrakstības vai gramatikas kļūdas, kuras jūs varat novērst.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Doties uz nejaušu lapu, kuram jūs varat izlabot valodas kļūdas',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Doties uz nejaušu lapu, kuru jūs vart padarīt skaidrāku',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Doties uz nejaušu lapu, kam jūs varat pievienot saites',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Kā sākt darbu',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Idejas par to, ko darīt',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Šie plakāti norāda uz šīs lapas problēmām. Jums nav jānovērš tās visas, palieciet pie tā, ko jūs pārzināt.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Klikšķiniet uz {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Jūs varat labot visu rakstu, klikšķinot šeit.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Labot sadaļu',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Jūs varat labot!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "Tagad jūs varat labot lapu. Kad darbs pabeigts, klikšķiniet uz '{{int:visualeditor-toolbar-savedialog}}', lai pārskatītu un saglabātu savas izmaiņas.",
	'notification-gettingstarted-link-text-get-started' => 'Sāciet',
	'notification-gettingstarted-start-editing-email-subject' => 'Iepazīsties ar {{SITENAME}} rediģēšanas',
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Iepazīsties ar {{SITENAME}} rediģēšanu apmeklējot $2',
	'notification-gettingstarted-continue-editing-email-subject' => 'Vienkārši veidi, kā uzlabot {{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Meklējiet, ko vēl padarīt? Apmeklējiet $2, lai atrastu sarakstu ar vienkāršiem veidiem, kā palīdzēt.',
);

/** Malagasy (Malagasy)
 * @author Jagwar
 */
$messages['mg'] = array(
	'tag-gettingstarted_edit' => "amin'ny alalan'ny sosokevi-panovan'i [[{{MediaWiki:gettingstarted-project-link}}|Handeha Hanomboka]]",
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
	'gettingstarted-desc' => 'Помогнете им на новодојдените да станат уредници',
	'gettingstarted-project-link' => '{{ns:Project}}:ПрвиЧекори',
	'tag-gettingstarted_edit' => 'преку предлозите за уредување од „[[{{MediaWiki:gettingstarted-project-link}}|Први чекори]]“',
	'tag-gettingstarted_edit-description' => 'Уредување преку системот [[{{MediaWiki:gettingstarted-project-link}}|GettingStarted]], кој предлага лесни задачи за уредниците и им покажува како да ги извршат.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Покажи ми како',
	'gettingstarted-task-toolbar-editing-help-title' => 'Прикажи водич за уредување',
	'gettingstarted-task-toolbar-try-another-text' => 'Пробајте друга страница ►',
	'gettingstarted-task-toolbar-close-title' => 'Затвори го алатников',
	'gettingstarted-task-toolbar-no-suggested-page' => 'Нажалост, не можев да најдам уште страни за подобрување. Обидете се малку подоцна или пребарајте теми што ве интересираат.',
	'gettingstarted-task-copyedit-toolbar-description' => 'Страница може да има правописни или граматички грешки што можете да ги поправите.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Оди на случајна страница што бара коректура',
	'gettingstarted-task-clarify-toolbar-description' => 'Страницава може да е збунителна или недоречена. Размислете како можете да ја направите појасна.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Одете на случајна страница што бара разјаснување',
	'gettingstarted-task-addlinks-toolbar-description' => 'На страницава ѝ требаат повеќе врски. Побарајте ги поимите што имаат страница на {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Појдете на случајна страница што бара повеќе врски',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Како да почнете',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Повнимателно разгледајте ја страницата и видете што може да се подобри. Не грижете се ако ви дојде премногу. Не се бара да сте стручњак на темата! Ако ви треба помош или сакате да пробате друга страница, послужете се со врските во лентата најгоре.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Идеи - што да правите',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Овие плакати (известувања) ги посочуваат проблемите во страницата. Не мора да ги решите сите — едноставно стиснете на она што не ви делува тешко.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Стиснете на „{{int:vector-view-edit}}“',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Стискајќи тука, можете да ја уредите целата статија',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Уреди поднаслов',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Ако сакате да уредите даден поднаслов, стиснете на сината врска „{{int:editsection}}“ до него.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Можете да уредувате!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Сега можете да ја уредите страницата. Кога ќе завршите, стиснете на „{{int:visualeditor-toolbar-savedialog}}“ за да ги прегледате и зачувате промените.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Преглед (незадолжително)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Ако стиснете на „{{int:showpreview}}“ ќе видите како ќе изгледа страницата со вашите измени. Само не заборавајте да ги зачувате.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Речиси сте готови!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Стиснете на „{{int:savearticle}}“ и измените ќе бидат видливи.',
	'gettingstarted-cta-close' => 'Затвори',
	'gettingstarted-cta-heading' => 'Помогнете на {{SITENAME}}',
	'gettingstarted-cta-text' => 'Можете да придонесувате на {{SITENAME}} на различни начини',
	'gettingstarted-cta-edit-page' => 'Уредете ја страницава',
	'gettingstarted-cta-edit-page-sub' => 'Ќе ви покажеме како',
	'gettingstarted-cta-fix-pages' => 'Пронајдете страници на кои им требаат лесни поправки',
	'gettingstarted-cta-fix-pages-sub' => 'Ќе ви покажеме како да уредувате',
	'gettingstarted-cta-leave' => 'Не благодарам. Можеби подоцна.',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'gettingstarted' => 'ആദ്യചുവടുകൾ',
	'gettingstarted-desc' => 'പുതിയ ഉപയോക്താക്കളെ ലേഖകരാക്കുന്നതിനുള്ള സഹായം',
	'gettingstarted-project-link' => '{{ns:Project}}:ആദ്യചുവടുകൾ',
	'tag-gettingstarted_edit' => 'പുതിയ ഉപയോക്താവിന്റെ [[{{MediaWiki:gettingstarted-project-link}}|ആദ്യ ചുവടുകൾ]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'ഉപയോക്താക്കൾക്ക് ലളിതമായ കർത്തവ്യങ്ങൾ നൽകാനും അവയെങ്ങനെ പൂർത്തിയാക്കാമെന്ന് കാട്ടിക്കൊടുക്കാനുമുള്ള [[{{MediaWiki:gettingstarted-project-link}}|ആദ്യ ചുവടുകൾ]] സൗകര്യമുപയോഗിച്ചുള്ള തിരുത്ത്.',
	'gettingstarted-task-toolbar-editing-help-text' => 'എങ്ങനെയാണെന്ന് കാണിച്ചു തരിക',
	'gettingstarted-task-toolbar-editing-help-title' => 'എപ്രകാരമാണെന്ന് തിരുത്തുന്നതെന്നുള്ള വഴികാട്ടി പ്രദർശിപ്പിക്കുക',
	'gettingstarted-task-toolbar-try-another-text' => 'മറ്റൊരു താൾ പരീക്ഷിക്കുക ►',
	'gettingstarted-task-toolbar-close-title' => 'ഈ ടൂൾബാർ അടയ്ക്കുക',
	'gettingstarted-task-toolbar-no-suggested-page' => 'ക്ഷമിക്കണം. ഇപ്പോൾ മെച്ചപ്പെടുത്താനുള്ള കൂടുതൽ താളുകൾ കണ്ടെടുക്കാനായില്ല. അല്പസമയത്തിനു ശേഷം വീണ്ടും ശ്രമിക്കുക അല്ലെങ്കിൽ താങ്കൾക്ക് താത്പര്യമുള്ളവയ്ക്കായി തിരയുക.',
	'gettingstarted-task-copyedit-toolbar-description' => 'ഈ താളിൽ താങ്കൾക്ക് ശരിയാക്കാനാവുന്ന അക്ഷരപിശകുകളോ വ്യാകരണപിഴവുകളോ ഉണ്ടായേക്കും.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'പരിശോധിച്ച് തിരുത്താൻ താങ്കൾക്ക് കഴിയുന്ന ഏതെങ്കിലും താളിലേക്ക് പോവുക',
	'gettingstarted-task-clarify-toolbar-description' => 'ഈ താൾ ആശയക്കുഴപ്പുണ്ടാക്കുന്നതും വ്യക്തതയില്ലാത്തതും ആയിരിക്കാം. അത് വൃത്തിയാക്കാൻ താങ്കൾക്ക് കഴിയുമോ എന്ന് നോക്കുക.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'താങ്കൾക്ക് വ്യക്തതയുള്ളതാക്കാൻ കഴിയുന്ന ഏതെങ്കിലും താളിലേയ്ക്ക് പോവുക',
	'gettingstarted-task-addlinks-toolbar-description' => 'ഈ താളിൽ ഇനിയുമേറെ കണ്ണികൾ ആവശ്യമുണ്ട്. {{SITENAME}} താളുകളുള്ള പദങ്ങൾക്കായി നോക്കുക.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'താങ്കൾക്ക് കണ്ണിചേർക്കാൻ കഴിയുന്ന ഏതെങ്കിലും താളിലേക്ക് പോവുക',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'എങ്ങനെയാണ് തുടങ്ങേണ്ടത്',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'താൾ മെച്ചപ്പെടുത്തുന്നതിനുള്ള മാർഗ്ഗങ്ങൾക്കായി നോക്കുക. താളിൽ വളരെയധികം വിവരങ്ങളുണ്ടെന്ന് കരുതി ഭയക്കേണ്ട കാര്യമൊന്നുമില്ല. താങ്കൾ ഈ വിഷയത്തിൽ വിദഗ്ദ്ധ(ൻ) ആയിരിക്കണമെന്നില്ല! സഹായം ആവശ്യമുണ്ടെങ്കിലോ മറ്റേതെങ്കിലും താളിലേക്ക് പോകണമെങ്കിലോ മുകളിലത്തെ ബാർ ഉപയോഗിക്കുക.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'എന്ത് ചെയ്യണമെന്നുള്ള ആശയങ്ങൾ',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'ഈ ബാനറുകൾ താളിലുള്ള പ്രശ്നങ്ങൾ കുറിക്കുന്നു. അവയെല്ലാം താങ്കൾ പരിഹരിക്കണം എന്നല്ല, താങ്കൾക്ക് താത്പര്യമുള്ളവ മാത്രം ചെയ്താൽ മതി.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => '{{int:vector-view-edit}} അമർത്തുക',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'ഇവിടെ ഞെക്കി ഈ താൾ പൂർണ്ണമായി തിരുത്താനാവും.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'ഒരു ഭാഗം തിരുത്തുക',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'ഏതെങ്കിലും ഒരു പ്രത്യേക ഭാഗമാണ് താങ്കൾക്ക് തിരുത്തേണ്ടതെങ്കിൽ, ഓരോ ഭാഗത്തിനും മുകളിലായി ഉള്ള "{{int:editsection}}" എന്ന നീലനിറത്തിലുള്ള കണ്ണി ഞെക്കിയാൽ മതിയാവും.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'താങ്കൾക്കും തിരുത്താം!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'താങ്കൾക്ക് ഇപ്പോൾ തിരുത്താവുന്നതാണ്. പൂർണ്ണമായി കഴിയുമ്പോൾ "{{int:visualeditor-toolbar-savedialog}}" അമർത്തി തിരുത്തൽ പരിശോധിക്കാനും മാറ്റങ്ങൾ സേവ് ചെയ്യാനും കഴിയുന്നതാണ്.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'എങ്ങനെയുണ്ടെന്ന് കാണുക (നിർബന്ധമല്ല)',
	'guidedtour-tour-gettingstarted-click-preview-description' => '"{{int:showpreview}}" അമർത്തുമ്പോൾ, താങ്കൾ ചേർത്ത തിരുത്തുകളുൾപ്പെടെ താൾ എപ്രകാരമാണ് പ്രത്യക്ഷപ്പെടുക എന്ന് കാണാനാവും. പിന്നീട് മാറ്റങ്ങൾ സേവ് ചെയ്യാൻ മറക്കരുത്.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'ഇത് മിക്കവാറും പൂർത്തിയായിട്ടുണ്ട്!',
	'guidedtour-tour-gettingstarted-click-save-description' => '"{{int:savearticle}}" അമർത്തിയാൽ താങ്കൾ വരുത്തിയ മാറ്റങ്ങൾ ഫലത്തിൽ വരുന്നതാണ്.',
	'gettingstarted-cta-close' => 'അടയ്ക്കുക',
	'gettingstarted-cta-heading' => '{{SITENAME}} സഹായം',
	'gettingstarted-cta-text' => 'താങ്കൾക്ക് {{SITENAME}} സംരംഭത്തെ പലവിധത്തിൽ സഹായിക്കാനാവും',
	'gettingstarted-cta-edit-page' => 'ഈ താൾ തിരുത്തുക',
	'gettingstarted-cta-edit-page-sub' => 'എങ്ങനെയാണെന്ന് ഞങ്ങൾ കാണിച്ചുതരാം',
	'gettingstarted-cta-fix-pages' => 'എളുപ്പത്തിൽ ശരിയാക്കാൻ കഴിയുന്ന താളുകൾ കണ്ടെത്തുക',
	'gettingstarted-cta-fix-pages-sub' => 'എങ്ങനെയാണ് തിരുത്തുക എന്ന് ഞങ്ങൾ കാണിച്ചുതരാം',
	'gettingstarted-cta-leave' => 'ഇപ്പോൾ വേണ്ട, പിന്നീടാകട്ടെ',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'आपण संपादन करू शकता!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "आपण आता हे पान संपादु शकता.ते पूर्ण झाल्यावर,झलक पाहण्यास व आपले बदल जतन करण्यास'{{int:visualeditor-toolbar-savedialog}}' वर टिचका.",
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
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Pilih tugas lain',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Kembali ke halaman pilihan tugas',
	'gettingstarted-task-toolbar-editing-help-text' => 'Tunjukkan caranya',
	'gettingstarted-task-toolbar-editing-help-title' => 'Paparkan panduan menyunting',
	'gettingstarted-task-toolbar-try-another-text' => 'Cuba rencana lain ►',
	'gettingstarted-task-toolbar-close-title' => 'Tutup palang alat ini',
	'gettingstarted-task-copyedit-toolbar-description' => 'Rencana ini mungkin mengandungi kesalahan ejaan dan tatabahasa yang boleh anda betulkan.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Pergi ke satu rencana pilihan rawak yang anda boleh perbaiki dengan menyunting',
	'gettingstarted-task-clarify-toolbar-description' => 'Rencana ini mungkin kabur atau mengelirukan. Fikirkan cara untuk memperjelasnya.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Pergi ke satu rencana pilihan rawak yang boleh anda perjelas',
	'gettingstarted-task-addlinks-toolbar-description' => 'Rencana ini mumgkin memerlukan lebih banyak pautan. Cari istilah-istilah yang mempunyai rencana di {{SITENAME}}.',
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
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Pralihat (tidak wajib)',
	'guidedtour-tour-gettingstarted-click-preview-description' => "Mengklik '{{int:showpreview}}' membolehkan anda untuk menyemak rupa halaman dengan suntingan anda. Jangan lupa untuk simpan.",
	'guidedtour-tour-gettingstarted-click-save-title' => 'Anda hampir siap!',
	'guidedtour-tour-gettingstarted-click-save-description' => "Klik '{{int:savearticle}}' untuk memperlihatkan suntingan anda.",
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

/** Norwegian Bokmål (norsk bokmål)
 * @author Danmichaelo
 */
$messages['nb'] = array(
	'gettingstarted' => 'Kom i gang',
	'gettingstarted-desc' => 'Tilføyer en [[Special:GettingStarted|velkomstside]] for nye brukere (vises etter kontoopprettelse)',
	'gettingstarted-welcomesiteuser' => 'Velkommen til $1, $2!',
	'gettingstarted-welcomesiteuseranon' => 'Kom i gang',
	'gettingstarted-welcome-back-site-user' => 'Velkommen tilbake, $2',
	'gettingstarted-task-header' => 'Takk for at du registrerte deg på {{SITENAME}}! Her er et par oppgaver som kan hjelpe deg i gang.

Velg et alternativ nedenfor og du vil komme til en tilfeldig artikkel som trenger hjelp.', # Fuzzy
	'gettingstarted-return' => 'Nei takk, ta meg tilbake til siden jeg leste',
	'gettingstarted-project-link' => '{{ns:Project}}:Kom i gang',
	'tag-gettingstarted_edit' => '[[{{MediaWiki:gettingstarted-project-link}}|kom i gang]] for nye bidragsytere',
	'tag-gettingstarted_edit-description' => 'Redigering av en side som brukeren valgte fra oppgavelisten på [[Special:GettingStarted|Kom i gang]]',
	'gettingstarted-task-copyedit-main-description' => 'Korrekturles og fiks skrivefeil og gramatikk',
	'gettingstarted-task-copyedit-secondary-description' => 'Den enkleste måten å komme i gang!',
	'gettingstarted-task-clarify-main-description' => 'Forbedre klarhet og lesbarhet',
	'gettingstarted-task-clarify-secondary-description' => 'Forenkle og skriv om setninger.',
	'gettingstarted-task-addlinks-main-description' => 'Legg til lenker',
	'gettingstarted-task-addlinks-secondary-description' => 'Koble sammen artikler på {{SITENAME}}.', # Fuzzy
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Velg en annen oppgave',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Gå tilbake til listen med oppgaver',
	'gettingstarted-task-toolbar-editing-help-text' => 'Vis meg hvordan',
	'gettingstarted-task-toolbar-editing-help-title' => 'Viser redigeringsveiledning',
	'gettingstarted-task-toolbar-try-another-text' => 'Prøv en annen side ►',
	'gettingstarted-task-toolbar-close-title' => 'Lukk denne verktøylinja',
	'gettingstarted-task-copyedit-toolbar-description' => 'Denne siden kan ha stave- eller gramatikkfeil som du kan fikse.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Gå til en tilfeldig side som du kan hjelpe med språkvask',
	'gettingstarted-task-clarify-toolbar-description' => 'Denne siden kan være uklar eller vag. Se om det er måter du kan gjøre den klarere og mer forståelig på.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Gå til en tilfeldig side du kan klargjøre',
	'gettingstarted-task-addlinks-toolbar-description' => 'Denne siden trenger flere lenker. Se etter uttrykk i teksten som kan ha en {{SITENAME}}-artikkel.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Gå til en tilfeldig side som du kan legge til lenker i.',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Hvordan komme i gang',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Begynn med å titte gjennom artikkelen, og se etter noe som kan forbedres eller fikses. Ikke bekymre deg hvis du føler du kan for lite om artikkelens tema. Det er nesten alltid noe man kan gjøre uten å være en ekspert på temaet! Bruk lenkene i toppbjelken hvis du trenger hjelper eller vil prøve en annen artikkel.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ideer til hva du kan gjøre',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Disse bannerne identifiserer problemer med denne siden. Husk at du ikke trenger å ordne alt – bare gjør de redigeringene du føler deg komfortabel med å gjøre.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Klikk på {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Du kan redigere hele artikkelen ved å trykke her.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Rediger et avsnitt',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Hvis du vil redigere et spesifikt avsnitt kan du trykke på den blå '{{int:editsection}}'-lenken øverst i hvert avsnitt.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Du kan redigere!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "Nå kan du redigere siden. Når du er ferdig, trykk på '{{int:visualeditor-toolbar-savedialog}}' for å gå gjennom og lagre endringene dine.",
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Forhåndsvisning (valgfritt)',
	'notification-gettingstarted-link-text-get-started' => 'Kom i gang',
	'notification-gettingstarted-start-editing' => '{{SITENAME}} er en fri encyklopedi skrevet av folk som deg. [[Special:GettingStarted|Kom i gang]] med å gjøre din første redigering!',
	'notification-gettingstarted-start-editing-email-subject' => 'Kom i gang med å redigere {{SITENAME}}',
	'notification-gettingstarted-start-editing-text-email-body' => '{{SITENAME}} er en fri encyklopedi skrevet av folk som deg. Kom i gang med å gjøre din første redigering!

Besøk $2 for en liste med enkle måter å forbedre sider på.

$3',
	'notification-gettingstarted-start-editing-text-email-batch-body' => 'Kom i gang med {{SITENAME}}-redigering ved å besøke $2',
	'notification-gettingstarted-continue-editing' => 'Bra jobbet! Du har allerede gjort dine første redigeringer på {{SITENAME}}. Ser du etter mer å gjøre? Her er noen [[Special:GettingStarted|enkle måter å bidra på]].',
	'notification-gettingstarted-continue-editing-email-subject' => 'Enkle måter å forbedre {{SITENAME}}',
	'notification-gettingstarted-continue-editing-text-email-body' => 'Bra jobbet! Du har allerede gjort dine første redigeringer på {{SITENAME}}. 

Hvis du ser etter mer å gjøre finner du en liste med enkle måter å bidra på $2

$3',
	'notification-gettingstarted-continue-editing-text-email-batch-body' => 'Ser du etter mer å gjøre? Besøk $2 for en liste over enkle måter å bidra på.',
	'gettingstarted-cta-close' => 'Lukk',
	'gettingstarted-cta-heading' => 'Hjelp {{SITENAME}}',
	'gettingstarted-cta-text' => 'Du kan bidra til {{SITENAME}} på forskjellige måter',
	'gettingstarted-cta-edit-page' => 'Rediger denne siden',
	'gettingstarted-cta-edit-page-sub' => 'Vi vil vise deg hvordan',
	'gettingstarted-cta-fix-pages' => 'Finn sider som trenger lette rettelser',
	'gettingstarted-cta-fix-pages-sub' => 'Vi vil vise deg hvordan du redigerer',
	'gettingstarted-cta-leave' => 'Nei takk, kanskje senere',
);

/** Dutch (Nederlands)
 * @author Arent
 * @author Konovalov
 * @author Siebrand
 */
$messages['nl'] = array(
	'gettingstarted' => 'Aan de slag',
	'gettingstarted-desc' => 'Helpt nieuwe gebruikers redacteur te laten worden',
	'gettingstarted-project-link' => '{{ns:Project}}:Aan de slag',
	'tag-gettingstarted_edit' => 'nieuwe bewerker [[{{MediaWiki:gettingstarted-project-link}}|aan de slag]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Bewerking aan een pagina die de gebruiker heeft gekozen uit de takenlijst op [[{{MediaWiki:gettingstarted-project-link}}|aan de slag]] waar eenvoudige taken gesuggereerd worden met aanwijzingen hoe deze te voltooien zijn voor nieuwe redacteuren.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Laten zien hoe',
	'gettingstarted-task-toolbar-editing-help-title' => 'Gids weergeven over hoe u kunt bewerken',
	'gettingstarted-task-toolbar-try-another-text' => 'Andere pagina proberen ►',
	'gettingstarted-task-toolbar-close-title' => 'Werkbalk sluiten',
	'gettingstarted-task-toolbar-no-suggested-page' => "Sorry. Meer pagina's om te worden verbeterd op dit moment konden we niet vinden. Probeer het over enige tijd opnieuw of zoek naar onderwerpen die u van belang vindt.",
	'gettingstarted-task-copyedit-toolbar-description' => 'Deze pagina heeft mogelijk spel- of grammaticafouten die u kunt corrigeren.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Ga naar een willekeurige pagina die u kunt verbeteren door redactie uit te voeren',
	'gettingstarted-task-clarify-toolbar-description' => 'Deze pagina is mogelijk verwarrend of vaag. Probeer de tekst duidelijker te maken.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Ga naar een willekeurig pagina die u kunt verduidelijken',
	'gettingstarted-task-addlinks-toolbar-description' => 'Op deze pagina zijn mogelijk meer koppelingen nodig. Zoek naar termen die een pagina hebben op {{SITENAME}}.',
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
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'U kunt de pagina nu bewerken. Klik op "{{int:visualeditor-toolbar-savedialog}}" als u klaar bent, om uw wijzigingen te controleren enze op te slaan.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Voorvertoning (optioneel)������',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Door te klikken op "{{int:showpreview}}" kunt u controleren hoe de pagina wordt weergegeven met uw wijzigingen. Vergeet uw wijzigingen niet op te slaan.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'U bent bijna klaar!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Klik "{{int:savearticle}}" zodat uw wijzigingen zichtbaar worden.',
	'gettingstarted-cta-close' => 'Sluiten',
	'gettingstarted-cta-heading' => 'Help {{SITENAME}}',
	'gettingstarted-cta-text' => 'U kunt op meerdere manieren bijdragen aan {{SITENAME}}',
	'gettingstarted-cta-edit-page' => 'Pagina bewerken',
	'gettingstarted-cta-edit-page-sub' => 'We laten u zien hoe',
	'gettingstarted-cta-fix-pages' => "Pagina's vinden die eenvoudig te verbeteren zijn",
	'gettingstarted-cta-fix-pages-sub' => 'We laten u zien hoe u kunt bewerken',
	'gettingstarted-cta-leave' => 'Nee bedankt, misschien een volgende keer',
);

/** Polish (polski)
 * @author Chrumps
 * @author Rzuwig
 * @author Tar Lócesilion
 */
$messages['pl'] = array(
	'gettingstarted' => 'Pierwsze kroki',
	'gettingstarted-desc' => 'Pomaga nowym użytkownikom stać się edytorami',
	'gettingstarted-project-link' => '{{ns:Project}}:Pierwsze kroki',
	'tag-gettingstarted_edit' => 'nowy użytkownik stawiający [[{{MediaWiki:gettingstarted-project-link}}|pierwsze kroki]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Edycja wykonana za pomocą systemu [[{{MediaWiki:gettingstarted-project-link}}|pierwszych kroków]], który podsuwa łatwe zadania użytkownikom i pokazuje, jak je wykonać.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Pokaż, jak',
	'gettingstarted-task-toolbar-editing-help-title' => 'Pokaż przewodnik po edytowaniu',
	'gettingstarted-task-toolbar-try-another-text' => 'Spróbuj na innej stronie ►',
	'gettingstarted-task-toolbar-close-title' => 'Zamknij ten pasek narzędzi',
	'gettingstarted-task-toolbar-no-suggested-page' => 'Przepraszamy, nie mogliśmy znaleźć więcej stron wymagających dopracowania. Spróbuj ponownie za kilka chwil albo poszukaj interesujących cię tematów.',
	'gettingstarted-task-copyedit-toolbar-description' => 'Na tej stronie mogą być błędy w pisowni lub błędy gramatyczne, które możesz poprawić.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Idź do losowej strony, na której możesz przeredagować tekst',
	'gettingstarted-task-clarify-toolbar-description' => 'Ta strona może być napisana w sposób niejasny lub wprowadzający w błąd. Przeredaguj ją na bardziej precyzyjną.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Idź do losowej strony, na której możesz poprawić błędy językowe',
	'gettingstarted-task-addlinks-toolbar-description' => 'Ta strona może wymagać zamieszczenia większej liczby linków. Odszukaj pojęcia, które mają swoje strony w {{GRAMMAR:MS.lp|{{SITENAME}}}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Idź do losowej strony, na której możesz dodać linki',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Jak zacząć',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Po prostu zacznij szukać na stronie rzeczy, które wymagają dopracowania. Jeżeli czujesz się przytłoczony, nie martw się. Nie musisz być ekspertem w tym temacie! Jeżeli potrzebujesz pomocy albo chcesz spróbować na innej stronie, użyj linków na górnym pasku.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Propozycje dotyczące tego, co trzeba zrobić',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Takie ramki wyliczają problemy. Nie musisz rozwiązać ich wszystkich, po prostu zrób to, co jest dla ciebie wygodne.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Kliknij {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Możesz edytować całą stronę klikając tutaj.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Edytuj sekcję',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Jeżeli chcesz edytować konkretną sekcję, możesz kliknąć na niebieski link ''{{int:editsection}}'' znajdujący się na górze każdej sekcji.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Możesz edytować!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "Teraz możesz edytować stronę. Kiedy skończysz, kliknij ''{{int:visualeditor-toolbar-savedialog}}'', aby przejrzeć i zapisać zmiany.",
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Podgląd (opcjonalnie)',
	'guidedtour-tour-gettingstarted-click-preview-description' => "Kliknięcie ''{{int:showpreview}}'' pozwala ci sprawdzić, jak strona będzie wyglądała po twoich zmianach. Nie zapomnij ich zapisać.",
	'guidedtour-tour-gettingstarted-click-save-title' => 'Prawie gotowe!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Kliknij "{{int:savearticle}}", a twoje zmiany będą widoczne.',
	'gettingstarted-cta-close' => 'Zamknij',
	'gettingstarted-cta-heading' => 'Pomóż {{GRAMMAR:C.lp|{{SITENAME}}}}',
	'gettingstarted-cta-text' => 'Możesz w różny sposób wnieść wkład w {{GRAMMAR:B.lp|{{SITENAME}}}}',
	'gettingstarted-cta-edit-page' => 'Edytuj stronę',
	'gettingstarted-cta-edit-page-sub' => 'Pokażemy ci, jak',
	'gettingstarted-cta-fix-pages' => 'Znajdź strony wymagające drobnych poprawek',
	'gettingstarted-cta-fix-pages-sub' => 'Pokażemy ci, jak edytować',
	'gettingstarted-cta-leave' => 'Nie, dziękuję, może później',
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

/** Portuguese (português)
 * @author Alchimista
 * @author Fúlvio
 * @author Hamilton Abreu
 * @author Raylton P. Sousa
 */
$messages['pt'] = array(
	'gettingstarted' => 'Primeiros passos',
	'gettingstarted-desc' => 'Ajuda os novos utilizadores a se tornarem editores',
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	'tag-gettingstarted_edit' => 'através das sugestões de edição do [[{{MediaWiki:gettingstarted-project-link}}|Getting Started]]',
	'tag-gettingstarted_edit-description' => 'Edição feita através do sistema [[{{MediaWiki:gettingstarted-project-link}}|GettingStarted]], que sugere tarefas fáceis para os editores e mostra-lhes como completá-las.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Mostre-me como',
	'gettingstarted-task-toolbar-editing-help-title' => 'Mostrar um guia de edição',
	'gettingstarted-task-toolbar-try-another-text' => 'Tente outra página ►',
	'gettingstarted-task-toolbar-close-title' => 'Fechar esta barra de ferramentas',
	'gettingstarted-task-toolbar-no-suggested-page' => 'Desculpe. Não foi possível páginas a serem melhoradas neste momento. Tente novamente em um outro momento ou procure por seus próprios temas de interesse.',
	'gettingstarted-task-copyedit-toolbar-description' => 'Esta página pode ter erros ortográficos ou gramaticais que você pode corrigir.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Ir para uma página aleatória cujo estilo possas melhorar',
	'gettingstarted-task-clarify-toolbar-description' => 'Esta página pode estar confusa ou vaga. Procure maneiras de torná-la mais clara.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Ir para uma página aleatória que você possa deixá-la clara',
	'gettingstarted-task-addlinks-toolbar-description' => 'Esta página pode precisar de mais ligações. Procure por termos que possuam uma página em {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Ir para uma página aleatória em que você possa adicionar ligações para',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Como começar',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Basta iniciar uma varredura pela página à busca de melhorias. Se você se sentir sobrecarregado, não se preocupe. Você não precisa ser um especialista sobre este tema! Se precisares de ajuda ou desejar tentar outra página, utilize as ligações da barra de ferramentas acima.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ideias sobre o que fazer',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => "Estes ''banners'' identificam problemas com esta página. Você não precisa resolver todos, fique com aqueles que possas corrigir confortavelmente.",
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Clique em {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Você pode editar a página inteira clicando aqui.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Editar uma secção',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Se você desejar editar uma secção específica, podes clicar na ligação "{{int:editsection}}" (em azul) na parte superior de cada secção.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Já podes editar!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Agora, você pode editar a página. Ao terminar, clique em "{{int:visualeditor-toolbar-savedialog}}" para rever e guardar as alterações.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Antevisão (opcional)',
	'guidedtour-tour-gettingstarted-click-preview-description' => "Clicar ''{{int:showpreview}}'' permite verificar como a página ficará após as alterações. Mas não se esqueça de gravá-las.",
	'guidedtour-tour-gettingstarted-click-save-title' => 'Está quase a terminar!',
	'guidedtour-tour-gettingstarted-click-save-description' => "Clique em ''{{int:savearticle}}'' e as suas alterações serão visíveis.",
	'gettingstarted-cta-close' => 'Fechar',
	'gettingstarted-cta-heading' => 'Ajuda para {{SITENAME}}',
	'gettingstarted-cta-text' => 'Você pode contribuir para {{SITENAME}} de diferentes maneiras',
	'gettingstarted-cta-edit-page' => 'Editar esta página',
	'gettingstarted-cta-edit-page-sub' => 'Nós vamos mostrar-lhe como',
	'gettingstarted-cta-fix-pages' => 'Encontre páginas que necessitam de correções fáceis',
	'gettingstarted-cta-fix-pages-sub' => 'Nós vamos mostrar-lhe como editar',
	'gettingstarted-cta-leave' => 'Não, obrigado, talvez mais tarde',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Cainamarques
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
	'gettingstarted-task-toolbar-return-to-list-text' => '◄ Escolher outra tarefa',
	'gettingstarted-task-toolbar-return-to-list-title' => 'Retornar para a página de escolha de tarefas',
	'gettingstarted-task-toolbar-editing-help-text' => 'Mostrar-me como',
	'gettingstarted-task-toolbar-editing-help-title' => 'Mostrar um guia sobre como editar',
	'gettingstarted-task-toolbar-try-another-text' => 'Tentar outro artigo ►',
	'gettingstarted-task-toolbar-close-title' => 'Feche esta barra de ferramentas',
	'gettingstarted-task-copyedit-toolbar-description' => 'Este artigo pode ter erros de ortografia ou gramática que você pode consertar.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Vá a um artigo aleatório que pode melhorar pela correção do texto',
	'gettingstarted-task-clarify-toolbar-description' => 'Este artigo pode ser confuso ou vago. Procure meios de você torná-lo claro.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Vá a um artigo aleatório que pode clarificar.',
	'gettingstarted-task-addlinks-toolbar-description' => 'Este artigo pode necessitar de mais ligações. Procure por termos que possuam artigo na {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Vá a um artigo aleatório que possa adicionar links',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Como começar',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'apens começe varrendo o artigo e procurando por melhorias. Se se sentir sobrecarregado, não se preocupe. Você não precisa ser um expert neste tópico! Se você precisar de ajuda ou quiser tentar outro artigo, use o link no topo da barra.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ideias sobre o que fazer',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Estes banners identificam problemas com este artigo. Você não precisa corrigir todos, faça apenas o que está confortável de fazer.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Clique {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Você pode editar o artigo inteiro ao clicar aqui.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Edite uma seção',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Se você quiser editar uma seção específica, pode cliclar no link azul '{{int:editsection}}' no topo de cada seção.",
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Previsualização(opcional)',
	'guidedtour-tour-gettingstarted-click-preview-description' => "Clicar em '{{int:showpreview}}' permite que você verifique como a página vai ficar depois das suas alterações. Só não esqueça de salvar.",
	'guidedtour-tour-gettingstarted-click-save-title' => 'Você está quase terminando!',
	'guidedtour-tour-gettingstarted-click-save-description' => "Clique em '{{int:savearticle}}' e suas alterações serão visíveis.",
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
	'gettingstarted-task-toolbar-return-to-list-text' => "◄ Tuèrne a l'elenghe", # Fuzzy
	'gettingstarted-task-toolbar-return-to-list-title' => "Tuèrne a l'elenghe de le vôsce", # Fuzzy
	'gettingstarted-task-toolbar-editing-help-text' => "Fà vedè l'aijute", # Fuzzy
	'gettingstarted-task-toolbar-editing-help-title' => "Fà vedè 'a guide su cumme se fanne le cangiaminde",
	'gettingstarted-task-toolbar-try-another-text' => "Pruève 'n'otra vôsce ►",
	'gettingstarted-task-toolbar-close-title' => 'Achiude sta barre de le struminde',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Andeprime (opzionale)',
	'guidedtour-tour-gettingstarted-click-preview-description' => "Cazzanne '{{int:showpreview}}' te permette de verificà ca 'a pàgene iesse cu le cangiaminde tune. No te demendicà de reggistrà.",
	'guidedtour-tour-gettingstarted-click-save-title' => "E' quase spicciate!",
	'guidedtour-tour-gettingstarted-click-save-description' => "Cazze '{{int:savearticle}}' e le cangiaminde tune devendane visibbile.",
	'notification-gettingstarted-start-editing-email-subject' => 'Accuminze a cangià {{SITENAME}}',
	'notification-gettingstarted-continue-editing-email-subject' => 'Mode facile pe migliorà {{SITENAME}}',
);

/** Russian (русский)
 * @author DCamer
 * @author Ignatus
 * @author Iluvatar
 * @author Lvova
 * @author Okras
 * @author Ole Yves
 */
$messages['ru'] = array(
	'gettingstarted' => 'Начало работы',
	'gettingstarted-desc' => 'Помогает новым участникам стать редакторами',
	'gettingstarted-project-link' => '{{ns:Project}}:Начало работы',
	'tag-gettingstarted_edit' => 'Новый редактор [[{{MediaWiki:gettingstarted-project-link}}|приступил к работе]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Правка сделана через систему [[{{MediaWiki:gettingstarted-project-link}}|Начала работы]], которая предлагает простые задачи для участников и показывает им, как их выполнить.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Показать мне, как',
	'gettingstarted-task-toolbar-editing-help-title' => 'Показать руководство по редактированию',
	'gettingstarted-task-toolbar-try-another-text' => 'Заглянуть на другую страницу ►',
	'gettingstarted-task-toolbar-close-title' => 'Закрыть эту панель',
	'gettingstarted-task-toolbar-no-suggested-page' => 'Извините. Мы не смогли найти ещё страницы, требующие в данный момент улучшений. Попробуйте ещё раз или поищите их другие интересующие вас темы.',
	'gettingstarted-task-copyedit-toolbar-description' => 'Эта страница может содержать орфографические и грамматические ошибки, которые Вы могли бы исправить.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Перейти к случайной странице, которую вы можете улучшить',
	'gettingstarted-task-clarify-toolbar-description' => 'Эта страница может сбивать с толку или быть неопределённой. Поищите способ сделать её яснее.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Перейти к случайной странице, которую Вы могли бы уточнить',
	'gettingstarted-task-addlinks-toolbar-description' => 'На этой странице, возможно, должно быть больше ссылок. Поищите термины, для которых существуют страницы {{grammar:genitive|{{SITENAME}}}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Перейти к случайной странице, на которой вы можете добавить ссылки',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Как начать работу',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Просто просматривайте страницу и ищите, где её можно улучшить. Если Вы почувствуете, что не справляетесь, не переживайте. Вам вовсе не нужно быть экспертом в этой теме! Если же Вам нужна помощь, или Вы хотите попробовать другую страницу, воспользуйтесь ссылками на верхней панели.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Идеи о том, что делать',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Эти сообщения сообщают о проблемах страницы. Вам не нужно разбираться со всеми ими, просто займитесь тем, что Вам сподручнее делать.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Нажмите {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Вы можете приступить к редактированию всей статьи целиком, нажав здесь.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Редактировать раздел',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Если вы хотите отредактировать конкретный раздел, то можете нажать на синюю ссылку '{{int:editsection}}', которая имеется сверху каждого раздела.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Вы можете отредактировать!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "Сейчас вы можете редактировать страницу. Когда вы закончите, нажмите кнопку '{{int:visualeditor-toolbar-savedialog}}' для просмотра и сохранения изменений.",
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Предварительный просмотр (не обязательно)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Нажатие «{{int:showpreview}}» позволяет проверить, как будет выглядеть страница с вашими изменениями. Только не забудьте её потом сохранить.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Вы почти закончили!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Нажмите «{{int:savearticle}}» и ваши изменения станут видны.',
	'gettingstarted-cta-close' => 'Закрыть',
	'gettingstarted-cta-heading' => 'Помочь сайту {{SITENAME}}',
	'gettingstarted-cta-text' => 'Вы можете помочь сайту {{SITENAME}} по-разному',
	'gettingstarted-cta-edit-page' => 'Править эту страницу',
	'gettingstarted-cta-edit-page-sub' => 'Мы покажем вам как',
	'gettingstarted-cta-fix-pages' => 'Найдите страницы, которые нуждаются в простых исправлениях',
	'gettingstarted-cta-fix-pages-sub' => 'Мы покажем вам, как редактировать',
	'gettingstarted-cta-leave' => 'Нет, спасибо, может быть, позже',
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
	'gettingstarted-task-toolbar-editing-help-text' => 'Прикажи помоћ', # Fuzzy
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Milicevic01
 */
$messages['sr-el'] = array(
	'gettingstarted-task-addlinks-main-description' => 'Dodaj veze',
);

/** Swedish (svenska)
 * @author Ainali
 * @author Jopparn
 * @author Lokal Profil
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'gettingstarted' => 'Komma igång',
	'gettingstarted-desc' => 'Hjälper nya användare att bli skribenter',
	'gettingstarted-project-link' => '{{ns:Project}}:Komigång',
	'tag-gettingstarted_edit' => 'ny skribent [[{{MediaWiki:gettingstarted-project-link}}|kommer igång]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Redigering gjord via [[{{MediaWiki:gettingstarted-project-link}}|Komma igång]]-systemet, vilket föreslår enklare uppgifter för skribenter och visar dem hur dessa åtgärdas.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Visa mig hur',
	'gettingstarted-task-toolbar-editing-help-title' => 'Visa en guide om hur man redigerar',
	'gettingstarted-task-toolbar-try-another-text' => 'Försök med en annan sida ►',
	'gettingstarted-task-toolbar-close-title' => 'Stäng detta verktygsfält',
	'gettingstarted-task-toolbar-no-suggested-page' => 'Tyvärr kunde vi inte hitta fler sidor i behov av förbättring för tillfället. Försök igen om en stund eller sök efter ett ämne du själv är intresserad av.',
	'gettingstarted-task-copyedit-toolbar-description' => 'Denna sida kan ha stavnings- eller grammatikfel som du kan åtgärda.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Gå till en slumpmässig sida som du kan förbättra genom copyediting',
	'gettingstarted-task-clarify-toolbar-description' => 'Denna sida kan vara förvirrande eller otydlig. Leta efter sätt som du kan göra den tydligare.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Gå till en slumpmässig sida du kan förtydliga',
	'gettingstarted-task-addlinks-toolbar-description' => 'Den här sidan kan behöva fler länkar. Leta efter termer som har en sida på {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Gå till en slumpmässig sida där du kan lägga till länkar',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Hur du kommer igång',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Börja bara titta igenom sidan och leta efter möjliga förbättringar. Om du känner dig överväldigad, oroa dig inte. Du behöver inte vara expert på detta ämnet. Om du behöver hjälp eller vill försöka med en annan sida, använd länkarna i det översta fältet.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Idéer på vad du kan göra',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Dessa banners identifiera problem med denna sidan. Du behöver inte ta itu med dem alla, fokusera bara på de som du känner dig bekväm med att åtgärda.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Klicka på {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Du kan redigera hela artikeln genom att klicka här.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Redigera ett avsnitt',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Om du vill redigera ett särskilt avsnitt, kan du klicka på den blå länken "{{int:editsection}}", högst upp i varje avsnitt.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Du kan redigera!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Du kan nu redigera sidan. När du är färdig, klicka på "{{int:visualeditor-toolbar-savedialog}}" för att förhandsgranska och spara dina ändringar.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Förhandsgranska (valfritt)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Genom att klicka på "{{int:showpreview}}" kan du kontrollera hur sidan ser ut med dina ändringar. Glöm bara inte att spara.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Du är nästan klar!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Klicka på "{{int:savearticle}}" och dina ändringar kommer att bli synliga.',
	'gettingstarted-cta-close' => 'Stäng',
	'gettingstarted-cta-heading' => 'Hjälp {{SITENAME}}',
	'gettingstarted-cta-text' => 'Du kan bidra till {{SITENAME}} på olika sätt',
	'gettingstarted-cta-edit-page' => 'Redigera denna sida',
	'gettingstarted-cta-edit-page-sub' => 'Vi kommer visa dig hur',
	'gettingstarted-cta-fix-pages' => 'Hitta sidor som behöver enkla förbättringar',
	'gettingstarted-cta-fix-pages-sub' => 'Vi kommer visa dig hur man redigerar',
	'gettingstarted-cta-leave' => 'Nej tack, kanske senare',
);

/** Tamil (தமிழ்)
 * @author Joetaras
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'gettingstarted-welcomesiteuser' => '$1-க்கு வருக, $2!',
	'gettingstarted-welcomesiteuseranon' => '$1-க்கு வருக!', # Fuzzy
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Andeprime (opzionale)',
	'guidedtour-tour-gettingstarted-click-preview-description' => "Cazzanne '{{int:showpreview}}' te permette de verificà ca 'a pàgene iesse cu le cangiaminde tune. No te demendicà de reggistrà.",
	'guidedtour-tour-gettingstarted-click-save-title' => "E' quase spicciate!",
	'guidedtour-tour-gettingstarted-click-save-description' => "Cazze '{{int:savearticle}}' e le cangiaminde tune devendane visibbile.",
);

/** Telugu (తెలుగు)
 * @author Arjunaraoc
 * @author Veeven
 */
$messages['te'] = array(
	'gettingstarted' => 'మొదలుపెట్టడం',
	'gettingstarted-welcomesiteuser' => '$1కి స్వాగతం, $2!',
	'gettingstarted-welcomesiteuseranon' => 'మొదలుపెట్టడం',
	'gettingstarted-return' => 'వద్దు, నన్ను వెనక్కు తీసుకువెళ్ళు', # Fuzzy
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'మీరు  మార్పులు చేయవచ్చు!',
);

/** Tagalog (Tagalog)
 * @author Jewel457
 */
$messages['tl'] = array(
	'gettingstarted-desc' => 'Tumutulong sa mga bagong tagagamit na maging mga Patnugot',
	'gettingstarted-task-toolbar-no-suggested-page' => 'Paumanhin. Sa kasalukuyan, wala na kaming mahanap na pahinang maaring ayusin.Subukin muli o maghanap nang sariling paksang kinagigiliwan.',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Base
 * @author Ата
 */
$messages['uk'] = array(
	'gettingstarted' => 'Початок роботи',
	'gettingstarted-desc' => 'Допомагає новим користувачам стати редакторами',
	'gettingstarted-project-link' => '{{ns:Project}}:GettingStarted',
	'tag-gettingstarted_edit' => 'новий дописувач [[{{MediaWiki:gettingstarted-project-link}}|почав працювати]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Редагування зроблено через систему [[{{MediaWiki:gettingstarted-project-link}}|Перші кроки]], яка пропонує легкі завдання для редакторів і показує, як завершити їх.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Показати мені, як',
	'gettingstarted-task-toolbar-editing-help-title' => 'Показати посібник з редагування',
	'gettingstarted-task-toolbar-try-another-text' => 'Спробувати іншу сторінку ►',
	'gettingstarted-task-toolbar-close-title' => 'Закрити цю панель',
	'gettingstarted-task-toolbar-no-suggested-page' => 'Вибачте. Ми не змогли знайти ще сторінки, що вимагають у даний момент поліпшень. Спробуйте ще раз або пошукайте інші цікаві для вас теми.',
	'gettingstarted-task-copyedit-toolbar-description' => 'Ця сторінка, можливо, має орфографічні або граматичні помилки, які Ви можете виправити.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Перейти до випадкової сторінки, яку ви можете покращити технічним редагуванням',
	'gettingstarted-task-clarify-toolbar-description' => 'Ця сторінка може бути заплутаною чи розпливчастою. Знайдіть спосіб зробити її зрозумілішою.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Перейти до випадкової сторінки, яку ви можете зробити чіткішою',
	'gettingstarted-task-addlinks-toolbar-description' => 'Ці сторінці може знадобитися більше посилань. Пошукайте терміни, сторінки про які є у {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Перейти до випадкової сторінки, до якої ви можете додати посилання',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Як розпочати роботу',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Просто перегляньте сторінку і пошукайте те, що ви можете покращити. Якщо почуваєтесь спантеличено, не хвилюйтесь. Вам не треба бути експертом з цього питання! Якщо вам потрібна допомога чи ви хочете спробувати іншу сторінку, скористайтесь посиланнями на верхній панелі.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Ідеї щодо того, що можна зробити',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Ці банери визначають проблеми цієї сторінки. Вам не треба вирішувати їх усі, просто зробіть те, що вам під силу.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Натисніть {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Ви можете редагувати усю статтю, натиснувши тут.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Редагувати розділ',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => "Якщо ви хочете редагувати окремий розділ, можна натиснути на блакитне посилання '{{int:editsection}}' вгорі кожного розділу.",
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Ви можете редагувати!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => "Ви тепер можете редагувати сторінку. Коли закінчите, натисніть '{{int:visualeditor-toolbar-savedialog}}', щоб переглянути і зберегти свої зміни.",
	'guidedtour-tour-gettingstarted-click-preview-title' => "Попередній перегляд (необов'язково)",
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Клацання "{{int:showpreview}}" дає змогу перевіряти вигляд сторінки із внесеними змінами. Тільки не забудьте зберегти.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Ви майже закінчили!',
	'guidedtour-tour-gettingstarted-click-save-description' => "Натисніть '{{int:savearticle}}' і зміни буде видно.",
	'gettingstarted-cta-close' => 'Закрити',
	'gettingstarted-cta-heading' => 'Довідка {{SITENAME}}',
	'gettingstarted-cta-text' => 'Ви можете внести свій внесок {{SITENAME}} по-різному',
	'gettingstarted-cta-edit-page' => 'Редагувати цю сторінку',
	'gettingstarted-cta-edit-page-sub' => 'Ми покажемо вам, як',
	'gettingstarted-cta-fix-pages' => 'Знайти сторінки, які просто необхідно виправити',
	'gettingstarted-cta-fix-pages-sub' => 'Ми покажемо вам, як редагувати',
	'gettingstarted-cta-leave' => 'Ні, дякую, можливо, пізніше',
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
	'gettingstarted-desc' => 'Giúp người mới đến trở sửa đổi bài viết',
	'gettingstarted-project-link' => '{{ns:Project}}:Bắt đầu',
	'tag-gettingstarted_edit' => 'Người dùng mới đang [[{{MediaWiki:gettingstarted-project-link}}|bắt đầu]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'Sửa đổi được thực hiện qua tính năng [[{{MediaWiki:gettingstarted-project-link}}|Bắt đầu]]. Tính năng này gợi ý và chỉ dẫn những công việc dễ dàng cho người dùng.',
	'gettingstarted-task-toolbar-editing-help-text' => 'Chỉ tôi làm thế nào',
	'gettingstarted-task-toolbar-editing-help-title' => 'Xem hướng dẫn sửa đổi',
	'gettingstarted-task-toolbar-try-another-text' => 'Thử sửa trang khác ►',
	'gettingstarted-task-toolbar-close-title' => 'Đóng thanh công cụ này',
	'gettingstarted-task-toolbar-no-suggested-page' => 'Rất tiếc, chúng tôi không kiếm được thêm trang để cải thiện vào lúc này. Hãy thử lại lát nữa hoặc tìm những chủ đề quan tâm của bạn.',
	'gettingstarted-task-copyedit-toolbar-description' => 'Trang này có thể có lỗi chính tả hoặc ngữ pháp mà bạn có thể sửa chữa.',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => 'Mở trang ngẫu nhiên để cải thiện văn phong',
	'gettingstarted-task-clarify-toolbar-description' => 'Trang này có thể gây nhầm lẫn hoặc không rõ. Hãy cố gắng làm cho nó rõ ràng hơn.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'Mở trang ngẫu nhiên để viết rõ hơn',
	'gettingstarted-task-addlinks-toolbar-description' => 'Trang này có thể cần thêm liên kết. Hãy tìm những cụm từ đã có trang trên {{SITENAME}}.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'Mở trang ngẫu nhiên để đặt liên kết',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'Cách bắt đầu',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => 'Chỉ việc đọc lướt qua trang và tìm cách cải thiện. Đừng lo lắng, bạn không cần chuyên môn về chủ đề này! Nếu bạn cần thêm hướng dẫn hay muốn thử trang khác, hãy sử dụng các liên kết ở thanh trên.',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'Gợi ý',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => 'Các cờ ngang này nêu ra các vấn đề trên trang. Bạn không cần giải quyết tất cả mọi vấn đề. Hãy thoải mái muốn sửa gì thì sửa.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'Nhấn chuột vào “{{int:vector-view-edit}}”',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'Nhấn chuột vào đây để sửa toàn bộ bài.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'Sửa đổi phần',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => 'Để chỉ sửa đổi một phần, bạn có thể nhấn chuột vào liên kết “{{int:editsection}}” màu xanh bên cạnh đề mục của phần đó.',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'Bạn có thể sửa đổi!',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => 'Bạn hiện có thể sửa đổi trang này. Sau khi hoàn tất, hãy bấm “{{int:visualeditor-toolbar-savedialog}}” để xem lại và lưu các thay đổi của bạn.',
	'guidedtour-tour-gettingstarted-click-preview-title' => 'Xem trước (tùy chọn)',
	'guidedtour-tour-gettingstarted-click-preview-description' => 'Bấm “{{int:showpreview}}” để kiểm tra các thay đổi của bạn có phải hiển thị đúng hay không. Hãy nhớ lưu trang.',
	'guidedtour-tour-gettingstarted-click-save-title' => 'Gần xong!',
	'guidedtour-tour-gettingstarted-click-save-description' => 'Bấm “{{int:savearticle}}” là các thay đổi của bạn sẽ được áp dụng vào trang.',
	'gettingstarted-cta-close' => 'Đóng',
	'gettingstarted-cta-heading' => 'Giúp đỡ {{SITENAME}}',
	'gettingstarted-cta-text' => 'Có nhiều cách để đóng góp vào {{SITENAME}}',
	'gettingstarted-cta-edit-page' => 'Sửa đổi trang này',
	'gettingstarted-cta-edit-page-sub' => 'Chúng tôi sẽ chỉ dẫn bạn',
	'gettingstarted-cta-fix-pages' => 'Tìm các trang cần sữa chữa dễ dàng',
	'gettingstarted-cta-fix-pages-sub' => 'Chúng tôi sẽ chỉ dẫn bạn cách sửa đổi',
	'gettingstarted-cta-leave' => 'Thôi, có lẽ lần sau',
);

/** Wu (吴语)
 * @author Benojan
 * @author 十弌
 */
$messages['wuu'] = array(
	'guidedtour-tour-gettingstarted-click-preview-description' => '點 "{{int:showpreview}}" 讓爾望得著改爻之後頁面個變化，休要忘記爻保存起。',
	'guidedtour-tour-gettingstarted-click-save-description' => '點 "{{int:savearticle}}" 爾個改動便保存爻。',
	'gettingstarted-cta-close' => '關',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'gettingstarted' => 'וויאזוי אנצוהייבן',
	'gettingstarted-desc' => 'העלפט נײַע באניצער ווערן רעדאקטארן',
	'gettingstarted-project-link' => '{{ns:Project}}:ערשטע שריט',
	'tag-gettingstarted_edit' => 'נייער רעדאקטירער [[{{MediaWiki:gettingstarted-project-link}}|ערשטע שריט]]', # Fuzzy
	'tag-gettingstarted_edit-description' => 'רעדאקטירונג געמאכט דורך דער [[{{MediaWiki:gettingstarted-project-link}}|אנפאנגען]] סיסטעם, וואס לייגט פאר איינפאכע אויפגאבעס צו רעדאקטארן און ווײַזט וויאזוי דערפארטיקן זיי.',
	'gettingstarted-task-toolbar-editing-help-text' => 'ווײַז מיך וויאזוי',
	'gettingstarted-task-toolbar-try-another-text' => 'פרובירן אן אנדער בלאט',
	'gettingstarted-task-toolbar-close-title' => 'פארמאכן דעם געצייגפאס',
	'gettingstarted-task-copyedit-toolbar-description' => 'דער בלאט האט אפשר אויסלייג אדער גראמאטיק גרײַזן וואס איר קענט פאררעכטן.',
	'gettingstarted-task-clarify-toolbar-try-another-title' => 'גייט צו א צופעליקן בלאט וואס איר קענט קלאר מאכן',
	'gettingstarted-task-addlinks-toolbar-description' => 'דער בלאט דארף אפשר נאך לינקען. זוכט אויס טערמינען וואס האבן א {{SITENAME}}־בלאט.',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => 'גייט צו א צופעליקן בלאט צו וואס איר קענט צולייגן לינקען',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => 'וויאזוי אנצופאנגען',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => 'אידעען וואס צו טון',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => 'קליקט אויף {{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => 'איר קענט רעדאקטירן דעם גאנצן ארטיקל דורך קליקן דא.',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => 'רעדאקטירן אן אפטייל',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => 'איר קענט רעדאקטירן!',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Dreamism
 * @author Hydra
 * @author Hzy980512
 * @author Li3939108
 * @author Liuxinyu970226
 * @author Qiyue2001
 * @author Shizhao
 * @author Xiaomingyan
 * @author Yfdyh000
 * @author Zhuyifei1999
 * @author 乌拉跨氪
 */
$messages['zh-hans'] = array(
	'gettingstarted' => '入门',
	'gettingstarted-desc' => '帮助新用户成为编者',
	'gettingstarted-project-link' => '{{ns:Project}}:入门指南',
	'tag-gettingstarted_edit' => '新编者[[{{MediaWiki:gettingstarted-project-link}}|入门]]', # Fuzzy
	'tag-gettingstarted_edit-description' => '通过[[{{MediaWiki:gettingstarted-project-link}}|入门指南]]系统向编者建议一些简单的编辑任务，并展示如何完成。',
	'gettingstarted-task-toolbar-editing-help-text' => '告诉我该怎么做',
	'gettingstarted-task-toolbar-editing-help-title' => '显示编辑指南',
	'gettingstarted-task-toolbar-try-another-text' => '尝试另一个页面 ►',
	'gettingstarted-task-toolbar-close-title' => '关闭此工具栏',
	'gettingstarted-task-toolbar-no-suggested-page' => '很抱歉，我们此时找不到更多有待改进的页面。请过会再试，或者自行搜索您感兴趣的话题。',
	'gettingstarted-task-copyedit-toolbar-description' => '你可以修正这些页面中的错别字或语法错误。',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => '随机转到一个你可以编辑改善的页面',
	'gettingstarted-task-clarify-toolbar-description' => '此页面可能存在混淆或含糊不清。你可以尝试让它更清楚。',
	'gettingstarted-task-clarify-toolbar-try-another-title' => '随机转到一个你可以澄清的页面',
	'gettingstarted-task-addlinks-toolbar-description' => '此页面可能需要更多链接。寻找在{{SITENAME}}上有此词的页面。',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => '随机转到一个你可以增加链接的页面',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => '如何开始',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => '刚开始审视需要改善的页面？如果你感到不知所措，不要担心，你不必是这个主题的专家！如果你需要帮助，或者想尝试另一个页面，使用顶栏的链接。',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => '需要做什么',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => '这些横幅标明了该页面存在的问题。你不需要一次解决掉所有的问题，怎么舒服怎么来。',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => '点击{{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => '你可以通过点击此处编辑整个页面。',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => '编辑章节',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => '如果您想要编辑某个章节，你可以点击每个章节顶部的蓝色“{{int:editsection}}”链接。',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => '您可以编辑！',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => '您现在可以编辑此页面。当您完成了编辑的时候，点击“{{int:visualeditor-toolbar-savedialog}}”审视和保存您的更改。',
	'guidedtour-tour-gettingstarted-click-preview-title' => '预览（可选）',
	'guidedtour-tour-gettingstarted-click-preview-description' => '点击“{{int:showpreview}}”，您将看到您在该页面作出了哪些更改。别忘了保存。',
	'guidedtour-tour-gettingstarted-click-save-title' => '马上就完成了！',
	'guidedtour-tour-gettingstarted-click-save-description' => '点击“{{int:savearticle}}”，您作出的更改将被保存并众人可见。',
	'gettingstarted-cta-close' => '关闭',
	'gettingstarted-cta-heading' => '帮助{{SITENAME}}',
	'gettingstarted-cta-text' => '您可以以各种方式为{{SITENAME}}做贡献',
	'gettingstarted-cta-edit-page' => '编辑此页',
	'gettingstarted-cta-edit-page-sub' => '我们将向您展示该怎么做',
	'gettingstarted-cta-fix-pages' => '查找需要简单修复的页面',
	'gettingstarted-cta-fix-pages-sub' => '我们将向您展示如何编辑',
	'gettingstarted-cta-leave' => '不用了，以后再说吧',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Byfserag
 * @author Simon Shek
 * @author StephDC
 */
$messages['zh-hant'] = array(
	'gettingstarted' => '入門',
	'gettingstarted-desc' => '幫助新用戶成為編者',
	'gettingstarted-project-link' => '{{ns:Project}}:入門',
	'tag-gettingstarted_edit' => '新編者[[{{MediaWiki:gettingstarted-project-link}}|入門]]', # Fuzzy
	'tag-gettingstarted_edit-description' => '通過[[{{MediaWiki:gettingstarted-project-link}}|入門指南]]系統向編者建議一些簡單的編輯任務，並展示如何完成。',
	'gettingstarted-task-toolbar-editing-help-text' => '顯示説明',
	'gettingstarted-task-toolbar-editing-help-title' => '顯示編輯指南',
	'gettingstarted-task-toolbar-try-another-text' => '嘗試另一個頁面 ►',
	'gettingstarted-task-toolbar-close-title' => '關閉此工具列',
	'gettingstarted-task-toolbar-no-suggested-page' => '很抱歉，我們此時找不到更多有待改進的頁面。請過會再試，或者自行搜索您感興趣的話題。',
	'gettingstarted-task-copyedit-toolbar-description' => '這篇文章可能有拼寫或語法錯誤，你可以修復它們。',
	'gettingstarted-task-copyedit-toolbar-try-another-title' => '隨機轉到一個你可以編輯改善的頁面',
	'gettingstarted-task-clarify-toolbar-description' => '此頁面可能存在混淆或含糊不清。你可以嘗試讓它更清楚。',
	'gettingstarted-task-clarify-toolbar-try-another-title' => '隨機轉到一篇您可以澄清的文章',
	'gettingstarted-task-addlinks-toolbar-description' => '此頁面可能需要更多鏈接。尋找在{{SITENAME}}上有此詞的頁面。',
	'gettingstarted-task-addlinks-toolbar-try-another-title' => '隨機轉到一個你可以增加鏈接的頁面',
	'guidedtour-tour-gettingstartedtasktoolbarintro-title' => '如何開始',
	'guidedtour-tour-gettingstartedtasktoolbarintro-description' => '來簡單看看整篇亟待改進的文章。如果你感到不知所措，不要擔心。你不必是本主題的專家！如果您需要幫助或想要嘗試另一篇文章，請使用在在頂欄中的連結。',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-title' => '需要做什麼',
	'guidedtour-tour-gettingstartedtasktoolbar-ambox-description' => '這些橫幅標明了該頁面存在的問題。你不需要一次解決掉所有的問題，怎麼舒服怎麼來。',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-title' => '點擊{{int:vector-view-edit}}',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-article-description' => '點擊此處，您就可以編輯整篇文章',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-title' => '編輯一個章節',
	'guidedtour-tour-gettingstartedtasktoolbar-edit-section-description' => '如果您希望編輯一個特定的章節，您可以點擊位於該章節頂部的藍色“{{int:editsection}}”連結。',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-title' => '您可以編輯！',
	'guidedtour-tour-gettingstartedtasktoolbarve-click-save-description' => '您現在可以編輯此頁面。當您完成了編輯的時候，點擊“{{int:visualeditor-toolbar-savedialog}}”審視和保存您的更改。',
	'guidedtour-tour-gettingstarted-click-preview-title' => '預覽 (可選)',
	'guidedtour-tour-gettingstarted-click-preview-description' => '點擊“{{int:showpreview}}”，您將看到您在該頁面作出了哪些更改。別忘了保存。',
	'guidedtour-tour-gettingstarted-click-save-title' => '馬上就完成了！',
	'guidedtour-tour-gettingstarted-click-save-description' => '按一下"{{int:savearticle}}"，您的更改將是可見的。',
	'gettingstarted-cta-close' => '關閉',
	'gettingstarted-cta-heading' => '幫助{{SITENAME}}',
	'gettingstarted-cta-text' => '您可以以各種方式為{{SITENAME}}做貢獻',
	'gettingstarted-cta-edit-page' => '編輯本頁',
	'gettingstarted-cta-edit-page-sub' => '我們將向您展示該怎麼做',
	'gettingstarted-cta-fix-pages' => '查找需要簡單修復的頁面',
	'gettingstarted-cta-fix-pages-sub' => '我們將向您展示如何編輯',
	'gettingstarted-cta-leave' => '不用了，以後再說吧',
);
