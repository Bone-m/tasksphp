<?php
class Circle implements CalculateSquare //Чтобы обязать класс реализовать этот интерфейс нужно использовать слово implements после имени класса.

{
    const PI = 3.1416; //Теперь мы можем использовать константу и в других методах. Или даже в других классах, обратившись к ней через Circle::PI.

    private $r;

    public function __construct(float $r)
    {
        $this->r = $r;
    }

    public function calculateSquare(): float
    {
        return self::PI * ($this->r ** 2);
    }
}
// Создадим интерфейс для нашего случая.
interface CalculateSquare
{
    public function calculateSquare(): float;
}


//Чтобы обязать класс реализовать этот интерфейс нужно использовать слово implements после имени класса.
//Один класс может реализовывать сразу несколько интерфейсов, в таком случае они просто перечисляются через запятую.

//instanceof - проверка на интерфейс или экземпляр какого-то класса.
// если true  то интерфейс, false экземпляр какого-то класса.
$circle1 = new Circle(2.5);
var_dump($circle1 instanceof Circle);