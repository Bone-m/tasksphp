<h1> Работа с рекурсией в PHP</h1>
http://code.mu/ru/php/book/prime/functions/recursion/<br>
В программировании есть такое понятие, как рекурсия - это когда функция вызывает сама себя.<br>
<br>
<i>Давайте, с помощью рекурсии последовательно выведем элементы массива. Пусть массив изначально передается параметрам функции:</i><br>
<i>Давайте теперь используем рекурсию:</i><br>
<i>count — Подсчитывает количество элементов массива или Countable объекте</i><br>
<i>!== Тождественно не равно</i><br>

<i>array_shift — Извлекает первый элемент массива</i><br>





<?php
function func($arr)
{
    var_dump(array_shift($arr)); // выведет 1 значение массива
    var_dump($arr); // выведет [1, 2, 3] - но массив удаляется
    echo '<br>';


    if (count($arr) !== 0) {
        func($arr);
    }
}

func([1, 2, 3]);
