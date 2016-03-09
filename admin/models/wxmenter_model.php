<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*    微信用户模型
*/
class Wxmenter_model extends CI_model
{
	
	const TBL_USER = 'user';
	const TBL_ADDRESS = 'user_address';

	public function userlist(){
		$query = $this->db->get(self::TBL_USER);
		return $query->result_array();
	}


	//根据openid查询用户

	public function user($openid)
	{
		$contion['openid'] = $openid;
		$query = $this->db->where($contion)->get(self::TBL_USER);
		return $query->row();
	}


	//获取用户收货地址

	public function addresslist($openid)
	{
		$contion['userid'] = $openid;
		$query = $this->db->where($contion)->get(self::TBL_ADDRESS);
		return $query->result_array();
	}

	//删除用户收货地址
	public function deladdres($openid)
	{
		$contion['userid'] = $openid;
		return $this->db->where($contion)->delete(self::TBL_ADDRESS);
	}

	public function deluser($openid){
		$contion['openid'] = $openid;
		return $this->db->where($contion)->delete(self::TBL_USER);
	}

}

?>