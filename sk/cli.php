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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'					=> 'Nastavte túto možnosť, pokiaľ se konfiguracia mení príliš často na to, aby sa oplatilo ju držať v medzipamäti..',
	'CLI_CONFIG_CURRENT'						=> 'Súčasná konfiguračná hodnota, použite 0 a 1 k určeniu bivalencie',
	'CLI_CONFIG_DELETE_SUCCESS'					=> 'Konfigurácia %s úspešne vymazaná.',
	'CLI_CONFIG_NEW'							=> 'Nová konfiguračná hodnota, použite 0 a 1 k určeniu bivalencie',
	'CLI_CONFIG_NOT_EXISTS'						=> 'Konfigurácia %s neexistuje',
	'CLI_CONFIG_OPTION_NAME'					=> 'Názov konfiguračnej možnosti',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'			=> 'Nastavte túto možnosť, ak má byť hodnota vytlačená bez nového riadka na konci.',
	'CLI_CONFIG_INCREMENT_BY'					=> 'Zvýšiť hodnotu o',
	'CLI_CONFIG_INCREMENT_SUCCESS'				=> 'Konfigurácia %s úspešne zvýšená',
	'CLI_CONFIG_SET_FAILURE'					=> 'Konfigurácia %s nemôže byť nastavená',
	'CLI_CONFIG_SET_SUCCESS'					=> 'Konfigurácia %s úspešne nastavená',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Zobrazí zoznam pripravených a nepripravených úloh pre cron.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Spustí všetky pripravené úlohy pre cron.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Názov úlohy, ktorá má byť spustená',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Aktualizuje databázu aplikovaním migrácií.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Zmaže konfiguračnú možnosť',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Zakáže určené rozšírenie.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Povolí určené rozšírenie.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Nájde migrácie, na ktorých nie je závislá.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Získa hodnotu konfiguračnej možnosti',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Zvýši hodnotu konfiguračnej možnosti',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Zobrazí všetky rozšírenia v databáze a súborovom systéme.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Spustiť v bezpečnom režime (bez rozšírení).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Spustiť shell.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Prečistiť rozšírenie.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Prepočítať stĺpec user_email_hash tabuľky užívateľov.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Nastaví hodnotu konfiguračnej možnosti, len ak je zhodná so súčasnou hodnotou',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Nastaví hodnotu konfiguračnej možnosti',

	'CLI_EXTENSION_DISABLE_FAILURE'				=> 'Nebolo možné zakázať rozšírenie %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'				=> 'Rozšírenie %s zakázané',
	'CLI_EXTENSION_ENABLE_FAILURE'				=> 'Nebolo možné povoliť rozšírenie %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'				=> 'Rozšírenie %s povolené',
	'CLI_EXTENSION_NAME'						=> 'Názov rozšírenia',
	'CLI_EXTENSION_PURGE_FAILURE'				=> 'Nebolo možné prečistiť rozšírenie %s',
	'CLI_EXTENSION_PURGE_SUCCESS'				=> 'Rozšírenie %s prečistené',
	'CLI_EXTENSION_NOT_FOUND'					=> 'Žiadne rozšírenia neboli nájdené.',
	'CLI_EXTENSIONS_AVAILABLE'					=> 'Dostupné',
	'CLI_EXTENSIONS_DISABLED'					=> 'Zakázané',
	'CLI_EXTENSIONS_ENABLED' 					=> 'Povolené',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Všetky hashe e-mailov úspešne prepočítané.',
));
