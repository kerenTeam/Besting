<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class indexCT extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->view('header');
    }


	public function index()
	{
		
	    $this->load->view('index');
	    $this->load->view('footer');
	}
	
}
