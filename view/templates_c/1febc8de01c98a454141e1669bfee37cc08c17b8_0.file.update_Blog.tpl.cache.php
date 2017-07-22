<?php /* Smarty version 3.1.27, created on 2017-03-21 14:04:01
         compiled from "E:\xampp\htdocs\projects\blog2.0\view\templates\update_Blog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1746858d124c19a06a5_35594756%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1febc8de01c98a454141e1669bfee37cc08c17b8' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projects\\blog2.0\\view\\templates\\update_Blog.tpl',
      1 => 1450016472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1746858d124c19a06a5_35594756',
  'variables' => 
  array (
    'error' => 0,
    'title' => 0,
    'content' => 0,
    'bid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d124c1bbf6a3_13282077',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d124c1bbf6a3_13282077')) {
function content_58d124c1bbf6a3_13282077 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'E:\\xampp\\htdocs\\projects\\blog2.0\\system\\smarty_libs\\plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '1746858d124c19a06a5_35594756';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--Bootstrap 不支持 IE 古老的兼容模式。为了让 IE 浏览器运行最新的渲染模式下-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><!--移动设备支持,禁止缩放-->
    <title>我的博客</title>
    <!-- Bootstrap -->
    <?php echo '<script'; ?>
 type = "text/javascript" src="http://localhost/projects/blog2.0/view/javascript/fulltext/ckeditor.js"><?php echo '</script'; ?>
>
    <link href="http://localhost/projects/blog2.0/view/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
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
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
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
                    <h3 class="panel-title">New Blog</h3>
                </div>
                <div class="panel-body">
                    <form action = "http://localhost/projects/blog2.0/controller/update_Blog.php" method="post" >
                        <div class="form-group">
                            <div class="row">
                                <?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
                                    <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
                                <?php }?>
                                <div class="col-md-4 col-md-offset-2">
                                  <label for="exampleInputName2">Title</label>
                                  <input type="text" class="form-control" id="exampleInputName2" placeholder="Title" name = "title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="exampleInputName2">Content</label>
                                    <textarea class="form-control" rows="6" name = "content"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['content']->value,'<br />','');?>
</textarea>
                                    <?php echo '<script'; ?>
 type = "text/javascript">CKEDITOR.replace('content');<?php echo '</script'; ?>
>
                                </div>
                            </div>
                            <input class="btn btn-default pull-right" type="submit" value="Submit" name = "submit">
                            <input type="hidden" name="submitted" value='<?php echo $_smarty_tpl->tpl_vars['bid']->value;?>
'/>

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
<?php echo '<script'; ?>
 src="http://localhost/projects/blog2.0/view/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<?php echo '<script'; ?>
 src="http://localhost/projects/blog2.0/view/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>