<?php
//? Тернарный оператор в PHP

$user = ['name' => 'Justin', 'age' => 30];
if (isset($user['name'])) {
    $name = $user['name'];
} else {
    $name = 'unknown';
}
var_dump($name) . '<br>';
echo "<br>";
//--------------------------------------

$user = ['name' => NULL, 'age' => 30];
var_dump($name = ($user['name']) ?? 'unknown');
echo "<br>";
//--------------------------------------

$user = ['name' => 'iva',  'age' => 30];
var_dump($name = isset($user['name']));
echo "<br>";

//--------------------------------------
$user = ['name' =>   null, 'surname' => null, 'age' => 30];
//вариант 1
// if (isset($user['name'])) {
//     $result = $user['name'];
// } elseif (isset($user['surname'])) {
//     $result = $user['surname'];
// } else {
//     $result = '';
// }
//вариант 2
var_dump($result = isset($user['name']) ?? ($user['name']) ?? 'unknown');
echo "<br>";
var_dump($result = ($user['name']) ?? ($user['surname']) ?? 'unknown');
