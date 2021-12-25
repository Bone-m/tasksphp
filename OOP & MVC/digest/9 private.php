<?php
//Пример 6.13. Изменение доступности свойств
class Entree {
    private $name;
    protected $ingredients = array();
    /* Свойство $name объявлено закрытым, и поэтому ниже
    предоставляется метод для чтения его значения */
    public function getName() {
        return $this->name;
    }
    public function __construct($name, $ingredients) {
        if (! is_array($ingredients)) {
            throw new Exception('$ingredients must be an array');
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }
    public function hasIngredient($ingredient) {
        return in_array($ingredient, $this->ingredients);
    }
}