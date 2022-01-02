<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
//Пример 7.6. Отображение приветствия "Hello" на странице с применением функций <br>
// Логика выполнения верных действий на основании метода запроса <br> <br>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
process_form();
} else {
show_form();
}
// сделать что-нибудь, когда форма передана на обработку
function process_form() {
print "Hello, ". $_POST['my_name'];
}
// отобразить форму
function show_form() {
print<<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
    Your name: <input type="text" name="my_name">
    <br />
    <input type="submit" value="Say Hello">
</form>
_HTML_;
}