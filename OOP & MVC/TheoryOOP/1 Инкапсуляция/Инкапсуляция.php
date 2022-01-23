<?php
class Burger{
    private $bread;

    private $meat;

    private $sous;

    public function getBread()
    {
        return $this->bread;
    }
    public function setBread($bread)
    {
        return $this->bread=$bread;
    }


    public function getMeat()
    {
        return $this->meat;
    }
    public function setMeat($meat)
    {
        return $this->meat=$meat;
    }

    public function getSous()
    {
        return $this->sous;
    }
    public function setSous($sous)
    {
        return $this->sous=$sous;
    }
}
$burger = new Burger();
$burger->setBread('Dark ');
$burger->setMeat('Mroumor ');
$burger->setSous('Ogurec , Ketchup');

var_dump($burger);

echo "<br>";
echo $burger->getBread();
echo $burger->getMeat();
echo $burger->getSous();