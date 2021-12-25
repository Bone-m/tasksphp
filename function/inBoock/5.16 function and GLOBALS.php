<?php
//Пример 5.23. Доступ к глобальным переменным с помощью ключевого слова global
$dinner = 'Curry Cuttlefish';
function vegetarian_dinner() {
    global $dinner;
    print "Dinner was $dinner, but now it's ";
    $dinner = 'Sauteed Pea Shoots';
    print $dinner;
    print "<br>";
}
print "Regular Dinner is $dinner.<br>";
vegetarian_dinner();
print "Regular dinner is $dinner";