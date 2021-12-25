<?php
//Пример 6.14. Определение класса в пространстве имен
namespace Tiny;
class Fruit {
    public static function munch($bite) {
        print "Here is a tiny munch of $bite.";
    }
}// Для обращения необходимо ввести \ или use
//\Tiny\Fruit::munch("banana");
// Для обращения необходимо ввести \ или use
use Tiny;
Fruit::munch("banana");
