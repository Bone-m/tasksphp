<?php

/*
 * PHP Start | Теория
 * Урок 9: Cookie
 * Задача 3: Счетчик посещений
 */

// Инициализируем счетчик посещений
$counter = 1;


if (isset($_COOKIE["counter"])) {
    
    /* Если cookie установлена, увеличим счетчик и добавим количество 
     * посещений в сообщение
     * Также мы ожидаем, что в cookie будет содержаться целое число, 
     * удостоверимся в этом */ 
    $counter = intval($_COOKIE["counter"]);
    $counter++;
    $str = "Вы посетили страницы сайта $counter раз(а)";
    
} else {
    $str = 'Ваш первый визит';    
}

/* Записываем в куки текущую дату. Во время следующего визита именно ее увидит 
 * пользователь */
setcookie("counter", $counter);
    
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
