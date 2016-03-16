<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Wxread_model extends CI_model
{
	const TBL_READ = 'reading';

	public function listread()
	{
		$query = $this->db->get(self::TBL_READ);
		return $query->result_array();
	}

	public function addread($data)
	{
		return $this->db->insert(self::TBL_READ,$data);
	}

	public function setread($id)
	{
		$contion['id'] = $id;
		$query = $this->db->where($contion)->get(self::TBL_READ);
		return $query->row_array();
	}

	public function editread($id,$data)
	{
		$contion['id'] =$id;
		return $this->db->where($contion)->update(self::TBL_READ,$data);
	}

	public function delread($id){
		$contion['id'] = $id;
		return $this->db->where($contion)->delete(self::TBL_READ);
	}
	
}





 ?>