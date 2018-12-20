<?php
$name = $_POST['name'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
// print_r($_FILES);
$photo='';
if($_FILES['img']['error']==0) {
$res=strrchr($_FILES['img']['name'],'.');
$file = time().mt_rand(1000,9999).$res;
$photo = "./assets/img/".$file;
move_uploaded_file($_FILES['img']['tmp_name'],$photo);
}
//连接数据库
$conn = mysqli_connect('localhost','root','root','user');
mysqli_get_charset($conn,'utf8');
$sql = "insert into  info values(null,'$name','$photo','$birthday','$gender')";
$result = mysqli_query($conn,$sql);
if($result){
  header("location:index.php");
}else{
  header("location:add.html");
}

?>