<!-- content start -->
<div class="admin-content am-form wx_btn_txt">
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">商品管理</strong> / <small>精品商城</small></div>
  </div>
  
  
  <a href="<?php echo site_url('wx_index/bankadadd')?>" class="am-cf"><i class="fa fa-plus"></i> 新增</a> 
  
    <div id="container" class="clearfix">
      <div id="sidebar">
        <div id="content" class="defaults">
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
                <td><input type="text" value="商家名" /></td>
                <td>
                  <div class="wx_type_img">
                    <input type="file" id="imgUpload" name="img[]" onchange="previewImage(this)" class="upload-add">
                    <!-- 图片实时预览 -->
                    <div id="preview"> <img style="border-radius: 3px;" src="" alt="选择图片"> </div>
                  </div>
                </td>
                <td><input type="text" value="http://www.besting.com" /></td>
                <td>
                  <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                      <a href="" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only del"><span class="am-icon-trash-o"></span> 删除</a>
                    </div>
                  </div>
                </td>
              </tr> 
            </tbody>
          </table>
          <div class="am-cf">
            共 15 条记录
            <div class="am-fr">
              <div class="holder"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button type="submit" class="am-btn am-btn-primary am-btn-xs wx_sub">提交保存</button>
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