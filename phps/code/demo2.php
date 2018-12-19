<?php
// echo '<pre>';


// Array
// (
//     [myfile] => Array
//         (
//             [name] => apple1.jpg
//             [type] => image/jpeg
//             [tmp_name] => C:\Users\Administrator\AppData\Local\Temp\phpC866.tmp
//             [error] => 0
//             [size] => 33841
//         )

// )
// print_r($_FILES);

if(!empty($_FILES)) {  //  判断($_FILES是否为空
  $type=$_FILES['myfile']['type'];
  $filename = $_FILES['myfile']['name'];
  $sion = strrchr($filename,".");
  $myname = date('YmdHis').mt_rand(1000,9999).$sion;
  $bool=move_uploaded_file($_FILES["myfile"]["tmp_name"],"./image/".$myname);
  // $bool=move_uploaded_file($_FILES["myfile"]["tmp_name"],"./image/".$_FILES["myfile"]["name"]);
  if($bool) {
    echo  "ok";
  }
}

?>