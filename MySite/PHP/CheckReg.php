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
header('Location: Authorization.php');