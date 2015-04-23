<?php
require __DIR__ . '/../models/NewsArticle.php';


class AdminController
{
    public function NewsAdd()
    {
        $AddNews = new NewsArticle();
        $AddNews->addNews($_POST['title'],$_POST['text'],$_FILES['userfile']['name']);
    }
    public function imgAdd()
    {
        $AddImg = new NewsArticle();
        $AddImg->uploadImg( __DIR__.'/../views/img/');
    }
    public function insertNews()
    {
        $AddNews = new NewsArticle();
        $AddNews->NewsAdd($_POST['title'],$_POST['text'],$_FILES['userfile']['name']);
    }

}