<?php
interface SqualGeometry{ // 1. В самом начале записать интефейс
    public function SqualGeometry():float;  //2. Внутри интерфеса указать право доступа название и тип данных
}
class Circle implements SqualGeometry   //3. Затем продолжить описать класс и в конце указать implements - и название интерфейса
{
    const PI=3.14;
    private $r;

    public function __construct(float $r){
        $this->r=$r;
    }
// _construct, __ construct, __construct, __construct, __construct
    public function SqualGeometry():float
    {
        return Circle::PI*($this->r**2);
    }
}
$objects=[
    new Circle(5),
    ];

foreach ($objects as $object){
    if ($object instanceof SqualGeometry){
        echo "SqualGeometry: " . $object->SqualGeometry() . "<br>";
    }
}