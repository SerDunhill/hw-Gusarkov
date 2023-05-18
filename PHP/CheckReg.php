<?php
session_start();
require_once 'FunctionsAndClasses/REGCLASS.php';
require_once 'FunctionsAndClasses/DBClass.php';

$connect = new DBClass('localhost', 'SergeyGusarkov', 1, 'Users');
$DB = $connect->dbconnect();

 $CheckReg = new REGCLASS();

$name = $_POST['name'];
$login = $_POST['login'];
$password = md5($_POST['password']);
$email = $_POST['email'];

 $CheckReg->RegCheck($login, $email, $name, $password, $DB);

unset($_SESSION['message']);
