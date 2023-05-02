<?php
/*print_r($_POST);*/
/*МАССИВ ПОЛЬЗОВАТЕЛЕЙ*/
$Users = ['Bob', 'Matew'];
$Email = ['Bob@mail.ru', 'Matew@gmail.com'];
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
    <button>Зарегистрироваться</button>
    <p><b>Вы уже зарегистрированы? - <a href="Authorization.php">Авторизация</a></b></p>
    <!--Проверка зарегестрированных-->
    <?php
    if(isset($_POST['login'])){
        if (array_key_exists($_POST['login'], $Users) == $_POST['login']){
            echo 'Такой логин уже существует';
        }
    }
    echo '<br>';
    if(isset($_POST['email'])) {
        if (array_key_exists($_POST['email'], $Email) == $_POST['email']) {
            echo 'Данный адрес уже используется ';
        }
    }
    ?>
</form>
</body>
</html>