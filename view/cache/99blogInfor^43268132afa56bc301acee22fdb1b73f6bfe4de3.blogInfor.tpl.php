<?php
/*%%SmartyHeaderCode:10689566d5ac420fa18_72366013%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43268132afa56bc301acee22fdb1b73f6bfe4de3' => 
    array (
      0 => 'D:\\program\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\blog2.0\\view\\templates\\blogInfor.tpl',
      1 => 1450001038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10689566d5ac420fa18_72366013',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.27',
  'unifunc' => 'content_568409d41d10e1_13277762',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568409d41d10e1_13277762')) {
function content_568409d41d10e1_13277762 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--Bootstrap 不支持 IE 古老的兼容模式。为了让 IE 浏览器运行最新的渲染模式下-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><!--移动设备支持,禁止缩放-->
    <title>我的博客</title>
    <!-- Bootstrap -->
    <link href="http://localhost/projects/blog2.0/view/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link type="text/css" href="http://localhost/projects/blog2.0/view/stylesheet/boke.css" rel="stylesheet"/>
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
            <a class="navbar-brand">
                <img alt="Brand"  id = "img-size"class="img-rounded img-responsive" src="http://localhost/projects/blog2.0/view/image/blog-icon.jpg">
            </a>
            <a class="navbar-brand" href="#">DARKEST-blog</a>


        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-left" role="search" action = "search.php" method = "post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name = "keys">
                </div>

                <button type="submit" class="btn btn-default">查找blog</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://localhost/projects/blog2.0/controller/home.php">我的博客</a></li>
                        <li><a href="http://localhost/projects/blog2.0/controller/write.php">写博客</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                <li><a href="http://localhost/projects/blog2.0/controller/login_out.php" class="dropdown-toggle" role="button" aria-expanded="false">Exit</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">
    <div class="row">

        <div class="col-md-2">
        </div>

        <div class="col-md-8">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Blog</h3>
                </div>
                <div class="panel-body">
                    <form action = "write.php" method="post" >
                        <div class="form-group">
                            <blockquote>
                                <p>哎.</p>
                                <footer>author：<cite title="Source Title">Somebody</cite></footer>
                                <footer>create time：<cite title="Source Title">2015-12-31 12:44:01</cite></footer>
                                <footer>last modified time：<cite title="Source Title">2015-12-31 12:44:01</cite></footer>
                            </blockquote>

                            <div class="row">
                                <div class="col-md-12">

                                    <p class="lead"><p>今天是个好日子</p>
</p>

                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-2">
        </div>

    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://localhost/projects/blog2.0/view/jquery/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://localhost/projects/blog2.0/view/bootstrap/bootstrap.min.js"></script>

</body>
</html>
<?php }
}
?>