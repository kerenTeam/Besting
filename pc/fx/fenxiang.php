<?php
      			$jsapiTicket = 'kgt8ON7yVITDhtdwci0qeZqkXuoH4dWUC32-f6C6Ra3F98uKJHX_J9pMHJWtWv-4AVBevtnPDuERsK4szz29Ug';
 $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$url232 ="http://weixin.bestingmedia.com/alg/fx/index.php";
				$timestamp = time();
				
				$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
				$str = "";
				for ($i = 0; $i < 16; $i++) {
					$str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
				}
				$nonceStr = $str;
		
				// 这里参数的顺序要按照 key 值 ASCII 码升序排序
				$string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";
		
				$signature = sha1($string);
		
				$signPackage = array("appId" => "wx81ce7752e4f90e1d", "nonceStr" => $nonceStr, "timestamp" => $timestamp, "url" => $url, "signature" => $signature, "rawString" => $string);
var_dump($signPackage);
?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
		<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
		<title>
			I唱好声音
		</title>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">.row {
	margin: 0 3px;
}
#login p {
	margin-top: 15px;
	line-height: 20px;
	font-size: 14px;
	font-weight: bold;
}
#login img {
	cursor: pointer;
}
form {
	margin-left: 20px;
}</style>
	</head>
	<body >
		<div id="linghb" class="" style="display: none;position: fixed; top: 0px; left: 0px;  z-index: 5000;  display: none; background-position: initial initial; background-repeat: initial initial;">
			<div class="text-center " style="background-color: white;opacity: 1;border-radius:10px;height: 120px;width: 250px; margin: 70% 28%% ;">
				<div style="font-size: 1.2em;padding: 10px;">
						好东西就是要分享！试试有没有惊喜？
					</div>
					<div class="text-center" >
						<a href="index2.php"><img src="img/zlyc.png" width="70%" height="70%"/></a>
					</div>
				</div>
		</div>
		<div id="yindao" class="" style="display: none;position: fixed; top: 0px; left: 0px;  z-index: 5000;  display: none; background-position: initial initial; background-repeat: initial initial;">
			<img src="img/yindao.png" height="100%" width="100%"/>
		</div>
		
		<div>
			<img src="img/06_01.png" alt="" height="100%" width="100%" />
		</div>
		<div style="background-image: url(img/bg.jpg);background-size: cover;background-repeat: no-repeat;">
			<div>

				<img src="img/06_02.png" alt="" height="100%" width="100%" />
			</div>
			<div class="text-center" style="color: #FFEE00;">
				获得：翼支付
				<span>
				</span>现金红包！
			</div>
			<div class="text-left" style="color: white;padding-left: 3%;">
				<p>
					(1)翼支付红包为现金红包，红包金额为随机分配
				</p>
				<p>
					(2)您可以通过翼支付客户端进行话费充值、加油、购物等消费
				</p>
			</div>
			<div id="login" class="row text-center" style="margin: 3% 0;">
				<p>
				<span  style="color: white;font-size: 1.4em;">验证码：</span>
				<input id="validate" type="text" name="validate" value="" size=14>
				<img height="30px" width="70px" title="点击刷新" src="captcha.php" align="absbottom" onclick="this.src='captcha.php?'+Math.random();"></img>
				</p>
			</div>
			<div class="row text-center" style="margin: 3% 0;">
				<div class="col-xs-6" id="searchbonous">
					<img  src="img/kfhb.png" alt="" height="80%" width="80%" />
				</div>
				<div class="col-xs-6">
					<img id="getshare" src="img/99089.png" alt="" height="80%" width="80%" />
					
				</div>
			</div>
			
			<div class="text-center">
				<img  src="img/00000.png" alt="" height="100%" width="100%" />
			</div>
			<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"> </script> 
