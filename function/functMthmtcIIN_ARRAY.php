<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>in_array</title>
</head>

<body>
    <h3>Функция in_array проверяет наличие заданного элемента в массиве. Первым параметром она принимает что искать, а вторым - в каком массиве.

    </h3>
    <h2>Синтаксис</h2>

    <i>in_array(что искать, в каком массиве);</i>
    Давайте проверим, есть ли в массиве $arr элемент со значением c:
    $arr = ['a', 'b', 'c', 'd', 'e'];

    <?php
    echo '<br>';
    $arr = ['a', 'b', 'c', 'd', 'e'];

    $result = in_array('c', $arr);
    var_dump($result);
    ?>
</body>

</html>