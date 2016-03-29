<?php
session_start();
include_once("E:/xampp/htdocs/projects/blog2.0/configs/system.config.php");

$smarty->clearCache('blog2.0.tpl');

unset($_SESSION);//删除session文件中的内容
session_destroy();//删除session文件
setcookie('nick_name','',time()-100,'/');//删除cookie


functions::login_out($smarty);

?>