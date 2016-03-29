<?php
session_start();
include_once("E:/xampp/htdocs/projects/blog2.0/configs/system.config.php");
header("Content-type:text/html;Charset=utf8");

$smarty->clearCache('blog2.0.tpl');//�������
$smarty->clearcache('home.tpl');//���ɾ�����ͣ�Ҫ��ʵʱ���£������������

if(isset($_SESSION['user']))
{
	if (isset($_GET['id']))
	{
		$data['bid'] = $_GET['id'];
		$blog = new Blogs();
		$blog->deleteBlog($data);

		header("location:home.php");
	}
}
else{
	functions::session_out('blog2.0.tpl',$smarty);
}








	

