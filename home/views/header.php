<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?=$keywords['value'];?>">
    <meta name="description" content="<?=$description['value'];?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title><?=$seotitle['value'];?>-Besting Media</title>
    <base href="<?php echo base_url() ;?>home/"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <!-- END .layout-left-flyout -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.cbFlyout.js"></script>
    <script>
          $(document).ready(function(){
            $('.the-nav').cbFlyout();
    var urlstr = location.href;
    //alert((urlstr + '/').indexOf($(this).attr('href')));
    var urlstatus=false;
    $(".dropdown a").each(function () {
    if ((urlstr + '/').indexOf($(this).attr('href')) > -1&&$(this).attr('href')!='') {
    $(this).addClass('currentc'); urlstatus = true;
    } else {
    $(this).removeClass('currentc');
    }
    });
    if (!urlstatus) {$(".dropdown a").eq(0).addClass('currentc'); }
          });
    </script>
  </head>
  <body oncontextmenu="return false" ondragstart="return false" onselectstart="return false" onselect="document.selection.empty()" oncopy="document.selection.empty()" onbeforecopy="return false" onmouseup="document.selection.empty()">
    <div id="left-flyout-nav" class="layout-left-flyout visible-sm"></div>
    <div class="layout-right-content">
      <header class="the-header">
        <div class="navbar container">
          <!--   <a href="index.html" class="logo"></a> -->
          <!-- Trigger -->
          <a class="btn-navbar btn-navbar-navtoggle btn-flyout-trigger" href="javascript:;"> <span class="icon-bar btn-flyout-trigger"></span> <span class="icon-bar btn-flyout-trigger"></span> <span class="icon-bar btn-flyout-trigger"></span> <img src="assets/img/Image (20).png" id="logo" alt="beasting media"> </a>
          
          <!-- Structure -->
          <nav class="the-nav nav-collapse clearfix"> <a href="index.html" class="logo"><img src="assets/img/Image (20).png" id="logo" alt="beasting media"></a>
          <ul class="nav nav-pill pull-left">
            <li class="dropdown"> <a href="index.html"><i class="fa fa-home"></i> 首页 </a> </li>
            <li class="dropdown"> <a href="<?=site_url('home/besting');?>">BESTING </a>
            <ul class="subnav su1">
              <li><a href="<?=site_url('home/besting');?>">企业简介</a></li>
              <li><a href="<?=site_url('home/news');?>">新闻中心</a></li>
            </ul>
          </li>
          <li class="dropdown"> <a href="<?=site_url('home/allmedia');?>">高铁全媒体 </a>
          <ul class="subnav su2">
            <li><a href="<?=site_url('home/hardware');?>">火车站广告</a></li>
            <li><a href="<?=site_url('home/rail');?>">高铁品牌</a></li>
            <li><a href="<?=site_url('home/tuyue');?>">途悦品牌</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a href="<?=site_url('home/tuyue');?>">途悦 </a>
        <ul class="subnav su3">
          <li><a href="<?=site_url('home/tuyue');?>#rh">融合媒体</a></li>
          <li><a href="<?=site_url('home/tuyue');?>#jx">精选商城</a></li>
          <li><a href="<?=site_url('home/tuyue');?>#tb">时间银行</a></li>
        </ul>
      </li>
      <li class="dropdown"> <a href="<?=site_url('home/creation');?>">创意中心 </a> </li>
      <li class="dropdown"> <a href="<?=site_url('home/join');?>">加入我们 </a> </li>
      <li class="dropdown"> <a href="<?=site_url('home/contactus');?>">联系我们 </a> </li>
    </ul>
  </nav>
</div>
</header>