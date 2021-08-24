<?php
/**
*
* @package phpBB Extension - Metainfo by Chris1278
* @copyright (c) 2021 (christian-esch.de.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace chris1278\metainfo\migrations;

class acp_module extends \phpbb\db\migration\migration
{

	public static function depends_on()
	{
		return ['\phpbb\db\migration\data\v310\dev'];
	}

	public function update_data()
	{
		return [
			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_METAINFO'
			]],
			['module.add', [
				'acp',
				'ACP_METAINFO', [
					'module_basename'	=> '\chris1278\metainfo\acp\metainfo_module',
					'module_langname'	=> 'ACP_METAINFO_SETTINGS',
					'module_mode'		=> 'overview',
					'module_auth'		=> 'ext_chris1278/metainfo && acl_a_board',
				]
			]],
		];
	}

	public function revert_schema()
	{
		return [
			['module.remove', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_METAINFO'
			]],
			['module.remove', [
				'acp',
				'ACP_METAINFO', [
					'module_basename'	=> '\chris1278\metainfo\acp\metainfo_module',
					'module_langname'	=> 'ACP_METAINFO_SETTINGS',
					'module_mode'		=> 'overview',
					'module_auth'		=> 'ext_chris1278/metainfo && acl_a_board',
				]
			]],
		];
	}
}
