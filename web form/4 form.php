<?php
//Пример 7.7. Проверка достоверности данных из формы
// Логика выполнения верных действий на
// основании метода запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (validate_form()) {
        process_form();
    } else {
        show_form();
    }
} else {
    show_form();
}
// сделать что-нибудь, когда форма передана на обработку
function process_form() {
    print "Hello, ". $_POST['my_name'];
}
// отобразить форму
function show_form() {
    print<<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your name: <input type="text" name="my_name">
<br/>
<input type="submit" value="Say Hello">
</form>
_HTML_;
}
// проверить данные из формы
function validate_form() {
// Содержит ли имя, введенное в текстовом поле my_name
// хотя бы три символа?
    if (strlen($_POST['my_name']) < 3) {
        return false;
    } else {
        return true;
    }
}
