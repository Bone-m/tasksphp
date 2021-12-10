Вставка значений элементов, заключаемых в двойные кавычки, или встраиваемых документов
осуществляется аналогично вставке чисел и символьных строк. Вставить элемент массива проще
всего, введя его ключ в символьную строку, но не заключая этот ключ в кавычки, как показано в
примере 4.19.
Пример 4.19. Вставка элементов массива в символьные строки, заключаемые в двойные кавычки <br>
<?php

$meals['breakfast'] = 'Walnut Bun';
$meals['lunch'] = 'Eggplant with Chili Sauce';
$amounts = array(3, 6);
print "For breakfast, I'd like $meals[breakfast]
and for lunch,<br>";
print "I'd like $meals[lunch]. I want $amounts[0]
at breakfast and <br>";
print "$amounts[1] at lunch.";
