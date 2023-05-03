<?php
session_start();
if (isset($_GET['style'])){setcookie('Theme', $_GET['style'], time() + 3600*24); }
require './PHP/functions/Functions.php';
Time_theme();
$style = ['Day', 'Night', 'Rainbow'];
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    if (isset($_COOKIE['Theme'])){
        $Theme = $_COOKIE['Theme'];
        switch ($Theme){
            case 'Day':
                $Theme = '<link href="./Styles/Styles_Day.css" rel="stylesheet">';
                break;
            case 'Night':
                $Theme = '<link href="./Styles/Styles_Night.css" rel="stylesheet">';
                break;
            case 'Rainbow':
                $Theme = '<link href="./Styles/Rainbow.css" rel="stylesheet">';
                break;
        }
    }
    echo $Theme;
    ?>
    <title>Document</title>
</head>
<body>
<header class="cont_nav">
        <div class="link"><a href="PHP/Authorization.php">Авторизация</a></div>
         <form action="">
             <select name="style">
                 <option disabled>Выберите стиль оформления</option>
                 <option value="Day" >
                     Дневная тема</option>
                 <option value="Night">
                     Ночная тема</option>
                 <option value="Rainbow">
                     Радуга)
                 </option>
             </select>
             <button type="submit">Ну-ка попробуем</button>
         </form>
        <div class="logo">SG</div>
        <div class="link"><a href="#Games">Игры</a></div>
        <div class="link"><a href="PHP/HW.php#start">"Вся домашка тут"</a></div>
</header>
<div class="Welcome" id="Wel">Привет ! Меня зовут Сергей и ты на моей первой странице</div>
<div class="container">
    <div class="About" id="About"><?php First_word(); ?></div>
    <div class="Frame">
        <img class="MAIN" src="Images/Photo.jpg" alt="Моё фото" style="max-width: 100%; object-fit: cover">
    </div>
    <div class="Revo"><?php Color_Word_task(); ?>
    </div>
</div>
<div class="plug"></div>
<div class="Book" id="Books">Книги которые мне понравились</div>
<div class="container_2">
    <div class="text">Ну начнем с классики. Это отлично написанное произведение на тему человеческих пороков, которые не денутся никуда ещё очень долгое время. Произведение цепляет относительной простотой подачи таких неоднозначных тем как: жадность, зависть, ненависть и т.д. через призму "чистого" человека</div>
    <div class="images_1"><img src="./Images/i.webp" alt="Идиот"></div>
    <div class="images_2"><img src="./Images/put.webp" alt="Путешествие к центру" style="object-fit: cover"></div>
    <div class="text">«Путешествие к центру Земли» — научно-фантастический роман французского писателя Жюля Верна, впервые опубликованный в 1864 году и рассказывающий о путешествии, совершённом группой исследователей в земных недрах.</div>
    <div class="text">Фауст — учёный, снедаемый скукой и тоской. После попытки самоубийства он призывает дьявола, чтобы получить новые знания и магическую силу, которые позволили бы ему предаться всем земным наслаждениям и овладеть всеми знаниями мира. В ответ является прислужник дьявола Мефистофель.</div>
    <div class="images_3"><img src="./Images/Faust.webp" alt="Фауст"></div>
    <div class="images_4"><img src="./Images/Dragon.webp" alt="Сердце дракона"></div>
    <div class="text">Он родился заново в мире, где боевые искусства неотличимы от магии. От прошлой жизни ему остались лишь нейро-сеть и несбыточные желания. Что ждет впереди? Он мечтал о приключениях и свободе, но у него отняли эти мечты. Так отняли мать, отца и сестру.</div>
</div>
<div class="plug"></div>
<div class="games" id="Games">Игры в которые я частенько играю в свободное время</div>
<div class="container_3">
    <div class="text"> Sid Meier’s Civilization VI. Пошаговая стратегия, в которой игрок развивает прообраз одного из реальных государств.</div>
    <div class="images_5"><img src="./Images/Civa.webp" alt="Civilization"></div>
    <div class="text"> Divinity: Original Sin II это стандартный пример RPG с отличным сюжетом, атмосферой, проработанными механиками, и тонной текста)</div>
    <div class="images_6"><img src="./Images/Divin.webp" alt="Divinity"></div>
</div>
<div class="plug"></div>
<div class="films">Бонусом расскажу и о фильмах, всё равно никто не будет читать =)</div>
<div class="container_4">
    <div class="images_7"><img src="./Images/Gamp.webp" alt="Gump"></div>
    <div class="images_8"><img src="./Images/OnePlus.webp" alt="OnePlus"></div>
    <div class="text">Удивительную историю о себе рассказывает молодой человек, к которому периодически подсаживаются люди на скамейке в городе Саванна, что находится в Штате Джорджия. Дело происходит на заре 80-х годов, а человека, сидящего на скамье, зовут Форрест Гамп.</div>
    <div class="text">Пострадав в результате несчастного случая, богатый аристократ Филипп нанимает в помощники человека, который менее всего подходит для этой работы, — молодого жителя предместья Дрисса, только что освободившегося из тюрьмы.</div>
</div>
<footer>
    <div>Связаться со мной вы можете по номеру телефона: <br> 8-904-308-26-32</div>
    <div>А так же немного инофрмации о страничке <br> <?php Count_Word(); ?></div>
    <div><?php Birthday();?></div>
</footer>
</body>
</html>