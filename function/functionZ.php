<h1> Правильное использование функций PHP</h1>
<!-- http://code.mu/ru/php/book/prime/functions/proper-using/ -->
<?php

$arr = ['1224', '1321', '4563', '7144', '2879'];
$result = [];
foreach ($arr as $elem) {
    if (checkDigitsPairsSum($elem)) {
        $result[] = $elem;
    }
}
var_dump($result);
function checkDigitsPairsSum($num)
{
    return $num[0] + $num[1] === $num[2] + $num[3];
}
