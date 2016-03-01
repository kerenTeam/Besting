<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pc_index extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->view('header');
    }


	public function index()
	{
		
	    $this->load->view('pc_index');
	    $this->load->view('footer');
	}
	public function containadd()
	{
		
	    $this->load->view('pc_contentadd');
	    $this->load->view('footer');
	}
	
}
