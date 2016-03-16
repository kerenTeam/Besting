 <!-- content start -->
  <div class="admin-content">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">城事</strong> / <small>编辑</small></div>
    </div>

    <hr/>

    <div class="am-g">

      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
      </div>

      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
       <!-- 表单start -->
        <form action="<?=site_url('wx_city/cityadd');?>" method="post" enctype="multipart/form-data" class="am-form am-form-horizontal">
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">标题</label>
            <div class="am-u-sm-9">
              <input type="text" placeholder=" " name='titlecity'>
            </div>
          </div>
         <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">来源</label>
            <div class="am-u-sm-9">
              <input type="text" placeholder=" " name='username'>
            </div>
          </div>
         
 
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">城市图片</label>
            <div class="am-u-sm-9">
               <input type="file" id="imgUpload" name="citypic" onchange="previewImage(this)" class="upload-add">
                  <!-- 图片实时预览 -->
                  <div id="preview"> <img style="border-radius: 3px;" src=" "> </div>
            </div>
          </div>
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">内容</label>
            <div class="am-u-sm-9">
                    <!-- 编辑器 -->
            <link href="assets/uediter/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
            <script type="text/javascript" src="assets//uediter/third-party/jquery.min.js"></script>
            <script type="text/javascript" charset="utf-8" src="assets/uediter/umeditor.config.js"></script>
            <script type="text/javascript" charset="utf-8" src="assets/uediter/umeditor.js"></script>
            <script type="text/javascript" src="assets/uediter/lang/zh-cn/zh-cn.js"></script>
            <div style="margin-left: -20px;">
              <script id="myEditor" type="text/plain" style="width:90%;height:500px;" name='citycontent'></script>
            </div>
            <script type="text/javascript">
            var um = UM.getEditor('myEditor'); //实例化编辑器
            </script>
            </div>
          </div> 

          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <button type="submit" class="am-btn am-btn-primary">保存</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
 
  <!-- content end -->