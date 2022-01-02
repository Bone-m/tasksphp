<?php
//Пример 7.12. Совместное применение функций trim() и strlen()
if (strlen(trim($_POST['name'])) == 0) {
    $errors[] = "Your name is required.";
}