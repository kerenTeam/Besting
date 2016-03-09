<!-- content start -->
<div class="admin-content am-form wx_btn_txt">
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">用户管理</strong> / <small>wf</small></div>
  </div>
  
  
  <div id="container" class="clearfix">
    <div class="am-g am-intro-bd">
      <div class="am-intro-right am-u-sm-12">
        <section class="am-panel am-panel-default">
          <header class="am-panel-hd">
            <h3 class="am-panel-title">个人资料</h3>
          </header>
          <div class="am-panel-bd">
             <div class="am-u-sm-6 am-u-md-3">
               <img src="<?=$user['headimg'];?>" class="userimg2" alt="用户头像">
             </div>
             <div class="am-u-sm-6 am-u-md-3">
               <p>用 户 名：<?=$user['name'];?></p>
               <p>手机号码：<?=$user['phone'];?></p>
             </div>
             <div class="am-u-sm-6 am-u-md-3">
               <p>注册时间：<?=$user['addtime']?></p>
               <p>可用积分：<?=$user['point']?>个积分</p>
             </div>
            
          </div>
        </section>
         <section class="am-panel am-panel-default">
          <header class="am-panel-hd">
            <h3 class="am-panel-title">收货地址</h3>
          </header>
          <div class="am-panel-bd">
          <?php if(!empty($address)):?>
          <?php foreach($address as $key=>$addres):?>
             <p><?=$key+1;?>：<?=$addres['province'] . $addres['city'] . $addres['area'] . $addres['address'];?>.邮编<?=$addres['code'];?></p>
           <?php endforeach;?>
         <?php else:?>
          <p>该用户还没有设置收货地址！</p>
         <?php endif;?>
           </div>
        </section>

     

      </div>
      </div>
      
    </div>
    <!-- content end -->