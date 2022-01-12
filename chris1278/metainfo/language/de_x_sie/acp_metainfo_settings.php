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
	'METAINFO_CONFIG_DESC' 								=> 'Hier können die Einstellungen für die Erweiterung „%1$s“ (v%2$s) geändert werden.',
	'ACP_METAINFO_SETTINGS'								=> 'Einstellungen',
	'ACP_METAINFO_PAGE_TITLE'							=> 'Metainformationen und Favicon',
	'ACP_METAINFO_PAGE_TITLE_EXPLAIN'					=> ' Dies dient einer besseren Indexierung bei Suchmaschinen. Diese Informationen befinden sich normalerweise im HTML-Code im "head" Bereich.',
	'ACP_METAINFO_SET_TITLE'							=> 'Einstellungen',
	'CMI_META_DATA'										=> 'Meta-Tags',
	'CMI_TITLE-TAG'										=> '< Title > Tag Einstellung',
	'CMI_TITLE-TAG_EXPLAIN1'							=> 'Hier kann eingestellt werden was im < Title > Tag angezeigt werden soll. Jedoch ergeben sich die Eintragungen aus den Einstellungen "Name des Boards" und "Beschreibung des Boards". Dies wird in der Regel unter ',
	'CMI_TITLE-TAG_EXPLAIN2'							=> ' eingestellt. Das heißt, folgende Einstellungen sind genau die selben wie in den Board-Einstellungen.',
	'CMI_SITE_DESC'										=> 'Name des Boards',
	'CMI_SITE_DESC_EXPLAIN'								=> 'Hier kann der Name des Forums eingetragen werden. Dieselbe Einstellung findet sich unter:',
	'CMI_SITE_NAME'										=> 'Beschreibung des Boards',
	'CMI_SITE_NAME_EXPLAIN'								=> 'Hier kann die Seitenbezeichnung des Forums eingetragen werden. Dieselbe Einstellung findet sich unter:',
	'CMI_META_DESCRIPTION'								=> 'Description',
	'CMI_META_DESCRIPTION_EXPLAIN'						=> 'Hier kann für Suchmachienen eine Kurze und aussagekräftige Beschreibung eingefügt werden.<br><br>Die Beschreibung sollte nicht zu kurz aber auch nicht zu lang sein. Empfehlenswert sind so ca. 150-160 Zeichen.<br><br><a href="https://de.semrush.com/blog/meta-descriptions-onpage-seo/?kw=&cmp=DE_SRCH_DSA_Blog_Core_BU_DE&label=dsa_pagefeed&Network=g&Device=c&utm_content=515816186369&kwid=dsa-899496376930&cmpid=9879879731&agpid=97642603422&BU=Core&extid=&adpos=&gclid=CjwKCAjw64eJBhAGEiwABr9o2ECRzo781q0WTw4H_E9dTBsOsYoGlGYpvc5JZvd7bkvKs4jF3HGRaRoCyMQQAvD_BwE" target="_blank">>>Informationen bezüglich Meta-Description<<</a>',
	'MT_DESCRIPTION'									=> 'Hier die Description Beschreibung einfügen',
	'CMI_META_KEYWORDS'									=> 'Keywords',
	'CMI_META_KEYWORDS_EXPLAIN'							=> 'Hier können Schlüsselwörter eingefügt werden.<br><br><b>Beispiel</b> wort1, wort2, wort3, usw. Als trennung immer ein Komma nutzen.<br><br><a href="https://de.semrush.com/blog/was-sind-keywords/" target="_blank">>>Informationen bezüglich Keywords<<</a>',
	'MT_KEYWORDS'										=> 'Hier die Keywörter/Schlüsselwörter einfügen',
	'CMI_META_GOOGLE_SITE_VERIFICATION_ENABLE'			=> 'Google Website-Inhaberschaft ID aktivieren.',
	'CMI_META_GOOGLE_SITE_VERIFICATION_ENABLE_EXPLAIN'	=> 'Hier können Sie aktivieren wenn Sie die Google Webseiteninhaber  ID über META tag nutzen möchten.',
	'CMI_META_GOOGLE_SITE_VERIFICATION'					=> 'Google Website-Inhaberschaft',
	'CMI_META_GOOGLE_SITE_VERIFICATION_EXPLAIN'			=> 'Hier kann die Zeichenfolge zur identifizierung eingetragen werden.<br>Nähere informationen findet man dazu unter:<br><br><a href="https://support.google.com/webmasters/answer/9008080?hl=de" target="_blank">Bestätigung der Inhaberschaft für die Search Console auf google</a>',
	'MT_GOOGLE_SITE_VERIFICATION'						=> 'Hier die Google Inhaber ID einfügen',
	'OG_DATA'											=> 'Open Graph Tags',
	'CMI_META_OPEN_GRAPH_ENABLE'						=> 'Open Graph Meta Tags aktivieren',
	'CMI_META_OPEN_GRAPH_ENABLE_EXPLAIN'				=> 'Hier können die Open Graph Meta Tags aktiviert werden.<br><br> Lesen Sie hier auch nachfolgende Dokumentation: <a target="_blank" href="https://www.seo-trainee.de/glossar/open-graph-meta-tags/">>>Dokumentation OpenGraph Meta Tags<<</a>',
	'CMI_META_OG_URL'									=> 'Auswahl der URL Einstellung für Social-Media Tag',
	'CMI_META_OG_URL_EXPLAIN'							=> 'Hier könne Sie auswählen ob Sie eine einzelne Bestimmte URL <b><u>Fixiert</u></b> haben möchten <i><b>(Dann wird immer die URL zur Foren-Index benutzt)</b></i> die als Metatag in den Social-Media Tags angezeigt werden soll oder ob Sie das <b><u>Dynamisch</u></b> machen möchten dann wird wenn Sie ein Thema verlinken immer die direkte URL des Themas genommen.',
	'CMI_META_OG_URL_MAN'								=> 'Fixierte URL',
	'CMI_META_OG_URL_DYN'								=> 'Dynamische URL',
	'CMI_META_OG_DESCRIPTION'							=> 'Open Graph Meta Tag - Description',
	'CMI_META_OG_DESCRIPTION_EXPLAIN'					=> 'Hier kann eine kurze Beschreibung eingefügt werden die dann für Soziale Medien genutzt werden kann. Ähnlich wie die Meta-Description für Suchmachienen.<br><br>Weitere Informationen:<br><br><a href="https://de.ryte.com/magazine/open-graph-tags" target="_blank">>>Informationen bezüglich Open Graph Meta Tags-Description<<</a>',
	'OG_DESCRIPTION'									=> 'Hier die Description Beschreibung einfügen',
	'CMI_META_OG_LOCALE'								=> 'Seitensprache Open Graph Tag',
	'CMI_META_OG_LOCALE_EXPLAIN'						=> 'Hier kann die Seitensprache im OpenGraph Tag angegeben werden. Bitte unbedingt die Korrekte Schreibweise beachten.<br>Die ersten beiden Buchstaben klein geschrieben und die anderen beiden Gross geschrieben. Und mit dem Unterstrich verbinden.<br><br> Beispiel: Für Deutschland <b>de_DE</b> oder für England <b>en_GB</b><br><br><a href="https://www.localeplanet.com/icu/" target="_blank"><b>>>>Hier eine Liste mit den Kennungen die man benutzen kann<<<</b></a> ',
	'OG_LOCALE'											=> 'de_DE',
	'FAVIC'												=> 'Favicons',
	'FA_APPID_ENABLE'									=> 'Nutzung der Facebook APP-ID nutzen',
	'FA_APPID_ENABLE_EXPLAIN'							=> 'Dies können Sie aktivieren wenn Sie eine Facebook APP-ID haben und diese angeben möchten.<br><br><b class="acp-warn">Achtung: </b> Dies benutzen normalerweise nur App Entwickler die auch mit Facebook arbeiten.',
	'FA_APPID'											=> 'Facebook APP-ID',
	'FA_APPID_EXPLAIN'									=> 'Hier können Sie ihre Facebook APP-ID eingeben.',
	'FAVICON_ENABLE'									=> 'Favicons aktivieren',
	'FAVICON_ENABLE_EXPLAIN'							=> 'Hier kann man auswählen ob man Favicons nutzen möchte oder nicht.<br><br><b class="acp-warn">Hinweis:</b><br><br>Diese Aktivierung dient dazu, die Favicons zu verwenden, die sich im Favicon-Verzeichnis der Erweiterungen befinden oder nicht. Wenn ein Favicon.ico im Hauptverzeichnis des Forums gespeichert ist, ist dies nicht betroffen. Die in der Erweiterung enthaltenen Favicons werden mit der Funktion in den Style geladen.',
]);
