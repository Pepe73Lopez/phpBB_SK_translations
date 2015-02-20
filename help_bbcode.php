<?php
/**
*
* @package language
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Úvod'
	),
	array(
		0 => 'Čo je to BBCode?',
		1 => '<br />BBCode je špeciálna implementácia HTML, ktorá umožňuje meniť vlastnosti jednotlivých prvkov príspevku a celkový vzhľad príspevku. O tom, či môžete používať BBCode pri písaní príspevkov rozhoduje administrátor portálu nastavením príslušných možností portálu. Ak je používanie BBCode povolené pre celý portál, môžete o jeho použití nakoniec rozhodnúť sami pri písaní každého príspevku. BBCode je veľmi podobný HTML, značky charakterizujúce vlastnosť písaného textu, nazývané tiež tagy, sú uzvreté v hranatých zátvorkách [ ] a ponúkajú tak väčšiu kontrolu nad vzhľadom príspevku. Od použitej témy portálu závisí, či je pre vkladanie tagov možné použiť jednoduché zástupné ikony alebo písať tagy ručne.<br /><br />'
	),
	array(
		0 => '--',
		1 => 'Formátovanie textu'
	),
	array(
		0 => 'Ako vytvoriť tučný text, kurzívu a podčiarmnutý text?',
		1 => '<br /><ul><li>Tučný text vytvoríte uzavretím časti textu do párového tagu <strong>[b][/b]</strong>, zápis počas písania príspevku: <br /><br /><strong>[b]</strong>Ahoj<strong>[/b]</strong><br /><br />bude po odoslaní príspevku vyzerať takto: <strong>Ahoj</strong><br /><br /></li><li>Pre podčiarknutý text použite <strong>[u][/u]</strong>, napríklad:<br /><br /><strong>[u]</strong>Dobré ráno<strong>[/u]</strong><br /><br />bude vyzerať takto: <span style="text-decoration: underline">Dobré ráno</span><br /><br /></li><li>Pre kurzívu použite <strong>[i][/i]</strong>, napríklad:<br /><br />Toto je <strong>[i]</strong>neskutočné!<strong>[/i]</strong><br /><br />bude vyzerať takto: Toto je <i>neskutočné!</i></li></ul><br /><br />'
	),
	array(
		0 => 'Ako zmeniť veľkosť textu a jeho farbu?',
		1 => '<br />Nasledujúce tagy môžu byť použité na zmenu veľkosti textu a jeho farby. Majte na pamäti, že výsledné zobrazenie je závislé na použitom prehliadači.<br /><br /><ul><li>Zmenu farby textu dosiahnete uzavretím časti textu do párového tagu <strong>[color=][/color]</strong>. Môžete použiť známe názvy farieb písaných ich anglickým názvom (napríklad red, blue, yellow, a pod.) alebo ich hexadecimálnu alternatívu, napríklad #FFFFFF, #000000. Pre zobrazenie textu červenou farbou použite napríklad zápis:<br /><br /><strong>[color=red]</strong>Ahoj!<strong>[/color]</strong><br /><br />alebo<br /><br /><strong>[color=#FF0000]</strong>Ahoj!<strong>[/color]</strong><br /><br />Obidva spôsoby zápisu sa prejavia takto: <span style="color:red">Ahoj!</span><br /><br /></li><li>Zmenu veľkosti textu je možné dosiahnuť podobným spôsobom <strong>[size=][/size]</strong>. Tento párový tag je závislý na použitej šablóne portálu. Odporúča sa použiť číselnú hodnotu, ktorá reprezentuje veľkosť textu v percentách, počiatočná hodnota je 20 (veľmi malé) až do 200 (veľmi veľké). Napríklad:<br /><br /><strong>[size=30]</strong>MALÉ PÍSMO<strong>[/size]</strong><br /><br />bude vyzerať takto <span style="font-size:30%;">MALÉ PÍSMO</span><br /><br />alebo:<br /><br /><strong>[size=200]</strong>VEĽKÉ!<strong>[/size]</strong><br /><br />bude <span style="font-size:200%;">VEĽKÉ!</span></li></ul><br /><br />'
	),
	array(
		0 => 'Môžem kombinovať formátovacie tagy?',
		1 => '<br />Áno, je možné rôzne kombinovať formátovacie tagy, napríklad:<br /><br /><strong>[size=200][color=red][b]</strong>POZRI!<strong>[/b][/color][/size]</strong><br /><br />bude zobrazené ako <span style="color:red;font-size:200%;"><strong>POZRI!</strong></span><br /><br />Kvôli prehľadnosti však odporúčame vhodne voliť použitie jednotlivých formátovacích tagov, aby bol text prehľadný a čitateľný. Pamätajte na správne poradie v prípade použitia kombinácie tagov na rovnakú časť textu. Nasledujúci príklad zápisu je nesprávny a nemusí sa zobraziť správne:<br /><br /><strong>[b][u]</strong>TOTO JE ZLE ZAPÍSANÁ KOMBINÁCIA FORMÁTOVACÍCH TAGOV<strong>[/b][/u]</strong><br /><br />'
	),
	array(
		0 => '--',
		1 => 'Citácie a vloženie časti kódu alebo textu s pevnou šírkou'
	),
	array(
		0 => 'Použitie citovaného príspevku v odpovedi',
		1 => '<br />Sú dve možnosti ako použiť citácie a to s odkazom na autora alebo bez odkazu na autora.<br /><br /><ul><li>Citovaný text je vložený do párového tagu <strong>[quote=&quot;&quot;][/quote]</strong> pričom užívateľské meno autora textu sa vkladá do úvodzoviek otváracieho tagu. Príklad zápisu:<br /><br /><strong>[quote=&quot;PepeLopez&quot;]</strong>Bol som tam.<strong>[/quote]</strong><br /><br />spôsobí, že pred citovaný text bude automaticky vložené "PepeLopez napísal:"<br /><br /></li><li>Druhý spôsob, je citácia, bez uvedenia autora. V tomto prípade vkladáme citovaný text do párového tagu[quote][/quote]</strong>.</li></ul>'
	),
	array(
		0 => 'Vloženie časti kódu alebo textu s pevnou šírkou',
		1 => '<br />Ak potrebujete vo svojom príspevku zobraziť časť kódu alebo text s pevnou šírkou, vložte úryvok svojho kódu alebo časť textu do párového tagu <strong>[code][/code]</strong>, príklad zápisu: <br /><br /><strong>[code]</strong>echo &quot;Toto je priklad zapisu kodu&quot;;<strong>[/code]</strong><br /><br />Formátovacie značky vo vnútri tagu zostanú zachované a nebudú vykonané. Syntax jazyka PHP zvýrazníte použitím zápisu <strong>[code=php][/code]</strong>, je to odporúčané, ak chcete zobraziť kód v jazyku PHP pre lepšiu čitateľnosť kódu.<br /><br />'
	),
	array(
		0 => '--',
		1 => 'Vytváranie zoznamov'
	),
	array(
		0 => 'Vytvorenie nezoradeného zoznamu',
		1 => '<br />BBCode podporuje dva typy zoznamov, jednoduchý (nezoradený) a zoradený. V zásade je ich tvorba rovnaká ako v jazyku HTML. Jednoduchý (nezoradený) zoznam položiek vypíše každú položku zoznamu na samostatnom riadku, jednu po druhej so symbolom plného krúžku na začiatku každej položky. Na vytvorenie takéhoto zoznamu použite párový tag <strong>[list][/list]</strong> a každú položku v ňom definujte použitím <strong>[*]</strong> na samostatnom riadku. Príklad zápisu:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Slnko<br /><strong>[*]</strong>Seno<br /><strong>[*]</strong>Jahody<br /><strong>[/list]</strong><br /><br />Takýto zápis sa po uverejnení príspevku prejaví nasledovne:<br /><br /><ul><li>Slnko</li><li>Seno</li><li>Jahody</li></ul><br />'
	),
	array(
		0 => 'Vytvorenie zoradeného zoznamu',
		1 => 'Zoradený zoznam s očíslovaním jednotlivých položiek zoznamu vytvoríte použitím zápisu [list=1][/list]</strong> alebo zoznam s chronologickým zoradením položiek podľa písmen abecedy s použitím zápisu <strong>[list=a][/list]</strong>. Rovnako ako u jednoduchého zoznamu jednotlivé položky zoznamu sú definované na samostatnom riadku s použitím <strong>[*]</strong>. Príklad zápisu:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Nakúpiť<br /><strong>[*]</strong>Navariť<br /><strong>[*]</strong>Povysávať<br /><strong>[/list]</strong><br /><br />sa zobrazí nasledovne:<br /><br /><ol style="list-style-type: decimal;"><li>Nakúpiť</li><li>Navariť</li><li>Povysávať</li></ol><br />'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Vytváranie odkazov'
	),
	array(
		0 => 'Odkazy na iné stránky a odosielanie emailov z príspevku',
		1 => '<br />BBCode podporuje niekoľko spôsobov vytvárania odkazov na iné stránky.<br /><br /><ul><li>Prvý príklad používa párový tag <strong>[url=][/url]</strong>, čokoľvek uvedené za symbolom = bude interpretované prehliadačom ako cieľová adresa, ktorú má prehliadač otvoriť. Príklad zápisu aktívneho odkazu na phpBB.com:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Navštívte stránky phpBB!<strong>[/url]</strong><br /><br />sa zobrazí nasledovne: <a href="http://www.phpbb.com/">Navštívte stránky phpBB!</a> Tento odkaz otvorí vložený link buď v rovnakom, alebo novom okne, v závislosti od nastavení vášho prehliadača.<br /><br /></li><li>Ak chcete, aby bol odkaz zobrazený priamo v príspevku, stačí jednoduchý zápis:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />zobrazenie takéhoto zápisu bude nasledovné: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a><br /><br /></li><li>Ďalej, BBCode ponúka tzv. <i>Magic Links</i>, toto spôsobí, že platný odkaz bude prehliadačom interpretovaný ako aktívny odkaz, bez toho, aby bol uvedený do párového tagu alebo počiatočnej predpony http://. Príklad zápisu:<br /><br />www.phpbb.com<br /><br />sa zobrazí v príspevku nasledovne <a href="http://www.phpbb.com/">www.phpbb.com</a><br /><br /></li><li>Obdobne to platí pre odosielanie emailov priamo z príspevku. Príklad zápisu:<br /><br /><strong>[email]</strong>meno.priezvisko@adresa.sk<strong>[/email]</strong><br /><br />sa v príspevku zobrazí nasledovne: <a href="mailto:meno.priezvisko@adresa.sk">meno.priezvisko@adresa.sk</a> alebo stačí pri písaní príspevku jednoducho napísať meno.priezvisko@adresa.sk, bez toho, aby bolo potrebné uzatvárať adresu príjemcu do párového tagu.</li></ul><br /><br />'
	),
	array(
		0 => '--',
		1 => 'Zobrazovanie obrázkov'
	),
	array(
		0 => 'Pridanie obrázku do príspevku',
		1 => '<br />Pri vkladaní obrázkov do príspevku by mal mať autor píspevku na pamäti konečný vzhľad svojho príspevku a preto sa neodporúča vkladanie neúmerného množstva obrázkov, ďalej je potrebné zabezpečiť, aby vkladaný obrázok bol priamo prístupný prostredníctvom URL adresy (odkazu). K zobrazeniu obrázku v príspevku postačí zapísať odkaz na obrázok do párového tagu [img][/img]</strong>. Príklad zápisu:<br /><br /><strong>[img]</strong>http://upload.wikimedia.org/wikipedia/en/a/a9/Example.jpg<strong>[/img]</strong><br /><br />Ako už bolo spomenuté tagy sa môžu kombinovať, v tomto prípade napríklad s tagom <strong>[url][/url]</strong>, ak teda chcete zobraziť obrázok s aktívnym odkazom, použite nasledovný zápis:<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://upload.wikimedia.org/wikipedia/en/a/a9/Example.jpg<strong>[/img][/url]</strong><br /><br />Výsledok bude vo vašom príspevku nasledovný:<br /><br /><a href="http://www.phpbb.com/"><img src="http://upload.wikimedia.org/wikipedia/en/a/a9/Example.jpg" alt="" /></a><br />'
	),
	array(
		0 => 'Vkladanie príloh',
		1 => '<br />Prílohy je teraz možné pridávať do príspevku priemo pri jeho písaní použitím párového tagu <strong>[attachment=][/attachment]</strong>, ak bol tento párový tag povolený administrátorom portálu a ak autor príspevku disponuje príslušným oprávnením k vkladaniu príloh.<br /><br />'
	),
	array(
		0 => '--',
		1 => 'Iné'
	),
	array(
		0 => 'Môžem pridať vlastné tagy?',
		1 => '<br />Ďalšie tagy, dostupné v rámci <a href="http://www.bbcode.org/reference.php">phpBBCode</a> može pridávať len administrátor portálu.<br /><br />'
	),
);
