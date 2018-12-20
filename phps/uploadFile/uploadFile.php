<?php
    print_r($_POST);


    echo '-----------------------';
    print_r($_FILES);
    $str=strrchr($_FILES["myfile"]["name"],".");
    $file=time().mt_rand(1000,9999).$str;
    move_uploaded_file($_FILES["myfile"]["tmp_name"],"./upload/".$file);
?>