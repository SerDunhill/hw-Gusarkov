<?php
$str = 'Очень нравится учиться программировать, особенно когда тебе в любой момент могут помочь "раздуплиться", если ты что то не понял.';
$arr = explode(' ', trim($str));
foreach ($arr as $key => $value){
    if ($key % 2 == 0){
        $arrCol[] = '<span style="color:orangered">' . $value . '</span>';
    } else {
        $arrCol[] = '<span style="color:mediumpurple">' . $value . '</span>';
    }
}
$Chet = implode(' ', $arrCol);
echo $Chet;