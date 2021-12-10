<?php
//Пример 4.25. Сортировка массива с помощью функции asort()
//!asort — Сортирует массив в порядке возрастания и поддерживает ассоциацию индексов



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
    print " \$meal: [ $key ] = ( $value)";
    echo '<br>';
}
asort($meal);
echo '<br>';
print "After Sorting:";
echo '<br>';

foreach ($meal as $key => $value) {
    print " \$meal: [ $key ] = ($value)";
    echo '<br>';
}
