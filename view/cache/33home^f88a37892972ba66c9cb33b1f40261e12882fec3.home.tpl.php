<?php
/*%%SmartyHeaderCode:21749564c86cdb5d873_81854197%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f88a37892972ba66c9cb33b1f40261e12882fec3' => 
    array (
      0 => 'D:\\program\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\blog2.0\\view\\templates\\home.tpl',
      1 => 1447855728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21749564c86cdb5d873_81854197',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.27',
  'unifunc' => 'content_568409d67f4f29_41312067',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568409d67f4f29_41312067')) {
function content_568409d67f4f29_41312067 ($_smarty_tpl) {
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
                <li><a href="#" class="dropdown-toggle" role="button" aria-expanded="false">welcome,dd</a></li>
                <li>
                    <a class="navbar-brand">
                        <img alt="Brand"  id = "img-size"class="img-circle img-responsive" src="http://localhost/projects/blog2.0/customer_file/201512310043396967.jpeg">
                    </a>
                </li>
                <li><a href="http://localhost/projects/blog2.0/controller/login_out.php" class="dropdown-toggle" role="button" aria-expanded="false">Exit</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">

    <div class="row">

        <div class="col-md-4">
        </div>

        <div class="col-md-8">

            <ol class="breadcrumb">
                <li><a href="">blog</a></li>
                <li><a href="">示例</a></li>
                <li>2015-12-31 12:44:06</li>
            </ol>

            <div class="panel panel-info">
                <!-- Default panel contents -->
                <div class="panel-heading">博客列表</div>

                <!-- Table -->
                <table class="table">
                    <tr>
                        <td class="text-success">标题</td>
                        <td class="text-success">更新时间</td>
                        <td class="text-success">操作</td>
                        <td class="text-success">热度</td>
                    </tr>

                                            <tr>

                                <td>
                                    <a href="http://localhost/projects/blog2.0/controller/blogInfor.php?id=99">哎</a>
                                </td>
                                <td>
                                    2015-12-31 12:44:01
                                </td>
                                <td>
                                    <a  href="http://localhost/projects/blog2.0/controller/del_Blog.php?id=99">删除</a>
                                    <a  href="http://localhost/projects/blog2.0/controller/update_Blog.php?id=99">编辑</a>
                                </td>
                                <td>
                                    111
                                </td>

                        </tr>
                                    </table>
            </div>

            <ul class="pagination  pull-right">
                <li>
                                            <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    
                </li>
                <!--上一页-->

                <!--页码形式(1)全部显示-->
                

                <!--页码形式(2)部分显示-->
                                    <li><a href = "http://localhost/projects/blog2.0/controller/home.php?nowpage=1"><font color = "red">1</font></a></li></li>
                                                                    
                
                                                    
                <!--下一页-->
                                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                
                <li><a href="#">共1页</a></li>


            </ul>

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