<?php

  class Users extends Model{

        function __construct(){
            parent::__construct();
        }

        function addUser($data)
        {
            $nick_name=$data['nick_name'];
            $password=$data['password'];
            $imgpath = $data['imgpath'];
            $date=$this->functions->getNowTime();
            $sql=sprintf("INSERT INTO users(nick_name,password,add_time,img) VALUES('%s','%s','%s','%s')",$nick_name,$password,$date,$imgpath);
            return $this->link->query($sql);
        }

        function selectUserByName($data)
        {
            $nick_name=$data['nick_name'];
            $sql=sprintf("SELECT * FROM users WHERE nick_name='%s'",$nick_name);
            return $this->link->query($sql);

        }


        function deleteUser($data)
        {

        }

        function updateUser($data)
        {

        }

        function checkValidUser($data)
        {
             $nick_name=$data['nick_name'];//转义一些字符，防止sql注入
             $password=$data['password'];
             $sql=sprintf("SELECT nick_name,password FROM users WHERE nick_name='%s'",$this->link->escape($nick_name));
             $res=$this->link->query($sql);
             if($res->num!=0&&$res->results[0]['password']==$password)
             {
                 return true;
             }
             else
             {
                 return false;
             }


        }


  }