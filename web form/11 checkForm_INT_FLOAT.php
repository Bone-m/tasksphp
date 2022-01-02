<?php
//Пример 7.15-1. Проверка целочисленного диапазона (Через массив!)
$input['age'] = filter_input(INPUT_POST, 'age',
    FILTER_VALIDATE_INT,
    array('options' => array('min_range' => 18,
        'max_range' => 65)));
if (is_null($input['age']) || ($input['age'] === false)) {
    $errors[] = 'Please enter a valid age between 18 and 65.';
}

//Передача данных через массив с ключем options и данными min_range и max_range

//Пример 7.15-2. Проверка целочисленного диапазона (FLOAT!)

$input['price'] = filter_input(INPUT_POST, 'price',
    FILTER_VALIDATE_FLOAT);
if (is_null($input['price']) || ($input['price'] === false) ||
    ($input['price'] < 10.00) || ($input['price'] > 50.00)) {
    $errors[] = 'Please enter a valid price between $10 and $50.';
}

