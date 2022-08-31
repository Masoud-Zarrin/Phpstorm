<?php

$a = '*';

$b = 10;

$phase = 2;

while (true){

    if ($phase ==1){

        if ($b >= 11){
            break;
        }

        $c = 1;
        while ($c <= $b){

            echo $a;
            $c++;
        }
        echo PHP_EOL;
        $b++;
    }

    if ($phase == 2){

        if ($b == 1){
            $phase = 1;
            continue;
        }

        $c = 1;
        while($c <= $b){

            echo $a;
            $c++;
        }
        echo PHP_EOL;
        $b--;
    }
}