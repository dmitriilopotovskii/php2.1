<?php
//require __DIR__ . '/../models/NewsArticle.php';


class AdminController
{
    public function NewsAdd()
    {
        $news = new NewsArticle();
        $news->title = $_POST['title'];
        $news->text = $_POST['text'];
        $news->uploadImg();
        $news->insert();
        header("Location: /");
    }



    public function UpdateNews()
    {
        $article = NewsArticle::findOne($_POST['id']);
        $article->title = $_POST['title'];
        $article->text = $_POST['text'];
        $article->update();
        header("Location: /");


    }

    public function DeleteNews()
    {
        $article = NewsArticle::findOne($_GET['id']);
        $article->Delete();
        header("Location: /");

    }

}
