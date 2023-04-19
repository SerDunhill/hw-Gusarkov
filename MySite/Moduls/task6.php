<?php
$pi = 0;
$b = 1;
for ($i = 1; number_format($pi, 2) != 3.14; $i++){
if ($i % 2 == 1){
$pi += 4 / $b;
}else{
$pi -= 4 / $b;
}
$b += 2;
}
echo "Количество слагаемых - " . $i - 1 . '<br>';
echo "Число Пи = " . number_format($pi, 2);