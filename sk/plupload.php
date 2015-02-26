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
	'PLUPLOAD_ADD_FILES'                      => 'Pridať súbory',
     'PLUPLOAD_ADD_FILES_TO_QUEUE'	          => 'Zaradiť súbory do fronty nahrávania a pokračovať tlačítkom “Nahrať súbory”.',
	'PLUPLOAD_ALREADY_QUEUED'	          => '%s už je zaradený.',
	'PLUPLOAD_CLOSE'			  => 'Zavrieť',
	'PLUPLOAD_DRAG'			          => 'Presuňte súbory sem.',
	'PLUPLOAD_DUPLICATE_ERROR'	          => 'Chyba, duplicitný výskyt súboru.',
	'PLUPLOAD_DRAG_TEXTAREA'	          => 'Súbory tiež môžete pridať metódou potiahni a pusť do textového okna, v ktorom píšete príspevok.',
	'PLUPLOAD_ERR_INPUT'		          => 'Nepodarilo sa otvoriť vstupný dátový tok.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	          => 'Nepodarilo sa presunúť nahratý súbor.',
	'PLUPLOAD_ERR_OUTPUT'		          => 'Nepodarilo sa otvoriť výstupný dátový tok.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	          => 'Súbor je príliš veľký:',
	'PLUPLOAD_ERR_FILE_COUNT'	          => 'Chyba v počte súborov.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	          => 'Nesprávna prípona súboru:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	          => 'Chyba nedostatku pamäte.',
	'PLUPLOAD_ERR_UPLOAD_URL'	          => 'URL adresa je neplatná alebo neexistuje.',
	'PLUPLOAD_EXTENSION_ERROR'	          => 'Nesprávna prípona súboru.',
	'PLUPLOAD_FILE'			          => 'Súbor: %s',
	'PLUPLOAD_FILE_DETAILS'		          => 'Súbor: %s, veľkosť: %d, maximálna veľkosť: %d',
	'PLUPLOAD_FILENAME'			  => 'Názov súboru',
	'PLUPLOAD_FILES_QUEUED'		          => '%d súborov vo fronte',
	'PLUPLOAD_GENERIC_ERROR'	          => 'Chyba.',
	'PLUPLOAD_HTTP_ERROR'		          => 'Chyba HTTP.',
	'PLUPLOAD_IMAGE_FORMAT'		          => 'Formát obrázku je zlý alebo nepodporovaný.',
	'PLUPLOAD_INIT_ERROR'		          => 'Chyba inicializácie.',
	'PLUPLOAD_IO_ERROR'			  => 'IO chyba.',
	'PLUPLOAD_NOT_APPLICABLE'	          => 'Nepoužíva sa',
	'PLUPLOAD_SECURITY_ERROR'	          => 'Bezpečnostná chyba.',
	'PLUPLOAD_SELECT_FILES'		          => 'Prílohy',
	'PLUPLOAD_SIZE'			          => 'Veľkosť',
	'PLUPLOAD_SIZE_ERROR'		          => 'Chyba veľkosti súboru.',
	'PLUPLOAD_STATUS'			  => 'Stav',
	'PLUPLOAD_START_UPLOAD'		          => 'Spustiť nahrávanie súborov',
	'PLUPLOAD_START_CURRENT_UPLOAD'	          => 'Spustiť nahrávanie fronty súborov',
	'PLUPLOAD_STOP_UPLOAD'		          => 'Zastaviť nahrávanie',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	          => 'Zastaviť prebiehajúce nahrávanie',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			  => 'Počet nahratých súborov: %d/%d',
));
