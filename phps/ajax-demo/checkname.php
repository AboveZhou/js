<?php 

$arr = array("kobe",'james','jordan','curry','林志玲');

$name = $_GET['name'];
// $name = $_POST['name'];
echo in_array($name,$arr) ? "用户名不可用":"用户名可用";


 ?>