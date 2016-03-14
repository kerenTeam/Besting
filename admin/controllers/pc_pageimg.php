<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*    pc图片管理
*/
class pc_pageimg extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		// 
		$this->load->model('pcpageimg_model');  
		$this->load->library('upload');
	}
	#首页banner
	public function banner()
	{
		$data['banner'] = (array)$this->pcpageimg_model->setpage('21');
		// var_dump($data);
		$this->load->view('header');
		$this->load->view('pc_banner',$data);
	    $this->load->view('footer');
	}

	public function pageimg($value='')
	{
		
		$this->load->view('header');
		$data['pages'] = $this->pcpageimg_model->listpage(); 
		//var_dump($data);

		$this->load->view('pc_pageimg',$data);
	    $this->load->view('footer');
	}

	public function setpage(){
		$id = $_POST['id'];
		$data = (array)$this->pcpageimg_model->setpage($id);
		$json = json_encode($data);
		echo $json;
	
	}

	public function editpage()
	{
		if ($_POST) {
			$id = $_POST['id'];
			//$data = $_POST;
			if(!empty($_FILES['bgpic']['tmp_name'])){
				if ($this->upload->do_upload('bgpic')) {
					# 上传成功，获取文件路径
					$fileinfo = $this->upload->data();
					$this->config->load('upload.php');
					$upload  = $this->config->item('upload_path');
					$data['bgpic'] = $upload . $fileinfo['file_name'];
				}else{
					#上传失败
					$error['message'] = $this->upload->display_errors();
					$error['wait'] = 3;
					$error['url'] = site_url('pc_partner/partneradd');
					$this->load->view('message.php',$error);
				}	
			}else{
				$data['bgpic'] = $_POST['bgpic'];

			}
			$data['content'] = $_POST['content'];
 			if($this->pcpageimg_model->pageup($id,$data)){
 				$success['message'] = "编辑成功";
 				$success['wait'] = 3;
 				$success['url'] = site_url('pc_pageimg/pageimg');
 					$this->load->view('header');
 				$this->load->view('message.php',$success);
 			}else{
 				$error['message'] = "编辑失败";
 				$error['wait'] = 3;
 				$error['url'] = site_url('pc_pageimg/pageimg');
 					$this->load->view('header');
 				$this->load->view('message.php',$error);
 			}
		}
	}
	#修改banner

	public function editbanner()
	{
		if ($_POST) {
			$id = $_POST['id'];
			if(!empty($_FILES['bgpic']['tmp_name'])){
				if ($this->upload->do_upload('bgpic')) {
					# 上传成功，获取文件路径
					$fileinfo = $this->upload->data();
					$this->config->load('upload.php');
					$upload  = $this->config->item('upload_path');
					$data['bgpic'] = $upload . $fileinfo['file_name'];
				}else{
					#上传失败
					$error['message'] = $this->upload->display_errors();
					$error['wait'] = 3;
					$error['url'] = site_url('pc_pageimg/banner');
					$this->load->view('message.php',$error);
				}	
			}else{
				$data['bgpic'] = $_POST['bgpic'];

			}
			$data['content'] = $_POST['content'];
 			if($this->pcpageimg_model->pageup($id,$data)){
 				$success['message'] = "编辑成功";
 				$success['wait'] = 3;
 				$success['url'] = site_url('pc_pageimg/banner');
 					$this->load->view('header');
 				$this->load->view('message.php',$success);
 			}else{
 				$error['message'] = "编辑失败";
 				$error['wait'] = 3;
 				$error['url'] = site_url('pc_pageimg/banner');
 					$this->load->view('header');
 				$this->load->view('message.php',$error);
 			}
		}
	}

}


 ?>