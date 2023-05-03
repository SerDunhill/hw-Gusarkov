<?php
/*TASK 2*/
/*mkdir('task');*/


/*TASK3*/
$FIO = file('Input.txt');
$str = implode($FIO);
$Contact = explode(' ', $str);
echo $Contact[0] . ' ' . $Contact[1];
echo '<br>';
echo '<br>';


/*TASK4*/
/*Знаю, очень длинно и можно проще, но я тренируюсь так как тема очень тяжело заходит*/
/*Запиываем первый файл в строку*/
$Str_One = fopen('Hello.txt', 'r');
$Str_read_one = fread($Str_One, filesize('Hello.txt'));
fclose($Str_One);
/*Записываем второй файл в строку*/
$Str_Two = fopen('Bue.txt', 'r');
$Str_read_two = fread($Str_Two, filesize('Bue.txt'));
fclose($Str_Two);
/*Разделяем на массив*/
$Mas_one = preg_split('/(?<=[.!])\s+/', $Str_read_one);
$Mas_two = preg_split('/(?<=[.!])\s+/', $Str_read_two);
/*Ищем разницу и выделяем не повторяющийся фрагмент*/
$differ = array_diff($Mas_one, $Mas_two);
/*Сливаем и объединяем. Получаем результат*/
$result_mas = array_merge($differ, $Mas_two);
$result = implode(' ', $result_mas);
echo $result;
echo '<br>';
/*Ну и выполняем условие задания*/
file_put_contents('No_Repeat.txt', $result);

/*TASK5*/
/*Ну и немного повтора циклов, а то я уже плаваю*/
foreach ($Mas_one as $value_one){
    foreach ($Mas_two as $value_two){
        if ($value_one == $value_two) {
            $Repeat = $value_one;
        }
    }
}
echo $Repeat;
/*Нашли все повторы, осталось лишь записать в файл*/
file_put_contents('Repeat.txt', $Repeat);







