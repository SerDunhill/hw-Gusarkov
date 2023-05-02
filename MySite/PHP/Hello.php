<?php
session_start();
echo '<h1>Привет ' . $_POST['login'] . '</h1>';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Привет!</title>
</head>
<body>
<div>
    <?php
    if (isset ($_SESSION['lastVisited'])) {
        echo '<h2>Последняя осещённая страница - ' . $_SESSION['lastVisited'] . '</h2>';
    }
    ?>
</div>
<div class="link">
    <a href="bitrix.php">Битрикс</a>
    <a href="fact.php">Факт-Академия</a>
</div>
<form action="<?php session_destroy()?>"></form>
<button>Выйти из аккаунта</button>
</body>
</html>
