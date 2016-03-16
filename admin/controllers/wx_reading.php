<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*    读物
*/
class wx_reading extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
		$this->load->model('wxread_model');
		$this->load->library('upload');
	}

	public function index()
	{
		$data['reads'] = $this->wxread_model->listread();
		//var_dumP($data);
		$this->load->view('wx_reading',$data);
	    $this->load->view('footer');
	}


	public function addread()
	{
		if($_POST){
			#验证字段能不能为空
			$this->form_validation->set_rules('title','标题','required');
   			$this->form_validation->set_rules('rwiter','作者','required');
   			$this->form_validation->set_rules('profiles','简介','required');
   			if($this->form_validation->run() == false){
   				#验证没有通过
   				$data['message'] = validation_errors();
				$data['wait'] = 3;
				$data['url'] = site_url('wx_reading/addread');
				$this->load->view('message.php',$data);
   			}else{
   				#通过验证
   				$data = $_POST;
   				if(!empty($_FILES['readimg']['tmp_name'])){
					if ($this->upload->do_upload('readimg')) {
						# 上传成功，获取文件路径
						$fileinfo = $this->upload->data();
						$data['titlepic'] = 'upload/' . $fileinfo['file_name'];
					}else{
						#上传失败
						$error['message'] = $this->upload->display_errors();
						$error['wait'] = 3;
						$error['url'] = site_url("wx_reading/addread");
						$this->load->view('message.php',$error);
						}
				}

				if($this->wxread_model->addread($data)){
					$success['message'] = "新增成功";
					$success['wait'] = 3;
					$success['url'] = site_url("wx_reading/index");
					$this->load->view('message.php',$success);
				}else{
					$error['message'] ='新增失败';
					$error['wait'] = 3;
					$error['url'] = site_url("wx_reading/addread");
					$this->load->view('message.php',$error);
				}
			}
		}else{
			$this->load->view('wx_addReading');
	    	$this->load->view('footer');
		}
	}

	public function editread()
	{
		if($_POST){
			$id = $_POST['id'];
			$this->form_validation->set_rules('title','标题','required');
   			$this->form_validation->set_rules('rwiter','作者','required');
   			$this->form_validation->set_rules('profiles','简介','required');
   			if($this->form_validation->run() == false){
   				#验证没有通过
   				$data['message'] = validation_errors();
				$data['wait'] = 3;
				$data['url'] = site_url('wx_reading/editread?id='.$id);
				$this->load->view('message.php',$data);
   			}else{
   				#通过验证
   				$data = $_POST;
   				$data = $_POST;
   				if(!empty($_FILES['readimg']['tmp_name'])){
					if ($this->upload->do_upload('readimg')) {
						# 上传成功，获取文件路径
						$fileinfo = $this->upload->data();
						$data['titlepic'] = 'upload/' . $fileinfo['file_name'];
					}else{
						#上传失败
						$error['message'] = $this->upload->display_errors();
						$error['wait'] = 3;
						$error['url'] = site_url("wx_reading/editread?id=".$id);
						$this->load->view('message.php',$error);
						}
				}else{
					$data['titlepic'] = $_POST['titlepic'];
				}

				if($this->wxread_model->editread($id,$data)){
					$success['message'] = "编辑成功";
					$success['wait'] = 3;
					$success['url'] = site_url("wx_reading/index");
					$this->load->view('message.php',$success);
				}else{
					$error['message'] ='编辑失败';
					$error['wait'] = 3;
					$error['url'] = site_url("wx_reading/editread?id=".$id);
					$this->load->view('message.php',$error);
				}
			}
		}else{
			$id = $_GET['id'];
			$data['read'] = $this->wxread_model->setread($id);
			$this->load->view('wx_editreading',$data);
	   		$this->load->view('footer');
		}
	}

	public function delread()
	{
		$id = $_GET['id'];
		$list = $this->wxread_model->setread($id);
		$a = 'weixin/'.$list['titlepic'];
		@unlink($a);
		if($this->wxread_model->delread($id)){
			$success['message'] = "删除成功";
			$success['wait'] = 3;
			$success['url'] = site_url("wx_reading/index");
			$this->load->view('message.php',$success);
		}else{
			$error['message'] = "删除失败";
			$error['wait'] = 3;
			$error['url'] = site_url("wx_reading/index");
			$this->load->view('message.php',$error);
		}

	}

}

 ?>