Сделайте функцию, которая параметром принимает число, а возвращает квадратный корень из этого числа. С помощью этой функции найдите корень числа 3, затем найдите корень числа 4. Просуммируйте полученные результаты и выведите их на экран.


<?php
function fun($num)
{
    return sqrt($num);
}
// echo '<br>' . fun(3) + fun(4);
echo '<br>' . fun(3) + fun(4);