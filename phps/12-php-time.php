<?php
    // time():从 Unix 纪元（格林威治时间 1970-01-01 00:00:00）到当前时间的秒数
    // echo time();
    // 默认情况下这个函数获取的是格林威志时间，如果想获取中国时区的时间，就需要进行配置文件的修改
    // php-ini >date.timezone = PRC|Asia/shanghai|Asia/chongqin
    echo date("Y-m-d H:i:s");

    // strtitime()
    echo "<hr>";
    echo strtotime("1970-1-2");
?>