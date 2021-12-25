<?php
//Пример 5.25. Объявление возвращаемого типа
function restaurant_check($meal, $tax, $tip): float {
    // : означает условие, что вывод вунции должно быть число с плав. точкой, а если нт то ошибка.
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_amount = $meal + $tax_amount + $tip_amount;
    return $total_amount;
}
//print restaurant_check("sf", "ds", "de");
print restaurant_check("11.5", "12.1", "33.1");