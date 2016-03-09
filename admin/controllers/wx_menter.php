<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*    微信用户管理
*/
class wx_menter extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
		$this->load->model('wxmenter_model');
	}
	//用户列表
	public function index(){

		$data['users'] = $this->wxmenter_model->userlist();
		$this->load->view('wx_users',$data);
	    $this->load->view('footer');
	}

	//用户详情
	public function usermore(){
		$openid = $_GET['openid'];
		$data['user'] = (array)$this->wxmenter_model->user($openid);
		$data['address'] = $this->wxmenter_model->addresslist($openid);
		$this->load->view('wx_usermore',$data);
	    $this->load->view('footer');
	}

	public function deluser(){
		$openid=$_GET['openid'];
		if($this->wxmenter_model->deluser($openid) && $this->wxmenter_model->deladdres($openid)){
			$data['message'] = '删除成功';
			$data['wait'] = 3;
			$data['url'] = site_url('wx_menuter/index');
			$this->load->view('message.php',$data);
		}else{
			$data['message'] = '删除失败';
			$data['wait'] = 3;
			$data['url'] = site_url('wx_menuter/index');
			$this->load->view('message.php',$data);
		}
	}



}

