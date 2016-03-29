<?php
session_start();
include_once("E:/xampp/htdocs/projects/blog2.0/configs/system.config.php");
$smarty->clearCache('login.tpl');//清除缓存
//$smarty->clearCache('blogInfor.tpl');//清除缓存

if(isset($_SESSION['user']))
{
	if (isset($_GET['id']))
	{
		$data['bid'] = $_GET['id'];
		if(!$smarty->isCached('blogInfor.tpl',$data['bid'].'blogInfor'))
		{//没有缓存才连接数据库获取数据,如果请求数据量特别大，则很耗时间，比如下面注释的语句
			/*for($i=1;$i<1000000;$i++)
			{
				$i+=1;
			}*/
			$blog = new Blogs();
			$result = $blog->selectBlogsByBlogId($data)->results;
			$smarty->assign('result', $result);

		}

		$smarty->display('blogInfor.tpl',$data['bid'].'blogInfor');
	}
}
else
{
	functions::session_out('login.tpl',$smarty);
}



?>