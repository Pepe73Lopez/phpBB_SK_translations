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

$lang = array_merge($lang, array(
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Z tohto panela môžete ovládať všetky vaše užívateľské skupiny. Môžete mazať, vytvárať a upravovať existujúce skupiny. Navyše môžete zvoliť lídrov skupiny, meniť status skupiny (otvorená/skrytá/uzavretá) a nastaviť meno a popis skupiny.',
	'ADD_USERS'						=> 'Pridať užívateľov',
	'ADD_USERS_EXPLAIN'				=> 'Tu môžete pridať nových užívateľov do skupiny. Môžete vybrať, či sa skupina stane pre užívateľa predvolená. Taktiež ich môžete definovať ako lídrov skupiny. Prosíme, napíšte každé meno do nového riadka.',

	'COPY_PERMISSIONS'				=> 'Skopírovať oprávnenia z',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Skupina bude mať po vytvorení rovnaké oprávnenia ako tá, ktorú ste tu zvolili.',
	'CREATE_GROUP'					=> 'Vytvoriť novú skupinu',

	'GROUPS_NO_MEMBERS'				=> 'Táto skupina nemá žiadnych členov',
	'GROUPS_NO_MODS'				=> 'Neboli definovaní žiadni lídri skupiny',

	'GROUP_APPROVE'					=> 'Schváliť člena',
	'GROUP_APPROVED'				=> 'Schválení členovia',
	'GROUP_AVATAR'					=> 'Avatar skupiny',
	'GROUP_AVATAR_EXPLAIN'			=> 'Tento obrázok bude zobrazený v kontrolnom paneli skupiny.',
	'GROUP_CLOSED'					=> 'Uzavretá',
	'GROUP_COLOR'					=> 'Farba skupiny',
	'GROUP_COLOR_EXPLAIN'			=> 'Definuje, v ktorej farbe sa budú zobrazovať užívateľské mená členov, nechajte prázne, aby sa zobrazovala predvolená užívateľská farba.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Ste si istí, že chcete pridať užívateľa %1$s do skupiny?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Ste si istí, že chcete pridať užívateľov %1$s do skupiny?',
	'GROUP_CREATED'					=> 'Skupina bola úspešne vytvorená.',
	'GROUP_DEFAULT'					=> 'Nastaviť skupinu pre člena ako predvolenú',
	'GROUP_DEFS_UPDATED'			=> 'Pre vybraných užívateľov bola skupina nastavená ako predvolená.',
	'GROUP_DELETE'					=> 'Zmazať člena zo skupiny',
	'GROUP_DELETED'					=> 'Skupina zmazaná a prednastavené skupiny úspešne zmenené.',
	'GROUP_DEMOTE'					=> 'Zrušiť lídra skupiny',
	'GROUP_DESC'					=> 'Popis skupiny',
	'GROUP_DETAILS'					=> 'Detaily skupiny',
	'GROUP_EDIT_EXPLAIN'			=> 'Tu môžete upravovať existujúcu skupinu. Môžete zmeniť názov, popis a typ (otvorená, uzavretá, atď.). Môžete tiež zmeniť niektoré skupinové nastavenia ako farbu, hodnosť a pod. Zmena týchto nastavení prepíše užívateľove nastavenia. Prosíme, uvedomte si, že kým nenastavíte potrebné užívateľské oprávnenia, členovia skupiny môžu obísť nastavenia skupinového avatara.',
	'GROUP_ERR_USERS_EXIST'			=> 'Zvolení užívatelia sú už členmi tejto skupiny',
	'GROUP_FOUNDER_MANAGE'			=> 'Spravujú iba zakladatelia',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Obmedziť správu skupiny iba pre zakladateľa skupiny. Užívatelia s patričnými skupinovými oprávneniami môžu vidieť túto skupinu rovnako ako jej členov.',
	'GROUP_HIDDEN'					=> 'Skrytá',
	'GROUP_LANG'					=> 'Jazyk skupiny',
	'GROUP_LEAD'					=> 'Lídri skupiny',
	'GROUP_LEADERS_ADDED'			=> 'Nový lídri skupiny boli pridaní.',
	'GROUP_LEGEND'					=> 'Zobraziť skupinu v legende',
	'GROUP_LIST'					=> 'Aktuálni členovia',
	'GROUP_LIST_EXPLAIN'			=> 'Toto je kompletný zoznam členov tejto skupiny. Môžete zmazať členov (až na niektoré špeciálne skupiny) alebo ich pridať, podľa toho, ako chcete.',
	'GROUP_MEMBERS'					=> 'Členovia skupiny',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Toto je kompletný zoznam členov tejto užívateľskej skupiny. To zahrňuje oddelené sekcie pre lídrov, čakajúcich a existujúcich členov. Tu môžete upravovať všetky aspekty toho, kto má členstvo v tejto skupine a aká je ich rola. Pre zrušenie lídra skupiny, no jeho ponechanie v skupine použite radšej možnosť degradovať lídra skupiny namiesto vymazania. Podobne môžete použiť funkciu Povýšiť na lídra skupiny.',
	'GROUP_MESSAGE_LIMIT'			=> 'Limit súkromných správ skupiny na zložku',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Toto nastavenie prepíše nastavenie súkromých správ na zložku pre jednotlivých užívateľov. Hodnota 0 znamená, že sa použije predvolená hodnota pre užívateľa.',
	'GROUP_MODS_ADDED'				=> 'Nový líder skupiny bol úspešne pridaný.',
	'GROUP_MODS_DEMOTED'			=> 'Lídri skupiny boli úspešne zrušení.',
	'GROUP_MODS_PROMOTED'			=> 'Členovia skupiny boli úspešne povýšení.',
	'GROUP_NAME'					=> 'Názov skupiny',
	'GROUP_NAME_TAKEN'				=> 'Vami zvolený názov skupiny sa už používa. Vyberte, prosím, iný.',
	'GROUP_OPEN'					=> 'Otvoriť',
	'GROUP_PENDING'					=> 'Členovia čakajúci na vstup',
	'GROUP_MAX_RECIPIENTS'			=> 'Maximálny počet príjemcov jednej súkromnej správy',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Maximálny počet príjemcov jednej súkromnej správy. Nastavte 0 pre použitie globálneho nastavenia.',
	'GROUP_OPTIONS_SAVE'			=> 'Nastavenia pre celu skupinu',
  'GROUP_PROMOTE'					=> 'Povýšiť na lídra skupiny',
	'GROUP_RANK'					=> 'Hodnosť skupiny',
	'GROUP_RECEIVE_PM'				=> 'Skupina môže prijímať súkromné právy',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Berte na vedomie, že skryté skupiny nikdy nemôžu prijímať správy pre skupinu, nezávisle od tohto nastavenia.',
	'GROUP_REQUEST'					=> 'Žiadosť',
	'GROUP_SETTINGS_SAVE'			=> 'Nastavenia pre celú skupinu',
	'GROUP_SKIP_AUTH'							=> 'Vyňať lídra skupiny z oprávnení',
	'GROUP_SKIP_AUTH_EXPLAIN'			=> 'Ak je toto nastavené, líder skupiny nezdieľa oprávnenia z tejto skupiny',
  'GROUP_TYPE'					=> 'Typ skupiny',
	'GROUP_TYPE_EXPLAIN'			=> 'Toto nastavenie určuje, ktorí užívatelia môžu vstúpiť alebo prezerať skupinu.',
	'GROUP_UPDATED'					=> 'Nastavenia skupiny boli úspešne aktualizované.',

	'GROUP_USERS_ADDED'				=> 'Noví užívatelia boli úspešne pridaní do skupiny.',
	'GROUP_USERS_EXIST'				=> 'Označení členovia už sú členmi.',
	'GROUP_USERS_REMOVE'			=> 'Užívatelia boli vymazaní a nové predvolené nastavenia boli úspešne nastavené.',
	
	'LEGEND_EXPLAIN'				=> 'These are the groups which are displayed in the group legend:',
	'LEGEND_SETTINGS'				=> 'Legend settings',
	'LEGEND_SORT_GROUPNAME'			=> 'Sort legend by group name',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> 'The order below is ignored when this option is enabled.',

	'MANAGE_LEGEND'			=> 'Manage group legend',
	'MANAGE_TEAMPAGE'		=> 'Manage teampage',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Nastaviť skupinu ako prednastavenú pre všetkých členov.',
	'MEMBERS'				=> 'Členovia',

	'NO_GROUP'					=> 'Nebola zvolená žiadna skupina.',
	'NO_GROUPS_CREATED'			=> 'Zatiaľ neboli vytvorené žiadne skupiny.',
	'NO_PERMISSIONS'			=> 'Nekopírovať oprávnenia',
	'NO_USERS'					=> 'Nevložili ste žiadnych užívateľov.',
  'NO_USERS_ADDED'			=> 'Žiadni užívatelia neboli pridaní do skupiny.',
  'NO_VALID_USERS'			=> 'Nevložili ste žiadneho užívateľa vhodného pre požadovanú akciu.',

	'SPECIAL_GROUPS'			=> 'Preddefinované skupiny',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Preddefinované skupiny sú špeciálne skupiny, nemôžu byť zmazané, alebo priamo upravované. Môžete však pridávať užívateľov a meniť základné nastavenia.',

	'TEAMPAGE'					=> 'Teampage',
	'TEAMPAGE_DISP_ALL'			=> 'All memberships',
	'TEAMPAGE_DISP_DEFAULT'		=> 'User’s default group only',
	'TEAMPAGE_DISP_FIRST'		=> 'First membership only',
	'TEAMPAGE_EXPLAIN'			=> 'These are the groups which are displayed on the teampage:',
	'TEAMPAGE_FORUMS'			=> 'Display moderated forums',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'If set to yes, moderators will have a list with all of the forums where they have moderator permissions displayed in their row. This can be very database intensive for big boards.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Display user memberships',
	'TEAMPAGE_SETTINGS'			=> 'Teampage settings',
	
	'TOTAL_MEMBERS'				=> 'Členov',

	'USERS_APPROVED'				=> 'Užívatelia úspešne prijatí.',
	'USER_DEFAULT'					=> 'Prednastavená pre užívateľa',
	'USER_DEF_GROUPS'				=> 'Skupiny definované užívateľom',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Toto sú skupiny vytvorené vami alebo inými administrátormi. Môžete upravovať členstvo a vlastnosti skupiny, alebo prípadne zmazať skupinu.',
	'USER_GROUP_DEFAULT'			=> 'Nastaviť ako prednastavenú skupinu',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Vybraním tejto možnosti, nastavíte danú skupinu ako prednastavenú pre vybraných užívateľov.',
	'USER_GROUP_LEADER'				=> 'Nastaviť ako lídra skupiny',
));

?>
