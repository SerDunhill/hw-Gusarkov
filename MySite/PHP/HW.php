<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Styles/DZ.css">
    <title>Document</title>
</head>
<body>
    <div>
        <p class="Task">Задание 1 <br></p>
        Выведите столбец чисел от 5 до 13.

        <p class="Task">Решение: <br></p>
        <?php
        require "../Moduls/task1.php";
        ?>
    </div>
    <div>
        <p class="Task">Задание 2 <br></p>
        Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50.
        Какое число получится? Посчитайте количество итераций, необходимых для этого
        (итерация - это проход цикла). Решите задачу сначала через цикл while,
        а потом через цикл for.

        <p class="Task">Решение: <br></p>
        <?php
        require "../Moduls/task2.php";
        ?>
    </div>
    <div>
        <p class="Task">Задание 3 <br></p>
        Необходимо создать переменную ($i) и передавать в нее значение.
        Если в переменную положить 0, то на экране должна отображаться строка со значением
        «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». Если переменная равна 1, то на экране отображается строка
        «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». Если переменная равна 2, то на экране отображается строка
        «0, 1, 2, 3, 4, 5, 6, 7, 8». Если переменная равна 3, то на экране отображается строка
        «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10.

        <p class="Task">Решение: <br></p>
        <?php
        require "../Moduls/task3.php";
        ?>
    </div>
    <div>
        <p class="Task">Задание 4 <br></p>
        Дана последовательность элементов от 1 до 30. Необходимо вывести на экран числа, кратные 2.
        Каждое число должно быть с новой строки.

        <p class="Task">Решение: <br></p>
        <?php
        require "../Moduls/task4.php";
        ?>
    </div>
    <div>
    <p class="Task">Задание 5 <br></p>
    Дана последовательность элементов от 1 до 50. Необходимо сделать курсивом каждый элемент, кратный 3.
    Числа, одновременно кратные 3 и 5, сделать жирным.

    <p class="Task">Решение: <br></p>
    <?php
    require "../Moduls/task5.php";
    ?>
    </div>
    <div>
        <p class="Task">Задание 6 <br></p>
        Число  Пи  вычисляется  по  формуле  Грегори  следующим образом:  РI=4(1-1/3+1/5-1/7+1/9-...),
        причем, чем больше слагаемых в скобках, тем выше точность вычисления числа Пи.
        Определить минимальное количество слагаемых для вычисления Пи с точностью 0.01

        <p class="Task">Решение: <br></p>
        <?php
        require "../Moduls/task6.php";
        ?>
    </div>
    <div>
        <p class="Task">Задание 7 <br></p>
        Дана последовательность, состоящая из дробей: 1/1, 4/2, 7/3, 10/4, ...
        Какое минимальное количество элементов последовательности нужно сложить,
        чтобы сумма превысила заданное число S > 10?

        <p class="Task">Решение: <br></p>
        <?php
        require "../Moduls/task7.php";
        ?>
    </div>
    <div>
        <p class="Task">Задание 8 <br></p>
        Дано произвольное целое положительное число K ().
        Найти сумму всех четных цифр этого числа.
        Процедуры и функции работы со строками не использовать.

        <p class="Task">Решение: <br></p>
        <?php
        require "../Moduls/task8.php";
        ?>
    </div>
    <div>
        <p class="Task">Задание 9 и 10 <br></p>
        *Дано произвольное целое положительное число K ().
        Вывести цифры этого числа в порядке неубывания (например, 546085 =>045568).
        Процедуры и функции работы со строками не использовать.
        <br>
        *Дано произвольное целое положительное число K ().
        Вывести цифры этого числа в порядке невозрастания (например, 546085=>865540).
        Процедуры и функции работы со строками не использовать.


        <p class="Task">Решение: <br></p>
        <?php
        require "../Moduls/task9.php";
        ?>
    </div>
    <div class="SEE">Актуальное Задание</div>
    <div>
        <p class="Task">Задание 11 <br></p>
        Дан массив с элементами 50, 45, 40, 35, 30.
        Найдите сумму элементов этого массива. Запишите ее в переменную $result.

        <p class="Task">Решение: <br></p>
        <?php
        require "../Moduls/task10.php";
        ?>
    </div>
    <div>
        <p class="Task">Задание 12 <br></p>
        Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными
        числами. После чего вывести данный массив в противоположном порядке.

        <p class="Task">Решение: <br></p>
        <?php
        require "../Moduls/task11.php";
        ?>
    </div>
    <div>
        <p class="Task">Задание 13 <br></p>
        Создать массив, заполненный названиями картинок, например, 1.png.
        Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран.

        <p class="Task">Решение: <br></p>
        <?php
        require "../Moduls/task12.php";
        ?>
    </div>
    <div>
        <p class="Task">Задание 14 <br></p>
        Дано N действительных случайных чисел в диапазоне от -100 до 100.
        Найти минимальное положительное число и максимальное отрицательное число.

        <p class="Task">Решение: <br></p>
        <?php
        include "../Moduls/task13.php";
        ?>
        <p class="Task" id="start">Задание 15 <br></p>
        Найти число Фибоначчи

        <p class="Task">Решение: <br></p>
        <?php
        include "../Moduls/fib_task.php";
        ?>
    </div>
</body>
</html>
