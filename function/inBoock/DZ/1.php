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
<table><tr>
        1.Напишите функцию, возвращающую дескриптор "< img />" разметки HTML-страницы. Эта
        функция должна принимать URL изображения в качестве обязательного аргумента, а также текст надписи, ширину и высоту изображения в качестве необязательных аргументов alt,
        height и width соответственно.
    </tr></table>

<?php
require 'functoi-img.php';

$url = "images.example.com";
$alt = "img_php";
$height = 300;
$width = 500;
print html_img($url,$alt,$height, $width);
?>

</body>
</html>

