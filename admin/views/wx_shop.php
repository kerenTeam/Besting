 <!-- content start -->
  <div class="admin-content">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">商家管理</strong> / <small>shop</small></div>
    </div>

    <hr/>

    <div class="am-g  cm">
      <!-- <i class="fa fa-plus"></i><input type="button" name="Submit" value="添加" onclick="AddSignRow()" />  -->
             <a href="<?php echo site_url('wx_shop/shopadd')?>" class="am-cf acadd"><span class="am-icon-plus"></span> 新增</a>
                 <input name='txtTRLastIndex' type='hidden' id='txtTRLastIndex' value="1" />
       <div id="container" class="clearfix">
<div id="sidebar">
    <div id="content" class="defaults">
        <table class="am-table am-table-striped am-table-hover table-main" id="SignFrame">
            <thead>
              <tr>
                <th class="table-id">ID</th><th class="table-title">商家名</th><th class="table-date am-hide-sm-only">logo图片(点击上传修改)</th><th class=''>所属分类</th><th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody id="movies">
          <!-- 表单stat -->
          <?php if(!empty($shops)):?>
            <?php foreach($shops as $shop):?>
            <tr>
              <td><?=$shop['sid'];?></td>
              <td><?=$shop['shopsname'];?></td>
              <!-- 这儿如果改了name值得话，上面的js也需要改 -->
              <td>
              <div class="wx_type_img">
              	
                  <!-- 图片实时预览 -->
                  <div id="preview"> <img style="border-radius: 3px;" src="<?=base_url($shop['shopspic']);?>" alt="选择图片"> </div>
				      </div>
              </td> 
               <td><?=$shop['checkid'];?></td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">

                    <a href="<?=site_url('wx_shop/upshops?sid=').$shop['sid'];?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 修改保存</button>

                     <a href="<?=site_url('wx_shop/delshop?sid=').$shop['sid'];?>" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only acadd del"><span class="am-icon-trash-o"></span> 删除</a>
                   <!-- 这儿的链接确定了的话，上面的js中的a标签也需要添加一个 -->
                  </div>
                </div>
              </td>
            </tr>
           <?php endforeach;?>
           <?php endif;?>
              <!-- 表单stat -->
       
          </tbody>
        </table>
          <div class="am-cf">
  共 <?=count($shops);?> 条记录
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