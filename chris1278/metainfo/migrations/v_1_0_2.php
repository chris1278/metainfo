<?php
/**
*
* @package phpBB Extension - Metainfo by Chris1278
* @copyright (c) 2021 (christian-esch.de.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace chris1278\metainfo\migrations;

class v_1_0_2 extends \phpbb\db\migration\migration
{

	public static function depends_on()
	{
		return ['\chris1278\metainfo\migrations\v_1_0_1'];
	}
	public function update_data()
	{
		return [
			['config.add'	, ['cmi_mt_change', 								$this->config['mt_change']]],
			['config.add'	, ['cmi_meta_title', 								$this->config['meta_title']]],
			['config.add'	, ['cmi_meta_description', 							$this->config['meta_description']]],
			['config.add'	, ['cmi_meta_keywords', 							$this->config['meta_keywords']]],
			['config.add'	, ['cmi_meta_google_site_verification', 			$this->config['meta_google_site_verification']]],
			['config.add'	, ['cmi_meta_open_graph_enable', 					$this->config['meta_open_graph_enable']]],
			['config.add'	, ['cmi_meta_og_description', 						$this->config['meta_og_description']]],
			['config.add'	, ['cmi_meta_og_locale', 							$this->config['meta_og_locale']]],
			['config.add'	, ['cmi_favicon_enable', 							$this->config['favicon_enable']]],
			['config.add'	, ['cmi_meta_google_site_verification_enable', 		$this->config['meta_google_site_verification_enable']]],
			['config.add'	, ['cmi_meta_og_url', 								$this->config['meta_og_url']]],
			['config.add'	, ['cmi_fa_appid_enable', 							$this->config['fa_appid_enable']]],
			['config.add'	, ['cmi_fa_appid', 									$this->config['fa_appid']]],
			['config.add'	, ['cmi_ov_fav_enable', 							$this->config['ov_fav_enable'] ]],
			['config.remove', ['mt_change']],
			['config.remove', ['meta_title', '']],
			['config.remove', ['meta_description']],
			['config.remove', ['meta_keywords']],
			['config.remove', ['meta_google_site_verification']],
			['config.remove', ['meta_open_graph_enable']],
			['config.remove', ['meta_og_description']],
			['config.remove', ['meta_og_locale']],
			['config.remove', ['favicon_enable']],
			['config.remove', ['meta_google_site_verification_enable']],
			['config.remove', ['meta_og_url']],
			['config.remove', ['fa_appid_enable']],
			['config.remove', ['fa_appid']],
			['config.remove', ['ov_fav_enable']],
			['config.remove', ['ov_google_site_verification_instruction']],
		];
	}
}
