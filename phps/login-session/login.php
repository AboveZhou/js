<?php
// echo "<pre>";
// print_r($_SERVER);
if($_SERVER['REQUEST_METHOD']=="POST") {
  $name=$_POST['username'];
  $pwd=$_POST['password'];
if(trim($_POST['username'])==''||trim($_POST['password'])=='') {
  $error='用户名或密码为空';
} else {
  //读取json文件  
  $str=file_get_contents("users.json");
  //将json字符串转化成数组
  $arr=json_decode($str,true);
  //遍历数组  判断输入的内容是否与json内的数据一致
  foreach($arr as $value) {
    if($value['username']==$name&&$value['password']==$pwd) {
     //开启session
     session_start();
     $_SESSION["userInfo"]= $value;
      header("location:main.php");
    }else {
      $error='用户名或密码错误';
    }
  }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>登录</title>
  <link rel="stylesheet" href="bootstrap.css">
  <style>
    body {
      background-color: #f8f9fb;
    }

    .login-form {
      width: 360px;
      margin: 100px auto;
      padding: 30px 20px;
      background-color: #fff;
      border: 1px solid #eee;
    }

    .login-form h1 {
      font-size: 30px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <form class="login-form" action="" method="POST">
    <h1>登录</h1>   
    <!-- 下面的错误提示信息结构 需要在有错误信息的时候进行显示 -->
    <?php if(isset($error)) {?>

<div class="alert alert-danger" role="alert">
    <?php echo $error; ?>
</div>

<?php } ?>

    <div class="form-group">
      <label for="username">用户名</label>
      <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="form-group">
      <label for="password">密码</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
   
    <input type="submit" class="btn btn-primary btn-block"  value="登录">
  </form>
   </body>
</html>