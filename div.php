<?php
$arr = ['red','blue','black'];
function getDiv ($array) {
    foreach ($array as $v) {
        echo '<div style=width:100px;height:100px;background-color:'.$v.'></div>';
    }
}
getDiv($arr);
?>