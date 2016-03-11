<!-- content start -->
<div class="admin-content">
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">合作伙伴</strong> / <small>新增</small></div>
  </div>
  <hr/>
  <div class="am-g">
    <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
    </div>
    <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
      <!-- 表单 start -->
      <form action="<?=site_url('pc_partner/partneradd')?>" method="post" enctype="multipart/form-data" class="am-form am-form-horizontal">
        <div class="am-form-group">
          <label class="am-u-sm-3 am-form-label">合作商</label>
          <div class="am-u-sm-9">
            <input type="text" placeholder="标题" name='partnername'>
          </div>
        </div>
        <div class="am-form-group">
          <label class="am-u-sm-3 am-form-label">图片上传</label>
          <div class="am-u-sm-9">
            <input type="file" id="imgUpload" name="partnerpic" onchange="previewImage(this)" class="upload-add">
            <!-- 图片实时预览 -->
            <div id="preview"> <img style="border-radius: 3px;" src=" "> </div>
          </div>
        </div>
        <div class="am-form-group">
          <div class="am-u-sm-9 am-u-sm-push-3">
            <button type="submit" class="am-btn am-btn-primary">保存修改</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- content end -->