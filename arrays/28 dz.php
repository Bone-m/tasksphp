<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZ</title>
</head>

<body>
    <table>
        <tr>
            <td>
                1. Согласно данным Бюро переписи населения США в 2010 году, самыми крупными в Соединенных Штатах Америки были следующие города:</td>
        </tr>
        <tr>
            <td>• Нью-Йорк (8175133 человек)

            </td>
        </tr>
        <tr>
            <td>• Лос-Анджелес, шт. Калифорния (3792621 человек)

            </td>
        </tr>
        <tr>
            <td>• Чикаго, шт. Иллинойс (2695598 человек)

            </td>
        </tr>
        <tr>
            <td> • Хьюстон, шт. Техас (2100263 человек)
            </td>
        </tr>
        <tr>
            <td> • Филадельфия, шт. Пенсильвания (1526006 человек)
            </td>
        </tr>
        <tr>
            <td> • Феникс, шт. Аризона (1445632 человек)
            </td>
        </tr>
        <tr>
            <td> • Сан-Антонио, шт. Техас (1327407 человек)
            </td>
        </tr>
        <tr>
            <td> • Сан-Диего, шт. Калифорния (1307402 человек)
            </td>
        </tr>
        <tr>
            <td> • Даллас, шт. Техас (1197816 человек)
            </td>
        </tr>
        <tr>
            <td> • Сан-Хосе, шт. Калифорния (945942 человек)
            </td>
        </tr>
        <tr>
            <td>
                Определите один массив (или ряд массивов), хранящий местоположение и население перечисленных выше городов.
                Выведите на экран таблицу со сведениями о местоположении и
                населении, а также общее население всех десяти городов.
            </td>
        </tr>
    </table>
    <?
    $country = array(
        array(
            'state' => "Нью-Йорк",
            'sity' => "Нью-Йорк",
            'people' => 8175133
        ),
        array(
            'state' => "Калифорния",
            'sity' => "Лос-Анджелес",
            'people' => 3792621
        ),
        array(
            'state' => "Иллинойс",
            'sity' => "Чикаго",
            'people' => 8175133
        ),
        array(
            'state' => "Техас",
            'sity' => "Хьюстон",
            'people' => 2695598
        ),
        array(
            'state' => "Пенсильвания",
            'sity' => "Филадельфия",
            'people' => 2100263
        ),
        array(
            'state' => "Аризона",
            'sity' => "Феникс",
            'people' => 1445632
        ),
        array(
            'state' => "Техас",
            'sity' => "Сан-Антонио",
            'people' => 1327407
        ),
        array(
            'state' => "Калифорния",
            'sity' => "Сан-Диего",
            'people' => 1307402
        ),
        array(
            'state' => "Техас",
            'sity' => "Даллас",
            'people' => 1197816
        ),
        array(
            'state' => "Калифорния",
            'sity' => "Сан-Хосе",
            'people' => 945942
        ),
    );
    $p = 0;
    $s = 0;
    print "<table>";
    print "<tr><td>№</td><td>Штат:</td><td>Город:</td><td>Население: </td></tr>";
    for ($i = 0, $cou = count($country); $i < $cou; $i++) {
        $p += $country[$i]['people'];
        print "<tr><td>" . $i . "</td><td>" . $country[$i]['state'] . ";</td><td>" . $country[$i]['sity'] . ";</td><td>" . $country[$i]['people'] . "; </td></tr><br>";
        if (
            $country[$i]['state'] == "Техас"
        ) {
            $s += $country[$i]['people'];
        }
    }

    print "</table><table><tr><td>Всего населения в этих городах:$p человек. </td></tr>";
    print "<tr><td>Населения в штате Техас:$s человек. </td></tr></table>";

    ?>
</body>

</html>