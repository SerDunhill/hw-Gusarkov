<?php
    $a = 5;
    while ($a<=13){
        echo $a++;
        echo '<br>';
    }
 //  $num = 1000;
     $z = 0;
 //   while ($num>50){
 //       $z++;
 //       $num = $num / 2;
 //       if ($num<50){
 //           echo 'Итоговое число:' . $num . '<br>';
 //           echo 'Итерация номер:' . $z;
 //       }
 //  }
    for ($num = 1000; ;  $num = $num / 2 and $z++){
        if ($num<50){
            echo '<br>' . 'Итоговое число:' . $num . '<br>';
            echo 'Итерация номер:' . $z . '<br>';break;
        }
    }
    $i = 10;
    $b = 11 - $i;
    for ($c = 0; $c < $b; $c++){
        echo $c;
    }
