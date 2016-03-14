   <div class="footer">
    <div class="col-md-3 col-xs-6 fc fcr">
      <h4>关注Besting</h4>
    <img alt="besting" src="<?=base_url($bestingpic['value']);?>"> </div>
    <div class="col-md-3 col-xs-6 fc fcc">
      <h4>关注途悦</h4>
    <img alt="tuyue" src="<?=base_url($tuyuepic['value']);?>"> </div>
    <div class="col-md-6 col-xs-12">
      <div class="media mt">
        <div class="media-left media-middle"> <i class="fa fa-map-marker"></i> </div>
        <div class="media-body">
          <h3 class="media-heading mh">地址</h3>
          <p class="address"><?=$address['value'];?></p>
        </div>
      </div>
      <div class="media">
        <div class="media-left media-middle"> <i class="fa fa-phone"></i> </div>
        <div class="media-body">
          <h3 class="media-heading ht">咨询服务热线</h3>
          <p class="phone"><a href="tel:02886283456"><?=$hotline['value'];?></a></p>
        </div>
      </div>
    </div>
    <div class="clear"></div>
    <div class="col-md-12 copyRight"> <?=$copyright['value'];?> </div>
    <div class="clear"></div>
  </div>
</div>
<!--尾部结束 -->
</body>
</html>