<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_key_exists</title>
</head>

<body>
    <h3>Функция array_key_exists проверяет присутствие указанного ключа в массиве. </h3>
    <h2>Синтаксис</h2>

    <i>array_key_exists(ключ который нужно проверить, массив в котором проверять);</i>

    <p>Давайте проверим наличие ключа 'a' в массиве $arr:</p>
    $arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];

    <?php
    echo '<br>';
    $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

    $result = array_key_exists('a', $arr);
    var_dump($result);
    ?>
</body>

</html>