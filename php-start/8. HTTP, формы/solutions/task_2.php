<?php

/*
 * PHP Start | Теория
 * Урок 8: Пользовательские функции
 * Задача 2: Использование форм #1
 */

if (isset($_POST['submit'])) {

    $a = intval($_POST['a']);
    $b = intval($_POST['b']);
    $c = intval($_POST['c']);
    $d = intval($_POST['d']);
    $e = intval($_POST['e']);
    $f = intval($_POST['f']);
    $g = intval($_POST['g']);

    $arr = array($a, $b, $c, $d, $e, $f, $g);

    echo "Вы отправили: A = $a, B = $b, C = $c, D = $d, E = $e, F = $f, G = $g" . '<br>';
    echo "Наименьшее значение = ";
    echo min($arr) . '<br>';
    echo "Наибольшее значение = ";
    echo max($arr) . '<br>';
    echo "Среднее арифметическое значение =  ";
    echo ($a + $b + $c + $d + $e + $f + $g) / 7;
}
?>


<!DOCTYPE html>

<html>
    <head>
        <title>Lesson 8 | Task 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <hr>
            <form action="task_2.php" method = "post">
                A: <input type="text" name="a"><br><br>
                B: <input type="text" name="b"><br><br>
                C: <input type="text" name="c"><br><br>
                D: <input type="text" name="d"><br><br>
                E: <input type="text" name="e"><br><br>
                F: <input type="text" name="f"><br><br>
                G: <input type="text" name="g"><br><br>
                <input type ="submit" value="Отправить" name ="submit">
            </form> 
            <hr>
        </div>
    </body>
</html>