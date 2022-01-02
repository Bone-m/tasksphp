<?php
//Пример 7.9. Проверка достоверности данных в обязательном элементе
if (strlen($_POST['email']) == 0) {
    $errors[] = "You must enter an email address.";
}
