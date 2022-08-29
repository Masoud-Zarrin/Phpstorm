<?php

$a = '*';

$b = 1;

while ($b <= 3){

    $c = 1;

    while ($c <= $b){ // erad aval <=

        echo $a;
        $c ++;
    }

    echo PHP_EOL; // erad dovam PHP_EOL
    $b ++;
}
