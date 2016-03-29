<?php
session_start();
include_once("E:/xampp/htdocs/projects/blog2.0/configs/system.config.php");

$smarty->clearcache('write.tpl');//首先清除cache缓存
$smarty->clearcache('blog2.0.tpl');//首先清除cache缓存
$smarty->clearcache('home.tpl');//写之后要求实时更新，所以要清除cache缓存

if(isset($_SESSION['user']))
{
	if(isset($_POST['submitted']))
	{
		$data['title'] = htmlentities(addslashes($_POST['title']),ENT_QUOTES);
		$data['content'] = addslashes($_POST['content']);
		if((!empty($_POST['title']))&&(!empty($_POST['content'])))
		{
			$data['uid'] = $_SESSION['user'][0]['uid'];
			$blog = new Blogs();
			$blog->addBlogs($data);
			header("location:home.php");
			exit();
		}
		else
		{
			$error="<span>不能为空</span>";
			$smarty->assign('title',$data['title']);
			$smarty->assign('content',$data['content']);
			$smarty->assign('error',$error);
			$smarty->display("write.tpl");

		}
	}
	else
	{
		$error="";
		$smarty->assign('title','');
		$smarty->assign('content','');
		$smarty->assign('error',$error);
		$smarty->display("write.tpl");
	}
}
else{
	functions::session_out('blog2.0.tpl',$smarty);
}

?>
