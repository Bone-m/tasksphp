<?php
//Пример 5.24. Объявление типа аргумента
function countdown(int $top) { //int!!!
    while ($top > 0) {
        print "$top..";
        $top--;
    }
    print "boom!\n";
}
$counter = 5;
countdown($counter);
print "Now, counter is $counter";