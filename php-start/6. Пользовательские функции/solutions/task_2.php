<?php

/*
 * PHP Start | Теория
 * Урок 6: Пользовательские функции
 * Задача 2: Квадратное уравнение
 */

function quadraticEquation($a, $b, $c)
{
    $d = $b * $b - 4 * $a * $c;
    if ($d > 0) {
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
        return array('x1' => $x1, 'x2' => $x2);
    } elseif ($d == 0) {
        return (-$b + sqrt($d)) / (2 * $a);
    } else {
        return false;
    }
}

echo '<pre>';
print_r(quadraticEquation(1, 26, 120));
echo '</pre>';
