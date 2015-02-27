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
	'CONFIG_NOT_EXIST'			     => 'Konfiguračné nastavenia "%s" nenájdené.',

	'GROUP_NOT_EXIST'			     => 'Skupina "%s" nenájdená.',

	'MIGRATION_APPLY_DEPENDENCIES'	 => 'Aplikovať závislosti z %s.',
	'MIGRATION_DATA_DONE'			 => 'Inštalované dáta: %1$s; Čas: %2$.2f sek.',
	'MIGRATION_DATA_IN_PROGRESS'     => 'Inštalujem dáta: %1$s; Čas: %2$.2f sek.',
	'MIGRATION_DATA_RUNNING'		 => 'Inštalácia dát: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'=> 'Migrácia už je nainštalovaná (preskočené): %s',
	'MIGRATION_EXCEPTION_ERROR'		 => 'Chyba. Zmeny, ktoré boli uskutočnené pred výskytom chyby boli vrátené späť, aj napriek tomu je potrebné skontrolovať fórum.',
	'MIGRATION_NOT_FULFILLABLE'		 => 'Migráciu "%1$s" nie je možné uskutočniť, chýba "%2$s".',
	'MIGRATION_NOT_VALID'			 => '%s nie je platná migrácia.',
	'MIGRATION_SCHEMA_DONE'			 => 'Nainštalovaná schéma: %1$s; Čas: %2$.2f sek.',
	'MIGRATION_SCHEMA_RUNNING'		 => 'Inštalácia schémy: %s.',
	
	'MODULE_ERROR'				     => 'Chyba počas vytvárania modulu: %s',
	'MODULE_INFO_FILE_NOT_EXIST'	 => 'Chýbajúci informačný súbor modulu: %2$s',
	'MODULE_NOT_EXIST'	         	 => 'Potrebný modul nenájdený: %s',

	'PERMISSION_NOT_EXIST'			 => 'Nastavenia oprávnení "%s" nenájdené.',

	'ROLE_NOT_EXIST'			     => 'Funkcia oprávnení "%s" nenájdená.',
));
