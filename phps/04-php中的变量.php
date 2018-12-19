<?php
    // 声明变量：
    // 特点：
    // 1.所有变量的声明必须以$符号做为前缀
    // 2.变量名区分大小写
    // 3.变量名的组成由字符，数字，下划线构成

    // var age = 20;
    // 类似js中的弱类型，php在声明变量的时候无需关注类型，系统会根据值进行自动的判断
    // $age = 20; //声明变量并同时赋值
    // echo $age;
    // $name = 'jack';
    // echo $name;
    // $gender; //相当于变量的声明
    // // 在php中如果声明变量没有赋值，那么这个值默认为null
    // // 在php代码的语句最后建议都添加分号，如果不加，除非是最后一行，否则就会报错
    // echo $gender;
    // echo 123;

    // 补充与变量相关的函数
    // isset():判断变量是否存在，判断变量是否定义了，同时它还可以判断变量的值是否为null
    // 输出结果的细节：在php中如果输出true,那么结果为1，如果输出false,输出结果为null
    // $age = 20;
    // $name ='jack';
    // var_dump(isset($name));

    // empty():判断变量是否为空值，为空的值有：""  0 "0",null,false,array().如果值为以上中的某一个，则返回值
    // $name = "0";
    // $name = 0;
    // $name = false;
    // $name = array(1);
    // var_dump(empty($name));
;   // unset():删除变量：
        // 1.如果删除一个变量，那么变量的值会置为null
        // 2.可以同时删除多个变量
        // 3.如果在函数中删除全局变量，那么并不会真正的将全局变量删除(以后再说)
    $name = "jack";
    $age = 20;
    echo $name;
    echo '<hr>';
    unset($name,$age);
    echo $name;
    echo $age;
    
?>