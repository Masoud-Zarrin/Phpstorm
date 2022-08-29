<?php



//

// <=

// =

// true false (boolean)



// $i = 1; meghdar 1 ra dar $i gharar bede

// $i <= 1; aya meghdar daron $i kichek tar ya mosavi az 1 hast ya na

// $javab = $i <= 1;
//$str = 'this is a string';
//
//$i = 1; // this is an int (integer)
//
//$true_bool = true; // dorost ya ghalat
//$false_bool = false;
//
//echo PHP_EOL;
//echo  gettype($true_bool);
//echo PHP_EOL;
//echo gettype($i);
//echo PHP_EOL;
//echo gettype($str);
//echo PHP_EOL;

$i = 1; // this is an int (integer)

$aya_bishtar_hast_ya_na = ($i <= 20);
echo gettype($aya_bishtar_hast_ya_na);
echo ''.$aya_bishtar_hast_ya_na;
echo PHP_EOL;

$aya_bishtar_hast_ya_na = ($i <= -10);
echo gettype($aya_bishtar_hast_ya_na);
echo ''.$aya_bishtar_hast_ya_na;
echo PHP_EOL;

$aya_bishtar_hast_ya_na = (-10 == -10);
echo gettype($aya_bishtar_hast_ya_na);
echo ''.$aya_bishtar_hast_ya_na;
echo PHP_EOL;


if( 10 == 10){

}



$result = (10 == 10);

if($result){

}


while ($aya_bishtar_hast_ya_naa = ($i <= 20) ){
    echo ''.$aya_bishtar_hast_ya_naa;
    $i++;
}
echo PHP_EOL;
echo ''.$aya_bishtar_hast_ya_naa;


$variable = 0;

$variable2 = $variable;

$c = $variable == $variable2;

$v = $variable2 === $variable;






