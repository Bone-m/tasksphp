<?php
$arr = ['green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой'];
foreach ($arr as $key => $elem) {
    echo $key . '-' . $elem . '<br>';
}
$arl = ['user1' => 30, 'user2'
=> 32, 'user3' => 33];
foreach ($arl as $key => $elem) {
    echo $key . ' - ' . $elem . '<br>';
}
echo '<br>';
$arr = [1, 2, 3, 4, 5];

foreach ($arr as $elem) {
    if ($elem % 2 == 0) {
        echo $elem;
    }
}

echo '<br>';
$arr = [1, 2, 3, 4, 5];
foreach ($arr as $elem) {
    if ($elem % 2 == 0) {
        echo $elem . '<be>';
    }
}
echo '<br>';
echo '<br>';

$arr = [2, 5, 9, 15, 1, 4];
foreach ($arr as $elem) {
    if ($elem > 3) {
        if ($elem < 10) {
            echo $elem . '<br>';
        }
    }
}
echo '<br>';
echo '<br>';
$arr = [
    ['a', 'b', 'c'],
    ['d', 'e', 'f'],
    ['g', 'h', 'i'],
];
foreach ($arr as $sub) {
    foreach ($sub as $elem) {
        echo $elem;
    }
}
echo '<br>';
echo 'С помощью двух вложенных циклов найдите сумму элементов этого массива.'

    . '<br>';

$sum = 0;
$arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
foreach ($arr as $sub) {
    foreach ($sub as $elem) {
        $sum += $elem;
    }
}
echo $sum . '<br>';

$arr = [];
	
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $arr[$i][$j] = $j + 1; // заполняем подмассив числами
    }
}

$arr = [];
	
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $arr[$i][$j] = $j + 1; // заполняем подмассив числами
    }
}

