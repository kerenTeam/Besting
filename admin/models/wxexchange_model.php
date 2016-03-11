<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*    交易记录模型
*/
class Wxexchange_model extends CI_model
{
	//时间银行兑换记录表
	const TBL_EXCHANGE = 'user_product_exchange';

	//查出时间银行记录
	public function bankexchange()
	{
		$query = $this->db->get(self::TBL_EXCHANGE);
		return $query->result_array();
	}

	
}

?>