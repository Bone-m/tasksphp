
<?php
$arr = [1, 2, 3, 4, 3, 5];
$flag = false;

foreach ($arr as $elem) {
    if ($elem === 3) {
        $flag = true;
        break;
    }
}

// тут переменная $flag равна или true, или false
if ($flag === true) {
    echo 'есть';
} else {
    echo 'нет';
}
