<?php
/**
 * Created by PhpStorm.
 * User: yanbo
 * Date: 2015/10/25
 * Time: 10:31
 */
class functions{
    static function getNowTime(){
        $date=date("Y-m-d h:i:s",time());
        return $date;
    }

    static function session_out($page,$smarty){
        $error="<span>会话已过期，请重新登录</span>";
        $smarty->assign('error',$error);
        $smarty->display($page);
        exit();
    }

    static function login_out($smarty)
    {
        $error="";
        $smarty->assign('error',$error);
        $smarty->display('login.tpl');
        exit();
    }

    static function error_handler($error_level,$error_message,$file,$line)//自定义处理错误函数
    {

        switch($error_level)
        {
            //因为错误级别是数字，所以要转化为字符显示。
            case E_ERROR:$error_level ="E_ERROR";break;
            case E_WARNING:$error_level ="E_WARNING";break;
            case E_PARSE:$error_level ="E_PARSE";break;
            case E_NOTICE:$error_level ="E_NOTICE";break;
            case E_CORE_ERROR:$error_level ="E_CORE_ERROR";break;
            case E_COMPILE_WARNING:$error_level ="E_COMPILE_WARNING";break;
            case E_COMPILE_ERROR:$error_level ="E_COMPILE_ERROR";break;
            case E_USER_ERROR:$error_level ="E_USER_ERROR";break;
            case E_USER_WARNING:$error_level ="E_USER_WARNING";break;
            case E_STRICT:$error_level ="E_STRICT";break;


        }
        $error = "[".self::getNowTime()."]"."错误级别是：".$error_level.";在".$file."第".$line."行"."存在错误;"."错误信息是".$error_message."。\r\n \r\n";
        $path = DIR_APPLICATION."/error.log";

        file_put_contents($path,$error,FILE_APPEND );//写入错误日志

        header("location:error.php");
        exit();
    }


}


