<!-- Пример 4.31. Перебор многомерного массива во вложенном цикле, организованном с помощью
языковой конструкции foreach() -->
<?php
$flavors = array(
    'Japanese' => array(
        'hot' => 'wasabi',
        'salty' => 'soy sauce'
    ),
    'Chinese' => array(
        'hot' => 'mustard',
        'pepper-salty' => 'prickly ash'
    )
);
// Переменная $culture содержит ключ, а переменная
// $culture_flavors - значение (в данном случае — массив)
foreach ($flavors as $culture => $culture_flavors) {
    // Переменная $flavor содержит ключ, а переменная
    // $example — значение
    foreach ($culture_flavors as $flavor => $example) {
        print "A $culture $flavor flavor is $example.<br>";
    }
}
