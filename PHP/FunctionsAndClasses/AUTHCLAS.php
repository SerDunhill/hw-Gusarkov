<?php
class AUTHCLAS
{
    private $login;
    private $password;
    private $User_check;

    public function CheckAuth($login, $password, $DB)
    {
        $this->login=$login;
        $this->password=$password;

        $User_check = mysqli_query($DB, "SELECT * FROM `Users` WHERE `login` = '$login' && `password` = '$password'");
        if (mysqli_num_rows($User_check) > 0) {
            header('Location: Hello.php');
        } else {
            $_SESSION['message'] = 'Неправильный логин или пароль';
            header('Location: Authorization.php');
            unset($_SESSION['message']);
        }
        $_SESSION['login'] = $_POST['login'];
    }
}