<?php
$id = $_POST['id'];
// echo $id;
$name=$_POST['name'];
$gender= $_POST['gender'];
$birthday = $_POST['birthday'];
$photo = '';
if($_FILES['img']['error']==0) {
  $str = strrchr($_FILES['img']['name'],'.');
  $flie = time().mt_rand(1000,9999).$str;
  $photo= "./assets/img/".$file;
  move_uploaded_file($_FILES['img']['tmp_name'],$photo);
}
//连接数据库
$conn = mysqli_connect('localhost','root','root','user');
if ($photo==''){
  $sql= "update info set name='$name',birthday='$birthday',gender='$gender' where id = $id";
  // die($sql);
}else {
  $sql= "update info set name='$name',photo='$photo',birthday='$birthday',gender='$gender' where id = $id";
}
// die($sql);
$result = mysqli_query($conn,$sql);
// die($result);
if($result){
  header("location:index.php");
}else{
  header("location:edit.php?id=".$id);
}
?>