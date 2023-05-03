<?php
session_start();
echo '<h1>Привет ' . $_SESSION['login'] . '</h1>';
$fotoPath = 'foto/';
move_uploaded_file($_FILES['avatar']['tmp_name'], './' . $fotoPath);
print_r($_FILES);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Styles/Hello.css">
    <title>Привет!</title>
</head>
<body>
<div class="ava">
    <form method="post" enctype="multipart/form-data">
        <label for="avatar">Ваша аватарка</label>
        <br>
        <input type="file" name="avatar">
        <br>
        <button type="submit">Загрузить</button>
    </form>
</div>
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
<form action="<?php /*session_destroy()*/?>">
<button type="submit">Выйти из аккаунта</button>
</form>
</body>
</html>
