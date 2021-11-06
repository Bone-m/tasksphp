<?php
echo 'Напишите простой класс PHP, который отображает вводное сообщение,'
    . '<br>' . ' такое как «Привет всем, я Скотт», где «Скотт» является 
значением аргумента метода в классе:' . '<br>';
class nameHi
{
    public $texts;
    public function bifname()
    {
        return ' «Скотт»';
    }
}
$nameHiOne = new nameHi;
$nameHiOne->texts = 'Привет всем, я';
echo $nameHiOne->texts . $nameHiOne->bifname();




// КАК ЭТО ДОЛЖНО ВЫГЛЯДЕТЬ !!!
//!        1) Объявляю класс 
class user_message
{
    //!        2) Объявляю аргументы класса
    public $message = 'Hello All, I am ';
    //!        3)  Объявляю public функции
    public function introduce($name)
    {
        //!        4) Объявляю условия функции
        return $this->message . $name;
    }
}
//!        5)  Создаю класс
$mymessage = new user_message();
echo $mymessage->introduce('Scott') . "\n";
