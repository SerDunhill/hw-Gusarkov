<?php

//$num=1000;
//$iterCount = 0;
//while ($num >= 50) {
//    $num /= 2;
//    $iterCount++;
//}
//echo "итоговое число = " . $num . "<br>";
//echo "количество итераций = " . $iterCount . "<br>";

function task2(){
    $num=1000;
    for ($i = 0 ;$num >= 50; $i++) {
        $num /= 2;
    }
    echo "итоговое число = " . $num . "<br>";
    echo "количество итераций = " . $i . "<br>";
}