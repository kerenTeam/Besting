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

	//获取时间银行分类列表
	public function bankcate(){
		$cate['pid'] = '1'; 
		$query = $this->db->where($cate)->get('wd_wx_cate');
		return $query->result_array();
	}

	//获取时间银行产品列表
	public function banklist(){
		$query = $this->db->get(self::TBL_BANK);
		return $query->result_array();
	}

	
}

?>