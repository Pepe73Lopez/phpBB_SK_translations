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

$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Tu môžete konfigurovať základné nastavenia pre prílohy a prislúchajúcich špeciánych kategórií.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'	=> 'Tu môžete pridať, zmazať, upraviť alebo zablokovať vaše skupiny súborových prípon. Ďalšie možnosti zahŕňajú priradenie osobitnej kategórie, meniť mechanizmus sťahovania a definíciu ikony, ktorá sa zobrazí pred prílohou.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'	=> 'Tu môžete spravovať povolené prípony súborov. Pre aktiváciu prípon, použite panel manažmentu skupín súborových prípon. Dôrazne odporúčame nepoužívať prípony súborov predstavujúcich skripty (ako <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, a pod.).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Tu nájdete súbory, ktoré neboli priradené k žiadnemu príspevku. Takýto prípad nastane najmä vtedy, ak užívatelia vložia súbor ako prílohu, ale neodošlú príspevok. Tu môžete tieto súbory zmazať alebo ich priradiť k existujúcim príspevkom. Priradenie k existujúcemu príspevku vyžaduje poznať platné ID príspevku. Toto ID musíte nájsť a priradiť sami. Týmto bude už nahratý súbor priradený k príspevku, ktorý ste zadali.',
	'ADD_EXTENSION'				=> 'Pridať príponu',
	'ADD_EXTENSION_GROUP'			=> 'Pridať skupinu prípon',
	'ADMIN_UPLOAD_ERROR'			=> 'Zoznam chýb, ktoré vznikli počas pokusu o priloženie súboru: “%s”.',
	'ALLOWED_FORUMS'				=> 'Povolené fóra',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Možnosť odoslať priradené súborové prípony v označených (alebo všetkých) fórach.',
	'ALLOWED_IN_PM_POST'			=> 'Povolené',
	'ALLOW_ATTACHMENTS'				=> 'Povoliť prílohy',
	'ALLOW_ALL_FORUMS'				=> 'Povoliť všetky fóra',
	'ALLOW_IN_PM'					=> 'Povolené v súkromnej pošte',
	'ALLOW_PM_ATTACHMENTS'			=> 'Povoliť prílohy v správach v súkromnej pošte',
	'ALLOW_SELECTED_FORUMS'			=> 'Len nižšie označené fóra',
	'ASSIGNED_EXTENSIONS'			=> 'Priradené prípony',
	'ASSIGNED_GROUP'				=> 'Priradené skupiny prípon',
	'ATTACH_EXTENSIONS_URL'			=> 'Prípony',
	'ATTACH_EXT_GROUPS_URL'			=> 'Skupiny prípon',
	'ATTACH_ID'					=> 'ID',
	'ATTACH_MAX_FILESIZE'			=> 'Maximálna veľosť súboru',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Maximálna veľkosť každého zo súborov. Ak je zadaná hodnota 0, veľkosť nahrávaného súboru bude limitovaná konfiguráciou PHP.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maximálna veľosť súboru v súkromnej správe',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maximálna veľkosť každého zo súborov (0 = neobmedzené), pripojených k súkromnej správe.',
	'ATTACH_ORPHAN_URL'				=> 'Nepriradené prílohy',
	'ATTACH_POST_ID'				=> 'ID príspevku',
	'ATTACH_POST_TYPE'				=> 'Typ príspevku',
	'ATTACH_QUOTA'					=> 'Celkový priestor pre príspevky',
	'ATTACH_QUOTA_EXPLAIN'			=> 'Maximálny dostupný priestor pre všetky prílohy pre celé fórum (0 = neobmedzené).',
	'ATTACH_TO_POST'				=> 'Priložiť k príspevku prílohu',

	'CAT_FLASH_FILES'			=> 'Súbory Flash',
	'CAT_IMAGES'				=> 'Obrázky',
	'CAT_QUICKTIME_FILES'		=> 'Súbory Quicktime',
	'CAT_RM_FILES'				=> 'Súbory RealMedia',
	'CAT_WM_FILES'				=> 'Súbory Windows Media',
	'CHECK_CONTENT'			=> 'Skontrolovať priložené súbory',
	'CHECK_CONTENT_EXPLAIN'		=> 'Niektoré prehliadače umožňujú priložiť nesprávny mimetyp nahrávaného súboru. Táto možnosť zabezpečí, že takéto súbory budú s najväčšou pravdepodobnosťou odmietnuté.',
	'CREATE_GROUP'				=> 'Vytvoriť novú skupinu',
	'CREATE_THUMBNAIL'			=> 'Vytvoriť náhľad',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Vytvoriť náhľad vo všetkých možných situáciách.',

	'DEFINE_ALLOWED_IPS'			=> 'Definovať povolené IP/hostiteľov',
	'DEFINE_DISALLOWED_IPS'			=> 'Definovať zakázané IP/hostiteľov',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'To specify several different IPs or hostnames enter each on a new line. To specify a range of IP addresses separate the start and end with a hyphen (-), to specify a wildcard use “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'You can remove (or un-exclude) multiple IP addresses in one go using the appropriate combination of mouse and keyboard for your computer and browser. Excluded IPs have a blue background.',
	'DISPLAY_INLINED'				=> 'Display images inline',
	'DISPLAY_INLINED_EXPLAIN'		=> 'If set to No image attachments will show as a link.',
	'DISPLAY_ORDER'					=> 'Attachment display order',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Display attachments ordered by time.',

	'EDIT_EXTENSION_GROUP'			=> 'Edit extension group',
	'EXCLUDE_ENTERED_IP'			=> 'Enable this to exclude the entered IP/hostname.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Exclude IP from allowed IPs/hostnames',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Exclude IP from disallowed IPs/hostnames',
	'EXTENSIONS_UPDATED'			=> 'Extensions successfully updated.',
	'EXTENSION_EXIST'				=> 'The extension %s already exists.',
	'EXTENSION_GROUP'				=> 'Extension group',
	'EXTENSION_GROUPS'				=> 'Extension groups',
	'EXTENSION_GROUP_DELETED'		=> 'Extension group successfully deleted.',
	'EXTENSION_GROUP_EXIST'			=> 'The extension group %s already exists.',

	'EXT_GROUP_ARCHIVES'			=> 'Archives',
	'EXT_GROUP_DOCUMENTS'			=> 'Documents',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Downloadable Files',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash Files',
	'EXT_GROUP_IMAGES'				=> 'Images',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Plain Text',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FILES_GONE'			=> 'Some of the attachments you selected for deletion do not exist. They may have been already deleted. Attachments that did exist were deleted.',
	'FILES_STATS_WRONG'		=> 'Your file statistics are likely inaccurate and need to be resynchronised. Actual values: number of attachments = %1$d, total size of attachments = %2$s.<br />Click %3$shere%4$s to resynchronise them.',

	'GO_TO_EXTENSIONS'		=> 'Go to extension management screen',
	'GROUP_NAME'			=> 'Group name',

	'IMAGE_LINK_SIZE'			=> 'Image link dimensions',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Display image attachment as an inline text link if image is larger than this. To disable this behaviour, set the values to 0px by 0px.',
	'IMAGICK_PATH'				=> 'Imagemagick path',
	'IMAGICK_PATH_EXPLAIN'		=> 'Full path to the imagemagick convert application, e.g. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Maximum number of attachments per post',
	'MAX_ATTACHMENTS_PM'			=> 'Maximum number of attachments per private message',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maximum file size',
	'MAX_IMAGE_SIZE'				=> 'Maximum image dimensions',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Maximum size of image attachments. Set both values to 0px by 0px to disable dimension checking.',
	'MAX_THUMB_WIDTH'				=> 'Maximum thumbnail width in pixel',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'A generated thumbnail will not exceed the width set here.',
	'MIN_THUMB_FILESIZE'			=> 'Minimum thumbnail file size',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Do not create a thumbnail for images smaller than this.',
	'MODE_INLINE'					=> 'Inline',
	'MODE_PHYSICAL'					=> 'Physical',

	'NOT_ALLOWED_IN_PM'			=> 'Only allowed in posts',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Not allowed',
	'NOT_ASSIGNED'				=> 'Not assigned',
	'NO_ATTACHMENTS'			=> 'No attachments found for this period.',
	'NO_EXT_GROUP'				=> 'None',
	'NO_EXT_GROUP_NAME'			=> 'No group name entered',
	'NO_EXT_GROUP_SPECIFIED'	=> 'No extension group specified.',
	'NO_FILE_CAT'				=> 'None',
	'NO_IMAGE'				=> 'No image',
	'NO_THUMBNAIL_SUPPORT'		=> 'Thumbnail support has been disabled. For proper functionality either the GD extension need to be available or imagemagick being installed. Both were not found.',
	'NO_UPLOAD_DIR'			=> 'The upload directory you specified does not exist.',
	'NO_WRITE_UPLOAD'			=> 'The upload directory you specified cannot be written to. Please alter the permissions to allow the webserver to write to it.',

	'ONLY_ALLOWED_IN_PM'	=> 'Only allowed in private messages',
	'ORDER_ALLOW_DENY'		=> 'Allow',
	'ORDER_DENY_ALLOW'		=> 'Deny',

	'REMOVE_ALLOWED_IPS'			=> 'Remove or un-exclude <em>allowed</em> IPs/hostnames',
	'REMOVE_DISALLOWED_IPS'			=> 'Remove or un-exclude <em>disallowed</em> IPs/hostnames',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Are you sure you wish to resynchronise file statistics?',

	'SEARCH_IMAGICK'				=> 'Search for Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Allow/Deny list',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Change the default behaviour when secure downloads are enabled of the Allow/Deny list to that of a <strong>whitelist</strong> (Allow) or a <strong>blacklist</strong> (Deny).',
	'SECURE_DOWNLOADS'				=> 'Enable secure downloads',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'With this option enabled, downloads are limited to IP’s/hostnames you define.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Secure Downloads are not enabled. The settings below will be applied after enabling secure downloads.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'The IP list has been updated successfully.',
	'SECURE_EMPTY_REFERRER'			=> 'Allow empty referrer',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Secure downloads are based on referrers. Do you want to allow downloads for those omitting the referrer?',
	'SETTINGS_CAT_IMAGES'			=> 'Image category settings',
	'SPECIAL_CATEGORY'				=> 'Special category',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Special categories differ between the way presented within posts.',
	'SUCCESSFULLY_UPLOADED'			=> 'Successfully uploaded.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Extension group successfully added.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Extension group successfully updated.',

	'UPLOADING_FILES'				=> 'Uploading files',
	'UPLOADING_FILE_TO'				=> 'Uploading file “%1$s” to post number %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'You do not have the permission to upload files to forum “%s”.',
	'UPLOAD_DIR'					=> 'Upload directory',
	'UPLOAD_DIR_EXPLAIN'			=> 'Storage path for attachments. Please note that if you change this directory while already having uploaded attachments you need to manually copy the files to their new location.',
	'UPLOAD_ICON'					=> 'Upload icon',
	'UPLOAD_NOT_DIR'				=> 'The upload location you specified does not appear to be a directory.',
));
