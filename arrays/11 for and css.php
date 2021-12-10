<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>

    <?php
    //! Пример 4.13. Чередование классов CSS в строках HTML-таблицы с помощью языковой конструкции for()
    // При переборе массива в цикле, организуемом с помощью языковой конструкции for(), доступен счетчик, обозначающий текущее положение в массиве. Над этим счетчиком можно выполнить
    // операцию взятия модуля (%), чтобы чередовать классы CSS в строках HTML-таблицы, как показано
    // в примере 4.13


    $row_styles = array('even', 'odd');
    $dinner = array(
        'Sweet Corn and Asparagus',
        'Lemon Chicken',
        'Braised Bamboo Fungus'
    );
    print "<table>\n";
    for (
        $i = 0, $num_dishes = count($dinner);
        $i < $num_dishes;
        $i++
    ) {
        print '<tr class="' . $row_styles[$i % 2] . '">';
        print "<td>Element $i</td><td>$dinner[$i]</td></tr>\n";
    }
    print '</table>';
    ?>
</body>

</html>