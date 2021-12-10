<?
//Пример 4.1. Создание массивов
//! Развернутый массив используется в версиях до 5.4
$vegetables = array(
    'corn' => 'yellow',
    'beet' => 'red',
    'carrot' => 'orange'
);
$dinner = array(
    0 => 'Sweet Corn and Asparagus',
    1 => 'Lemon Chicken',
    2 => 'Braised Bamboo Fungus'
);
$computers = array(
    'trs-80' => 'Radio Shack',
    2600 => 'Atari',
    'Adam' => 'Coleco'
);
//! Сокращенный массив используется в версиях с 5.4
$vegetables = [
    'corn' => 'yellow',
    'beet' => 'red',
    'carrot' => 'orange'
];
$dinner = [
    0 => 'Sweet Corn and Asparagus',
    1 => 'Lemon Chicken',
    2 => 'Braised Bamboo Fungus'
];
$computers = [
    'trs-80' => 'Radio Shack',
    2600 => 'Atari',
    'Adam' => 'Coleco'
];
//? Элементы можно также вводить в массив по очереди, присваивая значение конкретному ключу
//? в массиве. Так, в примере 4.3 создаются те же самые массивы, что и в двух предыдущих примерах,
//? но теперь это делается поэлементно.
// Массив $vegetables со строковыми ключами
$vegetables['corn'] = 'yellow';
$vegetables['beet'] = 'red';
$vegetables['carrot'] = 'orange';
// Массив $dinner с числовыми ключами
$dinner[0] = 'Sweet Corn and Asparagus';
$dinner[1] = 'Lemon Chicken';
$dinner[2] = 'Braised Bamboo Fungus';
// Массив $computers с числовыми и строковыми ключами
$computers['trs-80'] = 'Radio Shack';
$computers[2600] = 'Atari';
$computers['Adam'] = 'Coleco';
//! Популярные ошибки 
// Пример 4.4. Взаимное превращение скалярных и нескалярных величин
// Создание массива $vegetables
$vegetables['corn'] = 'yellow';
// Бесследное удаление строк "corn" и "yellow" и
// создание скалярной переменной $vegetables
$vegetables = 'delicious';
// Создание скалярной переменной $fruits
$fruits = 283;
// Не пройдет! Значение 283 по-прежнему остается в
// переменной $fruits, а интерпретатор РНР выдает предупреждение
$fruits['potassium'] = 'banana';
// А в данном случае содержимое переменной $fruits
// перезаписывается, и она становится массивом
$fruits = array('potassium' => 'banana');

