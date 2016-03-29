<?php
session_start();
include_once("E:/xampp/htdocs/projects/blog2.0/configs/system.config.php");

$smarty->clearcache('login.tpl');//对于login，不应该有缓存功能，所以首先清除cache缓存
//如果浏览器启用了js
if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])&&$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')
{
	if(isset($_POST['submitted']))
	{
		if(!empty($_POST['name']) &&!empty($_POST['password']))
		{
			$data['nick_name'] = trim($_POST['name']);
			$data['password'] = MD5(MD5(trim($_POST['password'])));

			$user = new Users();

			if ($user->checkValidUser($data))
			{
				if (isset($_POST['remeber-me']))
				{
					//date_default_timezone_set('PRC');
					setcookie('nick_name',$data['nick_name'],time()+3600,'/');
				}
				$user=$user->selectUserByName($data)->results;
				$_SESSION['user']=$user;//直接把user数组存到session
				echo "ok";
				//header("location:http://localhost/projects/blog2.0/controller/home.php");
				//exit();


			}
			else
			{
				echo "<span>密码错误或不存在该用户</span>";

			}


		}
		else
		{
			echo "<span>请填写完整</span>";
		}
	}
}
//如果未启用js
else if(isset($_POST['submitted']))
{
	if(!empty($_POST['name']) &&!empty($_POST['password']))
	{
			$data['nick_name'] = trim($_POST['name']);
			$data['password'] = MD5(MD5(trim($_POST['password'])));

			$user = new Users();

			if ($user->checkValidUser($data))
			{
				if (isset($_POST['remeber-me']))
				{
					//date_default_timezone_set('PRC');
					setcookie('nick_name',$data['nick_name'],time()+3600,'/');
				}
				$user=$user->selectUserByName($data)->results;
				$_SESSION['user']=$user;//直接把user数组存到session
				header("location:http://localhost/projects/blog2.0/controller/home.php");
				exit();


			}
			else
			{
				$error = "<span>密码错误或不存在该用户</span>";
				$page = "login.tpl";

			}


	}
	else
	{
			$error = "<span>请填写完整</span>";
			$page = "login.tpl";
	}
	$smarty->assign('error',$error);
	$smarty->display("login.tpl");
}
else//还未请求过
{
	$smarty->assign('error','');
	$smarty->display("login.tpl");
}


/*if(isset($_POST['submitted']))
{
	if(!empty($_POST['name']) &&!empty($_POST['password']))
	{
		$data['nick_name'] = trim($_POST['name']);
		$data['password'] = MD5(MD5(trim($_POST['password'])));

		$user = new Users();

		if ($user->checkValidUser($data))
		{
			if (isset($_POST['remeber-me']))
			{
				 //date_default_timezone_set('PRC');
                 setcookie('nick_name',$data['nick_name'],time()+3600,'/');
			}
			$user=$user->selectUserByName($data)->results;
			$_SESSION['user']=$user;//直接把user数组存到session
			header("location:http://localhost/projects/blog2.0/controller/home.php");
			exit();


		}
		else
		{
			$error = "<span>密码错误或不存在该用户</span>";
			$page = "login.tpl";

		}


	}
	else
	{
		$error = "<span>请填写完整</span>";
		$page = "login.tpl";
	}
	$smarty->assign('error',$error);
	$smarty->display("login.tpl");
}
else
{
	$smarty->assign('error','');
	$smarty->display("login.tpl");
}
*/


?>
