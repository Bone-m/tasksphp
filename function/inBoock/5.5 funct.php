<!-- Передача аргументов функциям -->
<?php
// Пример 5.5. Объявление функции с одним аргументом
function page_header2($color = 'сс3399')
{
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bgcolor="#' . $color . '">';
}
page_header2();
