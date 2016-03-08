<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wx_index extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->view('header');
    }
	public function type()
	{
		
	    $this->load->view('wx_type');
	    $this->load->view('footer');
	}
	public function pic()
	{
		
	    $this->load->view('wx_pic');
	    $this->load->view('footer');
	}
	public function advert()
	{
		
	    $this->load->view('wx_advert');
	    $this->load->view('footer');
	}
	public function bankadadd()
	{
		
	    $this->load->view('wx_bankadadd');
	    $this->load->view('footer');
	}
	public function molladadd()
	{
		
	    $this->load->view('wx_molladadd');
	    $this->load->view('footer');
	}
	public function shop()
	{
		
	    $this->load->view('wx_shop');
	    $this->load->view('footer');
	}
	public function shopadd()
	{
		
	    $this->load->view('wx_shopadd');
	    $this->load->view('footer');
	}
	public function bank()
	{
		
	    $this->load->view('wx_bankGoods');
	    $this->load->view('footer');
	}
	public function bankadd()
	{
		
	    $this->load->view('wx_bankadd');
	    $this->load->view('footer');
	}
	public function bankedit()
	{
		
	    $this->load->view('wx_bankedit');
	    $this->load->view('footer');
	}
	public function mall()
	{
		
	    $this->load->view('wx_mallGoods');
	    $this->load->view('footer');
	}
	public function malladd()
	{
		
	    $this->load->view('wx_malladd');
	    $this->load->view('footer');
	}
	public function malledit()
	{
		
	    $this->load->view('wx_malledit');
	    $this->load->view('footer');
	}
	public function users()
	{
		
	    $this->load->view('wx_users');
	    $this->load->view('footer');
	}
	public function usermore()
	{
		
	    $this->load->view('wx_usermore');
	    $this->load->view('footer');
	}
	public function suggestion()
	{
		
	    $this->load->view('wx_suggestion');
	    $this->load->view('footer');
	}
	

	public function message(){
				$data['message'] = '修改成功';
				$data['wait'] = 1200;
				$data['url'] = site_url('wx_cate/index');
				$this->load->view('message',$data);
				$this->load->view('footer');
	}
}