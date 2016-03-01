   <!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BestingMedia</title>
  <base href="<?php echo base_url() ;?>admin/"/>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="assets/css/jPages.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/wxapp.css">
  <script src="assets/js/jquery.min.js"></script>

</head>

<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>BestingMedia</strong> <small>后台管理模板</small>
  </div>


  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
          <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
          <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li><a href="<?php echo site_url('pc_index/admin')?>"><span class="am-icon-home"></span> 管理中心</a></li>

        <li class="admin-parent">
          <a class="am-cf" href="<?php echo site_url('pc_index/index')?>"><i class="fa fa-desktop"></i> 官网-首页设置 </a>
        </li>

        <li class="admin-parent">
          <a class="am-cf" href="<?php echo site_url('pc_index/content')?>"><i class="fa fa-desktop"></i> 官网-内容管理 </a> 
        </li>

        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav3'}"><i class="fa fa-desktop"></i> 官网-图片管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav3">
            <li><a href="<?php echo site_url('pc_index/pcbanner')?>" class="am-cf"><i class="fa fa-photo"></i>  banner</a></li>
            <li><a href="<?php echo site_url('pc_index/partner')?>"><i class="fa fa-users"></i> 合作伙伴</a></li>
            <li><a href="<?php echo site_url('pc_index/pageimg')?>"><i class="fa fa-file-image-o"></i> 页面图片修改</a></li>

          </ul>
        </li>

        <li class="admin-parent">
          <a class="am-cf" href=""><i class="fa fa-weixin"></i> 微信-banner图片管理 </a>
        </li>
        <li class="admin-parent">
          <a class="am-cf" href="<?php echo site_url('wx_index/type')?>"><i class="fa fa-weixin"></i> 微信-分类管理 </a>
        </li>
        <li class="admin-parent">
          <a class="am-cf" href=""><i class="fa fa-weixin"></i> 微信-广告管理 </a>
        </li>

      </ul>

    </div>
  </div>
  <!-- sidebar end -->

