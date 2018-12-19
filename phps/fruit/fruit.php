<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="header">
        传智网上水果超市
    </div>
    <div class="container">
        <p>
            <a href="javascript:;">水果</a>
            <a href="javascript:;">干果</a>
            <a href="javascript:;">蔬菜</a>
        </p>
        <?php
       $str = file_get_contents('fruit.txt');
    //    echo $str;
    $arr = explode("\n",$str);
    // print_r($arr) ;
    foreach($arr as $value) {
       $result[]= explode("|",$value);
    }
    // print_r($result);
        ?>
        <ul>
            <?php

            foreach($result as $value) :?>
                <li>
                <img src="<?php echo $value['1'] ?>" alt="">
                <a href="detail.php?id=<?php echo $value['0']?>"><?php echo $value['2'] ?></a>
            </li>
            <?php endforeach?>
          
            
          
        </ul>
    </div>
    <div class="footer">
        传智播客 版权所有
    </div>
</body>
</html>