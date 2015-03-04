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
	'ACP_FILES'	=> 'Jazykové súbory administrácie',
	'ACP_LANGUAGE_PACKS_EXPLAIN' => 'Tu je možné nainštalovať/odstrániť jazykové balíky. Jazyk nastavený ako predvolený je označený hviezdičkou (*).',

	'EMAIL_FILES' => 'Šablóny e-mailov',

	'FILE_CONTENTS' => 'Obsah súboru',
	'FILE_FROM_STORAGE' => 'Súbor zo zložky pre ukladanie',

	'HELP_FILES' => 'Súbory pomocníka',

	'INSTALLED_LANGUAGE_PACKS' => 'Nainštalované jazykové balíky',
	'INVALID_LANGUAGE_PACK' => 'Vybratý jazykový balík je pravdepodobne neplatný. Prosíme, skontrolujte jazykový balík a pokiaľ je potrebné, nahrajte ho znovu.',
	'INVALID_UPLOAD_METHOD' => 'Vybraná metóda nahrávania je neplatná, prosíme, vyberte inú metódu.',

	'LANGUAGE_DETAILS_UPDATED' => 'Detaily jazykového balíka boli úspešne aktualizované.',
	'LANGUAGE_ENTRIES' => 'Jazykové položky',
	'LANGUAGE_ENTRIES_EXPLAIN' => 'Tu je možné meniť existujúce záznamy v jazyku alebo zmeniť tie ešte preložené.<br /><strong>Poznámka:</strong> Akonáhle zmeníte jazykový súbor, zmeny budú uložené v oddelenej zložke, odkiaľ si ho môžete stiahnuť. Užívatelia zmeny neuvidia, pokiaľ nenahráte nový jazykový súbor na server a neprepíšete pôvodný (tým, že ho nahráte).',
	'LANGUAGE_FILES' => 'Jazykové súbory',
	'LANGUAGE_KEY' => 'Jazykový kľúč',
	'LANGUAGE_PACK_ALREADY_INSTALLED' => 'Tento balík je už nainštalovaný.',
	'LANGUAGE_PACK_DELETED'	=> 'Jazykový balík <strong>%s</strong> bol úspešne vymazaný. Všetkým užívateľom, ktorý používali tento jazykový balík bol nastavený predvolený balík fóra.',
	'LANGUAGE_PACK_DETAILS'	=> 'Detaily jazykového balíka',
	'LANGUAGE_PACK_INSTALLED' => 'Jazykový balík <strong>%s</strong> bol úspešne nainštalovaný.',
	'LANGUAGE_PACK_CPF_UPDATE' => 'Jazykové reťazce vlastného poľa v profile boli skopírované zo základného jazyka. Prosíme, ak je to potrebné, žmeňte ich.',
	'LANGUAGE_PACK_ISO'	=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME' => 'Miestny názov',
	'LANGUAGE_PACK_NAME' => 'Názov',
	'LANGUAGE_PACK_NOT_EXIST' => 'Vybraný jazykový balík neexistuje.',
	'LANGUAGE_PACK_USED_BY' => 'Používaný (vrátane botov)',
	'LANGUAGE_VARIABLE' => 'Premenná jazyka',
	'LANG_AUTHOR' => 'Autor jazykového balíka',
	'LANG_ENGLISH_NAME' => 'Anglický názov',
	'LANG_ISO_CODE' => 'ISO kód',
	'LANG_LOCAL_NAME' => 'Miestny názov',

	'MISSING_LANGUAGE_FILE' => 'Chýbajúci jazykový súbor: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES' => 'Chýbajúce jazykové premenné',
	'MODS_FILES' => 'Jazykové súbory MODov',

	'NO_FILE_SELECTED' => 'Nešpecifikovali ste súbor jazyka.',
	'NO_LANG_ID' => 'Nešpecifikovali ste jazykový balík.',
	'NO_REMOVE_DEFAULT_LANG' => 'Nemôžete vymazať predvolený jazykový balík.<br />Pokiaľ ho chcete vymazať, zmeňte najprv predvolený jazyk fóra.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Žiadne odinštalované jazykové balíky',

	'REMOVE_FROM_STORAGE_FOLDER' => 'Vymazanie z adresára pre ukladanie',

	'SELECT_DOWNLOAD_FORMAT' => 'Vyber si formát sťahovania',
	'SUBMIT_AND_DOWNLOAD' => 'Potvrdiť a stiahnuť súbor',
	'SUBMIT_AND_UPLOAD'	=> 'Potvrdiť a nahrať súbor',

	'THOSE_MISSING_LANG_FILES' => 'Nasledujúce súbory jazyka chýbajú v adresári jazyka %s',
	'THOSE_MISSING_LANG_VARIABLES' => 'Nasledujúce premenné jazyka chýbajú v jazykovom balíku <strong>%s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS' => 'Odinštalované jazykové balíky',

	'UNABLE_TO_WRITE_FILE' => 'Súbor nemôže byť zapísaný do %s.',
	'UPLOAD_COMPLETED' => 'Nahratie bolo úspešné ukončené.',
	'UPLOAD_FAILED' => 'Nahrávanie z neznámych príčin zlyhalo. Patričný súbor musíte prepísať manuálne.',
	'UPLOAD_METHOD' => 'Metóda nahrávania',
	'UPLOAD_SETTINGS' => 'Nastavenia nahrávania',

	'WRONG_LANGUAGE_FILE' => 'Vybraný jazykový súbor je neplatný.',
));
?>
