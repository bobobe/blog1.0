<?php
/**
 * Created by PhpStorm.
 * User: yanbo
 * Date: 2015/10/30
 * Time: 17:43
 */
class divide_page//��ҳ��
{
    private $per_page;//ÿҳ��ʾ����Ŀ��(��һ�ַ�ҳ)
    private $now_page;
    function __construct($per_page,$now_page)
    {
        $this->per_page = $per_page;
        $this->now_page = $now_page;

    }

    public function dividePage_All($results)//ȫ��չ��ҳ��ʽ��ҳ
    {
        $num = $results->num;
        $total_page = ceil($results->num/$this->per_page);

        $start_num = ($this->now_page - 1) * $this->per_page + 1;
        $end_num = $start_num + $this->per_page-1;

        $data = new stdClass();
        $data->num = $num;
        $data->total_page = $total_page;
        $data->results = array();

        for($i = $start_num ; $i <= $end_num&&$i <= $num ;$i++)
        {
            $data->results[] = $results->results[$i-1];

        }

        return $data;
    }




}