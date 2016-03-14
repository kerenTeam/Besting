<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*    pc图片管理模型
*/
class Pcpageimg_model extends CI_model
{
	
	const TBL_PAGEIMG = 'pc_pageimg';
	#查出所有
	public function listpage()
	{
		$contion['pid'] = '2';
		$query = $this->db->where($contion)->get(self::TBL_PAGEIMG);
	    return $query->result_array();
	}
	#
	public function setpage($id)
	{
		$contion['id'] = $id;
		$query = $this->db->where($contion)->get(self::TBL_PAGEIMG);
		return $query->row();
	}

	#编辑
	public function pageup($id,$data)
	{
		$contion['id'] = $id;
		return $this->db->where($contion)->update(self::TBL_PAGEIMG,$data);
	}




}


 ?>