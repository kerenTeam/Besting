<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*   首页设置控制器
*/
class pc_option extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->view('header');
        $this->load->model('pcoption_model');
        	$this->load->library('upload');

	}


	//首页系统设置
	function index(){
		$opts = $this->pcoption_model->option();
        $options = array();
        foreach ($opts as $opt) {

            if (in_array($opt['name'], array('keywords', 'description','seotitle', 'bestingpic', 'tuyuepic', 'copyright', 'hotline','address'))) { // 操作序列化的字段
                $opt['value'] = empty($opt['value']) ? NULL : $opt['value'];
            }
            $options = array_merge($options, array($opt['name'] => $opt['value']));
        }
        // var_dump($options);
        $data['options'] = $options;


	    $this->load->view('pc_index',$data);
	    $this->load->view('footer');
	}

	//编辑
	function main(){
		if($_POST){
			$data = $_POST;
			if($_FILES != NUll){
				$arr = array('tuyuepic','bestingpic');
				foreach($arr as $val){
					if(!empty($_FILES[$val]['tmp_name'])){
						if ($this->upload->do_upload($val)) {
							# 上传成功，获取文件路径
							$fileinfo = $this->upload->data();
							$this->config->load('upload.php');
							$upload  = $this->config->item('upload_path');
							$data[$val] = $upload . $fileinfo['file_name'];
						}else{
							#上传失败
							$data['message'] = $this->upload->display_errors();
							$data['wait'] = 3;
							$data['url'] = site_url('pc_option/index');
							$this->load->view('message.php',$data);
						}
					}
				}
			}
			
	        foreach ($data as $k => $v) {
	        	$this->pcoption_model->upoption($v,$k);
	        }
	        $data['message'] = "修改成功";
			$data['wait'] = 3;
			$data['url'] = site_url('pc_option/index');
	        $this->load->view('message.php',$data);


		}else{
			$error['message']= "非法操作";
			$error['wait']= 3;
			$error['url']= site_url('pc_option/index');
			$this->load->view('message.php',$error);
		}
       
	}


	
}




?>