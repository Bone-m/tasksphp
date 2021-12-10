<?php
// Пример 4.16. Проверка наличия в массиве элемента с конкретным значением
// in_array — Проверяет, присутствует ли в массиве значение

$meals = array(
    'Walnut Bun' => 1,
    'Cashew Nuts and White Mushrooms' => 4.95,
    'Dried Mulberries' => 3.00,
    'Eggplant with Chili Sauce' => 6.50,
    'Shrimp Puffs' => 0
);
$books = array(
    "The Eater's Guide to Chinese Characters",
    'How to Cook and Eat in Chinese'
);
// Следующая проверка дает истинное значение:
// по ключу Dried Mulberries в массиве имеется значение 3.00
if (in_array(3, $meals)) {
    print 'There is a $3 item.';
}
// Следующая проверка дает истинное значение
if (in_array('How to Cook and Eat in Chinese', $books)) {
    print "We have How to Cook and Eat in Chinese";
}
// Следующая проверка дает ложное значение:
// в функции in_array() учитывается регистр букв
if (in_array("the eater's guide to Chinese characters", $books)) {
    print "We have the Eater's Guide to Chinese Characters.";
}
