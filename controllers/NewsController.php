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
        echo $this->view->render('all');


    }

    public function  actionOne()
    {
        $OneNews = new NewsArticle();
        $this->view->oneNews = $OneNews->oneNews($_GET['id']);
        echo $this->view->render('article');

    }


}

