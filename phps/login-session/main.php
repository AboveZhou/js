
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>  这是首页!  </h1>
	<?php
	session_start();
	if (isset($_SESSION["userInfo"])) {
echo "hello,".$_SESSION["userInfo"]["username"]."<br>";
echo "<a href='logout.php'>退出</a>";
	}else{?>
	<a href="login.php">登录</a>
	<?php }?>
</body>
</html>