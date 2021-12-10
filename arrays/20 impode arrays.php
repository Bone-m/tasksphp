<?php
// Пример 4.22. Вывод строк HTML-таблицы на экран с помощью функции implode()
$dimsum = array('Chicken Bun', 'Stuffed Duck Web', 'Turnip Cake');
print '<tr><td>' . implode('</td> | <td>', $dimsum) . '</td></tr>';
