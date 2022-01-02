<?php

class Book
{
    public $name;
    public $url;
    public $author;
   
    // В конструкторе в созданный объект будут записаны переданные данные
    public function __construct($book)
    {
        $this->name = $book['name'];
        $this->url = $book['url'];
        $this->author = $book['author'];
    }
}

class TxtBook extends Book
{
    public $image = 'txt.png';
    
    public function showBook()
    {
        include 'layouts/show_book.php';
    }
}

class DocBook extends Book
{
    public $image = 'doc.png';
    
    public function showBook()
    {
        include 'layouts/show_book.php';
    }
}

class PdfBook extends Book
{
    public $image = 'pdf.png';
    
    public function showBook()
    {
        include 'layouts/show_book.php';
    }
}

class DefaultBook extends Book
{
    public $image = 'default.png';
    
    public function showBook()
    {
        include 'layouts/show_book.php';
    }
}
