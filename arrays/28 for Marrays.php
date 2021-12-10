
<?php
// Пример 4.33. Вставка значения элемента многомерного массива
$specials = array(
    array(
        'Chestnut Bun',
        'Walnut Bun',
        'Peanut Bun'
    ),
    array(
        'Chestnut Salad',
        'Walnut Salad',
        'Peanut Salad'
    )
);
// Переменная $num_specials содержит значение 2: количество
// элементов в первой размерности массива $specials
for (
    $i = 0, $num_specials = count($specials);
    $i < $num_specials;
    $i++
) {
    // Переменная $num_sub содержит значение 3: количество
    // элементов в каждом подмассиве
    for (
        $m = 0, $num_sub = count($specials[$i]);
        $m < $num_sub;
        $m++
    ) {
        print "Element [$i][$m] is $specials[$i][$m]\n";
    }
}
