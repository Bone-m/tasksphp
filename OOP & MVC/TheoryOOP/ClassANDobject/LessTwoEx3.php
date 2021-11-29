<?php
//Создадим класс машины в сокращенном виде

use Car as GlobalCar;

class Car
{
    const WHEELS = 4;
    public function test() //Значения по умолчанию
    {
        echo Car::WHEELS; //:: вне объявления класса (Оператор разрешения области видимости)
        echo self::WHEELS; // Это даст возможность обращаться на прямую к своему кслассу

    }
}
class Bicycle
{
    const WHEELS = 2;
    public function test()
    {
        echo Car::WHEELS; // Обращается к классу Car
        echo self::WHEELS; // Oбращается к своему кслассу!
    }
}
$b = new Bicycle;
$b->test();
$a = new GlobalCar;
$a->test();
//this-> Доступ к консректной переменной
//self:: Доступ к классу