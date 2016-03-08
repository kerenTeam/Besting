<?php
/*
*   后台首页
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->view('header');
       
    }


	public function index()
	{
		
	    $this->load->view('admin_index');
	    $this->load->view('footer');
	}


	
}