


<!-- content start -->
<div class="admin-content">
<div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页设置</strong></div>
  </div>

<!-- 表单start -->
  

  <div class="am-tabs am-margin" data-am-tabs>
    <ul class="am-tabs-nav am-nav am-nav-tabs">
      <li class="am-active"><a href="#tab1">基本信息</a></li>
      <li><a href="#tab2">SEO 选项</a></li>
    </ul>

    <div class="am-tabs-bd">
     
      <div class="am-tab-panel am-fade am-in am-active" id="tab1">
       <form action="<?=site_url('pc_option/main')?>" method="post" enctype="multipart/form-data" class="am-form am-form-inline">
        <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                地址
              </div>
              <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                <input type="text" name="address" value="<?=$options['address'];?>" class="am-input-sm">
              </div>
            </div>

            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                服务热线
              </div>
              <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                <input type="text" name="hotline" value="<?=$options['hotline'];?>" class="am-input-sm">
              </div>
            </div>
           <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                版权
              </div>
              <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                <input type="text" name="copyright" value="<?=$options['copyright'];?>" class="am-input-sm">
              </div>
            </div>
            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                途悦二维码
              </div>
              <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                <input type="file" id="imgUpload" name="tuyuepic" onchange="previewImage(this)" class="upload-add">
                  <!-- 图片实时预览 -->
                  <input type="hidden" value="<?=$options['tuyuepic'];?>" name='tuyuepic'>
                  <div id="preview"> <img style="border-radius: 3px;" src="<?=base_url($options['tuyuepic']);?> "> </div>
              </div> 
            </div>

            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                百喜听二维码
              </div>
              <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                <input type="file" id="imgUpload" name="bestingpic" onchange="previewImage(this)" class="upload-add">
                  <!-- 图片实时预览 -->
                  <input type="hidden" value="<?=$options['bestingpic'];?>" name='bestingpic'>
                  <div id="preview"> <img style="border-radius: 3px;" src="<?=base_url($options['bestingpic']);?> "> </div>
              </div>
            </div>
          <div class="am-margin">
            <button type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
          </div>
      </form>
      </div>
      <div class="am-tab-panel am-fade" id="tab2">
       <form action="<?=site_url('pc_option/main');?>" method="post" enctype="multipart/form-data" class="am-form am-form-inline">
          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 标题
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input type="text" name="seotitle" value="<?=$options['seotitle'];?>" class="am-input-sm">
            </div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 关键字
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input type="text" name="keywords" value="<?=$options['keywords'];?>" class="am-input-sm">
            </div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 描述
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <textarea rows="4" name="description" value=""><?=$options['description'];?></textarea>
            </div>
          </div>
          <div class="am-margin">
          <button type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
        </div>
          </form>
      </div>

    </div>
  </div>


  
 
</div>
<!-- content end -->