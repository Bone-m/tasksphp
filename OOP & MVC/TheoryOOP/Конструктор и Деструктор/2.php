<?php
class Fruit {
    public $name;
    public $color;
//Автоматически вызывается при создании объекта из класса
    function __construct($name, string $color) {
        $this->name = $name;
        $this->color= $color;
    }
    // Автоматически вызывается в конце скрипта
    function __destruct() {
        echo "The fruit is $this->name, color is $this->color.<br>";
    }
}

$apple = new Fruit("Apple", "green");
$cherry =new Fruit("Cherry", "red");