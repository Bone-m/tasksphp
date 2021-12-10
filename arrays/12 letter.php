<?php
// Пример 4.14. Порядок вывода элементов массива в цикле, организуемом с помощью языковой
// конструкции foreach()
$letters[0] = 'А';
$letters[1] = 'В';
$letters[3] = 'D';
$letters[2] = 'С';
foreach ($letters as $letter) {     // Вывод данных происходит из массива без сортировки данных
    print $letter;
}
echo '<br>';
var_dump($letters);
echo '<br>';
for ($i = 0; $i < count($letters); $i++) {  // Вывод данных происходит из массива с сортировки данных
    print "number: $i; str: $letters[$i];" . '<br>';
}

echo '<br>';
var_dump($letters);
echo '<br>';
for ($i = 3; $i <= count($letters), $i >= 0; --$i) {  // Вывод данных происходит из массива с сортировки данных
    print "number: $i; str: $letters[$i];" . '<br>';
}
