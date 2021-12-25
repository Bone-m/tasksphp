<?php
//Пример 6.2. Создание и применение объектов
class Entree {                      //class
    public $name;                     //svoistvo
    public $ingredients = array();                     //svoistvo
    public function hasIngredient($ingredient) {                     //method Functoion
        return in_array($ingredient, $this->ingredients);           //Это специальная переменная $this, ссылающаяся на
        // тот экземпляр класса, из которого вызывается метод
    }
}
// создать экземпляр и присвоить его переменной $soup
$soup = new Entree;
// установить свойства экземпляра в переменной $soup
$soup->name = 'Chicken Soup';
$soup->ingredients = array('chicken', 'water');
// создать отдельный экземпляр и присвоить его
// переменной $sandwich
$sandwich = new Entree;
// установить свойства экземпляра в переменной $sandwich
$sandwich->name = 'Chicken Sandwich';
$sandwich->ingredients = array('chicken', 'bread');
foreach (['chicken','lemon','bread','water'] as $ing) {
    //Операция “стрелка” (->)
    //служит для доступа к свойствам (т.е. к переменным) и методам
    // (т.е. к функциям) в объекте.
    if ($soup->hasIngredient($ing)) {
        print "Soup contains $ing.<br>";
    }
    if ($sandwich->hasIngredient($ing)) {
        print "Sandwich contains $ing. <br>";
    }
}