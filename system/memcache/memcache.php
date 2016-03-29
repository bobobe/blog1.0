<?php
/**
 * Created by PhpStorm.
 * User: yanbo
 * Date: 2015/11/7
 * Time: 20:29
 */
namespace memcache;
use xpath\xpath;

class Memcache {
    private $link;

    function __construct(){
        $xpath = new xpath(DIR_DB_CONFIG);
        $res=$xpath->query('/config/memcache/*');
        $ip=$res->item(0)->nodeValue;
        $port=$res->item(1)->nodeValue;

        $this->link = new \Memcache;
        $this->link->connect($ip,$port) or die("连接memcache失败");


    }

    //添加一个键值
    function add($key,$value){//已存在的再次添加将会失败
        $this->link->add($key,$value,MEMCACHE_COMPRESSED,0) or die("memcache存值失败");

    }

    //设定一个指定key的缓存变量内容，如果key不存在则添加，存在则修改
    //第三个参数是压缩相关
    function set($key,$value,$time=0)
    {
        $this->link->set($key.$value,MEMCACHE_COMPRESSED,$time) or die ("memcache存值失败");
    }

    //获得数据，传入为数组则返回关联数组，否则返回值。失败返回false
    function get($key)
    {
        return $this->link->get($key);

    }

    //第二个参数为0为立即删除，否则在$time时间内被删除
    function delete($key,$time=0)
    {
        $this->link->delete($key,$time) or die("删除失败");
    }

    //并不是清空缓冲区释放内存，只是让所有变量缓存过期失效，其占用内存课被其他变量用
    function flush(){
        $this->link->flush() or die("清空失败");
    }

    //返回当前memcache中的信息
    function getStats()
    {
        echo "<pre>";
        echo print_r($this->link->getstats());
        echo  "</pre>";
    }


    function close(){
        $this->link->close() or die("关闭失败");
    }






}