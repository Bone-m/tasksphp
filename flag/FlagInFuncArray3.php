//! HZ KAK DELAT'
Флаги в функциях PHP <br>
<br>
<i></i>
<br>
<h1>Проверка по массиву</h1><br>
<i>Сделайте функцию, которая параметром будет принимать массив и проверять, есть ли в этом массиве
    два одинаковых элемента подряд.</i><br>
<i> </i> <br>
<?php

function isPositive($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {

            if ($arr[$i] == $arr[$j]) {
                return true;
            }
            return false;
        }
    }
}
echo '<br>';
echo 'если хотябы 1 число будет повторятся   ';
var_dump(isPositive([5, 6, 6])); // выведет false - если будут четныe
// echo '<br>';
// echo 'если хотябы 1 число будет повторятся   ';
// var_dump(isPositive([1, 3, 5, 9, 7]));   // выведет true - если будут нечетныe
// echo '<br>';

?>
<i> </i>