<?php
/**
*
* @package phpBB Extension - Metainfo by Chris1278
* @copyright (c) 2021 (christian-esch.de.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace chris1278\metainfo\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	protected $config;
	protected $template;

	public function __construct(
		\phpbb\config\config $config,
		\phpbb\template\template $template
	)
	{
		$this->config   = $config;
		$this->template = $template;
	}

	public static function getSubscribedEvents()
	{
		return [
			'core.page_header'				=> 	'metainfo',
			'core.adm_page_header'			=> 	'metainfo',
		];
	}

	public function metainfo()
	{
		$ext_metainfo_instruction_path				= 	generate_board_url() . '/ext/chris1278/metainfo/instruction';
		$ext_metainfo_favicon_path					= 	generate_board_url() . '/ext/chris1278/metainfo/favicon';
		$ext_metainfo_favinfo_path					= 	generate_board_url() . '/ext/chris1278/metainfo/styles/all/favinfo';
		$acp_board_url								=	generate_board_url() .'/';
		$acp_sitename								=	$this->config['sitename'];
		$meta_title									=	$this->config['meta_title'];
		$mt_change									=	$this->config['mt_change'];
		$meta_description 							=	$this->config['meta_description'];
		$meta_keywords 								=	$this->config['meta_keywords'];
		$meta_google_site_verification				=	$this->config['meta_google_site_verification'];
		$meta_google_site_verification_enable		=	$this->config['meta_google_site_verification_enable'];
		$meta_open_graph_enable						=	$this->config['meta_open_graph_enable'];
		$meta_og_url								=	$this->config['meta_og_url'];
		$meta_og_description						=	$this->config['meta_og_description'];
		$meta_og_locale								=	$this->config['meta_og_locale'];
		$fa_appid_enable							=	$this->config['fa_appid_enable'];
		$fa_appid									=	$this->config['fa_appid'];
		$favicon_enable								=	$this->config['favicon_enable'];

		$this->template->assign_vars([
			'T_EXT_INSTRUCTION_PATH'				=>	$ext_metainfo_instruction_path,
			'T_EXT_FAVICON_PATH'					=>	$ext_metainfo_favicon_path,
			'T_EXT_FAVINFO_PATH'					=>	$ext_metainfo_favinfo_path,
			'ACP_BOARD_URL'							=>	$acp_board_url,
			'ACP_SITENAME'							=>	$acp_sitename,
			'META_TITLE'							=>	$meta_title,
			'MT_CHANGE'								=>	$mt_change,
			'META_DESCRIPTION'						=>	$meta_description,
			'META_KEYWORDS'							=>	$meta_keywords,
			'META_GOOGLE_SITE_VERIFICATION'			=>	$meta_google_site_verification,
			'META_GOOGLE_SITE_VERIFICATION_ENABLE'	=>	$meta_google_site_verification_enable,
			'META_OPEN_GRAPH_ENABLE'				=>	$meta_open_graph_enable,
			'META_OG_URL'							=>	$meta_og_url,
			'META_OG_DESCRIPTION'					=>	$meta_og_description,
			'META_OG_LOCALE'						=>	$meta_og_locale,
			'FA_APPID_ENABLE'						=>	$fa_appid_enable,
			'FA_APPID'								=>	$fa_appid,
			'FAVICON_ENABLE'						=>	$favicon_enable,
		]);
	}
}
