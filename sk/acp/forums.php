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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS' => 'Vek príspevku na automatické prečistenie',
	'AUTO_PRUNE_DAYS_EXPLAIN' => 'Počet dní od posledného príspevku po ktorých bude téma odstránená.',
	'AUTO_PRUNE_FREQ' => 'Frekvencia automatického prečistenia',
	'AUTO_PRUNE_FREQ_EXPLAIN' => 'Čas v dňoch medzi jednotlivými prečisteniami',
	'AUTO_PRUNE_VIEWED'	=> 'Vek posledného zobrazenia na automatické prečistenie',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Počet dní od kedy bola téma prezretá a času, kedy bude odstránená.',

	'CONTINUE' => 'Pokračovať',
	'COPY_PERMISSIONS' => 'Skopírovať oprávnenia z',
	'COPY_PERMISSIONS_EXPLAIN' => 'Pre uľahčenie nastavenia nového fóra môžete skopírovať oprávnenia z už existujúceho fóra.',
	'COPY_PERMISSIONS_ADD_EXPLAIN' => 'Akonáhle bude fórum vytvorené, bude mať rovnaké oprávnenia ako tu zvolené. Pokiaľ nie je zvolené žiadne fórum, novovytvorené fórum nebude viditeľné, pokiaľ nenastavíte oprávnenia.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Pokiaľ si zvolíte skopírovať oprávnenia, fórum bude mať rovnaké oprávnenia ako tie, ktoré zvolíte tu. Toto prepíše všetky oprávnenia, ktoré ste predtým nastavili pre toto fórum oprávneniami fóra, ktoré vyberiete tu. Pokiaľ nie je zvolené žiadne fórum, budú ponechané súčasné oprávnenia.',
	'COPY_TO_ACL' => 'Alebo tiež môžete %snastaviť nové oprávnenia%s pre toto fórum.',
    'CREATE_FORUM' => 'Vytvoriť nové fórum',

	'DECIDE_MOVE_DELETE_CONTENT' => 'Odstrániť obsah, alebo presunúť do fóra',
	'DECIDE_MOVE_DELETE_SUBFORUMS' => 'Odstrániť subfóra, alebo presunúť do fóra',
	'DEFAULT_STYLE' => 'Prednastavený štýl',
	'DELETE_ALL_POSTS' => 'Zmazať príspevky',
	'DELETE_SUBFORUMS' => 'Zmazať sub-fóra a príspevky',
	'DISPLAY_ACTIVE_TOPICS' => 'Povoliť obľúbené témy',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'	=> 'Ak je nastavené na áno, v tejto kategórii budú zobrazené obľúbené témy z vybraných subfór.',

	'EDIT_FORUM' => 'Upraviť fórum',
	'ENABLE_INDEXING' => 'Povoliť indexovanie pre vyhľadávanie',
	'ENABLE_INDEXING_EXPLAIN' => 'Pokiaľ je zapnuté, príspevky vo fóre budú zahrnuté pri hľadaní.',
	'ENABLE_POST_REVIEW' => 'Povoliť prehliadnutie príspevku',
	'ENABLE_POST_REVIEW_EXPLAIN' => 'Pokiaľ je toto povolené, užívatelia si budú môcť pozrieť a prehodnotiť svoj príspevok, pokiaľ bol do témy behom písania odoslaný ďalší príspevok. Toto by malo byť vypnuté pre chatovacie fóra.',
	'ENABLE_QUICK_REPLY' => 'Povoliť rýchlu odpoveď',
	'ENABLE_QUICK_REPLY_EXPLAIN' => 'Povolí rýchlu odpoveď na tomto fóre. Toto nastavenie nie je brané do ohľadu, ak je rýchla odpoveď vypnutá všeobecne. Rýchla odpoveď bude zobrazená iba tým užívateľom, ktorí majú oprávnenie prispievať v tomto fóre.',
    'ENABLE_RECENT' => 'Zobraziť obľúbené témy',
	'ENABLE_RECENT_EXPLAIN'	=> 'Pokiaľ je toto nastavené na áno, témy vytvorené v tomto fóre budú zobrazované v zozname obľúbených tém.',
	'ENABLE_TOPIC_ICONS' => 'Povoliť ikonky témy',

	'FORUM_ADMIN' => 'Administrácia fór',
	'FORUM_ADMIN_EXPLAIN' => 'V phpBB3 je všetko založené na fórach. Kategória je iba špeciálny typ fóra. Každé fórum môže mať neobmedzený počet sub-fór a môžete určiť, či je možné do fóra prispievať, alebo nie (t.j. či sa bude správať ako stará kategória). Okrem ďalších akcií tu môžete pridávať, upravovať, odstraňovať, zamykať, alebo odomykať jednotlivé fóra. Pokiaľ sú vaše príspevky a témy nesynchrónne, môžete tiež fórum resynchronizovať. <strong>Pre zobrazenie novovytvorených fór, musíte prekopírovať alebo nastaviť náležité oprávnenia.</strong>',
	'FORUM_AUTO_PRUNE' => 'Povoliť automatické prečisťovanie',
	'FORUM_AUTO_PRUNE_EXPLAIN' => 'Automaticky prečistí fórum od tém, nastavte frekvenciu/vek nižšie.',
	'FORUM_CREATED' => 'Fórum úspešne vytvorené.',
	'FORUM_DATA_NEGATIVE' => 'Parametre prečistenia nesmú byť záporné.',
	'FORUM_DESC_TOO_LONG' => 'Popis fóra je príliš dlhý. Musí mať menej ako 4000 znakov.',
	'FORUM_DELETE' => 'Zmazať fórum',
	'FORUM_DELETE_EXPLAIN' => 'Nasledujúci formulár vám umožní zmazať fórum. Pokiaľ je do fóra možné prispievať, budete sa môcť rozhodnúť, kam chcete umiestniť všetky témy (alebo fóra), ktoré obsahovalo.',
	'FORUM_DELETED'	=> 'Fórum úspešne zmazané.',
	'FORUM_DESC' => 'Popis',
	'FORUM_DESC_EXPLAIN' => 'Žiadna HTML značka, ktorá sem bude zadaná, nebude spracovaná.',
	'FORUM_EDIT_EXPLAIN' => 'Tento formulár vám umožní prispôsobiť fórum. Prosím, uvedomte si však, že nastavenie moderátorov a počítanie príspevkov sa musí nastaviť cez Oprávnenia pre fóra pre jednotlivých užívateľov, alebo skupiny.',
	'FORUM_IMAGE' => 'Obrázok fóra',
	'FORUM_IMAGE_EXPLAIN' => 'Umiestenie, relatívne od koreňového adresára phpBB, obrázku, ktorý bude zobrazený pri tomto fóre.',
	'FORUM_IMAGE_NO_EXIST' => 'Vybraný obrázok fóra neexistuje.',
	'FORUM_LINK_EXPLAIN' => 'Úplná adresa URL (vrátane protokolu, napríklad <samp>http://</samp>), kam bude užívateľ po kliknutí presmerovaný, napr.: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK' => 'Sledovať počet presmerovaní odkazu',
	'FORUM_LINK_TRACK_EXPLAIN' => 'Sleduje, koľkokrát bolo kliknuté na odkaz.',
	'FORUM_NAME' => 'Názov fóra',
	'FORUM_NAME_EMPTY' => 'Musíte zadať názov pre toto fórum.',
	'FORUM_PARENT' => 'Nadradené fórum',
	'FORUM_PASSWORD' => 'Heslo fóra',
	'FORUM_PASSWORD_CONFIRM' => 'Potvrďte heslo fóra',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN' => 'Vyplňte len pokiaľ nastavujete heslo pro fórum.',
	'FORUM_PASSWORD_EXPLAIN' => 'Zadajte heslo pre toto fórum, použite systém oprávnení v nastaveniach.',
	'FORUM_PASSWORD_UNSET' => 'Odstrániť heslo fóra',
	'FORUM_PASSWORD_UNSET_EXPLAIN' => 'Označte túto možnosť ak chcete odstrániť heslo fóra.',
	'FORUM_PASSWORD_OLD' => 'Heslo fóra využíva staršiu verziu šifrovania a malo by byť zmenené.',
	'FORUM_PASSWORD_MISMATCH' => 'Heslá, ktoré ste zadali nie sú rovnaké.',
	'FORUM_PRUNE_SETTINGS' => 'Nastavenia prečistenia fóra',
	'FORUM_RESYNCED' => 'Fórum „%s“ bolo úspešne resynchronizované',
	'FORUM_RULES_EXPLAIN' => 'Pravidláfóra budú zobrazené na všetkých stránkach daného fóra.',
	'FORUM_RULES_LINK' => 'Odkaz na pravidlá fóra.',
	'FORUM_RULES_LINK_EXPLAIN' => 'Sem môžete zadať URL stránky/príspevku s pravidlami. Tomuto nastaveniu bude daná prednosť, pred textom, ktorý ste zadali.',
	'FORUM_RULES_PREVIEW' => 'Náhľad pravidiel fóra.',
	'FORUM_RULES_TOO_LONG' => 'Pravidlá fóra musia mať menej ako 4000 znakov.',
	'FORUM_SETTINGS' => 'Nastavenia fóra',
	'FORUM_STATUS' => 'Stav fóra',
	'FORUM_STYLE' => 'Štýl fóra',
	'FORUM_TOPICS_PAGE'	=> 'Tém na stránku',
	'FORUM_TOPICS_PAGE_EXPLAIN'	=> 'Pokiaľ nie je nastavené na 0, bude tomuto nastaveniu daná prednosť pred globálnym nastavením.',
	'FORUM_TYPE' => 'Typ fóra',
	'FORUM_UPDATED' => 'Informácie o fóre úspešne aktualizované.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK' => 'Chcete zmeniť fórum, do ktorého je možné prispievať a má subfóra, na odkaz. Prosíme, presuňte najskôr všetky subfóra inam pred tým, ako budete pokračovať, pretože po zmene fóra na odkaz už subfóra, ktoré sú aktuálne pripojené k tumotu fóru, nebudú viac viditeľné.',

	'GENERAL_FORUM_SETTINGS' => 'Všeobecné nastavenia fóra',

	'LINK' => 'Odkaz',
	'LIST_INDEX' => 'Zobraziť subfórum v legende nadradeného fóra',
	'LIST_INDEX_EXPLAIN' => 'Zobrazí toto fórum na index-e a všade inde ako odkaz v legende jeho nadradeného fóra, ak je možnosť „Vypísať subfóra v legende“ v nadradenom fóre povolená.',
	'LIST_SUBFORUMS' => 'Vypísať subfóra v legende',
	'LIST_SUBFORUMS_EXPLAIN' => 'Zobrazí subfóra tohto fóra na index-e a všade inde ako odkaz v legende, ak je možnosť „Zobraziť subfórum v legende nadradeného fóra“ povolená.',
    'LOCKED' => 'Zamknuté',

	'MOVE_POSTS_NO_POSTABLE_FORUM' => 'Do fóra, ktoré ste vybrali pre presunutie príspevku, nie je možné prispievať. Prosíme, zvoľte fórum, do ktorého je možné prispievať.',
	'MOVE_POSTS_TO'	=> 'Presunúť príspevky do',
	'MOVE_SUBFORUMS_TO' => 'Presunúť subfóra do',

	'NO_DESTINATION_FORUM' => 'Nezvolili ste fórum, kam sa presunie obsah.',
	'NO_FORUM_ACTION' => 'Nebola definovaná akcia pre naloženie s obsahom fóra',
	'NO_PARENT' => 'Nemá nadradené',
	'NO_PERMISSIONS' => 'Nekopírovať oprávnenia',
	'NO_PERMISSION_FORUM_ADD' => 'Nemáte dostatočné oprávnenia pre pridanie fóra.',
	'NO_PERMISSION_FORUM_DELETE' => 'Nemáte dostatočné oprávnenia pre mazanie fór.',

	'PARENT_IS_LINK_FORUM' => 'Nadradené fórum, ktoré ste zvolili, je nastavné ako odkaz. Fóra-odkazy nedokážu držať iné fóra, prosíme, vyberte kategóriu alebo fórum ako nadradené fórum.',
	'PARENT_NOT_EXIST' => 'Nadradené fórum neexistuje.',
	'PRUNE_ANNOUNCEMENTS' => 'Prečistenie dôležitých',
	'PRUNE_STICKY' => 'Prečistenie oznámení',
	'PRUNE_OLD_POLLS' => 'Prečistiť staré ankety',
	'PRUNE_OLD_POLLS_EXPLAIN' => 'Vymazať témy s anketami, v ktorých nikto nehlasoval od zadaných dní',

	'REDIRECT_ACL' => 'Teraz môžete %snastaviť oprávnenia%s pre toto fórum.',

	'SYNC_IN_PROGRESS'  => 'Synchronizácia fóra',
	'SYNC_IN_PROGRESS_EXPLAIN' => 'Práve synchronizujem témy %1$d až %2$d.',

	'TYPE_CAT' => 'Kategória',
	'TYPE_FORUM' => 'Fórum',
	'TYPE_LINK' => 'Odkaz',

	'UNLOCKED' => 'Odomknuté',
));
?>
