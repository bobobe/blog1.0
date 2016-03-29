<?php
session_start();
include_once("E:/xampp/htdocs/projects/blog2.0/configs/system.config.php");
//$smarty->compile_check = true;//模板文件被修改才重设缓存。
$smarty->clearCache('update_Blog.tpl');//清除缓存
//$smarty->clearcache('home.tpl');//首先清除cache缓存
//$smarty->clearcache('home.tpl');//首先清除home cache缓存
$smarty->clearcache('blogInfor.tpl');//实时显示修改过的bolg信息

if(isset($_SESSION['user']))
{

	$blog = new Blogs();
	if (isset($_GET['id']))
	{
		$data['bid'] = $_GET['id'];
		$result = $blog->selectBlogsByBlogId($data)->results;

		$smarty->assign('error','');
		$smarty->assign('title',$result[0]['title']);
		$smarty->assign('content',$result[0]['content']);
		$smarty->assign('bid',$result[0]['bid']);
		$smarty->display('update_Blog.tpl');//不同bid的缓存设置为不一样。

	}
	else if(isset($_POST['submitted']))
	{
		$data['title'] = nl2br(htmlentities(addslashes($_POST['title']),ENT_QUOTES));//nl2br一定要放外面，否则换行符不被解析,addslasher为字符前添加”\"转义,特别是处理“\"符号，避免sql语句中的引号被转义
		$data['content'] = nl2br(htmlentities(addslashes($_POST['content']),ENT_QUOTES));
		$data['bid'] = $_POST['submitted'];
		if((!empty($_POST['title']))&&(!empty($_POST['content'])))
		{
			if($blog->updateBlog($data))
			{
				header("location:home.php");
				exit();
			}
		}
		else
		{
			$error="<span>不能为空</span>";
			$smarty->assign('title',$data['title']);
			$smarty->assign('content',$data['content']);
			$smarty->assign('bid',$data['bid']);
			$smarty->assign('error',$error);
			$smarty->display("update_Blog.tpl");
		}
	}
}
else
{
	functions::session_out('login.tpl',$smarty);
}

