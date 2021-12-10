Флаги в функциях PHP <br>
Пусть у нас есть код, проверяющий число на простоту:<br>
<i>=== - это Тождественно равно </i>
<br>
<?php

$num = 31;
$flag = true;

for ($i = 2; $i < $num; $i++) {
    if ($num % $i === 0) {
        $flag = false;
        break;
    }
}

var_dump($flag);
