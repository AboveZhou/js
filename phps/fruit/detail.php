<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .container ul > li {
            float: none;
            width: 100%;
            text-align: center;
        }
        .container ul > li img {
            width: auto;
        }
    </style>
</head>
<body>
    <div class="header">
        传智网上水果超市
    </div>
    <div class="container">
        <p>
            <a href="#">水果</a>
            <a href="#">干果</a>
            <a href="#">蔬菜</a>
        </p>
        <?php 
           $id = $_GET['id'];
        //    echo $id;
           $str = file_get_contents('fruit.txt');
           $arr = explode("\n",$str);
        //    print_r($arr);
        foreach($arr as $value) {
            $array[]=explode("|",$value);
        }
        // print_r($array);
        foreach($array as $value) {
            if ($id == $value[0]) {
                $res=$value;
                break;
            }

        }
           ?>
        <ul>
          
            <li>
                <img src="<?php echo $res[1]?>" alt="">
                <p>这是<?php echo $res[2]?>商品的详情图</p>
            </li>
        </ul>
    </div>
    <div class="footer">
        传智播客 版权所有
    </div>
</body>
</html>