<?php
session_start();
if(isset($_POST['login'])) {$_SESSION['login'] = $_POST['login'];}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Styles/Authorization.css">
    <title>Авторизация</title>
</head>
<body>
<form action="CheckAuth.php" method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите ваш логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit">Войти</button>
    <p><b>Вы тут впервые? - <a href="Register.php">Регистрация</a></b></p>
    <div class="link">
        <a href="../index.php">На главную</a>
    </div>
    <div><strong>
            <?php if(isset($_SESSION['message'])){ echo $_SESSION['message']; }?>
        </strong></div>
</form>
</body>
</html>