<?php
header("content-type:text/html;charset=utf8");
if($_SERVER['REQUEST_METHOD']=="POST") {
  $name = $_POST['name'];
  $arr = array('jack','rose','tom');
  echo in_array($name,$arr) ? '用户名已存在' :'用户名可用';
};

?>