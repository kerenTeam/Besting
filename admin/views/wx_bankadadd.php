 <!-- content start -->
  <div class="admin-content">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">内容管理</strong> / <small>新增</small></div>
    </div>

    <hr/>

    <div class="am-g">

      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
      </div>

      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form action=" " method=" " enctype="multipart/form-data" class="am-form am-form-horizontal">
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">商家名</label>
            <div class="am-u-sm-9">
              <input type="text" placeholder="标题">
            </div>
          </div>

          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">链接地址</label>
            <div class="am-u-sm-9">
              <input type="url" placeholder="链接地址">
            </div>
          </div>

          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">图片</label>
            <div class="am-u-sm-9">
               <input type="file" id="imgUpload" name="img[]" onchange="previewImage(this)" class="upload-add">
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