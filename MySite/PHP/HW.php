<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/DZ.css">
</head>
<body>
<div class="cont1">
    <div class="Slide">СЛАЙД 23</div>
    <div class="zadania">Задание№1 <br>
        <?php
            for($m=1; $m<=30; $m++){
                if($m % 2 == 0){
                    echo $m;
                    echo '<br>';
                }
            }
        ?>
    </div>
    <div class="zadania">Задание№2 <br>
        <?php
        for($m=1; $m<=50; $m++){
            if ($m % 3 == 0){
                echo '<em>' . $m . '</em>';
                if($m % 5 == 0){
                    echo '<strong>' . '<em>' . $m . '</em>' . '</strong>';
                }
            }
        }
        ?>
    </div>
    <div class="zadania">Задание№3 <br>
        <?php
        // ТУТ Я НЕ УВЕРЕН ПРАВИЛЬНО ЛИ Я ПОНЯЛ УСЛОВИЕ, НО ВРОДЕ КАК ТО ТАК
        $pi = 0;
        $znam = 1;
        for ($s = 1; $s < 120 ; $s++){
            if ($s % 2 == 1){
                $pi = $pi + 4 / $znam;
            }else{
                $pi = $pi - 4 / $znam;
            }
            $znam = $znam + 2;
        }
        echo 'Число Пи:' . $pi . '<br>';
        echo 'Количество слагаемых:' . $s / 2;
        ?>
    </div>
    <div class="zadania">Задание №4 <br>
        <?php
        $zn = 1;
        $ch = 1;
        $sum = 0;
        while ($sum < 10) {
            $res = $ch / $zn;
            $sum = $sum + $res;
            $zn++;
            $ch = $ch + 3;
        }
        echo 'Сумма :' . $sum . '<br>';
        echo 'Количество циклов : ' . $zn - 1;
        ?>
    </div>
</div>
<div class="cont2">
    <div class="Slide">СЛАЙД 24</div>
    <div class="zadania"> Задание №1 <br>
        <?php
        $sum = 0;
        $K = 231;
        do {
            if ($K % 2 == 0) {
                $sum = $K + $sum;
            }
            --$K;
        }
        while($K>=0);
            echo "Сумма четных чисел:" . $sum;
        ?>
    </div>
    <div class="zadania"> Задание №2 <br>
        <?php
        $NUM = 879;
        $x = ($NUM / 100) - (($NUM % 100) / 100);
        $y = ($NUM % 100 - $NUM % 10) / 10;
        $z = ($NUM % 100) - $y * 10;
        $arr = [$x, $y, $z];
        for ($bu = 0; $bu < 2; $bu++) {
            for ($i = 0; $i < 2 - $bu; $i++) {
                if ($arr[$bu] < $arr[$i]) {
                    $swap = $arr[$i + 1];
                    $arr[$i + 1] = $arr[$i];
                    $arr[$i] = $swap;
                }
            }
        }
        foreach ($arr as $p) {
            echo $p;
        }
        ?>
    </div>
    <div class="zadania"> Задание№3 <br>
        <?php
        for ($bu = 0; $bu < 2; $bu++) {
            for ($i = 0; $i < 2 - $bu; $i++) {
                if ($arr[$bu] > $arr[$i]) {
                    $swap = $arr[$i + 1];
                    $arr[$i + 1] = $arr[$i];
                    $arr[$i] = $swap;
                }
            }
        }
        foreach ($arr as $p) {
            echo $p;
        }
        ?>
    </div>
</div>
<div class="cont3">
    <div class="Slide">СЛАЙД 25</div>
    <div class="zadania"></div>
    <div class="zadania"></div>
    <div class="zadania"></div>
</div>
</body>
</html>