<?php

$a = '*';

$b = 3;

while ($b >= 1){

    $c = 1;
    while ( $c <= $b){

        echo $a;
        $c ++;
    }
    echo PHP_EOL;
    $b --;
}