<?php
declare(strict_types=1);

class Post
{
    // properties
    private string $title;
    private string $date;
    private string $message;
    private string $authorName;

    /// Methods
    // constructor
    public function __construct(string $title, string $date, string $message, string $authorName){
        $this->title=$title;
        $this->date=$date;
        $this->message=$message;
        $this->authorName=$authorName;
    }
    public function getTitle(): string{
        return $this->title;
    }
    public function getDate(): string{
        return $this->date;
    }
    public function getMessage(): string{
        return $this->message;
    }
    public function getAuthorName(): string{
        return $this->authorName;
    }
}

//print_r($_POST);
//echo '<br>';
if (isset($_POST["submit"])){
$userInput = new Post($_POST["title"], $_POST["message"], $_POST["authorName"], $_POST["date"]);}
echo '<br>';
//print_r($userInput);
//echo '<br>';
//print_r(json_encode($_POST));