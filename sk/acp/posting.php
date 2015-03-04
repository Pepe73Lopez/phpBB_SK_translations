<?php
/**
*
* @package language
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BB kódy sú zvláštna implementácia jazyka HTML, ktorá poskytuje väčšiu kontrolu nad tým, čo a ako je zobrazené. Z tejto stránky môžete pridávať, odstraňovať alebo upravovať vlastné BB kódy.',
	'ADD_BBCODE'				=> 'Pridať nový BB kód',

	'BBCODE_DANGER'				=> 'BB kód, ktorý sa snažíte pridať vyzerá tak, že používa {TEXT} v HTML atribúte. Toto je možná bezpečnostná chyba XSS. Namiesto toho radšej skúste použiť viac obmedzené {SIMPLETEXT} alebo {INTTEXT}. Pokračujte iba ak rozumiete rizikám a považujete použitie {TEXT} ako nenahraditeľné riešenie.',
	'BBCODE_DANGER_PROCEED'		=> 'Pokračovať', //'I understand the risk',

	'BBCODE_ADDED'				=> 'BB kód úspešne pridaný.',
	'BBCODE_EDITED'				=> 'BB kód úspešne upravený.',
	'BBCODE_NOT_EXIST'			=> 'Vybraný BB kód neexistuje.',
	'BBCODE_HELPLINE'			=> 'Nápoveda',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Text, ktorý sa zobrazí pri prejdení myšou nad textom BB kódu.',
	'BBCODE_HELPLINE_TEXT'		=> 'Text k nápovede',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Text nápovedy, ktorý ste zadali, je príliš dlhý.',

	'BBCODE_INVALID_TAG_NAME'	=> 'BB kód s týmto názvom už existuje.',
  'BBCODE_INVALID'			=> 'Váš BB kód je poskladaný v chybnej forme.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Váš BB kód musí obsahovať štartovaciu aj zakončovaciu značku.',
	'BBCODE_TAG'				=> 'Značka',
	'BBCODE_TAG_TOO_LONG'		=> 'Vybraný názov značky je príliš dlhý.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Definícia vašej značky je príliš dlhá, skráťte ju prosím.',
	'BBCODE_USAGE'				=> 'Použitie BB kódu',
	'BBCODE_USAGE_EXAMPLE'		=> '[zvyraznit={COLOR}]{TEXT}[/zvyraznit]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Tu definujete ako používať BB kód. Nahraďte všetky premenné odpovedajúcim tokenom (%spozri nižšie%s)',

	'EXAMPLE'						=> 'Príklad:',
	'EXAMPLES'						=> 'Príklady:',

	'HTML_REPLACEMENT'				=> 'HTML náhrada',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Tu definujete predvolenú náhradu HTML. Nezabudnite vložiť rovnaké tokeny, ktoré ste použili vyššie!',

	'TOKEN'					=> 'Token',
	'TOKENS'				=> 'Tokeny',
	'TOKENS_EXPLAIN'		=> 'Tokeny držia miesto pre budúci užívateľský vstup. Vstup bude spracovaný, len ak bude odpovedať definícií tokenu. Pokiaľ potrebujete, môžete ich číslovať pridaním čísla pred uzatváracou zátvorkou, napr. {TEXT1}, {TEXT2}.<br /><br />V HTML náhrade môžete taktiež použiť akýkoľvek jazykový reťazec, ktorý je vo vašom /language adresári, napríklad:e {L_<em>&lt;NAZOVRETAZCA&gt;</em>}, kde <em>&lt;NAZOVRETAZCA&gt;</em> je názov preloženého reťazca, ktorý chcete pridať. Napríklad, {L_WROTE} bude zobrazené ako „napísal“.<br /><br /><strong>Prosím berte na vedomie, že iba premenné zobrazené nižšie môžu byť použité ako súčasť vlastných BB kódov.</strong>',
	'TOKEN_DEFINITION'		=> 'Čo to môže byť?',
	'TOO_MANY_BBCODES'		=> 'Nedajú sa vytvoriť ďalšie BB kódy. Odstráňte jednu, alebo viac BB kódov a skúste to znova.',

	'tokens'	=>	array(
		'TEXT'			=> 'Akýkošvek text, vrátane cudzích znakov, čísiel, atď. Nemali by ste používať túto premennú v HTML tagoch. Miesto toho skúste použiť IDENTIFIER, INTTEXT alebo SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Znaky z latinskej abecedy (A-Z), čísla, medzery, čiarky, bodky, mínus, plus, pomlčka a podtrhovník',
		'INTTEXT'		=> 'Unicode znaky, čísla, medzery, čiarky, bodky, mínusy, plusy, pomĺčky a podtrhovníky.',
		'IDENTIFIER'	=> 'Znaky z latinskej abecedy (A-Z), čísla, pomlčka a podčiarknutie',
		'NUMBER'		=> 'Akákoľvek rada číslic',
		'EMAIL'			=> 'Platná e-mailová adresa',
		'URL'			=> 'Platná URL, používajúca akýkoľvek protokol (http, ftp, atď... nedá sa zneužiť pre JavaScriptové útoky). Pokiaľ nie je zvolený žiadny, protokol „http://“ je pripojený na začiatok reťazca.',
		'LOCAL_URL'		=> 'Lokálna URL adresa. Zadaná URL musí byť relatívna k stránke s témou a nesmie obsahovať definíciu protokolu alebo názov servera, pretože adresy majú prefix “%s”',
		'RELATIVE_URL'	=> 'Relatívna adresa. Môžete ju použiť ale buďťe opatrný: celá adresa je valídna relatívna adresa. Ak chcete použiť relatívnu adresu fóra, použite token LOCAL_URL.',
		'COLOR'			=> 'HTML farba, buď v číselnom formáte <samp>#FF1234</samp> alebo ako <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS farba</a> ako <samp>fuchsia</samp> alebo <samp>InactiveBorder</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Odtiaľto môžete pridávať, odstraňovať a upravovať ikonky, ktoré užívatelia môžu pridať do ich tém alebo príspevkov. Tieto ikonky sú najčastejšie zobrazené vedľa názvu témy v zozname tém, alebo vedľa predmetu v prehľade tém. Môžete tiež inštalovať alebo vytvoriť celé balíky ikoniek.',
	'ACP_SMILIES_EXPLAIN'	=> 'Smajlíci alebo emotikony sú často malé, niekedy animované obrázky, ktoré umožňujú vyjadriť emócie, alebo náladu. Z tejto stránky môžete pridávať, mazať a upravovať smajlíkov, ktorých užívatelia môžu používať v ich príspevkoch a súkromných správach. Môžete tiež inštalovať, alebo vytvoriť celé balíky smajlíkov.',
	'ADD_SMILIES'			=> 'Pridať viac smajlíkov naraz',
	'ADD_SMILEY_CODE'		=> 'Pridať ďalší kód smajlíkov',
	'ADD_ICONS'				=> 'Pridať viac ikon naraz',
	'AFTER_ICONS'			=> 'Za %s',
	'AFTER_SMILIES'			=> 'Za %s',

	'CODE'						=> 'Kód',
	'CURRENT_ICONS'				=> 'Súčasné ikonky',
	'CURRENT_ICONS_EXPLAIN'		=> 'Vyberte si, čo chcete robiť s aktuálne nainštalovanými ikonkami.',
	'CURRENT_SMILIES'			=> 'Súčasné smajlíky',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Vyberte si, čo chcete robiť s aktuálne nainštalovanými smajlíkmi.',

	'DISPLAY_ON_POSTING'		=> 'Zobraziť pri prispievaní',
	'DISPLAY_POSTING'			=> 'Pri odosielaní',
  'DISPLAY_POSTING_NO'		=> 'Nezobraziť pri odosielaní',



	'EDIT_ICONS'				=> 'Upraviť ikonky',
	'EDIT_SMILIES'				=> 'Upraviť smajlíkov',
	'EMOTION'					=> 'Emócia',
	'EXPORT_ICONS'				=> 'Exportovať a stiahnuť icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sKliknutím na tento odkaz bude konfiguračný súbor pre inštalované ikonky zabalený do súboru <samp>icons.pak</samp>, ktoré sa dá po stiahnutí použiť pre vytvorenie <samp>.zip</samp> alebo <samp>.tgz</samp> archívu obsahujúceho všetky vaše ikony a tento <samp>icons.pak</samp> konfiguračný súbor%s.',
	'EXPORT_SMILIES'			=> 'Exportovať a stiahnuť smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sKliknutím na tento odkaz bude konfiguračný súbor pre inštalovaných smajlíkov zabalený do súboru <samp>smilies.pak</samp>, ktoré sa dá po stiahnutí použiť pre vytvorenie <samp>.zip</samp> alebo <samp>.tgz</samp> archívu obsahujúceho všetkých vašich smajlíkov a tento <samp>smilies.pak</samp> konfiguračný súbor%s.',

	'FIRST'			=> 'Prvý',

	'ICONS_ADD'				=> 'Pridať novú ikonku',
	'ICONS_NONE_ADDED'		=> 'Žiadna ikonka nebola pridaná.',
  'ICONS_ONE_ADDED'		=> 'Ikonka bola úspešne pridaná.',
	'ICONS_ADDED'			=> 'Ikonky boli úspešne pridané.',
	'ICONS_CONFIG'			=> 'Nastavenie ikoniek',
	'ICONS_DELETED'			=> 'Ikonka bola úspešne odstránená.',
	'ICONS_EDIT'			=> 'Upraviť ikonku',
	'ICONS_ONE_EDITED'		=> 'Ikonka bola úspešne aktualizovaná.',
	'ICONS_NONE_EDITED'		=> 'Žiadna ikonka nebola aktualizovaná.',
	'ICONS_EDITED'			=> 'Ikonky boli úspešne aktualizované.',
	'ICONS_HEIGHT'			=> 'Výška ikonky',
	'ICONS_IMAGE'			=> 'Obrázok ikonky',
	'ICONS_IMPORTED'		=> 'Sada ikoniek bola úspešne nainštalovaná.',
	'ICONS_IMPORT_SUCCESS'	=> 'Sada ikoniek bola úspešne importovaná.',
	'ICONS_LOCATION'		=> 'Umiestnenie ikonky',
	'ICONS_NOT_DISPLAYED'	=> 'Nasledujúce ikonky nie sú zobrazené na stránke pre odosielanie príspevkov',
	'ICONS_ORDER'			=> 'Poradie ikoniek',
	'ICONS_URL'				=> 'Súbor obrázku ikonky',
	'ICONS_WIDTH'			=> 'Šírka ikonky',
	'IMPORT_ICONS'			=> 'Inštalovať balík ikoniek',
	'IMPORT_SMILIES'		=> 'Inštalovať balík smajlíkov',

	'KEEP_ALL'			=> 'Ponechať všetko',

	'MASS_ADD_SMILIES'	=> 'Pridať viac smajlíkov naraz',

	'NO_ICONS_ADD'		=> 'Nie sú dostupné žiadne ikonky na pridanie.',
	'NO_ICONS_EDIT'		=> 'Nie sú dostupné žiadne ikonky pre úpravu.',
	'NO_ICONS_EXPORT'	=> 'Nemáte žiadne ikonky na vytvorenie balíka.',
	'NO_ICONS_PAK'		=> 'Nebol nájdený žiadny balík ikoniek.',
	'NO_SMILIES_ADD'	=> 'Nie sú dostupné žiadne smajlíky na pridanie.',
	'NO_SMILIES_EDIT'	=> 'Nie sú dostupné žiadne smajlíky pre úpravu.',
	'NO_SMILIES_EXPORT'	=> 'Nemáte žiadnych smajlíkov na vytvorenie balíka.',
	'NO_SMILIES_PAK'	=> 'Nebol nájdený žiadny balík smajlíkov.',

	'PAK_FILE_NOT_READABLE'		=> '<samp>.pak</samp> súbor sa nedá sa prečítať.',

	'REPLACE_MATCHES'	=> 'Nahradiť odpovedajúce hodnoty',

	'SELECT_PACKAGE'			=> 'Vybrať súbor balíka',
	'SMILIES_ADD'				=> 'Pridať nového smajlíka',
	'SMILIES_NONE_ADDED'		=> 'Žiadne smajlíky neboli pridané.',
	'SMILIES_ONE_ADDED'			=> 'Smajlík bol úspešne pridaný.',
	'SMILIES_ADDED'				=> 'Smajlíci boli úspešne pridaní.',
	'SMILIES_CODE'				=> 'Kód smajlíka',
	'SMILIES_CONFIG'			=> 'Nastavenie smajlíkov',
	'SMILIES_DELETED'			=> 'Smajlík bol úspešne odstránený.',
	'SMILIES_EDIT'				=> 'Upraviť smajlíka',
	'SMILIE_NO_CODE'			=> 'Smajlík “%s” bol ignorovaný, pretože nebol vložený žiadny kód.',
	'SMILIE_NO_EMOTION'			=> 'Smajlík “%s” bol ignorovaný, pretože nebola vložená žiadna emócia.',
	'SMILIE_NO_FILE'			=> 'Smajlík “%s” bol ignorovaný, pretože súbor chýba.',
	'SMILIES_NONE_EDITED'		=> 'Žiadny smajlík nebol aktualizovaný.',
	'SMILIES_ONE_EDITED'		=> 'Smajlík bol úspešne aktualizovaný.',
	'SMILIES_EDITED'			=> 'Smajlíci boli úspešne aktualizovaní.',
	'SMILIES_EMOTION'			=> 'Emócia',
	'SMILIES_HEIGHT'			=> 'Výška smajlíka',
	'SMILIES_IMAGE'				=> 'Obrázok smajlíka',
	'SMILIES_IMPORTED'			=> 'Balík smajlíkov bol úspešne nainštalovaný.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Balík smajlíkov bol úspešne importovaný.',
	'SMILIES_LOCATION'			=> 'Umiestnenie smajlíka',
	'SMILIES_NOT_DISPLAYED'		=> 'Nasledujúce smajlíky nie sú zobrazené na stránke pre odoslanie príspevkov.',
	'SMILIES_ORDER'				=> 'Poradie smajlíka',
	'SMILIES_URL'				=> 'Obrázok smajlíka',
	'SMILIES_WIDTH'				=> 'Šírka smajlíka',

	'TOO_MANY_SMILIES'			=> 'Bol prekročený limit %d smajlíkov.',

	'WRONG_PAK_TYPE'	=> 'Zvolený balík neobsahuje potrebné dáta.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Z tohto kontrolného panela môžete pridávať, upravovať a odstraňovať slová, ktoré budú na vašich fórach automaticky cenzurované. Ľudia majú povolené registrovať sa s užívateľskými menami, ktoré obsahujú tieto slová. Zástupný znak (*) je možné použiť na nájdenie zhody, napr. *test* sa bude zhodovať so slovom netestovateľný, test* sa bude zhodovať so slovom testovanie, *test sa bude zhodovať so slovom predtest.',
	'ADD_WORD'				=> 'Pridať nové slovo',

	'EDIT_WORD'		=> 'Upraviť cenzurované slovo',
	'ENTER_WORD'	=> 'Musíte vložiť slovo a jeho náhradu.',

	'NO_WORD'	=> 'Neboli zvolené žiadne slová pre úpravu.',

	'REPLACEMENT'	=> 'Náhrada',

	'UPDATE_WORD'	=> 'Upraviť cenzurované slovo',

	'WORD'				=> 'Slovo',
	'WORD_ADDED'		=> 'Cenzurovaný výraz bol úspešne pridaný.',
	'WORD_REMOVED'		=> 'Cenzurovaný výraz bol úspešne odstránený.',
	'WORD_UPDATED'		=> 'Cenzurovaný výraz bol úspešne upravený.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Použitím tohto formulára môžete pridávať, upravovať, zobrazovať a mazať hodnosti.. Môžete tiež vytvoriť zvláštne hodnosti, ktoré môžu byť užívateľom priradené cez správu užívateľov.',
	'ADD_RANK'				=> 'Pridať novú hodnosť',

	'MUST_SELECT_RANK'		=> 'Musíte vybrať hodnosť.',

	'NO_ASSIGNED_RANK'		=> 'Nebola pridelená zvláštna hodnosť.',
	'NO_RANK_TITLE'			=> 'Nezvolili ste názov hodnosti.',
	'NO_UPDATE_RANKS'		=> 'Hodnosť bola úspešne odstránená. Neaktualizovali sa ale účty s touto hodnosťou, budete musieť ručne upraviť túto hodnosť na týchto účtoch.',

	'RANK_ADDED'			=> 'Hodnosť bola úspešne pridaná.',
	'RANK_IMAGE'			=> 'Obrázok hodnosti',
	'RANK_IMAGE_EXPLAIN'	=> 'Tu môžete definovať malý obrázok, ktorý bude zobrazený pri hodnosti. Cesta je relatívna ku koreňovej zložke phpBB.',
	'RANK_IMAGE_IN_USE'		=> '(používaná)',
  'RANK_MINIMUM'			=> 'Minimálny počet príspevkov',
	'RANK_REMOVED'			=> 'Hodnosť bola úspešne odstránená.',
	'RANK_SPECIAL'			=> 'Nastaviť ako zvláštnu hodnosť',
	'RANK_TITLE'			=> 'Názov hodnosti',
	'RANK_UPDATED'			=> 'Hodnosť bola úspešne upravená.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Tu môžete kontrolovať užívateľské mená, ktoré nebudú povolené na používanie. Nepovolené mená sa dajú definovať pomocou zástupného znaku *.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Môžete zakázať užívateľské meno pomocou zástupného symbolu * pre zhodu s akýmkoľvek znakom.',
	'ADD_DISALLOW_TITLE'	=> 'Pridať nepovolené meno',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Odstrániť nepovolené meno môžete kliknutím na meno v zozname a odoslaním.',
	'DELETE_DISALLOW_TITLE'		=> 'Odstrániť nepovolené meno',
	'DISALLOWED_ALREADY'		=> 'Zvolené meno už je zakázané.',
	'DISALLOWED_DELETED'		=> 'Nepovolené meno bolo úspešne odstránené.',
	'DISALLOW_SUCCESSFUL'		=> 'Nepovolené meno bolo úspešne pridané.',

	'NO_DISALLOWED'				=> 'Žiadne zakázané mená',
	'NO_USERNAME_SPECIFIED'		=> 'Nevybrali alebo nevložili ste žiadne užívateľské mená.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Tu môžete spravovať odôvodnenia, ktoré sú použité v hláseniach a správach o neschválení príspevkov. Vždy je nastavené jedno základné odôvodnenie (označené s *), ktoré nemôžete odstrániť. Toto odôvodnenie je zvyčajne použité v prípadoch, kedy nie je možné použiť vami vytvorené odôvodnenia.',
	'ADD_NEW_REASON'		=> 'Pridať nový dôvod',
	'AVAILABLE_TITLES'		=> 'Názvy dostupných preložených odôvodnení',

	'IS_NOT_TRANSLATED'			=> 'Odôvodnenie <strong>nebolo</strong> preložené.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Odôvodnenie <strong>nebolo</strong> preložené. Pokiaľ chcete poskytnúť preložené znenie, vytvorte odpovedajúcu položku v časti jazykových súborov pre odôvodnenie o hláseniach/zamietnutiach.',
	'IS_TRANSLATED'				=> 'Odôvodnenie bolo preložené.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Odôvodnenie bolo preložené. Pokiaľ je názov, ktorý je tu zvolený, obsiahnutý v jazykových súboroch, bude použitá preložená verzia.',

	'NO_REASON'					=> 'Odôvodnenie nebolo nájdené.',
	'NO_REASON_INFO'			=> 'Musíte zvoliť názov a popis odôvodnenia.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Nedá sa odstrániť prednastavené odôvodnenie „Ostatné“.',

	'REASON_ADD'				=> 'Pridať odôvodnenie hlásenia/zamietnutia',
	'REASON_ADDED'				=> 'Odôvodnenie hlásenia/zamietnutí bolo úspešne pridané.',
	'REASON_ALREADY_EXIST'		=> 'Odôvodnenie s týmto názvom už existuje, prosíme, zvoľte iný názov pre tento dôvod.',
	'REASON_DESCRIPTION'		=> 'Popis odôvodnenia',
	'REASON_DESC_TRANSLATED'	=> 'Zobrazený popis odôvodnenia',
	'REASON_EDIT'				=> 'Upraviť odôvodnenie hlásenia/zamietnutia',
	'REASON_EDIT_EXPLAIN'		=> 'Tu môžete pridať alebo upraviť odôvodnenie. Pokiaľ je odôvodnenie preložené, preložená verzia bude použitá namiesto popisu, ktorý tu zadáte.',
	'REASON_REMOVED'			=> 'Odôvodnenie hlásenia/zamietnutí bolo úspešne odstránené.',
	'REASON_TITLE'				=> 'Názov odôvodnenia',
	'REASON_TITLE_TRANSLATED'	=> 'Zobrazený názov odôvodnenia',
	'REASON_UPDATED'			=> 'Odôvodnenie hlásenia/zamietnutia bolo úspešne aktualizované.',

	'USED_IN_REPORTS'		=> 'Použité v nahláseniach',
));
?>
