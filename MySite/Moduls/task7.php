<?php
function task7(){
    $b = 1;
    $a = 1;
    $sum = 0;
    while ($sum < 10) {
        $res = $a / $b;
        $sum = $sum + $res;
        $b++;
        $a += 3;
    }
    echo 'Полученная сумма ' . $sum . '<br>';
    echo 'Всего сложений ' . $b - 1;
}