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
	'ACTIVE_TOPICS'	=> 'Aktívne témy',
	'ANNOUNCEMENTS' => 'Oznámenia',

	'FORUM_PERMISSIONS'	=> 'Oprávnenia pre toto fórum',

	'ICON_ANNOUNCEMENT' => 'Oznámenie',
	'ICON_STICKY' => 'Pripnutá téma',

	'LOGIN_NOTIFY_FORUM' => 'Fórum môžu prezerať iba registrovaný užívatelia, prosím prihláste sa.',

	'MARK_TOPICS_READ' => 'Označiť fórum ako prečítané',

	'NEW_POSTS_HOT' => 'Nové príspevky [ Obľúbené ]',	// Not used anymore
	'NEW_POSTS_LOCKED' => 'Nové príspevky [ Zamknuté ]',	// Not used anymore
	'NO_NEW_POSTS_HOT' => 'Žiadne nové príspevky [ Obľúbené ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED' => 'Žiadne nové príspevky [ Zamknuté ]',	// Not used anymore
	'NO_READ_ACCESS' => 'Na prezeranie príspevkov nemáte potrebné oprávnenia.',
	'NO_UNREAD_POSTS_HOT' => 'Žiadne neprečítané príspevky [ Obľúbené ]',
	'NO_UNREAD_POSTS_LOCKED' => 'Žiadne neprečítané príspevky [ Zamknuté ]',

	'POST_FORUM_LOCKED' => 'Fórum je zamknuté',
 
	'TOPICS_MARKED' => 'Témy tohoto fóra boli označené ako prečítané.',

	'UNREAD_POSTS_HOT' => 'Neprečítané príspevky [ Obľúbené ]',
	'UNREAD_POSTS_LOCKED' => 'Neprečítané príspevky [ Zamknuté ]',

	'VIEW_FORUM' => 'Zobraziť fórum',
	'VIEW_FORUM_TOPICS'	=> array(
	    1 => '%d téma', 
		2 => '%d témy', 
		3 => '%d tém',
	),
));
