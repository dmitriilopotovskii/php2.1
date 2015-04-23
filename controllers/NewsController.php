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
        $this->view->allNews = NewsArticle::findAll();
        $this->view->display('all');


    }

    public function  actionOne()
    {
        $this->view->oneNews = NewsArticle::findOne($_GET['id']);
        $this->view->display('article');

    }


}

