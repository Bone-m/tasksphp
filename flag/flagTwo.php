<?php
echo 'Нахождение простых чисел на PHP' . '<br>';
echo 'Давайте напишем код, который будет проверять число на то, простое оно или нет' . '<br>';
$num  = 5;   // некоторое число
$flag =  false; // начальное значение флага
for ($i = 2; $i < $num; $i++) {
    if ($num % $i === 0) {
        $flag =  true; // если хотя бы один раз поделилось
        break; // выйдем из цикла

    }
}
echo $num . ' : ' . $i . ' = ' . $rrr = $num / $i . '<br>';
var_dump($flag);        // выведем значение флага


echo '<br>' . 'Проверка' . '<br>';

$num = 31;
$flag = true;
for ($i = 2; $i < $num; $i++) {
    if ($num % $i === 0) {
        $flag = false;
        break; // выйдем из цикла
    }
}
var_dump($flag);