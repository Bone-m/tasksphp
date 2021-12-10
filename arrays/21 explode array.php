<?php
// Пример 4.23. Преобразование символьной строки в массив с помощью функции explode()
$fish = 'Bass, Carp, Pike, Flounder';
$fish_list = explode(', ', $fish);
print "The second fish is $fish_list[1]";
echo '<br>';
//
// for ($i = 0, $ims = count($fish_list); $i < $ims; $i++) {
//     print "The second fish is $fish_list[$i]" . '<br>';
// }
