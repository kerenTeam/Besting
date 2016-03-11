 <!-- content start -->
  <div class="admin-content">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">时间银行</strong> / <small>新增</small></div>
    </div>

    <hr/>

    <div class="am-g">

      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
      </div>

      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
       <!-- 表单start -->
        <form action='<?=site_url('wx_product/bankadd');?>' method="post" id="parentNode" enctype="multipart/form-data" class="am-form am-form-horizontal">
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">商品名</label>
            <div class="am-u-sm-9">
              <input type="text" placeholder="" name='bankname'>
            </div>
          </div>
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">积分</label>
            <div class="am-u-sm-9">
              <input type="text" placeholder="" name='proint'>
            </div>
          </div>

          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">价格（元）</label>
            <div class="am-u-sm-9">
              <input type="text" placeholder="" name='money'>
            </div>
          </div>
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">分类</label>
            <div class="am-u-sm-9"> 
                <select data-am-selected="{btnSize: 'sm'}" name='gid'>
                  <?php foreach($cates as $cate):?>
                   <option value="<?=$cate['id'];?>"><?=$cate['title'];?></option>
                 <?php endforeach;?>
                  
                </select> 
            </div>
          </div>
          <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">简介</label>
            <div class="am-u-sm-9">
              <textarea class="" name='profiles' rows="5" id="user-intro" placeholder="输入商品简介"></textarea>
              <small>250字以内对商品进行简介...</small>
            </div>
          </div>

          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">缩略图片</label>
            <div class="am-u-sm-9">
               <input type="file" id="imgUpload"  name="imgfile" onchange="previewImage(this)" class="upload-add">
                  <!-- 图片实时预览 -->
                  <div id="preview"> <img style="border-radius: 3px;" src=" "> </div>
            </div>
          </div>
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">详情图片</label>
            <div class="am-u-sm-9">
             <style>
     #feedback{width:1200px;margin:0 auto;}
     #feedback img{float:left;width:300px;height:300px;}
     #ZjmainstaySignaturePicture,#addpicContainer{float:left;width: 100%;}
     #addpicContainer{margin-left:5px;}
     #ZjmainstaySignaturePicture img{width: 535px;}
     #addpicContainer img{float: left;}
     .loading{display:none;background:url("http://f7-preview.awardspace.com/zjmainstay.co.cc/jQueryExample/jquery_upload_image/files/ui-anim_basic_16x16.gif") no-repeat scroll 0 0 transparent;float: left;padding:8px;margin:18px 0 0 18px;}
 </style>
                 <div id="addpicContainer">
                 <img onclick="getElementById('inputfile').click()" style="cursor:pointer;border: 1px solid #AABBCC;" title="点击添加图片" alt="点击添加图片" src="">
                 <input type="file" multiple="multiple" id="inputfile" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;"/>
                 <span class="loading"></span>
                 </div>
                 <div id="feedback"></div> 
            </div>
          </div> 

          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <button type="submit" class="am-btn am-btn-primary" onclick='doaction(this)'>保存</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript">
 $(document).ready(function(){
     //响应文件添加成功事件
     $("#inputfile").change(function(){
         //创建FormData对象
         var data = new FormData();
         //为FormData对象添加数据
         $.each($('#inputfile')[0].files, function(i, file) {
             data.append('upload_file'+i, file);
         });
         $(".loading").show();    //显示加载图片
         //发送数据
         $.ajax({
             url:'<?php echo site_url("wx_product/ajax");?>',
             type:'POST',
             data:data,
             cache: false,
             contentType: false,        //不可缺参数
             processData: false,        //不可缺参数
             success:function(data){
                 data = $(data).html();
                 //第一个feedback数据直接append，其他的用before第1个（ .eq(0).before() ）放至最前面。
                 //data.replace(/&lt;/g,'<').replace(/&gt;/g,'>') 转换html标签，否则图片无法显示。
                 if($("#feedback").children('img').length == 0) $("#feedback").append(data.replace(/&lt;/g,'<').replace(/&gt;/g,'>'));
                else $("#feedback").children('img').eq(0).before(data.replace(/&lt;/g,'<').replace(/&getElementById;/g,'>'));
                 $(".loading").hide();    //加载成功移除加载图片
             },
             error:function(){
                 alert('上传出错');
                 $(".loading").hide();    //加载失败移除加载图片
             }
         });
     });
 });
 </script>

  <!-- content end -->