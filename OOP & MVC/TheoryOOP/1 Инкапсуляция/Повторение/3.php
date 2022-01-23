<?php

class Planet
{
    private $name;
    private $livingBeing;
    private $gender;
    private $age;
    private $skillUniversity;

    public function __construct(string $name, $livingBeing, $gender, $age, $skillUniversity)
    {
        $this->livingBeing = $livingBeing;
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        $this->skillUniversity = $skillUniversity;
    }

    public function sayEnter()
    {
        echo "Имя ".$this->name .
            "; Вид  ". $this->livingBeing .
            "; Пол  ". $this->gender .
            "; Возраст  ".$this->age .
            "; Образование  ".$this->skillUniversity . "<br>";
    }
}

$Alina = new Planet('Alina', "human", "Women", "26", 'Aspirante');
$Alina-> sayEnter();

$Michail = new Planet("Mikhail", 'human', "Men", "24", "Magistratura");
$Michail->sayEnter();

//$Kmd = new Planet();