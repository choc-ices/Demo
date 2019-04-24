<?php

// 连接本地数据库，没有校验，只针对于JSONP练习。
$conn = mysql_connect('localhost','root','123456','demo');

$query = mysql_query($conn,'select * from users');

while($row = mysql_fetch_assoc($query)){
	$data[] = $row;
}

// header('Content-Type: application/json');
// echo json_encode($data);

if (empty($_GET['callback'])) {
	header('Content-Type: application/json');
	echo json_encode($data);
	exit();
}

// 如果客户端采用的是script 标记对我发起的请求
// 一定要返回一段 JavaScript
header('Content-Type: application/javascript');
$result = json_encode($data);

$callback_name = $_GET['callback'];
echo "typeof {$callback_name} === 'function' && {$callback_name}({$result})";
// 此处想要实现的结果：typeof foo === 'function' && foo({})

// echo "{$_GET['callback']}({$result})";
// echo "aaabbb({$result})";  //客户端声明的是什么 这块就是什么













/*********
// 测试
header('Content-Type:application/javascript');

$json = json_encode(array(
	'time' => time()
));
// 在 JSON 格式的字符串外面包裹了一个函数的调用
// 返回的结果就变成了一段 JS代码（客户端需定义一个foo函数）（意思就是把客户端的JS代码的一部分写到了服务器端）
echo "foo({$json})";

**/