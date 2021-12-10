<h1> Работа с рекурсией в PHP Сумма элементов массива</h1>
http://code.mu/ru/php/book/prime/functions/recursion/<br>
<br>Сумма элементов массива<br>
<i>Давайте теперь не будем выводить элементы массива на экран, а найдем сумму элементов этого массива:</i><br>
<i>Наш массив ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5]</i><br>
<i></i><br>


<?php
function getSum($arr)
{

    echo '<br>';
    $sum = array_shift($arr);

    if (count($arr) !== 0) {
        $sum += getSum($arr);
    }

    return $sum;
}


var_dump(getSum($arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5]));
