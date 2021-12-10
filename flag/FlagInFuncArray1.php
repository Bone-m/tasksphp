Флаги в функциях PHP <br>
<br>
<i></i>
<br>
<h1>Проверка по массиву</h1><br>
<i>Давайте теперь сделаем функцию, которая параметром будет принимать массив, и проверять, что все элементы в <br>
    этом массиве положительные. Пусть функция возвращает true, если это так, и false, если хотя бы один из <br>
    элементов массива отрицательный. Вот примеры того, как должна работать наша функция:</i><br>
<br>
Kонструкция foreach предоставляет простой способ перебора массивов.<br>
foreach работает только с массивами и объектами, и будет генерировать ошибку<br>
при попытке использования с переменными других типов или неинициализированными переменными. <br>
<?php

function isPositive($arr)
{
    foreach ($arr as $elem) {
        if ($elem < 0) {
            return false;
        }
    }
    return true;
}
var_dump(isPositive([1, 2, -3, 4, -5])); // выведет false
echo '<br>';
var_dump(isPositive([1, 2, 3, 4, 5]));   // выведет true

?>
<i>

</i>