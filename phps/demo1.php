
<?php
//求最大公约数   
// 1.如果两个数相除,余数为0,则除数为最大公约数;
//2.如果两个数相除,余数不为0,则让原先的除数为被除数,原先的余数为除数,直到余数为0,此时的除数就是最大公约数
$num1= 48;
$num2= 36;
do{
  $mod=$num1%$num2;
  $num1=$num2;
  $num2=$mod;
}while($mod!=0);
echo $num1;

?>