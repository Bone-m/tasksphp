<?php
echo 'Класс MyClass инициализирован!' . '<br>';
class MyClass
{
    public function muh()
    {
        echo 'MyClass class has initialized !' . "\n";
    }
}
$userclass = new MyClass;
echo $userclass->muh();
