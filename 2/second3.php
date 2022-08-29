<?php

$str = '*';

$i = 1;

while ($i <= 10) {

    echo $i. PHP_EOL;
    $j = 1;

    while ($j <= 20 ) {
        echo $j .' ';

        $j ++;
    }
    echo PHP_EOL;
    $i ++;
}

echo 'done';