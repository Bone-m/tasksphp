<?php

// Подключаем классы (представляют собой типы записей)
require_once 'classes.php';

$connection = mysqli_connect('localhost', 'root', '', 'php');
mysqli_set_charset($connection, 'utf8');
if(mysqli_connect_errno())
    echo mysqli_connect_error();

// Получаем данные из базы, создаем массив c результатами ($books) в который 
// добавляем объекты классов, соответствующих типу записей
$books = array();
$query = 'SELECT * FROM book;';
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($result))
{
    $books[] = new $row['type']($row);
}
