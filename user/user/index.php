<?php
$conn = mysqli_connect('localhost','root','root','user');
mysqli_set_charset($conn,'utf8');
if(!$conn) {
  die('连接失败');
}
// echo  '连接成功';
$sql = "select * from info order by id asc";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
$arr[]=$row;
}
// print_r($arr);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>XXX管理系统</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">XXX管理系统</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">用户管理</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">商品管理</a>
      </li>
    </ul>
  </nav>
  <main class="container">
    <h1 class="heading">用户管理 <a class="btn btn-link btn-sm" href="add.html">添加</a></h1>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>头像</th>
          <th>姓名</th>
          <th>性别</th>
          <th>年龄</th>
          <th class="text-center" width="140">操作</th>
        </tr>
      </thead>
      <tbody>
       <?php
            foreach($arr as $key=>$value) {       ?>
          
  <tr>
  <th scope="row"><?php echo ($key+1) ?></th>
  <td><img src="<?php echo $value['photo'] ?>" class="rounded" ></td>
  <td><?php echo $value['name'] ?></td>
  <td><?php echo $value['gender'] ?></td>
  <td>
    <?php 
              $currentTime = time();
              $birthdayTime = strtotime($value['birthday']);
              $ageTime = ceil(($currentTime-$birthdayTime)/(365*24*3600));
              echo  $ageTime;
            ?>
            </td>
  
  <td class="text-center">
    <a href="edit.php?id=<?php  echo $value['id']  ?>" class="btn btn-info btn-sm">编辑</a>
    <a href="delete.php?id=<?php  echo $value['id']  ?>" class="btn btn-danger btn-sm">删除</a>
  </td>
</tr>
 <?php }


          ?>
          

          
              
          
      </tbody>
    </table>
  </main>
</body>
</html>
