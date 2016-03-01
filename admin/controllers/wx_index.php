<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wx_index extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->view('header');
    }


	public function type()
	{
		
	    $this->load->view('wx_type');
	    $this->load->view('footer');
	}
	
}