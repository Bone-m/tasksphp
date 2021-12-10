Функция array_search() действует аналогично функции in_array(), но она
возвращает ключ искомого элемента вместо логического значения true. Так, в примере 4.17
функция array_search() возвращает название блюда стоимостью 6,50 доллара. <br>
<?php
// Пример 4.17. Поиск элемента в массиве по конкретному значению
$meals = array(
    'Walnut Bun' => 1,
    'Cashew Nuts and White Mushrooms' => 4.95,
    'Dried Mulberries' => 3.00,
    'Eggplant with Chili Sauce' => 6.50,
    'Shrimp Puffs' => 0
);
$dish = array_search(6.50, $meals);
if ($dish) {
    print "$dish costs $6.50";
}
// При выполнении кода из примера 4.17 на экран выводится следующий результат:
// Eggplant with Chili Sauce costs $6.50