<!-- Передача аргументов функциям -->
<?php
// Пример 5.4. Объявление функции с одним аргументом
function page_header2($color)
{
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bgcolor="#' . $color . '">';
}
page_header2('сс00сс');
