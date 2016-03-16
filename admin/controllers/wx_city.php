<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*    读物
*/
class wx_city extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
		$this->load->model('wxcity_model');
		$this->load->library('upload');
	}

	public function index()
	{
		$data['citys'] = $this->wxcity_model->listcity();
		//var_dumP($data);
	 	$this->load->view('wx_city',$data);
	    $this->load->view('footer');
	}


	public function cityadd()
	{
		if($_POST){
			#验证字段能不能为空
			$this->form_validation->set_rules('titlecity','标题','required');
   			$this->form_validation->set_rules('username','来源','required');
   			if($this->form_validation->run() == false){
   				#验证没有通过
   				$data['message'] = validation_errors();
				$data['wait'] = 3;
				$data['url'] = site_url('wx_city/cityadd');
				$this->load->view('message.php',$data);
   			}else{
   				#通过验证
   				$data = $_POST;
   				if(!empty($_FILES['citypic']['tmp_name'])){
					if ($this->upload->do_upload('citypic')) {
						# 上传成功，获取文件路径
						$fileinfo = $this->upload->data();
						$data['citypic'] = 'upload/' . $fileinfo['file_name'];
					}else{
						#上传失败
						$error['message'] = $this->upload->display_errors();
						$error['wait'] = 3;
						$error['url'] = site_url("wx_city/cityadd");
						$this->load->view('message.php',$error);
						}
				}

				if($this->wxcity_model->addcity($data)){
					$success['message'] = "新增成功";
					$success['wait'] = 3;
					$success['url'] = site_url("wx_city/index");
					$this->load->view('message.php',$success);
				}else{
					$error['message'] ='新增失败';
					$error['wait'] = 3;
					$error['url'] = site_url("wx_city/cityadd");
					$this->load->view('message.php',$error);
				}
			}
		}else{
			$this->load->view('wx_cityadd');
	    	$this->load->view('footer');
		}
	}

	public function editcity()
	{
		if($_POST){
			$id = $_POST['id'];
			$this->form_validation->set_rules('titlecity','标题','required');
   			$this->form_validation->set_rules('username','来源','required');
   			if($this->form_validation->run() == false){
   				#验证没有通过
   				$data['message'] = validation_errors();
				$data['wait'] = 3;
				$data['url'] = site_url('wx_city/editcity?id='.$id);
				$this->load->view('message.php',$data);
   			}else{
   				#通过验证
   				$data = $_POST;
   				if(!empty($_FILES['citypic']['tmp_name'])){
					if ($this->upload->do_upload('citypic')) {
						# 上传成功，获取文件路径
						$fileinfo = $this->upload->data();
						$data['citypic'] = 'upload/' . $fileinfo['file_name'];
					}else{
						#上传失败
						$error['message'] = $this->upload->display_errors();
						$error['wait'] = 3;
						$error['url'] = site_url("wx_city/editcity?id=".$id);
						$this->load->view('message.php',$error);
						}
				}else{
					$data['citypic'] = $_POST['citypic'];
				}

				if($this->wxcity_model->editcity($id,$data)){
					$success['message'] = "编辑成功";
					$success['wait'] = 3;
					$success['url'] = site_url("wx_city/index");
					$this->load->view('message.php',$success);
				}else{
					$error['message'] ='编辑失败';
					$error['wait'] = 3;
					$error['url'] = site_url("wx_city/editcity?id=".$id);
					$this->load->view('message.php',$error);
				}
			}
		}else{
			$id = $_GET['id'];
			$data['city'] = $this->wxcity_model->setcity($id);
			$this->load->view('wx_editcity',$data);
	   		$this->load->view('footer');
		}
	}

	public function delcity()
	{
		$id = $_GET['id'];
		$list = $this->wxcity_model->setcity($id);
		$a = 'weixin/'.$list['citypic'];
		@unlink($a);
		if($this->wxcity_model->delcity($id)){
			$success['message'] = "删除成功";
			$success['wait'] = 3;
			$success['url'] = site_url("wx_city/index");
			$this->load->view('message.php',$success);
		}else{
			$error['message'] = "删除失败";
			$error['wait'] = 3;
			$error['url'] = site_url("wx_city/index");
			$this->load->view('message.php',$error);
		}

	}

}

 ?>