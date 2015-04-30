<?php
//require __DIR__ . '/../Models/NewsArticle.php';
//require __DIR__.'/../classes/view.php';
namespace App\controllers;
class NewsController
{
    protected $view;
    protected $smarty;

    public function __construct()
    {
        $this->view = new \View(__DIR__ . '/../views/news/');
    }


    public function actionAll()
    {

         $this->view->allNews = App\Models\News::findAll();
         $this->view->display('all');
    }

    public function  actionOne()
    {
        $this->view->Article = App\Models\News::findOne($_GET['id']);
        $this->view->display('article');

    }


}

