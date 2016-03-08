<?php
/*
*	登陆控制器
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       // $this->load->view('header');
       $this->load->helper('url');
    }


	public function index()
	{
		
	    $this->load->view('login');
	}


	//登陆验证
	public function login(){


		$this->form_validation->set_rules('username', 'Username', 'required|min_length[6]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if (!$this->form_validation->run()){
			$data['error'] = '<script>alert("登陆失败");</script>';
			$this->load->view('login', $data);
				
		}else{
			if($this->user_model->check()){
				$session['is_login'] = TRUE;
				
				$this->session->set_userdata($session);
				redirect('home/index');
			}else{
				
			$data['error'] = '<script>alert("登陆失败");</script>';
			$this->load->view('login', $data);
			}
		//$this->User_model->check();
		}
	}
	//退出登陆
	function logout(){

		$this->session->sess_destroy();
		redirect('login');
	}
	
	
}
