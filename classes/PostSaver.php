<?php

class PostSaver
{
    public function savePost(Post $post)
    {
        $file= 'posts.txt';
        $currentFile= file_get_contents($file);
        $decodedClass= json_decode($currentFile);
        $decodedArray= json_decode(json_encode($decodedClass), true);
        $postArray= array('message'=>$post->getMessage());
        $decodedArray[]=$postArray;
        $encodedArray= json_encode($decodedArray);
        file_put_contents($file, $encodedArray);
}
public function getPosts(){
        $classPosts= json_decode(file_get_contents('posts.txt'));
        $posts = [];
        foreach ($classPosts as $classPost){
            $posts[] = new Post($classPost->title, $classPost->date, $classPost->message, $classPost->authorName);
    }
        return $posts;
}
}