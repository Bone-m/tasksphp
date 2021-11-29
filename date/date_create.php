<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Функция date_create</title>
</head>

<body>
    <table>
        <?php
        echo 'Функция date_create создает объект !дата!, с которым в дальнейшем ' . '<br>' .
            'можно выполнять некоторые операции. К примеру, прибавить или отнять промежуток' . '<br>' . '
            от даты с помощью date_modify или вывести дату в другом формате с помощью функции date_format.' . '<br>';
        ?>
        <h1>Синтаксис </h1>
        <h2><i>date_create([дата]);</i></h2>
    </table>
    <?php
    echo ' Давайте создадим объект с датой за 2025 год, 12 месяц, 31 день:' . '<br>';
    $date = date_create('2025-12-31');
    echo date_format($date, 'Y-m-d');
    echo '<br>';


    echo ' Давайте создадим объект с датой за 2025 год, 12 месяц, 31 день, затем прибавим к ней 1 день и выведем в формате !день.месяц.год!:' . '<br>';
    var_dump(checkdate(12, 32, 2015)) . '<br>';
    echo '<br>';

    ?>
</body>

</html>