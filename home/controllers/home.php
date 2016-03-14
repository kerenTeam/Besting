<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*   首页控制器
*/
class home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		#系统配置
		$data['address'] = $this->home_model->setoption('address');	
		$data['hotline'] = $this->home_model->setoption('hotline');	
		$data['seotitle'] = $this->home_model->setoption('seotitle');	
		$data['copyright'] = $this->home_model->setoption('copyright');	
		$data['tuyuepic'] = $this->home_model->setoption('tuyuepic');	
		$data['bestingpic'] = $this->home_model->setoption('bestingpic');	
		$data['keywords'] = $this->home_model->setoption('keywords');	
		$data['description'] = $this->home_model->setoption('description');	
		$this->load->view('header',$data);	
	}
	#官网首页
	function index(){
		$data['banner'] = $this->home_model->listhome('21');
		$data['bgbanner'] = $this->home_model->listhome('1');
		$data['bgbanner2'] = $this->home_model->listhome('2');
		$data['bg'] = $this->home_model->listhome('3');
		$data['bg2'] = $this->home_model->listhome('4');
		$data['bg3'] = $this->home_model->listhome('5');
		// var_dump($data);
		$this->load->view('pc_home',$data);
		$this->load->view('footer');
	}

	#企业简介
	public function besting()
	{
		$data['posts'] = $this->home_model->listinfo('1','3');
		//var_dump($data);
 		$this->load->view('pc_besting',$data);
		$this->load->view('footer');
	}

	#新闻中心
	public function news(){

		$data['posts'] = $this->home_model->listinfo('2','3');
		$this->load->view('pc_new',$data);
		$this->load->view('footer');
	}


	#高铁全媒体
	public function allmedia()
	{
		
		$data['bg'] = $this->home_model->listhome('6');
		$data['bg2'] = $this->home_model->listhome('7');
		$this->load->view('pc_allmedia',$data);
		$this->load->view('footer');
	}

	#火车站广告
	public function hardware()
	{
		$data['bg'] = $this->home_model->listhome('8');
		$data['bg2'] = $this->home_model->listhome('9');
		$this->load->view('pc_hard',$data);
		$this->load->view('footer');
	}
	#高铁平牌
	public function rail()
	{
		$data['bg'] = $this->home_model->listhome('10');
		$data['bg2'] = $this->home_model->listhome('11');
		$this->load->view('pc_rail',$data);
		$this->load->view('footer');
	}
	#途悦平牌
	public function tuyue()
	{
		$data['bg'] = $this->home_model->listhome('12');
		$data['listbg'] = $this->home_model->listhome('13');
		$data['listbg1'] = $this->home_model->listhome('14');
		$data['listbg2'] = $this->home_model->listhome('15');
		$this->load->view('pc_tuyue',$data);
		$this->load->view('footer');
	}

	#创意中心

	public function creation()
	{
		$data['listbg1'] = $this->home_model->listhome('16');
		//$data['listbg2'] = $this->home_model->listhome('15');
		$this->load->view('pc_creation',$data);
		$this->load->view('footer');
	}
	#加入我们
	public function join()
	{
		$data['listbg1'] = $this->home_model->listhome('17');
		$data['listbg2'] = $this->home_model->listhome('18');
		$data['listbg3'] = $this->home_model->listhome('19');
		$this->load->view('pc_join',$data);
		$this->load->view('footer');
	}

	#联系我们
	public function contactus()
	{
		$data['listbg'] = $this->home_model->listhome('20');
		$this->load->view('pc_contactus',$data);
		$this->load->view('footer');
	}


}



 ?>