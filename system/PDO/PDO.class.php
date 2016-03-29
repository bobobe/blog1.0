<?php
/**
 * Created by PhpStorm.
 * User: yanbo
 * Date: 2015/11/1
 * Time: 15:07
 */
namespace PDO;
use xpath\xpath;

//可以用
class PDO {
    private $link = NULL;
    private $statement = NULL;

    function  __construct(){

        $xpath = new xpath(DIR_DB_CONFIG);
        $res=$xpath->query('/config/db/*');
        $ip=$res->item(0)->nodeValue;
        $user=$res->item(1)->nodeValue;
        $password=$res->item(2)->nodeValue;
        $port=$res->item(3)->nodeValue;
        $dbname=$res->item(4)->nodeValue;

        try
        {//连接其他数据库的参数格式不一样。
            $this->link = new \PDO("mysql:mysql:host=" . $ip . ";port=" . $port . ";dbname=" . $dbname, $user, $password, array(\PDO::ATTR_PERSISTENT => true));//持久连接
        }//这里一定要把host放前面！！顺序不能颠倒
        catch(\PDOException $e)
        {
            die("Error: 连接失败由于：". $e->getMessage()." Error Code:".$e->getCode()." <br />");

        }

        $this->link->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);//设置pdo的错误处理模式
        $this->link->exec("SET NAMES 'utf8'");
        $this->link->exec("SET CHARACTER SET utf8");
        $this->link->exec("SET CHARACTER_SET_CONNECTION=utf8");
        $this->link->exec("SET SQL_MODE = ''");

    }

    //以下函数是预处理函数
    public function prepare($sql) {
        $this->statement = $this->link->prepare($sql);
    }


    public function bindParam($parameter, $variable, $data_type = \PDO::PARAM_STR, $length = 0) {//默认是字符串
        //$data_type包括：PDO::PARAM_STR/INT/BOOL/NULL/等
        if ($length) {
            $this->statement->bindParam($parameter, $variable, $data_type, $length);
        } else {
            $this->statement->bindParam($parameter, $variable, $data_type);
        }
    }

    public function execute() {//此函数既能执行dql也能执行dml
        try {
            if ($this->statement) {//这个是PDOstatement中的方法
            //分别对于dml语句和dql语句进行处理
                //var_dump($this->statement);
                //判断是不是dml语句
                if(strpos($this->statement->queryString,'INSERT')!== false||strpos($this->statement->queryString,'UPDATE')!== false||strpos($this->statement->queryString,'DELETE')!== false||strpos($this->statement->queryString,'insert')!== false||strpos($this->statement->queryString,'update')!== false||strpos($this->statement->queryString,'delete')!== false)
                {
                     if($this->statement->execute())
                         return true;
                     else
                         return false;
                }
                //如果是dql语句
                else
                {
                    if($this->statement->execute()) {
                        $data = array();

                        while ($row = $this->statement->fetch(\PDO::FETCH_ASSOC)) {
                            $data[] = $row;
                        }

                        $result = new \stdClass();
                        $result->results = $data;
                        $result->num = $this->statement->rowCount();

                        return $result;
                    }
                }

            }
        } catch(\PDOException $e) {
            die("Error: 执行失败由于：". $e->getMessage()." Error Code:".$e->getCode()." <br />");
        }
    }

    //以下函数是非预处理函数

    public function exec($sql)//只能执行dml语句，不能执行dql语句
    {
        try
        {
            return $this->link->exec($sql);//返回受影响的行数
        }
        catch (\PDOException $e)
        {
            die("Error: 执行失败由于：". $e->getMessage()." Error Code:".$e->getCode()." <br />");
        }

    }
    public function query($sql) {//只能执行dql语句，不能执行dml语句
        try {
            $this->statement = $this->link->query($sql) or die("查询失败");

                $data = array();
                while ($row = $this->statement->fetch(\PDO::FETCH_ASSOC)) {
                    $data[] = $row;
                }


                $result = new \stdClass();
                $result->results = $data;
                $result->num = $this->statement->rowCount();

                return $result;

        }
        catch(\PDOException $e){
            die("Error: 执行失败由于：". $e->getMessage()." Error Code:".$e->getCode()." <br />");
        }



    }



    function __destroy()
    {
        $this->link = NULL;
    }

}