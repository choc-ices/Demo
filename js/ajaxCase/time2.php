<?php

// header('Content-Type:application/json');

// echo json_encode(array(
// 	'time' => time()
// ));

// // 上面代码执行结果=> {"time":1555898759}
// // 客户端将其当做JS执行

header('Content-Type:application/javascript');

// echo 'var a = {"time":1555898759}';
// // =>  var a = {"time":1555898759}

// echo 'foo({"time":1555898759})';
// // => foo({"time":1555898759})


$json = json_encode(array(
	'time' => time()
));
// 在 JSON 格式的字符串外面包裹了一个函数的调用
// 返回的结果就变成了一段 JS代码（客户端需定义一个foo函数）（意思就是把客户端的JS代码的一部分写到了服务器端）
echo "foo({$json})";