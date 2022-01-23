<?php
class Machines
{
    public $name;
    public $machinesKoleso;
    public $machinesKapot;
    public $machinesDoor;
    public $color;
    public $speed;
    public $motor;
    public $rashod;

    public function sayMachines(){

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <table>
            <tr>
                <h2><?php echo "Название машины: "  . $this->name ;?>
                </h2>
            </tr>

            <tr>
                <li> <?php echo "Характеристика капота: " . $this->machinesKapot  ;?></li>
            </tr>

            <tr>
                <li><?php echo "Характеристика двери: " . $this->machinesDoor  ;?>
                </li>
            </tr>

            <tr>
                <li> <?php echo "Максимальная скорость: " . $this->speed   ;?></li>
            </tr>

            <tr>
                <li><?php echo "Объём двигателя: " . $this->motor ;?>
                </li>
            </tr>

            <tr>
                <li> <?php echo "Расход топлива на 100 км/л: " . $this->rashod ;?></li>
            </tr>
            <tr>
                <li><a href="URL"> <?php echo "Подробный просмотр ... " . $this->rashod ;?></a></li>
            </tr>
        </table>
</body>
</html>
<?php
}
}
$bmw = new Machines;

$bmw->name = "BMW ";
$bmw->machinesKoleso = " R25 ";
$bmw->machinesKapot = " Carbone ";
$bmw->machinesDoor = " dont windows ";
$bmw->color = " yellow ";
$bmw->speed = " 300 ";
$bmw->motor = " 4 ";
$bmw->rashod = " 20 ";
$bmw->sayMachines();

$lexus = new Machines;
$lexus -> name = " Lexus ";
$lexus ->machinesKoleso = "R26 ";
$lexus->machinesKapot = " black ";
$lexus->machinesDoor = " Number";
$lexus->color = " Green ";
$lexus->speed = "301 ";
$lexus->motor = "4,2 ";
$lexus->rashod = "21 ";
$lexus->sayMachines();
var_dump($lexus);
echo "<br>";
var_dump($bmw);


