<?php

function arr($arr){
    $total = 1;
    foreach($arr as $a){
        $total *=  $a;
        }
    return $total;
}

echo arr([1, 3, 5, 7, 9]) . "\n";
