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

$lang = array_merge($lang, array(
	'ABOUT_USER'				=> 'Profil',
	'ACTIVE_IN_FORUM'			=> 'Najaktívnejší vo fóre',
	'ACTIVE_IN_TOPIC'			=> 'Najaktívnejší v téme',
	'ADD_FOE'					=> 'Pridať do zoznamu ignorovaných',
	'ADD_FRIEND'				=> 'Pridať do zoznamu priateľov',
	'AFTER'						=> 'po',

	'ALL'						=> 'Všetko',

	'BEFORE'					=> 'pred',

	'CC_SENDER'					=> 'Zároveň odoslať sebe ako kópiu.',
	'CONTACT_ADMIN'				=> 'Kontaktovať administrátora portálu',

	'DEST_LANG'					=> 'Jazyk',
	'DEST_LANG_EXPLAIN'			=> 'Pre príjemcu tejto správy si zvoľte si zodpovedajúci jazyk (ak je to možné).',

	'EDIT_PROFILE'				=> 'Upraviť môj profil',

	'EMAIL_BODY_EXPLAIN'		=> 'Táto správa bude odoslaná ako obyčajný text a nevkladajte žiaden kód HTML ani BBCode. Ako adresa pre odpovede bude nastavená vaša emailová adresa.',
	'EMAIL_DISABLED'			=> 'Prepáčte, ale všetky funkcie spojené s odosielaním emailov sú zakázané.',
	'EMAIL_SENT'				=> 'E-mail bol úspešne odoslaný.',
	'EMAIL_TOPIC_EXPLAIN'		=> 'Táto správa bude odoslaná ako obyčajný text a nevkladajte žiaden kód HTML ani BBCode. Prosím vezmite na vedomie, že informácie o téme už boli do správy vložené. Ako adresa pre odpovede bude nastavená vaša emailová adresa.',
	'EMPTY_ADDRESS_EMAIL'		=> 'Musíte uviesť platnú e-mailovú adresu príjemcu.',
	'EMPTY_MESSAGE_EMAIL'		=> 'Musíte vložiť správu, ktorá má byť odoslaná e-mailom.',
	'EMPTY_MESSAGE_IM'			=> 'Musíte vložiť správu, ktorá má byť odoslaná.',
	'EMPTY_NAME_EMAIL'			=> 'Musíte uviesť skutočné meno príjemcu.',
	'EMPTY_SENDER_EMAIL'		=> 'Musíte uviesť platnú emailovú adresu.',
	'EMPTY_SENDER_NAME'			=> 'Musíte uviesť meno.',
	'EMPTY_SUBJECT_EMAIL'		=> 'Musíte uviesť predmet správy.',
	'EQUAL_TO'					=> 'presne',

	'FIND_USERNAME_EXPLAIN'		=> 'Použite tento formulár na vyhľadanie užívateľa. Nemusíte vyplniť všetky polia. Môžete použiť <strong>*</strong> ako zástupný symbol. Ak vkladáte dátumy použite formát <kbd>YYYY-MM-DD</kbd>, napríklad <samp>2015-02-20</samp>. Použite zaškrtávacie políčka, ak chcete zvoliť viacerých užívateľov.',
	'FLOOD_EMAIL_LIMIT'			=> 'Momentálne nemôžete odoslať ďalší e-mail. Skúste neskôr.',

     'GROUP_LEADER'				=> 'Vedúci skupiny',

	'HIDE_MEMBER_SEARCH'		=> 'Skryť vyhľadávanie členov',

	'IM_ADD_CONTACT'			=> 'Pridať kontakt',
	'IM_DOWNLOAD_APP'			=> 'Stiahnuť aplikáciu',
	'IM_JABBER'					=> 'Berte do úvahy, že niektorí užívatelia môžu mať nastavenú možnosť neprijímať nevyžiadané okamžité správy.',
	'IM_JABBER_SUBJECT'			=> 'Toto je automaticky vygenerovaná správa, neodpovedajte na ňu! Správa od užívateľa %1$s %2$s.',
	'IM_MESSAGE'				=> 'Vaša správa',
	'IM_NAME'					=> 'Vaše meno',
	'IM_NO_DATA'				=> 'Pre tohoto užívateľa nie sú kontaktné informácie k dispozícii.',
	'IM_NO_JABBER'				=> 'Prepáčte, priame odosielanie správ užívateľov Jabberu nie je týmto portálom podporované.',
	'IM_RECIPIENT'				=> 'Príjemca',
	'IM_SEND'					=> 'Odoslať správu',
	'IM_SEND_MESSAGE'			=> 'Odoslať správu',
	'IM_SENT_JABBER'			=> 'Vaša správa užívateľovi %1$s bola odoslaná.',
	'IM_USER'					=> 'Odoslať "instant message"',

	'LAST_ACTIVE'				=> 'Posledná aktivita',
	'LESS_THAN'					=> 'menej než',
	'LIST_USERS' => array(
		1 => '%d užívateľ',
		2 => '%d užívatelia',
        3 => '%d užívateľov',
	),
	'LOGIN_EXPLAIN_TEAM' => 'Portál vyžaduje, aby ste boli zaregistrovaný a prihlásený, ak chcete zobraziť realizačný tím.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Portál vyžaduje, aby ste boli zaregistrovaný a prihlásený, ak chcete mať prístup k zoznamu užívateľov.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Portál vyžaduje, aby ste boli zaregistrovaný a prihlásený, ak chcete vyhľadať užívateľov.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Portál vyžaduje, aby ste boli zaregistrovaný a prihlásený, ak chcete zobraziť profily.',

	'MORE_THAN'					=> 'viac než',

	'NO_CONTACT_FORM'			=> 'Formulár pre kontaktovanie administrátora nie je k dispozícii.',
	'NO_CONTACT_PAGE'			=> 'Stránka pre kontaktovanie administrátora nie je k dispozícii.',
	'NO_EMAIL'					=> 'Nemáte dostatočné oprávnenia na odoslanie emailu tomuto užívateľovi.',
	'NO_VIEW_USERS'				=> 'Nemáte dostatočné oprávnenia na zobrazenie zoznamu členov alebo profilov.',

	'ORDER'						=> 'Poradie',
	'OTHER'						=> 'Ďalšie',

	'POST_IP'					=> 'Odoslané z IP/domény',

	'REAL_NAME'					=> 'Meno príjemcu',
	'RECIPIENT'					=> 'Príjemca',
	'REMOVE_FOE'				=> 'Odstrániť zo zoznamu ignorovaných',
	'REMOVE_FRIEND'				=> 'Odstrániť zo zoznamu priateľov',

	'SELECT_MARKED'				=> 'Vybrať označené',
	'SELECT_SORT_METHOD'		=> 'Vybrať spôsob zoradenia',
	'SENDER_EMAIL_ADDRESS'		=> 'Vaša e-mailová adresa',
	'SENDER_NAME'				=> 'Vaše meno',
	'SEND_ICQ_MESSAGE'			=> 'Odoslať ICQ správu',
	'SEND_IM'					=> 'Použiť Instant messaging',
	'SEND_JABBER_MESSAGE'		=> 'Odoslať Jabber správu',
	'SEND_MESSAGE'				=> 'Správa',
	'SEND_YIM_MESSAGE'			=> 'Odoslať YIM správu',
	'SORT_EMAIL'				=> 'e-mailovej adresy',
	'SORT_LAST_ACTIVE'			=> 'poslednej aktivity',
	'SORT_POST_COUNT'			=> 'počtu príspevkov',

	'USERNAME_BEGINS_WITH'		=> 'Užívateľské meno začína na',
	'USER_ADMIN'				=> 'Spravovať užívateľa',
	'USER_BAN'					=> 'Udeliť ban',
	'USER_FORUM'				=> 'Štatistiky užívateľa',
	'USER_LAST_REMINDED' => array(
		1 => 'Odoslaná %1$d pripomienka<br />» %2$s',
		2 => 'Odoslané %1$d pripomienky<br />» %2$s',
        3 => 'Odoslaných %1$d pripomienok<br />» %2$s',
	),
	'USER_ONLINE'				=> 'Pripojený',
	'USER_PRESENCE'				=> 'Prítomnosť na portále',
	'USERS_PER_PAGE'			=> 'Užívateľov na stránku',

	'VIEWING_PROFILE'			=> 'Profil užívateľa - %s',
	'VIEW_FACEBOOK_PROFILE'		=> 'Zobraziť Facebook profil',
	'VIEW_SKYPE_PROFILE'		=> 'Zobraziť Skype profil',
	'VIEW_TWITTER_PROFILE'		=> 'Zobraziť Twitter profil',
	'VIEW_YOUTUBE_CHANNEL'		=> 'Zobraziť kanál YouTube',
	'VIEW_GOOGLEPLUS_PROFILE'	=> 'Zobraziť Google+ profil',
));
