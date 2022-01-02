<?php
//Пример 7.16. Проверка диапазона дат
// создать объект типа DateTime с датой шестимесячной давности
$range_start = new DateTime('6 months ago');
// создать объект типа DateTime с текущей датой
$range_end = new DateTime();
// в элементе массива $_POST['year'] хранится год,
// состоящий из четырех цифр;
// в элементе массива $_POST['month'] хранится месяц,
// состоящий из двух цифр;
// в элементе массива $_POST['day'] хранится день,
// состоящий из двух цифр
$input['year'] = filter_input(INPUT_POST, 'year',
    FILTER_VALIDATE_INT,
    array('options' => array('min_range' => 1900,
        'max_range' => 2100)));
$input['month'] = filter_input(INPUT_POST, 'month',
    FILTER_VALIDATE_INT,
    array('options' => array('min_range' => 1,
        'max_range' => 12)));
$input['day'] = filter_input(INPUT_POST, 'day',
    FILTER_VALIDATE_INT,
    array('options' => array('min_range' => 1,
        'max_range' => 31)));
// Для сравнения с логическим значением false операция ===
// не требуется, т.к. нулевое значение является недопустимым
// вариантом выбора года, месяца или дня. В функции checkdate()
// проверяется допустимое количество дней в данном месяце и году
if ($input['year'] && input ['month'] && input['day'] &&
    checkdate($input['month'], $input['day'], $input['year'])) {
    $submitted_date = new DateTime(strtotime(
        $input['year'] . '-' .
        $input['month'] . '-' .
        $input['day']));
    if (($range_start > $submitted_date) ||
        ($range_end < $submitted_date)) {
        $errors[] =
            'Please choose a date less than six months old.';
    }
} else {
// Это сообщение выводится в том случае, если пользователь
// пропустит один из параметров или введет в форме дату
// вроде 31 февраля
    $errors[] = 'Please enter a valid date.';
}
