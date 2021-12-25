<?php
//Пример 6.7. Генерирование исключения
class Entree {
    public $name;
    public $ingredients = array();
    public function __construct($name, $ingredients) {
        if (! is_array($ingredients)) {// При записе Ингридиентов не в массиве ошибка!. Специально чтоб делать проверки
            throw new Exception('$ingredients must be an array');
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }
    public function hasIngredient($ingredient) {
        return in_array($ingredient, $this->ingredients);
    }
}
$soup = new Entree('Chicken Soup', array('chicken', 'water'));
// Сэндвич, его название и ингредиенты
$sandwich = new Entree('Chicken Sandwich', array('chicken', 'bread'));
//! Для проверки введу Ингридиентов не в массиве.
// Сейчас будет ошибка без моего сообщения о том чтоб записывать в массив Ингридиенты. См пример 6.
$drink = new Entree('Glass of Milk', 'chicken', 'bread');
if ($drink->hasIngredient('milk')) {
    print "Yummy!";
}
