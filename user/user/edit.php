<?php
//连接数据库
$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','root','user');
// mysqli_get_charset($conn,'utf8');
if(!$conn){
  die('连接失败');
}
// echo "连接成功";
$sql = "select * from info where id = $id";
// echo $id;
$result = mysqli_query($conn,$sql);
var_dump($result);
$info = mysqli_fetch_assoc($result);
// print_r($info);
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
        <a class="navbar-brand" href="#">XXXX管理系统</a>
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
        <h1 class="heading">添加用户</h1>
        <!-- 有错误信息时显示 -->
        <!-- <div class="alert alert-danger" role="alert">用户输入提示信息</div> -->

        <form action="update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden"  name= "id" value="<?php echo $info['id'] ?>">
            <div class="form-group">
                <label for="name">姓名</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $info['name'] ?>">
            </div>
            <div class="form-group">
                <label for="gender">性别</label>
                <select class="form-control" id="gender" name="gender">
          <option value="-1">请选择性别</option>
          <option value="男" <?php echo $info['gender'] =='男'? "selected" : ""?>>男</option>
          <option value="女" <?php echo $info['gender']=='女' ? "selected" : ""?>>女</option>
        </select>
            </div>
            <div class="form-group">
                <label for="birthday">生日</label>
                <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $info['birthday'] ?>">
            </div>
            <div class="form-group">
                <label for="img">头像</label>
                <input type="file" class="form-control" id="img" name="img" >
            </div>
            <input type="submit" value="保存" class="btn btn-primary">
        </form>
    </main>
</body>

</html>