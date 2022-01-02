<?php

/*
 * PHP Start | Теория
 * Урок 14:  Объектно-ориентированное программирование #2
 *
 * Задача 1
 * 
 * 1) Создать класс Figure - плоская геометрическая фигура. У этого класса есть
 * такие свойства: площадь, цвет. И константа: количество сторон.
 * 2) Для класса Figure написать метод infoAbout(). Этот метод возвращает
 * сообщение: "Это геометрическая фигура!".
 * 3) От класса Figure унаследовать классы: Rectangle, Triangle, Square.
 * 4) Добавить для Rectangle приватные свойства a,b - длины сторон.
 * 5) Добавить для Square приватное свойство a - длина стороны.
 * 6) Добавить для Triangle приватные свойства a, b, c - длины сторон.
 * 7) Для каждого из классов Rectangle, Triangle, Square определить значение
 * константы: количество сторон.
 * 8) Создать конструкторы для классов Rectangle, Triangle, Square для
 * инициализации значений длин сторон.
 * 9) Для каждого из классов Rectangle, Triangle, Square реализовать метод
 * getArea() - подсчет площади
 * Методы возвращают значение площади (return $result)
 * 10) Для каждого из классов Rectangle, Triangle, Square переопределить метод
 * infoAbout() так, что б он возвращал строку такого содержания (пример
 * для квадрата):
 * "Это класс квадрата. У него 4 стороны".
 * Аналогично для других классов.
 * 11) Сделать методы infoAbout() финальными.
 * 10) Для каждого класса Rectangle, Triangle, Square создать по 2 объекта
 * (с передачей значений длин сторон).
 * 11) Вызвать для всех объектов методы getArea().
 */

class Figure
{
    public $square;
    public $color;
    
    const SIDES_COUNT = 4;
    
    public function infoAbout()
    {
        return 'Это геометрическая фигура!';
    }
}

class Rectangle extends Figure
{
    private $a;
    private $b;
    
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    
    public function getSquare() //подсчет площади
    {
        return $this->a * $this->b;
    }
    
    final public function infoAbout()
    {
        return 'Это класс прямоугольника. У него '.self::SIDES_COUNT.' стороны.';
    }
}

class Triangle extends Figure
{
    private $a;
    private $b;
    private $c;
    
    const SIDES_COUNT = 3;
    
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    
    public function getSquare() //подсчет площади
    {
        // Немного геометрии. Подсказки в документе с заданием
        $p = ($this->a + $this->b + $this->c) / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }
    
    final public function infoAbout()
    {
        return 'Это класс треугольника. У него '.self::SIDES_COUNT.' стороны.';
    }
}

class Square extends Figure
{
    private $a;
    
    public function __construct($a)
    {
        $this->a = $a;
    }
    
    public function getSquare() //подсчет площади
    {
        return $this->a * $this->a;
    }
    
    final public function infoAbout()
    {
        return 'Это класс квадрата. У него '.self::SIDES_COUNT.' стороны.';
    }
}

$rectangle1 = new Rectangle(7, 19);
$rectangle2 = new Rectangle(6, 20);

$triangle1 = new Triangle(3, 4, 5);
$triangle2 = new Triangle(5, 12, 13);

$square1 = new Square(49);
$square2 = new Square(256);

echo '<i>Площадь прямоугольника1:</i> '.$rectangle1->getSquare().'<br>';
echo '<i>Площадь прямоугольника2:</i> '.$rectangle2->getSquare().'<br>';
echo '<i>Площадь треугольника1:</i> '.$triangle1->getSquare().'<br>';
echo '<i>Площадь треугольника2:</i> '.$triangle2->getSquare().'<br>';
echo '<i>Площадь квадрата1:</i> '.$square1->getSquare().'<br>';
echo '<i>Площадь квадрата2:</i> '.$square2->getSquare().'<br>';

/* Обратите внимание, что для классов Square и Rectangle я не отпределял константу
 * SIDES_COUNT, так как эти классы наследуют класс Figure, у которого она уже
 * определена с нужным значением
 */