<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*    微信公用模型
*/
class Wxpublic_model extends CI_model
{
	const TBL_CATE = 'wx_cate';


	public function catelist(){
		$query = $this->db->get(self::TBL_CATE);
		return $query->result_array();
	}



}


?>