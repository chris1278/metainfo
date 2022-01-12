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
			['config.add', ['cmi_ov_fav_enable', '0']],
			['config.add', ['cmi_ov_google_site_verification_instruction', '0']],
			['custom', [[$this, 'import_var_change']]],
		];
	}
	public function import_var_change()
	{
		$sql_ary = [
			'config_name' => 'cmi_meta_title',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'config
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE config_name = "meta_title"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'config_name' => 'cmi_mt_change',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'config
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE config_name = "mt_change"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'config_name' => 'cmi_meta_description',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'config
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE config_name = "meta_description"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'config_name' => 'cmi_meta_keywords',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'config
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE config_name = "meta_keywords"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'config_name' => 'cmi_meta_google_site_verification',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'config
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE config_name = "meta_google_site_verification"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'config_name' => 'cmi_meta_google_site_verification_enable',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'config
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE config_name = "meta_google_site_verification_enable"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'config_name' => 'cmi_meta_open_graph_enable',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'config
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE config_name = "meta_open_graph_enable"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'config_name' => 'cmi_meta_og_url',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'config
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE config_name = "meta_og_url"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'config_name' => 'cmi_meta_og_description',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'config
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE config_name = "meta_og_description"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'config_name' => 'cmi_meta_og_locale',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'config
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE config_name = "meta_og_locale"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'config_name' => 'cmi_fa_appid_enable',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'config
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE config_name = "fa_appid_enable"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'config_name' => 'cmi_fa_appid',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'config
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE config_name = "fa_appid"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'config_name' => 'cmi_favicon_enable',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'config
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE config_name = "favicon_enable"';
		$this->db->sql_query($sql);
	}
	public function revert_data()
	{
		return [
			['config.remove', ['cmi_meta_title']],
			['config.remove', ['cmi_mt_change']],
			['config.remove', ['cmi_meta_description']],
			['config.remove', ['cmi_meta_keywords']],
			['config.remove', ['cmi_meta_google_site_verification']],
			['config.remove', ['cmi_meta_google_site_verification_enable']],
			['config.remove', ['cmi_meta_open_graph_enable']],
			['config.remove', ['cmi_meta_og_url']],
			['config.remove', ['cmi_meta_og_description']],
			['config.remove', ['cmi_meta_og_locale']],
			['config.remove', ['cmi_fa_appid_enable']],
			['config.remove', ['cmi_fa_appid']],
			['config.remove', ['cmi_favicon_enable']],
		];
	}	

	
}
