<?php

/*
 * PHP Start | Теория
 * Урок 9: Cookie
 * Задача 1: Время жизни cookie
 */

$str = 'Добро пожаловать, новичек!';

// Проверяем наличие cookie
if (isset($_COOKIE["flag"])) {
    $str = 'С возвращением, дружище!';
} else {
    /* Задаем значение и время жизни cookie на 10 часов 
     * (60 секунд в минуте * 60 минут в часе * 10 часов) */
    setcookie("flag", "1", time() + 60 * 60 * 10);
}
?>

<!DOCTYPE html>

<html>
    <head>
        <title>PHP Start | Cookie</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p align="center"><?php echo $str; ?></p>
    </body>
</html>