<?php
//Пример 6.3. Определение статического метода
class Entree {
    public $name;
    public $ingredients = array();
    public function hasIngredient($ingredient) {
        return in_array($ingredient, $this->ingredients);
    }
    public static function getSizes() {         //! static
        return array('small','medium','large');
    }
}
//Чтобы вызвать статический метод, следует вставить знаки :: между именами класса и
// метода вместо знаков ->,
// как показано в примере 6.4.
//Пример 6.4. Вызов статического метода
$sizes = Entree::getSizes();