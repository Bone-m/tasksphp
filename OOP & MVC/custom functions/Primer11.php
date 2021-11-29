<br>
<h1>Примеры</h1> <br>
Что выведется на экран в результате выполнения следующего кода:

<br>
<i>

</i>


<?php
function func($num)
{
    $sum = 0;

    for ($i = 1; $i <= $num; $i++) {
        $sum += $i;
    }
    return $sum;
}

echo func(5);
?>