<?php
/**
*
* @package phpBB Extension - Metainfo by Chris1278
* @copyright (c) 2021 (christian-esch.de.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace chris1278\metainfo\acp;

class metainfo_overview
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

		$ext_lang_min_ver 			=	$this->md_manager->get_metadata()['extra']['lang-min-ver'];
		$lang_ver 					= 	($this->language->lang('METAINFO_LANG_EXT_VER') !== 'METAINFO_LANG_EXT_VER') ? $this->language->lang('METAINFO_LANG_EXT_VER') : '0.0.0';
		$notes 						=	'';

		$this->tpl_name = 'acp_metainfo_overview';
		$this->page_title = $this->language->lang('ACP_METAINFO') . ' - ' . $this->language->lang('ACP_METAINFO_OVERVIEW');

		add_form_key('chris1278_metainfo');

		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('chris1278_metainfo'))
			{
				trigger_error('FORM_INVALID');
			}
			//$this->config->set('cmi_fav_enable', $this->request->variable('cmi_fav_enable', 0))
			$this->config->set('cmi_ov_fav_enable', $this->request->variable('cmi_ov_fav_enable', 0));
			$this->config->set('cmi_ov_google_site_verification_instruction', $this->request->variable('cmi_ov_google_site_verification_instruction', 0));

			trigger_error($this->language->lang('METAINFO_UPDATE') . adm_back_link($this->u_action));
		}

		if (!phpbb_version_compare($lang_ver, $ext_lang_min_ver, '>='))
		{
			$this->add_note($notes, $this->language->lang('METAINFO_MSG_LANGUAGEPACK_OUTDATED'));
		}

		$this->template->assign_vars([
			'METAINFO_EXT_NAME'							=>	$ext_display_name,
			'METAINFO_EXT_VER'							=>	$ext_display_ver,
			'METAINFO_NOTES'							=>	$notes,
			'CMI_SITENAME'									=>	$this->config['sitename'],
			'CMI_FAV_ENABLE'								=>	$this->config['cmi_fav_enable'],
			'CMI_OV_FAV_ENABLE'								=>	$this->config['cmi_ov_fav_enable'],
			'CMI_OV_GOOGLE_SITE_VERIFICATION_INSTRUCTION'	=>	$this->config['cmi_ov_google_site_verification_instruction'],
			'U_ACTION'										=>	$this->u_action,
		]);
	}
	private function add_note(string &$notes, $msg)
	{
		$notes .= (($notes != '') ? "\n" : "") . sprintf('<p>%s</p>', $msg);
	}
}
