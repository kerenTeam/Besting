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
		$this->load->library('upload');
		$this->load->helper('url');
	}

	//时间银行
	public function bank(){
		
		$data['banks'] = $this->wxproduct_model->banklist();
		$this->load->view('wx_bankGoods',$data);
		$this->load->view('footer');
	}

	#精品商城
	public function mall(){

		$data['malls'] = $this->wxproduct_model->malllist();

		$this->load->view('wx_mallGoods',$data);
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
   				if ($this->upload->do_upload('imgfile')) {
						# 上传成功，获取文件路径
						$fileinfo = $this->upload->data();
						
						$data['bankpic'] = 'upload/' . $fileinfo['file_name'];	
				}else{
						#上传失败
						$error['message'] = $this->upload->display_errors();
						$error['wait'] = 3;
						$error['url'] = site_url("wx_product/bankadd");
						$this->load->view('message.php',$error);
				}
				if(!empty($_POST['pic'])){
					$data['listpic'] = implode(" | ",$_POST['pic']);
				}
				$data['bankname'] = $this->input->post('bankname');
				$data['proint'] = $this->input->post('proint');
				$data['money'] = $this->input->post('money');
				$data['gid'] = $this->input->post('gid');
				$data['profiles'] = $this->input->post('profiles');
				if($this->wxproduct_model->addbank($data)){
					$data['message'] = "新增成功";
					$data['wait'] = 3;
					$data['url'] = site_url("wx_product/bank");
					$this->load->view('message.php',$data);
			
				}else{
					$error['message'] = "新增失败";
					$error['wait'] = 3;
					$error['url'] = site_url("wx_product/bankadd");
					$this->load->view('message.php',$error);
			
				}
   		    } 
			
		}else{
			$data['cates'] = $this->wxproduct_model->cate('1');
			$this->load->view('wx_bankadd',$data);
			$this->load->view('footer');
 		}
	}
	//时间银行商品编辑
	public function bankedit(){
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
   				if(!empty($_FILES['bankpic']['tmp_name'])){
					if ($this->upload->do_upload('bankpic')) {
						# 上传成功，获取文件路径
						$fileinfo = $this->upload->data();
						$data['bankpic'] ='upload/' . $fileinfo['file_name'];
						
					}else{
						#上传失败
						$error['message'] = $this->upload->display_errors();
						$error['wait'] = 3;
						$error['url'] = site_url("wx_product/bankedit");
						$this->load->view('message.php',$error);
						}
				}else{
					$data['bankpic'] = $this->input->post('bankpic');
				}
				if(!empty($_POST['pic'])){
					$data['listpic'] = implode(" | ",$_POST['pic']);
				}else{
					$data['listpic'] = implode(" | ",$_POST['listpic']);
				}

				$data['bankname'] = $this->input->post('bankname');
				$data['proint'] = $this->input->post('proint');
				$data['money'] = $this->input->post('money');
				$data['gid'] = $this->input->post('gid');
				$data['profiles'] = $this->input->post('profiles');
				$id = $_POST['id'];
				if($this->wxproduct_model->bankedit($data,$id)){
					$data['message'] = "修改成功";
					$data['wait'] = 3;
					$data['url'] = site_url("wx_product/bank");
					$this->load->view('message.php',$data);
			
				}else{
					$error['message'] = "修改失败";
					$error['wait'] = 3;
					$error['url'] = site_url("wx_product/bankedit?id".$id);
					$this->load->view('message.php',$error);
			
				}
   		    } 
		}else{
			$id=$_GET['id'];
			$data['bank'] = (array)$this->wxproduct_model->setbank($id);
			$data['cates'] = $this->wxproduct_model->cate('1');
			$this->load->view('wx_bankedit',$data);
			$this->load->view('footer');
		}
	}

	//时间银行删除商品
	public function delbank($id)
	{
		
		$list = (array)$this->wxproduct_model->setbank($id);
		$a = 'weixin/' . $list['bankpic'];
		//
		$result = @unlink ($a);
		$listpic = explode(' | ', $list['listpic']);
		for ($i=0; $i < count($listpic); $i++) { 
			$u = 'weixin/'.$listpic[$i];
			@unlink ($u);
		}

		if($this->wxproduct_model->delbank($id)){
			$data['message'] = '删除成功';
			$data['wait'] = 3;
			$data['url'] = site_url('wx_product/bank');
			$this->load->view('message.php',$data);
		} else {
			$data['message'] = '删除失败';
			$data['wait'] = 3;
			$data['url'] = site_url('wx_product/bank');
			$this->load->view('message.php',$data);
		}
	}

	#新增精品商城商品
	public function malladd()
	{
		if($_POST){
			$this->form_validation->set_rules('goodsname','商品名称','required');
   			$this->form_validation->set_rules('price','单价','required');
   			if($this->form_validation->run() == false){
   				#验证没有通过
   				$error['message'] = validation_errors();
				$error['wait'] = 3;
				$error['url'] = site_url('wx_product/malladd');
				$this->load->view('message.php',$error);
   			}else{
   				if(!empty($_FILES['goodspic']['tmp_name'])){
					if ($this->upload->do_upload('goodspic')) {
						# 上传成功，获取文件路径
						$fileinfo = $this->upload->data();
						
						$data['listpic'] = 'upload/' . $fileinfo['file_name'];
						
					}else{
						#上传失败
						$error['message'] = $this->upload->display_errors();
						$error['wait'] = 3;
						$error['url'] = site_url("wx_product/malladd");
						$this->load->view('message.php',$error);
						}
				}else{
					$error['message'] = '商品图片不能为空';
					$error['wait'] = 3;
					$error['url'] = site_url('wx_product/malladd');
					$this->load->view('message.php',$error);
				}
				if(!empty($_POST['pic'])){
					$data['goodspic'] = implode(" | ",$_POST['pic']);
				}
				if(!empty($_POST['color'])){
					$data['color'] = implode(" | ",$_POST['color']);
				}

				$data['goodsname'] =$_POST['goodsname'];
				$data['specifications']=$_POST['specifications'];
				$data['price']=$_POST['price'];
				$data['numbers']=$_POST['numbers'];
				$data['sid']=$_POST['sid'];
				$data['gid']=$_POST['gid'];
				$data['profiles']=$_POST['profiles'];
				if($this->wxproduct_model->addmall($data)){
					$success['message'] = "新增成功"; 
					$success['wait'] = 3; 
					$success['url'] =  site_url('wx_product/mall'); 
					$this->load->view('message.php',$success);

				}else{
					$error['message'] = '新增失败';
					$error['wait'] = 3;
					$error['url'] = site_url('wx_product/malladd');
					$this->load->view('message.php',$error);
				}
   			}
		}else{
			$data['shops'] = $this->wxproduct_model->setshops();
			 $data['cates'] = $this->wxproduct_model->cate('2');
			// var_dump($data);
			 $this->load->view('wx_malladd',$data);
	   		 $this->load->view('footer');
		}
	}

	// 商城商品编辑
	public function malledit()
	{
		if($_POST){
			$this->form_validation->set_rules('goodsname','商品名称','required');
   			$this->form_validation->set_rules('price','单价','required');
   			if($this->form_validation->run() == false){
   				#验证没有通过
   				$error['message'] = validation_errors();
				$error['wait'] = 3;
				$error['url'] = site_url('wx_product/malladd');
				$this->load->view('message.php',$error);
   			}else{
   				$id = $_POST['id'];
   				if(!empty($_FILES['bankpic']['tmp_name'])){
				
					if ($this->upload->do_upload('listpic')) {
						# 上传成功，获取文件路径
						$fileinfo = $this->upload->data();
						
						$data['listpic'] = 'upload/' . $fileinfo['file_name'];
					}else{
						#上传失败
						$error['message'] = $this->upload->display_errors();
						$error['wait'] = 3;
						$error['url'] = site_url("wx_product/malledit?id=".$id);
						$this->load->view('message.php',$error);
					}
				}else{
					$data['listpic'] = $_POST['listpic'];
				}
				
				if(!empty($_POST['pic'])){
					$data['goodspic'] = implode(" | ",$_POST['pic']);
				}else{
					$data['goodspic'] = implode(" | ",$_POST['goodspic']);
				}
				if(!empty($_POST['color'])){
					$data['color'] = implode(" | ",$_POST['color']);
				}

				$data['goodsname'] =$_POST['goodsname'];
				$data['specifications']=$_POST['specifications'];
				$data['price']=$_POST['price'];
				$data['numbers']=$_POST['numbers'];
				$data['sid']=$_POST['sid'];
				$data['gid']=$_POST['gid'];
				$data['profiles']=$_POST['profiles'];
			
				if($this->wxproduct_model->editmall($data,$id)){
					$success['message'] = "修改成功"; 
					$success['wait'] = 3; 
					$success['url'] =  site_url('wx_product/mall'); 
					$this->load->view('message.php',$success);

				}else{
					$error['message'] = '修改失败';
					$error['wait'] = 3;
					$error['url'] = site_url('wx_product/malledit?id='.$id);
					$this->load->view('message.php',$error);
				}
   			}
		}else{
			 $id = $_GET['id'];
			 $data['shops'] = $this->wxproduct_model->setshops();
			 $data['cates'] = $this->wxproduct_model->cate('2');
			 $data['mall'] = (array)$this->wxproduct_model->setmall($id);

			 $this->load->view('wx_malledit',$data);
	   		 $this->load->view('footer');
		}
	}

	//删除商城产品
	public function delmall($id)
	{
		$list = (array)$this->wxproduct_model->setmall($id);
		$a = 'weixin/'.$list['listpic'];
		$result = @unlink ($a);
		$listpic = explode(' | ', $list['goodspic']);
		for ($i=0; $i < count($listpic); $i++) { 
			$u = 'weixin/'.$listpic[$i];
			 @unlink ($u);
		}

		if($this->wxproduct_model->delmall($id)){
			$data['message'] = '删除成功';
			$data['wait'] = 3;
			$data['url'] = site_url('wx_product/mall');
			$this->load->view('message.php',$data);
		} else {
			$data['message'] = '删除失败';
			$data['wait'] = 3;
			$data['url'] = site_url('wx_product/mall');
			$this->load->view('message.php',$data);
		}
	}


















	#产品列表图片上传类
	function ajax(){
		 header('content-type:text/html charset:utf-8');
		 $this->config->load('upload.php');
		 $dir_base  = $this->config->item('upload_path');
	    // $dir_base = "./upload/";     //文件上传根目录
	      //没有成功上传文件，报错并退出。

	      if(empty($_FILES)) {
	          echo "<textarea>你没有上传图片！</textarea>";
	          exit(0);
	      }
      
     $output = "<textarea>";
     $index = 0;        //$_FILES 以文件name为数组下标，不适用foreach($_FILES as $index=>$file)
     foreach($_FILES as $file){
         $upload_file_name = 'upload_file' . $index;        //对应index.html FomData中的文件命名
         $filename = $_FILES[$upload_file_name]['name'];
		 $type = strtolower(substr(strrchr($filename, '.'), 1)); //获取文件类型

		$pic_name = date('Y-m-d_') .rand(10000, 99999). '.' . $type;
		$gb_filename = iconv('utf-8','gb2312',$pic_name);    //名字转换成gb2312处理
           //文件不存在才上传
         if(!file_exists($dir_base.$gb_filename)) {
             $isMoved = false;  //默认上传失败
             $MAXIMUM_FILESIZE = 2 * 1024 * 1024;     //文件大小限制    1M = 1 * 1024 * 1024 B;
             $rEFileTypes = "/^\.(jpg|jpeg|gif|png){1}$/i"; 
             if ($_FILES[$upload_file_name]['size'] <= $MAXIMUM_FILESIZE && 
                 preg_match($rEFileTypes, strrchr($gb_filename, '.'))) {    
                 $isMoved = @move_uploaded_file ( $_FILES[$upload_file_name]['tmp_name'], $dir_base.$gb_filename);        //上传文件
           }
       }else{
           $isMoved = true;    //已存在文件设置为上传成功
       }
       if($isMoved){
           //输出图片文件<img>标签
           //注：在一些系统src可能需要urlencode处理，发现图片无法显示，
           //    请尝试 urlencode($gb_filename) 或 urlencode($filename)，不行请查看HTML中显示的src并酌情解决。
             $output .= "<img src='".base_url()."/weixin/upload/{$pic_name}' title='{$filename}' alt='{$filename}'/>";
             $output .="<input type='hidden' value='upload/{$pic_name}' name='pic[]'/>";
         }else {
              $output .= "<p>上传失败！</p>";
         }
         
         $index++;
     }
     
     echo $output."</textarea>";
	}
}






?>