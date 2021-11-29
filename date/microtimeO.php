<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date & time</title>
</head>

<body>
    <table>
        <?php
        echo 'Функция microtime возвращает время в формате timestamp с микросекундами.' . '<br>' .
            'Формат timestamp - это количество секунд, прошедшее с 1-го января 1970 ' . '<br>' .
            'года по заданный момент времени.' . '<br>';

        echo ' Эту функцию можно использовать, к примеру, для того, чтобы вычислить' . ' <br> ' .
            'время работы скрипта.';
        ?>
        <h1>Синтаксис
        </h1>
        <h2><i>microtime();</i></h2>
    </table>
    <?php
    echo 'В данном примере выводится текущий момент времени с миллисекундами:' . '<br>';
    echo microtime() . '<br>';
    ?>
</body>

</html>