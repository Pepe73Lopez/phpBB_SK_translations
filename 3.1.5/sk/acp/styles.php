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
	'ACP_STYLES_EXPLAIN'						=> 'Tu môžete spravovať dostupné štýly na vašom fóre. Môžete meniť existujúce štýly, odstraňovať ich, deaktivovať, znova nainštalovať nové. Môžete pozrieť, ako štýl bude vyzerať pomocou funkcie náhľadu.',

	'CANNOT_BE_INSTALLED'						=> 'Nemôže byť nainštalovaný',
	'CONFIRM_UNINSTALL_STYLES'					=> 'Si si istý, že chcete odinštalovať vybrané štýly?',
	'COPYRIGHT'									=> 'Autorské právo',

	'DEACTIVATE_DEFAULT'						=> 'Nie je možné deaktivovať predvolený štýl.',
	'DELETE_FROM_FS'							=> 'Odstrániť zo súborového systému',
	'DELETE_STYLE_FILES_FAILED'					=> 'Chyba pri odstráňovaní súborov pre štýl "%s".',
	'DELETE_STYLE_FILES_SUCCESS'				=> 'Súbory pre štýl "%s" boli úspešne odstránené',
	'DETAILS'									=> 'Detaily',

	'INHERITING_FROM'							=> 'Dedí z',
	'INSTALL_STYLE'								=> 'Inštálácia štýlu',
	'INSTALL_STYLES'							=> 'Inštalácia štýlov',
	'INSTALL_STYLES_EXPLAIN'					=> 'Tu si môžete nainštalovať nové štýly.<br />Ak nemôžete nájsť váš určitý štýl v zozname nižšie, skontrolujte, či štýl je už nainštalovaný. Ak nie je nainštalovaný, skontrolujte, či je správne nahraný.',
	'INVALID_STYLE_ID'							=> 'Neplatné ID štýlu.',

	'NO_MATCHING_STYLES_FOUND'					=> 'Žiadne štýly zodpovedajúce vášmu dotazu.',
	'NO_UNINSTALLED_STYLE'						=> 'Neboli zistené žiadne odinštalované štýly.',

	'PURGED_CACHE'								=> 'Medzipamäť bola prečistená.',
	
	'REQUIRES_STYLE'							=> 'Tento štýl si vyžaduje štýl  "%s".',

	'STYLE_ACTIVATE'							=> 'Aktivovať',
	'STYLE_ACTIVE'								=> 'Aktívny',
	'STYLE_DEACTIVATE'							=> 'Deaktivovať',
	'STYLE_DEFAULT'								=> 'Nastaviť ako predvolený štýl',
	'STYLE_DEFAULT_CHANGE_INACTIVE'				=> 'Musíte najskôr aktivovať svoj štýl, pred tým, než bude predvoleným.',
	'STYLE_ERR_INVALID_PARENT'					=> 'Neplatný rodič štýlu.',
	'STYLE_ERR_NAME_EXIST'						=> 'Štýl s týmto názvom už existuje.',
	'STYLE_ERR_STYLE_NAME'						=> 'Musíte zadať názov pre tento štýl.',
	'STYLE_INSTALLED'							=> 'Štýl "%s" bol úspešne nainštalovaný.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Návrat do zoznamu nainštalovaných štýlov',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Inštalácia viacerých štýlov',
	'STYLE_NAME'								=> 'Názov štýlu',
	'STYLE_NAME_RESERVED'						=> 'Štýl "%s" sa nedá nainštalovať, pretože názov je vyhradený.',
	'STYLE_NOT_INSTALLED'						=> 'Štýl "%s" nebol úspešne nainštalovaný.',
	'STYLE_PATH'								=> 'Cesta k štýlu',
	'STYLE_UNINSTALL'							=> 'Odinštalovať',
	'STYLE_UNINSTALL_DEPENDENT'					=> 'Štýl "%s" nemožno odinštalovať, pretože má jeden alebo viacero podriadených štýlov.',
	'STYLE_UNINSTALLED'							=> 'Štýl "%s" bol úspešne odinštalovaný.',
	'STYLE_USED_BY'								=> 'Používa (vrátane botov)',

	'UNINSTALL_DEFAULT'							=> 'Nemožno odinštalovať predvolený štýl.',
));
