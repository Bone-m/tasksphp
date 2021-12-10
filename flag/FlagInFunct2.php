Флаги в функциях PHP <br>
Пусть у нас есть код, проверяющий число на простоту:<br>
<i>=== - это Тождественно равно </i>
<br>
<?php

function isPrime($num)
{
    $flag = true;

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            $flag = false;
            break;
        }
    }

    return $flag;
}
var_dump(isPrime(10));
echo '<br>';
var_dump(isPrime(31));
echo '<br>';
var_dump(isPrime(5));
