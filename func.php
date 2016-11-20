<?php
    $b = 'b';
    function getB() {
        echo $b;
    }
    getB();


    $a = 'a';
    function getA() {
       $a = 1;
       return $a;
    }
    echo getA();



    while($a > 1) {
        echo $a;
        if($a == 2) {
            break;
        }
    }
?>