<?php
$sum = 0;
$K = 8;
do {
    if ($K % 2 == 0) {
        $sum = $K + $sum;
    }
    --$K;
}
while($K>=0);
echo "Сумма четных чисел:" . $sum;