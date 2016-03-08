<!-- content start -->
<div class="admin-content am-form wx_btn_txt">
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">用户管理</strong> / <small>useradmin</small></div>
  </div>
  
  
  <div id="container" class="clearfix">
    <div id="sidebar">
      <div id="content" class="defaults">
        <table class="am-table am-table-striped am-table-hover table-main">
          <thead>
            <tr>
              <th class="table-id">ID</th><th class="table-title">用户名</th><th class="table-author am-hide-sm-only">头像</th><th class="table-date am-hide-sm-only">手机号码</th><th class="table-date am-hide-sm-only">注册时间</th>
              <th class="table-date am-hide-sm-only">可用积分</th><th class="table-date am-hide-sm-only">更多</th><th class="table-set">操作</th>
            </tr>
          </thead>
          <tbody id="movies">
            <tr>
              
              <td>1</td>
              <td>wf</td>
              <td class="am-hide-sm-only"><img src="assets/image/user.jpg" class="userimg"  alt="用户头像"></td>
              <td class="am-hide-sm-only">12345678901</td>
              <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
              <td class="am-hide-sm-only">200积分</td>
              <td class="am-hide-sm-only"><a href="<?php echo site_url('wx_index/usermore')?>">查看</a></td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <!-- <a href="<?php echo site_url('wx_index/useredit')?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a> -->
                    <a href="" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only del"><span class="am-icon-trash-o"></span> 删除</a>
                  </div>
                </div>
              </td>
            </tr>
            
        </tbody>
      </table>
      <div class="am-cf">
        共 1 条记录
        <div class="am-fr">
          <div class="holder"></div>
        </div>
      </div>
      
    </div>
  </div>
</div>
</div>
<!-- content end -->