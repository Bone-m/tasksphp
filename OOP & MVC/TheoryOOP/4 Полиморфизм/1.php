<?php
class A
{
    public function sayHello()
    {
        return 'Hello, I am A';
    }
}
// Создаем новый класс и наследуем функцию sayHello()
class B extends A
{
    public function sayHello()
    {
        // С помощью parent - вызываем наследование от А
        //Мы вызвали родительский метод, и дополнили его функционал
        return parent::sayHello() . '. It was joke, I am B :)';
    }
}

$b = new B();

echo $b->sayHello(); // Hello, I am A. It was joke, I am B :)