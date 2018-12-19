<?php
header("content-type:text/html;charset=utf8");
//使用数学函数生成验证码文字
//生成4个随机的十进制数，转换为对应的十六进制字符，并拼接。
$len=4;
$sum="";
for($i=0;$i<$len;$i++) {
  $num = mt_rand(0,15);
  //dechex()  将十进制转化为十六进制   decbin() 十进制转换为二进制
$sum.=dechex($num);//.=  拼接再赋值
}
echo "验证码为$sum";
?>