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
	'METAINFO_LANG_DESC'							=>	'Deutsch (Sie)',
	'METAINFO_LANG_EXT_VER' 						=>	'1.0.0',
	'METAINFO_LANG_AUTHOR' 							=>	'Chris1278',
	'METAINFO_CONFIG_DESC' 							=>	'Hier können die Einstellungen für die Erweiterung „%1$s“ (v%2$s) geändert werden.',
	//Variablen for ACP
	'ACP_METAINFO'									=>	'Metainformation und Favicon',
	'ACP_METAINFO_SETTINGS'							=>	'Einstellungen',
	'ACP_METAINFO_PAGE_TITLE'						=>	'Metainformationen und Favicon',
	'ACP_METAINFO_PAGE_TITLE_EXPLAIN'				=>	'Dies dient einer besseren Indexierung bei Suchmachienen. Diese Informationen befinden sich HTML-Codemässig im "head" Bereich.',
	'ACP_METAINFO_SET_TITLE'						=>	'Einstellungen',
	'MT_CHANGE'										=>	'Meta-Title oder PHPBB Sitename',
	'MT_CHANGE_EXPLAIN'								=>	'Hier kann ausgewählt werden ob der Name im Title Tag im head Bereich aus der Extension eingegeben wird oder ob der (falls vorhanden und eingegebene) "Name des Boaards" aus den Boardeinstellungen verwendet werden soll.',
	'BOARD_NAME'									=>	'PHPBB Name des Boards',
	'BOARD_NAME_EXPLAIN'							=>	'Hier wird angezeigt was im Moment unter den Boardeinstellungen für ein Name vergeben ist.<br><br><b>Diese Einstellung kann man unter Allgemein/Board-Einstellungen bei "Name des Boards" anpassen.</b>',
	'META_TITLE'									=>	'Meta-Title',
	'META_TITLE_EXPLAIN'							=>	'Hier kann man eintragen was in dem title tag in den Metainofs für die Suchmachienen angezeigt werden soll. Normalerweise der Name der Seite oder ähnliches. Dies wird dann angezeigt sofern man Meta-title auswählt.<br><br><a href="https://de.semrush.com/blog/title-tags-anleitung/" target="_blank">>>Informationen bezüglich Title Tag<<</a>',
	'META_DESCRIPTION'								=>	'Description',
	'META_DESCRIPTION_EXPLAIN'						=>	'Hier kann für Suchmachienen eine Kurze und aussagekräftige Beschreibung eingefügt werden.<br><br>Die Beschreibung sollte nicht zu kurz aber auch nicht zu lang sein. Empfehlenswert sind so ca. 150-160 Zeichen.<br><br><a href="https://de.semrush.com/blog/meta-descriptions-onpage-seo/?kw=&cmp=DE_SRCH_DSA_Blog_Core_BU_DE&label=dsa_pagefeed&Network=g&Device=c&utm_content=515816186369&kwid=dsa-899496376930&cmpid=9879879731&agpid=97642603422&BU=Core&extid=&adpos=&gclid=CjwKCAjw64eJBhAGEiwABr9o2ECRzo781q0WTw4H_E9dTBsOsYoGlGYpvc5JZvd7bkvKs4jF3HGRaRoCyMQQAvD_BwE" target="_blank">>>Informationen bezüglich Meta-Description<<</a>',
	'META_KEYWORDS'									=>	'Keywords',
	'META_KEYWORDS_EXPLAIN'							=>	'Hier können Schlüsselwörter eingefügt werden.<br><br><b>Beispiel</b> wort1, wort2, wort3, usw. Als trennung immer ein Komma nutzen.<br><br><a href="https://de.semrush.com/blog/was-sind-keywords/" target="_blank">>>Informationen bezüglich Keywords<<</a>',
	'META_GOOGLE_SITE_VERIFICATION'					=>	'Google Website-Inhaberschaft',
	'META_GOOGLE_SITE_VERIFICATION_EXPLAIN'			=>	'Hier kann die Zeichenfolge zur identifizierung eingetragen werden.<br>Nähere informationen findet man dazu unter:<br><br><a href="https://support.google.com/webmasters/answer/9008080?hl=de" target="_blank">Bestätigung der Inhaberschaft für die Search Console auf google</a>.',
	'META_OPEN_GRAPH_ENABLE'						=>	'Open Graph Meta Tags aktivieren',
	'META_OPEN_GRAPH_ENABLE_EXPLAIN'				=>	'Hier können die Open Graph Meta Tags aktiviert werden.<br><br> Lesen Sie hier auch nachfolgende Dokumentation: <a target="_blank" href="https://www.seo-trainee.de/glossar/open-graph-meta-tags/">>>Domumentation OpenGraph Meta Tags<<</a>',
	'META_OG_DESCRIPTION'							=>	'Open Graph Meta Tag - Description',
	'META_OG_DESCRIPTION_EXPLAIN'					=>	'Hier kann eine kurze Beschreibung eingefügt werden die dann für Soziale Medien genutzt werden kann. Ähnlich wie die Meta-Description für Suchmachienen.<br><br>Weitere Informationen:<br><br><a href="https://de.ryte.com/magazine/open-graph-tags" target="_blank">>>Informationen bezüglich Open Graph Meta Tags-Description<<</a>',
	'META_OG_LOCALE'								=>	'Seitensprache Open Graph Tag',
	'META_OG_LOCALE_EXPLAIN'						=>	'Hier kann die Seitensprache im OpenGraph Tag angegeben werden. Bitte unbedingt die Korrekte Schreibweise beachten.<br>Die ersten beiden Buchstaben klein geschrieben und die anderen beiden Gross geschrieben. Und mit dem Unterstrich verbinden.<br><br> Beispiel: Für Deutschland <b>de_DE</b> oder für England <b>en_GB</b><br><br><a href="https://www.localeplanet.com/icu/" target="_blank"><b>>>>Hier eine Liste mit den Kennungen die man benutzen kann<<<</b></a> ',
	'FAVICON_ENABLE'								=>	'Favicons aktivieren',
	'FAVICON_ENABLE_EXPLAIN'						=>	'Hier kann man auswählen ob man Favicons nutzen möchte oder nicht.',
	'FAVICON_INFORMATION'							=>	'Die Icons befinden sich im Verzeichnis <b>/ext/chris1278/metainfo/favicon</b>. Diese Können bearbeitet werden und auch ausgetauscht.<br><br><b><i><u>Wichtig:</u></i></b> Die Namen der Dateien sowie endungen müssen erhalten bleiben. Sonst werden die Icons nicht geladen! ',
	'METAINFO_UPDATE'								=>	'Die Einstellungen zu den Metainformationen und Favicons wurden erfolgreich gespeichert!',
]);
