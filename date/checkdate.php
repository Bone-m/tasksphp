<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkdate - проверяет корректность даты</title>
</head>

<body>
    <table>
        <?php
        echo 'Функция checkdate проверяет корректность даты. Если такая дата существует -         ' . '<br>' .
            'вернет true, в противном случае - false.' . '<br>';
        ?>
        <h1>Синтаксис
        </h1>
        <h2><i>checkdate(месяц, день, год);</i></h2>
    </table>
    <?php
    var_dump(checkdate(9, 16, 20125));
    echo '<br>';
    echo ' А сейчас функции передана некорректная дата (32 декабря не существует) и функция вернет false:' . '<br>';
    var_dump(checkdate(12, 32, 2015)) . '<br>';
    echo '<br>';

    ?>
</body>

</html>