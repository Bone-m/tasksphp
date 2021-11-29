<?php
//Создадим класс машины в сокращенном виде
class Car
{
    public function __construct($brand = 'Lada', $speed = 60, $fuel = 11, $color = 'silver') //Значения по умолчанию
    {
        $this->brand = $brand;
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->color = $color;
        // echo $color;
    }
    public function tripTime($distance)
    {
        $time = $distance / $this->speed; //благодаря $this получаем информацию из конкретного объекта
        return $time;
    }
    public function tripFuels($distance)
    {
        $fuels = $distance / $this->fuel;
        return $fuels;
    }
}
$car1 = new Car('Audi', 110, 12, 'Yellow');
$car2 = new Car();
$car3 = new Car('BMW', 200,  13, 'Yellow');
$tip = '<br> Автомобиль проезжает расстояние в 1000 км за: ';
$tap = ' часов.  Расход топлива автомобиля ';
echo '<br>' . $tip . $car1->tripTime(1000) . $tap . $car1->brand . ' на 1000 км. : ' . $car1->tripFuels(1000) . ' литров';
echo '<br>' . $tip  . $car2->tripTime(1000) . $tap . $car2->brand . ' на 1000 км. : ' . $car2->tripFuels(1000) . ' литров';
echo '<br>' . $tip . $car3->tripTime(1000) . $tap . $car3->brand . ' на 1000 км. : ' . $car3->tripFuels(1000) . ' литров';
