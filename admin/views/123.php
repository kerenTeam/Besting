 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
     <title>Easy Ajax FormData Upload Multiple Images</title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta http-equiv="Content-Language" content="zh-CN" />

        <script type="text/javascript" src="http://www.sucaihuo.com/Public/js/other/jquery.js"></script>
 </head>
 <body>
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
     <!-- 利用multiple="multiple"属性实现添加多图功能 -->
     <!-- position: absolute;left: 10px;top: 5px;只针对本用例将input隐至图片底下。-->
     <!-- height:0;width:0;z-index: -1;是为了隐藏input，因为Chrome下不能使用display:none，否则无法添加文件 -->
     <!-- onclick="getElementById('inputfile').click()" 点击图片时则点击添加文件按钮 -->
     <img onclick="getElementById('inputfile').click()" style="cursor:pointer;border: 1px solid #AABBCC;" title="点击添加图片" alt="点击添加图片" src="http://f7-preview.awardspace.com/zjmainstay.co.cc/jQueryExample/jquery_upload_image/files/addfile.jpg">
     <input type="file" multiple="multiple" id="inputfile" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;"/>
     <span class="loading"></span>
 </div>
 <div id="feedback"></div>    <!-- 响应返回数据容器 -->
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
             url:'<?php echo site_url("indexCT/ajax");?>',
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
                else $("#feedback").children('img').eq(0).before(data.replace(/&lt;/g,'<').replace(/&gt;/g,'>'));
                 $(".loading").hide();    //加载成功移除加载图片
             },
             error:function(){
                // alert('上传出错');
                   if($("#feedback").children('img').length == 0) $("#feedback").append(data.replace(/&lt;/g,'<').replace(/&gt;/g,'>'));
                else $("#feedback").children('img').eq(0).before(data.replace(/&lt;/g,'<').replace(/&gt;/g,'>'));
                 $(".loading").hide();    //加载失败移除加载图片
             }
         });
     });
 });
 </script>
 </body>
 </html>