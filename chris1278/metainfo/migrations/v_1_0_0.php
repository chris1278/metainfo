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
			['config.add', ['meta_title', '']],
			['config.add', ['meta_description', '']],
			['config.add', ['meta_keywords', '']],
			['config.add', ['meta_google_site_verification', '']],
			['config.add', ['meta_open_graph_enable', '0']],
			['config.add', ['meta_og_description', '']],
			['config.add', ['meta_og_locale', '']],
			['config.add', ['favicon_enable', '0']],
		];
	}
}
