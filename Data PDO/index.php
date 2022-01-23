<?php
//Пример 8.1. Подключение к программе базы данных с помощью объекта типа PDO
$db = new PDO('mysql:host=db.example.com;dbname=restaurant',
    'penguin','top^hat');
