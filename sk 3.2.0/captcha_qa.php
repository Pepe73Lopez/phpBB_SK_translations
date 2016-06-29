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

$lang = array_merge($lang, array(
	'CAPTCHA_QA'				=> 'Otázky&amp;Odpovede',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Odpoveď na túto otázku je potrebná pre odlíšenie skutočného užívateľa od automatizovaných pokusov registráciu.',
	'CONFIRM_QUESTION_WRONG'		=> 'Nesprávna odpoveď.',
	'CONFIRM_QUESTION_MISSING'	=> 'Nebolo možné záskať otázky, kontaktujte administrátorov fóra.',

	'QUESTION_ANSWERS'			=> 'Odpovede',
	'ANSWERS_EXPLAIN'			=> 'Uveďte správne odpovede na otázku, jednu odpoveď na každý riadok.',
	'CONFIRM_QUESTION'			=> 'Otázka',

	'ANSWER'					=> 'Odpoveď',
	'EDIT_QUESTION'			=> 'Upraviť otázku',
	'QUESTIONS'				=> 'Otázky',
	'QUESTIONS_EXPLAIN'			=> 'V každom formulári, kde bol povolený plugin Otázky&amp;Odpovede, budú užívatelia opytovaný jednou z otázok, ktoré sú tu uvedené. K použitiu tohoto pluginu musí byť definovaná aspoň jedna otázka v predvolenom jazyku fóra. Tieto otázky by mali byť jednoduché, a nemali by byť vyhľadateľné botmi prostredníctvom vyhľadávačov ako napríklad Google™. Použítím viacerých otázok, ktoré budete pravidelne meniť dosiahnete lepší výsledok. Použite funkciu presnej zhody, pokiaľ chcete, aby boli kontrolované veľké písmená a medzery.',
	'QUESTION_DELETED'			=> 'Otázka vymazaná',
	'QUESTION_LANG'			=> 'Jazyk',
	'QUESTION_LANG_EXPLAIN'		=> 'Jazyk, v ktorom sú otázky a odpovede napísané.',
	'QUESTION_STRICT'			=> 'Úplná zhoda',
	'QUESTION_STRICT_EXPLAIN'	=> 'Pokiaľ povolíte kontrolu úplnej zhody, do úvahy sa bude brať aj veľkosť znakov a medzery.',

	'QUESTION_TEXT'			=> 'Otázka',
	'QUESTION_TEXT_EXPLAIN'		=> 'Otázka zobrazená užívateľovi.',

	'QA_ERROR_MSG'				=> 'Vyplňte všetky polia a vložte aspoň jednu odpoveď.',
	'QA_LAST_QUESTION'			=> 'Nemôžete zmazať všetky odpovede, pokiaľ je zvolený plugin aktívny.',
));
