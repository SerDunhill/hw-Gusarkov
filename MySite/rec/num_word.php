<?php
$str = strip_tags(file_get_contents("../PHP/index.php"));
$str = $Chet . ' ' . $strAbout . ' ' . $str;
/*echo $str . '<br>';*/
$Vowels = preg_match_all('/[ЁёУуЕеыАаОоЭэЯяИиЮю]/u', $str);
echo 'Количество гласных в тексте - ' . $Vowels . '<br>';
$WordCo = str_word_count($str);
echo 'Количество слов в тексте - ' . $WordCo;



