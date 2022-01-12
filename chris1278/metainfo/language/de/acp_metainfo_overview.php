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
	'METAINFO_OVERVIEW_DESC' 							=> 'Hier siehst du eine Übersicht der aktuellen Einstellungen Erweiterung „%1$s“ (v%2$s). Diese können in den Einstellungen geändert werden.',
	'METAINFO_MSG_LANGUAGEPACK_OUTDATED'				=> 'Hinweis: Das Sprachpaket dieser Erweiterung ist nicht mehr aktuell.',
	'ACP_METAINFO_PAGE_TITLE'							=> 'Metainformationen und Favicon',
	'ACP_CMI_OVERVIEW'									=> 'Übersicht',
	'OV_INFO_BOX'										=> 'Info-Box',
	'OV_INFO_BOX_EXPLAIN'								=> 'Hier siehst du alle Werte die in der Datei overall_header.html geladen werden. Einige werte sind fest fixiert und können nicht direkt über die Einstellungen gesteuert werden. Die Einstellungen die man über die Steuerung derb Erweiterung ändern kann sin in der Farbe <b class="meta-mark">Orange</b> dargestellt. Für Änderungen der anderen Werte müssen diese direkt in der Entsprechenden Datei mit einem Editor geändert werden.',
	'OV_META'											=> 'META tag',
	'OV_VALUE'											=> 'Wert',
	'VARIABLE_PLACEHOLDER'								=> 'Wenn bei der Entsprechenden Option eine Eingabe gemacht wird, erscheint hier an der Stelle der eingestellte Wert.',
	'OV_TITLE'											=> '< title ><b class="acp-warn">WERT</b>< /title > ',
	'OV_MT_DESCRIPTION'									=> '< meta name="description" content="<b class="acp-warn">WERT</b>" />',
	'OV_MT_KEYWORDS'									=> '< meta name="keywords" content="<b class="acp-warn">WERT</b>" />',
	'OV_GOOGLE_SV'										=> '< meta name="google-site-verification" content="<b class="acp-warn">WERT</b>" />',
	'OV_OPEN_GRAPH_NOT_ACTIVE'							=> 'Wenn du in den Einstellungen die Open Graph Tags aktivierst, siehst du hier die Einträge welche in der overall_header.html stehen.',
	'OV_OPEN_GRAPH'										=> 'Open Graph Tag',
	'OV_OG_URL'											=> '< meta property="og:url" content="<b class="acp-warn">WERT</b>" />',
	'OV_OG_DES'											=> '< meta property="og:description" content="<b class="acp-warn">WERT</b>" />',
	'OV_OG_LOC'											=> '< meta property="og:locale" content="<b class="acp-warn">WERT</b>" />',
	'OV_OG_FAA'											=> '< meta property="fb:app_id" content="<b class="acp-warn">WERT</b>"/>',
	'OV_OG_WEB'											=> '< meta property="og:type" content="<b class="acp-warn">WERT</b>" />',
	'OV_OG_WEB_VALUE'									=> '<b class="acp-green">website</b>',
	'OV_OG_TIT'											=> '< meta property="og:title" content="<b class="acp-warn">WERT</b>" />',
	'OV_OG_SIT'											=> '< meta property="og:site_name" content="<b class="acp-warn">WERT</b>" />',
	'OV_OG_IMG'											=> '< meta property="og:image" content="<b class="acp-warn">WERT</b>" />',
	'OV_FAV'											=> 'Favicons',
	'OV_FAV_ENABLE'										=> 'Favicon Vorschau Box aktivieren',
	'OV_FAV_ENABLE_EXPLAIN'								=> 'Hier kannst du die Favicon Vorschau Box aktivieren und die Favicons als Bilder in der Übersicht anzeigen lasssen oder nicht.',
	'FAVICON_NOT_ACTIVE'								=> 'Wenn du in den Einstellungen die Favicons aktivierst, siehst du hier die Einträge welche in der overall_header.html stehen.',
	'OV_FA_MA'											=> '< link rel="manifest" href="<b class="acp-warn">WERT</b>">',
	'OV_FA_COL'											=> '< meta name="msapplication-TileColor" content="<b class="acp-warn">WERT</b>"> ',
	'OV_FA_MS'											=> '< meta name="msapplication-config" content="<b class="acp-warn">WERT</b>"> ',
	'OV_FA_TC'											=> '< meta name="theme-color" content="<b class="acp-warn">WERT</b>">',
	'OV_FA_SAF'											=> '< link rel="mask-icon" href="<b class="acp-warn">WERT</b>" color="#5bbad5">',
	'OV_FA_FAV'											=> '< link rel="shortcut icon" href="<b class="acp-warn">WERT</b>">',
	'OV_FA_APPLE'										=> '< link rel="apple-touch-icon" sizes="180x180" href="<b class="acp-warn">WERT</b>">',
	'OV_FA_16_16'										=> '< link rel="icon" type="image/png" sizes="16x16" href="<b class="acp-warn">WERT</b>">',
	'OV_FA_32_32'										=> '< link rel="icon" type="image/png" sizes="32x32" href="<b class="acp-warn">WERT</b>"> ',
	'OV_FA_MSA'											=> '< meta name="msapplication-TileImage" content="<b class="acp-warn">WERT</b>">',
	'OV_GOOGLE_SITE_VERIFICATION_INSTRUCTION'			=> 'Anleitung für die Erstellung der Google ID anzeigen',
	'OV_GOOGLE_SITE_VERIFICATION_INSTRUCTION_EXPLAIN'	=> 'Hier kannst du dir eine Anleitung anzeigen lassen wie man eine Google ID erstellen kann für die Bestätigung der Webseiten Inhaberschaft.',
	'OV_FAV_THUMBNAIL'									=> 'Favicon Vorschau Box',
	'FAV_THUMBNAIL_NOT_ACTIVE'							=> 'Wenn du die Favicon Vorschau Box aktivierst, siehst du hier eine Vorschau der verwendeten Icons.',
	'OV_THUMBNAIL'										=> 'Vorschaubild ',
	'OV_TH_FB_OG'										=> '(facebook-og-image.jpg)',
	'OV_OG_SVG'											=> ' (safari-pinned-tab.svg)',
	'OV_OG_ICO'											=> ' (favicon.ico)',
	'OV_OG_APPLE'										=> ' (apple-touch-icon.png)',
	'OV_OG_16_16'										=> ' (favicon-16x16.png)',
	'OV_OG_32_32'										=> ' (favicon-32x32.png)',
	'OV_OG_MSA'											=> ' (ms-icon-144x144.png)',
	'FA_APPID_INFO'										=> 'Hier steht nach eingabe die Facebook APP-ID.',
	'FAVIC'												=> 'Favicons',
	'FAVIC_INFO'										=> 'Favicon - Info',
	'FAVICON_INFORMATION'								=> 'Die Icons befinden sich im Verzeichnis <b>/ext/chris1278/metainfo/favicon</b>. Diese Können bearbeitet werden und auch ausgetauscht.<br><br><b><i><u>Wichtig:</u></i></b> Die Namen der Dateien sowie Endungen müssen erhalten bleiben. Sonst werden die Icons nicht geladen! ',
]);
