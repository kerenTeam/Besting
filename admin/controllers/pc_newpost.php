<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*    企业简介+新闻中心
*/
class pc_newpost extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
		$this->load->model('pcpost_model');
		$this->load->library('upload');
	}
	//
	public function content()
	{
		$data['posts'] = $this->pcpost_model->listpost();
		$data['enterprise'] = $this->pcpost_model->enterprise();
		$this->load->view('pc_content',$data);
	    $this->load->view('footer');
	}

	public function addnew()
	{
		if($_POST){
			$this->form_validation->set_rules('title','新闻标题','required');
			$this->form_validation->set_rules('postinfo','新闻简介','required');
	    	if ($this->form_validation->run() == false) {
				# 未通过验证
				$error['message'] = validation_errors();
				$error['wait'] = 3;
				$error['url'] = site_url('pc_newpost/addnew');
				$this->load->view('message.php',$error);
			} else {
				$data = $_POST;
				if(!empty($_FILES['postpic']['tmp_name'])){
					if ($this->upload->do_upload('postpic')) {
						# 上传成功，获取文件路径
						$fileinfo = $this->upload->data();
						$this->config->load('upload.php');
						$upload  = $this->config->item('upload_path');
						$data['postpic'] = $upload . $fileinfo['file_name'];
					}else{
						#上传失败
						$error['message'] = $this->upload->display_errors();
						$error['wait'] = 3;
						$error['url'] = site_url('pc_newpost/addnew');
 						$this->load->view('message.php',$error);
					}	
				}
				
				if($this->pcpost_model->addpost($data)){
					$success['message'] = "新增成功";
					$success['wait'] = 3;
					$success['url'] = site_url('pc_newpost/content');
					$this->load->view('message.php',$success);
				}else{
					$error['message'] = "新增失败";
					$error['wait'] = 3;
					$error['url'] = site_url('pc_newpost/addnew');
					$this->load->view('message.php',$error);
				}

			}

		}else{
			$this->load->view('pc_postadd');
		    $this->load->view('footer');
	    }
	}
}
?>