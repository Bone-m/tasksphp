<?php
/*
 * PHP Start | Теория
 * Урок 10: Сессии
 * Задача 1: Многостраничный тест, страница 2
 */

/* Это вторая страница, а значит на нее был отправлен ответ с первой
 * Наша задача - получить этот ответ и записать в сессию */
if (isset($_POST['answer1'])) {
    session_start();
    $_SESSION['answer1'] = intval($_POST['answer1']);
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
        <form action="page3.php" method="post">
            <p>Вопрос 2. Кто из указанных в списке людей не вписывается в логический ряд? :)</p>

            <?php
            /* Обратите внимание, что значение (value) - это не ответ на вопрос,
             * а номер варианта ответа */
            ?>
            <label> Моцарт
                <input type="radio" name="answer2" value="1" /></label>
            <br/>
            <label> Бетховен
                <input type="radio" name="answer2" value="2" /></label>
            <br/>
            <label> Якубович
                <input type="radio" name="answer2" value="3" /></label>
            <br/>
            <label> Бах
                <input type="radio" name="answer2" value="4" /></label>
            <br/><br/>
            <input type="submit" value="Далее" />
        </form>
    </body>
</html>