<?php
/**
 * Created by PhpStorm.
 * User: yanbo
 * Date: 2015/10/25
 * Time: 10:04
 */
abstract class Model{
    protected $data=array();
    protected $link;
    protected $functions;
    function __construct()
    {
        $this->link=new mysql_i();
        $this->functions=new functions();
    }


}