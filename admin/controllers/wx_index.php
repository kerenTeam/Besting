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




	
	public function pic()
	{
		
	    $this->load->view('wx_pic');
	    $this->load->view('footer');
	}
	public function advert()
	{
		
	    $this->load->view('wx_advert');
	    $this->load->view('footer');
	}
	public function bankadadd()
	{
		
	    $this->load->view('wx_bankadadd');
	    $this->load->view('footer');
	}
	public function molladadd()
	{
		
	    $this->load->view('wx_molladadd');
	    $this->load->view('footer');
	}
	
}