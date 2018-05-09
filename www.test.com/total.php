<?php
echo '<pre>';
var_dump($_POST);

//require './common/function.php';
//$id = getTestId();
//$data = getDataById($id,false);
//if(!$data){
//    require './view/notFound.html';
//    exit();
//}
////
//list($count,$score) = getDataInfo($data['data']);
//
//$sum = 0;
//$total = [];
//foreach($data['data'] as $type=>$each){
//    foreach($each['data'] as $k => $v){
//        //提取用户提交的数据
//        $answer = isset($_POST[$type][$k]) ? $_POST[$type][$k] : '';
//        //判断答案是否正确
//        if($v['answer'] === $answer){
//            $total[$type][$k] = true;
//            $sum +=$score[$type];
//        }
//        else{
//            $total[$type][$k] = false;
//        }
//    }
//}
//
//require './view/total.html';

?>