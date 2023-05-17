<?php
session_start();
if(isset($_FILES['avatar'])) {
    $fotoPath = $_FILES['avatar']['name'];
    move_uploaded_file($_FILES['avatar']['tmp_name'], $fotoPath);
    $_FILES['avatar']['name'] = $fotoPath;
} else $_FILES['avatar']['name'] = 'i.webp';
if (isset($_POST['login'])) {
    $_SESSION['login'] = $_POST['login'];
}
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
        <img src="../foto/<?php  echo $_FILES['avatar']['name']?>" alt="Ваше фото">
        <br>
        <input type="file" name="avatar" accept="image/*">
        <br>
        <button type="submit">Загрузить</button>
    </form>
</div>
<div>
    <?php
    echo '<h1>Привет ' . $_SESSION['login'] . '</h1>';
    if (isset ($_SESSION['lastVisited'])) {
        echo '<h2>Последняя осещённая страница - ' . $_SESSION['lastVisited'] . '</h2>';
    }
    ?>
    <a href="bitrix.php">Битрикс</a>
    <a href="fact.php">Факт-Академия</a>
</div>
<form action="<?php /*session_destroy()*/?>">
<button type="submit">Выйти из аккаунта</button>
</form>
<div>
    <a href="../index.php"> На главную</a>
</div>
</body>
</html>