<script>
  wx.config({
	  debug:false,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
      'checkJsApi',
        'onMenuShareTimeline',
        'onMenuShareAppMessage'
    ]
  });
  wx.ready(function () {
  	  wx.checkJsApi({
                    jsApiList: [ 'onMenuShareAppMessage','onMenuShareTimeline'], // 需要检测的JS接口列表，所有JS接口列表见附录2,
                    success: function(res) {
                    }
                });
                wx.onMenuShareTimeline({
      title: '为了现金发红包 合计400000元啊 我拼咯 你还不来？！ ',
      link: 'http://www.baidu.com',
      imgUrl: 'http://www.zlzmm.com/img/logo.png',
      trigger: function (res) {
   
      },
      success: function (res) {
       $("#yindao").css("display","none");
$("#linghb").css("display","block");
//		alert("恭喜您分享成功，再获得一次领取红包的机会！");
      },
      cancel: function (res) {
        $("#yindao").css("display","none");

      },
      fail: function (res) {
        alert(JSON.stringify(res));
      }
    });wx.onMenuShareAppMessage({
      title: '为了现金发红包 合计400000元啊 我拼咯 你还不来？！ ',
      link: 'http://www.baidu.com',
      imgUrl: 'http://www.zlzmm.com/img/logo.png',
      trigger: function (res) {
   
      },
      success: function (res) {
       $("#yindao").css("display","none");
$("#linghb").css("display","block");
//		alert("恭喜您分享成功，再获得一次领取红包的机会！");
      },
      cancel: function (res) {
        $("#yindao").css("display","none");

      },
      fail: function (res) {
        alert(JSON.stringify(res));
      }
    });
  document.querySelector('#getshare').onclick = function () {
    
     $("#yindao").css("display","block");
  };

  })
  
 
  </script>
			<div class="row" style="color: white;">
				<div class="col-xs-12 text-center" >
					<div>
						长按关注<br>
						中国电信四川服务号
					</div>
					
				</div>
				
			</div>
			<div class="row" >
				<div class="col-xs-12 text-center" >
					<img src="img/right1.png" alt="" height="70%" width="70%" />
				</div>
				
			</div>
			<div class="row" style="color: white;">
				<div class="col-xs-12 text-center">
					<div>
						24小时贴心服务在身边
					</div>
					
				</div>
				
			</div>
			<div class="text-center">
				<img  src="img/00000.png" alt="" height="100%" width="100%" />
			</div>
			<div class="row" style="color: white;">
				
				<div class="col-xs-12 text-center">
					<div>
						长按关注<br>
						"IPTV4K高清"微信号
					</div>
					
				</div>
			</div>
			<div class="row" >
				
				<div class="col-xs-12 text-center">
					<img src="img/left1.png" alt="" height="70%" width="70%" />
				</div>
			</div>
			<div class="row" style="color: white;">
				
				<div class="col-xs-12 text-center">
					<div >
						抢先体验最新大片 获取最新优惠
					</div>
					
				</div>
			</div>
			
			<div id="change3" style="z-index: 20;">
				<div class="text-center" >
					<img src="img/gqsxt.png" alt=""  height="100%" width="100%"/>
				</div>
				<div class="text-center" style="color: white; font-size: 1em;font-weight: bold;padding: 20px 0;">
					高清摄像头
				</div>
				<div class="text-center" id="change1" >
					<img src="img/8988.png" alt=""  height="30%" width="30%" />
				</div>
			</div>
			
			<div class="text-center" id="change2" style="visibility: collapse;z-index: 30;margin-top:-200px" >
				<img src="img/bz.png" alt=""  height="100%" width="100%" />
			</div>
			<div>
				<img src="img/06_06.png"  height="100%" width="100%" />
			</div>
		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.cookie.js"></script>
		<script src="js/jquerysession.js"></script>
		<script type="text/javascript">
function GetRandomNum(Min, Max) {
	var Range = Max - Min;
	var Rand = Math.random();
	return (Min + Math.round(Rand * Range));
}
$(function (){
	$("#yindao").click(function(){
		$(this).css("display","none");
	})
	$("#linghb").click(function(){
		$(this).css("display","none");
	})
	$("#searchbonous").click(function(){
	var num = GetRandomNum(1, 1000);
	
	$.get("url1.php?line="+num,function(data){
		var datanum = $.cookie('url'); 
		var urldata = data;
		if(datanum >1){
		 alert("你已经领过红包了");	
		}
		else{
			$.cookie('url','2');
			var validate =$.trim($("#validate").val());
			
			$.get("validate.php?validate="+validate,function(vdata){
				if(vdata == "1"){
					window.location.href = urldata;
				}
				else{
					alert("输入的验证码有误，请重新输入");
					$.cookie('url','1');
				}
			})
			
		}
	})
})

	$("#change1").click(function(){
		$("#change2").css("visibility","visible");
		$("#change3").css("visibility","collapse");
	})
	$("#change2").click(function(){
		$(this).css("visibility","collapse");
		$("#change3").css("visibility","visible");
	})
})
		</script>
		<div style="display:none;">
	<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1256641490'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1256641490' type='text/javascript'%3E%3C/script%3E"));</script>
	</div>
		</body>
</html>