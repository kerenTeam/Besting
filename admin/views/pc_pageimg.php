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
       <!-- 表单 start -->
        <form action="<?=site_url('pc_pageimg/editpage');?>" method="post" enctype="multipart/form-data" class="am-form am-form-horizontal">
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">所属页面</label>
            <div class="am-u-sm-9">
              <select data-am-selected="{btnSize: 'sm'}" onchange="upvalue(this)">
              <?php foreach($pages as $page):?>
                <option value="<?=$page['id']?>"><?=$page['bgtitle']?></option>
              <?php endforeach;?>
              </select>
            </div>
          </div>
<script>
  function upvalue(obj){
    var selv=obj.value;
    $.post("<?=site_url('pc_pageimg/setpage')?>", 
    { id: selv }, //要传递的数据 
    function(data){ 
    var json = eval("(" + data + ")");
         $("#preview img").attr("src","<?=base_url();?>"+json.bgpic);
         $("#id").val(json.id);
         $("#bgpic").val(json.bgpic);
         $(".edui-body-container p").html(json.content);

      } 
    ) 
  }
</script>
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">图片上传</label>
            <div class="am-u-sm-9">
               <input type="file" id="imgUpload" name="bgpic" onchange="previewImage(this)" class="upload-add">
                  <!-- 图片实时预览 -->
                  <input type='hidden' value="<?=$pages['0']['bgpic'];?>" id='bgpic' name="bgpic">
                  <div id="preview"> <img style="border-radius: 3px;" src="<?=base_url($pages['0']['bgpic']);?>"> </div>
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
                    <textarea name="content" id="myEditor" style="width:90%;height:500px;"><?=$pages['0']['content']?></textarea>

                  </div>
                  <script type="text/javascript">
            var um = UM.getEditor('myEditor'); //实例化编辑器
                  </script> 


            </div>
          </div>
          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <input type="hidden" id='id' value="<?=$pages['0']['id'];?>" name='id'>
              <button type="submit" class="am-btn am-btn-primary">保存修改</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- content end -->