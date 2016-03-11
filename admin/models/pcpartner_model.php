<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*   合作商
*/
class Pcpartner_model extends CI_model
{
	const TBL_PARTNER = 'pc_partner';

	// 查询合作商列表
	public function listpartner()
	{
		$query = $this->db->get(self::TBL_PARTNER);
		return $query->result_array();
	}
	// 新增合作商
	public function addpartner($data)
	{
		return $this->db->insert(self::TBL_PARTNER,$data);
	}
	// 查询出要修改的合作商
	public function setpartner($id)
	{
		$contion['id'] = $id;
		$query = $this->db->where($contion)->get(self::TBL_PARTNER);
		return $query->row();
	}
	// 修改合作商
	public function editpartner($data,$id)
	{
		$contion['id'] = $id;
		return $this->db->where($contion)->update(self::TBL_PARTNER,$data);
	}

	//删除合作商
	public function delpartner($id)
	{
		$contion['id'] = $id;
		return $this->db->where($contion)->delete(self::TBL_PARTNER);
	}


}

?>