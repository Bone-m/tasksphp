<?php

// объявление класса с помощью ключевого слова class
class Transformer{
    // объявление поля x
    x=0;
    // объявление метода конструктора (сюда нам чуть ниже передадут 0)
    function constructor(int x){
        // инициализация поля x 
        // (переданный конструктору 0 превращается в свойство объекта)
        this.x = x
    }
	
    // объявление метода run
    function run(){
        // обращение к собственному атрибуту через this
        this.x += 1
    }
}

// а теперь клиентский код:

// создаем новый экземпляр трансформера с начальной позицией 0
optimus = new Transformer(0)

optimus.run() // приказываем Оптимусу бежать
print optimus.x // выведет 1
optimus.run() // приказывает Оптимусу еще раз бежать
print optimus.x // выведет 2