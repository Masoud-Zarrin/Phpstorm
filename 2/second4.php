<?php

$i = 1;

while ($i <= 20 ) {

    $j = 1;
    while ($j <= $i) {

        echo PHP_EOL;
        $j ++;
    }
    echo $i;
    $i ++;
}