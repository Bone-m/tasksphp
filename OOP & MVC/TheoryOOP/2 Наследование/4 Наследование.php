<?php
class Post
{
    protected $title; // protected или public могут быть наследственными.
    protected $text;

    public function __construct(string $title, $text) // Благодаря публичному public function __construct можем подключить дочерний класс к методам из родительского.
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    { //void в списке параметров означает, что функция не принимает параметров
        $this->title = $title;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }
    //
}
// Наследуем Post как родительский класс,Lesson дочерний
class Lesson extends Post
{
    private $homework;

    public function __construct(string $title, string $text, string $homework)
    {

        parent::__construct($title, $text);
        $this->homework = $homework;
//        $this->title = $title;
//        $this->text = $text;
//        $this->homework = $homework;
    }

    public function getHomework(): string
    {
        return $this->homework;
    }

    public function setHomework(string $homework)
    {
        $this->homework = $homework;
    }
}
$lesson = new Lesson('Заголовок', 'Текст', 'Домашка');
echo 'Название урока: ' . $lesson->getTitle();
$ext = new Lesson('New', 'new Post and new text', 'Home Work just work in home');
echo "New post and just home work" . $ext->getTitle(). $ext->getText() . $ext->getHomework() . "<br>";
var_dump($lesson);
