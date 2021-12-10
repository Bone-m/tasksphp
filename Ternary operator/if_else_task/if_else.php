<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Условия </title>
</head>

<body>
    <center>
        <h1>Условия if, else</h1>
    </center>
    <?php

    // $test1 = '3';
    // $test2 = '3';

    // if ($test1 != $test2) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }


    // $test1 = '3';
    // $test2 = '3';

    // if ($test1 !== $test2) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }

    // $num1 = -10;
    // $num2 = -10;

    // if ($num1 >= 0 or $num2 >= 0) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }



    // $num1 = 0;
    // $num2 = 0;

    // if ($num1 >= 0 or $num2 >= 0) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }



    // $num1 = 5;
    // $num2 = 5;

    // if ($num1 >= 0 or $num2 >= 0) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }


    // $num1 = -5;
    // $num2 = 15;

    // if ($num1 >= 0 or $num2 >= 0) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }

    //-----------------------------------------------------
    //Приоритет операций сравнения
    // Операция and имеет приоритет над or. В следующем примере 
    // условие сработает, если переменная $num от 0 до 5 ИЛИ от 10 до 20:


    // $num = 3;

    // if (
    //     $num > 0 and $num < 5 or $num
    //     > 10 and $num < 20
    // ) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }
    // -----------------------------------------------
    // Группировка условий
    // Хотя операция and и имеет приоритет над or, часто удобнее использовать
    //  группирующие круглые скобки, чтобы явно показать приоритет операций:
    // $num = 3;

    // if (($num > 0 and $num < 5)
    //     or ($num > 10 and $num < 20)
    // ) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }
    //------------------------------------------------
    // $num = 3;

    // if ($num > 5 and $num < 10 or $num == 20) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }
    //-------------------------------------------------
    // $num = 3;

    // if ($num > 5 or $num > 0 and $num < 3) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }
    // $num = 3;
    // if (
    //     $num == 9 or $num > 10 and $num
    //     < 20 or $num > 20 and $num < 30
    // ) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }
    //-------------------------------------------------
    //-------------------------------------------------
    //Инвертирование высказываний в if-else
    //-------------------------------------------------
    //-------------------------------------------------
    // Было
    // if ($num > 0 and $num < 5) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }

    // Стало
    // if (!($num > 0 and $num < 5)) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }


    // $test = 3;

    // if ($test) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }



    // $test = '';

    // if ($test) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }

    // $test = 3 * 'abc';
    // if ($test) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }


    // $test = null;
    // if ($test) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }

    // $test = false;
    // if ($test) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }


    // $test;
    // if ($test) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }


    // $test = null;

    // if ($test === null) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }



    // if (isset($test)) {
    //     echo $test;
    // } else {
    //     echo 'variable does not exist';
    // }

    // $test = 0;

    // if (isset($test)) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }

    // $test = null;

    // if (!isset($test)) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }

    // $test = null;

    // if (isset($test)) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }

    // if (!isset($test)) {
    //     echo '+';
    // } else {
    //     echo '-';
    // }

    $test = '';

    if (isset($test)) {
        echo '+';
    } else {
        echo '-';
    }


    ?>
</body>

</html>