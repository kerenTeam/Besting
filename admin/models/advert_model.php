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


	}	

	#新增广告列表
	public function addadvert($data){
		return $this->db->insert(self::TBL_ADVERT,$data);

	}

}

?>