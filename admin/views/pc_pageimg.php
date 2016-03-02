 <!-- content start -->
  <div class="admin-content">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">图片管理</strong> / <small>页面图片管理</small></div>
    </div>

    <hr/>

    <div class="am-g">

      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
      </div>

      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form action=" " method=" " enctype="multipart/form-data" class="am-form am-form-horizontal">
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">所属页面</label>
            <div class="am-u-sm-9">
              <select data-am-selected="{btnSize: 'sm'}">
            <option value="dd">首页-中国高铁生态营销圈1</option>
            <option value="dds ">首页-中国高铁生态营销圈2</option>
            <option value="w ">首页-轮播1</option>
            <option value=" f">首页-轮播2</option>
            <option value="d ">首页-轮播3</option>
            <option value=" ">高铁全媒体-中国高铁生态营销圈1</option>
            <option value=" ">高铁全媒体-中国高铁生态营销圈2</option>
            <option value=" ">火车站广告-火车站广告硬体1</option>
            <option value=" ">火车站广告-火车站广告硬体2</option>
            <option value=" ">高铁品牌-高铁品牌专列1</option>
            <option value=" ">高铁品牌-高铁品牌专列2</option>
            <option value=" ">途悦品牌-中国高铁融媒体-途悦1</option>
            <option value=" ">途悦品牌-轮播1</option>
            <option value=" ">途悦品牌-轮播2</option>
            <option value=" ">途悦品牌-轮播3</option>
            <option value=" ">创意中心</option>
            <option value=" ">加入我们1</option>
            <option value=" ">加入我们2</option>
            <option value=" ">加入我们3</option>
            <option value=" ">联系我们</option>
          </select>
            </div>
          </div>

          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">图片上传</label>
            <div class="am-u-sm-9">
               <input type="file" id="imgUpload" name="img[]" onchange="previewImage(this)" class="upload-add">
                  <!-- 图片实时预览 -->
                  <div id="preview"> <img style="border-radius: 3px;" src=" "> </div>
            </div>
          </div>

          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">图文内容</label>
            <div class="am-u-sm-9">
            <!-- 编辑器 -->
               <link href="assets/uediter/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
                  <script type="text/javascript" charset="utf-8" src="assets/uediter/umeditor.config.js"></script> 
                  <script type="text/javascript" charset="utf-8" src="assets/uediter/umeditor.js"></script> 
                  <script type="text/javascript" src="assets/uediter/lang/zh-cn/zh-cn.js"></script>
                  <div style="margin-left: -20px;"> 
                    <script id="myEditor" type="text/plain" style="width:90%;height:500px;"></script>

                  </div>
                  <script type="text/javascript">
            var um = UM.getEditor('myEditor'); //实例化编辑器
                  </script> 


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