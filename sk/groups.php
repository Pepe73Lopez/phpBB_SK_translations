<?php
/**
*
* @package language
* @authors PepeLopez, Fonzi
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

$lang = array_merge($lang, array(
	'ALREADY_DEFAULT_GROUP'				=> 'Zvolená skupina je už vašou východiskovou skupinou.',
	'ALREADY_IN_GROUP'					=> 'Už ste členom tejto skupiny.',
	'ALREADY_IN_GROUP_PENDING'			=> 'Už ste požiadali o členstvo v tejto skupine.',

	'CANNOT_JOIN_GROUP'					=> 'Nemôžete byť členom tejto skupiny.',
	'CANNOT_RESIGN_GROUP'				=> 'Nemôžete zrušiť svoje členstvo v tejto skupine.',
	'CHANGED_DEFAULT_GROUP'				=> 'Východisková skupina úspešne zmenená.',

	'GROUP_AVATAR'						=> 'Obrázok skupiny',
	'GROUP_CHANGE_DEFAULT'				=> 'Ste si istý, že chcete zmeniť vašu východiskovú skupinu na skupinu “%s”?',
	'GROUP_CLOSED'						=> 'Uzavretá',
	'GROUP_DESC'						=> 'Popis skupiny',
	'GROUP_HIDDEN'						=> 'Skrytá',
	'GROUP_INFORMATION'					=> 'Informácie o skupine',
	'GROUP_IS_CLOSED'					=> 'Táto skupina je uzavretá, nový členovia môžu byť prijatí len na základe pozvánky od vedúceho skupiny.',
	'GROUP_IS_FREE'						=> 'Táto skupina je otvorená, všetci noví záujemcovia o vstup do tejto skupiny sú vítaní.',
	'GROUP_IS_HIDDEN'					=> 'Táto skupina je skrytá, len členovia tejto skupiny môžu vidieť zoznam členov tejto skupiny.',
	'GROUP_IS_OPEN'						=> 'Táto skupina je otvorená, môžete sa k tejto skupine pridať.',
	'GROUP_IS_SPECIAL'					=> 'Toto je špeciálny typ skupiny, je spravovaná administrátormi portálu.',
	'GROUP_JOIN'						=> 'Stať sa členom skupiny',
	'GROUP_JOIN_CONFIRM'				=> 'Ste si istý, že sa chcete stať členom tejto skupiny?',
	'GROUP_JOIN_PENDING'				=> 'Požiadať o členstvo v skupine',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Ste si istý, že chcete požiadať o členstvo v tejto skupine?',
	'GROUP_JOINED'						=> 'Stali ste sa členom zvolenej skupiny.',
	'GROUP_JOINED_PENDING'				=> 'Požiadali ste o členstvo vo zvolenej skupine. Počkajte, kým vedúci skupiny schváli vaše členstvo.',
	'GROUP_LIST'						=> 'Spravovať užívateľov',
	'GROUP_MEMBERS'						=> 'Členovia skupiny',
	'GROUP_NAME'						=> 'Názov skupiny',
	'GROUP_OPEN'						=> 'Otvorená',
	'GROUP_RANK'						=> 'Hodnosť skupiny',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Vzdať sa členstva v skupine',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Ste si istý, že sa chcete vzdať členstva vo zvolenej skupine?',
	'GROUP_RESIGN_PENDING'				=> 'Zrušiť žiadosť o členstvo vo zvolenej skupine',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Ste si istý, že chcete zrušiť žiadosť o členstvo vo zvolenej skupine?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Členstvo vo zvolenej skupine bolo zrušené.',
	'GROUP_RESIGNED_PENDING'			=> 'Žiadosť o členstvo vo zvolenej skupine bola stiahnutá.',
	'GROUP_TYPE'						=> 'Typ skupiny',
	'GROUP_UNDISCLOSED'					=> 'Skrytá skupina',
	'FORUM_UNDISCLOSED'					=> 'Moderovanie skrytého fóra (fór)',

	'LOGIN_EXPLAIN_GROUP'				=> 'Pre zobrazenie informácií o skupine musíte byť prihlásený.',

	'NO_LEADERS'						=> 'Nie ste vedúcim žiadnej skupiny.',
	'NOT_LEADER_OF_GROUP'				=> 'Požiadavka nemôže byť uskutočnená, pretože nie ste vedúci zvolenej skupiny.',
	'NOT_MEMBER_OF_GROUP'				=> 'Požiadavka nemôže byť uskutočnená, pretože nie ste členom zvolenej skupiny alebo vaša žiadosť o členstvo v skupine ešte nebola schválená vedúcim skupiny.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'		=> 'Nemôžete sa vzdať členstva vašej východiskovej skupiny.',

	'PRIMARY_GROUP'						=> 'Hlavná skupina',

	'REMOVE_SELECTED'					=> 'Odstrániť označené',

	'USER_GROUP_CHANGE'					=> 'Zo skupiny “%1$s” do “%2$s”',
	'USER_GROUP_DEMOTE'					=> 'Odísť z postu vedúceho skupiny',
	'USER_GROUP_DEMOTE_CONFIRM'			=> 'Ste si istý, že chcete odísť z postu vedúceho skupiny?',
	'USER_GROUP_DEMOTED'				=> 'Vzdali ste sa postu vedúceho skupiny.',
));
