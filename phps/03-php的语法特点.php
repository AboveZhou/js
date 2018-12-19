<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- 写在php结构外的代码会原样输出返回 -->
    <h1>语法特点说明</h1>
    <!-- 下面这句代码并不会按php语法解析，因为它并没有包含在php结构以内，所以最终会原样返回 -->
    echo 'abc';
    <?php
        // 这与在这个结构以内的代码就会被当成php来解析，所以下面的代码并不符合php的语法规范，所以报错
        // <h1>语法特点说明</h1>
        // echo可以输出字符串，它可以同时输出多个字符串,以,分隔
        // echo 'hello wrold';
        // echo 'hello wrold','&nbsp;&nbsp;&nbsp;&nbsp;xiaoming';
        // echo 'hello wrold';
        // echo 'xiaoming123';
        // echo 'hello wrold','<br>xiaoming';

        // print:它也可以输出字符串,它只能输出一个值
        // print('abc');

        // print_r():更多的用来输出复杂类型：它可以输出复杂数据的key和值
        // print_r([1,2,3]);
        // echo [1,2,3];

        // var_dump():可以输出复杂类型，它可以输出复杂类型数据的key和value,同时还可以获取value的长度
        // var_dump(["abc","a","qq"]);

        # 它也可以进行单行注释，只不过很少用

        /* 
        多行注释中可以创建多行文本说明
        开头和结束与js一样
        */
    ?>
    <!-- 下面这句会返回到浏览器的进行解析 -->
    <hr>

    <p><?php echo 'abc'; ?></p>

    <!-- <?php  if(true){
        echo '结果为真';
    } ?> -->

    <?php  if(false){ ?>
        <h2>结果为真</h2>
    <?php } else{?>
        <h2>结果为假</h2>
    <?php } ?>
</body>
</html>