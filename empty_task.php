<?php
// Зачастую в скриптах возникает нужда в проверке переменной на пустоту.
//  В PHP переменная будет пустая, если она равна 0, '', '0', false или null.
// Проверка на пустоту выполняется с помощью команды empty:
// $test = '';

// if (empty($test)) {
//     echo '+';
// } else {
//     echo '-';
// }



// $test = -1;

// if (!empty($test)) {
//     echo '+';
// } else {
//     echo '-';
// }


$test = null;

if (isset($test)) {
    echo '+';
} else {
    echo '-';
}
