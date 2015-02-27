<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ADD_ATTACHMENT'  => 'Odovzdať prílohu',
	'ADD_ATTACHMENT_EXPLAIN' => 'Ak chcete odovzdať jeden alebo viacero súborov, vyplňte nasledujúce položky.',
	'ADD_FILE' => 'Pridať súbor',
	'ADD_POLL' => 'Hlasovanie',
	'ADD_POLL_EXPLAIN' => 'Ak nechcete pridať hlasovanie, nasledujúce položky nechajte prázdne (nevyplňujte).',
	'ALREADY_DELETED' => 'Táto správa už bola vymazaná.',
	'ATTACH_DISK_FULL'	=> 'Nie je dostatok miesta na uloženie tejto prílohy.',
	'ATTACH_QUOTA_REACHED'	=> 'Úložný priestor portálu pre ukladanie príloh bol vyčerpaný.',
	'ATTACH_SIG' => 'Zobraziť v príspevku aj podpis užívateľa (podpis je možné vytvoriť v časti "Nastavenia")',

	'BBCODE_A_HELP'	=> 'Príloha: [attachment=]nazov_suboru.pripona[/attachment]',
	'BBCODE_B_HELP'	=> 'Tučný text: [b]text[/b]',
	'BBCODE_C_HELP'	=> 'Vkladanie kódu: [code]kód[/code]',
	'BBCODE_D_HELP'	=> 'Flash: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'	=> 'Veľkosť písma: [size=85]small text[/size]',
	'BBCODE_IS_OFF'	=> '%sBBCode%s <em>zakázaný</em>',
	'BBCODE_IS_ON'	=> '%sBBCode%s <em>povolený</em>',
	'BBCODE_I_HELP'	=> 'Kurzíva: [i]text[/i]',
	'BBCODE_L_HELP'	=> 'Zoznam: [list][*]text[/list]',
	'BBCODE_LISTITEM_HELP' => 'Položka zoznamu: [*]text',
	'BBCODE_O_HELP'	=> 'Zotriedený zoznam: napr. [list=1][*]Prvý bod[/list] alebo [list=a][*]Položka a[/list]',
	'BBCODE_P_HELP'	=> 'Vložiť obrázok: [img]http://adresa_k_obrazku/nazov_obrazku.pripona_obrazku[/img]',
	'BBCODE_Q_HELP'	=> 'Citovať príspevok iného užívateľa alebo text: [quote]citovaný text[/quote]',
	'BBCODE_S_HELP'	=> 'Farba písma: [color=red]text[/color] alebo [color=#FF0000]text[/color]',
	'BBCODE_U_HELP'	=> 'Podčiarknutý text: [u]text[/u]',
	'BBCODE_W_HELP'	=> 'Vložiť odkaz: [url]http://url[/url] alebo [url=http://url]URL text[/url]',
	'BBCODE_Y_HELP'	=> 'Položka zoznamu',
	'BUMP_ERROR'	=> 'Nemôžete oživiť tému tak skoro po zverejnení príspevku.',

	'CANNOT_DELETE_REPLIED'	=> 'Môžete vymazať len príspevok, ku ktorému v príslušnom vlákne nebola napísaná žiadna odpoveď.',
	'CANNOT_EDIT_POST_LOCKED' => 'Tento príspevok bol zamknutý. Už ho nemôžete upravovať.',
	'CANNOT_EDIT_TIME' => 'Už nemôžete upraviť ani vymazať tento príspevok.',
	'CANNOT_POST_ANNOUNCE' => 'Nemáte dostatočné oprávnenia na vytváranie typu tém "Oznámenie".',
	'CANNOT_POST_STICKY' => 'Nemáte dostatočné oprávnenia na Pripnutie témy.',
	'CHANGE_TOPIC_TO' => 'Publikovať tému ako',
	'CHARS_POST_CONTAINS' => array(
		1 => 'Príspevok obsahuje %1$d znak.',
		2 => 'Príspevok obsahuje %1$d znaky.',
		3 => 'Príspevok obsahuje %1$d znakov.',  
	),
	'CHARS_SIG_CONTAINS' => array(
		1 => 'Váš podpis obsahuje %1$d znak.',
		2 => 'Váš podpis obsahuje %1$d znaky.',
		3 => 'Váš podpis obsahuje %1$d znakov.',  
	),
	'CLOSE_TAGS' => 'Zavrieť tagy',
	'CURRENT_TOPIC'	=> 'Aktuálna téma',

	'DELETE_FILE' => 'Odstrániť súbor',
     'DELETE_MESSAGE' => 'Odstrániť správu',
	'DELETE_MESSAGE_CONFIRM' => 'Naozaj chcete <strong>natrvalo</strong> odstrániť tento príspevok?',
	'DELETE_OWN_POSTS' => 'Môžete mazať len vlastné správy.',
	'DELETE_PERMANENTLY' => 'Natrvalo odstrániť',
	'DELETE_POST_CONFIRM' => 'Naozaj chcete odstrániť tento príspevok?',
	'DELETE_POST_PERMANENTLY_CONFIRM' => 'Naozaj chcete <strong>natrvalo</strong> odstrániť tieto príspevky?',
	'DELETE_POST_PERMANENTLY' => 'Príspevok bude natrvalo odstránený a nepôjde ho obnoviť',
	'DELETE_POSTS_CONFIRM' => 'Ste si istý, že chcete vymazať tieto príspevky?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM' => 'Ste si istý, že chcete <strong>navždy</strong> odstrániť tieto príspevky?',
	'DELETE_REASON'	=> 'Dôvod odstránenia',
	'DELETE_REASON_EXPLAIN' => 'Vložený dôvod odstránenia bude viditeľný pre moderátorov.',
	'DELETE_POST_WARN' => 'Túto akciu už nemožno vrátiť späť!',
	'DELETE_TOPIC_CONFIRM' => 'Naozaj chcete odstrániť túto tému?',
	'DELETE_TOPIC_PERMANENTLY' => 'Téma bude natrvalo odstránená a nepôjde ju obnoviť',
	'DELETE_TOPIC_PERMANENTLY_CONFIRM' => 'Naozaj chcete <strong>natrvalo</strong> odstrániť túto tému?',
	'DELETE_TOPICS_CONFIRM'	=> 'Naozaj chcete odstrániť tieto témy?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM' => 'Naozaj chcete <strong>natrvalo</strong> odstrániť tieto témy?',
	'DISABLE_BBCODE' => 'V tomto príspevku zakázať BBCode',
	'DISABLE_MAGIC_URL' => 'V tomto príspevku nerozpoznávať URL adresy (aktívne odkazy)',
	'DISABLE_SMILIES' => 'V tomto príspevku zakázať smajlíky',
	'DISALLOWED_CONTENT' => 'Nahrávanie bolo zrušené, pretože bolo identifikované ako možný útok.',
	'DISALLOWED_EXTENSION' => '%s je nepovolená prípona.',
	'DRAFT_LOADED' => 'Koncept bol presunutý do okna upraveného príspevku, teraz môžete svoj príspevok upraviť.<br />Po tom čo zverejníte svoj príspevok, koncept bude vymazaný.',
	'DRAFT_LOADED_PM' => 'Koncept bol presunutý do okna upravenej správy, teraz môžete svoju správu upraviť.<br />Po tom čo odošlete svoju správu, koncept bude vymazaný.',
	'DRAFT_SAVED' => 'Koncept bol úspešne uložený.',
	'DRAFT_TITLE' => 'Názov konceptu',

	'EDIT_REASON' => 'Dôvod úpravy príspevku',
	'EMPTY_FILEUPLOAD' => 'Odovzdaný súbor je prázdny.',
	'EMPTY_MESSAGE' => 'Musíte vložiť text príspevku.',
	'EMPTY_REMOTE_DATA'	=> 'Súbor nie je možné odovzdať, skúste to manuálne.',

	'FLASH_IS_OFF' => '[flash] <em>zakázaný</em>',
	'FLASH_IS_ON' => '[flash] <em>povolený</em>',
	'FLOOD_ERROR' => 'Nemôžete tak skoro po odoslaní predchádzajúceho svojho príspevku odoslať ďalší.',
	'FONT_COLOR' => 'Farba písma',
	'FONT_COLOR_HIDE' => 'Skryť paletu farieb',
	'FONT_HUGE'	=> 'Obrovské',
	'FONT_LARGE' => 'Veľké',
	'FONT_NORMAL' => 'Normálne',
	'FONT_SIZE'	=> 'Veľkosť písma',
	'FONT_SMALL' => 'Malé',
	'FONT_TINY' => 'Drobné',

	'GENERAL_UPLOAD_ERROR' => 'Nemôžem odovzdať prílohu na %s.',

	'IMAGES_ARE_OFF' => '[img] je <em>ZAKÁZANÉ</em>',
	'IMAGES_ARE_ON' => '[img] je <em>POVOLENÉ</em>',
	'INVALID_FILENAME' => '%s je neplatné meno súboru.',

	'LOAD'=> 'Nahrať',
	'LOAD_DRAFT' => 'Nahrať koncept',
	'LOAD_DRAFT_EXPLAIN' => 'Tu si môžete vybrať koncept, ktorý chcete pred zverejnením alebo odoslaním upraviť. Váš súčasný stav úprav textu alebo rozpísaný text príspevku alebo správy bude stratený. Zobraziť, upraviť alebo mazať koncepty, môžete v časti "Moje nastavenia".',
	'LOGIN_EXPLAIN_BUMP' => 'Musíte byť prihlásený, ak chcete oživiť tému v tomto fóre.',
	'LOGIN_EXPLAIN_DELETE' => 'Musíte byť prihlásený, ak chcete mazať príspevky v tomto fóre.',
	'LOGIN_EXPLAIN_POST' => 'Musíte byť prihlásený, ak chcete založiť tému v tomto fóre.',
	'LOGIN_EXPLAIN_QUOTE' => 'Musíte byť prihlásený, ak chcete citovať príspevky v tomto fóre.',
	'LOGIN_EXPLAIN_REPLY' => 'Musíte byť prihlásený, ak chcete písať príspevky v tomto fóre.',

	'MAX_FONT_SIZE_EXCEEDED' => 'Môžete použiť maximálne %d ako definovanie veľosti písma.',
	'MAX_FLASH_HEIGHT_EXCEEDED' => array(
		1 => 'Súbory typu flash môžu mať výšku maximálne %d pixel.',
		2 => 'Súbory typu flash môžu mať výšku maximálne %d pixely.',
        3 => 'Súbory typu flash môžu mať výšku maximálne %d pixelov.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED' => array(
		1 => 'Súbory typu flash môžu mať šírku maximálne %d pixel.',
		2 => 'Súbory typu flash môžu mať šírku maximálne %d pixely.',
        3 => 'Súbory typu flash môžu mať šírku maximálne %d pixelov.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED' => array(
		1 => 'Obrázky môžu mať výšku maximálne %1$d pixel.',
		2 => 'Obrázky môžu mať výšku maximálne %1$d pixely.',
        3 => 'Obrázky môžu mať výšku maximálne %1$d pixelov.',
	),
	'MAX_IMG_WIDTH_EXCEEDED' => array(
		1 => 'Obrázky môžu mať šírku maximálne %1$d pixel.',
		2 => 'Obrázky môžu mať šírku maximálne %1$d pixely.',
        3 => 'Obrázky môžu mať šírku maximálne %1$d pixelov.',
	),

	'MESSAGE_BODY_EXPLAIN' => array(
		0 => '', // zero means no limit, so we don't view a message here.
		1 => 'Vložte sem svoju správu, nemôže obsahovať viac než <strong>%d</strong> znak.',
		2 => 'Vložte sem svoju správu, nemôže obsahovať viac než <strong>%d</strong> znaky.',
        3 => 'Vložte sem svoju správu, nemôže obsahovať viac než <strong>%d</strong> znakov.',
	),
	'MESSAGE_DELETED' => 'Správa bola vymazaná.',
	'MORE_SMILIES' => 'Zobraziť viac emotikonov',

	'NOTIFY_REPLY' => 'Upozorniť ma, ak príde odpoveď',
	'NOT_UPLOADED' => 'Súbor nemôže byť odovzdaný.',
	'NO_DELETE_POLL_OPTIONS' => 'Nemôžete zmazať možnosti publikovaného hlasovania.',
	'NO_PM_ICON' => 'Žiadna',
	'NO_POLL_TITLE' => 'Musíte zadať hlasovaciu otázku.',
	'NO_POST' => 'Požadovaný príspevok neexistuje.',
	'NO_POST_MODE' => 'Nebol zvolený typ odoslania.',

	'PARTIAL_UPLOAD' => 'Súbor bol odovzdaný len čiastočne.',
	'PHP_SIZE_NA' => 'Príloha je príliš veľká.<br />Nemôžem zistiť maximálnu povolenú hodnotu definovanú v php.ini.',
	'PHP_SIZE_OVERRUN' => 'Príloha je príliš veľká, maximálna veľkosť prílohy je %1$d %2$s.<br />Táto hodnota je nastavená v php.ini a nemôže byť zmenená.',
	'PLACE_INLINE' => 'Umiestniť do príspevku',
	'POLL_DELETE' => 'Zmazať hlasovanie',
	'POLL_FOR' => 'Doba trvania',
	'POLL_FOR_EXPLAIN' => 'Vložte 0 ak chcete ponechať hlasovanie natrvalo.',
	'POLL_MAX_OPTIONS' => 'Maximálny počet volieb',
	'POLL_MAX_OPTIONS_EXPLAIN' => 'Číslo vyjadruje počet možností, ktoré môže užívateľ v hlasovaní zvoliť. Minimum je 1. Maximum je počet všetkých hlasovacích otázok/možností.',
	'POLL_OPTIONS' => 'Hlasovacie otázky',
	'POLL_OPTIONS_EXPLAIN' => array(
		1 => 'Môžete napísať len <strong>%d</strong> otázku.',
        2 => 'Každú hlasovaciu otázku vpíšte na samostatný riadok. Môžete napísať najviac <strong>%d</strong> otázky.',
        3 => 'Každú hlasovaciu otázku vpíšte na samostatný riadok. Môžete napísať až <strong>%d</strong> otázok.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN' => array(
		1 => 'Môžete napísať len <strong>%d</strong> otázku. Ak zmeníte už publikovanú otázku, všetky doteraz odovzdané hlasy budú anulované.',
        2 => 'Každú hlasovaciu otázku vpíšte na samostatný riadok. Môžete napísať najviac <strong>%d</strong> otázky. Ak pridáte novú alebo zmeníte už publikované hlasovacie otázky, všetky doteraz odovzdané hlasy budú anulované.',
        3 => 'Každú hlasovaciu otázku vpíšte na samostatný riadok. Môžete napísať až <strong>%d</strong> otázok. Ak pridáte novú alebo zmeníte už publikované hlasovacie otázky, všetky doteraz odovzdané hlasy budú anulované.',
	),
	'POLL_QUESTION'	=> 'Hlasovacia otázka',
	'POLL_TITLE_TOO_LONG' => 'Hlasovacia otázka môže mať maximálne 100 znakov.',
	'POLL_TITLE_COMP_TOO_LONG' => 'Hlasovacia otázka je príliš dlhá, zvážte odstránenie tagov BBCode alebo emotikonov.',
	'POLL_VOTE_CHANGE' => 'Umožniť opakované hlasovanie',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Ak je zvolená táto možnosť, užívatelia môžu opätovne zmeniť svoje rozhodnutie v hlasovaní.',
	'POSTED_ATTACHMENTS' => 'Odovzdané prílohy',
	'POST_APPROVAL_NOTIFY' => 'Až bude váš príspevok schválený, budete informovaný.',
	'POST_CONFIRMATION'	=> 'Potvrdzovací kód',
	'POST_CONFIRM_EXPLAIN' => 'Ako ochranu pred automatizovaným vkladaním príspevkov, portál vyžaduje vloženie potvrdzovacieho kódu, ktorý vidíte na nasledovnom obrázku.',
	'POST_DELETED' => 'Príspevok bol zmazaný.',
	'POST_EDITED' => 'Príspevok bol upravený.',
	'POST_EDITED_MOD' => 'Príspevok bol upravený, ale vyžaduje schválenie.',
	'POST_GLOBAL' => 'Oznámenie pre celý portál',
	'POST_ICON'	=> 'Ikona príspevku',
	'POST_NORMAL' => 'Obyčajná téma',
	'POST_REVIEW' => 'Prehodnotenie príspevku',
	'POST_REVIEW_EDIT' => 'Prehodnotenie príspevku',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Počas úpravy príspevku, ktorú práve vykonávate už niekto tento príspevok upravil.',
	'POST_REVIEW_EXPLAIN' => 'V tejto téme práve pribudol najmenej jeden nový príspevok.',
	'POST_STORED' => 'Správa bola odoslaná.',
	'POST_STORED_MOD' => 'Správa bola odoslaná, ale vyžaduje schválenie.',
	'POST_TOPIC_AS'	=> 'Publikovať tému ako',
	'PROGRESS_BAR'	=> 'Priebežný stav',

	'QUOTE_DEPTH_EXCEEDED' => array(
		1 => 'Maximálny počet vnorených citácií %d.',
        2 => 'Maximálny počet vnorených citácií %d.',
        3 => 'Maximálny počet vnorených citácií %d.',
	),
	'QUOTE_NO_NESTING'	=> 'Nemôžete vkladať citácie do citácií.',
	'REMOTE_UPLOAD_TIMEOUT'	=> 'Časový limit na odovzdávanie vypršal.',
	'SAVE' => 'Uložiť',
	'SAVE_DATE'	=> 'Uložiť ako',
	'SAVE_DRAFT' => 'Uložiť ako koncept',
	'SAVE_DRAFT_CONFIRM' => 'Ak správu uložíte ako koncept, uložený bude len predmet a text príspevku. Chcete správu uložiť ako koncept?',
	'SMILIES' => 'Smajlíky',
	'SMILIES_ARE_OFF' => 'Smajlíky sú <em>ZAKÁZANÝ</em>',
	'SMILIES_ARE_ON' => 'Smajlíky sú <em>POVOLENÝ</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT' => 'Doba trvania pripnutia/oznámenia',
	'STICK_TOPIC_FOR' => 'Doba trvania pripnutia/oznámenia',
	'STICK_TOPIC_FOR_EXPLAIN'  => 'Pokiaľ má byť téma pripnutá na začiatok alebo má byť typu oznámenie, môžete určiť počet dní, po dobu ktorých bude téma zvoleným typom témy. Vložte 0 na vyjadrenie neobmedzenej doby trvania pripnutia/oznámenia témy. Číslo vyjadruje počet dní od dnešného dátumu.',
	'STYLES_TIP' => 'Tip: Štýly môžu byť rýchlejšie zmenené pokiaľ označíte text',

	'TOO_FEW_CHARS'	=> 'Vaša správa obsahuje príliš málo znakov.',
	'TOO_FEW_CHARS_LIMIT' => array(
		1 => 'Minimálny počet je %1$d znak.',
        2 => 'Minimálny počet sú %1$d zanky.',
        3 => 'Minimálny počet je %1$d znakov.',
	),
	'TOO_FEW_POLL_OPTIONS' => 'Musíte vložiť najmenej dve hlasovacie otázky.',
	'TOO_MANY_ATTACHMENTS' => 'Nemôžem pridať ďalšiu prílohu, maximálny počet príloh je %d.',
	'TOO_MANY_CHARS' => 'Vaša správa obsahuje príliš mnoho znakov.',
	'TOO_MANY_CHARS_LIMIT'	=> array(
		1 => 'Maximálny počet je %1$d znak.',
        2 => 'Maximálny počet sú %1$d zanky.',
        3 => 'Maximálny počet je %1$d znakov.',
	),
	'TOO_MANY_POLL_OPTIONS'	=> 'Zadali ste príliš mnoho hlasovacích otázok.',
	'TOO_MANY_SMILIES' => 'Vaša správa obsahuje príliš mnoho emotikonov, maximum je %d.',
	'TOO_MANY_URLS'	=> 'Vaša správa obsahuje príliš mnoho odkazov na iné stránky, maximum je %d.',
	'TOO_MANY_USER_OPTIONS'	=> 'Nemôžete určiť viac možností hlasovania pre užívateľa než je počet hlasovacích otázok.',
	'TOPIC_BUMPED' => 'Téma bolo preunuté na začiatok zoznamu tém (oživené).',

	'UNAUTHORISED_BBCODE' => 'Niektoré tagy BBCode nie je možné použiť (%s).',
	'UNGLOBALISE_EXPLAIN' => 'Ak chcete túto tému zobraziť ako bežnú tému, musíte zvoliť fórum, v ktorom má byť táto téma umiestnená. Oznámenia pre celý portál sa zobrazujú vo všetkých fórach portálu.',
	'UNSUPPORTED_CHARACTERS_MESSAGE' => 'Vaša správa obsahuje nepovolené znaky:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT' => 'Predmet obsahuje nepovolené znaky:<br />%s',
	'UPDATE_COMMENT' => 'Aktualizovať komentár',
	'URL_INVALID' => 'Odkaz je neplatný.',
	'URL_NOT_FOUND' => 'Označený súbor nenájdený.',
	'URL_IS_OFF' => '[url] sú <em>ZAKÁTANÉ</em>',
	'URL_IS_ON' => '[url] sú <em>POVOLENÉ</em>',
	'USER_CANNOT_BUMP' => 'Nemôžete oživiť tému v tomto fóre.',
	'USER_CANNOT_DELETE' => 'Nemôžete mazať príspevky v tomto fóre.',
	'USER_CANNOT_EDIT' => 'Nemôžete upravovať príspevky v tomto fóre.',
	'USER_CANNOT_REPLY' => 'Nemôžete odpvedať na príspevky v tomto fóre.',
	'USER_CANNOT_FORUM_POST' => 'Typ tohoto fóra nedovoľuje odosielanie nových príspevkov.',

	'VIEW_MESSAGE' => '%sZobraziť odoslanú správu%s',
	'VIEW_PRIVATE_MESSAGE' => '%sZobraziť odoslanú súkromnú správu%s',
	
	'WRONG_FILESIZE' => 'Súbor je príliš veľký, maximálna veľkosť je %1$d %2$s.',
	'WRONG_SIZE' => 'Minimálne rozmery obrázku (ŠxV): %1$s x %2$s, maximálne: %3$s x %4$s. Rozmery vášho obrázku %5$s x %6$s.',
));
