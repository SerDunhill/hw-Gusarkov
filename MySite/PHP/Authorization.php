<?php
session_start();
require('connect_db.php');
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
<form method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите ваш логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit">Войти</button>
    <p><b>Вы тут впервые? - <a href="Register.php">Регистрация</a></b></p>
    <div class="link">
        <a href="../index.php">На главную</a>
    </div>
    <div><strong><?php echo 'Неправильный логин или пароль' ?></strong></div>
    <?php
    if(!isset($_POST)) {
        $login = $_POST['login'];
        $password = md5($_POST['password']);
        $User_check = mysqli_query($connect, "SELECT * FROM `Users` WHERE `login` = '$login' && `password` = '$password'");
        if (mysqli_num_rows($User_check) > 0){
            header('Location: ../Hello.php');
        } else {
            $_SESSION['message'] = 'Неправильный логин или пароль';
            unset($_SESSION['message']);
        }
    }
    ?>
</form>
</body>
</html>