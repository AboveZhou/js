<?php
header('content-type:text/html;charset=utf8');
//1.连接数据库
$conn = mysqli_connect('localhost','root','root','zxm_mysql');
mysqli_set_charset($conn,'uft8');
if(!$conn){
die("数据库连接失败");
}
// echo "数据库连接成功";
//2.准备sql语句
$sql = "insert into zxm_table values(null,'李思',18,'女')";
// 3.执行sql语句  针对数据库的查询  成功查询返回值true    失败返回值false
$res = mysqli_query($conn,$sql);
// 4.根据执行结果作业务上的处理
var_dump($res);
echo mysqli_error($conn);







?>