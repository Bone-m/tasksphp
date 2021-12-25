<?php
//Пример 6.1. Определение класса
class Entree {                      //class
    public $name;                     //svoistvo
    public $ingredients = array();                     //svoistvo
    public function hasIngredient($ingredient) {                     //method Functoion
        return in_array($ingredient, $this->ingredients);
    }
}
