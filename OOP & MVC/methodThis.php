<?php
echo '4 of 107 - Задача 5' . '<br>' . 'Сделайте в классе Employee метод checkAge,' . '<br>' . '
 который будет проверять то, что работнику больше 18 лет и возвращать true, если 
 это так, и false, если это не так:' . '<br>';
class Emploed
{
    public $name;
    public $age;
    public $salary;
    // Метод для проверки возроста:

    public function checkAge()
    {
        $a = 18;
        if ($this->age >= 18) {
            echo 'Проверка на возраст прошла успешно. Возраст больше 18 : ' . '<br>';
        } else {
            echo 'Проверка на возраст  не прошла успешно. Возраст меньше 18 : ' . '<br>';
        }
        return $this->age;
    }
}
$emploed1 = new Emploed;
$emploed1->name = 'Misa';
$emploed1->age = 25;
$emploed1->salary = 1000;

echo $emploed1->checkAge();
