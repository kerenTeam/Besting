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
       
    }


	public function index()
	{


	    $this->load->view('wx_banner');
	    $this->load->view('footer');
	}

	public function add(){
	
		

        $this->load->library('upload', $config);

        for($i = 1; $i < 4; $i++) {
        $upload = $this->upload->do_upload('img'.$i);       
        if($upload === FALSE) continue;
        $data = $this->upload->data();//返回上传文件的所有相关信息的数组
        $uid = $this->session->userdata('uid');
        $uploadedFiles[$i] = $data;

        $picture = array(
            'filename' => $data['file_name'],
            'albumID' => $this->uri->segment(4,0),
            'uid' => $this->session->userdata('uid'),
            'dateline' => time(),
            'describe' => '',
            'click' => 0
        );

        $this->load->model('album_model');
        $this->album_model->AddPic($picture);
        $picture = array();
    	}



	}


    public function do_upload()
    {
      
    }


	
}