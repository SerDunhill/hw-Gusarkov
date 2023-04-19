<?php
$NUM = 879;
$str = (string)$NUM;
$arr = str_split($str,1);
for ($bu = 0; $bu < 2; $bu++) {
for ($i = 0; $i < 2 - $bu; $i++) {
if ($arr[$bu] < $arr[$i]) {
$swap = $arr[$i + 1];
$arr[$i + 1] = $arr[$i];
$arr[$i] = $swap;
}
}
}
echo 'Дано число ' . $NUM . '<br>';
echo 'Результат ';
foreach ($arr as $p) {
echo $p;
}
//for ($bu = 0; $bu < 2; $bu++) {
//    for ($i = 0; $i < 2 - $bu; $i++) {
//        if ($arr[$bu] > $arr[$i]) {
//            $swap = $arr[$i + 1];
//            $arr[$i + 1] = $arr[$i];
//            $arr[$i] = $swap;
//        }
//    }
//}