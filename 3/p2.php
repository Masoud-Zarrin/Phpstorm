<?php

function starts($number_of_starts_to_echo){

    $n = 1;
    while($n <= $number_of_starts_to_echo){
        echo '*';
        $n++;
    }

}



$phase = '0';
$start_from = 1;
$end_num = 1;

while(true){

    if($phase == 'a'){

        if($start_from == $end_num){

            $phase = '0';

            continue;
        }

        starts($start_from);
        echo PHP_EOL;
        $start_from++;

    }

    if($phase == 'b'){

        if($start_from == $end_num ){
            $phase = '0';

            continue;
        }
        starts($start_from);
        echo PHP_EOL;
        $start_from--;
    }



    if($phase == '0'){

        echo 'a) for patern one'.PHP_EOL;
        echo 'b) for patenr two'.PHP_EOL;
        echo 'exit) for exiting loop'.PHP_EOL;
        $phase = readline('insert phase number: ');
        if ($phase == 'exit'){
            break;
        }
        $start_from = readline('insert the start number: ');
        $end_num = readline('insert the end number: ');
    }



}