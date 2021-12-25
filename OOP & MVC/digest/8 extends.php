<?php
//Пример 6.10. Расширение класса Entree
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
    //ComboMeal должен наследовать от класса Entree
    //все его методы и свойства
    //Пример 6.12. Ввод конструктора в подкласс
}class ComboMeal extends Entree {
    public function __construct($name, $entrees) {
        parent::__construct($name, $entrees);
        foreach ($entrees as $entree) {
            if (! $entree instanceof Entree) {
                throw new Exception(
                    'Elements of $entrees must be Entree objects');
            }
        }
    }
    public function hasIngredient($ingredient) {
        foreach ($this->ingredients as $entree) {
            if ($entree->hasIngredient($ingredient)) {
                return true;
            }
        }
        return false;
    }
}

//Пример 6.11. Применение подкласса
// Суп, его название и ингредиенты
$soup = new Entree('Chicken Soup', array('chicken', 'water'));
// Сендвич, его название и ингредиенты
$sandwich = new Entree('Chicken Sandwich', array('chicken', 'bread'));
// Составное блюдо
$combo = new ComboMeal('Soup + Sandwich', array($soup, $sandwich));
foreach (['chicken','water','pickles'] as $ing) {
    if ($combo->hasIngredient($ing)) {
        print "Что-то в комбо содержит  $ing.\n";
    }
}