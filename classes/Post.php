<?php
declare(strict_types=1);

class Post
{
    // properties
    private string $title;
    private string $date;
    private string $content;
    private string $authorName;

    /// Methods
    // constructor
    public function __construct(string $title, string $date, string $content, string $authorName){
        $this->title=$title;
        $this->date=$date;
        $this->content=$content;
        $this->authorName=$authorName;
    }
    public function getTitle(): string{
        return $this->title;
    }
    public function getDate(): string{
        return $this->date;
    }
    public function getContent(): string{
        return $this->content;
    }
    public function getAuthorName(): string{
        return $this->authorName;
    }
}

if (isset($_POST["submit"])){
$userInput = new Post($_POST["title"], $_POST["content"], $_POST["authorName"], $_POST["date"]);}
echo '<br>';
