<?php
//$i = 0; // Кол-во наших итераций
//$num = 0;
//function fib($num, $i)
//{
//    $i++;// Тут мы плюсуем 1 к нашему значению передаваемому в функции
//        // напишем условие входа в рекурсию
//    $str= '';
//    for($b=0;$b<$i;$b++) {
//        $str .= '_';
//    }
//    echo '<br><br> '.$str.$i.' : '.$num;
//    if ($num < 2) {
//        return $num;
//    }
//
//    $res =   fib($num - 1, $i) + fib($num - 2, $i);// Вызываем рекурсию при помощи вызова
//    // функции $res(), а то есть вызова самой себя.
//
//
//
//    return $res; // И наконец-то выход из рекурсии
//}
//echo '<br>'.fib(3,1);


//function fib($num)
//{
//    if ($num < 2) {
//        return $num;
//    }
//    return fib($num - 1) + fib($num - 2);
//}
//echo fib(3);







$i = 1; // Кол-во наших итераций
$num = 3;
function fib($num)
{
    $i = 0;
    $i++;// Тут мы плюсуем 1 к нашему значению передаваемому в функции
    // напишем условие входа в рекурсию
    if ($num < 2) {
        return $num;
    }
    $res =  fib($num - 1, $i) + fib($num - 2, $i);// Вызываем рекурсию при помощи вызова
    // функции $res(), а то есть вызова самой себя.
    return $res; // И наконец-то выход из рекурсии
}
echo '<br>'.fib(3);