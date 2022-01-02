<?php
/*
 * PHP Start | Теория
 * Урок 8: Пользовательские функции
 * Задача 3: Использование форм #2
 */

if (isset($_POST['submit']) && !empty($_POST['firstname'])) {

    $a = $_POST['gender'];
    $c = $_POST['firstname'];

    if ($a == 'male') {
        echo "Добро пожаловать, мистер $c!";
    } else {
        echo "Добро пожаловать, миссис $c!";
    }
}
?>


<!DOCTYPE html>

<html>
    <head>
        <title>Lesson 8 | Task 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form action = "task_3.php" method = "post">
                <p> Ваше имя: </p>
                <input type="text" name="firstname"><br>

                <p> Ваш пол: </p>
                <input type="radio" name="gender" value="male" checked="checked">Мужчина<br>
                <input type="radio" name="gender" value="female">Женщина<br><br>

                <input type ="reset" value="Очистить форму" >
                <input type ="submit" value="Отправить" name ="submit">
            </form> 
        </div>
    </body>
</html>
