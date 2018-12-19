<?php
header("content-type:text/html;charset=utf8");
$conn = mysqli_connect('localhost','root','root','zxm_mysql');
mysqli_set_charset($conn,'utf8');
if(!$conn) {
  die('连接失败');
}
$sql = "select * from zxm_table";
$result = mysqli_query($conn,$sql);
// print_r($result)
while($row=mysqli_fetch_assoc($result)){
  $arr[]=$row;
  }

// print_r($arr);


?>