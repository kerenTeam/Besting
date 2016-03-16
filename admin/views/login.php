<!doctype html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <base href="<?php echo base_url();?>admin/"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管理员后台登录 | BestingMedia</title>
  <link rel="stylesheet" type="text/css" href="assets/css/htmleaf-demo.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!--[if IE]>
    <script src="./html5shiv.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="htmleaf-container">
    <div class="cont_principal">
      <header class="htmleaf-header">
        <h1>百喜听文化传媒 <span>BestingMedia AdminUser Login Interface </span></h1>
      </header>
      <div class="cont_join  ">
        <div class="cont_letras">
        <?php if(isset($error)){ echo $error;}?>
        <?php echo form_open('login/login');?>
          <h2>登陆</h2>
          <br>
          <p>用户名:</p>    
          <input type="text" class="input_text" name="username"/>
          <br><br>
          <p>密　码:</p>    
          <input type="password" class="input_text" name="password"/>

        </div>
      
        <div class="cont_btn_join">
        <input type='submit' value='登陆'/>
        </div>
      </form>
      </div>
    </div>
  </div>
  
  <script src="assets/js/index.js"></script>
</body>
</html>