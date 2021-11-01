<?php
class User
{
    public $name;
    public $age;
    // Создаем метод:
    public function show()
    {
        return '!!!';
    }
}
$user = new User;
$user->name = 'john';
$user->age = 25;
// Вызовем наш метод:
echo $user->show(); // выведет '!!!'

class Mil
{
    public $name;
    public $age;
    public function milk()
    {
        echo 'banana ! ';
        return 'I need more milk';
    }
}
$mil = new Mil;
$mil->name = 'Mikhail';
$mil->age = 25;
echo $mil->name . ' speak ' . $mil->milk();
















class Home
{
    public $door;
    public $bed;
    public $windows;
    public function time()
    {
        echo ' AND ';
        return "the alarm should ring at 6:00";
    }
}
$home = new Home;
$home->door = 'big door';
$home->bed = 'big door';
$home->windows = 'clear windows!';
echo $home->time();
