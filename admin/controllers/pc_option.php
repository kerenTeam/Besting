<?php

/**
*   首页设置控制器
*/
class pc_option extends MY_Controller
{
	
	function __construct()
	{
		 parent::__construct();
        $this->load->view('header');
	}


	//首页系统设置
	function index(){
		


		$this->load->view('option');
		$this->load->view('footer');
	}


	
}




?>