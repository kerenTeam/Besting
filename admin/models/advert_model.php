<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 微信广告模型
*/
class Advert_model extends CI_Model
{
	const TBL_ADVERT = 'advert';
	#获取广告列表
	public function listadvert(){
		$query = $this->db->get(self::TBL_ADVERT);
		return $query->result_array();
	}	

	#新增广告列表
	public function addadvert($data){
		return $this->db->insert(self::TBL_ADVERT,$data);
	}

	#查找要编辑的记录
	public function listade($cat_id){
		$condition['id'] = $cat_id;
		$query = $this->db->where($condition)->get(self::TBL_ADVERT);
		return $query->row();
	}	

	#编辑修改
	public function upadvert($data,$id){
		$condition['id'] = $id;
		return $this->db->where($condition)->update(self::TBL_ADVERT,$data);

	}

	public function deladvert($id){
		$condition['id'] = $id;
		return $query = $this->db->where($condition)->delete(self::TBL_ADVERT);

	}

}

?>