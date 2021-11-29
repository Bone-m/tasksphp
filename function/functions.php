<?php
echo 'Сделайте функцию, выводящую на экран сумму чисел от 1 до 100.' . '<br>';
function name()
{
    $name = 0;
    for ($i = 0; $i <= 100; $i++) {
        $name = $i;

        echo $name . '<br>';
    }
}
name();
