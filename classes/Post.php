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

}