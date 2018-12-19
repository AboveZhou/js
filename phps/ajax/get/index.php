<?php
header("content-type:text/html;charset=utf8");
$name = $_GET['name'];
$arr = array('jack','rose','tom');
echo in_array($name,$arr) ? '用户名已存在' :'用户名可用';


?>