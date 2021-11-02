<?php
echo '4 of 107 - Задача 10' . '<br>' . 'Модифицируйте метод setAge так, чтобы он вначале проверял, ' .
    '<br>' . 'что переданный возраст больше или равен 18. ' .
    '<br>' . 'Если это так - пусть метод меняет возраст пользователя, а если не так - то ничего не делает.' . '<br>';

class User
{
    public $name;
    public $age;

    // Метод для изменения имени юзера:
    // public function setAge($age)
    // {
    //     if ($this->age = $age >= 18) {
    //         echo 'Возраст удовлетворяет требованиям 18+ :' . $age . '<br>';
    //     } else {
    //         // return $age;
    //         $this->age = $age = rand(19, 99);
    //         echo 'Возраст не удовлетворяет требованиям 18+. Произойдет изменение возраста! воть :' . $age . '<br>';
    //     }
    //     $this->age = $age; // запишем новое значение свойства name
    // }


    public function setAge($age)
    {
        // Если возраст от 18 до 60:
        if ($age >= 18 and $age <= 60) {
            $this->age = $age;
        } else {
            echo 'Некорректный возраст !!!';
        }
    }
}
$user = new User; // создаем объект класса
$user->name = 'john'; // записываем имя
$user->age = ; // записываем возраст
// Установим новое имя:
// $user->setAge('7');
// Проверим, что имя изменилось:
// echo $user->age; // выведет 'eric'
// echo $user->age . $user->setAge($age);
echo $user->age;
echo $user->setAge($age);
