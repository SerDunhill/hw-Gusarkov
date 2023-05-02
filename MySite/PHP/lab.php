<?php
session_start();
/*print_r($_GET);*/
if(isset($_GET['I'])) {
    $title = $_GET['I'];
}
session_destroy();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
</head>
<body>
<div>
    <form action="" method="get">
        <select name="Lab" onchange="window.location.href=this.options[this.selectedIndex].value">
            <option>Выбор</option>
            <option value="http://hw-gusarkov/MySite/PHP/lab.php?I=Lab1">Лабораторка 1</option>
            <option value="http://hw-gusarkov/MySite/PHP/lab.php?I=Lab2">Лабораторка 2</option>
            <option value="http://hw-gusarkov/MySite/PHP/lab.php?I=Lab3">лабораторка 3</option>
            <option value="http://hw-gusarkov/MySite/PHP/lab.php?I=Lab4">Лабораторка 4</option>
        </select>
    </form>
</div>
</body>
</html>