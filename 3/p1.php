<?php


$phase = 1;
$b = 1;
while (true){

    echo 'turn of loop : '.$b;

    echo $phase.PHP_EOL;

    if($phase == 1){

        $phase = 2;
        continue ;
    }

    if($phase == 2){

        $phase = 3;
        continue;
    }

    if($phase == 3){
        break;
    }

    $b++;
}

