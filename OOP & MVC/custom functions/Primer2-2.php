<br>
<h1>Примеры</h1> <br>Давайте избавимся от него, создав свою функцию, находящую сумму элементов переданного параметром массива.<br>
Вот код этой функции:<br>
вот так:<br>
<?php
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 2, 1, 4, 6];
function ssum($arr)
{
    $sum = 0;
    foreach ($arr as $elem) {
        $sum += $elem;
    }
    return $sum;
}
echo ssum($arr1) . '<br>';
echo ssum($arr2) . '<br>';
