<?php
//Пример 7.14. Обработка ошибок и видоизмененных входных данных
// Логика выполнения верных действий на
// основании метода запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Если функции validate_form() возвращает ошибки,
// передать их функции show_form()
    list($form_errors, $input) = validate_form();
    if ($form_errors) {
        show_form($form_errors);
    } else {
        process_form($input);
    }
} else {
    show_form() ;
}
