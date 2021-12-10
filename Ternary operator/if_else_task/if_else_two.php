<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сокращенный синтаксис if-else в PHP
    </title>
</head>

<body>
    <center>
        <h1><i>Сокращенный синтаксис if-else в PHP
            </i> </h1>
        <h5>Для начала вам следует знать, что конструкция else не является обязательной. В следующем примере текст выведется только в том случае, если значение переменной равно 1. В противном случае просто ничего не случится:
        </h5><br>


    </center>
    <!-- <i> $test = 1;<br>
        if ($test == 1) {<br>
        echo '+';<br>
        }<br></i> -->
    <?php


    // $test = 10;
    // if ($test == 10) {
    //     echo 'Верно' . "<br>";
    // }

    ?>
    <!-- <br>
    <br>
    <br>
    <i>
        if ($test == 0) echo '+'; else echo '-';<br>
    </i> -->

    <?php
    // if ($test == 0) echo '+' . "<br>";
    // else echo '-' . "<br>";
    ?>
    <!-- <h5>Именно поэтому рекомендуется всегда выполнять расстановку фигурных скобок, дабы не попадать сложные ошибки.</h5>
    <i>
        $test = 3;<br>
        if ($test > 0) {<br>
        echo $test;<br>
        echo '+++'; // эта строка внутри условия<br>
        }<br>
    </i> -->
    <br><br>
    <?php
    // $test = 3;
    // if ($test > 0) {
    //     echo $test;
    //     echo '+++'; // эта строка внутри условия
    // } 

    //------------------------------------------
    // $num = 1; // может быть 1, 2 или 3

    // if ($num === 1) {
    //     echo 'value1'; // сработает, если $num равно 1
    // }

    // if ($num === 2) {
    //     echo 'value2'; // сработает, если $num равно 2
    // }

    // if ($num === 3) {
    //     echo 'value3'; // сработает, если $num равно 3
    // }
    //---------------------------------------------------------
    // $num = 33;
    // if ($num === 1) {
    //     echo 'value1';
    // } elseif ($num === 2) {
    //     echo 'value2';
    // } elseif ($num === 3) {
    //     echo 'value3';
    // } elseif ($num === 4) {
    //     echo 'value4';
    // } elseif ($num === 5) {
    //     echo 'value5';
    // } elseif ($num === 6) {
    //     echo 'value6';
    // } elseif ($num === 7) {
    //     echo 'value7';
    // } elseif ($num === 8) {
    //     echo 'value8';
    // } elseif ($num === 9) {
    //     echo 'value9';
    // } elseif ($num === 10) {
    //     echo 'value10';
    // } elseif ($num === 11) {
    //     echo 'value11';
    // } elseif ($num === 12) {
    //     echo 'value12';
    // } elseif ($num === 13) {
    //     echo 'value13';
    // } elseif ($num === 14) {
    //     echo 'value14';
    // } elseif ($num === 15) {
    //     echo 'value15';
    // } elseif ($num === 16) {
    //     echo 'value16';
    // } elseif ($num === 17) {
    //     echo 'value17';
    // } elseif ($num === 18) {
    //     echo 'value19';
    // } elseif ($num === 19) {
    //     echo 'value19';
    // } elseif ($num === 20) {
    //     echo 'value20';
    // } elseif ($num === 21) {
    //     echo 'value21';
    // } elseif ($num === 22) {
    //     echo 'value22';
    // } elseif ($num === 23) {
    //     echo 'value23';
    // } elseif ($num === 24) {
    //     echo 'value24';
    // } elseif ($num === 25) {
    //     echo 'value25';
    // } elseif ($num === 26) {
    //     echo 'value26';
    // } elseif ($num === 27) {
    //     echo 'value27';
    // } elseif ($num === 28) {
    //     echo 'value28';
    // } elseif ($num === 29) {
    //     echo 'value29';
    // } elseif ($num === 30) {
    //     echo 'value30';
    // } elseif ($num === 31) {
    //     echo 'value31';
    // } elseif ($num >= 32) {
    //     echo 'неверное значение переменной $num больше 32';
    // } else {
    //     echo 'неверное значение переменной $num';
    // }
    //===================================================


    ?>
</body>

</html>