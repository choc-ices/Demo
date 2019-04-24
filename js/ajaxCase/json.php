<?php

$zhangsan = array('name'=>'张三', 'age'=>18);

// header('Content-Type:application/json');  //服务端于情于理都应该设置application/json

echo json_encode($zhangsan);