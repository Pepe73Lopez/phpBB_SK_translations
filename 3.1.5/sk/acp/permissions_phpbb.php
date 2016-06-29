<?php
/**
*
*
* @authors PepeLopez, Fonzi
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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Akcie',
	'ACL_CAT_CONTENT'		=> 'Obsah',
	'ACL_CAT_FORUMS'		=> 'Fóra',
	'ACL_CAT_MISC'			=> 'Rôzne',
	'ACL_CAT_PERMISSIONS'	=> 'Oprávnenia',
	'ACL_CAT_PM'			=> 'Súkromné správy',
	'ACL_CAT_POLLS'			=> 'Hlasovania',
	'ACL_CAT_POST'			=> 'Príspevky',
	'ACL_CAT_POST_ACTIONS'	=> 'Práca s príspevkami',
	'ACL_CAT_POSTING'		=> 'Prispievanie',
	'ACL_CAT_PROFILE'		=> 'Profil',
	'ACL_CAT_SETTINGS'		=> 'Nastavenia',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Práca s témami',
	'ACL_CAT_USER_GROUP'	=> 'Užívatelia &amp; Skupiny',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'		=> 'Môže zobraziť profily, zoznam členov a zoznam on-line užívateľov',
	'ACL_U_CHGNAME'			=> 'Môže meniť užívateľské meno',
	'ACL_U_CHGPASSWD'		=> 'Môže meniť heslo',
	'ACL_U_CHGEMAIL'		=> 'Môže meniť e-mailovú adresu',
	'ACL_U_CHGAVATAR'		=> 'Môže meniť avatar',
	'ACL_U_CHGGRP'			=> 'Môže meniť prednastavenú skupinu',
	'ACL_U_CHGPROFILEINFO'	=> 'Môže meniť profilové informácie polí',

	'ACL_U_ATTACH'			=> 'Môže pripájať súbory',
	'ACL_U_DOWNLOAD'		=> 'Môže sťahovať súbory',
	'ACL_U_SAVEDRAFTS'		=> 'Môže ukladať koncepty',
	'ACL_U_CHGCENSORS'		=> 'Môže vypnúť cenzúru slov',
	'ACL_U_SIG'				=> 'Môže použiť podpis',

	'ACL_U_SENDPM'			=> 'Môže posielať súkromné správy',
	'ACL_U_MASSPM'			=> 'Môže posielať správy viacerým užívateľom',
	'ACL_U_MASSPM_GROUP'	=> 'Môže posielať správy skupinám',
	'ACL_U_READPM'			=> 'Môže čítať súkromné správy',
	'ACL_U_PM_EDIT'			=> 'Môže upravovať vlastné súkromné správy',
	'ACL_U_PM_DELETE'		=> 'Môže odstrániť súkromné správy z vlastnej zložky',
	'ACL_U_PM_FORWARD'		=> 'Môže preposielať súkromné správy',
	'ACL_U_PM_EMAILPM'		=> 'Môže poslať súkromné správy e-mailom',
	'ACL_U_PM_PRINTPM'		=> 'Môže vytlačiť súkromné správy',
	'ACL_U_PM_ATTACH'		=> 'Môže pripájať súbory k súkromným správam',
	'ACL_U_PM_DOWNLOAD'		=> 'Môže sťahovať súbory v súkromných správach',
	'ACL_U_PM_BBCODE'		=> 'Môže použiť BB kódy v súkromným správach',
	'ACL_U_PM_SMILIES'		=> 'Môže použiť smajlíkov v súkromných správach',
	'ACL_U_PM_IMG'			=> 'Môže použiť [img] BB kód v súkromných správach',
	'ACL_U_PM_FLASH'		=> 'Môže použiť [flash] BB kód v súkromných správach',

	'ACL_U_SENDEMAIL'		=> 'Môže posielať e-maily',
	'ACL_U_SENDIM'			=> 'Môže posielať instantné správy',
	'ACL_U_IGNOREFLOOD'		=> 'Môže ignorovať časové obmedzenia',
	'ACL_U_HIDEONLINE'		=> 'Môže skryť online stav',
	'ACL_U_VIEWONLINE'		=> 'Môže vidieť skrytých online užívateľov',
	'ACL_U_SEARCH'			=> 'Môže vyhľadávať na fóre',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'			=> 'Môže vidieť fórum',
	'ACL_F_READ'			=> 'Môže čítať fórum',
	'ACL_F_SEARCH'			=> 'Môže vyhľadávať na fóre',
	'ACL_F_SUBSCRIBE'		=> 'Môže sledovať fóra',
	'ACL_F_PRINT'			=> 'Môže tlačiť témy',
	'ACL_F_EMAIL'			=> 'Môže posielať témy e-mailom',
	'ACL_F_BUMP'			=> 'Môže oživovať témy',
	'ACL_F_USER_LOCK'		=> 'Môže zamykať vlastné témy',
	'ACL_F_DOWNLOAD'		=> 'Môže sťahovať súbory',
	'ACL_F_REPORT'			=> 'Môže nahlasovať príspevky',

	'ACL_F_POST'			=> 'Môže zakladať nové témy',
	'ACL_F_STICKY'			=> 'Môže odosielať dôležité',
	'ACL_F_ANNOUNCE'		=> 'Môže odosielať oznámenia',
	'ACL_F_REPLY'			=> 'Môže odpovedať na témy',
	'ACL_F_EDIT'			=> 'Môže upravovať vlastné príspevky',
	'ACL_F_DELETE'			=> 'Môže upravovať vlastné príspevk',
	'ACL_F_SOFTDELETE'		=> 'Môže mäkko mazať vlastné príspevky<br /><em>Moderátori, ktorí majú oprávnenie schvaľovať príspevky, môžu obnoviť mäkko zmazané príspevky</em>',
	'ACL_F_IGNOREFLOOD' 	=> 'Môže vyhľadávať nad limit',
	'ACL_F_POSTCOUNT'		=> 'Počítat príspevky do celkového počtu<br /><em>Prosíme, uvedomte si, že toto ovplyvní len nové príspevky.</em>',
	'ACL_F_NOAPPROVE'		=> 'Môže prispievať bez schválenia príspevkov',

	'ACL_F_ATTACH'			=> 'Môže pripájať súbory',
	'ACL_F_ICONS'			=> 'Môže použiť ikony tém/príspevkov',
	'ACL_F_BBCODE'			=> 'Môže použiť BBKód',
	'ACL_F_FLASH'			=> 'Môže použiť [flash] BB kód',
	'ACL_F_IMG'				=> 'Môže použiť [img] BB kód',
	'ACL_F_SIGS'			=> 'Môže použiť podpis',
	'ACL_F_SMILIES'			=> 'Môže použiť smajlíkov',

	'ACL_F_POLL'			=> 'Môže vytvárať hlasovania',
	'ACL_F_VOTE'			=> 'Môže hlasovať v hlasovaniach',
	'ACL_F_VOTECHG'			=> 'Môže zmeniť existujúce hlasovanie',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'			=> 'Môže upravovať príspevky',
	'ACL_M_DELETE'			=> 'Môže mazať príspevky',
	'ACL_M_SOFTDELETE'		=> 'Môže mäkko mazať príspevky<br /><em>Moderátori, ktorí majú oprávnenie schvaľovať príspevky, môžu obnoviť mäkko zmazané príspevky.</em>',
	'ACL_M_APPROVE'			=> 'Môže schvaľovať príspevky',
	'ACL_M_REPORT'			=> 'Môže uzatvárať a mazať hlásenia',
	'ACL_M_CHGPOSTER'		=> 'Môže zmeniť autora príspevku',

	'ACL_M_MOVE'			=> 'Môže presúvať témy',
	'ACL_M_LOCK'			=> 'Môže zamykať témy',
	'ACL_M_SPLIT'			=> 'Môže rozdeľovať témy',
	'ACL_M_MERGE'			=> 'Môže spájať témy',

	'ACL_M_INFO'			=> 'Môže zobraziť detaily príspevkov',
	'ACL_M_WARN'			=> 'Môže udeliť varovanie<br /><em>Toto je globálne nastavenie, nezávisí na fórach.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'				=> 'Môže spravovať bany<br /><em>Toto je globálne nastavenie, nezávisí na fórach.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'			=> 'Môže meniť nastavenia fóra/skontrolovať aktualizácie',
	'ACL_A_SERVER'			=> 'Môže meniť nastavenia servera/komunikácie',
	'ACL_A_JABBER'			=> 'Môže meniť nastavenie Jabbera',
	'ACL_A_PHPINFO'			=> 'Môže zobraziť informácie o php',

	'ACL_A_FORUM'			=> 'Môže spravovať fóra',
	'ACL_A_FORUMADD'		=> 'Môže pridávať nové fóra',
	'ACL_A_FORUMDEL'		=> 'Môže mazať fóra',
	'ACL_A_PRUNE'			=> 'Môže prečisťovať fóra',

	'ACL_A_ICONS'			=> 'Môže meniť ikony tém/príspevkov a smajlíkov',
	'ACL_A_WORDS'			=> 'Môže upravovať cenzúru slov',
	'ACL_A_BBCODE'			=> 'Môže definovať BB kódy',
	'ACL_A_ATTACH'			=> 'Môže meniť nastavenia ohľadom príloh',

	'ACL_A_USER'			=> 'Môže spravovať užívateľov<br /><em>Toto zahŕňa aj zobrazenie user agenta prehliadača, v zozname Kto je online.</em>',
	'ACL_A_USERDEL'			=> 'Môže mazať/prečisťovať užívateľov',
	'ACL_A_GROUP'			=> 'Môže spravovať skupiny',
	'ACL_A_GROUPADD'		=> 'Môže pridávať nové skupiny',
	'ACL_A_GROUPDEL'		=> 'Môže mazať skupiny',
	'ACL_A_RANKS'			=> 'Môže spravovať hodnosti',
	'ACL_A_PROFILE'			=> 'Môže spravovať vlastné polia v profile',
	'ACL_A_NAMES'			=> 'Môže spravovať nepovolené mená',
	'ACL_A_BAN'				=> 'Môže spravovať bany',

	'ACL_A_VIEWAUTH'			=> 'Môže zobrazovať masky oprávnení',
	'ACL_A_AUTHGROUPS'		=> 'Môže meniť oprávnenia pre jednotlivé skupiny',
	'ACL_A_AUTHUSERS'		=> 'Môže meniť oprávnenia pre jednotlivých užívateľov',
	'ACL_A_FAUTH'			=> 'Môže meniť oprávnenia fór',
	'ACL_A_MAUTH'			=> 'Môže meniť moderátorské oprávnenia',
	'ACL_A_AAUTH'			=> 'Môže meniť administrátorské oprávnenia',
	'ACL_A_UAUTH'			=> 'Môže meniť užívateľské oprávnenia',
	'ACL_A_ROLES'			=> 'Môže spravovať roly',
	'ACL_A_SWITCHPERM'		=> 'Môže používať oprávnenia ostatných',

	'ACL_A_STYLES'			=> 'Môže spravovať štýly',
	'ACL_A_EXTENSIONS'		=> 'Môže spravovať rozšírenia',
	'ACL_A_VIEWLOGS'		=> 'Môže zobraziť záznamy',
	'ACL_A_CLEARLOGS'		=> 'Môže premazávať záznamy',
	'ACL_A_MODULES'			=> 'Môže spravovať moduly',
	'ACL_A_LANGUAGE'		=> 'Môže spravovať jazykové balíky',
	'ACL_A_EMAIL'			=> 'Môže odosielať hromadné e-maily',
	'ACL_A_BOTS'			=> 'Môže spravovať botov',
	'ACL_A_REASONS'			=> 'Môže meniť dôvody schválení/odmienutí',
	'ACL_A_BACKUP'			=> 'Môže obnovovať/zálohovať databázu',
	'ACL_A_SEARCH'			=> 'Môže spravovať nastavenia vyhľadávania',
));
