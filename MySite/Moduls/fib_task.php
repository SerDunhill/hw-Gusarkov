<?php

/*ВАРИАНТ СО ВСТРОЕННЫМ ЦИКЛОМ, НО БЕЗ РЕКУРСИИ*/

/*function rec_fi($one, $two){
    for ($i = 1; $i<=20; $i++){
        $sum = $one + $two;
        $one = $two;
        $two = $sum;
        echo $sum . ' ';
    }
}
rec_fi(0, 1);*/



 function rec($x){
     if ($x<2){
         return $x;
     } else {
         return rec($x -1) + rec($x - 2);
     }
 }
 for ($x = 1; $x<=16; $x++){
     echo rec($x) . ", ";
 }
