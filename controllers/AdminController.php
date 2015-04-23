<?php
require __DIR__ . '/../models/NewsArticle.php';


class AdminController
{
    public function NewsAdd()
    {
        $AddNews = new NewsArticle();
        $AddNews->title = $_GET['title'];
        $AddNews->text = $_GET['text'];
        $AddNews->fileName = $_FILES['userfile']['name'];
        $AddNews->NewsAdd();
    }

    public function imgAdd()
    {
        $AddImg = new NewsArticle();
        $AddImg->uploadImg( __DIR__.'/../views/img/');
    }

    public function UpdateNews()
    {
        $NewsArticle = new NewsArticle;
        $NewsArticle->title = $_GET['title'];
        $NewsArticle->text = $_GET['text'];
        $NewsArticle->NewsUpdate($_GET['id']);

    }

    public function deleteNews()
    {
        $NewsArticle = new NewsArticle;
        $NewsArticle->Delete($_GET['id']);
    }

}
