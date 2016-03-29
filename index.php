<?php 
include_once('system/smarty_libs/Smarty_test.class.php');
header("Content-type:text/html;Charset=utf8");

if(isset($_COOKIE['nick_name']))
{
    include_once('./controller/home.php');//如果用户保存了cookie则直接转到主界面
}
else
{
    include_once('./controller/login.php');
}
//display之后并不会显示跳转的url，还是停留在这个页面的url

//$smarty->display($page);
//$var="hello";
//$smarty->assign('abc',$var);
//$smarty->display('view/templates/text.tpl');
?>