<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Wxcity_model extends CI_model
{
	const TBL_CITY = 'city';

	public function listcity()
	{
		$query = $this->db->get(self::TBL_CITY);
		return $query->result_array();
	}

	public function addcity($data)
	{
		return $this->db->insert(self::TBL_CITY,$data);
	}

	public function setcity($id)
	{
		$contion['id'] = $id;
		$query = $this->db->where($contion)->get(self::TBL_CITY);
		return $query->row_array();
	}

	public function editcity($id,$data)
	{
		$contion['id'] =$id;
		return $this->db->where($contion)->update(self::TBL_CITY,$data);
	}

	public function delcity($id){
		$contion['id'] = $id;
		return $this->db->where($contion)->delete(self::TBL_CITY);
	}
	
}





 ?>