<?php
/*
 * 使用的是fulltext全文索引，他并不是像like那样匹配，规则可查看
 * http://blog.sina.com.cn/s/blog_64589b110101c31a.html
 */
session_start();
include_once("E:/xampp/htdocs/projects/blog2.0/configs/system.config.php");

$smarty->clearCache('search.tpl');
$smarty->clearCache('login.tpl');

if(isset($_SESSION['user']))
{
    $data['user_id'] = $_SESSION['user'][0]['uid'];
    $data['nick_name'] = $_SESSION['user'][0]['nick_name'];

    if(!$smarty->isCached('seach.tpl',$data['user_id'].'search'))//如果没有缓存才用php连接数据库动态获取数据
    {//有缓存下面代码不执行，直接取缓存文件
        $mem = new memcache\Memcache();
        if(isset($_POST['keys']))
        {
            $data['keys'] = $_POST['keys'];

            $blog = new Blogs();
            $blogs = $blog->selectBlogsByKeys($data);

            //$mem->getStats();
            $mem->set('blogs', 'll');//添加到memcache
            //$mem->getStats();
        }
        else
        {
            $blogs = $mem->get('blogs');//从memcache获得存储的结果

        }

        if (isset($_GET['nowpage'])) {
            $nowpage = $_GET['nowpage'];
        } else {
            $nowpage = 1;
        }
        $lastpage = $nowpage - 1;
        $nextpage = $nowpage + 1;

        $divide_page = new divide_page(5, $nowpage);
        $divide_blogs = $divide_page->dividePage_All($blogs);
        //var_dump($divide_blogs->results);
        $User = new Users();
        $imgpath = $User->selectUserByName($data)->results[0]['img'];
        //$imgpath = (!empty($imgpath))?$imgpath:DIR_IMG."default.png";
        $welcome = "welcome," . $data['nick_name'];

        $smarty->assign('blogs',$blogs);
        $smarty->assign('lastpage', $lastpage);
        $smarty->assign('nextpage', $nextpage);
        $smarty->assign('welcome', $welcome);
        $smarty->assign('divide_blogs', $divide_blogs);
        $smarty->assign('imgpath', $imgpath);
    }

    $smarty->display('search.tpl',$data['user_id'].'search');//标志不同缓存页面

}
else
{
    functions::session_out('login.tpl',$smarty);
}

?>