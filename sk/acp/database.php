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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN' => 'Tu môžete zálohovať všetky dáta spojene s vašim phpBB fórom. Vytvorený archív môžete uložiť do adresára <samp>store/</samp> alebo ho rovno stiahnuť. V závoslosti od nastavenia vášho servera budete môcť komprimovať súbor do rôznych formátov.',
	'ACP_RESTORE_EXPLAIN' => 'Toto vykoná plnú obnovu všetkých phpBB tabuliek z uloženého súboru. Ak to váš server podporuje, môžete použiť gzip-om alebo bzip2-om komprimovaný textový súbor, ktorý bude automaticky rozbalený. <strong>POZOR</strong> Týmto krokom prepíšete všetky existujúce dáta. Obnova môže trvať dlhú dobu, takže prosíme, neopúšťajte túto stránku, pokiaľ nebude hotová. Zálohy sú uložená v adresári <samp>store/</samp> a je predpokladané, že sú vygenerované zálohovacou funkcionalitou phpBB. Použitie záloh, ktoré neboli vytvorené vstavaným systémom môžu, ale nemusia fungovať.',

	'BACKUP_DELETE'	=> 'Súbor zálohy bol úspešne odstránený.',
	'BACKUP_INVALID' => 'Vybraný súbor na zálohu je nesprávny.',
	'BACKUP_OPTIONS' => 'Možnosti zálohy',
	'BACKUP_SUCCESS' => 'Súbor zálohy bol úspešne vytvorený.',
	'BACKUP_TYPE' => 'Typ zálohy',

	'DATABASE' => 'Nástroje databázy',
	'DATA_ONLY' => 'Iba dáta',
	'DELETE_BACKUP'	=> 'Odstrániť zálohu',
	'DELETE_SELECTED_BACKUP' => 'Ste si istý, že chcete odstrániť označenú zálohu?',
	'DESELECT_ALL' => 'Zrušiť výber',
	'DOWNLOAD_BACKUP' => 'Stiahnuť zálohu',

	'FILE_TYPE'	=> 'Typ súboru',
	'FILE_WRITE_FAIL' => 'Nemožno uložiť súbor v ukladacom adresári',
	'FULL_BACKUP' => 'Plná',

	'RESTORE_FAILURE' => 'Súbor so zálohou môže byť poškodený.',
	'RESTORE_OPTIONS' => 'Možnosti obnovy',
	'RESTORE_SELECTED_BACKUP' => 'Ste si istý, že chcete obnoviť vybratú zálohu?',
	'RESTORE_SUCCESS' => 'Databáza bola úspešne obnovená.<br /><br />Vaše fórum by malo byť v stave, v ktorom bola táto záloha vytvorená.',

	'SELECT_ALL' => 'Označiť všetko',
	'SELECT_FILE' => 'Vybrať súbor',
	'START_BACKUP' => 'Spustiť zálohovanie',
	'START_RESTORE'	=> 'Spustiť obnovu',
	'STORE_AND_DOWNLOAD' => 'Uložiť a stiahnuť',
	'STORE_LOCAL' => 'Uložiť súbor lokálne',
	'STRUCTURE_ONLY' => 'Iba štruktúra',

	'TABLE_SELECT' => 'Výber tabuľky',
	'TABLE_SELECT_ERROR' => 'Musíte vybrať aspoň jednu tabuľku.',
));
?>
