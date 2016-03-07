<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pc_index extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->view('header');
    }

    public function admin()
	{
		
	    $this->load->view('admin');
	    $this->load->view('footer');
	}
	public function login()
	{
		
	    $this->load->view('login');
	    $this->load->view('footer');
	}
	public function index()
	{
		
	    $this->load->view('pc_index');
	    $this->load->view('footer');
	}
	public function content()
	{
		
	    $this->load->view('pc_content');
	    $this->load->view('footer');
	}
		public function cotentedit()
	{
		
	    $this->load->view('pc_cotentedit');
	    $this->load->view('footer');
	}
	public function contentadd()
	{
		
	    $this->load->view('pc_contentadd');
	    $this->load->view('footer');
	}
		public function pcbanner()
	{
		
	    $this->load->view('pc_banner');
	    $this->load->view('footer');
	}

		public function partner()
	{
		
	    $this->load->view('pc_partner');
	    $this->load->view('footer');
	}
		public function pageimg()
	{
		
	    $this->load->view('pc_pageimg');
	    $this->load->view('footer');
	}
}
