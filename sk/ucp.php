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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	        => 'Registráciou a vstupom na “%1$s” (ďalej len “my”, “nás”, “náš”, “%1$s”, “%2$s”), súhlasíte s právnym vymedzením nasledujúcich podmienok. Ak nesúhlasíte s právnym vymedzením všetkých nasledujúcich podmienok, potom sa prosím neregistrujte a nevstupujte a/alebo nepoužívajte “%1$s”. Vyhradzujeme si právo kedykoľvek zmeniť akékoľvek podmienky používania tohoto portálu, pričom urobíme všetko preto, aby sme Vás o týchto zmenách informovali, avšak bude vhodné, ak tieto podmienky budete pravidelne kontrolovať počas používania “%1$s” a to z dôvodu, že musíte súhlasiť s každou zmenou týchto podmienok, ktoré budú aktualizované a/alebo upravené.<br />
	<br />
	Naše fórum je založené na systéme phpBB (ďalej len “oni”, “im”, “ich”, “phpBB software”, “www.phpbb.com”, “phpBB Group”, “phpBB tímy”), čo je elektronický konferenčný systém vydávaný pod “<a href="http://www.gnu.org/licenses/gpl-license.php">General Public License</a>” (ďalej len “GPL”), a ktorý je dostupný na <a href="https://www.phpbb.com/">www.phpbb.com</a>. Softvér phpBB  umožňuje internetové diskusie a GPL mu striktne zakazuje určovať čo môžme a/alebo nemôžme v rámci povoleného obsahu a/alebo správy. Pre ďalšie informácie o phpBB, navštívte, prosím: <a href="https://www.phpbb.com/">https://www.phpbb.com/</a>.<br />
	<br />
	Ďalej súhlasíte s tým, že nebudete odosielať žiadne urážlivé, obscénne, vulgárne, ohováracie, nenávistné, výhražné, sexuálne orientované príspevky alebo posielať akýkoľvek iný materiál, ktorý môže porušovať ktorékoľvek zákony krajiny, v ktorej sa nachádzate Vy, či v ktorej sa nachádza “%1$s” alebo medzinárodné právo. Takéto konanie môže viesť k okamžitému a trvalému vylúčeniu, s upozornením Vášho poskytovateľa internetového pripojenia, ak sa budeme domnievať, že to bude od nás požadované. IP adresa všetkých Vašich príspevkov je zaznamenávaná na pomoc vo vymožiteľnosti týchto podmienok. Taktiež súhlasíte s tým, že “%1$s” má právo kedykoľvek odstrániť, upraviť, presunúť alebo uzamknúť ktorúkoľvek tému, ktorá by porušovala tieto podmienky. Ako užívateľ, súhlasíte s ukladaním do databázy akejkoľvek informácie, ktorú vložíte. Hoci táto informácia nebude zverejnená/poskytnutá žiadnej tretej strane bez Vášho súhlasu, ani “%1$s” ani phpBB nenesú zodpovednosť za akýkoľvek pokus o prienik (hacking), ktorý môže viesť k zneužitiu týchto údajov.
	',

	'PRIVACY_POLICY'		=> 'Tieto zásady podrobne vysvetľujú ako “%1$s” spolu s pridruženými spoločnosťami (ďalej len “my”, “nás”, “náš”, “%1$s”, “%2$s”) a phpBB (ďalej len “oni”, “ich”, “im”, “phpBB softvér”, “www.phpbb.com”, “phpBB Group”, “phpBB tímy”) používajú akékoľvek údaje zhromaždené počas akéhokoľvek spojenia s Vami (ďalej len “Vaše údaje”).<br />
	<br />
	Vaše údaje sú zhromažďované dvomi spôsobmi. Najskôr, prehliadanie “%1$s” spôsobí, že phpBB softvér vytvorí určitý počet cookies, čo sú malé textové súbory, ktoré sú stiahnuté do Vášho PC na miesto, kde Váš internetový prehliadač ukladá dočasné súbory. Prvé dve cookies obsahujú len informáciu na identifikáciu užívateľa (ďalej len “užívateľovo id”) a informáciu na identifikáciu anonymného spojenia (ďalej len “id spojenia”), ktoré Vám automaticky priradí phpBB softvér. Tretí cookie bude vytvorený vtedy, keď zobrazíte témy na “%1$s” a tento je použitý na rozpoznanie, ktoré témy už boli zobrazené, čím sa zvýši komfort Vášho prehliadania.<br />
	<br />
	Môžme tiež vytvárať cookies, ktoré sú mimo phpBB softvéru, počas prehliadania “%1$s”, avšak tieto sú mimo rámec tohto dokumentu, ktorého cieľom je pokryť stránky vytvárané prostredníctvom phpBB softvéru. Druhý spôsob, ktorým zhromažďujeme Vaše údaje, je prostredníctvom toho, čo nám sami odošlete. Toto môže byť, avšak nielen: odoslaním ako anonymný užívateľ (ďalej len “anonymné príspevky”), registrovaný na “%1$s” (ďalej len “Vaše konto”) a Vami odoslané príspevky po registrácii a počas prihlásenia (ďalej len “Vaše príspevky”).<br />
	<br />
	Vaše konto bude bezpodmienečne obsahovať minimálne jednoznačne identifikovateľné meno (ďalej len “Vaše užívateľské meno”), osobné heslo pre prihlásenie sa na Vaše konto  (ďalej len “Vaše heslo”) a osobnú, platnú e-mailovú adresu (ďalej len “Váš e-mail”). Vaše údaje pre Vaše konto na “%1$s” sú chránené zákonom na ochranu údajov a dát, ktoré sú v platnosti v krajine kde sme umiestnení. Akýkoľvek údaj navyše Vášho užívateľského mena, Vášho hesla a Vášho e-mailu, ktorý je požadovaný “%1$s” počas registrácie vybočujú z toho, čo považujeme za povinné a čo za dobrovoľné. Vo všetkých prípadoch, máte možnosť určiť, ktorý údaj Vášho konta bude verejne zobrazený. Okrem toho, vo Vašom konte, máte možnosť zvoliť si alebo zrušiť možnosť automaticky generovaných e-mailov prostredníctvom phpBB softvéru.<br />
	<br />
	Vaše heslo je šifrované (jednosmerný hash), takže je zabezpečené. Napriek tomu, je odporúčané, aby ste nepoužívali rovnaké heslo na rôznych internetových stránkach. Vaše heslo je možnosťou pre prístup k Vášmu kontu na “%1$s”, takže si ho, prosím, chráňte. Nik v spojitosti s “%1$s”, phpBB alebo akoukoľvek 3. stranou, nie je za žiadnych okolností oprávnený žiadať od Vás Vaše heslo. V prípade, že zabudnete svoje heslo na prístup k Vášmu kontu, môžete použiť funkciu “Zabudol som svoje heslo”, ktorá je dostupná v rámci phpBB softvéru. Tento proces bude od Vás vyžadovať vloženie Vášho užívateľského mena a Vášho e-mailu, potom phpBB softvér vygeneruje nové heslo, ktoré Vám znovu umožní prístup k Vášmu kontu.<br />
	',
));

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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT' => '<div style="text-align: justify; font-size: 15px;">Vstupom na “%1$s” (ďalej len “my”, “nás”, “náš”, “%1$s”, “%2$s”), súhlasíte s právnym vymedzením nasledujúcich podmienok. Ak nesúhlasíte s právnym vymedzením všetkých nasledujúcich podmienok, potom, prosím, nevstupujte a/alebo nepoužívajte “%1$s”. Tieto podmienky môžme kedykoľvek zmeniť a my spravíme všetko preto, aby sme Vás informovali o týchto zmenách, avšak bude rozumné, ak tieto podmienky budete pravidelne kontrolovať počas pravidelného používania “%1$s”, pretože musíte súhlasiť s každou zmenou týchto podmienok, ktoré budú aktualizované a/alebo upravené.<br />
	<br />
	Súhlasíte s tým, že nebudete odosielať žiadne urážlivé, obscénne, vulgárne, ohováracie, nenávistné, výhražné, sexuálne orientované príspevky alebo posielať akýkoľvek iný materiál, ktorý môže porušovať ktorékoľvek zákony krajiny, v ktorej sa nachádzate Vy či v ktorej sa nachádza “%1$s” alebo medzinárodné právo. Takéto konanie môže viesť k okamžitému a trvalému vylúčeniu, s upozornením Vášho poskytovateľa internetového pripojenia, ak sa budeme domnievať, že to bude od nás požadované. IP adresa všetkých Vašich príspevkov je zaznamenávaná na pomoc vo vymožiteľnosti týchto podmienok. Súhlasíte s tým, že “%1$s” má právo kedykoľvek odstrániť, upraviť, presunúť alebo uzamknúť ktorúkoľvek tému, ktorá by porušovala tieto podmienky. Ako užívateľ, súhlasíte s ukladaním do našej databáze akejkoľvek informácie, ktorú vložíte. Hoci táto informácia nebude zverejnená/poskytnutá žiadnej tretej strane bez Vášho súhlasu.</div>
	',
	'PRIVACY_POLICY' => '<div style="text-align: justify; font-size: 15px;">Vaše údaje sú zhromažďované dvomi spôsobmi. Najskôr, prehliadanie “%1$s” spôsobí, že vytvorí určitý počet cookies, čo sú malé textové súbory, ktoré sú stiahnuté do Vášho PC na miesto, kde Váš internetový prehliadač ukladá dočasné súbory. Prvé dve cookies obsahujú len informáciu na identifikáciu užívateľa (ďalej len “užívateľovo id”) a informáciu na identifikáciu anonymného spojenia (ďalej len “id spojenia”), ktoré Vám automaticky priradí systém. Tretí cookie bude vytvorený vtedy, keď zobrazíte témy na “%1$s” a tento je použitý na rozpoznanie, ktoré témy už boli zobrazené, čím sa zvýši komfort Vášho prehliadania.<br />
	<br />
	Môžme tiež vytvárať cookies, počas prehliadania “%1$s”, avšak tieto sú mimo rámec tohto dokumentu. Druhý spôsob, ktorým zhromažďujeme Vaše údaje, je prostredníctvom toho, čo nám sami odošlete. Toto môže byť, avšak nielen: odoslaním ako anonymný užívateľ (ďalej len “anonymné príspevky”), registrovaný na “%1$s” (ďalej len “Vaše konto”) a Vami odoslané príspevky po registrácii a počas prihlásenia (ďalej len “Vaše príspevky”).<br />
	<br />
	Vaše konto bude bezpodmienečne obsahovať minimálne jednoznačne identifikovateľné meno (ďalej len “Vaše užívateľské meno”), osobné heslo pre prihlásenie sa na Vaše konto  (ďalej len “Vaše heslo”) a osobnú, platnú e-mailovú adresu (ďalej len “Váš e-mail”). Vaše údaje pre Vaše konto na “%1$s” sú chránené zákonom na ochranu údajov a dát, ktoré sú v platnosti v krajine kde sme umiestnení. Akýkoľvek údaj navyše Vášho užívateľského mena, Vášho hesla a Vášho e-mailu, ktorý je požadovaný “%1$s” počas registrácie vybočujú z toho, čo považujeme za povinné a čo za dobrovoľné. Vo všetkých prípadoch, máte možnosť určiť, ktorý údaj Vášho konta bude verejne zobrazený. Okrem toho, vo Vašom konte, máte možnosť zvoliť si alebo zrušiť možnosť automaticky generovaných e-mailov.<br />
	<br />
	Vaše heslo je šifrované (jednosmerný hash), takže je zabezpečené. Napriek tomu, je odporúčané, aby ste nepoužívali rovnaké heslo na rôznych internetových stránkach. Vaše heslo je možnosťou pre prístup k Vášmu kontu na “%1$s”, takže si ho, prosím, chráňte. Nik v spojitosti s “%1$s”, akoukoľvek 3. stranou, nie je za žiadnych okolností oprávnený žiadať od Vás Vaše heslo. V prípade, že zabudnete svoje heslo na prístup k Vášmu kontu, môžete použiť funkciu “Zabudol som svoje heslo”. Tento proces bude od Vás vyžadovať vloženie Vášho užívateľského mena a Vášho e-mailu, potom systém vygeneruje nové heslo, ktoré Vám znovu umožní prístup k Vášmu kontu.</div>
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'					=> 'Váš účet bol aktivovaný, ďakujeme za registráciu.',
	'ACCOUNT_ACTIVE_ADMIN'				=> 'Váš účet bol práve aktivovaný.',
	'ACCOUNT_ACTIVE_PROFILE'			=> 'Váš účet bol úspešne znovu aktivovaný.',
	'ACCOUNT_ADDED'						=> 'Ďakujeme za registráciu, váš účet bol vytvorený a aktivovaný. Teraz sa môžete prihlásiť zadaním zvoleného užívateľského mena a hesla. Na vami zadanú emailovú adresu bola zároveň odoslaná uvítacia správa, v budúcnosti bude akákoľvek komunikácia s vami prostredníctvom emailu vedená práve z adresy, ktorá je uvedená ako adresa odosielateľa. Skontrolujte si prosím doručenú poštu vašej emailovej schránky. Pokiaľ spomenutý email nenájdete, je možné, že váš poštový server označil poštu ako spam, skontrolujte si preto prosím, priečinok SPAM.',
	'ACCOUNT_COPPA'						=> 'Váš účet bol vytvorený, ale čaká na aktiváciu. Ďalšie pokyny boli odoslané na váš emailový účet, skontrolujte si emailovú schránku. Pokiaľ spomenutý email nenájdete, je možné, že váš poštový server označil poštu ako spam, skontrolujte si preto prosím, priečinok SPAM.',
	'ACCOUNT_EMAIL_CHANGED'				=> 'Váš účet bol aktualizovaný. Tento portál však pri zmene emailovej adresy vyžaduje reaktiváciu účtu. Aktivačný kľúč vám bol odoslaný na novú emailovú adresu, prosím skontrolujte si emailovú schránku. Pokiaľ spomenutý email nenájdete, je možné, že váš poštový server označil poštu ako spam, skontrolujte si preto prosím, priečinok SPAM.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'		=> 'Váš účet bol aktualizovaný. Tento portál však pri zmene emailovej adresy vyžaduje reaktiváciu účtu administrátorom portálu. Administrátorom bola odoslaná žiadosť o reaktiváciu účtu, o výsledkoch budete čoskoro informovaný emailom. Pokiaľ spomenutý email nenájdete, je možné, že váš poštový server označil poštu ako spam, skontrolujte si preto prosím, priečinok SPAM.',
	'ACCOUNT_INACTIVE'					=> 'Váš účet bol vytvorený. Tento portál však vyžaduje dodatočnú aktiváciu. Aktivačný kľúč vám bol odoslaný na zadanú emailovú adresu, prosím skontrolujte si emailovú schránku. Pokiaľ spomenutý email nenájdete, je možné, že váš poštový server označil poštu ako spam, skontrolujte si preto prosím, priečinok SPAM.',
	'ACCOUNT_INACTIVE_ADMIN'			=> 'Váš účet bol vytvorený. Tento portál však vyžaduje dodatočnú aktiváciu administrátormi portálu. Administrátorom bola odoslaná žiadosť o aktiváciu vášho účtu, o výsledkoch budete čoskoro informovaný emailom. Pokiaľ spomenutý email nenájdete, je možné, že váš poštový server označil poštu ako spam, skontrolujte si preto prosím, priečinok SPAM.',
	'ACTIVATION_EMAIL_SENT'				=> 'Aktivačný e-mail bol odoslaný na vašu e-mailovú adresu. Pokiaľ spomenutý e-mail nenájdete, je možné, že váš poštový server označil poštu ako spam, skontrolujte si preto prosím, priečinok SPAM.',
	'ACTIVATION_EMAIL_SENT_ADMIN'		=> 'Aktivačný e-mail bol odoslaný na e-mailovú adresu administrátorov.',
	'ADD'								=> 'Pridať',
	'ADD_BCC'							=> 'Pridať [Skryte]',
	'ADD_FOES'							=> 'Pridať medzi ignorovaných',
	'ADD_FOES_EXPLAIN'					=> 'Môžete pridať viacero užívateľských mien. Každé uveďte na samostatnom riadku',
	'ADD_FOLDER'						=> 'Pridať priečinok',
	'ADD_FRIENDS' 						=> 'Pridať medzi priateľov',
	'ADD_FRIENDS_EXPLAIN' 				=> 'Môžete pridať viacero užívateľských mien. Každé uveďte na samostatnom riadku',
	'ADD_NEW_RULE'						=> 'Pridať nové pravidlo',
	'ADD_RULE'							=> 'Pridať pravidlo',
	'ADD_TO' 							=> 'Pridať',
	'ADD_USERS_UCP_EXPLAIN'				=> 'Tu môžete pridať nových užívateľov do skupiny. Môžete rozhodnúť o tom, či táto skupina bude východiskovou skupinou pre označených užívateľov. Každé užívateľské meno uveďte na samostatnom riadku.',
	'ADMIN_EMAIL'						=> 'Prijímať e-maily od administrátorov',
	'AGREE'								=> 'Súhlasím s týmito podmienkami',
	'ALLOW_PM' 							=> 'Umožniť členom portálu posielať mi súkromné správy',
	'ALLOW_PM_EXPLAIN' 					=> 'Administrátori a moderátori portálu budú mať túto možnosť vždy.',
	'ALREADY_ACTIVATED' 				=> 'Váš účet už bol aktivovaný.',
	'ATTACHMENTS_EXPLAIN' 				=> 'Toto je zoznam príloh, ktoré ste odovzdali vo svojich príspevkoch na tomto portále.',
	'ATTACHMENTS_DELETED' 				=> 'Prílohy úspešne vymazané.',
	'ATTACHMENT_DELETED' 				=> 'Príloha úspešne vymazané.',
	'AUTOLOGIN_SESSION_KEYS_DELETED' 	=> 'Označené kľúče "Zapamätaj si ma" na automatické prihlasovanie k portálu boli úspešne vymazané.',
	'AVATAR_CATEGORY'					=> 'Kategória',
	'AVATAR_DRIVER_GRAVATAR_TITLE'		=> 'Gravatar',
	'AVATAR_DRIVER_GRAVATAR_EXPLAIN'	=> 'Gravatar je služba, ktorá umožňuje použiť rovnaký obrázok naprieč spektrom rôznych webstránok. Viac informácií na <a href="https://sk.gravatar.com/">Gravatar</a>.',
	'AVATAR_DRIVER_LOCAL_TITLE'			=> 'Galéria obrázkov profilu',
	'AVATAR_DRIVER_LOCAL_EXPLAIN' 		=> 'Môžete si zvoliť obrázok z lokálnej databázy profilových obrázkov.',
	'AVATAR_DRIVER_REMOTE_TITLE' 		=> 'Externý obrázok profilu',
	'AVATAR_DRIVER_REMOTE_EXPLAIN'		=> 'Odkaz na obrázok profilu.',
	'AVATAR_DRIVER_UPLOAD_TITLE' 		=> 'Nahrať obrázok profilu',
	'AVATAR_DRIVER_UPLOAD_EXPLAIN' 		=> 'Nahrať vlastný obrázok profilu.',
	'AVATAR_EXPLAIN'					=> 'Maximálne rozmery (ŠxV): %1$s x %2$s, maximálna veľkosť: %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'			=> 'Nie je dovolené používať obrázky profilov.',
	'AVATAR_GALLERY'					=> 'Lokálna galéria',
	'AVATAR_GENERAL_UPLOAD_ERROR'		=> 'Nemôžem nahrať obrázok profilu na %s.',
	'AVATAR_NOT_ALLOWED'				=> 'Obrázok profilu nemôže byť zobrazený, pretože funkcia vlastných obrázkov profilu bola na tomto portále vypnutá administrátormi.',
	'AVATAR_PAGE'						=> 'Strana',
	'AVATAR_SELECT'						=> 'Vyberte si obrázok profilu',
	'AVATAR_TYPE'						=> 'Typ obrázku profilu',
	'AVATAR_TYPE_NOT_ALLOWED'			=> 'Obrázok profilu nemôže byť zobrazený, pretože tento typ obrázkov nie je portálom podporovaný.',

	'BACK_TO_DRAFTS'					=> 'Späť na uložené koncepty',
	'BACK_TO_LOGIN'						=> 'Späť na prihlasovaciu stránku',
	'BIRTHDAY'							=> 'Narodeniny',
	'BIRTHDAY_EXPLAIN'					=> 'Uvedením roku narodenia budú ostatný užíatelia vo vašom profile vidieť váš vek.',
	'BOARD_DATE_FORMAT'					=> 'Môj formát dátumov',
	'BOARD_DATE_FORMAT_EXPLAIN'			=> 'Pužitý syntax je identický s funkciou <a href="https://php.net/date">date()</a> jazyka PHP.',
	'BOARD_LANGUAGE'					=> 'Vlastný jazyk rozhrania portálu',
	'BOARD_STYLE'						=> 'Vlastný štýl zobrazenia portálu',
	'BOARD_TIMEZONE'					=> 'Moje časové pásmo',
	'BOOKMARKS'							=> 'Záložky',
	'BOOKMARKS_EXPLAIN'					=> 'Témy si môžete ukladať medzi záložky. Ak chcete odstrániť tému zo záložiek označte ju a kliknite na tlačítko <em>Odstrániť zo záložiek</em>.',
	'BOOKMARKS_DISABLED'				=> 'Funkcia vytvárania záložiek bola administrátorom portálu vypnutá.',
	'BOOKMARKS_REMOVED'					=> 'Úspešne odstránené zo záložiek.',

	'CANNOT_EDIT_MESSAGE_TIME'			=> 'Túto správu už nemôžete upravovať.',
	'CANNOT_MOVE_TO_SAME_FOLDER'		=> 'Správy nemôžu byť presunuté do priečinku, ktorý chcete zmazať.',
	'CANNOT_MOVE_FROM_SPECIAL'			=> 'Správy z tohto priečinka nemôžu byť presunuté.',
	'CANNOT_RENAME_FOLDER'				=> 'Tento priečinok nemôže byť premenovaný.',
	'CANNOT_REMOVE_FOLDER'				=> 'Teno priečinok nemôže byť odstránený.',
	'CHANGE_DEFAULT_GROUP'				=> 'Zmeniť východiskovú skupinu',
	'CHANGE_PASSWORD'					=> 'Zmeniť heslo',
	'CLICK_GOTO_FOLDER'					=> '%1$sPrejsť do svojho “%3$s” priečinka%2$s',
	'CLICK_RETURN_FOLDER'				=> '%1$sNávrat do svojho “%3$s” priečinka%2$s',
	'CONFIRMATION'						=> 'Potvrdenie registrácie',
	'CONFIRM_CHANGES'					=> 'Potvrdiť zmeny',
	'CONFIRM_EXPLAIN'					=> 'V snahe zamedziť automatickým registráciám vyžaduje portál vložiť potvrdzovací kód. Potvrdzovací kód vidíte na obrázku. Ak nedokážete identifikovať potvrdzovací kód kontaktujte %sAdministrátorov portálu%s.',
	'VC_REFRESH'						=> 'Obnoviť potvrdzovací kód',
	'VC_REFRESH_EXPLAIN'				=> 'Ak nemôžete rozpoznať kód, môžete požiadať o iný kliknutím na tlačítko.',

	'CONFIRM_PASSWORD' 					=> 'Potvrdenie hesla',
	'CONFIRM_PASSWORD_EXPLAIN'			=> 'Potvrdiť heslo musíte len ak ste zmenili súčasné.',
	'COPPA_BIRTHDAY' 					=> 'Aby ste mohli pokračovať v registrácii, uveďte prosím, kedy ste sa narodili.',
	'COPPA_COMPLIANCE'					=> 'Pravidlá COPPA (pre mladistvých)',
	'COPPA_EXPLAIN'						=> 'Aktivácia vášho účtu vyžaduje potvrdenie rodičov alebo zákonného zástupcu.',
	'CREATE_FOLDER'						=> 'Pridať priečinok…',
	'CURRENT_IMAGE'						=> 'Súčasný obrázok',
	'CURRENT_PASSWORD'					=> 'Súčasné heslo',
	'CURRENT_PASSWORD_EXPLAIN'			=> 'Ak chcete zmeniť užívateľské meno alebo email, musíte zadať vaše súčasné heslo.',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN'	=> 'Ak chcete zmeniť užívateľské meno, heslo alebo email, musíte zadať vaše súčasné heslo.',
	'CUR_PASSWORD_EMPTY'				=> 'Neuviedli ste vaše súčasné heslo.',
	'CUR_PASSWORD_ERROR'				=> 'Heslo, ktoré ste vložili je nesprávne.',
	'CUSTOM_DATEFORMAT'					=> 'Voliteľné…',

	'DEFAULT_ACTION'					=> 'Východisková akcia',
	'DEFAULT_ACTION_EXPLAIN'			=> 'Táto akcia je nastavená ako východisková, ak nebola vybraná iná.',
	'DEFAULT_ADD_SIG'					=> 'Štandardne pripojiť k príspevkom môj podpis',
	'DEFAULT_BBCODE'					=> 'Štandardne umožniť BBCodee',
	'DEFAULT_NOTIFY'					=> 'Štandardne ma upozorniť na odpovede',
	'DEFAULT_SMILIES'					=> 'Štandardne aktivovať smajlíky',
	'DEFINED_RULES'						=> 'Definované pravidlá',
	'DELETED_TOPIC'						=> 'Príspevok bol odstránený.',
	'DELETE_ATTACHMENT'					=> 'Vymazať prílohu',
	'DELETE_ATTACHMENTS'				=> 'Vymazať prílohy',
	'DELETE_ATTACHMENT_CONFIRM'			=> 'Ste si istý, že chcete zmazať túto prílohu?',
	'DELETE_ATTACHMENTS_CONFIRM'		=> 'Ste si istý, že chcete zmazať tieto prílohy?',
	'DELETE_AVATAR'						=> 'Vymazať obrázok',
	'DELETE_COOKIES_CONFIRM'			=> 'Ste si istý, že chcete vymazať všetky cookies odoslané k vám týmto portálom?',
	'DELETE_MARKED_PM'					=> 'Vymazať označené správy',
	'DELETE_MARKED_PM_CONFIRM'			=> 'Ste si istý, že chcete vymazať všetky označené správy?',
	'DELETE_OLDEST_MESSAGES'			=> 'Vymazať staršie správy',
	'DELETE_MESSAGE'					=> 'Vymazať správu',
	'DELETE_MESSAGE_CONFIRM'			=> 'Ste si istý, že chcete vymazať túto správu?',
	'DELETE_MESSAGES_IN_FOLDER'			=> 'Vymazať všetky správy v priečinku',
	'DELETE_RULE'						=> 'Vymazať pravidlo',
	'DELETE_RULE_CONFIRM'				=> 'Ste si istý, že chcete vymazať toto pravidlo?',
	'DEMOTE_SELECTED'					=> 'Zbaviť sa vedenia v označených skupinách',
	'DISABLE_CENSORS'					=> 'Povoliť cenzúru slov',
	'DISPLAY_GALLERY'					=> 'Zobraziť galériu',
	'DOMAIN_NO_MX_RECORD_EMAIL'			=> 'Zadaná e-mailová doména nemá platný MX záznam.',
	'DOWNLOADS'							=> 'Stiahnuté',
	'DRAFTS_DELETED'					=> 'Všetky označené koncepty boli úspešne vymazané.',
	'DRAFTS_EXPLAIN'					=> 'Tu môžete zobraziť, upravovať alebo mazať vaše uložené koncepty.',
	'DRAFT_UPDATED'						=> 'Koncept úspešne upravený.',

	'EDIT_DRAFT_EXPLAIN'				=> 'Tu môžete upravovať svoje koncepty. Koncept nemôže obsahovať hlasovanie ani prílohy.',
	'EMAIL_BANNED_EMAIL'				=> 'Zadanú e-mailovú adresa nie je možné použiť.',
	'EMAIL_REMIND'						=> 'Musíte uviesť e-mailovú adresu, ktorá je zviazaná s vašim účtom. Najdete ju v sekcii "Moje nastavenia". Ak ste ju vo svojich nastaveniach nezmemnili je to tá, s ktorou ste sa zaregistrovali na tomto portáli.',
	'EMAIL_TAKEN_EMAIL'					=> 'E-mailová adresa sa už používa.',
	'EMPTY_DRAFT'						=> 'Musíte vložiť správu, ak chcete odoslať zmeny.',
	'EMPTY_DRAFT_TITLE'					=> 'Musíte zadať názov konceptu.',
	'EXPORT_AS_XML'						=> 'Exportovať ako XML',
	'EXPORT_AS_CSV'						=> 'Exportovať ako CSV',
	'EXPORT_AS_CSV_EXCEL'				=> 'Exportovať ako CSV (Excel)',
	'EXPORT_AS_TXT'						=> 'Exportovať ako TXT',
	'EXPORT_AS_MSG'						=> 'Exportovať ako MSG',
	'EXPORT_FOLDER'						=> 'Exportovať ako zložku',

	'FIELD_REQUIRED'					=> 'Pole “%s” musí byť vyplnené.',
	'FIELD_TOO_SHORT' => array(
		1 => 'Pole “%2$s” je príliš krátke, musí obsahovať najmenej %1$d znak.',
        2 => 'Pole “%2$s” je príliš krátke, musí obsahovať najmenej %1$d znaky.',
        3 => 'Pole “%2$s” je príliš krátke, musí obsahovať najmenej %1$d znakov.',
	),
	'FIELD_TOO_LONG' => array(
		1 => 'Pole “%2$s” je príliš dlhé, môže obsahovať maximálne %1$d znak.',
        2 => 'Pole “%2$s” je príliš dlhé, môže obsahovať maximálne %1$d znaky.',
        3 => 'Pole “%2$s” je príliš dlhé, môže obsahovať maximálne %1$d znakov.',
	),
	'FIELD_TOO_SMALL'								=> 'Hodnota “%2$s” je príliš malá, minimálna požadovaná hodnota je %1$d.',
	'FIELD_TOO_LARGE'								=> 'Hodnota “%2$s” je príliš veľká, maximálna možná hodnota je %1$d.',
	'FIELD_INVALID_CHARS_INVALID'					=> 'Pole “%s” obsahuje neplatné znaky.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'				=> 'Pole “%s” obsahuje neplatné znaky, povolené sú len číslice.',
	'FIELD_INVALID_CHARS_ALPHA_DOTS'				=> 'Pole “%s” obsahuje neplatné znaky, povolené sú alfanumerické znaky alebo .',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'				=> 'Pole “%s” obsahuje neplatné znaky, povolené sú len alfanumerické znaky.',
	'FIELD_INVALID_CHARS_ALPHA_PUNCTUATION'			=> 'Pole “%s” obsahuje neplatné znaky, povolené sú alfanumerické znaky alebo _,-. pričom prvým znakom musí byť písmeno.',
	'FIELD_INVALID_CHARS_ALPHA_SPACERS'				=> 'Pole “%s” obsahuje neplatné znaky, povolené sú alfanumerické znaky, medzery alebo znaky -+_[]',
	'FIELD_INVALID_CHARS_ALPHA_UNDERSCORE'			=> 'Pole “%s” obsahuje neplatné znaky, povolené sú alfanumerické znaky alebo _',
	'FIELD_INVALID_CHARS_LETTER_NUM_DOTS'			=> 'Pole “%s” obsahuje neplatné znaky, povolené sú písmená a číslice alebo .',
	'FIELD_INVALID_CHARS_LETTER_NUM_ONLY'			=> 'Pole “%s” obsahuje neplatné znaky, povolené sú len písmená a číslice.',
	'FIELD_INVALID_CHARS_LETTER_NUM_PUNCTUATION'	=> 'Pole “%s” obsahuje neplatné znaky, povolené sú písmená a číslice alebo _,-. pričom prvým znakom musí byť písmeno.',
	'FIELD_INVALID_CHARS_LETTER_NUM_SPACERS'		=> 'Pole “%s” obsahuje neplatné znaky, povolené sú písmená, číslice, medzery alebo znaky -+_[]',
	'FIELD_INVALID_CHARS_LETTER_NUM_UNDERSCORE'		=> 'Pole “%s” obsahuje neplatné znaky, povolené sú písmená, číslice alebo _',
	'FIELD_INVALID_DATE' 							=> 'Pole “%s” obsahuje neplatný dátum.',
	'FIELD_INVALID_URL'								=> 'Pole “%s” obsahuje neplatný odkaz na URL.',
	'FIELD_INVALID_VALUE'							=> 'Pole “%s” obsahuje neplatnú hodnotu.',

	'FOE_MESSAGE' 						=> 'Správy od ignorovaných',
	'FOES_EXPLAIN'						=> 'Príspevky od týchto užívateľov nebudú zobrazené, môžu vám však stále posielať súkromné správy. Medzi ignorovaných nemôžete pridať administrátorov a moderátorov portálu.',
	'FOES_UPDATED'						=> 'Zoznam ignorovaných bol aktualizovaný.',
	'FOLDER_ADDED'						=> 'Priečinok úspešne pridaný.',
	'FOLDER_MESSAGE_STATUS' => array(
		1 => 'obsahuje %2$d z %1$s',
        2 => 'obsahuje %2$d z %1$s',
        3 => 'obsahuje %2$d z %1$s',
	),
	'FOLDER_NAME_EMPTY'					=> 'Musíte zadať názov priečinku.',
	'FOLDER_NAME_EXIST'					=> 'Priečinok <strong>%s</strong> už existuje.',
	'FOLDER_OPTIONS' 					=> 'Možnosti priečinku',
	'FOLDER_RENAMED' 					=> 'Priečinok úspešne premenovaný.',
	'FOLDER_REMOVED' 					=> 'Priečinok úspešne odstránený.',
	'FOLDER_STATUS_MSG'	=> array(
		1 => 'Priečinok naplnený na %3$d%% (obsahuje %2$d z %1$s)',
        2 => 'Priečinok naplnený na %3$d%% (obsahuje %2$d z %1$s)',
        3 => 'Priečinok naplnený na %3$d%% (obsahuje %2$d z %1$s)',
	),
	'FORWARD_PM' 						=> 'Odoslať SS ďalej',
	'FORCE_PASSWORD_EXPLAIN'			=> 'Portál od vás požaduje zmenu vášho hesla.',
	'FRIEND_MESSAGE'					=> 'Správa od priateľa',
	'FRIENDS' 							=> 'Priatelia',
	'FRIENDS_EXPLAIN' 					=> 'Umožní vám to rýchlejší prístup k členom portálu, s ktorými často komunikujete. Ak to štýl fóra podporuje, príspevky vašich priteľov budú zvýraznené.',
	'FRIENDS_OFFLINE'					=> 'Nepripojený',
	'FRIENDS_ONLINE' 					=> 'Pripojený',
	'FRIENDS_UPDATED' 					=> 'Zoznam priateľov úspešne aktualizovaný.',
	'FULL_FOLDER_OPTION_CHANGED' 		=> 'Nastavenie prijímania nových správ zmenené.',
	'FWD_ORIGINAL_MESSAGE' 				=> '-------- Pôvodná správa --------',
	'FWD_SUBJECT'						=> 'Predmet: %s',
	'FWD_DATE' 							=> 'Dátum: %s',
	'FWD_FROM' 							=> 'Od: %s',
	'FWD_TO'							=> 'Komu: %s',

	'GLOBAL_ANNOUNCEMENT' 				=> 'Oznámenie pre celý portál',

	'GRAVATAR_AVATAR_EMAIL' 			=> 'Gravatar e-mail',
	'GRAVATAR_AVATAR_EMAIL_EXPLAIN'		=> 'Vložte e-mailovú adresu, ktorú ste použili pri registrácii na <a href="https://sk.gravatar.com/">Gravatar</a>.',
	'GRAVATAR_AVATAR_SIZE' 				=> 'Rozmery obrázku profilu',
	'GRAVATAR_AVATAR_SIZE_EXPLAIN'		=> 'Uveďte šírku a výšku obrázku profilu alebo ponechajte prázdne, pokúsime sa prebrať rozmery automaticky.',

	'HIDE_ONLINE' 						=> 'Skryť stav mojej prítomnosti',
	'HIDE_ONLINE_EXPLAIN' 				=> 'Zmena tohoto nastavenia sa prejaví po najbližšom prihlásení.',
	'HOLD_NEW_MESSAGES' 				=> 'Zablokovať príjem ďalších správ (nové správy budú prijaté až kým sa pre ne uvoľní miesto).',
	'HOLD_NEW_MESSAGES_SHORT' 			=> 'Blokovanie nových správ',

	'IF_FOLDER_FULL' 					=> 'Ak je priečinok plný',
	'IMPORTANT_NEWS' 					=> 'Dôležité oznámenia',
	'INVALID_USER_BIRTHDAY'				=> 'Dátum narodenia nie je platný.',
	'INVALID_CHARS_USERNAME' 			=> 'Užívateľské meno obsahuje nepovolené znaky.',
	'INVALID_CHARS_NEW_PASSWORD' 		=> 'Heslo neobsahuje požadované znaky.',
	'ITEMS_REQUIRED' 					=> 'Položky označené * sú povinné a musia byť vyplnené.',

	'JOIN_SELECTED'						=> 'Vstúpiť do označených',

	'LANGUAGE' 							=> 'Jazyk',
	'LINK_REMOTE_AVATAR' 				=> 'Externý odkaz',
	'LINK_REMOTE_AVATAR_EXPLAIN' 		=> 'Vložte odkaz URL na stránku s obrázkom.',
	'LINK_REMOTE_SIZE' 					=> 'Rozmery obrázku profilu',
	'LINK_REMOTE_SIZE_EXPLAIN' 			=> 'Uveďte šírku a výšku obrázku profilu alebo ponechajte prázdne, pokúsime sa prebrať rozmery automaticky.',
	'LOGIN_EXPLAIN_UCP' 				=> 'Prihláste sa ak chcet meniť vlastné nastavenia.',
	'LOGIN_LINK'						=> 'Použite váš účet v externej službe k registrácii alebo prepojení s účtom na tomto portále',
	'LOGIN_LINK_EXPLAIN' 				=> 'Pokúsili ste sa prihlásiť pomocou účtu v externej službe, která ešte nie je prepojená s účtom na tomto portále. Musíte najprv prepojiť externý účet s existujúcim účtom alebo vytvoriť nový účet na tomto portále.',
	'LOGIN_LINK_MISSING_DATA' 			=> 'Dáta, ktoré sú potrebné na prepojenie vášho účtu s externou službou nie sú dostupné. Reštartujte prihlasovací proces.',
	'LOGIN_LINK_NO_DATA_PROVIDED' 		=> 'Žiadne dáta na prepojenie externého účtu k portálu neboli touto stránkou poskytnuté. Ak problém pretrváva, kontaktujte administrátora.',
	'LOGIN_KEY'							=> 'Prihlasovací kľúč',
	'LOGIN_TIME' 						=> 'Čas prihlásenia',
	'LOGIN_REDIRECT' 					=> 'Prihlásenie bolo úspešné.',
	'LOGOUT_FAILED'						=> 'Neboli ste odhlásený. Ak problém pretrváva, kontaktujte prosím administrátora fóra.',
	'LOGOUT_REDIRECT' 					=> 'Odhlásenie bolo úspešné.',

	'MARK_IMPORTANT' 					=> 'Označiť/Odznačiť ako dôležité',
	'MARKED_MESSAGE' 					=> 'Dôležitá správa',
	'MAX_FOLDER_REACHED' 				=> 'Bol dosiahnutý maximálny možný počet vytvorených priečinkov.',
	'MESSAGE_BY_AUTHOR' 				=> 'od',
	'MESSAGE_COLOURS'					=> 'Farby správ',
	'MESSAGE_DELETED'					=> 'Správa úspešne zmazaná.',
	'MESSAGE_EDITED'					=> 'Správa úspešne upravená.',
	'MESSAGE_HISTORY'					=> 'História správ',
	'MESSAGE_REMOVED_FROM_OUTBOX'		=> 'Autor túto správu zmazal.',
	'MESSAGE_SENT_ON'					=> 'dňa',
	'MESSAGE_STORED'					=> 'Táto správa bola úspešne odoslaná.',
	'MESSAGE_TO'						=> 'komu',
	'MESSAGES_DELETED'					=> 'Správy úspešne vymazané',
	'MOVE_DELETED_MESSAGES_TO'			=> 'Presunúť správy do priečinku',
	'MOVE_DOWN'							=> 'Presunúť dole',
	'MOVE_MARKED_TO_FOLDER'				=> 'Označené presunúť do %s',
	'MOVE_PM_ERROR'	=> array(
		1 => 'Počas presúvania správ sa vyskytla chyba, presunula sa len %2$d z %1$s.',
        2 => 'Počas presúvania správ sa vyskytla chyba, presunuli sa len %2$d z %1$s.',
        3 => 'Počas presúvania správ sa vyskytla chyba, presunulo sa len %2$d z %1$s.',
	),
	'MOVE_TO_FOLDER'					=> 'Presunúť do priečinku',
	'MOVE_UP'							=> 'Presunúť hore',

	'NEW_FOLDER_NAME'					=> 'Nový názov priečinku',
	'NEW_PASSWORD'						=> 'Nové heslo',
	'NEW_PASSWORD_CONFIRM_EMPTY'		=> 'Nepotvrdili ste heslo.',
	'NEW_PASSWORD_ERROR'				=> 'Heslá sa nezhodujú.',

	'NOTIFICATIONS_MARK_ALL_READ'			=> 'Označiť všetky upozornenia ako prečítané',
	'NOTIFICATIONS_MARK_ALL_READ_CONFIRM'	=> 'Ste si istý, že chcete označiť všetky upozornenia ako prečítané?',
	'NOTIFICATIONS_MARK_ALL_READ_SUCCESS'	=> 'Všetky upozornenia boli označené ako prečítané.',
	'NOTIFICATION_GROUP_MISCELLANEOUS' 		=> 'Ostatné upozornenia',
	'NOTIFICATION_GROUP_MODERATION' 		=> 'Moderovanie',
	'NOTIFICATION_GROUP_ADMINISTRATION'		=> 'Administrácia',
	'NOTIFICATION_GROUP_POSTING' 			=> 'Písanie prípevkov',
	'NOTIFICATION_METHOD_EMAIL' 			=> 'E-mail',
	'NOTIFICATION_METHOD_JABBER' 			=> 'Jabber',
	'NOTIFICATION_TYPE'						=> 'Typ upozornenia',
	'NOTIFICATION_TYPE_BOOKMARK' 			=> 'Niekto odpovie v téme, ktorú mám v záložkách',
	'NOTIFICATION_TYPE_GROUP_REQUEST' 		=> 'Niekto požiadal o členstvo v skupine, ktorej som vedúcim',
	'NOTIFICATION_TYPE_IN_MODERATION_QUEUE'	=> 'Ak príspevok alebo téma vyžaduje schválenie',
	'NOTIFICATION_TYPE_MODERATION_QUEUE' 	=> 'Schválenie/zamietnutie vašich príspevkov moderátormi',
	'NOTIFICATION_TYPE_PM' 					=> 'Niekto mi pošle súkromnú správu',
	'NOTIFICATION_TYPE_POST' 				=> 'Niekto odpovie v téme, ktorú sledujem',
	'NOTIFICATION_TYPE_QUOTE'				=> 'Niekto použije citáciu môjho príspevku',
	'NOTIFICATION_TYPE_REPORT' 				=> 'Niekto odošle sťažnosť na môj príspevok',
	'NOTIFICATION_TYPE_TOPIC' 				=> 'Niekto vytvorí tému vo fóre, ktoré sledujem',
	'NOTIFICATION_TYPE_ADMIN_ACTIVATE_USER'	=> 'Novo registrovaný užívateľ vyžaduje aktiváciu účtu',

	'NOTIFY_METHOD'						=> 'Metóda upozornenia',
	'NOTIFY_METHOD_BOTH' 				=> 'Oba spôsoby',
	'NOTIFY_METHOD_EMAIL' 				=> 'Len e-mail',
	'NOTIFY_METHOD_EXPLAIN'				=> 'Metóda posielania správ cez tento portál.',
	'NOTIFY_METHOD_IM' 					=> 'Len Jabber',
	'NOTIFY_ON_PM' 						=> 'Poslať upozornenie po príchode novej súkromnej správy',
	'NOT_ADDED_FRIENDS_ANONYMOUS'		=> 'Anonymného užívateľa nie je možné pridať medzi priateľov.',
	'NOT_ADDED_FRIENDS_BOTS' 			=> 'Bot nie je možné pridať medzi priateľov.',
	'NOT_ADDED_FRIENDS_FOES' 			=> 'Ignorovaných nie je možné pridať medzi priateľov.',
	'NOT_ADDED_FRIENDS_SELF' 			=> 'Nemôžete pridať samých seba medzi priateľov.',
	'NOT_ADDED_FOES_MOD_ADMIN' 			=> 'Administrátorov a moderátorov nemôžete pridať medzi ignorovaných.',
	'NOT_ADDED_FOES_ANONYMOUS'			=> 'Anonymného užívateľa nie je možné pridať medzi ignorovaných.',
	'NOT_ADDED_FOES_BOTS' 				=> 'Bot nie je možné pridať medzi ignorovaných.',
	'NOT_ADDED_FOES_FRIENDS' 			=> 'Priateľov nemôžete pridať medzi ignorovaných, musíte ich najprv odstrániť zo zoznamu priateľov.',
	'NOT_ADDED_FOES_SELF' 				=> 'Nemôžete pridať samých seba medzi ignorovaných.',
	'NOT_AGREE'							=> 'Nesúhlasím s týmito podmienkami',
	'NOT_ENOUGH_SPACE_FOLDER' 			=> 'Cieľový priečinok “%s” je plný. Požadovaný úkon nie je možné dokončiť.',
	'NOT_MOVED_MESSAGES' => array(
		1 => 'Máte blokovaný príjem %d súkromnej správy, pretože priečinok je plný.',
		2 => 'Máte blokovaný príjem %d súkromných správ, pretože priečinok je plný.',
		3 => 'Máte blokovaný príjem %d súkromných správ, pretože priečinok je plný.',
	),
	'NO_ACTION_MODE' 					=> 'Nebol určený žiaden úkon.',
	'NO_AUTHOR'	 						=> 'Nebol určený autor správy',
	'NO_AVATAR'							=> 'Nebol zvolený obrázok profilu',
	'NO_AVATAR_CATEGORY' 				=> 'Nič',

	'NO_AUTH_DELETE_MESSAGE'		 	=> 'Nemáte dostatočné oprávnenie na mazanie správ.',
	'NO_AUTH_EDIT_MESSAGE'			 	=> 'Nemáte dostatočné oprávnenie na úpravu správ.',
	'NO_AUTH_FORWARD_MESSAGE'			=> 'Nemáte dostatočné oprávnenie na preposielanie správ.',
	'NO_AUTH_GROUP_MESSAGE'				=> 'Nemáte dostatočné oprávnenie na posielanie správ členom skupín.',
	'NO_AUTH_PASSWORD_REMINDER'			=> 'Nemáte dostatočné oprávnenie na vyžiadanie nového hesla.',
	'NO_AUTH_PROFILEINFO' 				=> 'Nemáte dostatočné oprávnenie na zmenu profilových informácií.',
	'NO_AUTH_READ_HOLD_MESSAGE' 		=> 'Nemáte dostatočné oprávnenie na čítanie čakajúcich správ.',
	'NO_AUTH_READ_MESSAGE' 				=> 'Nemáte dostatočné oprávnenie na čítanie súkromných správ.',
	'NO_AUTH_READ_REMOVED_MESSAGE' 		=> 'Nemôžete si prečítať túto správu, pretože autor ju odstránil.',
	'NO_AUTH_SEND_MESSAGE' 				=> 'Nemáte dostatočné oprávnenie na posielanie súkromných správ.',
	'NO_AUTH_SIGNATURE'					=> 'Nemáte dostatočné oprávnenie na vytvorenie vlastného podpisu.',

	'NO_BCC_RECIPIENT'				 	=> 'Žiadny',
	'NO_BOOKMARKS' 						=> 'Nemáte žiadne záložky.',
	'NO_BOOKMARKS_SELECTED'				=> 'Nemáte žiadne záložky.',
	'NO_EDIT_READ_MESSAGE' 				=> 'Táto súkromná správa už nemôže byť upravená, pretože už bola prečítaná.',
	'NO_EMAIL_USER'						=> 'Užívateľ/e-mailová adresa nenájdená.',
	'NO_FOES' 							=> 'Nemáte žiadných nepriateľov',
	'NO_FRIENDS' 						=> 'Nemáte žiadných priateľov',
	'NO_FRIENDS_OFFLINE' 				=> 'Žiaden z priateľov nie je pripojený',
	'NO_FRIENDS_ONLINE'					=> 'Žiaden z priateľov nie je nepripojený',
	'NO_GROUP_SELECTED'					=> 'Nebola definovaná žiadna skupina.',
	'NO_IMPORTANT_NEWS'					=> 'Žiadne dôležité oznámenia.',
	'NO_MESSAGE' 						=> 'Súkromná správa nenájdená.',
	'NO_NEW_FOLDER_NAME' 				=> 'Musíte uviesť názov priečinku.',
	'NO_NEWER_PM' 						=> 'Žiadne novšie správy.',
	'NO_OLDER_PM' 						=> 'Žiadne staršie správy.',
	'NO_PASSWORD_SUPPLIED' 				=> 'Nemôžete sa prihlásiť bez uvedenia hesla.',
	'NO_RECIPIENT' 						=> 'Nebol uvedený adresát.',
	'NO_RULES_DEFINED' 					=> 'Žiadne definované pravidlá.',
	'NO_SAVED_DRAFTS' 					=> 'Nemáte uložené žiadne koncepty.',
	'NO_TO_RECIPIENT' 					=> 'Žiadny',
	'NO_WATCHED_FORUMS'					=> 'Nesledujete žiadne fóra.',
	'NO_WATCHED_SELECTED' 				=> 'Neboli označené žiadne sledované fóra alebo témy.',
	'NO_WATCHED_TOPICS'					=> 'Nesledujete žiadne témy.',

	'PASS_TYPE_ALPHA_EXPLAIN' 			=> 'Heslo musí mať najmenej %1$s a najviac %2$s, musí obsahovať malé a veľké písmená a musí obsahovať aj čísla.',
	'PASS_TYPE_ANY_EXPLAIN'				=> 'Heslo musí mať najmenej %1$s a najviac %2$s.',
	'PASS_TYPE_CASE_EXPLAIN' 			=> 'Heslo musí mať najmenej %1$s a najviac %2$s, musí obsahovať malé a veľké písmená.',
	'PASS_TYPE_SYMBOL_EXPLAIN'			=> 'Heslo musí mať najmenej %1$s a najviac %2$s, musí obsahovať malé a veľké písmená, číslice a symboly.',
	'PASSWORD' 							=> 'Heslo',
	'PASSWORD_ACTIVATED' 				=> 'Nové heslo bolo aktivované.',
	'PASSWORD_UPDATED' 					=> 'Nové heslo bolo odoslané na vašu emailovú adresu.',
	'PERMISSIONS_RESTORED' 				=> 'Pôvodné oprávnenia úspešne obnovené.',
	'PERMISSIONS_TRANSFERRED' 		 	=> 'Oprávnenia <strong>%s</strong> dočasne prenesené, teraz si môžete prezerať portál s týmito oprávneniami.<br />Svoje pôvodné oprávnenia dostanete naspäť po ukončení kontroly prenesených užívateľských práv.',
	'PM_DISABLED' 						=> 'Odosielanie správ bolo zakázané administrátormi portálu.',
	'PM_FROM' 							=> 'Od',
	'PM_FROM_REMOVED_AUTHOR' 			=> 'Táto správa bola odoslaná užívateľom, ktorý už nie je členom.',
	'PM_ICON' 							=> 'ikona SS',
	'PM_INBOX' 							=> 'Prijaté',
	'PM_MARK_ALL_READ'					=> 'Označiť všetky správy ako prečítané',
	'PM_MARK_ALL_READ_SUCCESS'			=> 'Všetky súkromné správy v tomto priečinku boli označené ako prečítané',
	'PM_NO_USERS'						=> 'Užívateľ nenájdený.',
	'PM_OUTBOX'							=> 'Odoslané (neprečítané)',
	'PM_SENTBOX' 						=> 'Odoslané správy',
	'PM_SUBJECT' 						=> 'Predmet správy',
	'PM_TO'								=> 'Poslať komu',
	'PM_TOOLS' 							=> 'Nástroje',
	'PM_USERS_REMOVED_NO_PERMISSION' 	=> 'Niektorí užívatelia nemôžu byž adresátmi tejto správy, pretože nemajú dostatočné oprávnenia súvisiace so súkromnými správami.',
	'PM_USERS_REMOVED_NO_PM' 			=> 'Niektorí užívatelia nemôžu byž adresátmi tejto správy, pretože majú vypnutý príjem súkromných správ.',
	'POST_EDIT_PM' 						=> 'Upraviť správu',
	'POST_FORWARD_PM' 					=> 'Odoslať správu ďalej',
	'POST_NEW_PM' 						=> 'Vytvoriť novú súkromnú správu',
	'POST_PM_LOCKED' 					=> 'Odosielanie súkromných správ nie je povolené.',
	'POST_PM_POST' 						=> 'Citovať príspevok',
	'POST_QUOTE_PM' 					=> 'Citovať správu',
	'POST_REPLY_PM'						=> 'Odpovedať na správu',
	'PRINT_PM' 							=> 'Náhľad tlače',
	'PREFERENCES_UPDATED' 				=> 'Vaše nastavenia boli aktualizované.',
	'PROFILE_INFO_NOTICE' 				=> 'Upozorňujeme vás, že informácie, ktoré tu budú uvedené môžu vidieť ostatní užívatelia portálu. Beriete na seba plnú zodpovednosť za uvedenie akýchkoľvek osobných informácií. Každá položka označená * však musí byť vyplnená.',
	'PROFILE_UPDATED' 					=> 'Profilové informácie boli upravené.',
	'PROFILE_AUTOLOGIN_KEYS' 			=> 'Prihlasovacie kľúče zabezpečujú vaše automatické prihlasovanie pri každej návšteve portálu, pokiaľ ste túto možnosť vybrali pri prihlásení. Ak sa odhlásite, prihlasovací kľúč bude vymazaný len na počítači, na ktorom ste sa z tohoto portálu odhlásili. V tejto sekcii môžete vidieť všetky prihlasovacie kľúče a teda aj tie, ktoré boli uložené na iných počítačoch, z ktorých ste sa prihlásili na tento portál a využili pri prihlasovaní možnosť zapamätať si prihlásenie pri každej budúcej návšteve portálu.',
	'PROFILE_NO_AUTOLOGIN_KEYS'	 		=> 'Žiadne prihlasovacie kľúče neboli uložené.',

	'RECIPIENT'							=> 'Adresát',
	'RECIPIENTS'						=> 'Adresáti',
	'REGISTRATION'						=> 'Registrácia',
	'RELEASE_MESSAGES'					=> '%sUvolniť všetky čakajúce správy%s… budú uložené do zodpovedajúceho priečinku, ak pre ne bude dostatočný priestor pre uloženie.',
	'REMOVE_ADDRESS'					=> 'Odstrániť adresu',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Odstrániť označené témy zo záložiek',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Ste si istý, že chcete odstrániť označené témy zo záložiek?',
	'REMOVE_BOOKMARK_MARKED' 			=> 'Odstrániť zo záložiek',
	'REMOVE_FOLDER'	 					=> 'Odstrániť priečinok',
	'REMOVE_FOLDER_CONFIRM'	 			=> 'Ste si istý, že chcete odstrániť tento priečinok?',
	'RENAME' 							=> 'Premenovať',
	'RENAME_FOLDER' 					=> 'Premenovať priečinok',
	'REPLIED_MESSAGE'					=> 'Zodpovedaná',
	'REPLY_TO_ALL'						=> 'Odpovedať všetkým.',
	'REPORT_PM'							=> 'Odoslať sťažnosť na súkromnú správu',
	'RESIGN_SELECTED' 					=> 'Opustiť označené',
	'RETURN_FOLDER'						=> '%1$sNávrat do predchádzajúceho priečinku%2$s',
	'RETURN_UCP' 						=> '%sNávrat na "Moje nastavenia"%s',
	'RULE_ADDED' 						=> 'Pravidlo úspešne pridané.',
	'RULE_ALREADY_DEFINED' 				=> 'Toto pravidlo už bolo definované.',
	'RULE_DELETED' 						=> 'Pravidlo bolo úspešne odstránené.',
	'RULE_LIMIT_REACHED' 				=> 'Nie je možné pridať viac pravidiel. Bol dosiahnutý maximálny počet vytvorených pravidiel.',
	'RULE_NOT_DEFINED' 					=> 'Pravidlo nebolo správne definované.',
	'RULE_REMOVED_MESSAGES'	=> array(
		1 => 'Filter odstránil %d súkromnú správu.',
		2 => 'Filter odstránil %d súkromné správy.',
		3 => 'Filter odstránil %d súkromných správ.',
	),

	'SAME_PASSWORD_ERROR'			 	=> 'Nové heslo, ktoré ste zadali je identické ako to predošlé.',
	'SEARCH_YOUR_POSTS'					=> 'Zobraziť príspevky',
	'SEND_PASSWORD'						=> 'Odoslať heslo',
	'SENT_AT' 							=> 'Odoslané', // Used before dates in private messages
	'SHOW_EMAIL' 						=> 'Užívatelia mi môžu posielať e-mailové správy',
	'SIGNATURE_EXPLAIN'					=> 'Tu môžete upraviť podpis, ktorý bude priložený k vašim príspevkom. Maximálny počet znakov: %d.',
	'SIGNATURE_PREVIEW'					=> 'Váš podpis bude v príspevkoch vyzerať nasledovne',
	'SIGNATURE_TOO_LONG' 				=> 'Váš podpis je príliš dlhý.',
	'SELECT_CURRENT_TIME' 				=> 'Vyberte aktuálny čas',
	'SELECT_TIMEZONE' 					=> 'Vyberte časové pásmo',
	'SORT' 								=> 'Zotriediť',
	'SORT_COMMENT' 						=> 'komentára',
	'SORT_DOWNLOADS'					=> 'počtu stiahnutí',
	'SORT_EXTENSION' 					=> 'prípony',
	'SORT_FILENAME'						=> 'názvu súboru',
	'SORT_POST_TIME' 					=> 'časovej pečiatky odoslania',
	'SORT_SIZE'	 						=> 'veľkosti',

	'TIMEZONE' 							=> 'Časová zóna',
	'TIMEZONE_DATE_SUGGESTION'			=> 'Návrhy: %s',
	'TIMEZONE_INVALID' 					=> 'Časové pásmo, ktoré ste zvolili je neplatné.',
	'TO' 								=> 'Príjemca',
	'TO_MASS' 							=> 'Príjemcovia',
	'TO_ADD' 							=> 'Pridať príjemcu',
	'TO_ADD_MASS' 						=> 'Pridať príjemcov',
	'TO_ADD_GROUPS'						=> 'Pridať skupiny',
	'TOO_MANY_RECIPIENTS' 				=> 'Pokúšate sa odoslať súkromnú správu príliš veľkému počtu príjemcov.',
	'TOO_MANY_REGISTERS' 				=> 'Prekročili ste maximálny počet pokusov o registráciu. Skúste to znovu neskôr',

	'UCP' 								=> 'Nastavenia',
	'UCP_ACTIVATE'						=> 'Aktivovať účet',
	'UCP_ADMIN_ACTIVATE' 				=> 'Vezmite na vedomie, že musíte uviesť platnú emailovú adresu. Váš účet bude posúdený administrátormi portálu a tí vám odošlú na tento email ďalšie pokyny potrebné k aktivácii účtu.',
	'UCP_ATTACHMENTS'					=> 'Prílohy',
	'UCP_AUTH_LINK'						=> 'Externé účty',
	'UCP_AUTH_LINK_ASK' 				=> 'Momentálne nie je s externou službou prepojený žiadny účet. Kliknite na nasledujúce tlačítko, aby ste prepojili váš účet s externou službou.',
	'UCP_AUTH_LINK_ID' 					=> 'Jednoznačný identifikátor',
	'UCP_AUTH_LINK_LINK' 				=> 'Prepojiť',
	'UCP_AUTH_LINK_MANAGE'				=> 'Spravovať prepojenia s externými účtami',
	'UCP_AUTH_LINK_NOT_SUPPORTED' 		=> 'Prepájanie účtov s externými službami je na tomto portále vypnuté v súvislosti s momentálne nastaveným overovaním účtu.',
	'UCP_AUTH_LINK_TITLE' 				=> 'Správca prepojení s externými účtami',
	'UCP_AUTH_LINK_UNLINK'				=> 'Odpojiť',
	'UCP_COPPA_BEFORE' 					=> 'Pred %s',
	'UCP_COPPA_ON_AFTER'				=> 'Po %s',
	'UCP_EMAIL_ACTIVATE' 				=> 'Vezmite na vedomie, že musíte uviesť platnú emailovú adresu. Na túto emailovú adresu vám budú odoslané ďalšie pokyny potrebné k aktivácii účtu.',
	'UCP_JABBER' 						=> 'Adresa na Jabber',
	'UCP_LOGIN_LINK' 					=> 'Nastaviť prepojenie s externým účtom',

	'UCP_MAIN' 							=> 'Správa',
	'UCP_MAIN_ATTACHMENTS' 				=> 'Spravovať prílohy',
	'UCP_MAIN_BOOKMARKS' 				=> 'Spravovať záložky',
	'UCP_MAIN_DRAFTS' 					=> 'Spravovať koncepty',
	'UCP_MAIN_FRONT' 					=> 'Základné informácie',
	'UCP_MAIN_SUBSCRIBED' 				=> 'Spravovať sledovanie',

	'UCP_NO_ATTACHMENTS' 				=> 'Neodovzdali ste žiadne prílohy.',

	'UCP_NOTIFICATION_LIST'				=> 'Spravovať upozornenia',
	'UCP_NOTIFICATION_LIST_EXPLAIN'		=> 'Tu môžete vidieť všetky upozornenia.',
	'UCP_NOTIFICATION_OPTIONS' 			=> 'Upraviť predvoľby upozornení',
	'UCP_NOTIFICATION_OPTIONS_EXPLAIN' 	=> 'Tu môžete nastaviť preferované metódy upozornení.',

	'UCP_PREFS'							=> 'Predvoľby',
	'UCP_PREFS_PERSONAL' 				=> 'Upraviť základné predvoľby',
	'UCP_PREFS_POST' 					=> 'Upraviť predvoľby písania príspevkov',
	'UCP_PREFS_VIEW' 					=> 'Upraviť predvoľby zobrazenia',

	'UCP_PM' 							=> 'Súkromné správy',
	'UCP_PM_COMPOSE' 					=> 'Vytvoriť súkromnú správu',
	'UCP_PM_DRAFTS'						=> 'Spravovať koncepty súkromných správ',
	'UCP_PM_OPTIONS'					=> 'Pravidlá, priečinky &amp; nastavenia',
	'UCP_PM_UNREAD'						=> 'Neprečítané správy',
	'UCP_PM_VIEW' 						=> 'Zobraziť správy',

	'UCP_PROFILE' 						=> 'Úprava profilu',
	'UCP_PROFILE_AVATAR'				=> 'Upraviť obrázok profilu',
	'UCP_PROFILE_PROFILE_INFO' 			=> 'Upraviť profil',
	'UCP_PROFILE_REG_DETAILS' 			=> 'Upraviť registračné údaje',
	'UCP_PROFILE_SIGNATURE'				=> 'Upraviť podpis',
	'UCP_PROFILE_AUTOLOGIN_KEYS' 		=> 'Správca automatických prihlásení',

	'UCP_USERGROUPS' 					=> 'Nastavenia skupín užívateľov',
	'UCP_USERGROUPS_MEMBER' 			=> 'Upraviť členstvo',
	'UCP_USERGROUPS_MANAGE'				=> 'Správca skupín',

	'UCP_PASSWORD_RESET_DISABLED' 		=> 'Možnosť obnovenia hesla bola vypnutá. Ak potrebujete pomoc s prihlásením musíte sa obrátiť na %sadministrátorov portálu%s',
	'UCP_REGISTER_DISABLE' 				=> 'Ospravedlňujeme sa, ale registrácie nových účtov na tento portál sú momentálne zastavené.',
	'UCP_REMIND' 						=> 'Odoslať heslo',
	'UCP_RESEND'	 					=> 'Odoslať aktivačný email',
	'UCP_WELCOME'						=> 'Vitajte v sekcii vlastných nastavení. Tu môžete zobraziť a upravovať rôzne nastavenia, vaše registračné údaje, profil, ktorý bude zobrazený ostatným užívateľom portálu, spravovať zoznam priateľov a ignorovaných užívateľov portálu, spravovať upozornenia, prílohy, sledované témy a pod.',
	'UCP_ZEBRA'							=> 'Priatelia &amp; Ignorovaní',
	'UCP_ZEBRA_FOES' 					=> 'Spravovať zoznam ignorovaných',
	'UCP_ZEBRA_FRIENDS'					=> 'Spravovať zoznam priateľov',
	'UNDISCLOSED_RECIPIENT'				=> 'Neznámy doručiteľ',
	'UNKNOWN_FOLDER' 					=> 'Neznámy priečinok',
	'UNWATCH_MARKED' 					=> 'Ukončiť sledovanie',
	'UPLOAD_AVATAR_FILE' 				=> 'Nahrať',
	'UPLOAD_AVATAR_URL'					=> 'Získať z adresy',
	'UPLOAD_AVATAR_URL_EXPLAIN'			=> 'Vložte odkaz na obrázok avataru. Obrázok bude skopírovaný na tento portál.',
	'USERNAME_ALPHA_ONLY_EXPLAIN' 		=> 'Užívateľské meno musí mať najmenej %1$s a maximálne %2$s, pričom môžu byť použité len alfanumerické znaky.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN' 	=> 'Užívateľské meno musí mať najmenej %1$s a najviac %2$s, pričom môžu byť použité alfanumerické znaky, medzery alebo znaky -+_[]',
	'USERNAME_ASCII_EXPLAIN' 			=> 'Užívateľské meno musí mať najmenej %1$s a najviac %2$s, pričom môžu byť použité len znaky ASCI, žiadne špeciáláne znaky.',
	'USERNAME_LETTER_NUM_EXPLAIN' 		=> 'Užívateľské meno musí mať najmenej %1$s a najviac %2$s, pričom môžu byť použité len písmená alebo číslice.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN' => 'Užívateľské meno musí mať najmenej %1$s a najviac %2$s, pričom môžu byť použité len písmená, číslice, medzery alebo znaky -+_[].',
	'USERNAME_CHARS_ANY_EXPLAIN' 		=> 'Dĺžka musí byť najmenej %1$s a najviac %2$s.',
	'USERNAME_TAKEN_USERNAME' 			=> 'Zadané užívateľské meno sa už používa, vložte prosím alternatívu.',
	'USERNAME_DISALLOWED_USERNAME' 		=> 'Zadané užívateľské meno nie je možné použiť alebo obsahuje nepovolené slovo. Zvolte si iné.',
	'USER_NOT_FOUND_OR_INACTIVE'		=> 'Zadané užívateľské mená neboli nájdené alebo ich účty nie sú aktivované.',

	'VIEW_AVATARS' 						=> 'Zobrazovať avatary',
	'VIEW_EDIT'							=> 'Zobraziť/Upraviť',
	'VIEW_FLASH' 						=> 'Zobrazovať FLASH animácie',
	'VIEW_IMAGES' 						=> 'V príspevkoch zobrazovať obrázky',
	'VIEW_NEXT_HISTORY'					=> 'Ďalšia SS z histórie',
	'VIEW_NEXT_PM' 						=> 'Ďalšia SS',
	'VIEW_PM'							=> 'Zobraziť správu',
	'VIEW_PM_INFO' 						=> 'Detaily správy',
	'VIEW_PM_MESSAGES' => array(
		1 => '%d správa',
		2 => '%d správy',
		3 => '%d správ',
	),
	'VIEW_PREVIOUS_HISTORY'				=> 'Predchádzajúca SS z histórie',
	'VIEW_PREVIOUS_PM'					=> 'Predchádzajúca SS',
	'VIEW_PROFILE' 						=> 'Zobraziť profil',
	'VIEW_SIGS'							=> 'Zobrazovať podpisy',
	'VIEW_SMILIES' 						=> 'Zobrazovať smajlíky ako obrázky',
	'VIEW_TOPICS_DAYS'	 				=> 'Zobrazovať témy za',
	'VIEW_TOPICS_DIR' 					=> 'Zoradiť témy',
	'VIEW_TOPICS_KEY' 					=> 'Zoradiť témy podľa',
	'VIEW_POSTS_DAYS' 					=> 'Zobrazovať príspevky za',
	'VIEW_POSTS_DIR' 					=> 'Zoradiť príspevky',
	'VIEW_POSTS_KEY' 					=> 'Zoradiť príspevky podľa',

	'WATCHED_EXPLAIN' 					=> 'Tu je zoznam fór a tém, v ktorých sledujete nové príspevky. Na nové príspevky budete upozornený. Ak chcete ukončiť sledovanie fóra alebo témy, označte ho a kliknite na tlačítko "Ukončiť sledovanie".',
	'WATCHED_FORUMS' 					=> 'Sledované fóra',
	'WATCHED_TOPICS' 					=> 'Sledované témy',
	'WRONG_ACTIVATION' 					=> 'Nesprávna aktivačná klávesa.',

	'YOUR_DETAILS'		 				=> 'Aktivita',
	'YOUR_FOES'							=> 'Ignorovaní',
	'YOUR_FOES_EXPLAIN' 				=> 'Ak chcete odstrániť užívateľa zo zonamu označte ho a kliknite na "Odoslať".',
	'YOUR_FRIENDS' 						=> 'Priatelia',
	'YOUR_FRIENDS_EXPLAIN' 				=> 'Ak chcete odstrániť užívateľa zo zonamu označte ho a kliknite na "Odoslať".',
	'YOUR_WARNINGS' 					=> 'Udelené výstrahy',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER' => 'Vložiť do priečinku',
		'MARK_AS_READ' => 'Označiť ako prečítané',
		'MARK_AS_IMPORTANT' => 'Označiť správu',
		'DELETE_MESSAGE' => 'Zmazať správu',
	),
	'PM_CHECK' => array(
		'SUBJECT' => 'pole predmet',
		'SENDER' => 'pole odosielateľ',
		'MESSAGE' => 'pole správa',
		'STATUS' => 'stav správy',
		'TO' => 'pole komu',
	),
	'PM_RULE' => array(
		'IS_LIKE' => 'obsahuje',
		'IS_NOT_LIKE' => 'neobsahuje',
		'IS' => 'je',
		'IS_NOT' => 'nie je',
		'BEGINS_WITH' => 'začína na',
		'ENDS_WITH'	=> 'končí na',
		'IS_FRIEND'	=> 'je priateľom',
		'IS_FOE' => 'je ignorovaným',
		'IS_USER' => 'je užívateľom',
		'IS_GROUP' => 'je v skupine',
		'ANSWERED' => 'je zodpovedaná',
		'FORWARDED' => 'je preposlaná',
		'TO_GROUP' => 'mojej východiskovej skupine',
		'TO_ME' => 'mne',
	),

	'GROUPS_EXPLAIN' 					=> 'Užívateľské skupiny umožňujú administrátorom spravovať užívateľov. Každý užívatel má svoju východiskovú skupinu. Tá definuje napr. ako bude užívateľ zobrazený voči ostatním užívateľom, akú bude mať farbu mena, avatar, hodnosť, a pod. Zmeniť východiskovú skupinu je možné, pokiaľ to administrátor dovolí v nastaveniach portálu. Je tiež možné vstúpiť/vystúpiť alebo požiadať o členstvo v iných skupinách. Skupiny tiež definujú úroveň oprávnení, čo povoľuje alebo zakazuje užívateľom využívať rôzne funkcie portálu.',
	'GROUP_LEADER' 						=> 'Vedúci',
	'GROUP_MEMBER' 						=> 'Člen',
	'GROUP_PENDING'						=> 'Čaká na prijatie',
	'GROUP_NONMEMBER'		 			=> 'Bez členstva',
	'GROUP_DETAILS' 					=> 'Detaily skupiny',

	'NO_LEADER' 						=> 'Žiadne skupiny bez vedúceho',
	'NO_MEMBER' 						=> 'Žiadne členstvo',
	'NO_PENDING' 						=> 'Žiadne čakajúce žiadosti o členstvo',
	'NO_NONMEMBER' 						=> 'Žiadne skupiny bez členov',
));
