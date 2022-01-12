<?php
/**
*
* @package phpBB Extension - Metainfo by Chris1278
* @copyright (c) 2021 (christian-esch.de.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace chris1278\metainfo\migrations;

class v_1_0_1 extends \phpbb\db\migration\migration
{

	public static function depends_on()
	{
		return ['\chris1278\metainfo\migrations\v_1_0_0'];
	}
	public function update_data()
	{
		return [
			['config.add'	, ['meta_google_site_verification_enable', '0']],
			['config.add'	, ['meta_og_url', '1']],
			['config.add'	, ['fa_appid_enable', '0']],
			['config.add'	, ['fa_appid', '']],
			['config.add'	, ['ov_fav_enable', '0']],
			['config.add'	, ['ov_google_site_verification_instruction', '0']],
			['config.remove', ['metainfo_version']],
		];
	}
}
