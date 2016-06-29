<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @authors phpBB3.sk, PepeLopez, Fonzi
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'CONTROLLER_ARGUMENT_VALUE_MISSING'	=> 'Chýbajúca hodnota argumentu #%1$s: <strong>%3$s</strong> v triede <strong>%2$s</strong>',
	'CONTROLLER_NOT_SPECIFIED'			=> 'Nebol špecifikovaný žiadny ovládač.',
	'CONTROLLER_METHOD_NOT_SPECIFIED'		=> 'Pre ovládač nebola špecifikovaná žiadna metóda.',
	'CONTROLLER_SERVICE_UNDEFINED'		=> 'Služba pre ovládač "<strong>%s</strong>" nebola v ./config/services.yml definovaná.',
));