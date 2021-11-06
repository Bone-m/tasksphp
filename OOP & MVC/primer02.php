<?php
echo 'Напишите простой класс PHP, который отображает вводное сообщение, такое как «Привет всем, я Скотт», где «Скотт» - это значение аргумента метода в классе.' . '<br>';
class MyClass
{
    public function muh()
    {
        echo 'MyClass class has initialized !' . "\n";
    }
}
$userclass = new MyClass;
echo $userclass->muh();
