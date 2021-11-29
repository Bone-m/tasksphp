<br>
<h1>Примеры</h1> <br>
Что выведет каждый из echo в результате выполнения следующего кода:<br>
<i>
    abs — Абсолютное значение (модуль числа)<br>

</i>


<?php
function func($num)
{
    if ($num <= 0) {
        return abs($num);
    }

    return $num * $num;
}

echo func(10) . '<br>';
echo func(-5) . '<br>';
?>