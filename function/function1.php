<h1> Правильное использование функций PHP - str_split</h1>
http://old.code.mu/books/php/base/pravilnoe-ispolzovanie-polzovatelskih-funkcij-php.html
Сейчас мы с вами будем учиться правильному использованию пользовательских функций. Для этого мы разберем решения нескольких задач.<br>
Новички чаще всего пытаются решить задачу просто кучей кода. Однако, это не совсем удобно. Удобнее всего выносить кусочки кода в отдельные функции. В этом случае вы получить набор простых функций, каждая из которых выполняет одно простое действие. Такие функции легко сделать, легко потестировать, легко поддерживать в дальнейшем. Также отдельные функции легко можно использовать для других задач и переносить между проектами. Давайте разбираться на задачах. Итак, задача.<br>
<br>str_split — Преобразует строку в массив<br>
<?php
function getDigits($num)
{
    return str_split($num, 1);
}
var_dump(getDigits(123));
?>