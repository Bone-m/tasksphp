<?php

// Страница с книгами. Получаем массив с книгами ($books) в файле data.php и выводим содержимое
require_once 'data.php';

foreach($books as $book)
{
    $book->showBook();
}
