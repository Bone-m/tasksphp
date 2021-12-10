<?php
//!sort — Сортирует массив по возрастанию

// Пример 4.24. Сортировка массива с помощью функции sort()

$dinner = array(
    'Sweet Corn and Asparagus',
    'Lemon Chicken',
    'Braised Bamboo Fungus'
);
$meal = array(
    'breakfast' => 'Walnut Bun',
    'lunch' => 'Cashew Nuts and White Mushrooms',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Sauce'
);
echo '<br>';
print "Before Sorting:\n";
echo '<br>';

foreach ($dinner as $key => $value) {
    print " \$dinner: $key $value\n";
    echo '<br>';
}
foreach ($meal as $key => $value) {
    print " \$meal: $key $value\n";
    echo '<br>';
}
sort($dinner);
sort($meal);
echo '<br>';
print "After Sorting:";
echo '<br>';
foreach ($dinner as $key => $value) {
    print  "\$dinner: $key $value\n";
    echo '<br>';
}
foreach ($meal as $key => $value) {
    print " \$meal: $key $value\n";
    echo '<br>';
}
