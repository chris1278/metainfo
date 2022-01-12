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
	'METAINFO_CONFIG_DESC' 								=> 'The settings for the „%1$s“ (v%2$s)  extension can be changed here.',
	'ACP_METAINFO_SETTINGS'								=> 'Settings',
	'ACP_METAINFO_PAGE_TITLE'							=> 'Metainformation and Favicon',
	'ACP_METAINFO_PAGE_TITLE_EXPLAIN'					=> ' This is used for better indexing in search engines. This information can be found in the HTML code in the "head" area.',
	'ACP_METAINFO_SET_TITLE'							=> 'Settings',
	'CMI_META_DATA'										=> 'Meta-Tags',
	'CMI_TITLE-TAG'										=> '< Title > Tag Settings',
	'CMI_TITLE-TAG_EXPLAIN1'							=> 'Here you can set what should be displayed in the < Title > tag. However, the entries result from the settings "Name of the board" and "Description of the board". This is usually set under ',
	'CMI_TITLE-TAG_EXPLAIN2'							=> '. That means, the following settings are exactly the same as in the board settings.',
	'CMI_SITE_DESC'										=> 'Site name',
	'CMI_SITE_DESC_EXPLAIN'								=> 'The name of the forum can be entered here. The same setting can be found under:',
	'CMI_SITE_NAME'										=> 'Site description',
	'CMI_SITE_NAME_EXPLAIN'								=> 'The page name of the forum can be entered here. The same setting can be found under:',
	'CMI_META_DESCRIPTION'								=> 'Description',
	'CMI_META_DESCRIPTION_EXPLAIN'						=> 'A short and meaningful description can be inserted here for search engines.<br><br>The description should not be too short but also not too long. We recommend around 150-160 characters.<br><br><a href="https://www.semrush.com/blog/on-page-seo-basics-meta-descriptions/" target="_blank">>>Information regarding meta description<<</a>',
	'MT_DESCRIPTION'									=> 'Insert the description here',
	'CMI_META_KEYWORDS'									=> 'Keywords',
	'CMI_META_KEYWORDS_EXPLAIN'							=> 'Keywords can be inserted here.<br><br><b>Example</b> word1, word2, word3, etc. Always use a comma as a separation.<br><br><a href="https://www.semrush.com/blog/what-are-keywords-simple-keyword-definition/" target="_blank">>>Information related to keywords<<</a>',
	'MT_KEYWORDS'										=> 'Insert the keywords here',
	'CMI_META_GOOGLE_SITE_VERIFICATION_ENABLE'			=> 'Google Website-Inhaberschaft ID activate.',
	'CMI_META_GOOGLE_SITE_VERIFICATION_ENABLE_EXPLAIN'	=> 'Here you can activate if you want to use the Google website owner ID via META tag.',
	'CMI_META_GOOGLE_SITE_VERIFICATION'					=> 'Google website ownership',
	'CMI_META_GOOGLE_SITE_VERIFICATION_EXPLAIN'			=> 'The character string for identification can be entered here.<br>More information can be found at:<br><br><a href="https://support.google.com/webmasters/answer/9008080?hl=en" target="_blank">Confirmation of ownership for the Search Console on google</a>',
	'MT_GOOGLE_SITE_VERIFICATION'						=> 'Insert the Google owner ID here',
	'OG_DATA'											=> 'Open Graph Tags',
	'CMI_META_OPEN_GRAPH_ENABLE'						=> 'Enable Open Graph Meta Tags',
	'CMI_META_OPEN_GRAPH_ENABLE_EXPLAIN'				=> 'The Open Graph Meta Tags can be activated here.<br><br> You can also read the following documentation here: <a target="_blank" href="https://ahrefs.com/blog/open-graph-meta-tags/">>>Documentation OpenGraph Meta Tags<<</a>',
	'CMI_META_OG_URL'									=> 'Selection of the URL setting for social media tag',
	'CMI_META_OG_URL_EXPLAIN'							=> 'Here you can choose whether you want to have a single specific URL <b><u>fixed</u></b> <i><b>(then the URL for the forum index is always used)</b></i> which should be displayed as a meta tag in the social media tags or whether you want to make it <b><u>dynamic</u></b> when you have a topic always link the direct url of the topic taken.',
	'CMI_META_OG_URL_MAN'								=> 'Fixed URL',
	'CMI_META_OG_URL_DYN'								=> 'Dynamic URL',
	'CMI_META_OG_DESCRIPTION'							=> 'Open Graph Meta Tag - Description',
	'CMI_META_OG_DESCRIPTION_EXPLAIN'					=> 'A short description can be inserted here, which can then be used for social media. Similar to the meta description for search engines.<br><br>Additional Information:<br><br><a href="https://ogp.me/" target="_blank">>>Information regarding Open Graph Meta Tags Description<<</a>',
	'OG_DESCRIPTION'									=> 'Insert the description here',
	'CMI_META_OG_LOCALE'								=> 'Side language Open Graph Tag',
	'CMI_META_OG_LOCALE_EXPLAIN'						=> 'The page language in the Open Graph Tag can be specified here. Please be sure to observe the correct spelling.<br>The first two letters are lowercase and the other two are uppercase. And be sure to combine this with the underscore.<br><br> Example: For Germany use <b>de_DE</b> or for England use <b>en_GB</b><br><br><a href="https://www.localeplanet.com/icu/" target="_blank"><b>>>>Here is a list of the IDs that can be used<<<</b></a> ',
	'OG_LOCALE'											=> 'en_GB',
	'FAVIC'												=> 'Favicons',
	'FA_APPID_ENABLE'									=> 'Use the Facebook APP-ID',
	'FA_APPID_ENABLE_EXPLAIN'							=> 'You can activate this if you have a Facebook APP ID and want to enter it. <br><br><b class="acp-warn">Attention: </b> This is usually only used by app developers who also work with Facebook.',
	'FA_APPID'											=> 'Facebook APP-ID',
	'FA_APPID_EXPLAIN'									=> 'Here you can enter your Facebook APP ID.',
	'FAVICON_ENABLE'									=> 'Activate favicons',
	'FAVICON_ENABLE_EXPLAIN'							=> 'Here you can choose whether you want to use favicons or not.<br><br><b class="acp-warn">Note:</b><br><br>This activation serves to use the favicons that are in the favicon directory of the extension or not. If a Favicon.ico is stored in the main forum directory, this is not affected. The favicons that are in the extension are loaded into the style using the <meta> function.',
]);
