<?php
session_start();

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Styles/Authorization.css">
    <title>Регистрация</title>
</head>
<body>
<form method="post">
    <label>Имя</label>
    <input type="text" name="name" placeholder="Введите ваше Имя">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Придумайте логин">
    <label>Email</label>
    <input type="email" name="email" placeholder="Укажите ваш email">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Придумайте пароль пароль">
    <button type="submit">Зарегистрироваться</button>
    <p><b>Вы уже зарегистрированы? - <a href="Authorization.php">Авторизация</a></b></p>
    <p class="message"><?php if (isset($_SESSION['message'])){ echo $_SESSION['message']; unset($_SESSION['message']); } ?></p>
    <!--Проверка зарегестрированных-->
    <?php
        $name = $_POST['name'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $password = md5($password);
        $email = $_POST['email'];


        require('connect_db.php');


        mysqli_query($connect,
            "INSERT INTO `Users` (`id_users`, `login`, `email`, `password`, `Name`)
               VALUES (NULL, '$login', '$email', '$password', '$name')");
        $_SESSION['message'] = 'Вы успешно зарегестрированны';
        unset($_SESSION['message']);
    ?>
</form>
</body>
</html>