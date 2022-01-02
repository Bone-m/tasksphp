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
<?php
//Какой метод запроса был использован для доступа к странице; например,"GET, "HEAD, "POST, "PUT.
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    process_form();
}   else{
    show_form();
}
function process_form(){
    echo "Hello, " .$_POST['my_name'];
}
function show_form()
{
    print <<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]"><!--Работа текущего скрипта указывается PHP_SELF или текущий файл или где проходит процесс-->
    Yur name <input type="text" name="my_name"> <br>
    <button type="submit"><b>Say Hello</b></button> 
</form>
_HTML_;
}