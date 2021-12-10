<?php
// Пример 5.13. Возврат массива из функции
function restaurant_check2($meal, $tax, $tip)
{
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_notip = $meal + $tax_amount;
    $total_tip = $meal + $tax_amount + $tip_amount;
    return array($total_notip, $total_tip); // Возврат через массив --- Что-то не выводит
    // echo "Без НДС: " . $total_notip . "; С НДС и с чаевыми: " . $total_tip; // Обычный возврат
}
// $meal = 15.22;
// $tax = 8.25;
// $tip = 15;
// print restaurant_check2(15.22, 8.25, 15);
restaurant_check2(15.22, 8.25, 15);
echo "Без НДС:  $total_notip; С НДС и с чаевыми:  $total_tip";
