<?php
// Пример 4.18. Оперирование элементами массива
$dishes['Beef Chow Foon'] = 12;
$dishes['Beef Chow Foon']++; //Увеличим на 1
$dishes['Roast Duck'] = 3;
$dishes['total'] = $dishes['Beef Chow Foon'] + $dishes['Roast Duck']; // Сумма равна 16
if ($dishes['total'] > 15) {
    // var_dump($dishes);
    // echo '<br>';
    print "You ate a lot: ";
}
print 'You ate ' . $dishes['Beef Chow Foon'] . ' dishes of Beef Chow Foon.';
