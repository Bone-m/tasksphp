<?php

/*
 * PHP Start | Теория
 * Урок 9: Cookie
 * Задача 2: Дата и время последнего посещения
 */

if (isset($_COOKIE["last_visited"])) {
    // Если cookie установлена, добавим содержащуюся дату в сообщение
    $str = 'Последний раз Вы были здесь '.$_COOKIE["last_visited"];
} else {
    $str = 'Ваш первый визит';
}

/* Записываем в куки текущую дату. Во время следующего визита именно ее увидит 
 * пользователь */
setcookie("last_visited", date('Y-m-d h:i:s'));
    
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