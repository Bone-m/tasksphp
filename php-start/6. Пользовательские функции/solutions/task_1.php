<?php

/*
 * PHP Start | Теория
 * Урок 6: Пользовательские функции
 * Задача 1: Информация о товарах в корзине
 */

function cartTotalInfo($products)
{

    $totalQuantity = 0;
    $totalPrice = 0;

    foreach ($products as $product) {
        $totalQuantity += $product['quantity'];
        $totalPrice += $product['price'] * $product['quantity'];
    }

    return array('totalQuantity' => $totalQuantity, 'totalPrice' => $totalPrice);
}

// Массив с товарами
$products = array(
    array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
    array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
    array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2),
);

// Вызываем функцию с аргументом
$result = cartTotalInfo($products);

// Выводим результат
echo '<pre>';
print_r($result);
echo '</pre>';