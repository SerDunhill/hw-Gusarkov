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
function Color_Word_task(){
    $str = 'Из планов на будующее: Сделать страничку с паралакс эффектом, развить Hello до полноценной странички';
    $arr = explode(' ', trim($str));
    foreach ($arr as $key => $value){
        if ($key % 2 == 0){
            $arrCol[] = '<span style="color:green">' . $value . '</span>';
        } else {
            $arrCol[] = '<span style="color:green">' . $value . '</span>';
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