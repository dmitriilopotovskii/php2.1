<?php
require __DIR__ . '/../models/NewsArticle.php';
require __DIR__.'/../classes/view.php';

class NewsController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../views/news/');
    }


    public function actionAll()
    {
        $News = new NewsArticle();
        $this->view->allNews = $News->allNews();
        $this->view->display('all');


    }

    public function  actionOne()
    {
        $OneArticle = new NewsArticle();
        $this->view->oneNews = $OneArticle->oneArticle($_GET['id']);
        $this->view->display('article');

    }


}

