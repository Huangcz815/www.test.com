<?php

//导入公共函数文件
require './common/function.php';

$id = getTestId();
$data = getDataById($id);
if(!$data){
    require './view/notFound.html';
    exit;
}


list($count, $score) = getDataInfo($data['data']);
//echo '<pre>';
//var_dump($score);

require './view/test.html'


?>

