<?php
/**
*
* @package phpBB Extension - Metainformation and Favicon by Chris1278
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
			'core.page_header'				=> 'metainfo',
			'core.adm_page_header'			=> 'metainfo',
		];
	}

	public function metainfo()
	{

		$ext_metainfo_favicon_path					= generate_board_url() . '/ext/chris1278/metainfo/favicon';
		$ext_metainfo_favinfo_path					= generate_board_url() . '/ext/chris1278/metainfo/styles/all/favinfo';
		$acp_sitename								= $this->config['sitename'];
		$meta_title									= $this->config['cmi_meta_title'];
		$mt_change									= $this->config['cmi_mt_change'];
		$meta_description 							= $this->config['cmi_meta_description'];
		$meta_keywords 								= $this->config['cmi_meta_keywords'];
		$meta_google_site_verification				= $this->config['cmi_meta_google_site_verification'];
		$meta_google_site_verification_enable		= $this->config['cmi_meta_google_site_verification_enable'];
		$meta_open_graph_enable						= $this->config['cmi_meta_open_graph_enable'];
		$meta_og_url								= $this->config['cmi_meta_og_url'];
		$meta_og_description						= $this->config['cmi_meta_og_description'];
		$meta_og_locale								= $this->config['cmi_meta_og_locale'];
		$fa_appid_enable							= $this->config['cmi_fa_appid_enable'];
		$fa_appid									= $this->config['cmi_fa_appid'];
		$favicon_enable								= $this->config['cmi_favicon_enable'];

		$this->template->assign_vars([

			'T_EXT_FAVICON_PATH'						=> $ext_metainfo_favicon_path,
			'T_EXT_FAVINFO_PATH'						=> $ext_metainfo_favinfo_path,
			'ACP_SITENAME'								=> $acp_sitename,
			'CMI_META_TITLE'							=> $meta_title,
			'CMI_MT_CHANGE'								=> $mt_change,
			'CMI_META_DESCRIPTION'						=> $meta_description,
			'CMI_META_KEYWORDS'							=> $meta_keywords,
			'CMI_META_GOOGLE_SITE_VERIFICATION'			=> $meta_google_site_verification,
			'CMI_META_GOOGLE_SITE_VERIFICATION_ENABLE'	=> $meta_google_site_verification_enable,
			'CMI_META_OPEN_GRAPH_ENABLE'				=> $meta_open_graph_enable,
			'CMI_META_OG_URL'							=> $meta_og_url,
			'CMI_META_OG_DESCRIPTION'					=> $meta_og_description,
			'CMI_META_OG_LOCALE'						=> $meta_og_locale,
			'CMI_FA_APPID_ENABLE'						=> $fa_appid_enable,
			'CMI_FA_APPID'								=> $fa_appid,
			'CMI_FAVICON_ENABLE'						=> $favicon_enable,
		]);
	}
}
