<?php
      session_start();
      include_once("E:/xampp/htdocs/projects/blog2.0/configs/system.config.php");

      $smarty->clearCache('login.tpl');
      $smarty->clearcache('home.tpl');

      if(isset($_SESSION['user']))
      {
          $data['user_id'] = $_SESSION['user'][0]['uid'];
          $data['nick_name'] = $_SESSION['user'][0]['nick_name'];

         if(!$smarty->isCached('home.tpl',$data['user_id'].'home'))//如果没有缓存才用php连接数据库动态获取数据
         {//有缓存下面代码不执行，直接取缓存文件


             $data['user_id'] = $_SESSION['user'][0]['uid'];
             $data['nick_name'] = $_SESSION['user'][0]['nick_name'];

             $User = new Users();
             $blog = new Blogs();

             $blogs = $blog->selectBlogsByUserId($data);

             if(isset($_GET['nowpage']))
             {
                 $nowpage = $_GET['nowpage'];
             }
             else
             {
                     $nowpage = 1;
             }
             $lastpage = $nowpage-1;
             $nextpage = $nowpage+1;

             $divide_page = new divide_page(5,$nowpage);
             $divide_blogs = $divide_page->dividePage_All($blogs);
             //var_dump($divide_blogs->results);

             $imgpath = $User->selectUserByName($data)->results[0]['img'];
             //$imgpath = (!empty($imgpath))?$imgpath:DIR_IMG."default.png";
             $welcome = "welcome," . $data['nick_name'];



             $smarty->assign('lastpage',$lastpage);
             $smarty->assign('nextpage',$nextpage);
             $smarty->assign('welcome', $welcome);
             $smarty->assign('divide_blogs', $divide_blogs);
             $smarty->assign('imgpath', $imgpath);
         }

         $smarty->display('home.tpl',$data['user_id'].'home');//标志不同缓存页面

      }
      else
      {
          functions::session_out('login.tpl',$smarty);
      }

?>