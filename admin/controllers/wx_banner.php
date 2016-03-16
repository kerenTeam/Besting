<?php
/*
*   微信分类banner管理
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class wx_banner extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->view('header');
        $this->load->model('wxcate_model');
        $this->load->library('upload');
    }

    // 商城+时间银行
	public function index()
	{  
        $data['banner'] = $this->wxcate_model->listbanner();
        $this->load->view('wx_banner',$data);
	    $this->load->view('footer');
	}

	public function upbanner()
    {
        if($_POST){
            $id = $_POST['id'];
             if (!empty($_FILES['fileimg']['tmp_name'])) {
                if ($this->upload->do_upload('fileimg')) {
                    //上传成功
                    $fileinfo = $this->upload->data();
                    $data['bannerpic'] = 'upload/' . $fileinfo['file_name'];
                  } else {
                    //上传失败
                    $error['message'] = $this->upload->display_errors();
                    $error['wait'] = 3;
                    $error['url'] = site_url("wx_banner/index");
                    $this->load->view('message.php',$error);
                  }
            }else{
                $data['bannerpic']=$_POST['bannerpic'];
            }
            
            if($this->wxcate_model->upbanner($data,$id)){
                $success['message'] = "编辑成功";
                $success['wait'] = 3;
                $success['url'] = site_url("wx_banner/index");
                $this->load->view('message.php',$success);
            }else{
                $error['message'] = "编辑失败";
                $error['wait'] = 3;
                $error['url'] = site_url("wx_banner/index");
                $this->load->view('message.php',$error);

            }
        }
    }


    // 城事+读物
    public function playBanner()
    {  
        $data['banner'] = $this->wxcate_model->listcitys();
   
        $this->load->view('wx_playBanner',$data);
        $this->load->view('footer');
    }


	public function upplayBanner()
    {
        if($_POST){
            $id = $_POST['id'];
             if (!empty($_FILES['fileimg']['tmp_name'])) {
                if ($this->upload->do_upload('fileimg')) {
                    //上传成功
                    $fileinfo = $this->upload->data();
                    $data['bannerpic'] = 'upload/' . $fileinfo['file_name'];
                  } else {
                    //上传失败
                    $error['message'] = $this->upload->display_errors();
                    $error['wait'] = 3;
                    $error['url'] = site_url("wx_banner/playBanner");
                    $this->load->view('message.php',$error);
                  }
            }else{
                $data['bannerpic']=$_POST['bannerpic'];
            }
            
            if($this->wxcate_model->upbanner($data,$id)){
                $success['message'] = "编辑成功";
                $success['wait'] = 3;
                $success['url'] = site_url("wx_banner/playBanner");
                $this->load->view('message.php',$success);
            }else{
                $error['message'] = "编辑失败";
                $error['wait'] = 3;
                $error['url'] = site_url("wx_banner/playBanner");
                $this->load->view('message.php',$error);

            }
        }
    }
}