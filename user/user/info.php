<?php
header("content-type:text/html;charset=utf8");
$conn = mysqli_connect('localhost','root','root','Jd');
$sql= "select src,name from info";
$result = mysqli_query($conn,$sql);
// var_dump($result);
while($row = mysqli_fetch_assoc($result)) {
  $arr[]= $row;
}
// print_r($arr);
$callback = $_GET['callback'];
$data = json_encode($arr);
echo "$callback($data)";

?>