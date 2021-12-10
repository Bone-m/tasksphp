<?php
// !Определение размера массива
//? Функция count() сообщает о количестве элементов в массиве. Применение функции count()
//? демонстрируется в примере 4.7.


$dinner = array(
    'Sweet Corn and Asparagus',
    'Lemon Chicken',
    'Braised Bamboo Fungus'
);
$dishes = count($dinner);
print "There are $dishes things for dinner.";
