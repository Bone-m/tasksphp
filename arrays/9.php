<?php
//Пример 4.11. Применение языковой конструкции foreach() для перебора числовых массивов

$diner = array('qwe', 'wer', 'wet');
foreach ($diner as $dish) {
    print " Данный текст тут $dish<pre></pre>";
}
