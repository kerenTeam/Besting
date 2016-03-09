<!-- content start -->
<div class="admin-content">
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">商家管理</strong> / <small>新增</small></div>
  </div>
  <hr/>
  <div class="am-g">
    <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
    </div>
    <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
      <!-- 表单 start -->
      <form action="<?=site_url('wx_shop/upshops')?>" method="post" enctype="multipart/form-data" class="am-form am-form-horizontal">
        <div class="am-form-group">
          <label class="am-u-sm-3 am-form-label">商家名</label>
          <div class="am-u-sm-9">
            <input type="text" placeholder="标题" name='shopsname' value='<?=$shop['shopsname'];?>'>
          </div>
        </div>
        <div class="am-form-group">
          <label class="am-u-sm-3 am-form-label">商家logo</label>
          <div class="am-u-sm-9">
            <input type="file" id="imgUpload" name="shopspic" onchange="previewImage(this)" class="upload-add">
            <!-- 图片实时预览 -->
            <input type='hidden' value='<?=$shop['shopspic'];?>' name='shopspic' />
            <div id="preview"> <img style="border-radius: 3px;" src="<?=base_url($shop['shopspic']);?>"> </div>
          </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">所属分类</label>
            <div class="am-u-sm-9"> 
                <select data-am-selected="{btnSize: 'sm'}" name='checkid'>
                  <?php foreach($cates as $cate):?>
                   <option value="<?=$cate['id'];?>" <?php if($cate['id'] == $shop['checkid']){echo " selected='selected'";}?>><?=$cate['title'];?></option>
                 <?php endforeach;?>
                  
                </select> 
            </div>
        </div>
        <div class="am-form-group">
          <div class="am-u-sm-9 am-u-sm-push-3">
          <input type="hidden" value='<?=$shop['sid']?>' name='sid'/>
            <button type="submit" class="am-btn am-btn-primary">保存修改</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- content end -->