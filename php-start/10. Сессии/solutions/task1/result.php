<?php

/*
 * PHP Start | Теория
 * Урок 10: Сессии
 * Задача 1: Многостраничный тест, страница результов
 */

/*
 * Заранее определенные правильные ответы 
 */
$rightAnswers = array(
    'answer1' => 1,
    'answer2' => 3,
    'answer3' => 3,
);

/*
 * Получим ответ на последний вопрос из отправленной формы
 */
if (isset($_POST['answer3'])) {
    $answer3 = intval($_POST['answer3']);
}

// Ответы на предыдущие вопрос получим из сессии
session_start();
$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];

// Мы уже получили нужную информацию из сессии. Очищаем ее от результатов
session_destroy();
?>

<html>
    <head>
        <title>PHP Start | Сессии</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Многостраничный тест. Результаты</h1>
        
            <p>Вопрос 1:
                <?php if ($answer1 == $rightAnswers['answer1']) { 
                    echo 'Правильно';
                    
                } else {
                    echo 'Неправильно';
                    
                } ?>
            </p>
        
            <p>Вопрос 2:
                <?php if ($answer2 == $rightAnswers['answer2']) { 
                    echo 'Правильно';
                    
                } else {
                    echo 'Неправильно';
                    
                } ?>
            </p>
        
            <p>Вопрос 3:
                <?php if ($answer3 == $rightAnswers['answer3']) { 
                    echo 'Правильно';
                    
                } else {
                    echo 'Неправильно';
                    
                } ?>
            </p>
            
            <a href="page1.php">Начать заново</a>
            
    </body>
</html>