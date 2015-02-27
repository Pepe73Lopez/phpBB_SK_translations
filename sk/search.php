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
	'ALL_AVAILABLE'		             => 'Všetky dostupné',
	'ALL_RESULTS'			         => 'Všetky výsledky',

	'DISPLAY_RESULTS'		         => 'Výsledok zobraziť ako',

	'FOUND_SEARCH_MATCHES'	         => array(0 => 'Nebolo nájdené nič', 1 => 'Bola nájdená %d zhoda', 2	=> 'Boli nájdené %d zhody', 3 => 'Bolo nájdených %d zhôd',),
	'FOUND_MORE_SEARCH_MATCHES'      => array(1 => 'Bola nájdená viac než %d zhoda', 2 => 'Boli nájdení viac než %d zhody', 3 => 'Bolo nájdených viac než %d zhôd',),

	'GLOBAL'			             => 'Globálne oznámenie',

	'IGNORED_TERMS'	         	     => 'ignorované',
	'IGNORED_TERMS_EXPLAIN'	         => 'Nasledovné výrazy budú ignorované, pretože sú považované za príliš často sa vyskytujúce: <strong>%s</strong>.',

	'JUMP_TO_POST'			         => 'Prejsť na príspevok',

	'LOGIN_EXPLAIN_EGOSEARCH'	     => 'Portál vyžaduje, aby ste boli zaregistrovaný a prihlásený, ak chcete vidieť vlastné príspevky.',
	'LOGIN_EXPLAIN_UNREADSEARCH'     => 'Portál vyžaduje, aby ste boli zaregistrovaný a prihlásený, ak chcete vidieť vaše neprečítané príspevky.',
	'LOGIN_EXPLAIN_NEWPOSTS'         => 'Portál vyžaduje, aby ste boli zaregistrovaný a prihlásený, ak chcete vidieť nové príspevky, zverejnené od vašej poslednej návštevy.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE' => array(1 => 'Zadali ste príliš veľa slov, ktoré sa majú vyhľadať. Nezadávajte viac než %1$d slovo.', 2 => 'Zadali ste príliš veľa slov, ktoré sa majú vyhľadať. Nezadávajte viac než %1$d slová.', 3 => 'Zadali ste príliš veľa slov, ktoré sa majú vyhľadať. Nezadávajte viac než %1$d slov.',),

	'NO_KEYWORDS'			  => 'Musíte určiť aspoň jedno slovo, ktoré má byť vyhľadané. Každé z určených slov musí mať najmenej %s a nesmie obsahovať viac než %s (okrem *).',
	'NO_RECENT_SEARCHES'      => 'Žiadne hľadanie nebolo v poslednej dobe spustené.',
	'NO_SEARCH'			      => 'Na spustenie vyhľadávania nemáte dostatočné oprávnenia.',
	'NO_SEARCH_RESULTS'		  => 'Nebola nájdená žiadna zhoda.',
	'NO_SEARCH_LOAD'		  => 'Prepáčte, ale nie je možné spustiť vyhľadávanie. Server je príliš zaťažený. Skúste neskôr.',
	'NO_SEARCH_TIME'		  => array(1 => 'Nie je možné opätovne spustiť vyhľadávanie, skúste to znovu o %d sekúnd', 1 => 'Nie je možné opätovne spustiť vyhľadávanie, skúste to znovu za %d sekundy', 1 => 'Nie je možné opätovne spustiť vyhľadávanie, skúste to znovu za %d sekúnd',),
	'NO_SEARCH_UNREADS'		  => 'Vyhľadávanie v neprečítaných príspevkoch bolo na tomto portále zakázané.',
	'WORD_IN_NO_POST'		  => 'Nenájdené. Zadané slovo alebo výraz <strong>%s</strong> nie je obsahom žiadneho príspevku.',
	'WORDS_IN_NO_POST'		  => 'Nenájdené. Zadané slová alebo výraz <strong>%s</strong> nie je obsahom žiadneho príspevku.',

	'POST_CHARACTERS'		  => 'znakov príspevku',
	'PHRASE_SEARCH_DISABLED'  => 'Vyhľadávanie presného výrazu nie je na tomto portále podporované.',

	'RECENT_SEARCHES'		  => 'Posledné vyhľadávanie',
	'RESULT_DAYS'			  => 'Vo výsledkoch zobraziť len príspevky za',
	'RESULT_SORT'			  => 'Zoradiť výsledky podľa',
	'RETURN_FIRST'			  => 'Zobraziť prvých',
	'GO_TO_SEARCH_ADV'	      => 'Rozšírené vyhľadávanie',

	'SEARCHED_FOR'			  => 'Pužitý hľadaný výraz',
	'SEARCHED_TOPIC'		  => 'Hľadaná téma',
	'SEARCHED_QUERY'		  => 'Hľadané slová/výraz',
	'SEARCH_ALL_TERMS'		  => 'Hľadať všetky slová alebo presnú zhodu s výrazom',
	'SEARCH_ANY_TERMS'		  => 'Hľadať akýkoľvek výskyt slov alebo výrazu',
	'SEARCH_AUTHOR'			  => 'Hľadať príspevky od autora',
	'SEARCH_AUTHOR_EXPLAIN'   => 'Použite * ako náhradu časti reťazca.',
	'SEARCH_FIRST_POST'		  => 'len v prvom príspevku témy',
	'SEARCH_FORUMS'			  => 'Hľadať v týchto fórach',
	'SEARCH_FORUMS_EXPLAIN'	  => 'Označte fórum alebo fóra, v ktorých sa má zadaný výraz vyhľadať. Prehľadávanie subfór je závislé na voľbe pod oknom zoznamu fór.',
	'SEARCH_IN_RESULTS'		  => 'Hľadať vo výsledkoch',
	'SEARCH_KEYWORDS_EXPLAIN' => 'Vložte znak <strong>+</strong> pred slovo, ktoré musí byť súčasťou hľadaného výrazu a/alebo znak <strong>-</strong> pred slovo, ktoré nemá byť súčasťou hľadaného výrazu. Vpíšte do úvodzoviek zoznam slov, oddelených znakom <strong>|</strong> ak vo výsledku hľadania má byť aspoň jedno slovo z hľadaného výrazu. Použite * ako náhradu časti slova.',
	'SEARCH_MSG_ONLY'		  => 'len v texte príspevku',
	'SEARCH_OPTIONS'		  => 'Možnosti vyhľadávania',
	'SEARCH_QUERY'			  => 'Druh vyhľadávania',
	'SEARCH_SUBFORUMS'		  => 'Prehľadávať subfóra',
	'SEARCH_TITLE_MSG'		  => 'v predmetoch tém a v texte príspevku',
	'SEARCH_TITLE_ONLY'		  => 'len v názvoch tém',
	'SEARCH_WITHIN'			  => 'Hľadať v nasledovnom rozsahu',
	'SORT_ASCENDING'		  => 'vzostupne',
	'SORT_AUTHOR'			  => 'autora príspevku',
	'SORT_DESCENDING'		  => 'zostupne',
	'SORT_FORUM'			  => 'názvu fóra',
	'SORT_POST_SUBJECT'		  => 'predmetu príspevku',
    'SORT_TOPIC_TITLE'	      => 'názvu témy',
	'SORT_TIME'			      => 'času vloženia príspevku',
	'SPHINX_SEARCH_FAILED'	  => 'Hľadanie neúspešné: %s',
	'SPHINX_SEARCH_FAILED_LOG'=> 'Hľadanie nemôže byť uskutočnené. Viac informácií uložených do logu hlásení o chybách.',

	'TOO_FEW_AUTHOR_CHARS'    => array(1 => 'Musíte uviesť aspoň %d znak mena autora.', 2	=> 'Musíte uviesť aspoň %d znaky mena autora.', 3 => 'Musíte uviesť aspoň %d znakov mena autora.',),
));
