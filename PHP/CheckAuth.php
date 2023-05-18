<?php
session_start();
require_once 'FunctionsAndClasses/DBClass.php';
require_once 'FunctionsAndClasses/AUTHCLAS.php';

$connect = new DBClass('localhost', 'SergeyGusarkov', 1, 'Users');
$DB = $connect->dbconnect();

$CheckAuth = new AUTHCLAS();
$login = $_POST['login'];
$password = md5($_POST['password']);
$CheckAuth->CheckAuth($login, $password, $DB);