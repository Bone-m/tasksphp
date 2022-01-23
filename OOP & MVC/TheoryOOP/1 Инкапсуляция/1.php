<?php
class Cat
{
    public $name;
    public $color;
    public $weight; //вес

    public function sayHay(){
        echo "Привет! Меня зовут $this->name. <br>"; //$this->name вернёт значение свойства name у текущего объекта
    }
}
$cat1 = new Cat(); //Новый объект класса

$cat1->name = ' Kitty ';
$cat1->color = ' Black ';
$cat1->weight = ' 4 Kg ';
$cat1->sayHay();

$cat2 = new Cat();
$cat2->name = ' Murzik ';
$cat2->color = ' White ';
$cat2->weight = ' 3,5 Kg ';
$cat2->sayHay();

var_dump($cat1);

echo "<br>";
echo $cat1->name . $cat1->color . $cat1->weight ."<br>";
//echo function sayHay();