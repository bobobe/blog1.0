<?php
/**
 * Created by PhpStorm.
 * User: yanbo
 * Date: 2015/11/4
 * Time: 15:53
 */
include_once("D:/program/EasyPHP-DevServer-14.1VC11/data/localweb/projects/blog2.0/configs/system.config.php");
include_once("D:/program/EasyPHP-DevServer-14.1VC11/data/localweb/projects/blog2.0/system/PDO/PDO.class.php");
$pdo = new PDO\PDO();
//$sql = "SELECT * FROM users WHERE uid = ?";
//$sql = "SELECT * FROM users";
$sql = "update users set nick_name = 'ys' where nick_name = ?";
$pdo->prepare($sql);
$pdo->bindParam(1,'yb');
var_dump($pdo->execute());
$pdo->bindParam(1,'yl');
var_dump($pdo->execute());
//,PDO::PARAM_INT



//var_dump($pdo->exec($sql));

