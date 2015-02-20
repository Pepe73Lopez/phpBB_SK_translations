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
	'ACTION'				=> 'Akcia',
	'ACTION_NOTE'			=> 'Akcia/Poznámka',
	'ADD_FEEDBACK'			=> 'Pridať záznam',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Ak chcete v tejto súvislosti niečo doplniť vyplňte nasledujúci formulár. Použite prostý text, nepoužívajte HTML ani BBCode.',
	'ADD_WARNING'			=> 'Pridať výstrahu',
	'ADD_WARNING_EXPLAIN'	=> 'Ak chcete užívateľovi udeliť výstrahu vyplňte nasledovný formulár. Použite prostý text, nepoužívajte HTML ani BBCode.',
	'ALL_ENTRIES'			=> 'Všetky príspevky',
	'ALL_NOTES_DELETED'		=> 'Odstránené všetky záznamy užívateľa.',
	'ALL_REPORTS'			=> 'Všetky sťažnosti',
	'ALREADY_REPORTED'		=> 'Tento príspevok už bol nahlásený.',
	'ALREADY_REPORTED_PM'	=> 'Táto súkromná správa už bola nahlásená.',
	'ALREADY_WARNED'		=> 'Výstraha za tento príspevok už bolo udelené.',
	'APPROVE'				=> 'Schváliť',
	'APPROVE_POST'			=> 'Schváliť príspevok',
	'APPROVE_POST_CONFIRM'	=> 'Ste si istý, že chcete schváliť tetno príspevok?',
	'APPROVE_POSTS'		=> 'Schváliť príspevky',
	'APPROVE_POSTS_CONFIRM'	=> 'Ste si istý, že chcete schváliť označené príspevky?',
	'APPROVE_TOPIC'		=> 'Schváliť tému',
	'APPROVE_TOPIC_CONFIRM'	=> 'Ste si istý, že chcete schváliť túto tému?',
	'APPROVE_TOPICS'		=> 'Schváliť témy',
	'APPROVE_TOPICS_CONFIRM' => 'Ste si istý, že chcete schváliť označené témy?',

	'CANNOT_MOVE_SAME_FORUM' => 'Nemôžete presunúť tému do fóra, ku ktorému práve patrí.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Nemôžete udeliť výstrahu neregistorvanému užívateľovi.',
	'CANNOT_WARN_SELF'		=> 'Nemôžete udeliť výstrahu sami sebe.',
	'CAN_LEAVE_BLANK'		=> 'Toto môže zostať nevyplnené. Ak ste však nezvolili ani jeden z vyššie dôvodov, je potrebné doplniť do tohoto poľa ďalšie informácie.',
	'CHANGE_POSTER'		=> 'Zmeniť prispievateľa',
	'CLOSE_PM_REPORT'		=> 'Uzavrieť sťažnosť na súkromnú správu',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Ste si istý, že chcete uzavrieť sťažnosť na túto súkromnú správu?',
	'CLOSE_PM_REPORTS'		=> 'Uzavrieť všetky sťažnosti na súkromné správy',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Ste si istý?',
	'CLOSE_REPORT'			=> 'Uzavrieť sťažnosť',
	'CLOSE_REPORT_CONFIRM'	=> 'Ste si istý?',
	'CLOSE_REPORTS'		=> 'Uzavrieť všetky sťažnosti',
	'CLOSE_REPORTS_CONFIRM'	=> 'Ste si istý?',

	'DELETE_PM_REPORT'			=> 'Zmazať sťažnosť na súkromnú správu',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Ste si istý?',
	'DELETE_PM_REPORTS'			=> 'Zmazať všetky sťažnosti na súkromné správy',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Ste si istý?',
	'DELETE_POSTS'				=> 'Zmazať príspevky',
	'DELETE_REPORT'			=> 'Zmazať sťažnosť',
	'DELETE_REPORT_CONFIRM'		=> 'Ste si istý?',
	'DELETE_REPORTS'			=> 'Zmazať všetky sťažnosti',
	'DELETE_REPORTS_CONFIRM'	     => 'Ste si istý?',
	'DELETE_SHADOW_TOPIC'		=> 'Zmazať tieňovú tému',
	'DELETE_TOPICS'			=> 'Zmazať označené témy',
	'DISAPPROVE'				=> 'Zamietnuť',
	'DISAPPROVE_REASON'			=> 'Dôvod zamietnutia',
	'DISAPPROVE_POST'			=> 'Zamietnuť príspevok',
	'DISAPPROVE_POST_CONFIRM'	=> 'Ste si istý?',
	'DISAPPROVE_POSTS'			=> 'Zamietnuť všetky príspevky',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Ste si istý?',
	'DISPLAY_LOG'				=> 'Zobraziť položky za',
	'DISPLAY_OPTIONS'			=> 'Zobraziť možnosti',

	'EMPTY_REPORT'					=> 'Musíte vložiť popis, keďže ste si vybrali toto odôvodnenie.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Jedna alebo viac tém bolo odstránených z databázy, pretože boli prázdne.',

	'FEEDBACK'				=> 'Spätná väzba',
	'FORK'					=> 'Skopírovať',
	'FORK_TOPIC'			     => 'Skopírovať tému',
	'FORK_TOPIC_CONFIRM'	     => 'Ste si istý?',
	'FORK_TOPICS'			     => 'Skopírovať označené témy',
	'FORK_TOPICS_CONFIRM'	     => 'Ste si istý?',
	'FORUM_DESC'			     => 'Popis',
	'FORUM_NAME'			     => 'Názov fóra',
	'FORUM_NOT_EXIST'		     => 'Označnené fórum neexistuje.',
	'FORUM_NOT_POSTABLE'	     => 'Do označeného fóra sa nedá prispievať.',
	'FORUM_STATUS'			     => 'Stav fóra',
	'FORUM_STYLE'			     => 'Štýl fóra',

	'GLOBAL_ANNOUNCEMENT'	=> 'Oznámenie pre celý portál',

	'IP_INFO'				=> 'Informácie o IP adrese',
	'IPS_POSTED_FROM'		=> 'IP adresa užívateľa, z ktorej boli príspevky odoslané',

	'LATEST_LOGS'				=> 'Posledných 5 záznamov',
	'LATEST_REPORTED'			=> 'Posledných 5 sťažností',
	'LATEST_REPORTED_PMS'		=> 'Posledných 5 nahlásených PM',
	'LATEST_UNAPPROVED'			=> 'Posledných 5 príspevkov čakajúcich na schválenie',
	'LATEST_WARNING_TIME'		=> 'Posledná udelená výstraha',
	'LATEST_WARNINGS'			=> 'Posledných 5 udelených výstrah',
	'LEAVE_SHADOW'				=> 'Ponechať tieňovú kópiu v pôvodnom fóre',
	'LIST_REPORTS'				=> array(
		1	=> '%d sťažnosť',
		2	=> '%d sťažnosti',
          3	=> '%d sťažností',
	),
	'LOCK'					=> 'Zamknúť',
	'LOCK_POST_POST'			=> 'Zamknúť príspevok',
	'LOCK_POST_POST_CONFIRM'	     => 'Ste si istý?',
	'LOCK_POST_POSTS'			=> 'Zamknúť označené príspevky',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Ste si istý?',
	'LOCK_TOPIC_CONFIRM'		=> 'Ste si istý?',
	'LOCK_TOPICS'				=> 'Zamknúť označené témy',
	'LOCK_TOPICS_CONFIRM'		=> 'Ste si istý?',
	'LOGS_CURRENT_TOPIC'		=> 'Zobrazené záznamy z:',
	'LOGIN_EXPLAIN_MCP'			=> 'Aby ste mohli moderovať toto fórum, musíte sa prihlásiť.',
	'LOGVIEW_VIEWTOPIC'			=> 'Zobraziť témy',
	'LOGVIEW_VIEWLOGS'			=> 'Zobraziť záznam témy',
	'LOGVIEW_VIEWFORUM'			=> 'Zobraziť fóra',
	'LOOKUP_ALL'				=> 'Vyhľadať všetky IP adresy',
	'LOOKUP_IP'				=> 'Vyhľadať IP adresu',

	'MARKED_NOTES_DELETED'		=> 'Označené záznamy užívateľa boli odstránené.',

	'MCP_ADD'					=> 'Udeliť výstrahu',

	'MCP_BAN'					=> 'Udelovanie zákazov',
	'MCP_BAN_EMAILS'			=> 'Udeliť zákaz emailovým adresám',
	'MCP_BAN_IPS'				=> 'Udeliť zákaz IP adresám',
	'MCP_BAN_USERNAMES'			=> 'Udeliť zákaz užívateľom',

	'MCP_LOGS'					=> 'Záznam činností moderátorov',
	'MCP_LOGS_FRONT'				=> 'Hlavná strana',
	'MCP_LOGS_FORUM_VIEW'			=> 'Záznamy činností vo fórach',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Záznamy činností v témach',

	'MCP_MAIN'					=> 'Základný prehľad',
	'MCP_MAIN_FORUM_VIEW'			=> 'Zobraziť fóra',
	'MCP_MAIN_FRONT'				=> 'Hlavná strana',
	'MCP_MAIN_POST_DETAILS'			=> 'Detaily príspevku',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Zobraziť témy',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Zmeniť na “Oznámenie”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Ste si istý?',
	'MCP_MAKE_ANNOUNCEMENTS'		     => 'Zmeniť označené témy na “Oznámenie”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'   => 'Ste si istý?',
	'MCP_MAKE_GLOBAL'				=> 'Zmeniť na “Oznámenie pre celý portál”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Ste si istý?',
	'MCP_MAKE_GLOBALS'				=> 'Zmeniť označené témy na “Oznámenie pre celý portál”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Ste si istý?',
	'MCP_MAKE_STICKY'				=> 'Zmeniť na “Pripnutie na začiatok zoznamu tém”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Ste si istý?',
	'MCP_MAKE_STICKIES'				=> 'Zmeniť označené témy na “Pripnutie na začiatok zoznamu tém”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Ste si istý?',
	'MCP_MAKE_NORMAL'				=> 'Zmeniť na “Obyčajnú tému”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Ste si istý?',
	'MCP_MAKE_NORMALS'				=> 'Zmeniť označené témy na “Obyčajnú tému”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Ste si istý?',

	'MCP_NOTES'					=> 'Záznamy užívateľa',
	'MCP_NOTES_FRONT'				=> 'Hlavná strana',
	'MCP_NOTES_USER'				=> 'Detaily užívateľa',

	'MCP_POST_REPORTS'				=> 'Sťažnosti napísané k tomuto príspevku',

	'MCP_PM_REPORTS'				=> 'Nahlásené súkromné správy',
	'MCP_PM_REPORT_DETAILS'			=> 'Detaily sťažnosti na súkromnú správu',
	'MCP_PM_REPORTS_CLOSED'			=> 'Vyriešené sťažnosti - PM',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Toto je zoznam sťažností na odoslané súkromné správy, ktoré už boli vyriešené a sú uzatvorené.',
	'MCP_PM_REPORTS_OPEN'			=> 'Nevyriešené sťažnosti - PM',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	     => 'Toto je zoznam sťažností na odoslané súkromné správy, ktoré čakajú na doriešenie.',

	'MCP_REPORTS'					=> 'Nahlásené sťažnosti',
	'MCP_REPORT_DETAILS'			=> 'Detaily sťažnosti',
	'MCP_REPORTS_CLOSED'			=> 'Vyriešené sťažnosti - príspevky',
	'MCP_REPORTS_CLOSED_EXPLAIN'	     => 'Toto je zoznam sťažností na zverejnené príspevky, ktoré už boli vyriešené a sú uzatvorené.',
	'MCP_REPORTS_OPEN'				=> 'Nevyriešené sťažnosti - príspevky',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Toto je zoznam sťažností na zverejnené príspevky, ktoré čakajú na doriešenie.',

	'MCP_QUEUE'						=> 'Čakajúce na schválenie',
	'MCP_QUEUE_APPROVE_DETAILS'			=> 'Schváliť podrobnosti',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Príspevky čakajúce na schválenie',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Toto je zoznam príspevkov, ktoré čakajú na schválenie, aby mohli byť uverejnené.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Témy čakajúce na schválenie',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Toto je zoznam tém, ktoré čakajú na schválenie, aby mohli byť uverejnené.',
	'MCP_QUEUE_DELETED_POSTS'			=> 'Odstránené príspevky',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> 'Toto je zoznam odstránených príspevkov. Tu ich môžete obnoviť alebo natrvalo zmazať.',
	'MCP_QUEUE_DELETED_TOPICS'			=> 'Odstránené témy',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> 'Toto je zoznam odstránených tém. Tu ich môžete obnoviť alebo natrvalo zmazať.',

	'MCP_VIEW_USER'			=> 'Zobraziť výstrahy užívateľa',

	'MCP_WARN'				=> 'Výstrahy',
	'MCP_WARN_FRONT'		     => 'Hlavná strana',
	'MCP_WARN_LIST'			=> 'Zoznam výstrah',
	'MCP_WARN_POST'			=> 'Výstrahu udeliť za konkrétny príspevok',
	'MCP_WARN_USER'			=> 'Udeliť užívateľovi výstrahu',

	'MERGE_POSTS_CONFIRM'	=> 'Ste si istý?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Použitím nasledovného formulára môžete presunúť označené príspevky do inej témy. Hierarchia príspevkov zostane zachovaná a budú zobrazené ako by ich užívatelia odslali v cieľovej téme.<br />Vložte ID cieľovej témy alebo použite “Vybrať tému” k nájdeniu témy, do ktorej majú byť príspevky vložené.',
	'MERGE_TOPIC_ID'		=> 'ID cieľovej témy',
	'MERGE_TOPICS'			=> 'Spojiť témy',
	'MERGE_TOPICS_CONFIRM'	=> 'Ste si istý?',
	'MODERATE_FORUM'		=> 'Moderovať fórum',
	'MODERATE_TOPIC'		=> 'Moderovať tému',
	'MODERATE_POST'		=> 'Moderovať príspevok',
	'MOD_OPTIONS'			=> 'Možnosti moderovania',
	'MORE_INFO'			=> 'Ďalšie informácie',
	'MOST_WARNINGS'		=> 'Užívatelia s najväčším počtom výstrah',
	'MOVE_TOPIC_CONFIRM'	=> 'Ste si istý?',
	'MOVE_TOPICS'			=> 'Presunúť označené témy',
	'MOVE_TOPICS_CONFIRM'	=> 'Ste si istý?',

	'NOTIFY_POSTER_APPROVAL'		     => 'Upozorniť užívateľa o schválení?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Upozorniť užívateľa o zamietnutí?',
	'NOTIFY_USER_WARN'				=> 'Upozorniť užívateľa o udelení výstrahy?',
	'NOT_MODERATOR'				=> 'Nie ste moderátorom tohoto fóra.',
	'NO_DESTINATION_FORUM'			=> 'Zvoľte cieľové fórum.',
	'NO_DESTINATION_FORUM_FOUND'	     => 'Žiadne cieľové fórum nie je dostupné.',
	'NO_ENTRIES'					=> 'Žiadne záznamy.',
	'NO_FEEDBACK'					=> 'Žiadna spätná väzba pre tohoto užívateľa.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Musíte zvoliť cieľovú tému.',
	'NO_MATCHES_FOUND'				=> 'Nenašli sa žiadne zhody.',
	'NO_POST'						=> 'Musíte označiť príspevok, za ktorý chcete udeliť užívateľovi výstrahu.',
	'NO_POST_REPORT'				=> 'Na tento príspevok nebola nahlásená sťažnosť.',
	'NO_POST_SELECTED'				=> 'Musíte označiť aspoň jeden príspevok.',
	'NO_POSTS_DELETED'				=> 'Žiadne odstránené príspevky.',
	'NO_POSTS_QUEUE'				=> 'Žiadne príspevky nečakajú na schválenie.',
	'NO_REASON_DISAPPROVAL'			=> 'Uveďte dôvod zamietnutia.',
	'NO_REPORT'					=> 'Žiadna sťažnosť',
	'NO_REPORTS'					=> 'Žiadne sťažnosti',
	'NO_REPORT_SELECTED'			=> 'Musíte označiť aspoň jednu sťažnosť ak chete dokončiť túto akciu.',
	'NO_TOPIC_ICON'				=> 'Žiadna',
	'NO_TOPIC_SELECTED'				=> 'Musíte označiť aspoň jednu tému ak chete dokončiť túto akciu.',
	'NO_TOPICS_DELETED'				=> 'Žiadne odstránené témy.',
	'NO_TOPICS_QUEUE'				=> 'Žiadne témy nečakajú na schválenie.',

	'ONLY_TOPIC'			=> 'Len tému “%s”',
	'OTHER_USERS'			=> 'Užívatelia prispievajúci z tejto IP adresy',

	'QUICKMOD_ACTION_NOT_ALLOWED' => "%s nie je povelené ako rýchla úprava",

	'PM_REPORT_CLOSED_SUCCESS'	=> 'Sťažnosť na túto súkromnú správu bola vyriešená.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Sťažnosť na túto súkromnú správu bola vymazaná.',
	'PM_REPORTED_SUCCESS'		=> 'Sťažnosť na túto súkromnú správu bola odoslaná.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'Označené sťažnosti na súkromné správy boli úspešne uzavreté/vyriešené.',
	'PM_REPORTS_DELETED_SUCCESS'  => 'Označené sťažnosti na súkromné správy boli vymazané.',
	'PM_REPORTS_TOTAL'			=> array(
		1	=> 'Na posúdenie čaká <strong>%d</strong> sťažnosť.',
          2	=> 'Na posúdenie čakajú <strong>%d</strong> sťažnosti.',
		3	=> 'Na posúdenie čaká <strong>%d</strong> sťažností.',
	),
	'PM_REPORT_DETAILS'			=> 'Detaily sťažnosti na odoslanú súkromnú správu',
	'POSTER'					=> 'Autor',
	'POSTS_APPROVED_SUCCESS'	     => 'Zverejnenie označených príspevkov bolo schválené.',
	'POSTS_DELETED_SUCCESS'		=> 'Označené príspevky boli úspešne odstránené z databázy.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Zverejnenie označených príspevkov bolo zamietnuté.',
	'POSTS_LOCKED_SUCCESS'		=> 'Označené príspevky boli zamknuté.',
	'POSTS_MERGED_SUCCESS'		=> 'Označené príspevky boli zlúčené.',
	'POSTS_PER_PAGE'			=> 'Príspevkov na stranu',
	'POSTS_PER_PAGE_EXPLAIN'	     => '(0 = zobraziť všetky.)',
	'POSTS_RESTORED_SUCCESS'	     => 'Označené príspevky boli úspešne obnovené.',
	'POSTS_UNLOCKED_SUCCESS'	     => 'Označené príspevky boli úspešne odomknuté.',
	'POST_APPROVED_SUCCESS'		=> 'Zverejnenie príspevku bolo schválené.',
	'POST_DELETED_SUCCESS'		=> 'Príspevok bol odstránený z databázy.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Zverejnenie príspevku bolo zamietnuté.',
	'POST_LOCKED_SUCCESS'		=> 'Príspevok úspešne uzmaknutý.',
	'POST_NOT_EXIST'			=> 'Príspevok, ktorý požadujete neexistuje.',
	'POST_REPORTED_SUCCESS'		=> 'Sťažnosť na tento príspevok bola úspešne odoslaná.',
	'POST_RESTORED_SUCCESS'		=> 'Tento príspevok bol úspešne obnovený.',
	'POST_UNLOCKED_SUCCESS'		=> 'Príspevok bol úspešne odomknutý.',

	'READ_USERNOTES'			=> 'Záznamy užívateľa',
	'READ_WARNINGS'			=> 'Výstrahy užívateľa',
	'REPORTER'				=> 'Oznámil',
	'REPORTED'				=> 'Nahlásené',
	'REPORTED_BY'				=> 'Nahlásil',
	'REPORTED_ON_DATE'			=> '-',
	'REPORTS_CLOSED_SUCCESS'	     => 'Označnené sťažnosti boli uzavreté.',
	'REPORTS_DELETED_SUCCESS'	=> 'Označnené sťažnosti boli zmazané.',
	'REPORTS_TOTAL'			=> array(
		1	=> 'Na posúdenie čaká <strong>%d</strong> sťažnosť.',
          2	=> 'Na posúdenie čakajú <strong>%d</strong> sťažnosti.',
		3	=> 'Na posúdenie čaká <strong>%d</strong> sťažností.',
	),
	'REPORT_CLOSED'			=> 'Táto sťažnosť už bola uzavretá.',
	'REPORT_CLOSED_SUCCESS'		=> 'Vybraná sťažnosť bola úspešne uzatvorená/vyriešená.',
	'REPORT_DELETED_SUCCESS'	     => 'Vybraná sťažnosť bola úspešne vymazaná.',
	'REPORT_DETAILS'			=> 'Detaily sťažnosti',
	'REPORT_MESSAGE'			=> 'Nahlásiť túto správu',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Použite tento formulár na odoslanie sťažnosti na vybranú súkromnú správu. Sťažnosti by mali byť vo všeobecnosti použité, len v súvislosti s porušovaním pravidiel portálu. <strong>Odoslanie sťažnosti spôsobí, že obsah súkromnej správy bude sprístupnený všetkým administrátorom a moderátorom portálu.</strong>',
	'REPORT_NOTIFY'			=> 'Upozorniť ma',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Upozorniť ma až bude sťažnosť vyriešená.',
	'REPORT_POST_EXPLAIN'		=> 'Použite tento formulár na odoslanie sťažnosti na vybraný príspevok. Sťažnosti by mali byť vo všeobecnosti použité, len v súvislosti s porušovaním pravidiel portálu.',
	'REPORT_REASON'			=> 'Dôvod sťažnosti',
	'REPORT_TIME'				=> 'Čas odoslania',
	'RESTORE'					=> 'Obnoviť',
	'RESTORE_POST'				=> 'Obnoviť príspevok',
	'RESTORE_POST_CONFIRM'		=> 'Ste si istý, že chcete obnoviť zvolený príspevok?',                              
	'RESTORE_POSTS'			=> 'Obnoviť príspevky',
	'RESTORE_POSTS_CONFIRM'		=> 'Ste si istý, že chcete obnoviť označené príspevky?',
	'RESTORE_TOPIC'			=> 'Obnoviť tému',
	'RESTORE_TOPIC_CONFIRM'		=> 'Ste si istý, že chcete obnoviť zvolenú tému?',
	'RESTORE_TOPICS'			=> 'Obnoviť témy',
	'RESTORE_TOPICS_CONFIRM'	     => 'Ste si istý, že chcete obnoviť označené témy?',
	'RESYNC'					=> 'Znovu vykonať synchronizáciu',
	'RETURN_MESSAGE'			=> '%sNávrat na správy%s',
	'RETURN_NEW_FORUM'			=> '%sPrejsť na nové fórum%s',
	'RETURN_NEW_TOPIC'			=> '%sPrejsť na novú tému%s',
	'RETURN_PM'				=> '%sNávrat na súkromné správy%s',
	'RETURN_POST'				=> '%sNávrat na príspevok%s',
	'RETURN_QUEUE'				=> '%sNávrat na zoznam%s',
	'RETURN_REPORTS'			=> '%sNávrat na sťažnosti%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sNávrat na tému%s',

	'SEARCH_POSTS_BY_USER'				=> 'Vyhľadať príspevky podľa',
	'SELECT_ACTION'					=> 'Vyberte jednu z možností',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	     => 'Vyberte fórum, v ktorom ktorom si prajete, aby bolo toto oznámenie pre celý portál umiestnené.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Jedna alebo viacero označených tém sú oznámeniami pre celý portál. Vyberte cieľové fórum, kde má alebo majú byť umiestnené.',
	'SELECT_MERGE'						=> 'Vybrať pre zlúčenie',
	'SELECT_TOPICS_FROM'				=> 'Vybrať témy od',
	'SELECT_TOPIC'						=> 'Vybrať tému',
	'SELECT_USER'						=> 'Vybrať užívateľa',
	'SORT_ACTION'						=> 'Záznamu',
	'SORT_DATE'						=> 'Dátumu',
	'SORT_IP'							=> 'IP adresy',
	'SORT_WARNINGS'					=> 'Výstrah',
	'SPLIT_AFTER'						=> 'Rozdeliť tému od vybraného príspevku',
	'SPLIT_FORUM'						=> 'Fórum pre novú tému',
	'SPLIT_POSTS'						=> 'Rozdeliť označené príspevky',
	'SPLIT_SUBJECT'					=> 'Nový názov témy',
	'SPLIT_TOPIC_ALL'					=> 'Rozdeliť tému podľa označených príspevkov',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Ste si istý, že chcete rozdeliť túto tému?',
	'SPLIT_TOPIC_BEYOND'				=> 'Rozdeliť tému od označeného príspevku',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		     => 'Ste si istý, že chcete rozdeliť tému od označeného príspevku?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Vyplnením nasledovného formulára môžete rozdeliť tému na dve, buď vlastnoručným označením príspevkovk alebo rozdelením od označeného príspevku.',

	'THIS_PM_IP'				=> 'IP adresa, z ktorej bola súkromná správa odoslaná',
	'THIS_POST_IP'				=> 'IP adresa, z ktorej bol príspevok odoslaný',
	'TOPICS_APPROVED_SUCCESS'	=> 'Zverejnenie označených tém bolo schválené.',
	'TOPICS_DELETED_SUCCESS'	     => 'Označené témy boli úspešne odstránené z databázy.',
	'TOPICS_DISAPPROVED_SUCCESS'  => 'Zverejnenie označených tém bolo zamietnuté.',
	'TOPICS_FORKED_SUCCESS'		=> 'Označené témy boli úspešne skopírované.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Označené témy boli zamknuté.',
	'TOPICS_MOVED_SUCCESS'		=> 'Označené témy boli úspešne presunuté.',
	'TOPICS_RESTORED_SUCCESS'	=> 'Označené témy boli úspešne obnovené.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Synchronizácia označených tém bola úspešná.',
	'TOPICS_TYPE_CHANGED'		=> 'Typ tém zmenený.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Označená téma bola odomknutá.',
	'TOPIC_APPROVED_SUCCESS'	     => 'Zverejnenie označenej témy bolo schválené.',
	'TOPIC_DELETED_SUCCESS'		=> 'Označená téma bola úspešne odstránená z databázy.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Zverejnenie označenej témy bolo zamietnuté.',
	'TOPIC_FORKED_SUCCESS'		=> 'Označená téma bola úspešne skopírovaná.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Označená téma bola uzamknutá.',
	'TOPIC_MOVED_SUCCESS'		=> 'Označená téma bola úspešne presunutá.',
	'TOPIC_NOT_EXIST'			=> 'Označená téma nie je k dispozícii/neexistuje.',
	'TOPIC_RESTORED_SUCCESS'	     => 'Označená téma bola úspešne obnovená.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Synchronizácia označenej témy bola úspešná.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Označená téma bola úspešne rozdelené.',
	'TOPIC_TIME'				=> 'Časová pečiatka vytvorenia témy',
	'TOPIC_TYPE_CHANGED'		=> 'Typ témy úspešne zmenený.',
	'TOPIC_UNLOCKED_SUCCESS'	     => 'Označená téma bola odomknutá.',
	'TOTAL_WARNINGS'			=> 'Celkom výstrah',

	'UNAPPROVED_POSTS_TOTAL'		=> array(
		1	=> 'Na posúdenie čaká <strong>%d</strong> príspevok.',
          2	=> 'Na posúdenie čakajú <strong>%d</strong> príspevky.',
		3	=> 'Na posúdenie čaká <strong>%d</strong> príspevkov.',
	),
	'UNLOCK'						=> 'Odomknúť',
	'UNLOCK_POST'					=> 'Odomknúť príspevok',
	'UNLOCK_POST_EXPLAIN'			=> 'Povoliť úpravy',
	'UNLOCK_POST_POST'				=> 'Odomknúť príspevok',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Ste si istý, že chcete povoliť úpravy tohoto príspevku?',
	'UNLOCK_POST_POSTS'				=> 'Odomknúť označené príspevky',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Ste si istý, že chcete povoliť úpravy označených príspevkov?',
	'UNLOCK_TOPIC'					=> 'Odomknúť tému',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Ste si istý, že chcete odomknúť túto tému?',
	'UNLOCK_TOPICS'				=> 'Odomknúť označené témy',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Ste si istý, že chcete odomknúť všetky označené témy?',
	'USER_CANNOT_POST'				=> 'V tomto fóre nemôžete odosielať príspevky.',
	'USER_CANNOT_REPORT'			=> 'Nemôžete odosielať sťažnosti na príspevky v tomto fóre.',
	'USER_FEEDBACK_ADDED'			=> 'Spätná väzba užívateľovi úspešne vložená.',
	'USER_WARNING_ADDED'			=> 'Výstraha užívateľovi úspešnš udelená.',

	'VIEW_DETAILS'			=> 'Zobraziť detaily',
	'VIEW_PM'				=> 'Zobraziť súkromnú správu',
	'VIEW_POST'			=> 'Zobraziť príspevok',

	'WARNED_USERS'			=> 'Užívatelia s výstrahou',
	'WARNED_USERS_EXPLAIN'	=> 'Toto je zoznam užívateľov s udelenou výstrahou, ktorej doba platnosti ešte neskončila.',
	'WARNING_PM_BODY'		=> 'Z dôvodu porušenia pravidiel portálu vám bola udelená výstraha.[quote]%s[/quote]V prípade, že sa bude situácia opakovať, môže vám byť udelený zákaz vstupu na tento portál. V prípade, že chcete vzniesť námietku k uvedenej výstrahe, kontaktujte užívateľa, ktorý vám výstrahu udelil.',
	'WARNING_PM_SUBJECT'	=> 'Výstraha',
	'WARNING_POST_DEFAULT'	=> 'Táto výstraha vám bola udelená v súvislosti s príspevkom, ktorý ste zverejnili na tomto portále: %s .',
	'NO_WARNINGS'	          => 'Žiadne výstrahy.',

	'YOU_SELECTED_TOPIC'	=> 'Vybrali ste tému číslo %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Nesúvisí s témou',
			'OTHER'		=> 'Iný dôvod',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Správa obsahuje odkaz/odkazy na nelegálny alebo pirátsky softvér',
			'SPAM'		=> 'Správa sa považuje za neodôvodnené podsúvanie reklamy',
			'OFF_TOPIC'	=> 'Správa nesúvisí s témou',
			'OTHER'		=> '--- žiadna z možností ---',
		),
	),
));
