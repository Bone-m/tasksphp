<?php
echo '4 of 107 - Задача 10' . '<br>' . 'Модифицируйте метод setAge так, чтобы он вначале проверял, ' .
    '<br>' . 'что переданный возраст больше или равен 18. ' .
    '<br>' . 'Если это так - пусть метод меняет возраст пользователя, а если не так - то ничего не делает.' . '<br>';

class User
{
    public $name;
    public $age;
    // Метод для изменения возраста юзера:

    public function setAge($age){
    	// Если возраст от 18:
        if ($age>=18) {
            $this->age = $age;
        }
    }		// Метод для добавления к возрасту:
    public function addAge($age){
        
}
