
<?php
//? Тернарный оператор в PHP
//! вместо этого будет
// $age = 15;
// if ($age >= 18) {
//     $adult = true;
// } else {
//     $adult = false;
// }
// var_dump($adult);
//------------------------------
//        !       это    !
//?          	переменная = условие ? значение1 : значение2;
// $age = 17;
// $adult = $age >= 18 ? true : false;
// var_dump($adult);
//------------------------------
//!       Можно, кстати, не записывать результат в переменную, 
//!        а сразу вывести в через var_dump:
$age = 17;
var_dump($age >= 18 ? true : false);
// task2
$num = 1;
var_dump($num >= 0 ? true : false);
