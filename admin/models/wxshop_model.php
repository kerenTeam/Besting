<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*    微信商家模型
*/
class Wxshop_model extends CI_model
{
	const TBL_SHOP = 'goods_shops';


	public function shoplist(){
		$query = $this->db->get(self::TBL_SHOP);
		return $query->result_array();
	}
	#查出分类
	public function shopcate($id){
		$condition['pid'] = $id;
		$query = $this->db->where($condition)->get('wd_wx_cate');
		return $query->result_array();
	}
	
	//新增
	public function addshop($data){
	    return $this->db->insert(self::TBL_SHOP,$data);

	}
	//获取要修改的数据
	public function shop($id){
		$condition['sid'] = $id;
		$query = $this->db->where($condition)->get(self::TBL_SHOP);
		return $query->row();
	}
	//修改操作
	public function updatashop($data,$sid){
		$condition['sid'] = $sid;
		return $this->db->where($condition)->update(self::TBL_SHOP,$data);

	}

	//删除操作
	public function delshop($sid){
		$condition['sid'] = $sid;
		return $query = $this->db->where($condition)->delete(self::TBL_SHOP);

	}




}


?>