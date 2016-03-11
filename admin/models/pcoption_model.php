<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Pcoption_model extends CI_model
{
	//系统配置
	const TBL_OPTION = 'pc_option';

	//查出所有配置
	public function option()
	{
		$query=$this->db->get(self::TBL_OPTION);
		return $query->result_array();
	}
	//修改所有配置
	public function upoption($data,$name){
		$contion = array('name'=>$name);
		$datas = array('value'=>$data);
		return $this->db->where($contion)->update(self::TBL_OPTION,$datas);
	}
	// $this->Option->where(array('name' => $k))->save(array('value' => $v));

}
?>