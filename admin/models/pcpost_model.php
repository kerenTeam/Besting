<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*    pc新闻模型
*/
class Pcpost_model extends CI_model
{
	//新闻数据库
	const TBL_POST = 'pc_posts';

	// 查出所有新闻
	function listpost(){
		$contion['pid'] = '2';
		$query = $this->db->where($contion)->get(self::TBL_POST);
		return $query->result_array();
	}	
	// 查出所有企业简介
	public function enterprise()
	{
		$contion['pid'] = '1';
		$query = $this->db->where($contion)->get(self::TBL_POST);
		return $query->result_array();
	}

	// 新增新闻
	public function addpost($data){
		return $this->db->insert(self::TBL_POST,$data);	
	}


}


?>