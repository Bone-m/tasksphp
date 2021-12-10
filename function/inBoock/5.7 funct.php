<?php
// Пример 5.9. Изменение значений аргументов в функции
function countdown($top)
{
    while ($top > 0) {
        print "$top..";
        $top--;
    }
    print "boom!<br>";
}
$counter = 5;
countdown($counter);
print "Now, counter is $counter";
