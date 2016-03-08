<!-- content start -->
<div class="admin-content am-form wx_btn_txt">
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">交易记录</strong> / <small>精品商城</small></div>
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
          <table class="am-table am-table-striped am-table-hover table-main wx_input">
            <thead>
              <tr>
                <th class="table-check"><input type="checkbox" class="allchexed"/></th><th class="table-id">订单号</th><th class="table-author am-hide-sm-only">交易时间</th><th class="table-type am-hide-sm-only">用户名</th><th class="table-title">商品名</th><th class="table-type am-hide-sm-only">图片</th><th class="table-author am-hide-sm-only">数量</th><th class="table-author am-hide-sm-only">价格</th><th class="table-author am-hide-sm-only">详情</th><th class="table-set">操作</th>
              </tr>
            </thead>
            <tbody id="movies">
              <tr>
                <td><input type="checkbox" class="wx_bankcheck" /></td>
                <td>1624545643</td>
                <td>2016年3月1日</td>
                <td>wf</td>
                <td>优自红酒</td>
                <td>
                <img src="assets/image/img8.png" class="userimg" alt="besting">
                </td>
                <td>1瓶</td>
                <td>500元</td>
                <td><a href="<?php echo site_url('wx_index/orderInfo')?>">查看</a></td>
                <td>
                  <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                     <a href="" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-exclamation"></span> 处理</a>
                    <!-- 交易未完成则显示：处理，点击进行处理。交易已经完成则显示：已完成 部分代码：<span class="am-icon-check"></span> 已完成-->
                      <a href="" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only del"><span class="am-icon-trash-o"></span> 删除</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td><input type="checkbox" class="wx_bankcheck" /></td>
                <td>1624545643</td>
                <td>2016年3月1日</td>
                <td>wf</td>
                <td>优自红酒</td>
                <td>
                <img src="assets/image/img8.png" class="userimg" alt="besting">
                </td>
                <td>1瓶</td>
                <td>500元</td>
                <td><a href="<?php echo site_url('wx_index/orderInfo')?>">查看</a></td>
                <td>
                  <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                     <a href="" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-check"></span> 已完成</a>
                    <!-- 交易未完成则显示：处理，点击进行处理。交易已经完成则显示：已完成 部分代码：<span class="am-icon-check"></span> 已完成-->
                      <a href="" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only del"><span class="am-icon-trash-o"></span> 删除</a>
                    </div>
                  </div>
                </td>

              </tr>
              
            </tbody>
          </table>
          <a href="" class="am-text-danger del"><span class="am-icon-trash-o"></span> 删除</a>

          <div class="am-cf">
            共 2 条记录
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