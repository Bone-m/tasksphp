<?php

 $one = 0;
 $two = 1;

 for ($i = 1; $i <= 9; $i++) {
     $current = $one + $two;

     $one = $two;
     $two = $current;

     echo $current . '<br>';
 }

// $a = 1;
// $b = 1;
//
// for ($x = 0; $x <= 10; $x++) {
//     $current = $a + $b;
//     $a = $b;
//     $b = $current;
//
//     echo $current . '<br>';
// }




//$lol = 0;
//$kek = 1;
//$chebyrek = 2;
//
//for ($i = 0; $i < 10; $i++) {
//    $cheeeeck = $lol + $kek + $chebyrek;
//    $lol = $kek;
//    $kek = $chebyrek;
//    $chebyrek = $cheeeeck;
//    echo $cheeeeck . '<br>';
//}
