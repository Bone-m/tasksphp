<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROUND</title>
</head>

<body>
    <h3>Функция round округляет число по правилам математического округления. Первым параметром функция принимает число, а вторым необязательным параметром - сколько знаков оставить в дробной части. Второй параметр может быть как положительным, так и отрицательным (в этом случае он указывает сколько знаков оставить в целой части).</h3>
    <h2>Синтаксис</h2>

    <i>round(число, [количество знаков]);</i>
    Округлим дробь до целого: 3/4=

    <?php
    echo round(3.4);

    ?>
</body>

</html>