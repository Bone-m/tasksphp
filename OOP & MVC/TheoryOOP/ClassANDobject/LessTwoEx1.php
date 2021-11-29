<?php

class Car
{
    //Свойтво 
    public $color = 'White';
    public $speed;
    public $fuel;
    public $brand;
    //Метод работает как функция
    public function __construct()
    {
        echo '<br>New object of class ' . __CLASS__ . ' created';
        echo '<br>Method ' . __METHOD__ . ' called';
    }
    public function __destruct()
    {
        echo '<br>Method' . __METHOD__ . ' called';
        echo '<br>Object deleted';
    }
    public function tripTime($distance)
    {
        $time = $distance / $this->speed; //благодаря $this получаем информацию из конкретного объекта
        return $time;
    }
}
$car1 = new Car;
//Задаем свойства через $Имя_класса ->Свойство=Значение
$car1->brand = 'Audi';
$car1->speed = 110;
$car1->fuel = 12;
// $car1->test();


$car2 = new Car;
$car2->brand = 'Mercedes';
$car2->speed = 130;
$car2->fuel = 14;
$car2->color = 'Black';
// $car2->test();


// echo '<pre>';
// print_r - Выводит удобочитаемую информацию о переменной
// print_r($car1);
// print_r($car2);
// Чтение свойств
// echo $car2->color;


echo '<br> Car 1 time:' . $car1->tripTime(1000);
echo '<br> Car 2 time:' . $car2->tripTime(1000);
