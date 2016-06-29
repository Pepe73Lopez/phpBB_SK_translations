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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Oprávnenia sú veľmi podrobné a rozdelené do štyroch hlavných skupín, ktoré sú:</p>

		<h2>Globálne oprávnenia</h2>
		<p>Tieto sú používané na kontrolovanie prístupu na globálnej úrovni a platia na celom fóre. Sú ďalej rozdelené na Oprávnenia užívateľov, Oprávnenia skupín, Administrátorov a Globálnych Moderátorov.</p>

		<h2>Oprávnenia založené na fórach</h2>
		<p>Tieto sú používané na kontrolovanie prístupu k jednotlivým fóram, pre každé zvlášť. Sú ďalej rozdelené na Oprávnenia fór, Moderátori fóra, Užívateľské oprávnenia k fóru a Skupinové oprávnenia k fóru.</p>

		<h2>Role oprávnení</h2>
		<p>Tieto sa používajú k vytvoreniu rôznych sád rolí pre rôzne typy odlišných oprávnení, ktoré je neskôr možné použiť na základe rolí. Prednastavené roly by mali pokryť potreby veľkých aj malých diskusných fór, a pokiaľ nie, napriek všetkým druhom oprávnení, môžete pridávať/upravovať/mazať ďalšie roly podľa vašich potrieb.</p>

		<h2>Masky oprávnení</h2>
		<p>Tieto môžete využiť pre zobrazenie aktuálne nastavených oprávnení pridelených Užívateľom, Moderátorom (Lokálnym aj Globálnym), Administrátorom, alebo Fóram.</p>

		<br />

		<p>Pre ďalšie informácie o nastavení a správe oprávnení na vašom phpBB3 fóre, prosíme, pozrite sa do <a href="https://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Kapitoly 1.5 Sprievodca pre rýchly začiatok</a>.</p>
	',

	'ACL_NEVER'				=> 'Nikdy',
	'ACL_SET'				=> 'Nastavenie oprávnení',
	'ACL_SET_EXPLAIN'		=> 'Oprávnenia sú založené na jednoduchom <samp>ÁNO</samp>/<samp>NIE</samp> systéme. Nastavením možnosti <samp>NIKDY</samp> sa užívateľovi alebo užívateľskej skupine prepíšu všetky iné hodnoty, ktoré sú k danému oprávneniu zaznačené. Pokiaľ si neprajete pre užívateľa, alebo skupinu priradiť hodnotu k danej možnosti, nastavte položku na <samp>NIE</samp>. K sú hodnoty pre túto možnosť označené inde, tamtie budú použité prednostne, ináč je predpokladaná možnosť <samp>NIKDY</samp>. Všetky označené objekty (s checkboxom pred nimi) budú kopírovať sadu oprávnení, ktoré ste tu definovali.',
	'ACL_SETTING'			=> 'Nastavenie',

	'ACL_TYPE_A_'			=> 'Administrátorské oprávnenia',
	'ACL_TYPE_F_'			=> 'Oprávnenia fór',
	'ACL_TYPE_M_'			=> 'Moderátorské oprávnenia',
	'ACL_TYPE_U_'			=> 'Užívateľské oprávnenia',

	'ACL_TYPE_GLOBAL_A_'	=> 'Administrátorské oprávnenia',
	'ACL_TYPE_GLOBAL_U_'	=> 'Užívateľské oprávnenia',
	'ACL_TYPE_GLOBAL_M_'	=> 'Oprávnenia Globálnych Moderátorov',
	'ACL_TYPE_LOCAL_M_'		=> 'Oprávnenia Moderátorov fór',
	'ACL_TYPE_LOCAL_F_'		=> 'Oprávnenia fóra',

	'ACL_NO'				=> 'Nie',
	'ACL_VIEW'				=> 'Zobrazenie oprávnení',
	'ACL_VIEW_EXPLAIN'		=> 'Tu si môžete pozrieť oprávnenia užívateľa alebo skupiny, ktoré sa práve využívajú. Červený štvorec znamená, že užívateľ/skupina nemá dané oprávnenie, zelený štvorec znamená, že užívateľ/skupina dané oprávnenie má.',
	'ACL_YES'				=> 'Áno',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Tu môžete prideliť administrátorské oprávnenia užívateľom alebo skupinám. Všetci užívatelia s administrátorskými oprávneniami môžu vidieť do Administrátorského kontrolného panela.',
 	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Tu môžete označiť užívateľov a skupiny ako moderátorov fóra. Pre nastavenie prístupu užívateľov k diskusiám, nastaveniu globálnych moderátorov alebo administrátorov použite odpovedajúcu sekciu oprávnení.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Tu môžete upraviť, ktoré skupiny alebo užívatelia majú prístup k určitým fóram. Pre nastavenie moderátorov alebo administrátorov použite odpovedajúcu sekciu oprávnení.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Tu môžete kopírovať nastavenia oprávnenie fóra z jedného fóra na jedno, alebo viac iných fór.',
  'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Tu môžete priradiť moderátorské oprávnenie užívateľom alebo skupinám. Títo moderátori sú rovnakí ako bežní moderátori, s tým rozdielom, že majú oprávnenia ku všetkým fóram.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tu môžete priradiť oprávnenia fór pre skupiny.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Tu môžete priradiť globálne oprávnenia skupinám - užívateľské oprávnenia, moderátorské oprávnenia a administrátorské oprávnenia. Užívateľské oprávnenia zahŕňajú možnosti ako použitie avataru, odosielanie súkromných správ atď.; oprávnenia globálnych moderátorov zahŕňajú možnosti ako schvaľovanie príspevkov, spravovanie tém, spravovanie banov atď. a nakoniec administrátorské oprávnenia ako úpravy oprávnení, definovanie vlastných BB kódov, spravovanie fór atď. Individuálne užívateľské oprávnenia by mali byť menené len výnimočne, preferovaná metóda je zaradenie užívateľov do skupín a nastavenie oprávnení skupinám.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Tu môžete spravovať roly pre administratívne oprávnenia. Roly sú oprávnenia, ktoré sa už využívajú, pokiaľ zmeníte danú rolu, položkám, ktoré používajú túto rolu, sa tiež zmenia oprávnenia.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Tu môžete spravovať roly pre oprávnenia pre fóra. Roly sú oprávnenia, ktoré sa už využívajú, pokiaľ zmeníte danú rolu, položkám, ktoré používajú túto rolu, sa tiež zmenia oprávnenia.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Tu môžete spravovať roly pre moderátorské oprávnenia. Roly sú oprávnenia, ktoré sa už využívajú, pokiaľ zmeníte danú rolu, položkám, ktoré používajú túto rolu, sa tiež zmenia oprávnenia.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Tu môžete spravovať roly pre užívateľské oprávnenia. Roly sú oprávnenia, ktoré sa už využívajú, pokiaľ zmeníte danú rolu, položkám, ktoré používajú túto rolu, sa tiež zmenia oprávnenia.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tu môžete upraviť oprávnenia fór pre užívateľov.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Tu môžete priradiť globálne oprávnenia užívateľom - užívateľské oprávnenia, moderátorské oprávnenia aj administrátorské oprávnenia. Užívateľské oprávnenia zahŕňajú možnosti ako použitie avataru, odoslanie súkromných správ atď.; oprávnenia globálnych moderátorov možnosti ako schvaľovanie príspevkov, spravovanie tém, spravovanie banov atď. a nakoniec administrátorské oprávnenia ako úpravy oprávnení, definovanie vlastných BB kódov, spravovanie fór atď. Pre úpravu týchto oprávnení pre väčší počet užívateľov je doporučené využiť Oprávnenia skupín. Oprávnenia užívateľa by mali byť menené len výnimočne, preferovaná metóda je zaradenie užívateľov do skupín a nastavenie oprávnení skupinám.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Tu si môžete pozrieť využívané administratívne oprávnenia priradené vybraným užívateľom/skupinám.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Tu si môžete pozrieť oprávnenia globálnych moderátorov priradené vybraným užívateľom/skupinám.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tu si môžete pozrieť oprávnenia fór priradené vybraným užívateľom/skupinám a fóram.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Tu si môžete pozrieť moderátorské oprávnenia ku konkrétnym fóram priradené vybraným užívateľom/skupinám a fóram.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Tu si môžete pozrieť využívané uživateľské oprávnenia priradené vybraným užívateľom/skupinám.',

	'ADD_GROUPS'				=> 'Pridať skupiny',
	'ADD_PERMISSIONS'			=> 'Pridať oprávnenia',
	'ADD_USERS'					=> 'Pridať užívateľov',
	'ADVANCED_PERMISSIONS'		=> 'Pokročilé oprávnenia',
	'ALL_GROUPS'				=> 'Vybrať všetky skupiny',
	'ALL_NEVER'					=> 'Všetko <samp>NIKDY</samp>',
	'ALL_NO'					=> 'Všetko <samp>NIE</samp>',
	'ALL_USERS'					=> 'Vybrať všetkých užívateľov',
	'ALL_YES'					=> 'Všetko <samp>ÁNO</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Použiť všetky oprávnenia',
	'APPLY_PERMISSIONS'			=> 'Použiť oprávnenia',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Oprávnenia a roly definované pre túto položku budú použité len na tejto položke a všetkých ďalších, ktoré sú zaškrtnuté',
  'AUTH_UPDATED'				=> 'Oprávnenia boli aktualizované.',

  'COPY_PERMISSIONS_CONFIRM'				=> 'Ste si istí, že chcete vykonať túto operáciu? Prosím, uvedomte si, že toto prepíše všetky existujúce oprávnenia na vybraných fórach.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Zdrojové fórum, odkiaľ chcete skopírovať oprávnenia.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Fóra, kde chcete skopírovať oprávnenia.',
	'COPY_PERMISSIONS_FROM'					=> 'Skopírovať oprávnenie z',
	'COPY_PERMISSIONS_TO'					=> 'Použiť oprávnenie na',

	'CREATE_ROLE'				=> 'Vytvoriť rolu',
	'CREATE_ROLE_FROM'			=> 'Použiť nastavena z…',
	'CUSTOM'					=> 'Vlastné…',

	'DEFAULT'					=> 'Prednastavené',
	'DELETE_ROLE'				=> 'Odstrániť rolu',
	'DELETE_ROLE_CONFIRM'		=> 'Naozaj chcete odstrániť túto rolu? Položky, ktoré majú túto rolu pridelenú <strong>nestratia</strong> svoje oprávnenia.',
	'DISPLAY_ROLE_ITEMS'		=> 'Zobraziť položky využívajúce túto rolu',

	'EDIT_PERMISSIONS'			=> 'Upraviť oprávnenia',
	'EDIT_ROLE'					=> 'Upraviť rolu',

	'GROUPS_NOT_ASSIGNED'		=> 'Tejto role nebola pridelená žiadna skupina',

	'LOOK_UP_GROUP'				=> 'Vyhľadať užívateľskú skupinu',
	'LOOK_UP_USER'				=> 'Vyhľadať užívateľa',

	'MANAGE_GROUPS'		=> 'Spravovať skupiny',
	'MANAGE_USERS'		=> 'Spravovať užívateľov',

	'NO_AUTH_SETTING_FOUND'		=> 'Oprávnenia neboli definované.',
	'NO_ROLE_ASSIGNED'			=> 'Žiadna rola nebola pridelená',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Nastavenie tejto role nezmení oprávnenia zobrazené napravo. Pokiaľ chcete prednastaviť/odstrániť všetky oprávnenia, použite odkaz „Všetko <samp>NIE</samp>“.',
	'NO_ROLE_AVAILABLE'			=> 'Nie je dostupná žiadna rola',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Prosíme, dajte meno role.',
	'NO_ROLE_SELECTED'			=> 'Rola nebola nájdená.',
	'NO_USER_GROUP_SELECTED'	=> 'Nevybrali ste žiadneho užívateľa alebo skupinu.',

	'ONLY_FORUM_DEFINED'	=> 'Pri vašom výbere ste definovali iba fórum. Prosíme, vyberte ešte aspoň jedného užívateľa alebo jednu skupinu.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Oprávnena a rola budú použité na všetky zaškrtnuté objekty',
	'PLUS_SUBFORUMS'				=> '+subfóra',

	'REMOVE_PERMISSIONS'			=> 'Odstrániť oprávnenia',
	'REMOVE_ROLE'					=> 'Odstrániť rolu',
	'RESULTING_PERMISSION'          => 'Výsledné oprávnenia',
	'ROLE'							=> 'Rola',
	'ROLE_ADD_SUCCESS'				=> 'Rola bola úspešne pridaná.',
	'ROLE_ASSIGNED_TO'				=> 'Užívatelia/skupiny boli priradení k %s',
	'ROLE_DELETED'					=> 'Rola bola úspešne odstránená.',
	'ROLE_DESCRIPTION'				=> 'Popis roly',

	'ROLE_ADMIN_FORUM'			=> 'Admininstrátor fóra',
	'ROLE_ADMIN_FULL'			=> 'Hlavný administrátor',
	'ROLE_ADMIN_STANDARD'		=> 'Bežný administrátor',
	'ROLE_ADMIN_USERGROUP'		=> 'Admininistrátor užívateľov a skupín',
	'ROLE_FORUM_BOT'			=> 'Prístup botov',
	'ROLE_FORUM_FULL'			=> 'Plný prístup',
	'ROLE_FORUM_LIMITED'		=> 'Obmedzený prístup',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Obmedzený prístup + hlasovanie',
	'ROLE_FORUM_NOACCESS'		=> 'Žiadny prístup',
	'ROLE_FORUM_ONQUEUE'		=> 'Nutné schválenie',
	'ROLE_FORUM_POLLS'			=> 'Bežný prístup + hlasovanie',
	'ROLE_FORUM_READONLY'		=> 'Len čítanie',
	'ROLE_FORUM_STANDARD'		=> 'Bežný prístup',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Prístup nových členov fóra',
	'ROLE_MOD_FULL'				=> 'Hlavný moderátor',
	'ROLE_MOD_QUEUE'			=> 'Schvaľovací moderátor',
	'ROLE_MOD_SIMPLE'			=> 'Jednoduchý moderátor',
	'ROLE_MOD_STANDARD'			=> 'Normálny moderátor',
	'ROLE_USER_FULL'			=> 'Všetky funkcie',
	'ROLE_USER_LIMITED'			=> 'Obmedzené funkcie',
	'ROLE_USER_NOAVATAR'		=> 'Bez avatarov',
	'ROLE_USER_NOPM'			=> 'Bez súkromných správ',
	'ROLE_USER_STANDARD'		=> 'Bežné funkcie',
	'ROLE_USER_NEW_MEMBER'		=> 'Vlastnosti nových členov fóra',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Má prístup k ovládaniu fór a nastaveniam oprávnení pre fóra.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Má prístup ku všetkým administrátorským funkciám na tomto fóre.<br />Nie je doporučené.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Má prístup ku väčšine možností administrátora, ale nemôže používať nastavenia ohľadom servera a systému.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Môže spravovať skupiny a užívateľov: môže meniť oprávnenia, nastavenia, spravovať bany a spravovať hodnosti.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Táto rola je doporučená pre botov a vyhľadávacích robotov.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Môže využívať všetky možnosti fóra, vrátane odosielania Dôležitých tém a Oznámení. Taktiež môže ignorovať časový interval pre odosielanie príspevkov.<br />Nie je doporučené pre bežných užívateľov.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Môže využiť niektoré možnosti fóra, ale nemôže pripájať prílohy a využívať ikony tém.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Rovnaké ako Obmedzený prístup, ale môže zakladať hlasovanie.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Nevidí ani nemá prístup k fóru.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Môže využiť väčšinu funkcií fóra vrátane príloh, ale príspevky a témy musia byť schválené moderátorom.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Rovnaké ako Bežný prístup, ale môže zakladať hlasovania.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Môže čítať témy na fóre, ale nemôže vytvárať nové témy alebo odosielať odpovede.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Môže využívať väčšinu funkcií fóra vrátane príloh a mazania vlastných tém, ale nemôže zamykať vlastné témy a nemôže vytvárať hlasovania.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Role pre skupinu novo registrovaných užívateľov; obsahuje oprávnenie typu <samp> NIKDY </samp> pre obmedzenie možností pre nových užívateľov.',
  'ROLE_DESCRIPTION_MOD_FULL'				=> 'Môže využívať všetky možnosti moderátora, vrátane banovania.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Môže využiť zoznam príspevkov ku schváleniu pre schvaľovanie a úpravu príspevkov, ale nič iného.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Môže využívať len základné operácie s témami. Nemôže udeľovať varovania alebo používať zoznam príspevkov ku schváleniu.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Môže využiť väčšinu nástrojov moderátora, ale nemôže udeliť ban alebo zmeniť autora príspevku.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Môže využiť všetkých možností, ktoré užívateľ môže mať vrátane zmeny užívateľského mena a ignorácie ochranných intervalov.<br />Nie je doporučené.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Má prístup k niektorým možnostiam užívateľa. Prílohy, e-maily alebo instantné správy nie sú povolené.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Má obmedzenú sadu možností a má nemá povolené používať možnosti avatarov.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Má obmedzenú sadu možností a nemôže používať súkromné správy.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Má prístup k väčšine, ale nie všetkým možnostiam užívateľa. Nemôže si ale, napríklad, zmeniť užívateľské meno alebo ignorovať ochranné intervaly.',
  'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Role pro skupinu novo registrovaných užívateľov; obsahuje oprávnenia typu <samp>NIKDY</samp> pre obmedzenie možností pre nových užívateľov.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Máte možnosť vložiť krátky popis toho, k čomu je rola určená alebo koho označuje. Text, ktorý tu vložíte bude tiež zobrazený v prehľade rolí v administrácií.',
	'ROLE_DESCRIPTION_LONG'			=> 'Popis rola má príliš dlhý popis, skráťte ho na 4000 znakov.',
	'ROLE_DETAILS'					=> 'Detaily role',
	'ROLE_EDIT_SUCCESS'				=> 'Rola bola úspešne upravená.',
	'ROLE_NAME'						=> 'Názov role',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Rola s názvom <strong>%s</strong> už existuje pre daný druh oprávnenia.',
	'ROLE_NOT_ASSIGNED'				=> 'Rola ešte nebola priradená.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Vybrané fórum (fóra) neexistujú.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Vybraná skupina (skupiny) neexistujú.',
	'SELECTED_USER_NOT_EXIST'		=> 'Vybraný užívateľ (užívatelia) neexistujú.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Fórum, ktoré tu zvolíte, bude mať zahrnuté aj všetky subfóra.',
	'SELECT_ROLE'					=> 'Vybrať rolu…',
	'SELECT_TYPE'					=> 'Vybrať druh',
	'SET_PERMISSIONS'				=> 'Nastaviť oprávnenia',
	'SET_ROLE_PERMISSIONS'			=> 'Nastaviť oprávnenia role',
	'SET_USERS_PERMISSIONS'			=> 'Nastaviť oprávnenia užívateľa',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Nastavenie oprávnení užívateľa pre fóra',

	'TRACE_DEFAULT'					=> 'Oprávnenie má predvolenú hodnotu <samp>NIE</samp> (bez oprávnení), takže oprávnenie môže byť prepísané inými nastaveniami.',
	'TRACE_FOR'						=> 'Sledovať pre',
	'TRACE_GLOBAL_SETTING'			=> '%s (globálne)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Oprávnenie tejto skupiny je nastavené na <samp>NIKDY</samp> ako výsledné oprávnenie, teda je táto hodnota ponechaná.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'   => 'Oprávnenie tejto skupiny pre toto fórum je nastavené na <samp>NIKDY</samp> ako výsledné oprávnenie, preto je táto hodnota ponechaná.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Oprávnenie tejto skupiny je nastavené na <samp>NIKDY</samp>, čo sa stáva novou výslednou hodnotou, pretože hodnota zatiaľ nebola nastavená (bola nastavená na <samp>NIE</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'   	=> 'Oprávnenie tejto skupiny pre toto fórum je nastavené na <samp>NIKDY</samp>, čo sa stáva novou výslednou hodnotou, pretože hodnota zatiaľ nebola nastavená (bola nastavená na <samp>NIE</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Oprávnenie tejto skupiny je nastavené na <samp>NIKDY</samp>, čo zmení nastavenie oprávnení pre tohoto užívateľa z <samp>ÁNO</samp> na <samp>NIKDY</samp>',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Oprávnenie tejto skupiny pre toto fórum je nastavené na <samp>NIKDY</samp>, čo zmení nastavenie oprávnenia pre tohto užívateľa z <samp>ÁNO</samp> na <samp>NIKDY</samp>.',
	'TRACE_GROUP_NO'				=> 'Pre túto skupinu je oprávnenie nastavené na <samp>NIE</samp>, preto je ponechaná pôvodná hodnota.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Pre túto skupinu pre toto fóruv je oprávnenie nastavené na <samp>NIE</samp>, preto je ponechaná pôvodná hodnota.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Oprávnenie tejto skupiny je nastavené na <samp>ÁNO</samp>, ale nastavenie oprávnení <samp>NIKDY</samp> nemôžete prepísať.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'   	=> 'Oprávnenie tejto skupiny pre toto fórum je nastavené na <samp>ÁNO</samp>, ale nastavenie oprávnení <samp>NIKDY</samp> nemôžete prepísať.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Oprávnenia tejto skupiny je nastavené na <samp>ÁNO</samp>, čo sa stáva novou výslednou hodnotou, pretože hodnota zatiaľ nebola nastavená (bola nastavená na <samp>NIE</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'   		=> 'Oprávnenia tejto skupiny pre toto fórum je nastavené na <samp>ÁNO</samp>, čo sa stáva novou výslednou hodnotou, pretože hodnota zatiaľ nebola nastavená (bola nastavená na <samp>NIE</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Oprávnenie tejto skupiny je nastavené na <samp>ÁNO</samp> a výsledné oprávnenia je už taktiež nastavené na <samp>ÁNO</samp>, takže pôvodná hodnota je ponechaná.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'   	=> 'Oprávnenie tejto skupiny pre toto fórum je nastavené na <samp>ÁNO</samp> a výsledné oprávnenie je už taktiež nastavené na <samp>ÁNO</samp>, takže pôvodná hodnota je ponechaná.',
	'TRACE_PERMISSION'				=> 'Sledovať oprávnenie - %s',
	'TRACE_RESULT'					=> 'Sledovať výsledok',
	'TRACE_SETTING'					=> 'Nastavenie sledovania',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Oprávnenie nezávislé na fóre má hodnotu <samp>ÁNO</samp>, ale výsledná hodnota už má tiež hodnotu <samp>ÁNO</samp>, a tak sa teda nič nemení. %sSledovať globálne oprávnenia%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Oprávnenie nezávislé na fóre má hodnotu <samp>ÁNO</samp>, čo prepisujú miestnu hodnotu <samp>NIKDY</samp>. %sSledovať globálne oprávnenia%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Oprávnenie nezávislé na fóre má hodnotu <samp>NIKDY</samp>, čo neovplyvňuje miestne oprávnenie. %sSledovať globálne oprávnenia%s',

	'TRACE_USER_FOUNDER'					=> 'Tento užívateľ je zakladateľ, teda oprávnenia administrátora sú vždy nastavené na <samp>ÁNO</samp>.',
	'TRACE_USER_KEPT'						=> 'Oprávnenie užívateľa je nastavené na <samp>NIE</samp>, pôvodná hodnota je teda ponechaná.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Oprávnenie užívateľa pre toto fórum je nastavené na <samp>NIE</samp>, pôvodná hodnota je teda ponechaná.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Oprávnenie užívateľa je nastavené na <samp>NIKDY</samp> a výsledná hodnota je nastavená na <samp>NIKDY</samp>, nič sa teda nemení.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Oprávnenie užívateľa pre toto fórum je nastavené na <samp>NIKDY</samp> a výsledná hodnota je nastavená na <samp>NIKDY</samp>, nič se teda nemení.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Oprávnenie užívateľa je nastavené na <samp>NIKDY</samp>, čo sa stáva výslednou hodnotou, pretože bolo doteraz nastavené len na NIE.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Oprávnenie užívateľa pre toto fórum je nastavené na <samp>NIKDY</samp>, čo sa stáva výslednou hodnotou, pretože bolo doteraz nastavená len na NIE.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Oprávnenie užívateľa je nastavené na <samp>NIKDY</samp> a nahradzuje predošlú hodnotu <samp>ÁNO</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Oprávnenie užívateľa pre toto fórum je nastavené na <samp>NIKDY</samp> a nahradzuje predošlú hodnotu <samp>ÁNO</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Oprávnenie užívateľa je nastavené na <samp>NIE</samp> a výsledná hodnota už obsahuje <samp>NIE</samp>, hodnota sa teda mení na <samp>NIKDY</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Oprávnenie užívateľa pre toto fórum je nastavené na <samp>NIE</samp> a výsledná hodnota už obsahuje NIE, hodnota sa teda mení na <samp>NIKDY</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Oprávnenie užívateľa je nastavené na <samp>ÁNO</samp>, ale výsledné oprávnenie nastavené na <samp>NIKDY</samp> sa nedá prepísať.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Oprávnenie užívateľa pre toto fórum je nastavené na <samp>ÁNO</samp>, ale výsledné oprávnenie nastavené na <samp>NIKDY</samp> sa nedá prepísať.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Oprávnenie užívateľa je nastavené na <samp>ÁNO</samp>, čo sa stáva novou výslednou hodnotou, pretože posledná nastavená hodnota bola <samp>NIE</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Oprávnenie užívateľa pre toto fórum je nastavené na <samp>ÁNO</samp>, čo sa stáva novou výslednou hodnotou, pretože posledná nastavená bola <samp>NIE</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Oprávnenie užívateľa je nastavené na <samp>ÁNO</samp> a výsledná hodnota je nastavená na <samp>ÁNO</samp>, nič sa teda nemení.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Oprávnenie užívateľa pre toto fórum je nastavené na <samp>ÁNO</samp> a výsledná hodnota je nastavená na <samp>ÁNO</samp>, nič se teda nemení.',
	'TRACE_WHO'								=> 'Kto',
	'TRACE_TOTAL'							=> 'Výsledné',

	'USERS_NOT_ASSIGNED'			=> 'Žiadny užívatelia nebol priradení k tejto role',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'je členom nasledujúcich prednastavených skupín',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'je členom nasledujúcich užívateľom definovaných skupín',

	'VIEW_ASSIGNED_ITEMS'	=> 'Zobraziť pridelené položky',
	'VIEW_LOCAL_PERMS'		=> 'Miestne oprávnenia',
	'VIEW_GLOBAL_PERMS'		=> 'Globálne oprávnenia',
	'VIEW_PERMISSIONS'		=> 'Zobraziť oprávnenia',

	'WRONG_PERMISSION_TYPE'	=> 'Bol zvolený zlý druh oprávnení.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Nastavenia oprávnení sú v zlom formáte, phpBB ich nemôže správne spracovať.',
));

?>
