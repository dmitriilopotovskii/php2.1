<?php
require __DIR__ . '/../models/NewsArticle.php';


class AdminController
{
    public function actionAdd()
    {
        $AddNews = new NewsArticle();
        $AddNews->addNews($_POST['title'],$_POST['text'],$_FILES['userfile']['name']);
        //header("Location: /");
    }
    public function imgAdd()
    {
        $AddImg = new NewsArticle();
        $AddImg->uploadImg(DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR);
    }
}