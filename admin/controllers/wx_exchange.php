<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
*      交易记录
*/
class wx_exchange extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
		$this->load->model('wxexchange_model');
	}

	//时间银行交易记录
	public function bankexchang()
	{
		$data['exchang'] = $this->wxexchange_model->bankexchange();
		var_dump($data);
		$this->load->view('wx_change',$data);
	    $this->load->view('footer');
	}


	//商城交易记录
	




}

?>