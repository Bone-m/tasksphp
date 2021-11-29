// Наследование - механизм языка, позволяющий описать новый класс на основе
// уже существующего (Родительского, Базового) класса. Класс - потомок может
//добавить собственные методы и свойства, а также пользоваться родительскими
//методами и свойствами.
//
<?php
class Vehicle
{
    public $color;
    public $speed;
    public $brand;

    public function tripTime($distance)
    {
        $time = $distance / $this->speed;
        return $time;
    }
}
//extends - расширяет, унаследует от Vehicle
class Bicycle extends Vehicle
{
    public $type;

}

class Car extends Vehicle{
    public $fuel;
    public function fuelConsumption($distance){
        $result = ($this->fuel * $distance) / 100;
        return $result;
    }
}
$car1=new Car;
$car1->speed=110;
$car1->fuel = 1;
