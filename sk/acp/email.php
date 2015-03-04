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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN' => 'Tu môžete poslať emailovú správu buď všetkým užívateľom alebo všetkým užívateľom určitej skupiny, <strong>ktorá má povolenú možnosť dostávať hromadné e-maily</strong>. Na dosiahnutie toho, e-mail bude odoslaný na zadaný administratívny e-mail so skrytými kópiami, ktoré budú poslané každému príjemcovi. Predvolené nastavenie vkladá len 50 prijímateľov do takéhoto e-mailu, pre viac príjemcov bude poslaných viac e-mailov. Ak posielate email veľkej skupine ľudí, prosíme, buďte po odoslaní trpezlivý a nezastavujte stránku na polceste. Pre hromadné emaily je normálne, že to trvá dlhý čas. Keď skript ukončí prácu, budete o tom oboznámený.',
	'ALL_USERS'	=> 'Všetci užívatelia',

	'COMPOSE' => 'Napísať novú',

	'EMAIL_SEND_ERROR' => 'Pri odosielaní e-mailu sa vyskytla jedna alebo viac chýb. Prosím skontrolujte %schybový záznam%s pre detailnú chybovú správu.',
	'EMAIL_SENT' => 'Táto správa bola odoslaná.',
	'EMAIL_SENT_QUEUE' => 'Táto správa čaká na odoslanie.',

	'LOG_SESSION' => 'Zoznam mailových správ v chybovom zázname',

	'SEND_IMMEDIATELY' => 'Poslať hneď',
	'SEND_TO_GROUP'	=> 'Poslať skupine',
	'SEND_TO_USERS' => 'Poslať užívateľom',
	'SEND_TO_USERS_EXPLAIN'	=> 'Vložte mená, ktoré nahradia akúkoľvek skupinu vybranú vyššie. Každé užívateľské meno vložte na samostatný riadok.',

    'MAIL_BANNED' => 'Odoslať e-mail zabanovaným užívateľom',
    'MAIL_BANNED_EXPLAIN'	=> 'Ak odosielate hromadný e-mail skupine, tu si môžete zvoliť, či e-mail obdržia aj zabanovaní užívatelia.',
	'MAIL_HIGH_PRIORITY' => 'Vysoká',
	'MAIL_LOW_PRIORITY'	=> 'Nízka',
	'MAIL_NORMAL_PRIORITY' => 'Normálna',
	'MAIL_PRIORITY' => 'Priorita mailu',
	'MASS_MESSAGE' => 'Vaša správa',
	'MASS_MESSAGE_EXPLAIN' => 'Prosím, uvedomte si, že vkladáte len čistý text. Akékoľvek značky budú pred odoslaním odstránené.',

	'NO_EMAIL_MESSAGE' => 'Musíte vložiť správu.',
	'NO_EMAIL_SUBJECT' => 'Musíte špecifikovať predmet pre vašu správy.',
));
?>
