<br>
<h1>Примеры</h1> <br>
сделана функция, которая вычисляет, сколько целых чисел, начиная с 1, нужно сложить,
чтобы результат был больше 100:
<br>
<?php
function func()
{
    $sum = 0;
    $i = 1;
    while (true) {
        $sum += $i;
        $i++;
        if ($sum >= 100) {
            return $i;
        }
    }
}
echo func();
