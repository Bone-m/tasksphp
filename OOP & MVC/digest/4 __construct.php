<?php
//Пример 6.5. Инициализация объекта в конструкторе
class Entree {
    public $name;
    public $ingredients = array();
    public function __construct($name, $ingredients) {
        $this->name = $name;
        $this->ingredients = $ingredients;
    }
    public function hasIngredient($ingredient) {
        return in_array($ingredient, $this->ingredients);
    }
}
//Пример 6.6. Вызов конструктора
// Суп, его название и ингредиенты
$soup = new Entree('Chicken Soup', array('chicken', 'water'));
// Сэндвич, его название и ингредиенты
$sandwich = new Entree('Chicken Sandwich', array('chicken', 'bread'));
var_dump($soup);