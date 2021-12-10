<?php
//?speceshipOerator
$x = 1;
$y = 1;
print($x <=> $y);
//--
++$x;
echo '<br> х = ' . $x . '; y = ' . $y . '; При сравнении выводит : ';
print($x <=> $y);
//--
$y += 4;
echo '<br> х = ' . $x . '; y = ' . $y . '; При сравнении выводит : ';
print ($x <=> $y) . '<br>';

//-- worck in string
echo '<br> Попробую работать с строчными данными <br>';

print ("a" <=> "a") . '<br>'; // retunr 0 (A=>1; B=>2; ... Порядковый номер алфавита)
print ("a" <=> "b") . '<br>'; // retunr -1 
print ("b" <=> "a") . '<br>'; // retunr 1
//-- worck in array
echo '<br> Попробую работать с Массивом <br>';
echo [1, 3, 4] <=> [1, 3, 4]; // retunr 0 
echo [1, 3, 4, 6] <=> [1, 3, 4]; // retunr 0 
echo [1, 3, 4, 6] <=> [4, 4, 4, 4]; // retunr 0 
