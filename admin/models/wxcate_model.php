<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*   微信端分类模型类
*/
class Wxcate_model extends CI_Model
{
	const TBL_CATES = 'wx_cate';
	
	public function list_cate(){
		$query = $this->db->get(self::TBL_CATES);
		return $query->result_array();
	}
	
	public function up_cate($data,$cat_id){
		$condition['id'] = $cat_id;
		return $this->db->where($condition)->update(self::TBL_CATES,$data);
	}

}












?>