<?php
/**
*
* @package phpBB Extension - Metainformation and Favicon by Chris1278
* @copyright (c) 2021 (christian-esch.de.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace chris1278\metainfo\acp;

class metainfo_settings
{
	protected $user;
	protected $request;
	protected $template;
	protected $config;
	protected $language;
	protected $phpEx;
	protected $phpbb_admin_path;
	protected $md_manager;
	public $u_action;

	public function main()
	{
		global $user,  $request, $template, $config, $phpbb_admin_path, $phpEx, $phpbb_container;
		$this->user				= $user;
		$this->request			= $request;
		$this->template			= $template;
		$this->config			= $config;
		$this->language			= $phpbb_container->get('language');
		$this->phpbb_admin_path	= $phpbb_admin_path;
		$this->php_ext			= $phpEx;
		$this->md_manager		= $phpbb_container->get('ext.manager')->create_extension_metadata_manager('chris1278/metainfo');
		$ext_display_name		= $this->md_manager->get_metadata('display-name');
		$ext_display_ver		= $this->md_manager->get_metadata('version');
		$this->tpl_name			= 'acp_metainfo_settings';
		$this->page_title		= $this->language->lang('ACP_METAINFO') . ' - ' . $this->language->lang('ACP_METAINFO_SETTINGS');
		$this->language->add_lang( 'acp_metainfo_settings', 'chris1278/metainfo');
		add_form_key('chris1278_metainfo');

		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('chris1278_metainfo'))
			{
				trigger_error('FORM_INVALID');
			}

			$this->config->set('site_desc', $this->request->variable('cmi_site_desc', ''));
			$this->config->set('sitename', $this->request->variable('cmi_sitename', ''));

			$this->config->set('cmi_meta_description'						, $this->request->variable('cmi_meta_description', '', true));
			$this->config->set('cmi_meta_keywords'							, $this->request->variable('cmi_meta_keywords', '', true));
			$this->config->set('cmi_meta_google_site_verification_enable'	, $this->request->variable('cmi_meta_google_site_verification_enable', 0));
			$this->config->set('cmi_meta_google_site_verification'			, $this->request->variable('cmi_meta_google_site_verification', '', true));
			$this->config->set('cmi_meta_open_graph_enable'					, $this->request->variable('cmi_meta_open_graph_enable', 0));
			$this->config->set('cmi_meta_og_url'							, $this->request->variable('cmi_meta_og_url', 0));
			$this->config->set('cmi_meta_og_description'					, $this->request->variable('cmi_meta_og_description', '', true));
			$this->config->set('cmi_meta_og_locale'							, $this->request->variable('cmi_meta_og_locale', ''));
			$this->config->set('cmi_fa_appid_enable'						, $this->request->variable('cmi_fa_appid_enable', 0));
			$this->config->set('cmi_fa_appid'								, $this->request->variable('cmi_fa_appid', '', true));
			$this->config->set('cmi_favicon_enable'							, $this->request->variable('cmi_favicon_enable', 0));

			trigger_error($this->language->lang('METAINFO_UPDATE') . adm_back_link($this->u_action));
		}

		$this->template->assign_vars([
			'METAINFO_EXT_NAME'								=> $ext_display_name,
			'METAINFO_EXT_VER'								=> $ext_display_ver,
			'CMI_SITE_DESC'									=> $this->config['site_desc'],
			'CMI_SITENAME'									=> $this->config['sitename'],
			'CMI_META_DESCRIPTION'							=> $this->config['cmi_meta_description'],
			'CMI_META_KEYWORDS'								=> $this->config['cmi_meta_keywords'],
			'CMI_META_GOOGLE_SITE_VERIFICATION_ENABLE'		=> $this->config['cmi_meta_google_site_verification_enable'],
			'CMI_META_GOOGLE_SITE_VERIFICATION'				=> $this->config['cmi_meta_google_site_verification'],
			'CMI_META_OPEN_GRAPH_ENABLE'					=> $this->config['cmi_meta_open_graph_enable'],
			'CMI_META_OG_URL'								=> $this->config['cmi_meta_og_url'],
			'CMI_META_OG_DESCRIPTION'						=> $this->config['cmi_meta_og_description'],
			'CMI_META_OG_LOCALE'							=> $this->config['cmi_meta_og_locale'],
			'CMI_FA_APPID_ENABLE'							=> $this->config['cmi_fa_appid_enable'],
			'CMI_FA_APPID'									=> $this->config['cmi_fa_appid'],
			'CMI_FAVICON_ENABLE'							=> $this->config['cmi_favicon_enable'],
			'U_BORD_META'									=> append_sid("{$phpbb_admin_path}index.$this->php_ext" ,'i=acp_board&mode=settings'),
			'U_ACTION'										=> $this->u_action,
		]);
	}
}
