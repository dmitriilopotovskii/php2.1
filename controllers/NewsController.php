<?php
require __DIR__ . './AbstractController.php';
require __DIR__ . '/../models/NewsArticle.php';

class NewsController
    extends AbstractController
{
    protected function GetTemplatePatch()
    {
        return '/../views/news/';

    }


    public function actionAll()
    {
        $News = new NewsArticle();
        $allNews = $News->allNews();
        $this->render('all', ['allNews' => $allNews]);
    }

    public function  actionOne()
    {
        $OneNews = new NewsArticle();
        $oneNews = $OneNews->oneNews($_GET['id']);
        $this->render('article', ['oneNews' => $oneNews]);

    }


}


