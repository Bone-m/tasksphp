<?php

/*
 * PHP Start | Теория
 * Урок 6: Пользовательские функции
 * Задача 3: Удаление отрицательных элементов из массива
 */

function deleteNegtives($arr)
{
    foreach ($arr as $key => $element) {
        if ($element < 0) {
            unset($arr[$key]);
        }
    }
    return $arr;
}

$digits = array(1, 5, -7, 2, -9, 8, 22.5, 17.1);

$result = deleteNegtives($digits);

echo '<pre>';
print_r($result);
echo '</pre>';
