<?php

class Cat
{
    private $name;
    public $color;
    public $weight; //вес

    public function sayHay()
    {
        echo "Привет! Меня зовут $this->name. <br>"; //$this->name вернёт значение свойства name у текущего объекта
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string // getName должен выводить всегда только строку string но не Null
    {
        return $this->name;
    }
}

$cat1 = new Cat(); //Новый объект класса

$cat1->setName (' Kitty ');
$cat1->color = ' Black ';
$cat1->weight = ' 4 Kg ';
$cat1->sayHay();

$cat2 = new Cat();
$cat2->setName( ' Murzik ');
$cat2->color = ' White ';
$cat2->weight = ' 3,5 Kg ';
$cat2->sayHay();

var_dump($cat1);

echo "<br>";
echo 'Характеристики кота по имени: '.$cat1->getName() .'Цвет: '. $cat1->color .'Вес: '. $cat1->weight . "<br>";
echo 'Характеристики кота по имени: '.$cat2->getName() .'Цвет: '. $cat2->color .'Вес: '. $cat2->weight . "<br>";

//echo function sayHay();