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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Na tejto stránke môžete spravovať všetky druhy modulov. Prosíme, uvedomte si, že ACP má 3-vrstvovú štruktúru menu (Kategória -> Kategória -> Modul), pričom ostatné majú 2-vrstvovú štruktúru menu (Kategória -> Modul), ktorá musí byť zachovaná. Prosím berte tiež na vedomie, že môžete zablokovať samého seba v prípade vypnutia alebo vymazania modulu, ktorý je zodpovedný za samotnú správu modulov.',
	'ADD_MODULE' => 'Pridať modul',
	'ADD_MODULE_CONFIRM' =>'Ste si istý že chcete pridať vybraný modul s vybraným režimom?',
	'ADD_MODULE_TITLE' => 'Pridať modul',

	'CANNOT_REMOVE_MODULE' => 'Modul nie je možné odstrániť, pretože má k sebe priradené podriadené moduly. Prosím odstráňte alebo presuňte všetky podriadené moduly pred vykonaním tejto akcie.',
	'CATEGORY' => 'Kategória',
	'CHOOSE_MODE' => 'Zvoľte režim modulu',
	'CHOOSE_MODE_EXPLAIN' => 'Zvoľte režim modulov, ktorý sa bude používať.',
	'CHOOSE_MODULE'	=> 'Zvoľte modul',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Zvoľte súbor ktorý bude vyvolaný týmto modulom.',
	'CREATE_MODULE'	=> 'Vytvoriť nový modul',

	'DEACTIVATED_MODULE' => 'Neaktívny modul',
	'DELETE_MODULE'	=> 'Vymazať modul',
	'DELETE_MODULE_CONFIRM'	=> 'Ste si istý že chcete odstrániť tento modul?',

	'EDIT_MODULE' => 'Upraviť modul',
	'EDIT_MODULE_EXPLAIN' => 'Tu môžete vložiť špecifické nastavenia modulu.',

	'HIDDEN_MODULE' => 'Skrytý modul',

	'MODULE' => 'Modul',
	'MODULE_ADDED' => 'Modul úspešne pridaný.',
	'MODULE_DELETED' => 'Modul úspešne odstránený.',
	'MODULE_DISPLAYED' => 'Modul zobrazený',
	'MODULE_DISPLAYED_EXPLAIN' => 'Ak si neprajete zobraziť tento modul, ale chcete ho používať, nastavte Nie.',
	'MODULE_EDITED' => 'Modul úspešne upravený.',
	'MODULE_ENABLED' => 'Modul povolený',
	'MODULE_LANGNAME' => 'Jazykový názov modulu',
	'MODULE_LANGNAME_EXPLAIN' => 'Napíšte zobrazený názov modulu. Použite jazykovú konštantu ak je názov použitý z jazykového súboru.',
	'MODULE_TYPE' => 'Typ modulu',

	'NO_CATEGORY_TO_MODULE'	=> 'Nie je možné zmeniť kategóriu na modul. Prosíme, skôr, ako vykonáte túti akciu, odstráňte/presuňte všetky podriadené moduly.',
	'NO_MODULE'	 => 'Žiadny modul nebol nájdený.',
	'NO_MODULE_ID' => 'Nebolo špecifikované žiadne id modulu.',
	'NO_MODULE_LANGNAME' => 'Jazykový názov modulu nebol špecifikovaný.',
	'NO_PARENT'	=> 'Nemá nadradený modul',

	'PARENT' => 'Nadradený',
	'PARENT_NO_EXIST' => 'Nadriadený modul/kategória neexistuje.',

	'SELECT_MODULE' => 'Zvoľte modul',
));
?>
