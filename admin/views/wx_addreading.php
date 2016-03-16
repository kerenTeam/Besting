 <!-- content start -->
  <div class="admin-content">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">读物</strong> / <small>新增</small></div>
    </div>

    <hr/>

    <div class="am-g">

      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
      </div>

      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
       <!-- 表单start -->
        <form action="<?=site_url('wx_reading/addread');?>" method="post" enctype="multipart/form-data" class="am-form am-form-horizontal">
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">标题</label>
            <div class="am-u-sm-9">
              <input type="text" placeholder="" value="" name='title'>
            </div>
          </div>
         <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">作者</label>
            <div class="am-u-sm-9">
              <input type="text" placeholder="" value="" name='rwiter'>
            </div>
          </div>
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">分类</label>
            <div class="am-u-sm-9"> 
                <select data-am-selected="{btnSize: 'sm'}" name='pid'>
                 
                  <option value="1">知道</option> 
                   <option value="2">格调</option> 
                    <option value="3">人间</option> 
                     <option value="4">健康</option> 
                </select> 
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">简介</label>
            <div class="am-u-sm-9">
              <textarea class="" name='profiles' rows="5" id="user-intro" placeholder=""></textarea>
              <small>20字以内进行简介...</small>
            </div>
          </div> 

          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">缩略图片</label>
            <div class="am-u-sm-9">
               <input type="file" id="imgUpload" name="readimg" onchange="previewImage(this)" class="upload-add">
                  <!-- 图片实时预览 -->
                  <div id="preview"> <img style="border-radius: 3px;" src="assets/image/user.jpg"> </div>
            </div>
          </div> 
          

          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">文章内容</label>
            <div class="am-u-sm-9">
                    <!-- 编辑器 -->
            <link href="assets/uediter/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
            <script type="text/javascript" src="assets//uediter/third-party/jquery.min.js"></script>
            <script type="text/javascript" charset="utf-8" src="assets/uediter/umeditor.config.js"></script>
            <script type="text/javascript" charset="utf-8" src="assets/uediter/umeditor.js"></script>
            <script type="text/javascript" src="assets/uediter/lang/zh-cn/zh-cn.js"></script>
            <div style="margin-left: -20px;">
              <script id="myEditor" type="text/plain" style="width:90%;height:500px;" name='content'></script>
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
  <!-- content end -->