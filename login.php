<?php 
$a = array(
    0 => 6,
    1 => 6,
    2 => 'c'
);
// $b = array_flip($a);
// var_dump($b);
// $result = 2;
// if ($result > 1) {
//     $result = $result;
// } else {
//     $result = 1;
// }
// $result = $result > 1 ? $result : 1;
// foreach ($a as $key => $value) {
//     echo $value.' ';
// }
$ac = count($a);
$keys = array_keys($a);
for ($i = 0; $i < $ac; $i++) {
    echo $a[$keys[$i]];
}
// if ($a == 1) {
//     echo 1;
// } else if ($a < 2) {
//     echo 'a小于2';
// }
// if ($a == 1) {
//     echo 1;
// }
// if ($a < 2) {
//     echo 'a小于2';
// }
// define('PI',3.14);
// $r = 2;
// $s = PI*$r*$r;
// echo $s;
// $a = 1;
// echo '$a';
// echo '<br>';
// echo '<h1>dadada</h1>';
// echo "$a";
//$userName
    // var_dump($_POST);
    // echo $_POST['user_name'];
//    echo __FILE__;
//    $user = htmlspecialchars($_POST['user_name']);//特殊字符转义
//    //header('Refresh: 10; url=./index.php');
   
?>