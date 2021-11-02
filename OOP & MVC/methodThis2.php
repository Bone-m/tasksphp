<?php
echo '4 of 107 - Задача 8' . '<br>' . 'Сделайте метод setAge, который параметром
 будет принимать новый возраст пользователя.' . '<br>' . '<br>';

class User
{
    public $name;
    public $age;

    // Метод для изменения имени юзера:
    public function setAge($age)
    {
        $this->age = $age; // запишем новое значение свойства name
    }
}
$user = new User; // создаем объект класса
$user->name = 'john'; // записываем имя
$user->age = 25; // записываем возраст
// Установим новое имя:
$user->setAge('30');
// Проверим, что имя изменилось:
echo $user->age; // выведет 'eric'