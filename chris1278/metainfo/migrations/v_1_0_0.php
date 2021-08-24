<?php
/**
*
* @package phpBB Extension - Metainfo by Chris1278
* @copyright (c) 2021 (christian-esch.de.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace chris1278\metainfo\migrations;

class v_1_0_0 extends \phpbb\db\migration\migration
{

	public static function depends_on()
	{
		return ['\chris1278\metainfo\migrations\acp_module'];
	}

	public function update_data()
	{
		return [
			['config.add', ['metainfo_version', '1.0.0']],
			['config.add', ['mt_change', '1']],
			['config.add', ['meta_title', 'meta_title']],
			['config.add', ['meta_description', 'Description']],
			['config.add', ['meta_keywords', 'keywords']],
			['config.add', ['meta_google_site_verification', 'Meta-google-site-verification']],
			['config.add', ['meta_open_graph_enable', '0']],
			['config.add', ['meta_og_description', 'Opeh Graph Tag Description']],
			['config.add', ['meta_og_locale', 'de_DE']],
			['config.add', ['favicon_enable', '0']],
		];
	}

	public function revert_data()
	{
		return [
			['config.remove', ['metainfo_version', '']],
			['config.remove', ['mt_change', '']],
			['config.remove', ['meta_title', '']],
			['config.remove', ['meta_description', '']],
			['config.remove', ['meta_keywords', '']],
			['config.remove', ['meta_google_site_verification', '']],
			['config.remove', ['meta_open_graph_enable', '0']],
			['config.remove', ['meta_og_description', '']],
			['config.remove', ['meta_og_locale', '']],
			['config.remove', ['favicon_enable', '']],
		];
	}
}
