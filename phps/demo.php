<?php
header("content-type:text/html;charset=utf8");
$arr = [1,2,3,4];
$arr2 = array("name"=>'jack',"age"=>18,"sex"=>'男');
foreach($arr as $key=>$value) {
  echo $key."-----".$value."<br>";
}


$name='jack';
echo $name;
// unset($name);
// echo '-------';
// echo $name;
echo '<br>';
var_dump(isset($name)) ;  //true
echo '<br>';
$age = '';
var_dump(isset($age));  //true
echo '<br>';
$aga;
var_dump(isset($aga));  //flase
echo '<br>';
$ega=null;
var_dump(isset($ega));//flase
echo '<br>';
if(isset($ega)):
  echo '欢迎你',$name;
else:
  echo '请先登录';
endif;

echo '<br>';
$names= 'tom';
var_dump(empty($names));

echo '<br>';
echo '我的\'名字\'叫$names';// 转义单引号
echo '<br>';
echo '我的\'名字\'叫'.$names;//.是连接符
echo '<br>';
echo "我的名字\r叫{$names}我的\"年龄\"是20";  //双引号内可以自动解析变量
echo '<br>';

$arr = [1,2,3,4,5];
unset($arr[0]);
var_dump($arr);  //会输出数据类型和长度
echo '<br>';
print_r($arr);
echo '<br>';
print_r(count($arr)); //不出输出数据类型和长度
echo '<br>';
//二维数组
$arr = array(array('name'=>'zs','age'=>18),array('name'=>'ls','age'=>20));
foreach($arr as $key=>$value){
  foreach($value as $k=>$v) {
    echo $k.'---'.$v.'<br>';
  }
};
echo '<br>';
//函数
$name = 'tom';
$age = 20;
function get() {
  $GLOBALS;
  print_r($GLOBALS);
  echo '<hr>';
  echo $GLOBALS['name'].':'.$GLOBALS['age'];

}
get();
echo '<br>';
//
$sum= 1;
function fn() {
  
  global $sum;
$sum=10;
  $num=0;
  for($i=0;$i<=$sum;$i++) {
    $num+=$i;
  }
  return $num;
};
fn();
echo fn();
?>