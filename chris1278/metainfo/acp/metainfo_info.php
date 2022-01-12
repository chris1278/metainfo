<?php
/**
*
* @package phpBB Extension - Metainformation and Favicon by Chris1278
* @copyright (c) 2021 (christian-esch.de.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace chris1278\metainfo\acp;

class metainfo_info
{
	function module()
	{
		return [
			'filename'	=> '\chris1278\metainfo\acp\metainfo_overview',
			'title'		=> 'ACP_METAINFO',
			'version'	=> '1.0.0',
			'modes'		=> [
				'settings'		=> [
					'title'		=> 'ACP_METAINFO_OVERVIEW',
					'auth'		=> 'ext_chris1278/metainfo && acl_a_board',
					'cat'		=> ['ACP_METAINFO'],
				],
			],
		];
	}
}
