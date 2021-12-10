    <?php
    // ?Вывод на экран списка, размечаемого дескриптором <select>, в цикле, организуемом с помощью конструкции for()

    print '<select name="people">';
    for ($i = 1; $i <= 10; $i++) {
        print "<option>\$i</option>\n"; // "<option>\$i</option>\n" - \если будет рбратный слэш то будут i, а не цифры.
    }
    print '</select>';
