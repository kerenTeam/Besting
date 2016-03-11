<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*    微信产品模型   时间银行+途悦商城
*/
class Wxproduct_model extends CI_model
{
	#时间银行数据库
	const TBL_BANK = 'bank_shops';
	#途悦商城数据库
	const TBL_MALL = 'goods';
	//获取时间银行分类列表
	public function cate($id){
		$cate['pid'] = $id; 
		$query = $this->db->where($cate)->get('wd_wx_cate');
		return $query->result_array();
	}
	//获取时间银行产品列表
	public function banklist(){
		$query = $this->db->get(self::TBL_BANK);
		return $query->result_array();
	}
	//获取精品商城产品列表
	public function malllist(){
		$query = $this->db->get(self::TBL_MALL);
		return $query->result_array();
	}

	//新增时间银行商品
	public function addbank($data)
	{
		return $this->db->insert(self::TBL_BANK,$data);
	}

	//查出时间银行所要修改的产品
	public function setbank($id){
		$contion['id'] = $id;
		$query = $this->db->where($contion)->get(self::TBL_BANK);
		return $query->row();

	}
	//时间银行修改操作
	public function bankedit($data,$id)
	{
		$contion['id'] = $id;
		return $this->db->where($contion)->update(self::TBL_BANK,$data); 
	}

	//时间银行删除操作
	public function delbank($id)
	{
			$condition['id'] = $id;
		return $query = $this->db->where($condition)->delete(self::TBL_BANK);
	}

	// 查出精品商城商家
	public function setshops()
	{
		$query = $this->db->get('wd_goods_shops');
		return $query->result_array();
	}
	//新增商城商品
	public function addmall($data)
	{
		return $this->db->insert(self::TBL_MALL,$data);
	}
	
	// 查出商城要编辑的商品
	public function setmall($id)
	{
		$condition['id'] = $id;
		$query = $this->db->where($condition)->get(self::TBL_MALL);
		return $query->row();
	}

	//修改商城商品
	public function editmall($data,$id)
	{
		$condition['id'] = $id;
		return $this->db->where($condition)->update(self::TBL_MALL,$data);
	}
	//删除商城商品
	public function delmall($id)
	{
		$condition['id'] = $id;
		return $this->db->where($condition)->delete(self::TBL_MALL);
	}
	
}

?>