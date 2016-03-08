

<!-- content start -->
<div class="admin-content am-form wx_btn_txt">

  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">分类管理</strong> / <small>分类</small></div>
  </div>

  <div class="am-tabs am-margin" data-am-tabs>
    <ul class="am-tabs-nav am-nav am-nav-tabs">
      <li class="am-active"><a href="#tab1">途悦商城</a></li>
      <li><a href="#tab2">时间银行</a></li>
    </ul>

    <div class="am-tabs-bd">
      <div class="am-tab-panel am-fade am-in am-active" id="tab1">
          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
              <tr><th class="table-id">ID</th><th class="table-title">标题</th><th class="table-type">图片(点击图片进行上传)</th><th class="table-author am-hide-sm-only">链接</th><th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody>
           <!-- 表单 start -->
          <?php foreach($cates as $cate):?>
          <?php if($cate['pid'] == 1):?>
          <form action="<?php echo site_url('wx_cate/updata');?>" method="post" enctype="multipart/form-data" class="am-form am-form-horizontal">
            <tr>
              <td><?=$cate['id']?></td>
              <td><input type="text" value="<?=$cate['title'];?>" class="wx_input" name='title'/></td>
              <td>
              <div class="wx_type_img">
              	 <input type="file" id="imgUpload" name="titpic" onchange="previewImage(this)" class="upload-add">
                  <!-- 图片实时预览 -->
                  <div id="preview"> <img style="border-radius: 3px;" src="<?=base_url($cate['titpic']);?>" alt="选择图片"> </div>
				       </div>
              </td>
              <td class="am-hide-sm-only"><input type="text" value="<?=$cate['linkurl'];?>" class="wx_input" /></td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <input type='hidden' value="<?=$cate['id'];?>" name='id' />
                    <button type="submit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 保存</button>
                  </div>
                </div>
              </td>
            </tr>
            </form>
          <?php endif;?>
          <?php endforeach;?>
            <!-- 表单 end -->
          </tbody>
        </table>

      </div>

      <div class="am-tab-panel am-fade" id="tab2">
          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
              <tr><th class="table-id">ID</th><th class="table-title">标题</th><th class="table-type">图片</th><th class="table-author am-hide-sm-only">链接</th><th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody>
           <?php foreach($cates as $cate):?>
          <?php if($cate['pid'] == 2):?>
          <form action="" method="" enctype="multipart/form-data" class="am-form am-form-horizontal">
            <tr>
              <td>1</td>
              <td><input type="text" value="<?=$cate['title'];?>" class="wx_input" /></td>
              <td>
              <div class="wx_type_img">
              	 <input type="file" id="imgUpload" name="img[]" onchange="previewImage(this)" class="upload-add">
                  <!-- 图片实时预览 -->
                  <div id="preview"> <img style="border-radius: 3px;" src="<?=besa_url($cate['titpic']);?>" alt="选择图片"> </div>
				</div>
              </td>
              <td class="am-hide-sm-only"><input type="text" value="<?=$cate['linkurl'];?>" class="wx_input" /></td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">

                    <button type="submit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 保存</button>
                  </div>
                </div>
              </td>
            </tr>
            </form>
          <?php endif;?>
          <?php endforeach;?>
           
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

<script type="text/javascript" src="assets/js/imgup.js"></script>
<!-- content end -->


