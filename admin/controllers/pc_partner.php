<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*    pc   或作合作伙伴
*/
class pc_partner extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
		$this->load->model('pcpartner_model');
		
	}
	//合作商列表
	public function partner()
	{
		 
		$data['partners'] = $this->pcpartner_model->listpartner();
		$this->load->view('pc_partner',$data);
	    $this->load->view('footer');
	}
	// 新增合作商
	public function partneradd()
	{
		if($_POST){
			$this->form_validation->set_rules('partnername','合作商名称','required');
			if ($this->form_validation->run() == false) {
				# 未通过验证
				$error['message'] = validation_errors();
				$error['wait'] = 3;
				$error['url'] = site_url('pc_partner/partneradd');
				$this->load->view('message.php',$error);
			} else {
				$data = $_POST;
				if(!empty($_FILES['partnerpic']['tmp_name'])){
					$config['upload_path']      = './upload/';
					$config['allowed_types']    = 'gif|jpg|png|jpeg';
					$config['max_size']     = 3072;
					$config['file_name']     =date("Y-m-d_His");

					$this->load->library('upload', $config);
					if ($this->upload->do_upload('partnerpic')) {
						# 上传成功，获取文件路径
						$fileinfo = $this->upload->data();
						$upload  = $config['upload_path'];
						$data['partnerpic'] = $upload . $fileinfo['file_name'];
					}else{
						#上传失败
						$error['message'] = $this->upload->display_errors();
						$error['wait'] = 3;
						$error['url'] = site_url('pc_partner/partneradd');
 						$this->load->view('message.php',$error);
					}	
				}

				if($this->pcpartner_model->addpartner($data)){
					$success['message'] = "新增成功";
					$success['wait'] = 3;
					$success['url'] = site_url('pc_partner/partner');
					$this->load->view('message.php',$success);
				}else{
					$error['message'] = "新增失败";
					$error['wait'] = 3;
					$error['url'] = site_url('pc_partner/partneradd');
					$this->load->view('message.php',$error);
				}
			}
		}else{
			$this->load->view('pc_partneradd');
	    	$this->load->view('footer');
		}
	}
	// 编辑
	public function partneredit()
	{
		if($_POST){
			$this->form_validation->set_rules('partnername','合作商名称','required');
			if ($this->form_validation->run() == false) {
				# 未通过验证
				$error['message'] = validation_errors();
				$error['wait'] = 3;
				$error['url'] = site_url('pc_partner/partner');
				$this->load->view('message.php',$error);
			} else {
				$data = $_POST;
				$id = $_POST['id'];
				if(!empty($_FILES['partnerpic']['tmp_name'])){
					$config['upload_path']      = './upload/';
					$config['allowed_types']    = 'gif|jpg|png|jpeg';
					$config['max_size']     = 3072;
					$config['file_name']     =date("Y-m-d_His");

					$this->load->library('upload', $config);
					if ($this->upload->do_upload('partnerpic')) {
						# 上传成功，获取文件路径
						$fileinfo = $this->upload->data();
						$upload  = $config['upload_path'];

						$data['partnerpic'] = $upload . $fileinfo['file_name'];
					}else{
						#上传失败
						$error['message'] = $this->upload->display_errors();
						$error['wait'] = 3;
						$error['url'] = site_url('pc_partner/partneradd');
 						$this->load->view('message.php',$error);
					}	
				}else{
					$data['partnerpic'] = $_POST['partnerpic'];
				}

				if($this->pcpartner_model->editpartner($data,$id)){
					$success['message'] = "修改成功";
					$success['wait'] = 3;
					$success['url'] = site_url('pc_partner/partner');
					$this->load->view('message.php',$success);
				}else{
					$error['message'] = "修改失败";
					$error['wait'] = 3;
					$error['url'] = site_url('pc_partner/partner');
					$this->load->view('message.php',$error);
				}
			}
		
		}
	}
	// 删除
	public function partnerdel($id)
	{
		$list = (array)$this->pcpartner_model->setpartner($id);
		$a = $list['partnerpic'];
		$result = @unlink ($a);
		
		if($this->pcpartner_model->delpartner($id)){
			$data['message'] = '删除成功';
			$data['wait'] = 3;
			$data['url'] = site_url('pc_partner/partner');
			$this->load->view('message.php',$data);
		} else {
			$data['message'] = '删除失败';
			$data['wait'] = 3;
			$data['url'] = site_url('pc_partner/partner');
			$this->load->view('message.php',$data);
		}
	
	}
}


?>