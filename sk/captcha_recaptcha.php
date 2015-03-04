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
	'RECAPTCHA_LANG' => 'sk',
	'RECAPTCHA_NOT_AVAILABLE' => 'Ak chcete použiť reCaptcha, musíte si vytvoriť účet na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA' => 'reCaptcha',
	'RECAPTCHA_INCORRECT' => 'Zadaný overovací kód je nesprávny',

	'RECAPTCHA_PUBLIC' => 'Verejný reCaptcha kľúč',
	'RECAPTCHA_PUBLIC_EXPLAIN' => 'Váš verejný reCaptcha kľúč. Kľúče možno získať na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'	=> 'Súkromný reCaptcha kľúč',
	'RECAPTCHA_PRIVATE_EXPLAIN'	=> 'Váš súkromný reCaptcha kľúč. Kľúče možno získať na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'	=> 'Snažíme sa zamedziť automatizovaným registráciám, preto je potrebné, aby ste do rámčekov vpísali obe slová.',
	'RECAPTCHA_SOCKET_ERROR' => 'Problém s pripojením na službu RECAPTCHA: nemožné vytvoriť spojenie. Skúste znovu.',
));
