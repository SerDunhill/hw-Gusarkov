<?php
$Birthday = '22.11.1999';
echo 'Дата рождения - ' . $Birthday . '<br>';
$now = date('d.m.Y');
echo "Сегодня - " . $now . '<br>';
$arr1 = explode('.', $Birthday);
$arr2 = explode('.', $now);
echo 'Я в поисках себя уже ' . $diff = date_diff(date_create($Birthday), date_create($now))->days . ' дней';