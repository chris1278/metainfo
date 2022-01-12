<?php
/**
*
* @package phpBB Extension - Metainfo by Chris1278
* @copyright (c) 2021 (christian-esch.de.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace chris1278\metainfo\migrations;

class v_1_0_3 extends \phpbb\db\migration\migration
{

	public static function depends_on()
	{
		return ['\chris1278\metainfo\migrations\v_1_0_2'];
	}
	public function update_data()
	{
		return [
			['config.remove'	, ['cmi_mt_change']],
			['config.remove'	, ['cmi_meta_title']],
		];
	}
}
