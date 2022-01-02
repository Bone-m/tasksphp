<?php
$array = array(
    'Автотехника' => array( // уровень вложенности 1
        'Вело' => array( // уровень вложенности 2
            'Велосипеды' => array(
                '(товары) Extreme' => 10,  // уровень вложенности 3
                '(товары) Author' => 4,  // уровень вложенности 3
            ),
            'Самокаты' => 12,  // уровень вложенности 2
        ),
        'Авто'=> array(  // уровень вложенности 2
            'opel' => array(  // уровень вложенности 3
                '(товары) Vivaro' => 5,  // уровень вложенности 4
            ),
            '(товары) Audi' => 10,  // уровень вложенности 3
            '(товары) Honda' => 11,  // уровень вложенности 3
        ),
        '(товары) Аксессуары' => 7,  // уровень вложенности 2
    ),
    'Фототехника' => array(//1
        '(товары) фотокамеры' => 6,  // уровень вложенности 2
        '(товары) Видеокамеры' => 3, // уровень вложенности 2
    ),
    '(товары) Другое' =>3,//1
);
// Проверка 1
//var_dump(is_array($array)); // Проверка передачи массива
//var_dump(is_array($f)); // Проверка передачи массива
// Действие 2
//$s=0;
function sum($array , $level =0){
    static $count;
    static $items;
        if(is_array($array)){
            $level++;
            foreach ($array as $element){
                sum($element, $level);}
        } else {
            $count++;
            $items+=$array;
            }
        return array("count"=> $count, "items"=>$items);
    }
    $result=sum($array);
    print_r($result);


//foreach ($array as $level1){
//    if (is_array($level1)){
//        print_r($level1);
//    } else {$s+=$level1;}
//}
//echo  "<hr> $s <hr>";
////! Данный код грамоздкий и неудобный.