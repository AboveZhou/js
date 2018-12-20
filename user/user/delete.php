<?php
$id = $_GET['id'];
//连接数据库
$conn = mysqli_connect('localhost','root','root','user');
mysqli_get_charset($conn,'utf8');
$sql = "delete from info where id = $id";
$result = mysqli_query($conn,$sql);
header("location:index.php");
?>