<?php
session_start();
require_once 'connect_db.php';

$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
$password = md5($password);
$email = $_POST['email'];

mysqli_query($connect,
    "INSERT INTO `Users` (`id_users`, `login`, `email`, `password`, `Name`)
               VALUES (NULL, '$login', '$email', '$password', '$name')");
$_SESSION['message'] = 'Вы успешно зарегестрированны';
unset($_SESSION['message']);

$User_check = mysqli_query($connect, "SELECT * FROM `Users` WHERE `login` = '$login' && `email` = '$email'");
if (mysqli_num_rows($User_check) > 0){
    $_SESSION['message'] = 'Данный логин или адресс уже используются';
    header('Location: Register.php');
} else {
    header('Location: Authorization.php');
}
