<?php

class Post
{
    private $title;
    private $text;

    public function __construct(string $title, string $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
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
}

class Lesson extends Post
{
    private $homework;

    public function __construct(string $title, string $text, string $homework)
    {
        parent::__construct($title, $text);
        $this->homework = $homework;
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
//var_dump($lesson);
//
class PaidLesson extends Lesson{
    private $PaidLessonTop;

    public function __construct(string $title, string $text, string $homework, string $PaidLessonTop)
    {
        parent::__construct($title, $text, $homework);

        $this->PaidLessonTop = $PaidLessonTop;
    }
    public function getPaidLessonTop(): string
    {
        return $this->PaidLessonTop;
    }
    public function setPaidLessonTop($PaidLessonTop){
        $this->PaidLessonTop = $PaidLessonTop;
    }
}
$PaidLessonTop = new PaidLesson('Заголовок платного урока',
    'Это платный урок для улучшенного изучеия программирования',
    ' В домашней работе нужно больше читать книг по программированиею',
    'В дополнении к платному уроку идет супер инсайд подпишись на телеграмм ******');

var_dump($PaidLessonTop);
