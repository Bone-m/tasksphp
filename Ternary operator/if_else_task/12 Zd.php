Воспользуйтесь конструкцией цикла while(), чтобы вывести на экран величины температур
в пределах от -50 до 50 градусов по Фаренгейту и эквивалентные им величины температур
в градусах Цельсия. По температурной шкале Фаренгейта вода замерзает при температуре 23
градуса и закипает при 212 градусах. А по температурной шкале Цельсия вода замерзает при
температуре 0 градусов и закипает при 100 градусах. Таким образом, для преобразования
температуры по Фаренгейту в температуру по Цельсию следует вычесть из ее величины 32,
умножить полученную разность на 5 и разделить на 9. А для преобразования температуры
по Цельсию в температуру по Фаренгейту следует умножить ее величину на 9, разделить
полученный результат на 5 и прибавить 32.<br>
<?php
$gradus = -50;
$faring = 23;
print '<select name="Gradus">';
while (($gradus <= 50) && ($gradus >= -50)) {
    print "<option>Градусов Цельси: $gradus; Градусов Фаренгейту: $faring</option>\n";
    $gradus++;
    $faring = ($gradus * 9 / 5 + 32);
}
print '</select>';
