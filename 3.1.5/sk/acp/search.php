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
	'ACP_SEARCH_INDEX_EXPLAIN' 					=> 'Tu sa dajú spravovať vyhľadávacie indexy. Vzhľadom k tomu, že bežne používate len jeden index, mali by ste odstrániť všetky indexy, ktoré nepoužívate. Po zmene niektorých nastavení vyhľadávania (napr. minimálny/maximálny počet znakov) bude možno stáť za to vytvoriť nový index, aby sa prejavili nové zmeny.',
	'ACP_SEARCH_SETTINGS_EXPLAIN' 				=> 'Tu môžete definovať, aký backend bude použitý pre indexovanie príspevkov a vyhľadávanie. Môžete nastaviť rôzne možnosti, ktoré môžu ovplyvniť to, ako bude vyhľadávanie náročné na server. Niektoré z týchto nastavení sú rovnaké pre všetky backendy.',

	'COMMON_WORD_THRESHOLD'						=> 'Hranice často používaného slova',
	'COMMON_WORD_THRESHOLD_EXPLAIN'				=> 'Slová, ktoré sa objavujú v príspevkoch vo väčšej miere sú považované ako časté. Časté slová sú pri vyhľadávaní ignorované. Nastavte 0 pre vypnutie tejto možnosti. Táto funkcia sa dá použiť len pri viac než 100 príspevkoch. Ak chcete slová, ktoré sú označené ako obycačjné, opäť vyhľadávať, musíte znovu vytvorte index.',
	'CONFIRM_SEARCH_BACKEND' 					=> 'Prajete si prepnúť na iný vyhľadávací backend? Po zmene vyhľadávacieho backendu budete musieť vytvoriť index pre nový vyhľadávací backend. Pokiaľ neplánujete prepnúť späť na predchádzajúci vyhľadávací backend, môžete tiež zmazať staré backendové indexy a uvoľniť tak systémové prostriedky.',
	'CONTINUE_DELETING_INDEX' 					=> 'Pokračovať v predchádzajúcom odstraňovaní indexu',
	'CONTINUE_DELETING_INDEX_EXPLAIN' 			=> 'Bol zahájený proces zmazania vyhľadávacieho indexu. Pre opätovné sprístupnenie vyhľadávacieho indexu musíte túto operáciu dokončiť, alebo zrušiť.',
	'CONTINUE_INDEXING'							=> 'Pokračovať v predchádzajúcom indexačnom procese',
	'CONTINUE_INDEXING_EXPLAIN'					=> 'Bol zahájený proces vytvorenia vyhľadávacieho indexu. Pre opätovné sprístupnenie vyhľadávania musíte túto operáciu dokončiť, alebo zrušiť.',
	'CREATE_INDEX' 								=> 'Vytvoriť index',

	'DELETE_INDEX' 								=> 'Zmazať index',
	'DELETING_INDEX_IN_PROGRESS' 				=> 'Prebieha mazanie indexu',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN' 		=> 'Vyhľadávací backend práve prečisťuje svoj index. Toto môže trvať niekoľko minút.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION' 		=> 'MySQL fulltext backend môže byť použitý len od MySQL4 a vyššie.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED' 				=> 'MySQL fulltext index sa dá vytvoriť len v MyISAM alebo InnoDB tabuľkách. MySQL 5.6.4 alebo novšie je potrebné pre fulltext index na InnoDB tabuľkách.',
	'FULLTEXT_MYSQL_TOTAL_POSTS' 				=> 'Celkový počet indexovaných príspevkov',
	'FULLTEXT_MYSQL_MBSTRING'					=> 'Podpora UTF-8 znakov mimo znakovej sady latin použitím mbstring:',
	'FULLTEXT_MYSQL_PCRE' 						=> 'Podpora UTF-8 znakov mimo znakovej sady latin použitím PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN' 			=> 'Ak PCRE neobsahuje vlastnosti unicode znakov, vyhľadávací backend sa pokúsi využiť regulárne výrazy zo zdrojov mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN' 				=> 'Ak chcete vyhľadávať znaky mimo znakovej sady latin, tento vyhľadávací backend vyžaduje vlastnosti unicode znakov z PCRE, ktoré sú dostupné len v PHP 4.4, 5.1 a vyšších.',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Slová s aspoň toľko znakmi budú indexované pre vyhľadávanie. Vy alebo váš hostiteľ môže toto nastavenie zmeniť iba zmenou konfigurácie mysql.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Slová s menej ako týmto počtom znakov budú indexované pre vyhľadávanie. Vy alebo váš hostiteľ môže toto nastavenie zmeniť iba zmenou konfigurácie mysql.',

	'GENERAL_SEARCH_SETTINGS'					=> 'Všeobecné nastavenia hľadania',
	'GO_TO_SEARCH_INDEX' 						=> 'Prejsť na stránku vyhľadávania',

	'INDEX_STATS' 								=> 'Štatistiky indexu',
	'INDEXING_IN_PROGRESS'			 			=> 'Prebieha indexácia',
	'INDEXING_IN_PROGRESS_EXPLAIN' 				=> 'Vyhľadávací backend práve indexuje všetky príspevky na fóre. Toto môže trvať niekoľko minút až hodín, podľa veľkosti vášho fóra.',

	'LIMIT_SEARCH_LOAD' 						=> 'Obmedzenie vyhľadávania pri zaťažení serveru',
	'LIMIT_SEARCH_LOAD_EXPLAIN'					=> 'Pokiaľ priemer vyťaženia serveru za 1 minútu dosiahne túto hodnotu, stránka vyhľadávania sa automaticky vypne, 1.0 sa rovná ~100% využitia jedného procesora. Toto funguje len na UNIXových serveroch.',

	'MAX_SEARCH_CHARS' 							=> 'Maximálny počet znakov pre indexáciu',
	'MAX_SEARCH_CHARS_EXPLAIN' 					=> 'Len slová, ktoré sa skladajú z menej znakov, ako je nastavené, budú zaindexované.',
	'MAX_NUM_SEARCH_KEYWORDS' 					=> 'Maximálny počet povolených kľúčových slov',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN' 			=> 'Maximálny počet slov, ktoré môže užívateľ vyhľadať. Pokiaľ je nastavená 0, nie je žiadné obmedzenie v počte slov.',
	'MIN_SEARCH_CHARS' 							=> 'Maximálny počet znakov pre indexáciu',
	'MIN_SEARCH_CHARS_EXPLAIN' 					=> 'Slová s minimálne toľkým počtom znakov budú zaindexované.',
	'MIN_SEARCH_AUTHOR_CHARS' 					=> 'Minimálny počet znakov v mene autora',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN' 			=> 'Užívatelia musia vložiť minimálne tento počet znakov pri vyhľadávaní užívateľského mena s použitím zástupných znakov. Pokiaľ je užívateľove meno kratšie, ako je tu nastavený počet znakov, je stále možné vyhľadať jeho príspevky zadaním celého užívateľského mena.',

	'PROGRESS_BAR' 								=> 'Postup',

	'SEARCH_GUEST_INTERVAL'						=> 'Ochranný interval pre návštevníkov',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'				=> 'Počet sekúnd, ktorý musí návštevník počkať medzi jednotlivými hľadaniami. Pokiaľ jeden návštevník vyhľadáva, ostatní musia počkať kým uplynie táto lehota.',
	'SEARCH_INDEX_CREATE_REDIRECT' 				=> 'Príspevky až k id %1$d boli dosiaľ zaindexované, z toho %2$d príspevkov v tomto kroku.<br />Súčasný priemer indexácie je približne %3$.1f príspevkov za sekundu.<br />Indexácia práve prebieha…',
	'SEARCH_INDEX_DELETE_REDIRECT' 				=> 'Príspevky až k id %1$d boli dosiaľ odstránené z indexu vyhľadávania.<br />Odstraňovanie práve prebieha…',
	'SEARCH_INDEX_CREATED' 						=> 'Všetky príspevky v databáze fóra boli úspešne zaindexované.',
	'SEARCH_INDEX_REMOVED' 						=> 'Vyhľadávací index tohto backendu bol úspešne odstránený.',
	'SEARCH_INTERVAL' 							=> 'Ochranný interval pre užívateľov',
	'SEARCH_INTERVAL_EXPLAIN' 					=> 'Počet sekúnd, ktorý musia užívatelia počkať medzi vyhľadávaniami. Tento interval sa kontroluje zvlášť pre každého užívateľa.',
	'SEARCH_STORE_RESULTS' 						=> 'Dĺžka cache pre výsledky vyhľadávania',
	'SEARCH_STORE_RESULTS_EXPLAIN' 				=> 'Cacheované výsledky vyhľadávania sa automaticky odstránia po uplynutí tejto doby. Nastavte na 0 ak chcete vypnúť cacheovanie vyhľadávania.',
	'SEARCH_TYPE' 								=> 'Vyhľadávací backend',
	'SEARCH_TYPE_EXPLAIN' 						=> 'phpBB vám umožňuje vybrať backend, ktorý je použitý pre vyhľadávanie na fóre. V základnom nastavení phpBB použije vlastné fulltextové vyhľadávanie.',
	'SWITCHED_SEARCH_BACKEND' 					=> 'Zmenili ste vyhľadávací backend. Aby ste mohli využívat nový vyhľadávací backend, mali by ste sa uistiť, že pre vyhľadávací backend, ktorý ste si vybrali, je vytvorený aj index.',

	'TOTAL_WORDS' 								=> 'Celkový počet indexovaných slov',
	'TOTAL_MATCHES'								=> 'Celkový počet spojení medzi slovami a príspevkami',

	'YES_SEARCH' 								=> 'Povoliť vyhľadávanie',
	'YES_SEARCH_EXPLAIN' 						=> 'Umožniť užívateľom využívať vyhľadávanie vrátane vyhľadávania užívateľov.',
	'YES_SEARCH_UPDATE' 						=> 'Povoliť aktualizáciu indexu',
	'YES_SEARCH_UPDATE_EXPLAIN' 				=> 'Aktualizuje fulltextové indexy po pridaní príspevku, ignorované pokiaľ je vyhľadávanie vypnuté.',
));
?>
