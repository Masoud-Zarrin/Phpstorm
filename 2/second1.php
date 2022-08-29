<?php
/*
 *
 **
 ***
 ****
 */

$str = '*';

$i = 1;

while ($i <= 10) {

    $j = 1;
    while ($j <= $i){
        echo $str;
        $j++;
    }
    echo PHP_EOL;
    $i ++;
}