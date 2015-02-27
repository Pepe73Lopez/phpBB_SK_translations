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
	'APPROVE' => 'Súhlasím',
	'ATTACHMENT' => 'Príloha',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Možnosť vkladať prílohy nie je povolená.',

	'BOOKMARK_ADDED' => 'Téma bola pridaná medzi záložky.',
	'BOOKMARK_ERR' => 'Pridanie témy medzi záložky zlyhalo. Skúste znovu.',
	'BOOKMARK_REMOVED'=> 'Téma bola odstránená zo záložiek.',
	'BOOKMARK_TOPIC' => 'Pridať tému medzi záložky',
	'BOOKMARK_TOPIC_REMOVE' => 'Odstrániť zo záložiek',
	'BUMPED_BY' => 'Naposledy oživil %1$s - %2$s.',
	'BUMP_TOPIC' => 'Oživiť tému',

	'CODE'=> 'Kód',

	'DELETE_TOPIC' => 'Vymazať tému',
	'DELETED_INFORMATION' => 'Vymazal %1$s on %2$s',
	'DISAPPROVE' => 'Nesúhlasím',
	'DOWNLOAD_NOTICE' => 'Na prezeranie priložených súborov nemáte dostatočné oprávnenia.',

	'EDITED_TIMES_TOTAL' => array(
	    1 => 'Naposledy upravil/-a %2$s v %3$s, upravené celkom %1$d krát.', 
		2 => 'Naposledy upravil/-a %2$s v %3$s, upravené celkom %1$d krát.', 
		3 => 'Naposledy upravil/-a %2$s v %3$s, upravené celkom %1$d krát.',
	),
	'EMAIL_TOPIC' => 'Odoslať tému emailom',
	'ERROR_NO_ATTACHMENT' => 'Zvolená príloha už neexistuje.',

	'FILE_NOT_FOUND_404' => 'Súbor <strong>%s</strong> neexistuje.',
	'FORK_TOPIC' => 'Kopírovať tému',
	'FULL_EDITOR' => 'Úplný Editor&amp;Náhľad',

	'LINKAGE_FORBIDDEN' => 'Nemáte oprávnenia prezerať túto stránku, sťahovať z nej alebo používať odkazy na nej uvedené.',
	'LOGIN_NOTIFY_TOPIC' => 'Boli ste upozornený na túto tému prosím prihláste sa, aby ste si ju mohli prezrieť.',
	'LOGIN_VIEWTOPIC' => 'Na prezeranie tejto témy je potrebné byť registrovaný a prihlásený.',

	'MAKE_ANNOUNCE' => 'Zmeniť na “Oznámenie”',
	'MAKE_GLOBAL' => 'Zmeniť na “Oznámenie pre celý portál”',
	'MAKE_NORMAL' => 'Zmeniť na “Obyčajnú tému”',
	'MAKE_STICKY' => 'Pripnúť tému na začiatok zoznamu tém.',
	'MAX_OPTIONS_SELECT' => array(
	    1 => 'Môžete označiť <strong>%d</strong> možnosť', 
		2 => 'Môžete označiť <strong>%d</strong> možnosti', 
		3 => 'Môžete označiť až <strong>%d</strong> možností',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Príloha <strong>%s</strong> už nie je dosupná',
	'MOVE_TOPIC' => 'Presunúť tému',

	'NO_ATTACHMENT_SELECTED' => 'Nezvolili ste žiadnu prílohu.',
	'NO_NEWER_TOPICS' => 'Neexistujú novšie témy.',
	'NO_OLDER_TOPICS' => 'Neexistujú staršie témy.',
	'NO_UNREAD_POSTS' => 'V tejto téme nie sú žiadne nové neprečítané príspevky.',
	'NO_VOTE_OPTION' => 'Musíte vybrať jednu z možností, ak chcete hlasovať.',
	'NO_VOTES' => 'Žiadne hlasovania',

	'POLL_ENDED_AT' => 'Hlasovanie ukončené %s',
	'POLL_RUN_TILL' => 'Hlasovanie spustené až do %s',
	'POLL_VOTED_OPTION' => 'Za túto možnosť ste už hlasovali',
	'POST_DELETED_RESTORE' => 'Tento príspevok bol vymazaný. Môže byť obnovený.',
	'PRINT_TOPIC' => 'Náhľad pre tlač',

	'QUICK_MOD' => 'Rýchle nástroje',
	'QUICKREPLY' => 'Rýchla odpoveď',
	'QUOTE' => 'Citovať príspevok',

	'REPLY_TO_TOPIC' => 'Odpovedať k tejto téme',
	'RESTORE' => 'Obnoviť',
	'RESTORE_TOPIC'	=> 'Obnoviť tému',
	'RETURN_POST' => '%sNávrat na príspevok%s',

	'SUBMIT_VOTE' => 'Hlasovať',

	'TOPIC_TOOLS' => 'Nástroje pre tému',
	'TOTAL_VOTES' => 'Celkom hlasov',

	'UNLOCK_TOPIC' => 'Odomknúť tému',

	'VIEW_INFO'	=> 'Detaily príspevku',
	'VIEW_NEXT_TOPIC' => 'Ďalší príspevok',
	'VIEW_PREVIOUS_TOPIC'=> 'Predchádzajúci príspevok',
	'VIEW_RESULTS' => 'Zobraziť výsledky',
	'VIEW_TOPIC_POSTS' => array(
	        1 => '%d príspevok', 
			2 => '%d príspevky', 
			3 => '%d príspevkov',
	),
	'VIEW_UNREAD_POST' => 'Prvý neprečítaný príspevok',
	'VOTE_SUBMITTED' => 'Váš hlas bol započítaný.',
	'VOTE_CONVERTED' => 'Nie je možné zmeniť váše hlasovanie.',
));
