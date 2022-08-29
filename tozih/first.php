<?php
// addad aval ra za vorido terminal migirad va dar dakhel $number_1 zakhira mikonad
$number_1 = readline ('add aval ');// namber avali az ma mikhad
// addad dovom ra az terminal migirad va zakhire mikonad dar $number_2
$number_2 = readline ('add dovom ');// namber dovom az shoma mikhad
// addad aval ra ba addad dovom jam mikonad va nateje ra dat $jam zakhire mikonad
$jam = $number_1 + $number_2;// add aval va dovom mikhad jam kone ke az magerefte

$menha = $number_1 - $number_2;// add aval va dovom mikhad az ham kam kone

$zarb = $number_1 * $number_2;// add aval va dovom mikhad zarb kone

$taghsim = $number_1 / $number_2;//add aval va dovom mikhad taghsim kone
// string jam ra ba motaghayer $jam ba ham ezafe mikonad va aan ra chap mikonad
echo 'Jam Shod ' . $jam ;// namayehs mide barye ma add jam shode 1 va 2

echo 'menha Shod ' . $menha ; // namayesh mide add aval - add dovom

echo 'zarb shod ' . $zarb ; // namayesh zarb add aval va add dovomi ke dadim

echo 'taghsim ' . $taghsim ; // namayesh taghsim add aval va dovomi ke az ma gerefte betartib taghsim shode