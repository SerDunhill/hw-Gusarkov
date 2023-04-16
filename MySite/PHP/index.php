<?php
date_default_timezone_set ('Asia/Yekaterinburg');
$a = date('H');
$InSec = $a * 3600;
if ($InSec >= 36000 and $InSec <= 79200){
    echo '<link href="../Styles/Styles_Day.css" rel="stylesheet">';
}else{
    echo '<link href="../Styles/Styles_Night.css" rel="stylesheet">';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header class="cont_nav">
        <div class="link"><a href="#About">Обо мне</a></div>
        <div class="link"><a href="#Books">Книги</a></div>
        <div class="logo"><a href="#Wel">SG</a></div>
        <div class="link"><a href="#Games">Игры</a></div>
        <div class="link"><a href="HW.php#start">"Вся домашка тут"</a></div>
</header>
<div class="Welcome" id="Wel">Привет ! Меня зовут Сергей и ты на моей первой странице</div>
<div class="container">
    <div class="About" id="About"><?php require_once '../rec/Word.php' ?></div>
    <div class="Frame">
        <img src="../Images/Photo.jpg" alt="Моё фото" style="max-width: 100%; object-fit: cover">
    </div>
    <div class="Revo"><?php require_once '../rec/Chet_word.php' ?>
    </div>
</div>
<div class="plug"><?php include_once '../rec/num_word.php' ?><br>
    <?php require_once '../rec/Birthday.php'?>
</div>
<div class="Book" id="Books">Книги которые мне понравились</div>
<div class="container_2">
    <div class="text">Ну начнем с классики. Это отлично написанное произведение на тему человеческих пороков, которые не денутся никуда ещё очень долгое время. Произведение цепляет относительной простотой подачи таких неоднозначных тем как: жадность, зависть, ненависть и т.д. через призму "чистого" человека</div>
    <div class="fr">
        <div class="images_1"></div>
    </div>
    <div class="fr">
        <div class="images_2"></div>
    </div>
    <div class="text">«Путешествие к центру Земли» — научно-фантастический роман французского писателя Жюля Верна, впервые опубликованный в 1864 году и рассказывающий о путешествии, совершённом группой исследователей в земных недрах.</div>
    <div class="text">Фауст — учёный, снедаемый скукой и тоской. После попытки самоубийства он призывает дьявола, чтобы получить новые знания и магическую силу, которые позволили бы ему предаться всем земным наслаждениям и овладеть всеми знаниями мира. В ответ является прислужник дьявола Мефистофель.</div>
    <div class="fr">
        <div class="images_3"></div>
    </div>
    <div class="fr">
        <div class="images_4"></div>
    </div>
    <div class="text">Он родился заново в мире, где боевые искусства неотличимы от магии. От прошлой жизни ему остались лишь нейро-сеть и несбыточные желания. Что ждет впереди? Он мечтал о приключениях и свободе, но у него отняли эти мечты. Так отняли мать, отца и сестру.</div>
</div>
<div class="plug"></div>
<div class="games" id="Games">Игры в которые я частенько играю в свободное время</div>
<div class="container_3">
    <div class="text"> Sid Meier’s Civilization VI. Пошаговая стратегия, в которой игрок развивает прообраз одного из реальных государств.</div>
    <div class="fr">
        <div class="images_5"></div>
    </div>
    <div class="text"> Divinity: Original Sin II это стандартный пример RPG с отличным сюжетом, атмосферой, проработанными механиками, и тонной текста)</div>
    <div class="fr">
        <div class="images_6"></div>
    </div>
</div>
<div class="plug"></div>
<div class="films">Бонусом расскажу и о фильмах, всё равно никто не будет читать =)</div>
<div class="container_4">
    <div class="fr">
        <div class="images_7"></div>
    </div>
    <div class="fr">
    <div class="images_8"></div>
</div>
    <div class="text">Удивительную историю о себе рассказывает молодой человек, к которому периодически подсаживаются люди на скамейке в городе Саванна, что находится в Штате Джорджия. Дело происходит на заре 80-х годов, а человека, сидящего на скамье, зовут Форрест Гамп.</div>
    <div class="text">Пострадав в результате несчастного случая, богатый аристократ Филипп нанимает в помощники человека, который менее всего подходит для этой работы, — молодого жителя предместья Дрисса, только что освободившегося из тюрьмы.</div>
</div>
<?php
date_default_timezone_set ('Asia/Yekaterinburg');
echo date('H:i');
?>
</body>
</html>