
            <?php
            //--------------------------------------------------------------------
            //------------Задача 1- Перезапись элементов-----------
            // $arr = ['a', 'b', 'c'];

            // $arr[0] = $arr[0] . '!';
            // $arr[1] = $arr[1] . '!';
            // $arr[2] = $arr[2] . '!';

            // var_dump($arr); // выведет ['a!', 'b!', 'c!']

            // -------$arr[0] = $arr[0] . '!'; Это тоже самое что и $arr[0] .= '!';


            // $arr = ['a', 'b', 'c'];

            // $arr[0] .= '!';
            // $arr[1] .= '!';
            // $arr[2] .= '!';

            // var_dump($arr); // выведет ['a!', 'b!', 'c!']



            //--------------------------------------------------------------------
            //------------Задача 2- Перезапись элементов--------------------------
            //Прибавьте к каждому элементу массива число 3. Выведите на экран
            // измененный массив.
            //--------------------------------------------------------------------
            // $arr = ['a' => 1, 'b' => 2, 'c' => 3];
            // $arr['a'] += 3;
            // $arr['b'] += 3;
            // $arr['c'] += 3;
            // echo $arr['a'] . "<br>";
            // echo $arr['b'] . "<br>";
            // echo $arr['c'] . "<br>";
            // var_dump($arr);

            //--------------------------------------------------------------------
            //------------Задача 3- Инкремент и декремент-------------------------
            //--------------------------------------------------------------------
            // $arr = ['a' => 1, 'b' => 2, 'c' => 3];

            // $arr['a']++;
            // $arr['a']++;
            // $arr['b']--;
            // $arr['c']--;
            // $arr['c']--;
            // echo 'a = 3 =    ' . $arr['a'] . "<br>";
            // echo 'b = 1 =    ' . $arr['b'] . "<br>";
            // echo 'c = 1 =    ' . $arr['c'] . "<br>";

            // var_dump($arr);
            // $arr = []; // объявляем массив с элементами 

            // $arr['year'] = 2021; // элемент добавится в ключ 0
            // $arr['month'] = '10'; // элемент добавится в ключ 1
            // $arr['day'] = '08'; // элемент добавится в ключ 2

            // var_dump($arr); // выведет ['a', 'b', 'c', 'd', 'e']







            $language = 'был основан Биллом Гейтсом ещё в далёком 1975 году ';
            $language = explode(" ", $language);
            foreach ($language as $value) {
                echo $firstLetter = $value[0] . '<br>';
            }


            //---------------------------------
            // $text = 'Microsoft был основан Биллом Гейтсом ещё в далёком 1975 году.';
            // $array = explode(" ", $text); // перерабатываем строку в массив
            // $array = array_slice($array, 0, 5); // выбираем первые 5 слов-элементов
            // $newtext = implode(" ", $array); // массив снова перерабатываем в строку
            // echo $newtext; //Выведет 'Microsoft был основан Биллом Гейтсом'


            // $text = 'Слово ещё слово and English Word too и ещё слово';
            // $out = preg_split('~[^a-zA-Z0-9А-Яа-яёЁ]+~u', $text, 0, PREG_SPLIT_NO_EMPTY);
            // foreach ($out as $value) {
            //     echo $out = $value[0];
            // }
            // var_dump($out);



            ?>
