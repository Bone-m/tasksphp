<?php
//!Пример 4.8. Перебор массива с помощью языковой конструкции foreach()
$meal = array(
    'breakfast' => 'Walnut Bun',
    'lunch' => 'Cashew Nuts and White Mushrooms',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Sauce'
);
print "<table>\n";          //! таблицa html
foreach ($meal as $key => $value) {                         //!<tr> - тег строки (ряда) таблицы
    print "<tr><td>$key</td><td>$value</td></tr>\n";        //!<td> - тег обычной ячейки таблицы
}
print '</table>';           //! таблицa
