<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*    首页模型
*/
class Home_model extends CI_model
{
	const TBL_PAGES = 'pc_pageimg';
	const TBL_POST = 'pc_posts';

	#系统设置
	public function setoption($name)
	{
		$sql = "SELECT value FROM wd_pc_option WHERE name='$name'";
		$query =  $this->db->query($sql);
		return $query->row_array();
	}

	#首页
	public function listhome($id)
	{
		$contion['id'] = $id;
		$query = $this->db->where($contion)->get(self::TBL_PAGES);
		return $query->row_array();
	}
	
	#企业简介
	public function listinfo($pid,$limit)
	{
		$contion['pid'] = $pid;
		$query = $this->db->where($contion)->limit($limit)->get(self::TBL_POST);
		return $query->result_array();
	}

	
}
?>