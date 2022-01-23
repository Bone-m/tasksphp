<?php

class Work
{
    private $position;
    private $pay;
    private $charge;

    public function sayWork()
    {
        // echo "Позиция: " . $this->position .
        // " Минимальная зп:" . $this->pay ."$;".
        // "Обязаности: " . $this->charge . " <br>" ;
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
                <td>
                    <h4>
                        <?php echo "Позиция: " . $this->position ?>
                    </h4>
                </td>
            </td>

            <tr>
                <td>
                    <?php echo "Минимальная зп: " . $this->pay . '$'?>
                </td>
            </tr>

            <tr>
                <td>
                    <?php echo "Обязаности: " . $this->charge ?>
                </td>
            </tr>

        </table>
        </body>
        </html>
        <?php
    }

    public function setPosition(string $position, int $pay, string $charge)
    {
        $this->position = $position;
        $this->pay = $pay;
        $this->charge = $charge;
    }

    public function getPosition()
    {
        return $this->position . $this->pay . $this->charge;
    }
}

$boss = new Work();
$boss->setPosition("Boss ", 100, "Управление и постановка задач для функционирования отдела ");
$boss->sayWork();

$manager = new Work();
$manager->setPosition("manager ", 70, "Осуществление сделок на высоком уровне ");
$manager->sayWork();

$intern = new Work();
$intern->setPosition("intern ", 20, "Обучение и прохождение на позицию manager ");
$intern->sayWork();