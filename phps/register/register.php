<?php
// echo '<pre>';
// print_r ($_SERVER);

if($_SERVER["REQUEST_METHOD"]=="POST") {
    echo '<pre>';
    // print_r($_POST);
    // print_r($_FILES);
if(trim($_POST["username"])=='') {
    echo '请重新输入姓名';
}elseif (trim($_POST["nickname"])=='') {
    echo '请重新输入昵称';
}elseif (trim($_POST["age"])=='') {
    echo '请重新输入年龄';
}elseif (trim($_POST["tel"])=='') {
    echo '请重新输入电话';
}elseif($_FILES['photo']['error'] !=0) {
    echo '上传文件失败';
}else {
$myname=date('YmdHis').mt_rand(1000,9999).strrchr($_FILES['photo']['name'],".");
move_uploaded_file($_FILES['photo']['tmp_name'],"images/".$myname);
//   print_r($_POST);
$_POST[]=$myname;// 把上传的图片都依次添加到$_POST中
$str = implode("|",$_POST);
// echo $str;
// 将得到的字符串写入文件
file_put_contents("data.txt",$str."\n",FILE_APPEND);
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- 引入样式 -->
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>   
    <form action="" method="post" enctype="multipart/form-data">
        姓名：<input type="text" name="username">
        昵称：<input type="text" name="nickname">
        年龄：<input type="text" name="age">
        电话：<input type="text" name="tel">
        性别：<input type="radio" name="gender" value="男" checked>男
             <input type="radio" name="gender" value="女" >女
             <br>
        班级：<select name="class" >
                <option value="1">黑马1期</option>
                <option value="2">黑马2期</option>
                <option value="3">黑马3期</option>
             </select>
        头像： <input type="file" name="photo" >
        <input type="submit" value="添加信息">
    </form>
</body>
</html>