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
	// 商城订单
	public function order()
	{
		
	    $this->load->view('wx_order');
	    $this->load->view('footer');
	}
	//订单详情
	public function orderInfo()
	{
		
	    $this->load->view('wx_orderInfo');
	    $this->load->view('footer');
	}
	// 时间银行兑换
	public function change()
	{
		
	    $this->load->view('wx_change');
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
	//玩儿途悦banner
	public function playBanner()
	{
		
	    $this->load->view('wx_playBanner');
	    $this->load->view('footer');
	}
	//city
	public function city()
	{
		
	    $this->load->view('wx_city');
	    $this->load->view('footer');
	}
	//编辑城事
	public function editCity()
	{
		
	    $this->load->view('wx_editCity');
	    $this->load->view('footer');
	}
	//新增城事cityadd
	public function cityadd()
	{
		
	    $this->load->view('wx_cityadd');
	    $this->load->view('footer');
	}
	//reading
	public function reading()
	{
		
	    $this->load->view('wx_reading');
	    $this->load->view('footer');
	}
	//新增读物
	public function addReading()
	{
		
	    $this->load->view('wx_addReading');
	    $this->load->view('footer');
	}
	//编辑读物
	public function editreading()
	{
		
	    $this->load->view('wx_editreading');
	    $this->load->view('footer');
	}
}