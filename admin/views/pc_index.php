
<!-- content start -->
<div class="admin-content">

  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">表单</strong> / <small>form</small></div>
  </div>

  <!-- tab start -->
  <div class="am-tabs am-margin" data-am-tabs>
    <ul class="am-tabs-nav am-nav am-nav-tabs">
      <li class="am-active"><a href="#tab1">导航栏</a></li>
      <li><a href="#tab2">基本信息</a></li>
      <li><a href="#tab3">SEO 选项</a></li>
    </ul>

     <!-- 表单start -->
    <form action="" method="" enctype="multipart/form-data" class="am-form am-form-inline">

    <div class="am-tabs-bd">
      <div class="am-tab-panel am-fade am-in am-active" id="tab1">
        <div class="am-g am-margin-top">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">菜单类别</div>
          <div class="am-u-sm-8 am-u-md-10">
              <select data-am-selected="{btnSize: 'sm'}">
                <option value="option1">一级菜单</option>
                <option value="option2">二级菜单</option>
              </select>
          </div>
        </div> 

        <div class="am-g am-margin-top">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">
            名称
          </div>
          <div class="am-u-sm-8 am-u-md-10">
            <form action="" class="am-form am-form-inline">
              <div class="am-form-group am-form-icon">
                <i class="am-icon-calendar"></i>
                <input type="text" class="am-form-field am-input-sm" placeholder="时间">
              </div>
            </form>
          </div>
        </div>

      </div>

      <div class="am-tab-panel am-fade" id="tab2">
          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              文章标题
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input type="text" class="am-input-sm">
            </div>
            <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              文章作者
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
              <input type="text" class="am-input-sm">
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              信息来源
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input type="text" class="am-input-sm">
            </div>
            <div class="am-hide-sm-only am-u-md-6">选填</div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              内容摘要
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input type="text" class="am-input-sm">
            </div>
            <div class="am-u-sm-12 am-u-md-6">不填写则自动截取内容前255字符</div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
              内容描述
            </div>
            <div class="am-u-sm-12 am-u-md-10">
              <textarea rows="10" placeholder="请使用富文本编辑插件"></textarea>
            </div>
          </div> 
      </div>

      <div class="am-tab-panel am-fade" id="tab3"> 
          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 标题
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input type="text" class="am-input-sm">
            </div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 关键字
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input type="text" class="am-input-sm">
            </div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 描述
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <textarea rows="4"></textarea>
            </div>
          </div> 
      </div>

    </div>
  </div>

  <div class="am-margin">
    <button type="button" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
    <button type="button" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
  </div>
  </form>
</div>
<!-- content end -->