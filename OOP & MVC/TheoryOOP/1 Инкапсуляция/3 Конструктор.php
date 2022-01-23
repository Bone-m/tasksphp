<?php

class Cat
{
    private $name;
    private $color;
    public $weight; //вес
    public function __construct(string $name, $color) // getName должен выводить всегда только строку string но не Null
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function sayHay()
    {
        echo "MeoW Привет! Меня зовут $this->name MeoW у меня цвет шерсти $this->color MeoW и мой вес $this->weight MeoW. <br> "; //$this->name вернёт значение свойства name у текущего объекта
    }
//    public function setName(string $name)
//    {
//        $this->name = $name;
//
//    }
//    public function getName(): string // getName должен выводить всегда только строку string но не Null
//    {
//        return $this->name;
//    }
//    public function setColor(string $color)
//    {
//        $this->color = $color;
//
//    }
//    public function getColor(): string // getName должен выводить всегда только строку string но не Null
//    {
//        return $this->color;
//    }
}

$cat1 = new Cat('Barsik', ' White '); //Новый объект класса

//$cat1->setName ('Снежок'); // через set вводим новое название
//$cat1->setColor (' Белый ');
$cat1->weight = ' 4 Kg ';
$cat1->sayHay();

$cat2 = new Cat(' Murzik ', ' White ');

//$cat2->setName(' Барсик '); // через set вводим новое название
//$cat2->setColor( ' Рыжий ');
$cat2->weight = ' 3,5 Kg ';
$cat2->sayHay();

//var_dump($cat1);
//вывод через get
//echo "<br>";
//echo 'Характеристики кота по имени: '.$cat1->getName() .'; Цвет: '. $cat1->getColor() .'; Вес: '. $cat1->weight . "<br>";
//echo 'Характеристики кота по имени: '.$cat2->getName() .'; Цвет: '. $cat2->getColor() .'; Вес: '. $cat2->weight . "<br>";

