	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wx_cate extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->view('header');
        $this->load->model('wxcate_model');
        $this->load->library('upload');
    }

    public function index(){

    	$data['cates'] = $this->wxcate_model->list_cate();
    	$this->load->view('wx_type',$data);
    	$this->load->view('footer');
    }


    public function updata(){
    	$this->form_validation->set_rules('title','分类名称','required');
    	if ($this->form_validation->run() == false) {
			# 未通过验证
			$data['message'] = validation_errors();
			$data['wait'] = 3;
			$data['url'] = site_url('wx_cate/index');
			$this->load->view('message.php',$data);
		} else {
			# 通过验证，处理图片上传
			if(!empty($_FILES['titpic']['tmp_name'])){
				if ($this->upload->do_upload('titpic')) {
					# 上传成功，获取文件路径
					$fileinfo = $this->upload->data();
					
					$data['titpic'] = 'upload/' . $fileinfo['file_name'];
				}else{
					#上传失败
					$data['message'] = $this->upload->display_errors();
					$data['wait'] = 3;
					$data['url'] = site_url('admin/brand/add');
					$this->load->view('message.html',$data);
					}
				}
			}
			#获取表单提交数据
			//var_dump($_POST);
			$data['title'] = $this->input->post('title');
			$cateid = $_POST['id'];
			
			   
				#调用模型完成修改动作
			if ($this->wxcate_model->up_cate($data,$cateid)) {
				$data['message'] = '修改成功';
				$data['wait'] = 3;
				$data['url'] = site_url('wx_cate/index');
				$this->load->view('message.php',$data);
				
				
			} else {
				$data['message'] = '修改失败';
				$data['wait'] = 3;
				$data['url'] = site_url('wx_cate/index');
				$this->load->view('message.php',$data);
			}
			
			

   		}
}
?>