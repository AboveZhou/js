<?php
header("content-type:text/html;charset=utf8");

echo time();// 当前时间距离 1970-01-01 00:00:00   的时间戳  返回的是秒数
echo '<hr>';
echo date('N',time()-30*24*60*60);// N返回的星期几
echo '<hr>';
echo date('Y-m-d H:i:s');
echo '<hr>';
echo date('Y-m-d',time()-30*24*60*60);
echo '<hr>';
echo strtotime("2018-12-8");  //获取当前时间的时间戳
echo '<hr>';
echo date('N',strtotime("1990-11-9"));   //这天是星期几


?>