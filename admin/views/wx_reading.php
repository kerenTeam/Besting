<!-- content start -->
<div class="admin-content am-form wx_btn_txt">
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">读物</strong> / <small>reading</small></div>
  </div> 

   <div class="am-u-sm-12 am-u-md-6">
    <form action="" method="" >
    
      <div class="am-input-group am-input-group-sm">
        <input type="text" class="am-form-field">
        <span class="am-input-group-btn">
          <button class="am-btn am-btn-default" type="button"><span class="am-icon-search"></span>搜索</button>
        </span>
      </div>
    </form>
  </div>
<br>
    <div id="container" class="clearfix">
      <div id="sidebar">
        <div id="content" class="defaults">
         <br>
          <a href="<?php echo site_url('wx_reading/addread')?>" class="am-cf"><span class="am-icon-plus"></span> 新增</a> 
          <table class="am-table am-table-striped am-table-hover table-main wx_input">
            <thead>
              <tr>
                <th class="table-check"><input type="checkbox" class="allchexed"/></th><th class="table-id">ID</th><th class="table-title">标题</th><th class="table-type am-hide-sm-only">
                缩略图</th><th class="table-type am-hide-sm-only">作者</th><th class="table-type am-hide-sm-only">分类</th><th class="table-author am-hide-sm-only">日期</th><th class="table-set">操作</th>
              </tr>
            </thead>
            <tbody id="movies"> 
            <?php foreach($reads as $read):?>
              <tr>
                <td><input type="checkbox" class="wx_bankcheck" value=' <?=$read['id']?>' name='checkid'/></td>
                <td><?=$read['id']?></td>
                <td><?=$read['title']?></td>
                <td>
                <img src="<?=base_url('/weixin/'.$read['titlepic']);?>" class="userimg" alt="besting">
                </td>
                 <td><?=$read['rwiter'];?></td> 
                <td><?php switch ($read['pid']) {
                  case '1':
                    echo '知道';
                    break;
                  case '2':
                    echo '格调';
                    break;
                  case '3':
                    echo '人间';
                    break;
                  
                  default:
                   echo "健康";
                    break;
                }?></td>
               
                <td><?=$read['addtime'];?></td> 
                <td>
                  <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                    <a href="<?php echo site_url('wx_reading/editread?id=').$read['id'];?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                      <a href="<?php echo site_url('wx_reading/delread?id=').$read['id'];?>" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only del"><span class="am-icon-trash-o"></span> 删除</a>
                    </div>
                  </div>
                </td>
              </tr> 
            <?php endforeach;?>
            </tbody>
          </table>
          <a href="" class="am-text-danger del"><span class="am-icon-trash-o"></span> 删除</a>

          <div class="am-cf">
            共 <?=count($reads);?> 条记录
            <div class="am-fr">
              <div class="holder"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
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
<!-- content end-->