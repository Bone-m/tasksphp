<?php
//Пример 7.17. Проверка синтаксиса адреса электронной почты
$input['email'] = filter_input(INPUT_POST, 'email',
    FILTER_VALIDATE_EMAIL);
if (! $input['email']) {
    $errors[] = 'Please enter a valid email address';
}
