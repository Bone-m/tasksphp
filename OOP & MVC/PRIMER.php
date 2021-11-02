<?php
class User
{
    public $name;
    public $age;

    // Метод для проверки возраста:
    public function isAgeCorrect($age)
    {
        if ($age >= 18 and $age <= 60) {
            return true;
        } else {
            return false;
        }
    }

    // Метод для изменения возраста юзера:
    public function setAge($age)
    {
        // Проверим возраст на корректность:
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    // Метод для добавления к возрасту:
    public function addAge($years)
    {
        $newAge = $this->age + $years; // вычислим новый возраст

        // Проверим возраст на корректность:
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge; // обновим, если новый возраст прошел проверку
        }
    }
}
$user = new User;

$user->setAge(31); // установим возраст в 30
echo $user->age; // выведет 30

$user->setAge(17); // установим некорректный возраст
echo $user->age; // не выведет 10, а выведет 30