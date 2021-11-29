<?php

//Конструктор
//Конструктор используется для создания объекта
public function __construct(){
    echo'<br>New object of class'.__CLASS__.'created';
    echo'<br>Method'.__METHOD__.' called';
}
//Dеструктор
public function __destruct(){
    echo'<br>Method'.__METHOD__.' called';
    echo'<br>Object deleted';
    
}
