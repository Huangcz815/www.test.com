<?php
// 161401309 黄超振
require './common/function.php';

$count = count(glob('./data/*.php'));
$info = [];
for($i=1;$i<=$count;$i++) {
    //获取题库
    $data = require "./data/$i.php";
    //从题库中获取数据
    $info[$i] = [
        'title' => $data['title'],
        'time' => round($data['timeout'] / 60),
        'score' => getDataTotal($data['data'])
    ];
}

unset($data);

//载入HTML模板
require './view/index.html';

?>