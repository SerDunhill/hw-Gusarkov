<?php
function Time_theme(){
    date_default_timezone_set ('Asia/Yekaterinburg');
    $a = date('H');
    $InSec = $a * 3600;
    if ($InSec >= 36000 and $InSec <= 79200){
        echo '<link href="./Styles/Styles_Day.css" rel="stylesheet">';
    }else{
        echo '<link href="./Styles/Styles_Night.css" rel="stylesheet">';
    }
}
function Birthday(){
    $Birthday = '22.11.1999';
    echo 'Дата рождения - ' . $Birthday . '<br>';
    $now = date('d.m.Y');
    echo "Сегодня - " . $now . '<br>';
    $arr1 = explode('.', $Birthday);
    $arr2 = explode('.', $now);
    echo 'Я в поисках себя уже ' . $diff = date_diff(date_create($Birthday), date_create($now))->days . ' дней';
}
function Color_Word_task(){
    $str = 'Учусь скролить, пока безуспешно(';
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
}
function First_word (){
    $strAbout = 'ВНИМАНИЕ КРАЙНЕ ВАЖНАЯ ИНФОРМАЦИЯ!!! <br> Сейчас я обучаюсь в онлайн-академии факт и наверное это единственное, что тут необходимо указывать. У меня есть хобби - люблю читать фантастику, чем более отрывную от реальности - тем лучше. А так же иногда играю в баскетбол.';
    $arr = explode('! ',trim($strAbout));
    foreach ($arr as $key => $value){
        if ($key == 0){
            echo '<span style="color:red">' . $value . '</span>';
        } else {
            $arr1[] = $value;
        }
    }
    $First = implode('! ', $arr1);
    echo ' ' . $First;
}
function Count_Word(){
    $str = strip_tags(file_get_contents("index.php"));
    $strAbout = 'Сейчас я обучаюсь в онлайн-академии факт и наверное это единственное, что тут необходимо указывать. У меня есть хобби - люблю читать фантастику, чем более отрывную от реальности - тем лучше. А так же иногда играю в баскетбол.';
    $Chet = 'Очень нравится учиться программировать, особенно когда тебе в любой момент могут помочь "раздуплиться", если ты что то не понял.';
    $str = $Chet . ' ' . $strAbout . ' ' . $str;
    /*echo $str . '<br>';*/
    $Vowels = preg_match_all('/[ЁёУуЕеыАаОоЭэЯяИиЮю]/u', $str);
    echo 'Количество гласных в тексте - ' . $Vowels . '<br>';
    $WordCo = str_word_count($str);
    echo 'Количество слов в тексте - ' . $WordCo;

}