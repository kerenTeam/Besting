<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*    微信端广告管理
*/
class wx_advert extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->view('header');
		$this->load->model('advert_model');
		$this->load->library('upload');
	}

	//广告列表
	public function index(){
		$data['adverts'] = $this->advert_model->listadvert();
		$this->load->view('wx_advert',$data);
		$this->load->view('footer');
	}


	#新增广告
	public function addadvert(){
		
		if($_POST){
   			$this->form_validation->set_rules('linkurl','链接地址','required');
   			$this->form_validation->set_rules('merchantname','商家名称','required');
   			if ($this->form_validation->run() == false) {
				# 未通过验证
				$data['message'] = validation_errors();
				$data['wait'] = 3;
				$data['url'] = site_url('wx_advert/addadvert');
				$this->load->view('message.php',$data);
			} else {
				if(!empty($_FILES['imgfile']['tmp_name'])){
					if ($this->upload->do_upload('imgfile')) {
						# 上传成功，获取文件路径
						$fileinfo = $this->upload->data();
						$this->config->load('upload.php');
						$upload  = $this->config->item('upload_path');
						$data['advertpic'] = $upload . $fileinfo['file_name'];
					}else{
						#上传失败
						$data['message'] = $this->upload->display_errors();
						$data['wait'] = 3;
						$data['url'] = site_url('wx_advert/addadvert');
						$this->load->view('message.php',$data);
					}
				}

				$data['merchantname'] = $this->input->post('merchantname');
				$data['linkurl'] = $this->input->post('linkurl');
				$data['pid'] = $this->input->post('pid');

				#调用模型完成修改动作
				if ($this->advert_model->addadvert($data)) {
					$data['message'] = '新增成功';
					$data['wait'] = 3;
					$data['url'] = site_url('wx_advert/index');
					$this->load->view('message.php',$data);
				} else {
					$data['message'] = '新增失败';
					$data['wait'] = 3;
					$data['url'] = site_url('wx_advert/addadvert');
					$this->load->view('message.php',$data);
				}
			}
		}else{
		    $data['pid'] = $_GET['id'];

		    $this->load->view('wx_bankadadd',$data);
		    $this->load->view('footer');
		}
	}

	public function updata(){
		if($_POST){

			var_dump($_POST);
		}else{
			$data['pid'] = $_GET['id'];
			
			$this->load->view('wx_bankadup',$data);
			$this->load->view('footer');
		}
	}

		
}

?>