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
	'ACP_FILES'							=> 'Jazykové súbory administrácie',
	'ACP_LANGUAGE_PACKS_EXPLAIN'		=> 'Tu je možné nainštalovať/odstrániť jazykové balíky. Jazyk nastavený ako predvolený je označený hviezdičkou (*).',

	'DELETE_LANGUAGE_CONFIRM'			=> 'Ste si istí, že chcete zmazať “%s”?',

	'INSTALLED_LANGUAGE_PACKS'			=> 'Nainštalované jazykové balíky',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Jazykové detaily úspešne aktualizované.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Tento jazykový balík je už nainštalovaný.',
	'LANGUAGE_PACK_DELETED'				=> 'Jazykový balíček "%s" bol úspešne odstránený. Všetci používatelia, ktorí používajú tento jazyk na vašom fóre bude zmenený na predvolený jazyk.',
	'LANGUAGE_PACK_DETAILS'				=> 'Detaily jazykového balíčka',
	'LANGUAGE_PACK_INSTALLED'			=> 'Jazykový balíček "%s" bol úspešne nainštalovaný.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Jazykové reťazce vlastného poľa v profile boli skopírované zo základného jazyka. Prosíme, ak je to potrebné, žmeňte ich.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Miestny názov',
	'LANGUAGE_PACK_NAME'				=> 'Názov',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Vybraný jazykový balík neexistuje.',
	'LANGUAGE_PACK_USED_BY'				=> 'Používa (vrátane botov)',
	'LANGUAGE_VARIABLE'					=> 'Premenna jazyka',
	'LANG_AUTHOR'						=> 'Autor jazykového balíčka',
	'LANG_ENGLISH_NAME'					=> 'Názov',
	'LANG_ISO_CODE'						=> 'ISO kód',
	'LANG_LOCAL_NAME'					=> 'Miestny názov',

	'MISSING_LANG_FILES'				=> 'Chýbajúce jazykové súbory',
	'MISSING_LANG_VARIABLES'			=> 'Chýbajúce jazykové premenné',

	'NO_FILE_SELECTED'					=> 'Neurčili ste jazykový súbor.',
	'NO_LANG_ID'						=> 'Neurčili ste jazykové sady.',
	'NO_REMOVE_DEFAULT_LANG'			=> 'Nemôžete vymazať predvolený jazykový balík.<br />Pokiaľ ho chcete vymazať, zmeňte najprv predvolený jazyk fóra.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'		=> 'Žiadne odinštalované jazykové balíky',

	'THOSE_MISSING_LANG_FILES'			=> 'Nasledujúce súbory jazyka chýbajú v adresári jazyka',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Nasledujúce premenné jazyka chýbajú v jazykovom balíku',

	'UNINSTALLED_LANGUAGE_PACKS'		=> 'Odinštalované jazykové balíky',
));
