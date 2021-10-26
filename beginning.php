<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>overfitting - работа с массивами</title>
</head>

<body>
    <?php
    // - task 1 - запись данных в массив и вывод на экран, через $elem по порядку и с новой строки
    // $arr = ['html', 'css', 'php', 'js'];
    // foreach ($arr as $elem) {
    // echo $elem . '<br>';
    // }

    // - task 2 - запись в массив данных, их сумму вывод на экран
    // $arr = [10, 20, 15, 17, 24, 35];
    // $result = 0;
    // foreach ($arr as $elem) {
    // $result = $result + $elem;
    // }
    // echo $result;

    // - task 3 - запись в цикла данных, и вывод на экран
    // $i = 1;
    // while ($i <= 100) { // echo $i . '<br>' ; // $i++; // } // - task 4 - запись в цикла данных, и вывод на экран // for ($i=1; $i <=100; $i++) { // echo $i; // } // - task 5 - Дан массив с числами. Создайте из него новый массив, где останутся лежать только положительные числа. // Создайте для этого вспомогательную функцию isPositive, которая параметром будет принимать число и возвращать true, если // число положительное, и false - если отрицательное. // $arr=[1, 2, 3, 5, -1, -2, -3]; // function isPositive($num) // { // if ($num>= 0) {
    // return true;
    // } else {
    // return false;
    // }
    // }
    // $newArr = [];
    // foreach ($arr as $elem) {
    // if (isPositive($elem)) {
    // $newArr[] = $elem;
    // }
    // }
    // var_dump($newArr);


    // $a = 11;

    // if ($a >= 0) {
    // echo 'a больше 0' . '<br>';
    // } elseif ($a >= 10) {
    // echo 'a больше 10 ' . '<br>';
    // } else {
    // echo 'a меньше 0' . '<br>';
    // }
    // var_dump($a)

    // //С помощью тега <br> выведите на экран столбец чисел от 1 до 9.
    // for ($i = 1; $i <= 10; $i) { // echo $i++ . '<br>' ; // } // $a=0; // while ($a < 10) { // echo $a++ . '<br>' ; // } //TASK6 //Давайте с помощью тега <a> выведем на экран ссылку:
    // echo '<a href="http://code.mu/ru/php/book/prime/basis/tags/">index.php</a>';
    //Пусть теперь адрес и текст ссылки хранятся в отдельных переменных:
    // $href = 'http://code.mu/ru/php/book/prime/basis/tags/';
    // $text = 'saite';
    // echo '<a href="' . $href . '">' . $text . '</a>';
    // С помощью тега <img> выведите на экран какую-нибудь картинку.
    //echo '<img src="https://img4.goodfon.ru/wallpaper/nbig/1/39/evangelion-evangelion-rei-aianami-rei-glitch-anime-tian.jpg">img</img>';
    //С помощью тега <input> выведите на экран инпут с каким-нибудь текстом.
    //     <form action="action.php" method="post">
    //  <p>Ваше имя: <input type="text" name="name" /></p>
    //  <p>Ваш возраст: <input type="text" name="age" /></p>
    //  <p><input type="submit" /></p>
    // </form>
    //С помощью тега <textarea> выведите на экран многострочное поле ввода с каким-нибудь текстом.
    ?>
    <!-- <textarea name="12" id="21" cols="30" rows="10">введ те сюда текст</textarea> -->
    <?php
    //var_dump -  выводит данные не так ка echo, используется для истина или ложь
    // $chillaut = true;  // уже взрослый
    // var_dump($chillaut); // выведет true
    // echo 60 * 60; // количество секунд в часе
    // echo 60 * 60 * 24; // количество секунд в сутках
    // echo 60 * 60 * 24 * 30; // количество секунд в 30 сутках
    // $a = '1';
    // $b = '2';
    // echo $a + $b + '3';
    //-------------
    // $test = 1;
    // var_dump($test);
    //Преобразуйте следующую строку в число:
    // $test = '12345';
    // var_dump((int)$test);
    //Для преобразования этой строки в число следует воспользоваться командой float:
    // $test = '1.2';
    // var_dump($test)

    //---//---TASK NEW---
    //Получение символов строки на PHP
    // $str = 'abcde';
    // $str[0] = 'e';
    // echo $str;
    //---Номер символа также может храниться и в переменной:
    // $str = 'ABOBA';
    // $num_1 = 0; // номер символа в переменной 
    // $num_2 = 1;
    // $num_3 = 2;
    // $num_4 = 1;
    // $num_5 = 0;
    // echo $str[$num_1] . $str[$num_2] . $str[$num_3] . $str[$num_4] . $str[$num_5]; // выведет 'ABOBA'
    //---Дана строка 'abcde'. Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'c', символ 'e'.
    // $name = 'abcde';
    // $num_1 = 0;
    // $num_2 = 2;
    // $num_3 = 4;
    // echo $name[$num_1] . $name[$num_2] . $name[$num_3];
    //---Дана переменная со строкой 'abcde'. Обращаясь к отдельным символам этой строки 
    //---запишите в новую переменную символы этой строки в обратном порядке, то есть 
    //---'edcba'.
    // $name = 'abcde';
    // // $name[0] = 'e';
    // // $name[1] = 'd';
    // // $name[2] = 'c';
    // // $name[3] = 'b';
    // // $name[4] = 'a';
    // $name = 'edcba';
    // $num_1 = 0;
    // $num_2 = 1;
    // $num_3 = 2;
    // $num_4 = 3;
    // $num_5 = 4;
    // echo $name;
    //              ---Если немного подумать, то становится очевидным, 
    //           что номер последнего символа этой строки будет на 1
    //   меньше ее длины, так как нумерация символов начинается с нуля.
    //                  strlen — Возвращает длину строки
    // $str = 'abcde';
    // $last = strlen($str) - 1; // номер последнего символа 
    // echo $str[$last]; // выведет 'e'

    //          -Дана строка '12345'. Найдите сумму цифр этой строки.
    // $str = '12345';
    // var_dump($str);
    // $sum = 0;
    // do {
    //     $sum += $str % 10;
    // } while ($str = (int) $str / 10);
    // echo $sum;
    //---      Дано число 12345. Найдите произведение цифр этого числа.
    // $num = '12345';
    // $i = ((int)$num);
    // preg_match_all('/\d/', $num, $matches);
    // echo array_product($matches[0]) . "<br>"; // 120
    // var_dump($i);
    //---        Дано число 12345. Переставьте цифры этого 
    //         --- числа в обратном порядке.
    // $str = '1,2,345';
    // var_dump($str) .  '<br>';
    // echo   '<br>';
    // $result = strrev((int)str_replace(',', '', $str));
    // echo $result;
    //   ---  --- Сокращенные операции
    // $num  = 1;
    // $num += 3; // эквивалентно $num = $num + 3;
    //---- --- Существуют аналогичные операторы для остальных математических операций:
    // $num  = 2;
    // $num -= 3; // эквивалентно $num = $num - 3;
    // $num  = 2;
    // $num *= 3; // эквивалентно $num = $num * 3;
    // $num  = 2;
    // $num /= 3; // эквивалентно $num = $num / 3;
    // $str  = 'a';
    // $str .= 'b'; // эквивалентно $str = $str . 'b';
    // echo $str;

    //--- - - - Упростите приведенный код через сокращенные операции:
    // $num = 47;
    // $num = $num + 7;
    // $num = $num - 18;
    // $num = $num * 10;
    // $num = $num / 15;
    // echo $num;      // 24
    // $num = 47;
    // $num  += 7;
    // $num -= 18;
    // $num *= 10;
    // $num /= 15;
    // echo $num;       //24
    //--- - -- -  присваивания
    // $num1 = 0;
    // $num2 = $num1++; // в переменную $num2 запишется 0
    // echo '$num 1 - ' . $num1 .  '<br>';      // выведет 0
    // echo '$num 2 - ' . $num2  .  '<br>';      // выведет 1 - переменная $num1 поменялась после записи в $num2 
    // -- -  - -- присваиване 
    // $num = 3;
    // echo $num++; // echo 3
    //---------------------
    // $num = 3;
    // echo ++$num; // echo 4
    //---------------------
    // $num = 3;
    // echo --$num;
    //---------------------
    // $num1 = 3;
    // $num2 = ++$num1;
    // echo $num1;
    // echo $num2;
    //---------------------
    // $num1 = 3;
    // $num2 = $num1++;
    // echo $num1; // echo 4
    // echo $num2; // echo 3
    //---------------------
    // $num1 = 3;
    // $num2 = --$num1;
    // echo $num1; //echo 2
    // echo $num2;//echo 2
    //---------------------
    // $num1 = 3;
    // $num2 = $num1--;
    // echo $num1; //2
    // echo $num2; //3
    //---------------------CHEKKKKKK
    // $num1 = 3;
    // $num1++; //num1=4
    // $num2 = $num1--; //num2=4 num1=3
    // echo 'num1 = 3  =  ' . $num1++ . "<br>"; // num1=3!!!
    // echo 'num2 = 3  =  ' . --$num2 . "<br>"; //num2 = 3





    ?>

</body>

</html>