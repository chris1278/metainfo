<?php
/**
*
* @package phpBB Extension - Metainfo by Chris1278
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
	protected $md_manager;
	public $u_action;

	public function main()
	{
		global $user,  $request, $template, $config, $language, $phpbb_admin_path, $phpEx, $phpbb_container;

		$this->user = $user;
		$this->request = $request;
		$this->template = $template;
		$this->config = $config;
		$this->language = $language;
		$this->phpbb_admin_path = $phpbb_admin_path;
		$this->php_ext = $phpEx;
		$this->md_manager = $phpbb_container->get('ext.manager')->create_extension_metadata_manager('chris1278/metainfo');

		$ext_display_name = $this->md_manager->get_metadata('display-name');
		$ext_display_ver = $this->md_manager->get_metadata('version');

		$this->tpl_name = 'acp_metainfo_settings';
		$this->page_title = $this->language->lang('ACP_METAINFO') . ' - ' . $this->language->lang('ACP_METAINFO_SETTINGS');

		add_form_key('chris1278_metainfo');

		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('chris1278_metainfo'))
			{
				trigger_error('FORM_INVALID');
			}
			$this->config->set('mt_change', $this->request->variable('mt_change', 0));
			$this->config->set('meta_title', $this->request->variable('meta_title', '', true));
			$this->config->set('meta_description', $this->request->variable('meta_description', '', true));
			$this->config->set('meta_keywords', $this->request->variable('meta_keywords', '', true));
			$this->config->set('meta_google_site_verification_enable', $this->request->variable('meta_google_site_verification_enable', 0));
			$this->config->set('meta_google_site_verification', $this->request->variable('meta_google_site_verification', '', true));
			$this->config->set('meta_open_graph_enable', $this->request->variable('meta_open_graph_enable', 0));
			$this->config->set('meta_og_url', $this->request->variable('meta_og_url', 0));
			$this->config->set('meta_og_description', $this->request->variable('meta_og_description', '', true));
			$this->config->set('meta_og_locale', $this->request->variable('meta_og_locale', ''));
			$this->config->set('fa_appid_enable', $this->request->variable('fa_appid_enable', 0));
			$this->config->set('fa_appid', $this->request->variable('fa_appid', '', true));
			$this->config->set('favicon_enable', $this->request->variable('favicon_enable', 0));

			trigger_error($this->language->lang('METAINFO_UPDATE') . adm_back_link($this->u_action));
		}

		$this->template->assign_vars([
			'METAINFO_EXT_NAME'							=>	$ext_display_name,
			'METAINFO_EXT_VER'							=>	$ext_display_ver,
			'SITENAME'									=>	$this->config['sitename'],
			'MT_CHANGE'									=>	$this->config['mt_change'],
			'META_TITLE'								=>	$this->config['meta_title'],
			'META_DESCRIPTION'							=>	$this->config['meta_description'],
			'META_KEYWORDS'								=>	$this->config['meta_keywords'],
			'META_GOOGLE_SITE_VERIFICATION_ENABLE'		=>	$this->config['meta_google_site_verification_enable'],
			'META_GOOGLE_SITE_VERIFICATION'				=>	$this->config['meta_google_site_verification'],
			'META_OPEN_GRAPH_ENABLE'					=>	$this->config['meta_open_graph_enable'],
			'META_OG_URL'								=>	$this->config['meta_og_url'],
			'META_OG_DESCRIPTION'						=>	$this->config['meta_og_description'],
			'META_OG_LOCALE'							=>	$this->config['meta_og_locale'],
			'FA_APPID_ENABLE'							=>	$this->config['fa_appid_enable'],
			'FA_APPID'									=>	$this->config['fa_appid'],
			'FAVICON_ENABLE'							=>	$this->config['favicon_enable'],
			'U_BORD_META'								=>	append_sid("{$phpbb_admin_path}index.$this->php_ext" ,'i=acp_board&mode=settings'),
			'U_ACTION'									=>	$this->u_action,
		]);
	}
}
