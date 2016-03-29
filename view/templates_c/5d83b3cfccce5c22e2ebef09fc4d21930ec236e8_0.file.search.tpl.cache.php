<?php /* Smarty version 3.1.27, created on 2016-02-25 10:13:11
         compiled from "E:\xampp\htdocs\projects\blog2.0\view\templates\search.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1186856cec5a733fb55_11152843%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d83b3cfccce5c22e2ebef09fc4d21930ec236e8' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projects\\blog2.0\\view\\templates\\search.tpl',
      1 => 1447855770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1186856cec5a733fb55_11152843',
  'variables' => 
  array (
    'welcome' => 0,
    'imgpath' => 0,
    'blogs' => 0,
    'divide_blogs' => 0,
    'lastpage' => 0,
    'page' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56cec5a7451253_15696573',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cec5a7451253_15696573')) {
function content_56cec5a7451253_15696573 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1186856cec5a733fb55_11152843';
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
                <li><a href="#" class="dropdown-toggle" role="button" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['welcome']->value;?>
</a></li>
                <li>
                    <a class="navbar-brand">
                        <img alt="Brand"  id = "img-size"class="img-circle img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['imgpath']->value;?>
">
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
                <li><?php echo date('Y-m-d h:i:s',time());?>
</li>
            </ol>
            <div class="alert alert-success" role="alert">共为您检索出<?php echo $_smarty_tpl->tpl_vars['blogs']->value->num;?>
篇博客</div>

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

                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['blog'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['blog']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['name'] = 'blog';
$_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['divide_blogs']->value->results) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['blog']['total']);
?>
                        <tr>

                            <td>
                                <a href="http://localhost/projects/blog2.0/controller/blogInfor.php?id=<?php echo $_smarty_tpl->tpl_vars['divide_blogs']->value->results[$_smarty_tpl->getVariable('smarty')->value['section']['blog']['index']]['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['divide_blogs']->value->results[$_smarty_tpl->getVariable('smarty')->value['section']['blog']['index']]['title'];?>
</a>
                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['divide_blogs']->value->results[$_smarty_tpl->getVariable('smarty')->value['section']['blog']['index']]['update_time'];?>

                            </td>
                            <td>
                                <a  href="http://localhost/projects/blog2.0/controller/del_Blog.php?id=<?php echo $_smarty_tpl->tpl_vars['divide_blogs']->value->results[$_smarty_tpl->getVariable('smarty')->value['section']['blog']['index']]['bid'];?>
">删除</a>
                                <a  href="http://localhost/projects/blog2.0/controller/update_Blog.php?id=<?php echo $_smarty_tpl->tpl_vars['divide_blogs']->value->results[$_smarty_tpl->getVariable('smarty')->value['section']['blog']['index']]['bid'];?>
">编辑</a>
                            </td>
                            <td>
                                111
                            </td>

                        </tr>
                    <?php endfor; endif; ?>
                </table>
            </div>

            <ul class="pagination  pull-right">
                <li>
                    <?php if ($_smarty_tpl->tpl_vars['lastpage']->value == 0) {?>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    <?php } else { ?>
                        <a href="http://localhost/projects/blog2.0/controller/search.php?nowpage=<?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>
" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    <?php }?>

                </li>
                <!--上一页-->

                <!--页码形式(1)全部显示-->
                

                <!--页码形式(2)部分显示-->
                <?php if ($_smarty_tpl->tpl_vars['divide_blogs']->value->total_page != 0) {?>
                    <li><a href = "http://localhost/projects/blog2.0/controller/search.php?nowpage=1"><?php if ($_smarty_tpl->tpl_vars['lastpage']->value+1 == 1) {?><font color = "red">1</font><?php } else { ?>1<?php }?></a></li></li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['lastpage']->value > 3) {?>
                    <li>..</li>
                    <?php $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['lastpage']->value+1 - ($_smarty_tpl->tpl_vars['lastpage']->value-1) : $_smarty_tpl->tpl_vars['lastpage']->value-1-($_smarty_tpl->tpl_vars['lastpage']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = $_smarty_tpl->tpl_vars['lastpage']->value-1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
                        <li><a href = "http://localhost/projects/blog2.0/controller/search.php?nowpage=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                    <?php }} ?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['lastpage']->value+1 - (2) : 2-($_smarty_tpl->tpl_vars['lastpage']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 2, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
                        <li><a href = "http://localhost/projects/blog2.0/controller/search.php?nowpage=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                    <?php }} ?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['lastpage']->value+1 != 1) {?>
                    <li><a href = "http://localhost/projects/blog2.0/controller/search.php?nowpage=<?php echo $_smarty_tpl->tpl_vars['lastpage']->value+1;?>
"><font color = "red"><?php echo $_smarty_tpl->tpl_vars['lastpage']->value+1;?>
</font></a></li>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['nextpage']->value < $_smarty_tpl->tpl_vars['divide_blogs']->value->total_page-2) {?>
                    <?php $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['nextpage']->value+1+1 - ($_smarty_tpl->tpl_vars['nextpage']->value) : $_smarty_tpl->tpl_vars['nextpage']->value-($_smarty_tpl->tpl_vars['nextpage']->value+1)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = $_smarty_tpl->tpl_vars['nextpage']->value, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
                        <li><a href = "http://localhost/projects/blog2.0/controller/search.php?nowpage=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                    <?php }} ?>
                    ...
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['divide_blogs']->value->total_page+1 - ($_smarty_tpl->tpl_vars['nextpage']->value) : $_smarty_tpl->tpl_vars['nextpage']->value-($_smarty_tpl->tpl_vars['divide_blogs']->value->total_page)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = $_smarty_tpl->tpl_vars['nextpage']->value, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
                        <li><a href = "http://localhost/projects/blog2.0/controller/search.php?nowpage=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                    <?php }} ?>
                <?php }?>

                <!--下一页-->
                <?php if ($_smarty_tpl->tpl_vars['nextpage']->value == $_smarty_tpl->tpl_vars['divide_blogs']->value->total_page+1 || $_smarty_tpl->tpl_vars['divide_blogs']->value->total_page == 0) {?>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="http://localhost/projects/blog2.0/controller/search.php?nowpage=<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                <?php }?>

                <li><a href="#">共<?php echo $_smarty_tpl->tpl_vars['divide_blogs']->value->total_page;?>
页</a></li>


            </ul>

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