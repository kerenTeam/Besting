<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*   微信端分类模型类 + banner
*/
class Wxcate_model extends CI_Model
{
	#分类
	const TBL_CATES = 'wx_cate';
	#banner
	const TBL_BANNER = 'wx_banner';
	
	//微信分类
	public function list_cate(){
		$query = $this->db->get(self::TBL_CATES);
		return $query->result_array();
	}
	//修改微信分类
	public function up_cate($data,$cat_id){
		$condition['id'] = $cat_id;
		return $this->db->where($condition)->update(self::TBL_CATES,$data);
	}

	//banner列表
	public function listbanner()
	{
		
		$query = $this->db->get(self::TBL_BANNER);
		return $query->result_array();
	}

	//修改banner
	public function upbanner($data,$id){
		$condition['id'] = $id;
		return $this->db->where($condition)->update(self::TBL_BANNER,$data);
	}



}












?>