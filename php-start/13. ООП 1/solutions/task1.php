<?php

/*
 * PHP Start | Теория
 * Урок 13:  Объектно-ориентированное программирование #1
 *
 * Задача 1
 *
 * 1. Добавить классу 3 свойства на свое усмотрение (например: количество
 * дверей, стоимость, ...). Одному из свойств присвоить значение по умолчанию.
 * 2. Создать 4 объекта класса Car.
 * 3. Для двух объектов задать значения свойств, используя обращение к свойству
 * (например, $car1->price).
 * 4. Для двух оставшихся задать свойства, используя конструктор (написать
 * констуктор для инициализации объекта).
 * 5. Написать функцию fuelСonsumption() для расчета количества топлива,
 * затраченного на поездку на заданную дистанцию. Используйте свойство объекта
 * $fuel(расход топлива на 100 км). Задача похожа на пример из занятия.
 * 6. Добавить в класс 3 числовых константы (со значениями, например, 2,5,12).
 * Распечатать значения констант в коде программы (вне класса).
 * 7. Добавить статический метод getMaxConstant(). Этот метод находит наибольшую
 * из констант класса и возвращает её значение. Не забывайте, что статические
 * методы принадлежат классу, и вызываются из контекста класса.
 */

class Car
{
    // 1
    public $price;
    public $fuel;
    public $doorsCount = 4;
    
    // 6
    const NUM1 = 0;
    const NUM2 = 7;
    const NUM3 = 49;
    
    /*
     * 4
     */
    public function __construct($price, $fuel, $doorsCount)
    {
        $this->price = $price;
        $this->fuel = $fuel;
        $this->doorsCount = $doorsCount;
    }
    
    // 5
    public function fuelСonsumption($distance)
    {
        return $distance / 100 * $this->fuel;
    }
    
    // 6
    public static function getMaxConstant()
    {
        return max(self::NUM1, self::NUM2, self::NUM3);
    }
}

// 2
$car1 = new Car;
$car2 = new Car;
//еще два объекта будут в пункте 4.

// 3
$car1->price = 200000;
$car1->fuel = 10;
var_dump($car1);
$car2->price = 150000;
$car2->fuel = 17;
var_dump($car2);

// 4
$car3 = new Car(700000, 7, 5);
$car4 = new Car(500000, 9, 3);
var_dump($car3); 
var_dump($car4);

// 5
echo $car1->fuelСonsumption(500).'<br>';
echo $car2->fuelСonsumption(200).'<br>';

// 6
echo Car::NUM1.'<br>';
echo Car::NUM2.'<br>';
echo Car::NUM3.'<br>';

// 7
echo Car::getMaxConstant();
