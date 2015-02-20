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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> 'hodinu',
	'30_MINS'		=> '30 minút',
	'6_HOURS'		=> '6 hodín',

	'ACP_BAN_EXPLAIN'	=> 'Tu môžete ovládať udeľovanie zákazov prístupu užívateľom, konkrétnym IP adresám alebo emailovým adresám. Tieto metódy zabránia prístupu užívateľovi s udeleným zákazom k akejkoľvek časti portálu. Môžete pridať odôvodnenie v dĺžke maximálne 3000 znakov, ktoré bude tiež zobrazené v zázname činností administrátorov. Taktiež môžete definovať dobu trvania udeleného zákazu prístupu. Ak chcete uviesť konkrétny dátum do kedy má byť zákaz udelený použite voľbu <span style="text-decoration: underline;">do -&gt;</span> s uvedením dátumu vo formáte <kbd>RRR-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Vyňať z ostaných udelených zákazov',
	'BAN_LENGTH'			=> 'Doba zákazu prístupu na portál',
	'BAN_REASON'			=> 'Dôvod',
	'BAN_GIVE_REASON'		=> 'Dôvod zobrazený užívateľovi',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Zoznam zákazov bol úspešne obnovený.',
	'BANNED_UNTIL_DATE'		=> 'do %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (do %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'				=> 'Udeliť zákaz prístupu na portál na základe jednej alebo viacerých emailových adries',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Označte ak chcete uvedenej alebo uvedeným emailovým adresám zároveň zrušiť v súčasnosti im udelené zákazy vstupu.',
	'EMAIL_BAN_EXPLAIN'		     => 'Ak chcete vložiť viac emailových adries, vložte každú na samostatný riadok. Ak má časť emailovej adresy reprezentovať ľubovoľnú sekvenciu znakov použite * , napríklad <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, a pod.',
	'EMAIL_NO_BANNED'			=> 'Žiadne udelené zákazy prístupu',
	'EMAIL_UNBAN'				=> 'Zrušiť udelené zákazy prístupu alebo vyňať zo zákazu konkrétne emailové adresy',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Môžete zrušiť udelený zákaz prístupu na portál viacerým emailovým adresám naraz použitím zodpovedajúcej kombinácie klávesnice a polohovacieho zariadenia (najčastejšie podržaním LCtrl a označovaním prvkov v zozname). Vyradené emailové adresy budú zvýraznené.',

	'IP_BAN'					=> 'Udeliť zákaz prístupu na portál na základe jednej alebo viacerých IP adries',
	'IP_BAN_EXCLUDE_EXPLAIN'	     => 'Označte ak chcete uvedenej alebo uvedeným IP adresám zároveň zrušiť v súčasnosti im udelené zákazy vstupu.',
	'IP_BAN_EXPLAIN'			=> 'Ak chcete vložiť viac IP adries, vložte každú na samostatný riadok. Ak má časť IP adresy reprezentovať ľubovoľnú sekvenciu čísel použite *, ak chcete určiť interval IP adries oddeľte počiatočnú a koncovú IP adresu pomlčkou, príklad 168.100.10.1-169.*.*.*',
	'IP_HOSTNAME'				=> 'IP addresses or hostnames',
	'IP_NO_BANNED'				=> 'Žiadne udelené zákazy prístupu',
	'IP_UNBAN'				=> 'Zrušiť udelené zákazy prístupu alebo vyňať zo zákazu konkrétne IP adresy',
	'IP_UNBAN_EXPLAIN'			=> 'Môžete zrušiť udelený zákaz prístupu na portál viacerým IP adresám naraz použitím zodpovedajúcej kombinácie klávesnice a polohovacieho zariadenia (najčastejšie podržaním LCtrl a označovaním prvkov v zozname). Vyradené IP adresy budú zvýraznené.',

	'LENGTH_BAN_INVALID'		=> 'Dátum musí byť vo formáte <kbd>RRR-MM-DD</kbd>.',

	'OPTIONS_BANNED'			=> 'Prístup zakázaný',
	'OPTIONS_EXCLUDED'			=> 'Okrem/Vylúčené',

	'PERMANENT'		          => 'Natrvalo',

	'UNTIL'					=> 'do',
	'USER_BAN'				=> 'Udeliť zákaz prístupu na portál jednému alebo viacerým užívateľským menám',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Označte ak chcete uvedenej alebo uvedeným užívateľským menám zároveň zrušiť v súčasnosti im udelené zákazy vstupu.',
	'USER_BAN_EXPLAIN'			=> 'Ak chcete vložiť viac užívateľských mien, vložte každé na samostatný riadok. Môžete tiež využiť funkciu <span style="text-decoration: underline;">Vyhľadať užívateľa</span>, ktorá je pod oknom editácie.',
	'USER_NO_BANNED'			=> 'Žiadne udelené zákazy prístupu',
	'USER_UNBAN'				=> 'Zrušiť udelený zákaz prístupu alebo vyradiť konkrétne užívateľské meno',
	'USER_UNBAN_EXPLAIN'		=> 'Môžete zrušiť udelený zákaz prístupu na portál viacerým užívateľom naraz použitím zodpovedajúcej kombinácie klávesnice a polohovacieho zariadenia (najčastejšie podržaním LCtrl a označovaním prvkov v zozname). Vyradené užívateľské mená budú zvýraznené.',
));
