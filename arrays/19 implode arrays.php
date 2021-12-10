<?php
//!Пример 4.21. Формирование символьной строки из элементов массива с помощью функции implode()

$dis = array('Chicken Bun', 'Stuffed Duck Web', 'Turnip Cake');
$res = implode('; ', $dis);
echo $res;
