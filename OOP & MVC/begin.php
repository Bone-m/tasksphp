<!-- http://code.mu/ru/php/book/oop/intro/ -->
<?php
class User
{
    public $name;
    public $age;
}

// Первый объект
$user1 = new User; // создаем первый объект
$user1->name = 'john'; // записываем имя
$user1->age = 25; // записываем возраст

// Второй объект
$user2 = new User; // создаем второй объект
$user2->name = 'eric'; // записываем имя
$user2->age = 30; // записываем возраст

// Найдем сумму возрастов:
echo $user1->age + $user2->age; // выведет 55
echo '<br>';
echo 'Задача №1';
echo '<br>';
echo 'Сделайте класс Employee (работник), в котором будут следующие свойства - name
 (имя), age (возраст), salary (зарплата).';
echo '<br>';
class Employee
{
    public $name;
    public $age;
    public $salary;
}
echo 'Создайте объект класса Employee, затем установите его свойства в следующие значения - имя john, возраст 25, зарплата 1000.' . '<br>';
$employee1 = new Employee; // создаем второй объект
$employee1->name = 'john';
$employee1->age = 25;
$employee1->salary = 1000;
echo $employee1->name . '<br>';
echo $employee1->age . '<br>';
echo $employee1->salary . '<br>';

// ex3

$employee2 = new Employee;
$employee2->name = 'eric';
$employee2->age = 26;
$employee2->salary = 2000;
//ex4 Выведите на экран сумму зарплат созданных юзеров.

echo 'User 1 : ' . $employee1->salary . '<br>';
echo 'User 2 : ' . $employee2->salary . '<br>';
echo 'User 1 + 2 (суммa зарплат созданных юзеров) : ' . $employee1->salary + $employee2->salary . '<br>';
echo 'Выведите на экран сумму возрастов созданных юзеров.

: ' . $employee1->age + $employee2->age . '<br>';
echo 'User 2 : ' . $employee2->salary . '<br>';






?>