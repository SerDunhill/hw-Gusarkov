<?php
$strAbout = 'Сейчас я обучаюсь в онлайн-академии факт и наверное это единственное, что тут необходимо указывать. У меня есть хобби - люблю читать фантастику, чем более отрывную от реальности - тем лучше. А так же иногда играю в баскетбол.';
$arr = explode('. ',trim($strAbout));
foreach ($arr as $key => $value){
    if ($key == 0){
        echo '<span style="color:red">' . $value . '</span>';
    } else {
        $arr1[] = $value;
    }
}
$First = implode('. ', $arr1);
echo ' ' . $First;