<?php



abstract class Book
{
    public $id;
    public $name;
    public $author;
    public $file_path;
    public $type;
    public $sort_order;

    function __construct($result)
    {
        $this->id = $result['id'];
        $this->name = $result['name'];
        $this->author = $result['author'];
        $this->file_path = $result['file_path'];
        $this->type = $result['type'];
        $this->sort_order = $result['sort_order'];
    }

    abstract function printInfo();
}

class BookPdf extends Book
{
    public function printInfo()
    {
        echo "<p>
            <img src='images/pdf.jpg', alt='pdf' />
            <a href='{$this->file_path}'> {$this->name} </a> Автор: {$this->author}  
        </p>";
    }

}

class BookTxt extends Book
{
    function printInfo()
    {
        echo "<p>
            <img src='images/txt.jpg', alt='txt' />
            <a href='{$this->file_path}'> {$this->name} </a> Автор: {$this->author}  
        </p>";
    }
}

class BookDoc extends Book
{
    function printInfo()
    {
        echo "<p>
            <img src='images/doc.jpg', alt='doc' />
            <a href='{$this->file_path}'> {$this->name} </a> Автор: {$this->author}  
        </p>";
    }
}

class BookFb2 extends Book
{
    function printInfo()
    {
        echo "<p>
            <img src='images/fb2.jpg', alt='fb2' />
            <a href='{$this->file_path}'> {$this->name} </a> Автор: {$this->author}  
        </p>";
    }
}