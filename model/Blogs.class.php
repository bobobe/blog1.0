<?php
/**
 * Created by PhpStorm.
 * User: yanbo
 * Date: 2015/10/25
 * Time: 9:51
 */
class Blogs extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function addBlogs($data)
    {
        $uid=$data['uid'];
        $content=$data['content'];
        $date=$this->functions->getNowTime();
        $title=$data['title'];
        $sql=sprintf("INSERT INTO blogs(uid,content,title,add_time,update_time) VALUES('%s','%s','%s','%s','%s')",$uid,$content,$title,$date,$date);
        return $this->link->query($sql);
    }

    function deleteBlog($data)
    {
        $bid=$data['bid'];
        $sql=sprintf("DELETE FROM blogs WHERE bid='%d'",$bid);
        return $this->link->query($sql);

    }

    function updateBlog($data)
    {
        $bid=$data['bid'];
        $content=$data['content'];
        $date=$this->functions->getNowTime();
        $title=$data['title'];
        $sql=sprintf("UPDATE blogs SET title='%s',content='%s',update_time='%s' WHERE bid = '%d'",$title,$content,$date,$bid);
        return $this->link->query($sql);
    }

    function selectBlogsByUserId($data)
    {
       $user_id=$data["user_id"];
       $sql=sprintf("SELECT * FROM blogs WHERE uid='%d'",$user_id);
       return $this->link->query($sql);
    }

    function selectBlogsByBlogId($data)
    {
        $bid=$data["bid"];
        $sql=sprintf("SELECT * FROM blogs WHERE bid = '%d'",$bid);
        return $this->link->query($sql);
    }

    function selectBlogsByKeys($data)
    {
        $keys = $data['keys'];
        $uid = $data['user_id'];
        $sql = sprintf("SELECT * FROM blogs WHERE MATCH (title,content) AGAINST('%s') AND uid = '%d'",$keys,$uid);
        //var_dump($this->link->query($sql)->num);
        return $this->link->query($sql);
    }

}