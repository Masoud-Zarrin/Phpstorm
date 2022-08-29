<?php

$a = '*';

$b = 1;

while ($b <= 3){

    $c = 1;

    while ($c <= $b){

        echo $a;

        $c ++;
    }

    echo PHP_EOL;
    $b ++;
}