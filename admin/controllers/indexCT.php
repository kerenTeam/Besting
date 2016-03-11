<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class indexCT extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->view('header');
    }


	public function index()
	{
		
	    $this->load->view('123');
	   // $this->load->view('footer');
	}

	function ajax(){
		 header('content-type:text/html charset:utf-8');
      $dir_base = "./upload/";     //文件上传根目录
      //没有成功上传文件，报错并退出。
      if(empty($_FILES)) {
          echo "<textarea>你还没有选择图片！</textarea>";
          exit(0);
      }
      
     $output = "<textarea>";
     $index = 0;        //$_FILES 以文件name为数组下标，不适用foreach($_FILES as $index=>$file)
     foreach($_FILES as $file){
         $upload_file_name = 'upload_file' . $index;        //对应index.html FomData中的文件命名
         $filename = $_FILES[$upload_file_name]['name'];
		// $type = strtolower(substr(strrchr($filename, '.'), 1)); //获取文件类型

		$pic_name = date('Y-m-d') . '_' . $filename;
		$gb_filename = iconv('utf-8','gb2312',$pic_name);    //名字转换成gb2312处理
           //文件不存在才上传
         if(!file_exists($dir_base.$gb_filename)) {
             $isMoved = false;  //默认上传失败
             $MAXIMUM_FILESIZE = 1 * 1024 * 1024;     //文件大小限制    1M = 1 * 1024 * 1024 B;
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
             $output .= "<img src='".base_url()."{$dir_base}{$pic_name}' title='{$filename}' alt='{$filename}'/>";
             $output .="<input type='hidden' value='{$dir_base}{$pic_name}' name='pic'/>";
         }else {
             $output .= "<p>上传失败！</p>";
         }
         
         $index++;
     }
     
     echo $output."</textarea>";
	}
	
}
