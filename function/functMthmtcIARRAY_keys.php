<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_keys</title>
</head>

<body>
    <h3>Функция array_keys получает ключи массива и записывает их в новый массив.</h3>
    <h2>Синтаксис</h2>

    <i>array_keys(массив);</i>

    <p>Давайте получим ключи из массива:</p>
    $arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];

    <?php
    echo '<br>';
    $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

    $result = array_keys($arr);
    var_dump($result);
    ?>
</body>

</html>