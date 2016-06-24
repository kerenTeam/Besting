<?php
require_once "jssdk.php";
include_once "../../config.php";
$jssdk = new JSSDK($appid,$secret);
$signPackage = $jssdk->GetSignPackage();

$news = array("Title" =>"微信公众平台开发实践", "Description"=>"本书共分10章，案例程序采用广泛流行的PHP、MySQL、XML、CSS、JavaScript、HTML5等程序语言及数据库实现。", "PicUrl" =>'http://images.cnitblog.com/i/340216/201404/301756448922305.jpg', "Url" =>'http://www.cnblogs.com/txw1958/p/weixin-development-best-practice.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

</body>

微信公众平台开发实践

本书共分10章，案例程序采用广泛流行的PHP、MySQL、XML、CSS、JavaScript、HTML5等程序语言及数据库实现。
<img src="http://images.cnitblog.com/i/340216/201404/301756448922305.jpg">

<a href="http://www.cnblogs.com/txw1958/p/weixin-development-best-practice.html">vfdrstbndaen</a>


<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  /*
   * 注意：
   * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
   * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
   * 3. 常见问题及完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
   *
   * 开发中遇到问题详见文档“附录5-常见错误及解决办法”解决，如仍未能解决可通过以下渠道反馈：
   * 邮箱地址：weixin-open@qq.com
   * 邮件主题：【微信JS-SDK反馈】具体问题
   * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
   */
  wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
                 'checkJsApi',
                 'openLocation',
                 'getLocation',
                 'onMenuShareTimeline',
                 'onMenuShareAppMessage',
                 'onMenuShareQQ',
                 'closeWindow'
    ]
  });
  wx.ready(function () {
      wx.onMenuShareAppMessage({
                title: '<?php echo $news['Title'];?>',
                desc: '<?php echo $news['Description'];?>',
                link: '<?php echo $news['Url'];?>',
                imgUrl: '<?php echo $news['PicUrl'];?>',
                trigger: function (res) {
                  // 不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
                  // alert('用户点击发送给朋友');
                },
                success: function (res) {
                  // alert('已分享');
                },
                cancel: function (res) {
                  // alert('已取消');
                },
                fail: function (res) {
                  // alert(JSON.stringify(res));
                }
              });

              wx.onMenuShareTimeline({
                title: '<?php echo $news['Title'];?>',
                link: '<?php echo $news['Url'];?>',
                imgUrl: '<?php echo $news['PicUrl'];?>',
                trigger: function (res) {
                  // 不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
                  // alert('用户点击分享到朋友圈');
                },
                success: function (res) {
                  // alert('已分享');
                },
                cancel: function (res) {
                  // alert('已取消');
                },
                fail: function (res) {
                  // alert(JSON.stringify(res));
                }
              });
  });
</script>
</html>
