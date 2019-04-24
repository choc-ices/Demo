<?php

$conn = mysql_connect('localhost','root','123456','demo');

$query = mysql_query($conn,'select * from users');

while($row = mysql_fetch_assoc($query)){
	$data[] = $row;
}

// 允许所有的源对我这个源发起请求
// 一行代码搞定跨域
header('Access-Control-Allow-Origin: *');  //'*'代表通配所有

header('Content-Type: application/json');
echo json_encode($data);

