<!-- Пример 5.7. Вызов функции с двумя аргументами -->
<?php
function page_header4($color, $title)
{
    print '<html><head><title>
    Welcome to ' . $title . '</title></head>';
    print '<body bgcolor="#' . $color . '">';
}
page_header4('66сс66', 'my homepage');
