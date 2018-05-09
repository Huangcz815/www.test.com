<?php

//获取总分
function getDataTotal($data){
    $sum = 0;
    foreach($data as $v){
        $sum += $v['score'];
    }
    return $sum;
}

//获取题库ID
function getTestId(){
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
    return max($id, 1);
}

//根据题库序号载入题库,判断题库是否存在,然后对题库进行转义
function getDataById($id, $toHTML=true){
    $target = "./data/$id.php";
    if(!file_exists($target)){
        return false;
    }

    //载入题库
    $data = require $target;

    $func = function ($data) use(&$func){
        $result = [];
        foreach ($data as $k => $v){
            //如果是数组则继续递归,如果是字符串则转义
            $result[$k] = is_array($v) ? $func($v) : (is_string($v) ? toHTML($v) : $v);
        }
        //返回数据
        return $result;
    };
    return $toHTML ? $func($data) : $data;
}

//实现html特殊字符转义(特殊字符有:  & " ' < > 和空格)                                                                        //此处的转义函数不起作用
function toHTML($str){
    $str = htmlspecialchars($str, ENT_QUOTES);
    return str_replace(' ', '&nbsp;', $str);
}

//获取题库信息
function getDataInfo($data){
    $count = [];
    $score = [];
    //从题库读取信息
    foreach ($data as $k=>$v){
        //计算各题型的提目数量
        $count[$k] = count($v['data']);
        $score[$k] = round($v['score'] / $count[$k]);
    }
    return [$count, $score];
}
?>

