<!-- content start -->
<div class="admin-content am-form wx_btn_txt">
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">广告管理</strong> / <small>广告管理</small></div>
  </div>
  
  <div class="am-tabs am-margin" data-am-tabs>
    <ul class="am-tabs-nav am-nav am-nav-tabs">
      <li class="am-active"><a href="#tab1">途悦商城</a></li>
      <li><a href="#tab2">时间银行</a></li>
    </ul>
    <div class="am-tabs-bd">
      <div class="am-tab-panel am-fade am-in am-active" id="tab1">
      <a href="<?php echo site_url('wx_index/bankadadd?id=1')?>" class="am-cf"><span class="am-icon-plus"></span> 新增</a>
       <!-- <div id="container" class="clearfix">
<div id="sidebar">
    <div id="content" class="defaults"> -->
      <table class="am-table am-table-striped am-table-hover table-main wx_input">
            <thead>
              <tr>
                <th class="table-check"><input type="checkbox" class="allchexed"/></th><th class="table-id">ID</th><th class="table-title">商家名</th><th class="table-type">图片</th><th class="table-author">链接</th><th class="table-set">操作</th>
              </tr>

          </thead>
          <tbody id="movies">
          <?php foreach($adverts as $advert):?>
              <?php if($advert['pid'] == 1):?>
              <tr>
              <td><input type="checkbox" class="wx_bankcheck" /></td>
              <td><?=$advert['id'];?></td>
              <td><?=$advert['merchantname'];?></td>
              <td><img style="border-radius: 3px;" src="<?=base_url($advert['advertpic']);?>"  class="userimg" alt="商家图片">
              </td>

              <td><?=$advert['linkurl'];?></td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <a href="<?php echo site_url('pc_index/cotentedit')?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                    <a href="" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only del"><span class="am-icon-trash-o"></span> 删除</a>
                  </div>
                </div>
              </td>
            </tr>
           <?php endif;?>
          <?php endforeach;?>
            
          
            </tbody>
        </table>
        <div class="am-cf">
 
 <!--  <div class="am-fr">
    <div class="holder"></div> 
  </div>
</div>
</div>
        </div> -->
        </div>

      </div>



      <div class="am-tab-panel am-fade" id="tab2">
        <a href="<?php echo site_url('wx_index/molladadd?id=2')?>" class="am-cf"><span class="am-icon-plus"></span> 新增</a>
      <form action="" method="" enctype="multipart/form-data">
      	<!-- <div id="container" class="clearfix">
<div id="sidebar">
    <div id="content" class="defaults"> -->
      <table class="am-table am-table-striped am-table-hover table-main wx_input">
            <thead>
              <tr>
                <th class="table-check"><input type="checkbox" class="allchexed"/></th><th class="table-id">ID</th><th class="table-title">商家名</th><th class="table-type">图片</th><th class="table-author">链接</th><th class="table-set">操作</th>
              </tr>

          </thead>
          <tbody id="movies">
             <tr>
              <td><input type="checkbox" class="wx_bankcheck" /></td>
              <td>1</td>
              <td>商家名</td>
              <td><img style="border-radius: 3px;" src="" alt="商家图片">
              </td>

              <td>http://www.besting.com</td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <a href="<?php echo site_url('pc_index/cotentedit')?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                    <a href="" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only del"><span class="am-icon-trash-o"></span> 删除</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" class="wx_bankcheck" /></td>
              <td>1</td>
              <td>商家名</td>
              <td><img style="border-radius: 3px;" src=""  class="userimg" alt="商家图片">
              </td>

              <td>http://www.besting.com</td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <a href="<?php echo site_url('pc_index/cotentedit')?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                    <a href="" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only del"><span class="am-icon-trash-o"></span> 删除</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" class="wx_bankcheck" /></td>
              <td>1</td>
              <td>商家名</td>
              <td><img style="border-radius: 3px;" src="" alt="商家图片">
              </td>

              <td>http://www.besting.com</td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <a href="<?php echo site_url('pc_index/cotentedit')?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                    <a href="" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only del"><span class="am-icon-trash-o"></span> 删除</a>
                  </div>
                </div>
              </td>
            </tr>
            </tbody>
        </table>
        <div class="am-cf">
  共 15 条记录
  <!-- <div class="am-fr">
    <div class="holder"></div> 
  </div> -->
<!-- </div>
</div>
        </div> -->
        </div>
        </form>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
	$(function (){
		$('.allchexed').click(function(){
			$(this).parentsUntil('table').next('tbody').find('input[type="checkbox"]').prop("checked",this.checked);
		});
		var $subBox = $(".wx_bankcheck");
		var $subBox2 = $(".wx_mollcheck");
		var allsubbox = $subBox.parentsUntil('table').prev('thead').find('input[type="checkbox"]');
		var allsubbox2 = $subBox2.parentsUntil('table').prev('thead').find('input[type="checkbox"]');
            $subBox.click(function(){
                allsubbox.prop("checked",$subBox.length == $(".wx_bankcheck:checked").length ? true : false);
            });
            $subBox2.click(function(){
            	allsubbox2.prop("checked",$subBox2.length == $(".wx_mollcheck:checked").length ? true : false);
            })
	})
</script>
<!-- content end