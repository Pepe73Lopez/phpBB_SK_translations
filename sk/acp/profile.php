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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'			=> 'Vlastné pole v profile bolo úspešne pridané.',
	'ALPHA_ONLY'					=> 'Iba alfanumerické znaky',
	'ALPHA_SPACERS'					=> 'Alfanumerické znaky a medzery',
	'ALWAYS_TODAY'					=> 'Vždy aktuálny dátum',

	'BOOL_ENTRIES_EXPLAIN'			=> 'Vložte svoje možnosti sem',
	'BOOL_TYPE_EXPLAIN'				=> 'Zvoľte typ, buď zaškrtávacie pole alebo prepínateľné tlačidlo. Zaškrtávacie políčko sa zobrazí, iba ak je vybrané pre daného užívateľa. V tom prípade bude použitá <strong>druhá</strong> jazyková možnosť. Prepínacie tlačítka sa zobrazia vždy bez ohľadu na ich hodnotu.',
	
	'CHANGED_PROFILE_FIELD'			=> 'Pole v profile bolo úspešne zmenené',
	'CHARS_ANY'						=> 'Akýkoľvek znak',
	'CHECKBOX'						=> 'Zaškrtávacie pole',
	'COLUMNS'						=> 'Stĺpce',
	'CP_LANG_DEFAULT_VALUE'			=> 'Prednastavená hodnota',
	'CP_LANG_EXPLAIN'				=> 'Popis poľa',
	'CP_LANG_EXPLAIN_EXPLAIN'		=> 'Vysvetlenie poľa pre užívateľa',
	'CP_LANG_NAME'					=> 'Názov/popis poľa zobrazený užívateľovi',
	'CP_LANG_OPTIONS'				=> 'Možnosti',
	'CREATE_NEW_FIELD'				=> 'Vytvoriť nové pole',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Minimálne jedno vlastné pole v profile ešte nebolo preložené. Prosíme, vyplňte požadované informácie kliknutím na odkaz „Preložiť“.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Základný jazyk [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Pre toto pole v profile neboli jazykové kľúče pre základný jazyk vyplnené.',
	'DEFAULT_VALUE'					=> 'Základná hodnota',
	'DELETE_PROFILE_FIELD'			=> 'Odstrániť pole v profile',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Skutočne chcete odstrániť toto pole?',
	'DISPLAY_AT_PROFILE'			=> 'Zobraziť v užívateľskom kontrolnom paneli',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Užívateľ môže meniť údaje v užívateľskom kontrolnom paneli.',
	'DISPLAY_AT_REGISTER'			=> 'Zobraziť pri registrácii',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Pokiaľ je táto možnosť povolená, pole bude zobrazené aj pri registrácii.',
	'DISPLAY_ON_VT'					=> 'Zobrazit v témach',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Ak je táto možnosť povolená, pole bude zobrazené v mini-profile v zobrazení tém.',
	'DISPLAY_PROFILE_FIELD'			=> 'Verejne zobraziť pole v profile',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Položka bude zobrazená na všetkých miestach, ktoré sú povolené v nastaveniach zaťaženia. Nastavenie tejto možnosti na „nie“ skryje toto pole na stránkach tém, profilov a v zozname členov.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Vložte možnosti, každú možnosť na nový riadok.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Majte na vedomí, že môžete meniť texty možností, a tiež pridávať nové možnosti na koniec. Nie je doporučené pridávať nové možnosti medzi už existujúce možnosti, mohlo by to spôsobiť priradenie zlej možnosti užívateľom. Toto by sa taktiež mohlo stať, pokiaľ odstránite niektorú z možností uprostred. Po odstránení možností z konca spôsobí, že užívateľom bude vrátená základná hodnota.',
	'EMPTY_FIELD_IDENT'				=> 'Označenie prázdneho poľa',
	'EMPTY_USER_FIELD_NAME'			=> 'Prosím vložte názov/popis poľa',
	'ENTRIES'						=> 'Možnosti',
	'EVERYTHING_OK'					=> 'Všetko v poriadku',

	'FIELD_BOOL'					=> 'Booleovský (Áno/Nie)',
 	'FIELD_DATE'					=> 'Dátum',
	'FIELD_DESCRIPTION'				=> 'Popis poľa',
	'FIELD_DESCRIPTION_EXPLAIN'		=> 'Vysvetlenie poľa, ktoré bude zobrazené užívateľom',
	'FIELD_DROPDOWN'				=> 'Rolovacie menu',
	'FIELD_IDENT'					=> 'Označenie poľa',
	'FIELD_IDENT_ALREADY_EXIST'		=> 'Vybrané označenie poľa už existuje, vyberte prosím iné označenie.',
	'FIELD_IDENT_EXPLAIN'			=> 'Označenie poľa je názov, pod ktorým bude pole uložené v databáze a štýloch.',
	'FIELD_INT'						=> 'Čísla',
	'FIELD_LENGTH'					=> 'Dĺžka vstupného poľa',
	'FIELD_NOT_FOUND'				=> 'Pole profilu nebolo nájdené',
	'FIELD_STRING'					=> 'Jedno textové pole',
	'FIELD_TEXT'					=> 'Textové pole',
	'FIELD_TYPE'					=> 'Typ poľa',
	'FIELD_TYPE_EXPLAIN'			=> 'Typ poľa nebudete môcť zmeniť neskôr.',
	'FIELD_VALIDATION'				=> 'Potvrdenie položky',
	'FIRST_OPTION'					=> 'Prvá možnosť',

	'HIDE_PROFILE_FIELD'			=> 'Skryť pole v profile',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Skryje pole v profile pred všetkými užívateľmi okrem samotného užívateľa, administrátorov a moderátorov, ktorí stále môžu vidieť toto pole. Ak je možnosť Zobraziť v užívateľskom kontrolnom paneli vypnutá, užívateľ nebude môcť vidieť alebo zmeniť toto pole, a tak toto pole budú môcť zmeniť len administrátori.',

	'INVALID_CHARS_FIELD_IDENT'		=> 'Označenie poľa môže obsahovať iba malé a-z a _',
	'INVALID_FIELD_IDENT_LEN'		=> 'Označenie poľa môže mať najviac 17 znakov',
	'ISO_LANGUAGE'					=> 'Jazyk [%s]',

	'LANG_SPECIFIC_OPTIONS'			=> 'Špecifické nastavenia jazyka [<strong>%s</strong>]',
	
	'MAX_FIELD_CHARS'				=> 'Maximálny počet znakov',
	'MAX_FIELD_NUMBER'				=> 'Najvyššie povolené číslo',
	'MIN_FIELD_CHARS'				=> 'Minimálny počet znakov',
	'MIN_FIELD_NUMBER'				=> 'Najmenšie povolené číslo',
	
	'NO_FIELD_ENTRIES'				=> 'Neboli zadané žiadne záznamy',
	'NO_FIELD_ID'					=> 'Nebolo zvolené id poľa',
	'NO_FIELD_TYPE'					=> 'Nebol zvolený typ poľa',
	'NO_VALUE_OPTION'				=> 'Nastavenie sa nerovná vloženej hodnote',
	'NO_VALUE_OPTION_EXPLAIN'		=> 'Hodnota pre neplatný vstup. Ak je pole vyžadované, užívateľ dostane chybovú hlášku ak si vyberie možnosť, ktorá je vybratá tu.',
	'NUMBERS_ONLY'					=> 'Iba čísla (0-9)',

	'PROFILE_BASIC_OPTIONS'			=> 'Základné možnosti',
	'PROFILE_FIELD_ACTIVATED'		=> 'Pole v profile úspešne aktivované.',
	'PROFILE_FIELD_DEACTIVATED'		=> 'Pole v profile úspešne deaktivované.',
	'PROFILE_LANG_OPTIONS'			=> 'Špecifické nastavenia jazyka',
	'PROFILE_TYPE_OPTIONS'			=> 'Špecifické nastavenia typu položky',

	'RADIO_BUTTONS'					=> 'Prepínacie tlačítka',
	'REMOVED_PROFILE_FIELD'			=> 'Pole v profile úspešne odstránené.',
	'REQUIRED_FIELD'				=> 'Povinné pole',
	'REQUIRED_FIELD_EXPLAIN'		=> 'Vynútiť vyplnenie tohto poľa v profile užívateľom alebo administrátorom. Ak je táto možnosť vypnutá pri registrácii, pole bude požadované len ak bude užívateľ upravovať svoj profil.',
	'ROWS'							=> 'Riadky',

	'SAVE'							=> 'Uložiť',
	'SECOND_OPTION'					=> 'Druhá možnosť',
	'SHOW_NOVALUE_FIELD'			=> 'Zobraziť pole ak nebla vybraná žiadna možnosť',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'Určuje, či má byť pole profilu zobrazené ak nebola vybraná žiadna možnosť pre pole s možnosťami, alebo ak zatiaľ nebola vybraná žiadna možnosť pre požadované pole.',
	'STEP_1_EXPLAIN_CREATE'			=> 'Tu môžete zvoliť prvé základné parametre vášho nového poľa v profile. Tieto informácie sú potrebné pre druhý krok, kde budete môcť pridať ďalšie možnosti a doladiť ďalšie vaše pole v profile ešte viac.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Tu môžete zmeniť základné parametre vášho poľa v profile. Relevantné položky sú prepočítané v druhom kroku.',
	'STEP_1_TITLE_CREATE'			=> 'Pridať pole v profile',
	'STEP_1_TITLE_EDIT'				=> 'Upraviť pole v profile',
	'STEP_2_EXPLAIN_CREATE'			=> 'Tu môžete definovať niektoré základné nastavenia, ktoré chcete upraviť.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Tu môžete zmeniť niektoré základné nastavenia.<br /><strong>Berte na vedomie, že zmeny, ktoré robíte s poľami v profile neovplyvnia údaje doposiaľ zadané vašimi užívateľmi.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Špecifické možnosti typu',
	'STEP_2_TITLE_EDIT'				=> 'Špecifické možnosti typu',
	'STEP_3_EXPLAIN_CREATE'			=> 'Vzhľadom k tomu, že máte na fóre viac jazykov, musíte vyplniť aj zvyšné položky súvisiace s jazykom. Pole v profile bude fungovať s povoleným prednastaveným jazykom, zvyšné jazyky môžete doplniť neskôr.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Vzhľadom k tomu, že máte na fóre viac jazykov, môžete teraz zmeniť alebo pridať aj zvyšné jazykové položky. Pole v profile bude fungovať s povoleným prednastaveným jazykom.',
	'STEP_3_TITLE_CREATE'			=> 'Zvyšné definície jazykov',
	'STEP_3_TITLE_EDIT'				=> 'Definície jazykov',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Vložte prednastavenú hodnotu, ktorá sa má zobraziť. Ak chcete zobraziť prázdnu správu, nechajte toto pole prázdne.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Vložte prednastavený text, ktorý sa má zobraziť. Ak nechcete zobraziť žiadny text, nechajte toto pole prázdne.',
	'TRANSLATE'						=> 'Preložiť',

	'USER_FIELD_NAME'				=> 'Názov/popis poľa, ktorý sa zobrazí užívateľovi',

	'VISIBILITY_OPTION'				=> 'Možnosti zobrazenia',
));

?>
