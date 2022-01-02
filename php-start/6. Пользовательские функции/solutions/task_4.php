<?php

/*
 * PHP Start | Теория
 * Урок 6: Пользовательские функции
 * Задача 4: Удаление отрицательных элементов из массива (используется ссылка)
 */

function deleteNegtives(&$arr)
{
    foreach ($arr as $key => $element) {
        if ($element < 0) {
            unset($arr[$key]);
        }
    }
}

$digits = array(1, 5, -7, 2, -9, 8, 22.5, 17.1);

deleteNegtives($digits);

echo '<pre>';
print_r($digits);
echo '</pre>';
