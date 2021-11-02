<?php
echo '4 of 107 - Задача 6' . '<br>' . 'Создайте два объекта класса Employee, запишите в их свойства какие-либо значения.' . '<br>' . '
С помощью метода getSalary найдите сумму зарплат созданных работников.' . '<br>';

class Employee
{
    //свойства
    public $name;
    public $age;
    public $salary;
    public function getSalaryO()
    {
        return $this->salary;
        //  $a . '<br>';
    }
    public function getSalaryT()
    {
        return $this->salary;
    }
}
$employee1 = new Employee;
$employee1->name = 'Misa';
$employee1->age = 25;
$employee1->salary = 1000;

$employee2 = new Employee;
$employee2->name = 'neMisa';
$employee2->age = 45;
$employee2->salary = 2000;
echo  $employee1->getSalaryO() . '<br>' . $employee2->getSalaryT() . '<br>';
echo  'Сумма данных чисел составляет : ' . $employee1->getSalaryO() + $employee2->getSalaryT();
