<?php
/*%%SmartyHeaderCode:2681956ceaba0cef261_31740925%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f49223485732f2e24d9aae858b51f0ecefafd4d5' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projects\\blog2.0\\view\\templates\\login.tpl',
      1 => 1448703355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2681956ceaba0cef261_31740925',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.27',
  'unifunc' => 'content_56ed87e76f8300_78512218',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ed87e76f8300_78512218')) {
function content_56ed87e76f8300_78512218 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--Bootstrap 不支持 IE 古老的兼容模式。为了让 IE 浏览器运行最新的渲染模式下-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><!--移动设备支持,禁止缩放-->
    <title>登录</title>

    <!-- Bootstrap -->
    <link href="http://localhost/projects/blog2.0/view/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img alt="Brand" src="...">
            <a class="navbar-brand" href="#">DARKEST-blog</a>
        </div>
        <a href="http://localhost/projects/blog2.0/controller/register.php" class="btn btn-default navbar-btn">register</a>
    </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">

    <div class="row">

      <div class="col-md-8">
          <div class="jumbotron">
              <h1>Hello, world!</h1>
              <p>...</p>
              <p>...</p>
              <p>...</p>
              <p>...</p>
              <p>...</p>

              <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
          </div>
      </div>

      <div class="col-md-4">
          <div class="page-header">
              <h2>登录<small>login</small></h2>
          </div>

          <div class="panel panel-default">
              <div class="panel-body">
                                </div>
              <div class="panel-footer">

                  <form action="http://localhost/projects/blog2.0/controller/login.php" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">nickname</label>
                        <input type="name" class="form-control" id="name" name="name" placeholder="Enter name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                      </div>
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" name="remeber-me"> Remember me
                          </label>
                      </div>
                      <button type="submit" name="submit" class="btn btn-default">Sign in</button>
                      <p><small>还没注册？</small><a href="http://localhost/projects/blog2.0/controller/register.php">注册</a></p>
                      <input type="hidden" name="submitted"/>
                  </form>
              </div>
          </div>

      </div>


    </div>
</div>


<script src="http://localhost/projects/blog2.0/view/jquery/jquery-1.11.3.min.js"></script>
<script src="http://localhost/projects/blog2.0/view/jquery/my-jquery.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://localhost/projects/blog2.0/view/jquery/jquery.min.js"></script>-->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://localhost/projects/blog2.0/view/bootstrap/bootstrap.min.js"></script>


</body>

</html><?php }
}
?>