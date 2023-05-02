<?php
/*МАССИВ ПОЛЬЗОВАТЕЛЕЙ*/
$Users = ['Bob' => md5(123), 'Lenni' => md5('qwerty'), 'Colins' => md5('321')];
/*ПРОВЕРКА НА РЕГИСТРАЦИЮ ПОЛЬЗОВАТЕЛЯ*/
function Verification($Users) {
    if (isset($_POST['login']) and isset($_POST['password'])) {
        $login = $_POST['login'];
        $Pass = md5($_POST['password']);
        if (array_key_exists($login, $Users) and $Users[$login] == $Pass) {
            $_POST['password'] = $Pass;
            echo 'Hello.php';
        } else {
            echo 'Error.php';
        }
    }
}
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
<form action="<?php Verification($Users); ?>" method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите ваш логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button>Войти</button>
    <p><b>Вы тут впервые? - <a href="Register.php">Регистрация</a></b></p>
    <div class="link">
        <a href="../index.php">На главную</a>
    </div>
</form>
</body>
</html>