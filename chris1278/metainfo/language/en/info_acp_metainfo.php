<?php
/**
*
* @package phpBB Extension - Metainfo by Chris1278
* @copyright (c) 2021 (christian-esch.de.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	// language pack author
	'METAINFO_LANG_DESC'									=> 'English',
	'METAINFO_LANG_EXT_VER' 								=> '1.0.3',
	'METAINFO_LANG_AUTHOR' 									=> 'Chris1278',

	// navigation
	'ACP_METAINFO'											=> 'Metainformation and Favicon',
	'ACP_METAINFO_OVERVIEW'									=> 'Overview',
	'ACP_METAINFO_SETTINGS'									=> 'Settings',
	'METAINFO_UPDATE'										=> 'The settings for the meta information and favicons have been saved successfully!',
]);
