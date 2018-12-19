<?php
header('Content-Type:text/html;charset=utf8');
$res=file_get_contents('red.txt');
echo $res;
echo '<hr>';
$str = file_put_contents('red.txt','我是谁');
echo $str;
echo "<hr>";

$str1= file_put_contents('red.txt','我们是谁',FILE_APPEND);
echo $str1;
?>