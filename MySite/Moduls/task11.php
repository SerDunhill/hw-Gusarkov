<?php
$arr =[];
echo 'Начальный массив ';
for($i = 0; $i < 10; $i++){
    $arr[$i] = mt_rand(0, 100);
    echo ' ' . $arr[$i];
}
echo '<br>';
echo 'Обратный массив ';
for ($i = 9; $i >= 0; --$i){
    echo ' ' . $arr[$i];
}