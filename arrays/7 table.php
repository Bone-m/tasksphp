<?php
//!Пример 4.9. Вывод HTML-таблицы с чередованием классов CSS
$row_styles = array('even', 'odd');
$style_index = 0;
$meal = array(
    'breakfast' => 'Walnut Bun',
    'lunch' => 'Cashew Nuts and White Mushrooms',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Sauce'
);
print "<table>\n";
foreach ($meal as $key => $value) {
    print '<tr class=' . $row_styles[$style_index] . '>';
    print "<td>$key</td><td>$value</td>
    </tr>\n";
    // Смена значения переменной $style_index с 0 на 1, и обратно
    $style_index = 1 - $style_index;
}
print "</table>";
