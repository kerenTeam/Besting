<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*   用户管理模型
*/
class Album_model extends CI_Model
{
	
	function check(){
		
		$q = $this->db->get('wd_manager');
		if($q->num_rows() > 0){
			return $q->row();
		}
	}


}












?>