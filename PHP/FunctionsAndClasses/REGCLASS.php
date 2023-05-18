<?php

class REGCLASS
{
private $name;
private $login;
private $password;
private $email;
private $User_check;

public function RegCheck($login, $email, $name, $password, $DB){
    session_start();

    $this->login=$login;
    $this->email=$email;
    $this->name=$name;
    $this->password=$password;

    $User_check = mysqli_query($DB, "SELECT * FROM `Users` WHERE `login` = '$login' && `email` = '$email'");
    if (mysqli_num_rows($User_check) > 0){
        $_SESSION['message'] = 'Данный логин или адресс уже используются';
        header('Location: Register.php');
    } else {
        mysqli_query($DB,
            "INSERT INTO `Users` (`id_users`, `login`, `email`, `password`, `Name`)
               VALUES (NULL, '$login', '$email', '$password', '$name')");
        $_SESSION['message'] = 'Вы успешно зарегестрированны';
        header('Location: Authorization.php');
    }
}
}