<?php

class mysql_i{
	private $link;

	function __construct()
	{
		    $xpath = new xpath\xpath(DIR_DB_CONFIG);
			$res=$xpath->query('/config/db/*');
			$ip=$res->item(0)->nodeValue;
			$user=$res->item(1)->nodeValue;
			$password=$res->item(2)->nodeValue;
			$port=$res->item(3)->nodeValue;
			$dbname=$res->item(4)->nodeValue;



		   $this->link = new MYSQLI($ip,$user,$password,$dbname,$port);//这里的'\'是为了和类名区别而使用了命名空间

		   if($this->link->connect_error)
           {

           	   die("连接数据库失败由于".$this->link->connect_error);
           }

		   $this->link->set_charset("utf8") or die($this->link->error);

	}
    
    function query($sql)
    {
           $query=$this->link->query($sql) or die($this->link->error);
           if($query instanceof mysqli_result)//说明这个类是不是一个结果集
		   {
			       $data=array();
		   	       while($row=$query->fetch_array())
			       {
			       	    $data[]=$row;
			       }
                   //var_dump($data);
			       $result=new stdClass();
			       $result->num=$query->num_rows;
			       $result->results=$data;//(($result->num!=1)?$data:$data[0]);//($result->num!=1)?$data:$data[0];
			       //如果只有一个结果集，就返回一维数组，多个结果集才返回2维数组

			       $query->free();
			       return $result;
           }
           else{
           	return true;
           }   
    }

	public function escape($value) {
		return $this->link->real_escape_string($value);
	}


	function __destruct(){
		$this->link->close();
	}
}