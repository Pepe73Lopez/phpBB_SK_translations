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
	'ACP_FILES'							=> 'Jazykové súbory Administrátorského panelu',
	'ACP_LANGUAGE_PACKS_EXPLAIN'		=> 'Odtiaľto môžete inštalovať alebo mazať jazykové balíky. Východzí jazyk portálu je označený symbolom *.',

	'DELETE_LANGUAGE_CONFIRM'			=> 'Ste si istý, že chcete zmazať “%s”?',

	'INSTALLED_LANGUAGE_PACKS'			=> 'Nainštalované jazykové balíky',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Detaily jazykového balíku úspešne upravené.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Tento jazykový balík už je nainštalovaný.',
	'LANGUAGE_PACK_DELETED'				=> 'Jazykový balík “%s” bol úspešne zmazaný. Všetkým užívateľom, ktorí používali tento jazykový balík bol jazýkový balík zmenený na východzí jazykový balík portálu.',
	'LANGUAGE_PACK_DETAILS'				=> 'Úprava detailov jazykového balíku',
	'LANGUAGE_PACK_INSTALLED'			=> 'Jazykový balík “%s” bol úspešne nainštalovaný.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Vlastné názvy polí profilu boli prevzaté/skopírované z východzieho jazykového balíku portálu. Zmeňte ich prosím, ak je to potrebné.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokalizované meno',
	'LANGUAGE_PACK_NAME'				=> 'Meno',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Zvolený jazykový balík nenexistuje.',
	'LANGUAGE_PACK_USED_BY'				=> 'Použitý (vrátane robotov)',
	'LANGUAGE_VARIABLE'					=> 'Premenná',
	'LANG_AUTHOR'						=> 'Autor jazykového balíku',
	'LANG_ENGLISH_NAME'					=> 'Anglický názov',
	'LANG_ISO_CODE'						=> 'ISO kód',
	'LANG_LOCAL_NAME'					=> 'Lokalizovaný názov',

	'MISSING_LANG_FILES'		=> 'Chýbajúce súbory jazykového balíku',
	'MISSING_LANG_VARIABLES'	=> 'Premenné nedefinované v súboroch jazykového balíku',

	'NO_FILE_SELECTED'				=> 'Nevybrali ste súbor jazykového balíku.',
	'NO_LANG_ID'					=> 'Nevybrali ste jazykový balík.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Nemôžete odstrániť východzí jazykový balík portálu.<br />Ak chcete odstrániť tento jazykový balík, zmeňte najprv východzí jazykový balík portálu.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Žiadne nenaištalované jazykové balíky',

	'THOSE_MISSING_LANG_FILES'			=> 'Nasledujúce súbory jazykového balíku chýbajú v priečinku jazykového balíku “%s”',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Nasledujúce premennné nie sú v jazykovom balíku “%s” definované',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Odinštalované jazykové balíky',
));
