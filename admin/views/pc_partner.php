 <!-- content start -->
  <div class="admin-content">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">图片管理</strong> / <small>合作伙伴</small></div>
    </div>

    <hr/> 
    <div class="am-g">
             <a href="<?php echo site_url('pc_partner/partneradd')?>" class="am-cf acadd"><span class="am-icon-plus"></span> 新增</a>
                 <input name='txtTRLastIndex' type='hidden' id='txtTRLastIndex' value="1" />
       <div id="container" class="clearfix">
<div id="sidebar">
    <div id="content" class="defaults">
        <table class="am-table am-table-striped am-table-hover table-main" id="SignFrame">
            <thead>
              <tr>
                <th class="table-id">ID</th><th class="table-title">合作商</th><th class="table-date am-hide-sm-only">图片</th><th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody id="movies">
          <?php foreach($partners as $part):?>
            <form action="<?=site_url('pc_partner/partneredit');?>" method="post" enctype="multipart/form-data" class="am-form am-form-horizontal">
            <tr>
              <td><?=$part['id'];?></td>
              <td><input type="text" name="partnername" value="<?=$part['partnername'];?>" class='am-input-sm' /></td>
              <!-- 这儿如果改了name值得话，上面的js也需要改 -->
              <td>
              <div class="wx_type_img">
              	 <input type="file" id="imgUpload" name="partnerpic" onchange="previewImage(this)" class="upload-add">
                  <!-- 图片实时预览 -->
                  <input type="hidden" value="<?=$part['partnerpic'];?>"/>
                  <div id="preview"> <img style="border-radius: 3px;" src="<?=base_url($part['partnerpic']);?>" alt="选择图片"> </div>
				</div>
              </td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <input type="hidden" value="<?=$part['id'];?>" name='id'/>
                    <button type="submit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 修改保存</button>
                     <a href="<?=site_url('pc_partner/partnerdel').'/'.$part['id'];?>" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only acadd"><span class="am-icon-trash-o"></span> 删除</a>
                   <!-- 这儿的链接确定了的话，上面的js中的a标签也需要添加一个 -->
                  </div>
                </div>
              </td>
            </tr>
            </form>
          <?php endforeach;?>
          </tbody>
        </table>
          <div class="am-cf">
  共 <?=count($partners);?> 条记录
  <div class="am-fr">
    <div class="holder"></div> 
  </div>
</div>
    
</div>
</div>
</div>
    </div>
  </div>
  <!-- content end -->