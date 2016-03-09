<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*    商家管理
*/
class wx_shop extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
		$this->load->model('wxshop_model');
		$this->load->model('wxpublic_model');
		$this->load->library('upload');
	}


	public function index(){

		$data['shops'] = $this->wxshop_model->shoplist();
		//var_dumP($data);

		$this->load->view('wx_shop',$data);
	    $this->load->view('footer');
	}


	public function shopadd(){
		if($_POST){
			$this->form_validation->set_rules('shopsname','商家名称','required');
	    	if ($this->form_validation->run() == false) {
				# 未通过验证
				$data['message'] = validation_errors();
				$data['wait'] = 3;
				$data['url'] = site_url('wx_shop/shopadd');
				$this->load->view('message.php',$data);
			} else {
				if(!empty($_FILES['shopspic']['tmp_name'])){
					if ($this->upload->do_upload('shopspic')) {
						# 上传成功，获取文件路径
						$fileinfo = $this->upload->data();
						$this->config->load('upload.php');
						$upload  = $this->config->item('upload_path');
						$data['shopspic'] = $upload . $fileinfo['file_name'];
						
					}else{
						#上传失败
						$data['message'] = $this->upload->display_errors();
						$data['wait'] = 3;
						$data['url'] = site_url("wx_shop/shopadd");
						$this->load->view('message.php',$data);
						}
				}

				$data['shopsname'] = $_POST['shopsname'];
				$data['checkid'] = $_POST['checkid'];
				if($this->wxshop_model->addshop($data)){
					$data['message'] = '新增成功';
					$data['wait'] = 3;
					$data['url'] = site_url('wx_shop/index');
					$this->load->view('message.php',$data);
				}else{
					$data['message'] = '新增失败';
					$data['wait'] = 3;
					$data['url'] = site_url('wx_shop/shopadd');
					$this->load->view('message.php',$data);
				}

			}
		}else{ 
			$data['cates'] = $this->wxpublic_model->catelist();
			$this->load->view('wx_shopadd',$data);
			$this->load->view('footer');
		}
	}

	public function upshops(){
		if($_POST){
			$this->form_validation->set_rules('shopsname','商家名称','required');
	    	if ($this->form_validation->run() == false) {
				# 未通过验证
				$data['message'] = validation_errors();
				$data['wait'] = 3;
				$data['url'] = site_url('wx_shop/shopadd');
				$this->load->view('message.php',$data);
			} else {
				if(!empty($_FILES['shopspic']['tmp_name'])){
					if ($this->upload->do_upload('shopspic')) {
						# 上传成功，获取文件路径
						$fileinfo = $this->upload->data();
						$this->config->load('upload.php');
						$upload  = $this->config->item('upload_path');
						$data['shopspic'] = $upload . $fileinfo['file_name'];
						
					}else{
						#上传失败
						$data['message'] = $this->upload->display_errors();
						$data['wait'] = 3;
						$data['url'] = site_url("wx_shop/shopadd");
						$this->load->view('message.php',$data);
						}
				}else{
					$data['shopspic'] = $_POST['shopspic'];
				}
				
				$data['shopsname'] = $_POST['shopsname'];
				$data['checkid'] = $_POST['checkid'];
				$sid = $_POST['sid'];
				if($this->wxshop_model->updatashop($data,$sid)){
					$data['message'] = '修改成功';
					$data['wait'] = 3;
					$data['url'] = site_url('wx_shop/index');
					$this->load->view('message.php',$data);
				}else{
					$data['message'] = '修改失败';
					$data['wait'] = 3;
					$data['url'] = site_url('wx_shop/shopadd');
					$this->load->view('message.php',$data);
				}

			}
		}else{
			$id = $_GET['sid'];
			$data['shop'] = (array)$this->wxshop_model->shop($id);
			$data['cates'] = $this->wxpublic_model->catelist();
			$this->load->view('wx_shopupdata',$data);
			$this->load->view('footer');
		}
	}

	public function delshop(){
		$sid = $_GET['sid'];
		$list = (array)$this->wxshop_model->shop($sid);
		$a = $list['shopspic'];
		$result = @unlink ($a);
		
		if($this->wxshop_model->delshop($sid)){
			$data['message'] = '删除成功';
			$data['wait'] = 3;
			$data['url'] = site_url('wx_shop/index');
			$this->load->view('message.php',$data);
		} else {
			$data['message'] = '删除失败';
			$data['wait'] = 3;
			$data['url'] = site_url('wx_shop/index');
			$this->load->view('message.php',$data);
		}


	}





}


?>