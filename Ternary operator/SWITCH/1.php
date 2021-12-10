<?php
$x = 3;
$y = 2;
switch ($x + $y) {
    case 3:
        echo 'ответ 3';
        break;
    case 2:
        echo 'ответ 2';
        break;
    case 5:
        echo 'ответ <i class="fa fa-500px" aria-hidden="true"></i>';
        break;
    default:
        echo 'Данные неизвестные';
        break;
}
