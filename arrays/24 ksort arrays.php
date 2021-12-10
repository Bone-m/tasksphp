<?php
//!kssort — Сортирует массив по ключу в порядке возрастания
// Пример 4.26. Сортировка массива с помощью функции ksort()
$meal = array(
    'breakfast' => 'Walnut Bun',
    'lunch' => 'Cashew Nuts and White Mushrooms',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Sauce'
);
echo '<br>';
print "Before Sorting:";
echo '<br>';
foreach ($meal as $key => $value) {
    print " \$meal: [ $key ] = ( $value );";
    echo '<br>';
}
ksort($meal);
echo '<br>';
print "After Sorting:";
echo '<br>';
foreach ($meal as $key => $value) {
    print " \$meal: [ $key ] = ( $value );";
    echo '<br>';
}
