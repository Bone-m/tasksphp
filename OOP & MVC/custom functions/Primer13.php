<br>
<h1>Примеры</h1> <br>
сделана функция, которая вычисляет, сколько целых чисел, начиная с 1, нужно сложить, чтобы результат был больше 100:
<br>
<?php
function func()
{
    $sum = 0;
    $i = 1;

    while (true) { // бесконечный цикл
        $sum += $i;
        $i++;
        echo $i . '<br>';

        if ($sum >= 100) {
            return 'результат сложения  больше 100 ' . $i; // цикл крутится пока не выйдет тут
        }
    }
}

echo  func();
