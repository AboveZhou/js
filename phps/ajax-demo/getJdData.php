<?php 

$conn=mysqli_connect('localhost','root','root','student');

$sql = "select name,src from jd_info";

$res = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($res)){
	$arr[] = $row;
}

// print_r($arr);

// print_r($arr);
echo json_encode($arr);







 ?>