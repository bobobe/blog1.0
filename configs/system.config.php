<?php

define("DIR_APPLICATION","E:/xampp/htdocs/projects/blog2.0");
define("DIR_CSS","E:/xampp/htdocs/projects/blog2.1/view/stylesheet");
define("DIR_JS","E:/xampp/htdocs/projects/blog2.1/view/javascript");
//define("DIR_CONF","D:/program/EasyPHP-DevServer-14.1VC11/data/localweb/projects/blog2.0/configs/system.config.php")
define("DIR_DB_CONFIG","E:/xampp/htdocs/projects/blog2.0/configs/db.config.xml");
define("DIR_XPATH","E:/xampp/htdocs/projects/blog2.0/system/xml_op/xpath.php");
define("DIR_IMG","http://localhost/projects/blog2.0/customer_file");


include_once(DIR_APPLICATION."/system/functions/functions.class.php");//系统共用函数
include_once(DIR_APPLICATION."/system/xml_op/xpath.php");//功能类

include_once(DIR_APPLICATION."/system/mysqli/mysqli.class.php");//层次调用关系
include_once(DIR_APPLICATION.'/system/Model.class.php');
include_once(DIR_APPLICATION."/model/Blogs.class.php");
include_once(DIR_APPLICATION."/model/Users.class.php");

include_once(DIR_APPLICATION.'/system/file/file.class.php');//功能类
include_once(DIR_APPLICATION."/system/functions/divide_page.php");
include_once(DIR_APPLICATION."/system/memcache/memcache.php");
include_once(DIR_APPLICATION.'/system/smarty_libs/Smarty_test.class.php');
//修改错误处理
error_reporting(E_ALL);//这样设置是为了记录错误到文件中。
ini_set('display_errors',0);//关闭错误显示(这里的错误是非语法错误，语法错误还是要显示的）
//主要是为了mysql连接不上时等不显示给用户信息
//当然也不包括用户自定义的错误显示

//修改错误日志文件配置
ini_set("error_log",DIR_APPLICATION."/error.log");//日志保存路径
ini_set("log_errors",1);

header("Content-type:text/html;Charset=utf8");//设置编码

set_error_handler('functions::error_handler');//设置自定义处理机制
?>