<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
*    微信产品控制器     时间银行+途悦商城
*/
class wx_product extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
		$this->load->model('wxproduct_model');
	}

	//时间银行
	public function bank(){
		
		$data['banks'] = $this->wxproduct_model->banklist();
		$this->load->view('wx_bankGoods',$data);
		$this->load->view('footer');
	}

	#时间银行新增产品
	public function bankadd(){
		if($_POST){
			#验证字段能不能为空
			$this->form_validation->set_rules('bankname','商品名称','required');
   			$this->form_validation->set_rules('proint','积分','required');
   			$this->form_validation->set_rules('money','市场价格','required');
   			$this->form_validation->set_rules('profiles','简介','required');
   			if($this->form_validation->run() == false){
   				#验证没有通过
   				$data['message'] = validation_errors();
				$data['wait'] = 3;
				$data['url'] = site_url('wx_product/bankadd');
				$this->load->view('message.php',$data);
   			}else{
   				#通过验证
   				#判断是否有图片上传
   				if(!empty($_FILES['img1']['tmp_name']) || !empty($_FILES['img2']['tmp_name'])){
   					var_dump('2134567');

   				}
   				
   				exit;
   			}
			
		}else{
			$data['cates'] = $this->wxproduct_model->bankcate();
			$this->load->view('wx_bankadd',$data);
			$this->load->view('footer');
		}
	}





}








?>