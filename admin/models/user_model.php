<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*   用户管理模型
*/
class User_model extends CI_Model
{
	
	function check(){



		$pass = $this->input->post('password');

		$this->db->where('loginname',$this->input->post('username'));
		$this->db->where('loginpassword',md5($pass));
		$q = $this->db->get('wd_manager');
		if($q->num_rows() > 0){
			return $q->row();
		}
	}


}












?>