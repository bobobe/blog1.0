<?php
include_once("E:/xampp/htdocs/projects/blog2.0/configs/system.config.php");

$smarty->clearCache('login.tpl');//清除缓存
$smarty->clearCache('register.tpl');

if(isset($_POST['submitted']))
{
	if(!empty($_POST['name'])&&!empty($_POST['password1'])&&!empty($_POST['password2']))
	{
		if(trim($_POST['password1'])==trim($_POST['password2']))
		{
			$data['nick_name'] = trim($_POST['name']);
			$data['password'] = MD5(MD5(trim($_POST['password1'])));
			$data['imgpath'] = "";




			$user = new Users();
			if($user->selectUserByName($data)->num==0)
			{
				//上传文件
				$file = new file();

				$error = $file->upload_file();
				//var_dump($error);
				if(!$error)
				{
					$data['imgpath'] = $file->getPath();
				}
				else
				{
					$smarty->assign('error',$error);
					$smarty->display('register.tpl');
					exit();
				}



                //添加用户
				if($user->addUser($data))
				{
					header("location:login.php");
					exit();
				}


			}
			else
			{
				$error = "<span>该用户已存在</span>";
			}


        }
        else
        {
        	$error="<span>密码不一致</span>";
        }
    }
    else
    {
		$error="<span>请填写完整</span>";
    }
}
else
{
	$error="";
}

$smarty->assign('error',$error);
$smarty->display('register.tpl');


?>
