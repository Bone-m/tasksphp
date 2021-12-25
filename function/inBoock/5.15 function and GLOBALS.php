<?php
//Пример 5.22. Видоизменение глобальной переменной в массиве $GLOBALS
$dinner = 'Curry Cuttlefish';
function hungry_dinner() {
    $GLOBALS['dinner'] .= ' and Deep-Fried Taro';
}
print "Regular dinner is $dinner";
print "<br>";
hungry_dinner();
print "Hungry dinner is $dinner";
echo "<br>$dinner";