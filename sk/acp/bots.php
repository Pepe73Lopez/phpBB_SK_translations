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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'	=> 'Správa botov',
	'BOTS_EXPLAIN' => '„Bot“, „Spider“ (pavúk) alebo „crawler“ je program bežne používaný vyhľadávačmi na aktualizáciu ich databáz. Vzhľadom k tomu, že len zriedka správne používajú session-y, môžu narušiť počty návštev, zvyšujú záťaž a niekedy sa im nepodarí indexovať stránky správne. Tu môžete definovať špeciálny typ užívateľa na prekonanie týchto problémov.',
	'BOT_ACTIVATE' => 'Aktivovať',
	'BOT_ACTIVE' => 'Aktívny bot',
	'BOT_ADD' => 'Pridať bota',
	'BOT_ADDED' => 'Nový bot bol úspešne pridaný.',
	'BOT_AGENT' => 'Rozpoznanie bota podľa označenia',
	'BOT_AGENT_EXPLAIN'	=> 'Reťazec, ktorý je zhodný s botovým user agent-om, čiastočné zhody sú povolené.',
	'BOT_DEACTIVATE' => 'Deaktivovať',
	'BOT_DELETED' => 'Bot bol úspešne odstránený.',
	'BOT_EDIT' => 'Upraviť bota',
	'BOT_EDIT_EXPLAIN' => 'Tu môžete pridávať alebo upravovať existujúcich botov. Môžete definovať reťazec agenta a/alebo jeden alebo viac IP adries (alebo rozsah adries). Buďte opatrní pri definovaní zodpovedajúcich reťazcov agenta alebo adresy. Môžete tiež určiť štýl a jazyk, pod ktorými bot bude používať fórum. To vám umožní znížiť prenesené dáta nastavením jednoduchého štýlu botom. Nezabudnite nastaviť príslušné oprávnenia pre zvláštnu užívateľskú skupinu „Boti“.',
	'BOT_LANG' => 'Jazyk',
	'BOT_LANG_EXPLAIN' => 'Jazyk prezentovaný botom, keď prehliadajú fórum.',
	'BOT_LAST_VISIT' => 'Posledná návšteva',
	'BOT_IP' => 'IP adresa bota',
	'BOT_IP_EXPLAIN' => 'Čiastočné zhody sú povolené, adresy oddeľte čiarkou.',
	'BOT_NAME' => 'Meno bota',
	'BOT_NAME_EXPLAIN' => 'Slúži len pre vašu informáciu.',
	'BOT_NAME_TAKEN' => 'Tento názov je už na vašom fóre používaný a nemôžete ho použiť pre tohto bota.',
	'BOT_NEVER'	=> 'Nikdy',
	'BOT_STYLE'	=> 'Štýl bota',
	'BOT_STYLE_EXPLAIN'	=> 'Štýl používaný pre bota.',
	'BOT_UPDATED' => 'Nastavenia boli úspešne aktualizované.',

	'ERR_BOT_AGENT_MATCHES_UA' => 'Agent bota ktorého ste pridali je podobný tomu, ktorého práve používate. Prosím upravte agenta pre tohto bota.',
	'ERR_BOT_NO_IP'	=> 'IP adresy, ktoré ste poskytli sú neplatné, alebo hostname nemohol byť rozpoznaný.',
	'ERR_BOT_NO_MATCHES' => 'Musíte dodať minimálne buď agenta alebo IP adresu, ktorá sa zhoduje s týmto botom.',

	'NO_BOT' => 'Žiadny bot nebol nájdený podľa zadaného ID.',
	'NO_BOT_GROUP' => 'Nebolo možné nájsť špeciálnu skupinu pre botov.',
));
?>
