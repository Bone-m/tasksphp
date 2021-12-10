<?php
//! Пример 4.6. Ввод в массив новых элементов с помощью сокращенного синтаксиса
// Создать массив $lunch, состоящий из двух элементов.
// В следующей строке кода задается первый элемент
// массива $lunch[0]

$lunch[] = 'Dried Mushrooms in Brown Sauce';
// В следующей строке кода задается второй элемент
// массива $lunch[1]

$lunch[] = 'Pineapple and Yu Fungus';
// Создать массив $dinner, состоящий из трех элементов

$dinner = array(
    'Sweet Corn and Asparagus', 'Lemon Chicken',
    'Braised Bamboo Fungus'
);
// Ввести новый элемент в конце массива $dinner.
//В следующей строке кода задается четвертый элемент
// массива $dinner[3]

$dinner[] = 'Flank Skin with Spiced Flavor';

var_dump($lunch);
echo '<br>';
var_dump($dinner);
