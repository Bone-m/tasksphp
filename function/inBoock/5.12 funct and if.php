<?php
//Пример 5.15. Применение нескольких операторов return в функции
function payment_method($cash_on_hand, $amount) {
    if ($amount > $cash_on_hand) {
        return 'credit card';
    } else {
        return 'cash';
    }
}
print payment_method(211,1113);
