<?php
/**
 * Дано целое число, представленное в виде массива, где каждый элемент
 * является цифрой от 0 до 9.
 * Например, число 10526 представлено как [1, 0, 5, 2, 6].
 * Увеличьте это число на 1 и верните результирующий массив цифр.
 * Доработайте функцию plusOne.
 *
 * Проверить результат можно просто запустив код. Выведется табличка вида
 * status..........output..........expected_output
 *
 * success.........[1, 0]..........[1, 0].........
 * success.........[8, 9]..........[8, 9].........
 * error...........[1, 2, 6].......[1, 2, 5]......
 * success.........[1, 0, 0, 0]....[1, 0, 0, 0]...
 *
 * При желании можно поменять входные данные ниже.
 */
function plusOne(array $digits) {
    return $digits;
}

show('status', 'output', 'expected_output');
echo PHP_EOL;

test([9],       [1, 0]);
test([8, 8],    [8, 9]);
test([1, 2, 4], [1, 2, 5]);
test([9, 9, 9], [1, 0, 0, 0]);

function toString(array $array) {
    return sprintf('[%s]', implode(', ', $array));
}

function pad ($str) {
    return str_pad($str, 15, '.');
}

function show($first, $second, $third) {
    printf('%s.%s.%s%s', pad($first), pad($second), pad($third), PHP_EOL);
}

function test(array $input, array $output) {
    $iString = toString(plusOne($input));
    $oString = toString($output);

    show(
        $iString === $oString ? 'success' : 'error',
        $iString,
        $oString
    );
}