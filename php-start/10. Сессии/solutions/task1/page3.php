<?php

/*
 * PHP Start | Теория
 * Урок 10: Сессии
 * Задача 1: Многостраничный тест, страница 3
 */

/* Это 3-я страница, а значит на нее был отправлен ответ со второй страницы
 * Наша задача - получить этот ответ и записать в сессию */
if (isset($_POST['answer2'])) {
    session_start();
    $_SESSION['answer2'] = intval($_POST['answer2']);
}

?>

<html>
    <head>
        <title>PHP Start | Сессии</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Многостраничный тест</h1>
        <form action="result.php" method="post">
            <p>Вопрос 3. Сколько колес имеет большинство легковых автомобилей?</p>
            
            <?php 
            /* Обратите внимание, что значение (value) - это не ответ на вопрос,
             * а номер варианта ответа
             */
            ?>
            <label> Два
                <input type="radio" name="answer3" value="1" /></label>
            <br/>
            <label> Три
                <input type="radio" name="answer3" value="2" /></label>
            <br/>
            <label> Четыри
                <input type="radio" name="answer3" value="3" /></label>
            <br/>
            <label> Шесть
                <input type="radio" name="answer3" value="4" /></label>
            <br/><br/>
            <input type="submit" value="Далее" />
        </form>
    </body>
</html>