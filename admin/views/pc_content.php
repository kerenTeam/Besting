


<!-- content start -->
<div class="admin-content">
	<div class="am-cf am-padding">
	    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">内容管理</strong></div>
	</div>

  <div class="am-tabs am-margin" data-am-tabs>
    <ul class="am-tabs-nav am-nav am-nav-tabs">
      <li class="am-active"><a href="#tab1">企业简介</a></li>
      <li><a href="#tab2">新闻中心</a></li>
    </ul> 
    <div class="am-tabs-bd">
       <!-- 企业简介列表 -->
      <div class="am-tab-panel am-fade am-in am-active" id="tab1"> 
        <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
              <tr>
                <th class="table-id">ID</th><th class="table-title">标题</th><th class="table-date am-hide-sm-only">修改日期</th><th class="table-author am-hide-sm-only">简介</th><th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody >
          <?php foreach($enterprise as $post):?>
            <tr>
              
              <td><?=$post['id'];?></td>
              <td><?=$post['title'];?></td>
              <td class="am-hide-sm-only"><?=$post['addtime'];?></td>
              <td class="am-hide-sm-only"><?=$post['postinfo'];?></td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <a href="<?php echo site_url('pc_newpost/postedit?id=').$post['id'];?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
             <?php endforeach;?> 
          </tbody>
        </table>
          <div class="am-cf">
  共 3 条记录</div>
      </div> 
      <!-- 新闻中心列表 -->
      <div class="am-tab-panel am-fade" id="tab2">
      <!-- 新增 -->
      <a href="<?php echo site_url('pc_newpost/addnew')?>" class="am-cf"><span class="am-icon-plus"></span> 新增</a>
      <div id="container" class="clearfix">
<div id="sidebar">
    <div id="content" class="defaults">
        <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
              <tr>
                <th class="table-id">ID</th><th class="table-title">标题</th><th class="table-date am-hide-sm-only">修改日期</th><th class="table-author am-hide-sm-only">简介</th><th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody id="movies">
            <?php foreach($posts as $post):?>
            <tr>
              
              <td><?=$post['id']?></td>
              <td><?=$post['title']?></td>
              <td class="am-hide-sm-only"><?=$post['addtime']?></td>
              <td class="am-hide-sm-only"><?=$post['postinfo']?></td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                     <a href="<?php echo site_url('pc_newpost/postedit?id=').$post['id'];?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                    <a href="<?=site_url('pc_newpost/postdel').'/'.$post['id'];?>" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only del"><span class="am-icon-trash-o"></span> 删除</a>
                  </div>
                </div>
              </td>
            </tr>
          <?php endforeach;?>
           
          </tbody>
        </table>
          <div class="am-cf">
  共 <?php echo count($posts);?> 条记录
  <div class="am-fr">
    <div class="holder"></div> 
  </div>
</div>
    
</div>
</div>
</div>
      </div> 
    </div> 
</div>
<!-- content end -->