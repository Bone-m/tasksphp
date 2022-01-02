<?php

/*
 * PHP Start | Теория
 * Урок 10: Сессии
 * Задача 1: Многостраничный тест, страница 1
 */

?>

<html>
    <head>
        <title>PHP Start | Сессии</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Многостраничный тест</h1>
        <form action="page2.php" method="post">
            <p>Вопрос 1. Сколько естественных спутников имеет планета Земля?</p>
            
            <?php 
            /* Обратите внимание, что значение (value) - это не ответ на вопрос,
             * а номер варианта ответа:
             * 1-й вариант = один спутник
             * 2-й вариант = три спутника
             * 3-й вариант = пять спутников
             * 4-й вариант = ниодного спутника
             */
            ?>
            <label> Один
                <input type="radio" name="answer1" value="1" /></label>
            <br/>
            <label> Три
                <input type="radio" name="answer1" value="2" /></label>
            <br/>
            <label> Пять
                <input type="radio" name="answer1" value="3" /></label>
            <br/>
            <label> Ниодного
                <input type="radio" name="answer1" value="4" /></label>
            <br/><br/>
            <input type="submit" value="Далее" />
        </form>
    </body>
</html>