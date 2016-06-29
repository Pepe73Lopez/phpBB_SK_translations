<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @authors phpBB3.sk, PepeLopez, Fonzi
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'			=> 'Pridať súbory',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'		=> 'Zaradiť súbory do fronty nahrávania a pokračovať tlačítkom “Nahrať súbory”.',
	'PLUPLOAD_ALREADY_QUEUED'		=> '%s už je zaradený.',
	'PLUPLOAD_CLOSE'				=> 'Zatvoriť',
	'PLUPLOAD_DRAG'				=> 'Presuňte súbory sem.',
	'PLUPLOAD_DUPLICATE_ERROR'		=> 'Chyba, duplicitný výskyt súboru.',
	'PLUPLOAD_DRAG_TEXTAREA'			=> 'Súbory tiež môžete pridať metódou potiahni a pusť do textového okna, v ktorom píšete príspevok.',
	'PLUPLOAD_ERR_INPUT'			=> 'Nepodarilo sa otvoriť vstupný dátový tok.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'		=> 'Nepodarilo sa presunúť nahratý súbor.',
	'PLUPLOAD_ERR_OUTPUT'			=> 'Nepodarilo sa otvoriť výstupný dátový tok.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'		=> 'Súbor je príliš veľký:',
	'PLUPLOAD_ERR_FILE_COUNT'		=> 'Chyba v počte súborov.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Nesprávna prípona súboru:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'		=> 'Chyba nedostatku pamäte.',
	'PLUPLOAD_ERR_UPLOAD_URL'		=> 'URL adresa je neplatná alebo neexistuje.',
	'PLUPLOAD_EXTENSION_ERROR'		=> 'Nesprávna prípona súboru.',
	'PLUPLOAD_FILE'				=> 'Súbor: %s',
	'PLUPLOAD_FILE_DETAILS'			=> 'Súbor: %s, veľkosť: %d, maximálna veľkosť: %d',
	'PLUPLOAD_FILENAME'				=> 'Filename',
	'PLUPLOAD_FILES_QUEUED'			=> '%d files queued',
	'PLUPLOAD_GENERIC_ERROR'			=> 'Generic error.',
	'PLUPLOAD_HTTP_ERROR'			=> 'HTTP error.',
	'PLUPLOAD_IMAGE_FORMAT'			=> 'Image format either wrong or not supported.',
	'PLUPLOAD_INIT_ERROR'			=> 'Init error.',
	'PLUPLOAD_IO_ERROR'				=> 'IO error.',
	'PLUPLOAD_NOT_APPLICABLE'		=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'		=> 'Security error.',
	'PLUPLOAD_SELECT_FILES'			=> 'Select files',
	'PLUPLOAD_SIZE'				=> 'Size',
	'PLUPLOAD_SIZE_ERROR'			=> 'File size error.',
	'PLUPLOAD_STATUS'				=> 'Status',
	'PLUPLOAD_START_UPLOAD'			=> 'Start upload',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Start uploading queue',
	'PLUPLOAD_STOP_UPLOAD'			=> 'Stop upload',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Stop current upload',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'				=> 'Uploaded %d/%d files',
));
