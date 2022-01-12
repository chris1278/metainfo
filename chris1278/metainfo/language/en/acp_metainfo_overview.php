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
	'METAINFO_OVERVIEW_DESC' 							=> 'Here you can see an overview of the current settings of the „%1$s“ (v%2$s). These can be changed in the settings.',
	'METAINFO_MSG_LANGUAGEPACK_OUTDATED'				=> 'Note: The language pack for this extension is no longer up-to-date',
	'ACP_METAINFO_PAGE_TITLE'							=> 'Metainformation and Favicon',
	'ACP_CMI_OVERVIEW'									=> 'Overview',
	'OV_INFO_BOX'										=> 'Info-Box',
	'OV_INFO_BOX_EXPLAIN'								=> 'Here you can see all values that are loaded in the overall_header.html file. Some values are fixed and cannot be controlled directly via the settings. The settings that can be changed using the control of the extension are shown in <b class="meta-mark">Orange</b>. To change the other values, these must be changed directly in the corresponding file with an editor.',
	'OV_META'											=> 'META tag',
	'OV_VALUE'											=> 'Value',
	'VARIABLE_PLACEHOLDER'								=> 'If an entry is made for the corresponding option, the set value appears here.',
	'OV_TITLE'											=> '< title ><b class="acp-warn">Value</b>< /title > ',
	'OV_MT_DESCRIPTION'									=> '< meta name="description" content="<b class="acp-warn">Value</b>" />',
	'OV_MT_KEYWORDS'									=> '< meta name="keywords" content="<b class="acp-warn">Value</b>" />',
	'OV_GOOGLE_SV'										=> '< meta name="google-site-verification" content="<b class="acp-warn">Value</b>" />',
	'OV_OPEN_GRAPH_NOT_ACTIVE'							=> 'If you activate the Open Graph tags in the settings, you will see the entries here which are in the overall_header.html.',
	'OV_OPEN_GRAPH'										=> 'Open Graph Tag',
	'OV_OG_URL'											=> '< meta property="og:url" content="<b class="acp-warn">Value</b>" />',
	'OV_OG_DES'											=> '< meta property="og:description" content="<b class="acp-warn">Value</b>" />',
	'OV_OG_LOC'											=> '< meta property="og:locale" content="<b class="acp-warn">Value</b>" />',
	'OV_OG_FAA'											=> '< meta property="fb:app_id" content="<b class="acp-warn">Value</b>"/>',
	'OV_OG_WEB'											=> '< meta property="og:type" content="<b class="acp-warn">Value</b>" />',
	'OV_OG_WEB_VALUE'									=> '<b class="acp-green">website</b>',
	'OV_OG_TIT'											=> '< meta property="og:title" content="<b class="acp-warn">Value</b>" />',
	'OV_OG_SIT'											=> '< meta property="og:site_name" content="<b class="acp-warn">Value</b>" />',
	'OV_OG_IMG'											=> '< meta property="og:image" content="<b class="acp-warn">Value</b>" />',
	'OV_FAV'											=> 'Favicons',
	'OV_FAV_ENABLE'										=> 'Activate the favicon preview box',
	'OV_FAV_ENABLE_EXPLAIN'								=> 'Here you can activate the favicon preview box and display the favicons as images in the overview or not.',
	'FAVICON_NOT_ACTIVE'								=> 'If you activate the favicons in the settings, you will see the entries here which are in the overall_header.html.',
	'OV_FA_MA'											=> '< link rel="manifest" href="<b class="acp-warn">Value</b>">',
	'OV_FA_COL'											=> '< meta name="msapplication-TileColor" content="<b class="acp-warn">Value</b>"> ',
	'OV_FA_MS'											=> '< meta name="msapplication-config" content="<b class="acp-warn">Value</b>"> ',
	'OV_FA_TC'											=> '< meta name="theme-color" content="<b class="acp-warn">Value</b>">',
	'OV_FA_SAF'											=> '< link rel="mask-icon" href="<b class="acp-warn">Value</b>" color="#5bbad5">',
	'OV_FA_FAV'											=> '< link rel="shortcut icon" href="<b class="acp-warn">Value</b>">',
	'OV_FA_APPLE'										=> '< link rel="apple-touch-icon" sizes="180x180" href="<b class="acp-warn">Value</b>">',
	'OV_FA_16_16'										=> '< link rel="icon" type="image/png" sizes="16x16" href="<b class="acp-warn">Value</b>">',
	'OV_FA_32_32'										=> '< link rel="icon" type="image/png" sizes="32x32" href="<b class="acp-warn">Value</b>"> ',
	'OV_FA_MSA'											=> '< meta name="msapplication-TileImage" content="<b class="acp-warn">Value</b>">',
	'OV_GOOGLE_SITE_VERIFICATION_INSTRUCTION'			=> 'View instructions for creating the Google ID',
	'OV_GOOGLE_SITE_VERIFICATION_INSTRUCTION_EXPLAIN'	=> 'Here you can find instructions on how to create a Google ID to confirm website ownership.',
	'OV_FAV_THUMBNAIL'									=> 'Favicon preview box',
	'FAV_THUMBNAIL_NOT_ACTIVE'							=> 'If you activate the favicon preview box, you will see a preview of the icons used.',
	'OV_THUMBNAIL'										=> 'Thumbnail ',
	'OV_TH_FB_OG'										=> '(facebook-og-image.jpg)',
	'OV_OG_SVG'											=> ' (safari-pinned-tab.svg)',
	'OV_OG_ICO'											=> ' (favicon.ico)',
	'OV_OG_APPLE'										=> ' (apple-touch-icon.png)',
	'OV_OG_16_16'										=> ' (favicon-16x16.png)',
	'OV_OG_32_32'										=> ' (favicon-32x32.png)',
	'OV_OG_MSA'											=> ' (ms-icon-144x144.png)',
	'FA_APPID_INFO'										=> 'The Facebook APP ID is shown here after entering it.',
	'FAVIC'												=> 'Favicons',
	'FAVIC_INFO'										=> 'Favicon - Info',
	'FAVICON_INFORMATION'								=> 'The icons are located in the directory <b>/ext/chris1278/metainfo/favicon</b>.These can be edited and also exchanged.<br><br><b><i><u>Important:</u></i></b> The names of the files and the extensions must be retained. Otherwise the icons will not be loaded! ',
]);
