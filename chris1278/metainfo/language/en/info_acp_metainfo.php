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
	// Information For Versionscheck Metadaten
	'METAINFO_LANG_DESC'							=>	'English',
	'METAINFO_LANG_EXT_VER' 						=>	'1.0.0',
	'METAINFO_LANG_AUTHOR' 							=>	'Chris1278',
	'METAINFO_CONFIG_DESC' 							=>	'The settings for the „%1$s“ (v%2$s)  extension can be changed here.',
	//Variablen for ACP
	'ACP_METAINFO'									=>	'Metainformation and Favicon',
	'ACP_METAINFO_SETTINGS'							=>	'Settings',
	'ACP_METAINFO_PAGE_TITLE'						=>	'Metainformationen and Favicon',
	'ACP_METAINFO_PAGE_TITLE_EXPLAIN'				=>	'This is used for better indexing in search engines. This information can be found in the HTML code in the "head" area.',
	'ACP_METAINFO_SET_TITLE'						=>	'Settings',
	'MT_CHANGE'										=>	'Meta-Title or PHPBB Sitename',
	'MT_CHANGE_EXPLAIN'								=>	'Here you can choose whether the name is entered in the title tag in the head area from the extension or whether the "Name of the Boaard" (if available and entered) from the board settings should be used.',
	'BOARD_NAME'									=>	'PHPBB Site name',
	'BOARD_NAME_EXPLAIN'							=>	'This shows what is currently assigned to a Board name (Site name) under the board settings.<br><br><b>This setting can be adjusted under General / Board Settings under "Site name".</b>',
	'META_TITLE'									=>	'Meta-Title',
	'META_TITLE_EXPLAIN'							=>	'Here you can enter what should be displayed in the title tag in the metainofs for the search engines. Usually the name of the page or something similar. This is then displayed if you select Meta-title.<br><br><a href="https://de.semrush.com/blog/title-tags-anleitung/" target="_blank">>>Information regarding title tag<<</a>',
	'META_DESCRIPTION'								=>	'Description',
	'META_DESCRIPTION_EXPLAIN'						=>	'A short and meaningful description can be inserted here for search engines.<br><br>The description should not be too short but also not too long. We recommend around 150-160 characters.<br><br><a href="https://de.semrush.com/blog/meta-descriptions-onpage-seo/?kw=&cmp=DE_SRCH_DSA_Blog_Core_BU_DE&label=dsa_pagefeed&Network=g&Device=c&utm_content=515816186369&kwid=dsa-899496376930&cmpid=9879879731&agpid=97642603422&BU=Core&extid=&adpos=&gclid=CjwKCAjw64eJBhAGEiwABr9o2ECRzo781q0WTw4H_E9dTBsOsYoGlGYpvc5JZvd7bkvKs4jF3HGRaRoCyMQQAvD_BwE" target="_blank">>>Information regarding meta description<<</a>',
	'META_KEYWORDS'									=>	'Keywords',
	'META_KEYWORDS_EXPLAIN'							=>	'Keywords can be inserted here.<br><br><b>Example</b> word1, word2, word3, etc. Always use a comma as a separation.<br><br><a href="https://de.semrush.com/blog/was-sind-keywords/" target="_blank">>>Information related to keywords<<</a>',
	'META_GOOGLE_SITE_VERIFICATION'					=>	'Google website ownership',
	'META_GOOGLE_SITE_VERIFICATION_EXPLAIN'			=>	'The character string for identification can be entered here.<br>More information can be found at:<br><br><a href="https://support.google.com/webmasters/answer/9008080?hl=de" target="_blank">Confirmation of ownership for the Search Console on google</a>.',
	'META_OPEN_GRAPH_ENABLE'						=>	'Enable Open Graph Meta Tags',
	'META_OPEN_GRAPH_ENABLE_EXPLAIN'				=>	'The Open Graph Meta Tags can be activated here.<br><br> You can also read the following documentation here: <a target="_blank" href="https://www.seo-trainee.de/glossar/open-graph-meta-tags/">>>Domumentation OpenGraph Meta Tags<<</a>',
	'META_OG_DESCRIPTION'							=>	'Open Graph Meta Tag - Description',
	'META_OG_DESCRIPTION_EXPLAIN'					=>	'A short description can be inserted here, which can then be used for social media. Similar to the meta description for search engines.<br><br>Additional Information:<br><br><a href="https://de.ryte.com/magazine/open-graph-tags" target="_blank">>>Information regarding Open Graph Meta Tags Description<<</a>',
	'META_OG_LOCALE'								=>	'Side language Open Graph Tag',
	'META_OG_LOCALE_EXPLAIN'						=>	'The page language in the Open Graph Tag can be specified here. Please be sure to observe the correct spelling.<br>The first two letters are lowercase and the other two are uppercase. And be sure to combine this with the underscore.<br><br> Example: For Germany use <b>de_DE</b> or for England use <b>en_GB</b><br><br><a href="https://www.localeplanet.com/icu/" target="_blank"><b>>>>Here is a list of the IDs that can be used<<<</b></a> ',
	'FAVICON_ENABLE'								=>	'Activate favicons',
	'FAVICON_ENABLE_EXPLAIN'						=>	'Here you can choose whether you want to use favicons or not.',
	'FAVICON_INFORMATION'							=>	'The icons are located in the directory <b>/ext/chris1278/metainfo/favicon</b>.These can be edited and also exchanged.<br><br><b><i><u>Important:</u></i></b> The names of the files and the extensions must be retained. Otherwise the icons will not be loaded! ',
	'METAINFO_UPDATE'								=>	'The settings for the meta information and favicons have been saved successfully!',
]);
