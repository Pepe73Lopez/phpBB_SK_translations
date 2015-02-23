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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'	=> 'Odtiaľto môžete odosielať hromadnú emailovú správu všetkým užívateľom alebo členom určitej skupiny, ktorá má nastavené prijímanie hromadnej pošty. Hromadná správa bude odoslaná na emailovú adresu administrátora portálu s uvedením vami označených adresátov ako príjemcov slepej kópie. Implicitne je počet príjemcov nastavený na 20, ak odosielate viacerým príjemcom bude odoslaných viacero emailových správ. Neprerušujte proces odosielania a počkajte až bude ukončený. O výsledku odoslania budete po skončení procesu informovaný.',
	'ALL_USERS'					=> 'Všetkým užívateľom',

	'COMPOSE'					=> 'Vytvoriť emailovú správu',

	'EMAIL_SEND_ERROR'			=> 'Počas odosielania správy sa vyskytla jedna alebo viacero chýb. Skontrolujte záznam o chybách (%sError log%s).',
	'EMAIL_SENT'				=> 'Správa bola odoslaná.',
	'EMAIL_SENT_QUEUE'			=> 'Správa bola zaradená do fronty na odosielanie.',

	'LOG_SESSION'				=> 'Zaznamenať priebeh odosielania (%záznam o chybách%s)',

	'SEND_IMMEDIATELY'			=> 'Odoslať ihneď',
	'SEND_TO_GROUP'				=> 'Odoslať skupine',
	'SEND_TO_USERS'				=> 'Odoslať užívateľom',
	'SEND_TO_USERS_EXPLAIN'		=> 'Vloženie užívateľských mien zruší výber skupín. Každé užívateľské meno napíšte na samostatný riadok.',

	'MAIL_BANNED'				=> 'Odoslať aj užívateľom s udeleným zákazom vstupu',
	'MAIL_BANNED_EXPLAIN'		=> 'Ak odoslielate hromadný email, tu môžete rozhodnúť o tom, či do adresátov budú zahrnuté aj emailové adresy užívateľov, ktorí majú v súčasnosti udelený zákaz vstupu na portál.',
	'MAIL_HIGH_PRIORITY'		=> 'vysoká',
	'MAIL_LOW_PRIORITY'			=> 'nízka',
	'MAIL_NORMAL_PRIORITY'		=> 'normálna',
	'MAIL_PRIORITY'				=> 'Priorita',
	'MASS_MESSAGE'				=> 'Telo správy',
	'MASS_MESSAGE_EXPLAIN'		=> 'Správu môžete písať len ako prostý text, nie je možné používať značky HTML ani BBCode. Všetky značky (tagy) budú pred odoslaním odstránené.',

	'NO_EMAIL_MESSAGE'			=> 'Správa nič neobsahuje. Musíte vložiť text do tela správy.',
	'NO_EMAIL_SUBJECT'			=> 'Predmet správy nie je definovaný, musíte zadať predmet správy.',
));
