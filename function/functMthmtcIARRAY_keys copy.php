<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_values</title>
</head>

<body>
    <h3>Функция array_values выбирает все значения из массива.</h3>
    <h2>Синтаксис</h2>

    <i>array_values(массив);</i>

    <p>Давайте получим все значения массива:
    </p>
    $arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];

    <?php
    echo '<br>';
    $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

    var_dump(array_values($arr));
    ?>
</body>

</html>